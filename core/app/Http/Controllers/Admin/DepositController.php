<?php

namespace App\Http\Controllers\Admin;

use App\Constants\Status;
use App\Models\Deposit;
use App\Models\Gateway;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Gateway\PaymentController;
use App\Models\ProductDetail;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    public function pending()
    {
        $pageTitle = 'Pending Payments';
        $deposits = $this->depositData('pending');
        $referaldeposits = Deposit::where('method_code', 6000)->where('status', 5)->with('user')->paginate(getPaginate());
        return view('admin.deposit.log', compact('pageTitle', 'deposits', 'referaldeposits'));
    }


    public function approved()
    {
        $pageTitle = 'Approved Payments';
        $deposits = $this->depositData('approved');
        $referaldeposits = Deposit::where('method_code', 6000)->where('status', 5)->with('user')->paginate(getPaginate());
        return view('admin.deposit.log', compact('pageTitle', 'deposits', 'referaldeposits'));
    }

    public function successful()
    {
        $pageTitle = 'Successful Payments';
        $deposits = $this->depositData('successful');
        $referaldeposits = Deposit::where('method_code', 6000)->where('status', 5)->with('user')->paginate(getPaginate());
        return view('admin.deposit.log', compact('pageTitle', 'deposits', 'referaldeposits'));
    }

    public function rejected()
    {
        $pageTitle = 'Rejected Payments';
        $deposits = $this->depositData('rejected');
        $referaldeposits = Deposit::where('method_code', 6000)->where('status', 5)->with('user')->paginate(getPaginate());
        return view('admin.deposit.log', compact('pageTitle', 'deposits', 'referaldeposits'));
    }

    public function initiated()
    {
        $pageTitle = 'Initiated Payments';
        $deposits = $this->depositData('initiated');
        $referaldeposits = Deposit::where('method_code', 6000)->where('status', 5)->with('user')->paginate(getPaginate());
        return view('admin.deposit.log', compact('pageTitle', 'deposits', 'referaldeposits'));
    }

    public function deposit()
    {
        $pageTitle = 'Payment History';
        $depositData = $this->depositData($scope = null, $summery = true);
        $deposits = $depositData['data'];
        $summery = $depositData['summery'];
        $successful = $summery['successful'];
        $pending = $summery['pending'];
        $rejected = $summery['rejected'];
        $initiated = $summery['initiated'];
        $referaldeposits = Deposit::where('method_code', 6000)->where('status', 5)->with('user')->paginate(getPaginate());
        return view('admin.deposit.log', compact('pageTitle', 'deposits','successful','pending','rejected','initiated', 'referaldeposits'));
    }

    protected function depositData($scope = null,$summery = false)
    {
        if ($scope) {
            $deposits = Deposit::$scope()->with(['user', 'gateway']);
        }else{
            $deposits = Deposit::with(['user', 'gateway']);
        }

        $deposits = $deposits->searchable(['trx','user:username'])->dateFilter();

        $request = request();
        //vai method
        if ($request->method) {
            $method = Gateway::where('alias',$request->method)->firstOrFail();
            $deposits = $deposits->where('method_code',$method->code);
        }

        if (!$summery) {
            return $deposits->orderBy('id','desc')->paginate(getPaginate());
        }else{
            $successful = clone $deposits;
            $pending = clone $deposits;
            $rejected = clone $deposits;
            $initiated = clone $deposits;

            $successfulSummery = $successful->where('status',Status::PAYMENT_SUCCESS)->sum('amount');
            $pendingSummery = $pending->where('status',Status::PAYMENT_PENDING)->sum('amount');
            $rejectedSummery = $rejected->where('status',Status::PAYMENT_REJECT)->sum('amount');
            $initiatedSummery = $initiated->where('status',Status::PAYMENT_INITIATE)->sum('amount');

            return [
                'data'=>$deposits->orderBy('id','desc')->paginate(getPaginate()),
                'summery'=>[
                    'successful'=>$successfulSummery,
                    'pending'=>$pendingSummery,
                    'rejected'=>$rejectedSummery,
                    'initiated'=>$initiatedSummery,
                ]
            ];
        }
    }

    public function details($id)
    {
        $deposit = Deposit::where('id', $id)->with(['user', 'gateway'])->firstOrFail();
        $pageTitle = $deposit->user->username.' requested ' . showAmount($deposit->amount) . ' '.gs('cur_text');
        $details = ($deposit->detail != null) ? json_encode($deposit->detail) : null;
        return view('admin.deposit.detail', compact('pageTitle', 'deposit','details'));
    }


    public function approve($id)
    {
        $deposit = Deposit::where('id',$id)->where('status',Status::PAYMENT_PENDING)->firstOrFail();

        PaymentController::userDataUpdate($deposit,true);

        $notify[] = ['success', 'Payment request approved successfully'];

        return to_route('admin.deposit.pending')->withNotify($notify);
    }

    public function reject(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
            'message' => 'required|string|max:255'
        ]);
        $deposit = Deposit::where('id',$request->id)->firstOrFail();

        $deposit->admin_feedback = $request->message;
        $deposit->status = Status::PAYMENT_REJECT;
        $deposit->save();


        notify($deposit->user, 'DEPOSIT_REJECT', [
            'method_name' => $deposit->gatewayCurrency()->name,
            'method_currency' => $deposit->method_currency,
            'method_amount' => showAmount($deposit->final_amo),
            'amount' => showAmount($deposit->amount),
            'charge' => showAmount($deposit->charge),
            'rate' => showAmount($deposit->rate),
            'trx' => $deposit->trx,
            'rejection_message' => $request->message
        ]);

        $notify[] = ['success', 'Payment request rejected successfully'];
        return  to_route('admin.deposit.pending')->withNotify($notify);

    }
}
