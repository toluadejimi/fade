<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->
<head>
    <title>Fadded | Logstore</title>
    <!-- [Meta] -->
    <meta charset="utf-8"/>
    <meta
        name="viewport"
        content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui"
    />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta
        name="description"
        content="Fadded | Logstore"
    />
    <meta
        name="keywords"
        content=""
    />
    <meta name="author" content="Phoenixcoded"/>
    <!-- [Favicon] icon -->
    <link rel="icon" href="{{ url('') }}/assets/assets2/images/favicon.svg" type="image/x-icon"/>
    <!-- [Font] Family -->
    <link
        rel="stylesheet"
        href="{{ url('') }}/assets/assets2/fonts/inter/inter.css"
        id="main-font-link"
    />
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="{{ url('') }}/assets/assets2/fonts/tabler-icons.min.css"/>
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="{{ url('') }}/assets/assets2/fonts/feather.css"/>
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="{{ url('') }}/assets/assets2/fonts/fontawesome.css"/>
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="{{ url('') }}/assets/assets2/fonts/material.css"/>
    <!-- [Template CSS Files] -->
    <link
        rel="stylesheet"
        href="{{ url('') }}/assets/assets2/css/style.css"
        id="main-style-link"
    />
    <link rel="stylesheet" href="{{ url('') }}/assets/assets2/css/style-preset.css"/>
</head
><!-- [Head] end --><!-- [Body] Start -->
<body
    data-pc-preset="preset-1"
    data-pc-sidebar-caption="true"
    data-pc-layout="vertical"
    data-pc-direction="ltr"
    data-pc-theme_contrast=""
    data-pc-theme="light"
>
<!-- [ Pre-loader ] start -->
<div class="page-loader">
    <div class="bar"></div>
</div>
<!-- [ Pre-loader ] End -->
<div class="auth-main">
    <div class="auth-wrapper v2">
        <div class="auth-sidecontent">
            <img
                src="{{ url('') }}/assets/assets2/images/authentication/img-auth-sideimg.jpg"
                alt="images"
                class="img-fluid img-auth-side"
            />
        </div>
        <div class="auth-form">
            <div class="card my-5">
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session()->has('message'))
                        <div class="alert pill alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    @if (session()->has('error'))
                        <div class="alert pill alert-danger">
                            {{ session()->get('error') }}
                        </div>
                    @endif


                    <div class="text-center">
                        <a href="/"
                        ><img src="{{ url('') }}/assets/assets2/images/logo-dark.svg" alt="img"
                            /></a>

                        <form method="POST" action="{{ route('user.login') }}" class="verify-gcaptcha">
                            @csrf




                            <h5 class="my-3">Login Your Account</h5>

                            <div class="row gy-4">
                                <div class="col-12">
                                    <div class="position-relative">
                                        <div class="mb-3">
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="floatingInput"
                                                placeholder="username / Email Address"
                                                id="email" name="username" value="{{ old('username') }}"
                                                placeholder="infoname@mail.com"
                                            />
                                        </div>


                                        <div class="mb-3">
                                            <input
                                                type="password" name="password"
                                                class="form-control"
                                                id="floatingInput"
                                                placeholder="Enter your password"
                                            />
                                        </div>


                                    </div>
                                </div>

                            </div>

                            <div class="d-flex mt-1 justify-content-between align-items-center">
                                <div class="form-check">
                                    <input
                                        class="form-check-input input-primary"
                                        type="checkbox"
                                        id="customCheckc1"
                                        checked=""
                                    />
                                    <label name="checkbox" id="keepMe" class="form-check-label text-muted"
                                           for="customCheckc1"
                                    >Remember me?</label
                                    >
                                </div>
                                <h6 class="text-secondary f-w-400 mb-0">
                                    <a href="{{ route('user.password.request') }}">Forgot Password?</a>
                                </h6>
                            </div>

                            <div class="d-grid mt-4">
                                <button style="background: #20CCB4FF; border: 0px" type="submit" class="btn btn-primary">Login</button>
                            </div>


                        </form>


                        <div class="d-flex justify-content-between align-items-end mt-4">
                            <h6 class="f-w-500 mb-0">Don't have an Account?</h6>
                            <a style="color: #20CCB4FF;" href="/user/register" class="link-primary"
                            >Create Account</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end --><!-- Required Js -->
    <script src="{{ url('') }}/assets/assets2/js/plugins/popper.min.js"></script>
    <script src="{{ url('') }}/assets/assets2/js/plugins/simplebar.min.js"></script>
    <script src="{{ url('') }}/assets/assets2/js/plugins/bootstrap.min.js"></script>
    <script src="{{ url('') }}/assets/assets2/js/fonts/custom-font.js"></script>
    <script src="{{ url('') }}/assets/assets2/js/pcoded.js"></script>
    <script src="{{ url('') }}/assets/assets2/js/plugins/feather.min.js"></script>
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
    <div class="pct-c-btn">
        <a
            href="login-v2.html#"
            data-bs-toggle="offcanvas"
            data-bs-target="#offcanvas_pc_layout"
        ><i class="ph-duotone ph-gear-six"></i
            ></a>
    </div>
    <div
        class="offcanvas border-0 pct-offcanvas offcanvas-end"
        tabindex="-1"
        id="offcanvas_pc_layout"
    >
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Settings</h5>
            <button
                type="button"
                class="btn btn-icon btn-link-danger ms-auto"
                data-bs-dismiss="offcanvas"
                aria-label="Close"
            >
                <i class="ti ti-x"></i>
            </button>
        </div>
        <div class="pct-body customizer-body">
            <div class="offcanvas-body py-0">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="pc-dark">
                            <h6 class="mb-1">Theme Mode</h6>
                            <p class="text-muted text-sm">
                                Choose light or dark mode or Auto
                            </p>
                            <div class="row theme-color theme-layout">
                                <div class="col-4">
                                    <div class="d-grid">
                                        <button
                                            class="preset-btn btn active"
                                            data-value="true"
                                            onclick="layout_change('light');"
                                            data-bs-toggle="tooltip"
                                            title="Light"
                                        >
                                            <svg class="pc-icon text-warning">
                                                <use xlink:href="#custom-sun-1"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="d-grid">
                                        <button
                                            class="preset-btn btn"
                                            data-value="false"
                                            onclick="layout_change('dark');"
                                            data-bs-toggle="tooltip"
                                            title="Dark"
                                        >
                                            <svg class="pc-icon">
                                                <use xlink:href="#custom-moon"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="d-grid">
                                        <button
                                            class="preset-btn btn"
                                            data-value="default"
                                            onclick="layout_change_default();"
                                            data-bs-toggle="tooltip"
                                            title="Automatically sets the theme based on user's operating system's color scheme."
                                        >
                        <span
                            class="pc-lay-icon d-flex align-items-center justify-content-center"
                        ><i class="ph-duotone ph-cpu"></i
                            ></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h6 class="mb-1">Theme Contrast</h6>
                        <p class="text-muted text-sm">Choose theme contrast</p>
                        <div class="row theme-contrast">
                            <div class="col-6">
                                <div class="d-grid">
                                    <button
                                        class="preset-btn btn"
                                        data-value="true"
                                        onclick="layout_theme_contrast_change('true');"
                                        data-bs-toggle="tooltip"
                                        title="True"
                                    >
                                        <svg class="pc-icon">
                                            <use xlink:href="#custom-mask"></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-grid">
                                    <button
                                        class="preset-btn btn active"
                                        data-value="false"
                                        onclick="layout_theme_contrast_change('false');"
                                        data-bs-toggle="tooltip"
                                        title="False"
                                    >
                                        <svg class="pc-icon">
                                            <use xlink:href="#custom-mask-1-outline"></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h6 class="mb-1">Custom Theme</h6>
                        <p class="text-muted text-sm">Choose your primary theme color</p>
                        <div class="theme-color preset-color">
                            <a
                                href="login-v2.html#!"
                                data-bs-toggle="tooltip"
                                title="Blue"
                                class="active"
                                data-value="preset-1"
                            ><i class="ti ti-checks"></i
                                ></a>
                            <a
                                href="login-v2.html#!"
                                data-bs-toggle="tooltip"
                                title="Indigo"
                                data-value="preset-2"
                            ><i class="ti ti-checks"></i
                                ></a>
                            <a
                                href="login-v2.html#!"
                                data-bs-toggle="tooltip"
                                title="Purple"
                                data-value="preset-3"
                            ><i class="ti ti-checks"></i
                                ></a>
                            <a
                                href="login-v2.html#!"
                                data-bs-toggle="tooltip"
                                title="Pink"
                                data-value="preset-4"
                            ><i class="ti ti-checks"></i
                                ></a>
                            <a
                                href="login-v2.html#!"
                                data-bs-toggle="tooltip"
                                title="Red"
                                data-value="preset-5"
                            ><i class="ti ti-checks"></i
                                ></a>
                            <a
                                href="login-v2.html#!"
                                data-bs-toggle="tooltip"
                                title="Orange"
                                data-value="preset-6"
                            ><i class="ti ti-checks"></i
                                ></a>
                            <a
                                href="login-v2.html#!"
                                data-bs-toggle="tooltip"
                                title="Yellow"
                                data-value="preset-7"
                            ><i class="ti ti-checks"></i
                                ></a>
                            <a
                                href="login-v2.html#!"
                                data-bs-toggle="tooltip"
                                title="Green"
                                data-value="preset-8"
                            ><i class="ti ti-checks"></i
                                ></a>
                            <a
                                href="login-v2.html#!"
                                data-bs-toggle="tooltip"
                                title="Teal"
                                data-value="preset-9"
                            ><i class="ti ti-checks"></i
                                ></a>
                            <a
                                href="login-v2.html#!"
                                data-bs-toggle="tooltip"
                                title="Cyan"
                                data-value="preset-10"
                            ><i class="ti ti-checks"></i
                                ></a>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h6 class="mb-1">Theme layout</h6>
                        <p class="text-muted text-sm">Choose your layout</p>
                        <div class="theme-main-layout d-flex align-center gap-1 w-100">
                            <a
                                href="login-v2.html#!"
                                data-bs-toggle="tooltip"
                                title="Vertical"
                                class="active"
                                data-value="vertical"
                            ><img
                                    src="{{ url('') }}/assets/assets2/images/customizer/caption-on.svg"
                                    alt="img"
                                    class="img-fluid"
                                /> </a
                            ><a
                                href="login-v2.html#!"
                                data-bs-toggle="tooltip"
                                title="Horizontal"
                                data-value="horizontal"
                            ><img
                                    src="{{ url('') }}/assets/assets2/images/customizer/horizontal.svg"
                                    alt="img"
                                    class="img-fluid"
                                /> </a
                            ><a
                                href="login-v2.html#!"
                                data-bs-toggle="tooltip"
                                title="Color Header"
                                data-value="color-header"
                            ><img
                                    src="{{ url('') }}/assets/assets2/images/customizer/color-header.svg"
                                    alt="img"
                                    class="img-fluid"
                                /> </a
                            ><a
                                href="login-v2.html#!"
                                data-bs-toggle="tooltip"
                                title="Compact"
                                data-value="compact"
                            ><img
                                    src="{{ url('') }}/assets/assets2/images/customizer/compact.svg"
                                    alt="img"
                                    class="img-fluid"
                                /> </a
                            ><a
                                href="login-v2.html#!"
                                data-bs-toggle="tooltip"
                                title="Tab"
                                data-value="tab"
                            ><img
                                    src="{{ url('') }}/assets/assets2/images/customizer/tab.svg"
                                    alt="img"
                                    class="img-fluid"
                                /></a>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h6 class="mb-1">Sidebar Caption</h6>
                        <p class="text-muted text-sm">Sidebar Caption Hide/Show</p>
                        <div class="row theme-color theme-nav-caption">
                            <div class="col-6">
                                <div class="d-grid">
                                    <button
                                        class="preset-btn btn-img btn active"
                                        data-value="true"
                                        onclick="layout_caption_change('true');"
                                        data-bs-toggle="tooltip"
                                        title="Caption Show"
                                    >
                                        <img
                                            src="{{ url('') }}/assets/assets2/images/customizer/caption-on.svg"
                                            alt="img"
                                            class="img-fluid"
                                        />
                                    </button>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-grid">
                                    <button
                                        class="preset-btn btn-img btn"
                                        data-value="false"
                                        onclick="layout_caption_change('false');"
                                        data-bs-toggle="tooltip"
                                        title="Caption Hide"
                                    >
                                        <img
                                            src="{{ url('') }}/assets/assets2/images/customizer/caption-off.svg"
                                            alt="img"
                                            class="img-fluid"
                                        />
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="pc-rtl">
                            <h6 class="mb-1">Theme Layout</h6>
                            <p class="text-muted text-sm">LTR/RTL</p>
                            <div class="row theme-color theme-direction">
                                <div class="col-6">
                                    <div class="d-grid">
                                        <button
                                            class="preset-btn btn-img btn active"
                                            data-value="false"
                                            onclick="layout_rtl_change('false');"
                                            data-bs-toggle="tooltip"
                                            title="LTR"
                                        >
                                            <img
                                                src="{{ url('') }}/assets/assets2/images/customizer/ltr.svg"
                                                alt="img"
                                                class="img-fluid"
                                            />
                                        </button>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-grid">
                                        <button
                                            class="preset-btn btn-img btn"
                                            data-value="true"
                                            onclick="layout_rtl_change('true');"
                                            data-bs-toggle="tooltip"
                                            title="RTL"
                                        >
                                            <img
                                                src="{{ url('') }}/assets/assets2/images/customizer/rtl.svg"
                                                alt="img"
                                                class="img-fluid"
                                            />
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item pc-box-width">
                        <div class="pc-container-width">
                            <h6 class="mb-1">Layout Width</h6>
                            <p class="text-muted text-sm">
                                Choose Full or Container Layout
                            </p>
                            <div class="row theme-color theme-container">
                                <div class="col-6">
                                    <div class="d-grid">
                                        <button
                                            class="preset-btn btn-img btn active"
                                            data-value="false"
                                            onclick="change_box_container('false')"
                                            data-bs-toggle="tooltip"
                                            title="Full Width"
                                        >
                                            <img
                                                src="{{ url('') }}/assets/assets2/images/customizer/full.svg"
                                                alt="img"
                                                class="img-fluid"
                                            />
                                        </button>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-grid">
                                        <button
                                            class="preset-btn btn-img btn"
                                            data-value="true"
                                            onclick="change_box_container('true')"
                                            data-bs-toggle="tooltip"
                                            title="Fixed Width"
                                        >
                                            <img
                                                src="{{ url('') }}/assets/assets2/images/customizer/fixed.svg"
                                                alt="img"
                                                class="img-fluid"
                                            />
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="d-grid">
                            <button class="btn btn-light-danger" id="layoutreset">
                                Reset Layout
                            </button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>
<!-- [Body] end -->
</html>

