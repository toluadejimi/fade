<!DOCTYPE html>
<html lang="en"><!-- [Head] start -->
<head><title>FADDED | LOGSTORE</title><!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
          content="Fadded Log strore">
    <meta name="keywords"
          content="Fadded logstore">
    <meta name="author" content="Phoenixcoded"><!-- [Favicon] icon -->
    <link rel="icon" href="{{url('')}}/assets/assets2/images/favicon.svg" type="image/x-icon">
    <!-- [Page specific CSS] start -->
    <link rel="stylesheet" href="{{url('')}}/assets/assets2/css/plugins/datepicker-bs5.min.css">
    <!-- [Page specific CSS] end -->
    <!-- [Font] Family -->
    <link rel="stylesheet" href="{{url('')}}/assets/assets2/fonts/inter/inter.css" id="main-font-link">
    <link rel="stylesheet" href="{{url('')}}/assets/style2.css">

    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="{{url('')}}/assets/assets2/fonts/tabler-icons.min.css">
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="{{url('')}}/assets/assets2/fonts/feather.css">
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="{{url('')}}/assets/assets2/fonts/fontawesome.css">
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="{{url('')}}/assets/assets2/fonts/material.css"><!-- [Template CSS Files] -->
    <link rel="stylesheet" href="{{url('')}}/assets/assets2/css/style.css" id="main-style-link">
    <link rel="stylesheet" href="{{url('')}}/assets/assets2/css/style-preset.css">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script> --}}


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>



    <style>
        .carousel {
            position: relative;
            overflow: hidden;
            width: 100%;
        }

        .carousel-images {
            display: flex;
            transition: transform 0.5s ease-in-out;
            width: 100%;
        }

        .carousel-images a {
            flex: 0 0 100%;
            text-align: center;
        }

        .carousel-images img {
            width: 100%;
            height: auto;
        }

        .carousel-buttons {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }

        .carousel-buttons button {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
        }

        .carousel-buttons button:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }
    </style>

</head><!-- [Head] end --><!-- [Body] Start -->
<body data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-layout="vertical" data-pc-direction="ltr"
      data-pc-theme_contrast="" data-pc-theme="light"><!-- [ Pre-loader ] start -->
<div class="page-loader">
    <div class="bar"></div>
</div><!-- [ Pre-loader ] End --><!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
    <div class="navbar-wrapper">


        @auth
            <div class="navbar-content">
                <div class="card pc-user-card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <img src="{{url('')}}/assets/assets2/images/user/avatar-1.jpg" alt="user-image"
                                     class="user-avtar wid-45 rounded-circle">
                            </div>

                            <div class="flex-grow-1 ms-3 me-2">
                                <a href="/user/dashboard"><h6 class="mb-0">{{Auth::user()->username}}</h6></a>
                                <small>Customer</small>
                            </div>

                        </div>
                    </div>
                    <ul class="pc-navbar">
                        <li class="pc-item">
                            <a href="/products" class="pc-link">
                            <span class="pc-micon">
                                <svg class="pc-icon"><use xlink:href="#custom-home"></use>
                                </svg> </span>
                                <span class="pc-mtext">Dashboard</span>
                            </a>
                        </li>


                        <li class="pc-item">
                            <a href="/user/deposit/new" class="pc-link">
                            <span class="pc-micon"><svg class="pc-icon"><use xlink:href="#custom-direct-inbox"></use>
                                </svg>
                            </span>
                                <span class="pc-mtext">Fund Wallet</span>
                            </a>

                        </li>

                        <li class="pc-item">
                            <a href="/user/orders" class="pc-link">
                            <span class="pc-micon"><svg class="pc-icon"><use xlink:href="#custom-bag"></use>
                                </svg>
                            </span>
                                <span class="pc-mtext">My Orders</span>
                            </a>

                        </li>


                        <li class="pc-item">
                            <a href="/user/refer" class="pc-link">
                            <span class="pc-micon"><svg class="pc-icon"><use xlink:href="#custom-note-1"></use>
                                </svg>
                            </span>
                                <span class="pc-mtext">Referral</span>
                            </a>

                        </li>


                        <li class="pc-item">
                            <a href="https://linktr.ee/faddedsocials" class="pc-link">
                            <span class="pc-micon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_346_411)">
                                <path
                                    d="M11.944 0C8.77112 0.014807 5.73324 1.28562 3.4949 3.53446C1.25656 5.78329 -3.4549e-05 8.82708 7.12435e-10 12C7.12441e-10 15.1826 1.26428 18.2348 3.51472 20.4853C5.76516 22.7357 8.8174 24 12 24C15.1826 24 18.2348 22.7357 20.4853 20.4853C22.7357 18.2348 24 15.1826 24 12C24 8.8174 22.7357 5.76516 20.4853 3.51472C18.2348 1.26428 15.1826 0 12 0L11.944 0ZM16.906 7.224C17.006 7.222 17.227 7.247 17.371 7.364C17.4672 7.44672 17.5283 7.5629 17.542 7.689C17.558 7.782 17.578 7.995 17.562 8.161C17.382 10.059 16.6 14.663 16.202 16.788C16.034 17.688 15.703 17.989 15.382 18.018C14.686 18.083 14.157 17.558 13.482 17.116C12.426 16.423 11.829 15.992 10.804 15.316C9.619 14.536 10.387 14.106 11.062 13.406C11.239 13.222 14.309 10.429 14.369 10.176C14.376 10.144 14.383 10.026 14.313 9.964C14.243 9.902 14.139 9.923 14.064 9.94C13.958 9.96467 12.271 11.0797 9.003 13.285C8.523 13.615 8.089 13.775 7.701 13.765C7.273 13.757 6.449 13.524 5.836 13.325C5.084 13.08 4.487 12.951 4.539 12.536C4.56567 12.32 4.86333 12.099 5.432 11.873C8.93 10.349 11.2627 9.34433 12.43 8.859C15.762 7.473 16.455 7.232 16.906 7.224Z"
                                    fill="#919295"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_346_411">
                                <rect width="24" height="24" fill="white"/>
                                </clipPath>
                                </defs>
                                </svg>

                            </span>
                                <span class="pc-mtext">Support</span>
                            </a>

                        </li>


                        <li class="pc-item">
                            <a href="/user/rules" class="pc-link">
                            <span class="pc-micon">
                                <svg width="24" height="24" viewBox="0 0 48 48" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_39_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="3"
                                      width="48" height="42">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M24 5L2 43H46L24 5Z" fill="white"
                                      stroke="white" stroke-width="4" stroke-linejoin="round"/>
                                <path d="M24 35V36M24 19L24.008 29" stroke="black" stroke-width="4"
                                      stroke-linecap="round"/>
                                </mask>
                                <g mask="url(#mask0_39_2)">
                                <path d="M0 0H48V48H0V0Z" fill="#878787"/>
                                </g>
                                </svg>


                            </span>
                                <span class="pc-mtext">Rules</span>
                            </a>

                        </li>



                        <li class="pc-item">
                            <a href="/user/termofuse" class="pc-link">
                            <span class="pc-micon"><svg class="pc-icon"><use xlink:href="#custom-document-filter"></use>
                                </svg>
                            </span>
                                <span class="pc-mtext"> Terms Of Use</span>
                            </a>

                        </li>





                        <li class="pc-item">
                            <a href="https://chat.whatsapp.com/CuSck16moiWFH8njS7pE7C" class="pc-link">
                            <span class="pc-micon">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_346_414" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0"
                                      y="0" width="20" height="20">
                                <path d="M0.5 0.5H19.5V19.5H0.5V0.5Z" fill="white"/>
                                </mask>
                                <g mask="url(#mask0_346_414)">
                                <path
                                    d="M11.79 0.640019L11.22 0.560019C9.50693 0.312676 7.75885 0.557374 6.17954 1.26558C4.60023 1.97379 3.25476 3.11634 2.3 4.56002C1.28416 5.94 0.678585 7.57876 0.552979 9.28771C0.427373 10.9967 0.786836 12.7063 1.59 14.22C1.6722 14.3717 1.72337 14.5383 1.74054 14.71C1.75771 14.8817 1.74053 15.055 1.69 15.22C1.28 16.63 0.9 18.05 0.5 19.54L1 19.39C2.35 19.03 3.7 18.67 5.05 18.34C5.33494 18.2808 5.63112 18.3087 5.9 18.42C7.1112 19.0111 8.43482 19.3363 9.78205 19.3738C11.1293 19.4113 12.4689 19.1601 13.7111 18.6372C14.9533 18.1144 16.0692 17.3318 16.9841 16.3421C17.899 15.3525 18.5915 14.1785 19.0153 12.8992C19.4392 11.6198 19.5844 10.2646 19.4414 8.92442C19.2983 7.58429 18.8703 6.29026 18.1859 5.12917C17.5016 3.96809 16.5769 2.96681 15.4737 2.19254C14.3706 1.41827 13.1146 0.888923 11.79 0.640019ZM14.31 13.76C13.9466 14.0854 13.5034 14.3087 13.0256 14.407C12.5478 14.5054 12.0524 14.4754 11.59 14.32C9.49456 13.73 7.67661 12.4152 6.46 10.61C5.99528 9.97154 5.6217 9.27149 5.35 8.53002C5.20285 8.09979 5.17632 7.63749 5.27327 7.19325C5.37023 6.74902 5.58698 6.33981 5.9 6.01002C6.05239 5.81553 6.25981 5.67145 6.49526 5.59654C6.7307 5.52162 6.98325 5.51935 7.22 5.59002C7.42 5.64002 7.56 5.93002 7.74 6.15002C7.886 6.56302 8.057 6.96702 8.25 7.36002C8.39642 7.56053 8.45758 7.81082 8.42011 8.05626C8.38263 8.30169 8.24958 8.52234 8.05 8.67002C7.6 9.07002 7.67 9.40002 7.99 9.85002C8.69745 10.8692 9.6736 11.6723 10.81 12.17C11.13 12.31 11.37 12.34 11.58 12.01C11.67 11.88 11.79 11.77 11.89 11.65C12.47 10.92 12.29 10.93 13.21 11.33C13.503 11.453 13.787 11.597 14.06 11.76C14.33 11.92 14.74 12.09 14.8 12.33C14.8577 12.5904 14.8425 12.8616 14.7561 13.1139C14.6696 13.3662 14.5153 13.5898 14.31 13.76Z"
                                    fill="#919295"/>
                                </g>
                                </svg>


                            </span>
                                <span class="pc-mtext">Join our community</span>
                            </a>

                        </li>


                        <hr class="text-muted">


                        <li class="pc-item">
                            <a href="/user/change-password" class="pc-link">
                            <span class="pc-micon"><svg class="pc-icon"><use xlink:href="#custom-shopping-bag"></use>
                                </svg>
                            </span>
                                <span class="pc-mtext">Change Password</span>
                            </a>

                        </li>

                        <li class="pc-item">
                            <a href="/user/logout" class="pc-link">
                            <span class="pc-micon"><svg class="pc-icon"><use xlink:href="#custom-logout"></use>
                                </svg>
                            </span>
                                <span class="pc-mtext">Log Out</span>
                            </a>

                        </li>

                    </ul>
                </div>
                @else

                    <div class="navbar-content">
                        <div class="card pc-user-card">


                            <div class="card">
                                <div class="card-body">
                                    <a style="background: #20CCB4FF; border: 0px" href="/user/login"
                                       class="btn btn-dark btn-lg w-100 my-">Login</a>

                                    <a href="/user/register" class="btn btn-dark btn-lg w-100 my-3">Register</a>
                                </div>


                            </div>

                        </div>

                    </div>

                @endauth
            </div>
</nav><!-- [ Sidebar Menu ] end --><!-- [ Header Topbar ] start -->


<header class="pc-header">
    <div class="header-wrapper"><!-- [Mobile Media Block] start -->
        <div class="me-auto pc-mob-drp">
            <ul class="list-unstyled"><!-- ======= Menu collapse Icon ===== -->
                <li class="pc-h-item pc-sidebar-collapse">
                    <a href="#" class="pc-head-link ms-0"
                       id="sidebar-hide">
                        <i class="ti ti-menu-2">
                        </i>
                    </a>
                </li>
                <li class="pc-h-item pc-sidebar-popup">
                    <a href="##" class="pc-head-link ms-0" id="mobile-collapse">
                        <i class="ti ti-menu-2">

                        </i>
                    </a>

                </li>

                <img src="{{url('')}}/assets/assets2/images/logo-dark.svg">

            </ul>

        </div><!-- [Mobile Media Block end] -->

        @auth
            <div class="ms-auto">
                <ul class="list-unstyled">
                    <li class="dropdown pc-h-item">
                        <a href="/user/deposit/new"
                           class="btn btn-dark btn-sm">NGN {{number_format(Auth::user()->balance, 2)}}</a>
                    </li>
                </ul>
            </div>
        @else

            <div class="ms-auto">
                <ul class="list-unstyled">
                    <li class="dropdown pc-h-item">
                        <a href="/user/login" class="btn btn-dark btn-sm"><i class="fa fa-lock"></i></a>
                    </li>
                </ul>
            </div>

        @endauth
    </div>
</header>




@yield('content')

<style>
    .float {
        position: fixed; /* Position it fixed to ensure it's always in view */
        bottom: 20px; /* Adjust the distance from the bottom */
        left: 180px; /* Adjust the distance from the right */
        background-color: rgba(255, 0, 0, 0);
        border: none; /* Remove default border */
        padding: 0; /* Remove padding */
        z-index: 1000; /* Make sure it's above other elements */
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out; /* Smooth transition for floating effect */
    }

    /* Floating effect */
    .float:hover {
        transform: translateY(-10px); /* Move it up when hovered */
    }

    /* Optional: Add a smooth continuous floating effect */
    @keyframes float {
        0% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
        100% { transform: translateY(0); }
    }

    .float {
        animation: float 5s ease-in-out infinite; /* Apply the floating animation */
    }

</style>

<a href="https://t.me/faddedsocialsgroup" class="float" target="_blank">
    <svg width="181" height="40" viewBox="0 0 181 57" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M13.5227 21.4545V36H10.2273L4.97159 28.358H4.88636V36H0.9375V21.4545H4.28977L9.46023 29.0682H9.57386V21.4545H13.5227Z" fill="#D9D9D9"/>
        <path d="M15.9906 36V21.4545H26.4736V24.6364H19.9395V27.1364H25.9338V30.3182H19.9395V32.8182H26.4452V36H15.9906Z" fill="#D9D9D9"/>
        <path d="M29.032 36V21.4545H39.515V24.6364H32.9809V27.1364H38.9752V30.3182H32.9809V32.8182H39.4866V36H29.032Z" fill="#D9D9D9"/>
        <path d="M47.67 36H42.0734V21.4545H47.6132C49.1094 21.4545 50.402 21.7457 51.4911 22.3281C52.5848 22.9058 53.4276 23.7391 54.0195 24.8281C54.616 25.9124 54.9143 27.2121 54.9143 28.7273C54.9143 30.2424 54.6184 31.5445 54.0266 32.6335C53.4347 33.7178 52.5966 34.5511 51.5124 35.1335C50.4281 35.7112 49.1473 36 47.67 36ZM46.0223 32.6477H47.528C48.2477 32.6477 48.8608 32.5317 49.3675 32.2997C49.8788 32.0677 50.2671 31.6676 50.5322 31.0994C50.8021 30.5313 50.9371 29.7405 50.9371 28.7273C50.9371 27.714 50.7998 26.9233 50.5251 26.3551C50.2553 25.7869 49.8575 25.3868 49.332 25.1548C48.8111 24.9228 48.1719 24.8068 47.4143 24.8068H46.0223V32.6477Z" fill="#D9D9D9"/>
        <path d="M61.9258 36V21.4545H65.8746V27.1364H71.1019V21.4545H75.0508V36H71.1019V30.3182H65.8746V36H61.9258Z" fill="#D9D9D9"/>
        <path d="M77.5258 36V21.4545H88.0087V24.6364H81.4746V27.1364H87.469V30.3182H81.4746V32.8182H87.9803V36H77.5258Z" fill="#D9D9D9"/>
        <path d="M90.5672 36V21.4545H94.516V32.8182H100.397V36H90.5672Z" fill="#D9D9D9"/>
        <path d="M102.593 36V21.4545H108.871C109.951 21.4545 110.896 21.6676 111.705 22.0938C112.515 22.5199 113.145 23.1188 113.594 23.8906C114.044 24.6624 114.269 25.5644 114.269 26.5966C114.269 27.6383 114.037 28.5402 113.573 29.3026C113.114 30.0649 112.467 30.652 111.634 31.0639C110.806 31.4759 109.837 31.6818 108.729 31.6818H104.979V28.6136H107.934C108.398 28.6136 108.793 28.5331 109.12 28.3722C109.451 28.2064 109.705 27.9721 109.88 27.669C110.06 27.366 110.15 27.0085 110.15 26.5966C110.15 26.1799 110.06 25.8248 109.88 25.5312C109.705 25.233 109.451 25.0057 109.12 24.8494C108.793 24.6884 108.398 24.608 107.934 24.608H106.542V36H102.593Z" fill="#D9D9D9"/>
        <path d="M181 28.5C181 44.2401 168.177 57 152.359 57C136.541 57 123.717 44.2401 123.717 28.5C123.717 12.7599 136.541 0 152.359 0C168.177 0 181 12.7599 181 28.5Z" fill="#D9D9D9"/>
        <path d="M142.119 21.6041C142.119 19.0438 143.198 16.5884 145.118 14.7781C147.038 12.9677 149.643 11.9506 152.359 11.9506C155.075 11.9506 157.679 12.9677 159.6 14.7781C161.52 16.5884 162.599 19.0438 162.599 21.6041C162.599 21.9699 162.753 22.3206 163.027 22.5793C163.302 22.8379 163.674 22.9832 164.062 22.9832C164.45 22.9832 164.822 22.8379 165.096 22.5793C165.37 22.3206 165.524 21.9699 165.524 21.6041C165.524 19.4874 164.95 17.4059 163.856 15.5575C162.762 13.7091 161.184 12.1552 159.274 11.0434C157.363 9.93164 155.183 9.29901 152.939 9.20563C150.696 9.11226 148.465 9.56124 146.458 10.5099C144.451 11.4586 142.734 12.8754 141.472 14.6257C140.209 16.376 139.442 18.4017 139.244 20.5101C139.046 22.6186 139.423 24.7397 140.34 26.672C141.257 28.6043 142.682 30.2835 144.481 31.55C146.024 32.6364 147.801 33.3905 149.686 33.7592C149.948 34.3131 150.396 34.7701 150.961 35.0596C151.526 35.3491 152.177 35.455 152.813 35.3608C153.448 35.2667 154.033 34.9778 154.476 34.5388C154.92 34.0998 155.198 33.5352 155.267 32.9323C155.336 32.3294 155.193 31.7219 154.858 31.2037C154.524 30.6856 154.019 30.2856 153.419 30.0657C152.82 29.8458 152.16 29.8183 151.542 29.9874C150.925 30.1565 150.383 30.5128 150.002 31.0011C147.757 30.5007 145.758 29.3005 144.327 27.595C142.896 25.8895 142.118 23.7785 142.119 21.6041ZM143.582 21.6041C143.582 20.0819 144.028 18.5893 144.87 17.2906C145.713 15.9919 146.919 14.9374 148.356 14.2432C149.793 13.549 151.405 13.2419 153.015 13.3558C154.626 13.4697 156.171 14.0001 157.482 14.8887C158.793 15.7773 159.819 16.9896 160.446 18.3923C161.074 19.7949 161.278 21.3335 161.038 22.8388C160.798 24.3441 160.122 25.7576 159.084 26.924C158.046 28.0904 156.688 28.9643 155.157 29.4496C154.37 28.8355 153.38 28.4994 152.359 28.4995C151.295 28.4995 150.321 28.8566 149.56 29.4496C147.818 28.897 146.303 27.8425 145.23 26.4348C144.158 25.0271 143.581 23.3374 143.582 21.6041ZM152.359 36.7739C153.061 36.7742 153.753 36.6157 154.377 36.3116C155.001 36.0075 155.538 35.5667 155.944 35.0262C156.349 34.4857 156.611 33.8614 156.708 33.2056C156.804 32.5498 156.733 31.8818 156.499 31.2576H164.793C166.151 31.2576 167.453 31.7661 168.413 32.6713C169.374 33.5765 169.913 34.8042 169.913 36.0844V36.7739C169.913 40.074 167.685 42.8652 164.522 44.7628C161.342 46.6715 157.037 47.8064 152.359 47.8064C147.68 47.8064 143.377 46.6715 140.195 44.7628C137.032 42.8652 134.804 40.074 134.804 36.7739V36.0844C134.804 34.8042 135.344 33.5765 136.304 32.6713C137.264 31.7661 138.566 31.2576 139.924 31.2576H141.912C143.783 33.0585 146.142 34.3416 148.732 34.9673C149.522 36.0582 150.853 36.7739 152.359 36.7739Z" fill="black"/>
    </svg>
</a>

<footer class="pc-footer">
    <div class="footer-wrapper container-fluid">
        <div class="text-center">
            <h6 class="">2024 | FADDED LOGS STORE</h6>
        </div>
    </div>





</footer><!-- Required Js -->





<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{url('')}}/assets/assets2/js/plugins/popper.min.js"></script>
<script src="{{url('')}}/assets/assets2/js/plugins/simplebar.min.js"></script>
<script src="{{url('')}}/assets/assets2/js/plugins/bootstrap.min.js"></script>
<script src="{{url('')}}/assets/assets2/js/fonts/custom-font.js"></script>
<script src="{{url('')}}/assets/assets2/js/pcoded.js"></script>
<script src="{{url('')}}/assets/assets2/js/dz.js"></script>
<script src="{{url('')}}/assets/assets2/js/plugins/feather.min.js"></script>
<script src="{{url('')}}/assets/assets2/js/pages/ac-slider.js"></script>
<script>layout_change('false');</script>

<script>layout_theme_contrast_change('false');</script>
<script>change_box_container('false');</script>
<script>layout_caption_change('true');</script>
<script>layout_rtl_change('false');</script>
<script>preset_change('preset-1');</script>
<script>main_layout_change('vertical');</script><!-- [Page Specific JS] start --><!-- bootstrap-datepicker -->
<script src="{{url('')}}/assets/assets2/js/plugins/datepicker-full.min.js"></script>
<script src="{{url('')}}/assets/assets2/js/plugins/apexcharts.min.js"></script>
<script src="{{url('')}}/assets/assets2/js/plugins/peity-vanilla.min.js"></script>
<script src="{{url('')}}/assets/assets2/js/pages/course-dashboard.js"></script><!-- [Page Specific JS] end -->
<!-- [ Main Content ] end --><!-- Required Js -->
<script src="{{url('')}}/assets/assets2/js/plugins/popper.min.js"></script>
<script src="{{url('')}}/assets/assets2/js/plugins/simplebar.min.js"></script>
<script src="{{url('')}}/assets/assets2/js/plugins/bootstrap.min.js"></script>
<script src="{{url('')}}/assets/assets2/js/fonts/custom-font.js"></script>
<script src="{{url('')}}/assets/assets2/js/pcoded.js"></script>
<script src="{{url('')}}/assets/assets2/js/plugins/feather.min.js"></script>
<script>
    layout_change("false");
</script>
<script>
    layout_theme_contrast_change("false");
</script>
<script>
    change_box_container("false");
</script>
<script>
    layout_caption_change("true");
</script>
<script>
    layout_rtl_change("false");
</script>
<script>
    preset_change("preset-1");
</script>
<script>
    main_layout_change("vertical");
</script>


<div class="pct-c-btn"><a href="##" data-bs-toggle="offcanvas"
                          data-bs-target="#offcanvas_pc_layout"><i class="ph-duotone ph-gear-six"></i></a></div>
<div class="offcanvas border-0 pct-offcanvas offcanvas-end" tabindex="-1" id="offcanvas_pc_layout">
    <div class="offcanvas-header"><h5 class="offcanvas-title">Settings</h5>
        <button type="button" class="btn btn-icon btn-link-danger ms-auto" data-bs-dismiss="offcanvas"
                aria-label="Close"><i class="ti ti-x"></i></button>
    </div>
    <div class="pct-body customizer-body">
        <div class="offcanvas-body py-0">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="pc-dark"><h6 class="mb-1">Theme Mode</h6>
                        <p class="text-muted text-sm">Choose light or dark mode or Auto</p>
                        <div class="row theme-color theme-layout">
                            <div class="col-4">
                                <div class="d-grid">
                                    <button class="preset-btn btn active" data-value="true"
                                            onclick="layout_change('light');" data-bs-toggle="tooltip" title="Light">
                                        <svg class="pc-icon text-warning">
                                            <use xlink:href="#custom-sun-1"></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-grid">
                                    <button class="preset-btn btn" data-value="false" onclick="layout_change('dark');"
                                            data-bs-toggle="tooltip" title="Dark">
                                        <svg class="pc-icon">
                                            <use xlink:href="#custom-moon"></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-grid">
                                    <button class="preset-btn btn" data-value="default"
                                            onclick="layout_change_default();" data-bs-toggle="tooltip"
                                            title="Automatically sets the theme based on user's operating system's color scheme.">
                                        <span class="pc-lay-icon d-flex align-items-center justify-content-center"><i
                                                class="ph-duotone ph-cpu"></i></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item"><h6 class="mb-1">Theme Contrast</h6>
                    <p class="text-muted text-sm">Choose theme contrast</p>
                    <div class="row theme-contrast">
                        <div class="col-6">
                            <div class="d-grid">
                                <button class="preset-btn btn" data-value="true"
                                        onclick="layout_theme_contrast_change('true');" data-bs-toggle="tooltip"
                                        title="True">
                                    <svg class="pc-icon">
                                        <use xlink:href="#custom-mask"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-grid">
                                <button class="preset-btn btn active" data-value="false"
                                        onclick="layout_theme_contrast_change('false');" data-bs-toggle="tooltip"
                                        title="False">
                                    <svg class="pc-icon">
                                        <use xlink:href="#custom-mask-1-outline"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item"><h6 class="mb-1">Custom Theme</h6>
                    <p class="text-muted text-sm">Choose your primary theme color</p>
                    <div class="theme-color preset-color"><a href="#" data-bs-toggle="tooltip"
                                                             title="Blue" class="active" data-value="preset-1"><i
                                class="ti ti-checks"></i></a> <a href="#" data-bs-toggle="tooltip"
                                                                 title="Indigo" data-value="preset-2"><i
                                class="ti ti-checks"></i></a> <a href="#" data-bs-toggle="tooltip"
                                                                 title="Purple" data-value="preset-3"><i
                                class="ti ti-checks"></i></a> <a href="#" data-bs-toggle="tooltip"
                                                                 title="Pink" data-value="preset-4"><i
                                class="ti ti-checks"></i></a> <a href="#" data-bs-toggle="tooltip"
                                                                 title="Red" data-value="preset-5"><i
                                class="ti ti-checks"></i></a> <a href="#" data-bs-toggle="tooltip"
                                                                 title="Orange" data-value="preset-6"><i
                                class="ti ti-checks"></i></a> <a href="#" data-bs-toggle="tooltip"
                                                                 title="Yellow" data-value="preset-7"><i
                                class="ti ti-checks"></i></a> <a href="#" data-bs-toggle="tooltip"
                                                                 title="Green" data-value="preset-8"><i
                                class="ti ti-checks"></i></a> <a href="#" data-bs-toggle="tooltip"
                                                                 title="Teal" data-value="preset-9"><i
                                class="ti ti-checks"></i></a> <a href="#" data-bs-toggle="tooltip"
                                                                 title="Cyan" data-value="preset-10"><i
                                class="ti ti-checks"></i></a></div>
                </li>
                <li class="list-group-item"><h6 class="mb-1">Theme layout</h6>
                    <p class="text-muted text-sm">Choose your layout</p>
                    <div class="theme-main-layout d-flex align-center gap-1 w-100"><a href="#"
                                                                                      data-bs-toggle="tooltip"
                                                                                      title="Vertical" class="active"
                                                                                      data-value="vertical"><img
                                src="{{url('')}}/assets/assets2/images/customizer/caption-on.svg" alt="img"
                                class="img-fluid"> </a><a
                            href="#" data-bs-toggle="tooltip" title="Horizontal"
                            data-value="horizontal"><img
                                src="{{url('')}}/assets/assets2/images/customizer/horizontal.svg" alt="img"
                                class="img-fluid"> </a><a href="#"
                                                          data-bs-toggle="tooltip"
                                                          title="Color Header"
                                                          data-value="color-header"><img
                                src="{{url('')}}/assets/assets2/images/customizer/color-header.svg" alt="img"
                                class="img-fluid"> </a><a
                            href="#" data-bs-toggle="tooltip" title="Compact"
                            data-value="compact"><img src="{{url('')}}/assets/assets2/images/customizer/compact.svg"
                                                      alt="img"
                                                      class="img-fluid"> </a><a href="#"
                                                                                data-bs-toggle="tooltip" title="Tab"
                                                                                data-value="tab"><img
                                src="{{url('')}}/assets/assets2/images/customizer/tab.svg" alt="img" class="img-fluid"></a>
                    </div>
                </li>
                <li class="list-group-item"><h6 class="mb-1">Sidebar Caption</h6>
                    <p class="text-muted text-sm">Sidebar Caption Hide/Show</p>
                    <div class="row theme-color theme-nav-caption">
                        <div class="col-6">
                            <div class="d-grid">
                                <button class="preset-btn btn-img btn active" data-value="true"
                                        onclick="layout_caption_change('true');" data-bs-toggle="tooltip"
                                        title="Caption Show"><img
                                        src="{{url('')}}/assets/assets2/images/customizer/caption-on.svg"
                                        alt="img" class="img-fluid"></button>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-grid">
                                <button class="preset-btn btn-img btn" data-value="false"
                                        onclick="layout_caption_change('false');" data-bs-toggle="tooltip"
                                        title="Caption Hide"><img
                                        src="{{url('')}}/assets/assets2/images/customizer/caption-off.svg"
                                        alt="img" class="img-fluid"></button>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="pc-rtl"><h6 class="mb-1">Theme Layout</h6>
                        <p class="text-muted text-sm">LTR/RTL</p>
                        <div class="row theme-color theme-direction">
                            <div class="col-6">
                                <div class="d-grid">
                                    <button class="preset-btn btn-img btn active" data-value="false"
                                            onclick="layout_rtl_change('false');" data-bs-toggle="tooltip" title="LTR">
                                        <img src="{{url('')}}/assets/assets2/images/customizer/ltr.svg" alt="img"
                                             class="img-fluid">
                                    </button>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-grid">
                                    <button class="preset-btn btn-img btn" data-value="true"
                                            onclick="layout_rtl_change('true');" data-bs-toggle="tooltip" title="RTL">
                                        <img src="{{url('')}}/assets/assets2/images/customizer/rtl.svg" alt="img"
                                             class="img-fluid">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item pc-box-width">
                    <div class="pc-container-width"><h6 class="mb-1">Layout Width</h6>
                        <p class="text-muted text-sm">Choose Full or Container Layout</p>
                        <div class="row theme-color theme-container">
                            <div class="col-6">
                                <div class="d-grid">
                                    <button class="preset-btn btn-img btn active" data-value="false"
                                            onclick="change_box_container('false')" data-bs-toggle="tooltip"
                                            title="Full Width"><img
                                            src="{{url('')}}/assets/assets2/images/customizer/full.svg" alt="img"
                                            class="img-fluid"></button>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-grid">
                                    <button class="preset-btn btn-img btn" data-value="true"
                                            onclick="change_box_container('true')" data-bs-toggle="tooltip"
                                            title="Fixed Width"><img
                                            src="{{url('')}}/assets/assets2/images/customizer/fixed.svg"
                                            alt="img" class="img-fluid"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-grid">
                        <button class="btn btn-light-danger" id="layoutreset">Reset Layout</button>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
</body><!-- [Body] end --></html>



