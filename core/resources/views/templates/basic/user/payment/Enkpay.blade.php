@extends($activeTemplate.'layouts.main2')
@section('content')
    <div class="container">

        <div class="row justify-content-center">

            @if ($errors->any())
                <div class="alert alert-danger my-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            @if (session()->has('error'))
                <div class="alert alert-danger mt-2">
                    {{ session()->get('error') }}
                </div>
            @endif



            <div class="col-md-6">
                <div class="card border-0">
                    <div class="card-header">
                    </div>
                    <div class="card-body p-5">
                        <ul class="list-group list-group-flush text-center">
                            <p class="text-center px-0 my-3">
                                @lang('You are about to be redirected to make payment of')
                            </p>

                            <a style="background: #20CCB4FF; border: 0px" href="https://streamable.com/cumu01"
                               class="btn btn-dark btn-sm w-20 p-2">Learn how to fund your wallet</a>


                            <p class="text-center px-0 my-5">
                                <h6>{{__($deposit->method_currency)}} {{showAmount($deposit->final_amo)}} </h6>
                            </p>


                        </ul>


                        <a href="{{ $data->url }}"
                           style="background: #20CCB4FF; border: 0px; color:#ffffff;"
                           class="btn btn-main btn-lg w-100 pill p-3"
                        <svg class="cart me-2" width="16" height="16" viewBox="0 0 18 18" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17.5158 2.01275C17.9478 0.81775 16.7898 -0.34025 15.5948 0.0927503L0.989804 5.37475C-0.209196 5.80875 -0.354196 7.44475 0.748804 8.08375L5.4108 10.7828L9.5738 6.61975C9.76241 6.43759 10.015 6.3368 10.2772 6.33908C10.5394 6.34135 10.7902 6.44652 10.9756 6.63193C11.161 6.81734 11.2662 7.06815 11.2685 7.33035C11.2708 7.59255 11.17 7.84515 10.9878 8.03375L6.8248 12.1968L9.5248 16.8587C10.1628 17.9617 11.7988 17.8158 12.2328 16.6178L17.5158 2.01275Z"
                                    fill="white"/>
                            </svg>
                            PAY NOW
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

