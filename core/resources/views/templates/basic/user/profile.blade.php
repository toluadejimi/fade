@extends($activeTemplate.'layouts.main2')
@section('content')

    <div class="pc-container">
        <div class="pc-content">


            <div class="container">
                <div class="row gy-4 mt-3">
                    <div class="col-xl-12 col-sm-12">

                        <div class="card">
                            <div class="card-body">

                                <div class="row">

                                    <div class="col-12 d-flex justify-content-center">

                                        <div class="flex-shrink-0">
                                            <img src="{{url('')}}/assets/assets2/images/user/avatar-1.jpg"
                                                 alt="user-image"
                                                 class="user-avtar wid-90 rounded-circle">

                                        </div>

                                    </div>

                                    <div class="col-12 d-flex justify-content-center">
                                        <p class="my-1">{{Auth::user()->username}}</p>
                                    </div>

                                    <div class="col-12 d-flex justify-content-center">
                                        <p class="mb-4 ">{{Auth::user()->email}}</p>
                                    </div>


                                </div>


                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row gy-4 mt-3">
                    <div class="col-xl-6 col-sm-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="row">

                                    <div class="col-12 d-flex justify-content-center">

                                        <div class="col-12 d-flex justify-content-center">
                                            <h4 class="my-2">Total Spent</h4>
                                        </div>

                                    </div>


                                    <div class="col-12 d-flex justify-content-center">
                                        <p class="mb-4 ">NGN {{number_format($spent, 2)}}</p>
                                    </div>


                                </div>


                            </div>

                        </div>
                    </div>

                    <div class="col-xl-6 col-sm-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="row">

                                    <div class="col-12 d-flex justify-content-center">

                                        <div class="col-12 d-flex justify-content-center">
                                            <h4 class="my-2">Total Bought</h4>
                                        </div>

                                    </div>


                                    <div class="col-12 d-flex justify-content-center">
                                        <p class="mb-4 "> {{number_format($orders, 2)}}</p>
                                    </div>


                                </div>


                            </div>

                        </div>
                    </div>

                    <div class="col-xl-12 col-sm-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="row">

                                    <div class="col-xl-12 col-sm-12 my-3">


                                        <a href="/user/change-password" class="pc-link">
                                            <span class="pc-micon"><svg class="pc-icon"><use xlink:href="#custom-shopping-bag"></use>
                                                </svg>
                                            </span>
                                            <span class="pc-mtext">Change Password</span>
                                        </a>

                                    </div>



                                    <div class="col-xl-12 col-sm-12">

                                        <a href="/user/logout" class="pc-link">
                                            <span class="pc-micon"><svg class="pc-icon"><use xlink:href="#custom-logout"></use>
                                                </svg>
                                            </span>
                                            <span class="pc-mtext">Log Out</span>
                                        </a>

                                    </div>



                                </div>


                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>




    </div>

    <!-- Page Content End-->

@endsection
