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
    <link rel="icon" href="<?php echo e(url('')); ?>/assets/assets2/images/favicon.svg" type="image/x-icon">
    <!-- [Page specific CSS] start -->
    <link rel="stylesheet" href="<?php echo e(url('')); ?>/assets/assets2/css/plugins/datepicker-bs5.min.css">
    <!-- [Page specific CSS] end -->
    <!-- [Font] Family -->
    <link rel="stylesheet" href="<?php echo e(url('')); ?>/assets/assets2/fonts/inter/inter.css" id="main-font-link">
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="<?php echo e(url('')); ?>/assets/assets2/fonts/tabler-icons.min.css">
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="<?php echo e(url('')); ?>/assets/assets2/fonts/feather.css">
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="<?php echo e(url('')); ?>/assets/assets2/fonts/fontawesome.css">
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="<?php echo e(url('')); ?>/assets/assets2/fonts/material.css"><!-- [Template CSS Files] -->
    <link rel="stylesheet" href="<?php echo e(url('')); ?>/assets/assets2/css/style.css" id="main-style-link">
    <link rel="stylesheet" href="<?php echo e(url('')); ?>/assets/assets2/css/style-preset.css">
</head><!-- [Head] end --><!-- [Body] Start -->
<body data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-layout="vertical" data-pc-direction="ltr"
      data-pc-theme_contrast="" data-pc-theme="light"><!-- [ Pre-loader ] start -->
<div class="page-loader">
    <div class="bar"></div>
</div><!-- [ Pre-loader ] End --><!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
    <div class="navbar-wrapper">


        <?php if(auth()->guard()->check()): ?>
            <div class="navbar-content">
                <div class="card pc-user-card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <img src="<?php echo e(url('')); ?>/assets/assets2/images/user/avatar-1.jpg" alt="user-image"
                                     class="user-avtar wid-45 rounded-circle">
                            </div>

                            <div class="flex-grow-1 ms-3 me-2">
                                <h6 class="mb-0"><?php echo e(Auth::user()->username); ?></h6>
                                <small>Customer</small>
                            </div>

                    </div>
                </div>
                <ul class="pc-navbar">
                    <li class="pc-item">
                        <a href="/" class="pc-link">


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
                            <span  class="pc-mtext">Fund Wallet</span>
                        </a>

                    </li>

                    <li class="pc-item">
                        <a href="/user/orders" class="pc-link">
                            <span class="pc-micon"><svg class="pc-icon"><use xlink:href="#custom-bag"></use>
                                </svg>
                            </span>
                            <span  class="pc-mtext">My Orders</span>
                        </a>

                    </li>


                    <li class="pc-item">
                        <a href="/user/deposit/new" class="pc-link">
                            <span class="pc-micon"><svg class="pc-icon"><use xlink:href="#custom-profile-2user-outline"></use>
                                </svg>
                            </span>
                            <span  class="pc-mtext">Support</span>
                        </a>

                    </li>



                    <hr class="text-muted">


                    <li class="pc-item">
                        <a href="/user/deposit/new" class="pc-link">
                            <span class="pc-micon"><svg class="pc-icon"><use xlink:href="#custom-shopping-bag"></use>
                                </svg>
                            </span>
                            <span  class="pc-mtext">Change Password</span>
                        </a>

                    </li>

                    <li class="pc-item">
                        <a href="/user/deposit/new" class="pc-link">
                            <span class="pc-micon"><svg class="pc-icon"><use xlink:href="#custom-logout"></use>
                                </svg>
                            </span>
                            <span  class="pc-mtext">Log Out</span>
                        </a>

                    </li>

                </ul>
            </div>
        <?php else: ?>

            <div class="navbar-content">
                <div class="card pc-user-card">


                    <div class="card">
                        <div class="card-body">
                            <a style="background: #20CCB4FF; border: 0px" href="/user/login" class="btn btn-dark btn-lg w-100 my-">Login</a>

                            <a href="/user/register" class="btn btn-dark btn-lg w-100 my-3">Register</a>
                        </div>


                    </div>

                </div>

            </div>

        <?php endif; ?>
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

                <img src="<?php echo e(url('')); ?>/assets/assets2/images/logo-dark.svg">

            </ul>

        </div><!-- [Mobile Media Block end] -->

        <?php if(auth()->guard()->check()): ?>
            <div class="ms-auto">
                <ul class="list-unstyled">
                    <li class="dropdown pc-h-item">
                        <a href="/login" class="btn btn-dark btn-sm">NGN <?php echo e(number_format(Auth::user()->balance, 2)); ?></a>
                    </li>
                </ul>
            </div>
        <?php else: ?>

            <div class="ms-auto">
                <ul class="list-unstyled">
                    <li class="dropdown pc-h-item">
                        <a href="/login" class="btn btn-dark btn-sm">Login</a>
                    </li>
                </ul>
            </div>

        <?php endif; ?>
    </div>
</header>


<div class="offcanvas pc-announcement-offcanvas offcanvas-end" tabindex="-1" id="announcement"
     aria-labelledby="announcementLabel">
    <div class="offcanvas-header"><h5 class="offcanvas-title" id="announcementLabel">What's new announcement?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body"><p class="text-span">Today</p>
        <div class="card mb-3">
            <div class="card-body">
                <div class="align-items-center d-flex flex-wrap gap-2 mb-3">
                    <div class="badge bg-light-success f-12">Big News</div>
                    <p class="mb-0 text-muted">2 min ago</p><span class="badge dot bg-warning"></span></div>
                <h5 class="mb-3">Able Pro is Redesigned</h5>
                <p class="text-muted">Able Pro is completely renowed with high aesthetics User Interface.</p><img
                    src="<?php echo e(url('')); ?>/assets/assets2/images/layout/img-announcement-1.png" alt="img"
                    class="img-fluid mb-3">
                <div class="row">
                    <div class="col-12">
                        <div class="d-grid"><a class="btn btn-outline-secondary" href="https://1.envato.market/zNkqj6"
                                               target="_blank">Check Now</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <div class="align-items-center d-flex flex-wrap gap-2 mb-3">
                    <div class="badge bg-light-warning f-12">Offer</div>
                    <p class="mb-0 text-muted">2 hour ago</p><span class="badge dot bg-warning"></span></div>
                <h5 class="mb-3">Able Pro is in best offer price</h5>
                <p class="text-muted">Download Able Pro exclusive on themeforest with best price.</p><a
                    href="https://1.envato.market/zNkqj6" target="_blank"><img
                        src="<?php echo e(url('')); ?>/assets/assets2/images/layout/img-announcement-2.png" alt="img"
                        class="img-fluid"></a></div>
        </div>
        <p class="text-span mt-4">Yesterday</p>
        <div class="card mb-3">
            <div class="card-body">
                <div class="align-items-center d-flex flex-wrap gap-2 mb-3">
                    <div class="badge bg-light-primary f-12">Blog</div>
                    <p class="mb-0 text-muted">12 hour ago</p><span class="badge dot bg-warning"></span></div>
                <h5 class="mb-3">Featured Dashboard Template</h5>
                <p class="text-muted">Do you know Able Pro is one of the featured dashboard template selected by
                    Themeforest team.?</p><img src="<?php echo e(url('')); ?>/assets/assets2/images/layout/img-announcement-3.png"
                                               alt="img"
                                               class="img-fluid"></div>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <div class="align-items-center d-flex flex-wrap gap-2 mb-3">
                    <div class="badge bg-light-primary f-12">Announcement</div>
                    <p class="mb-0 text-muted">12 hour ago</p><span class="badge dot bg-warning"></span></div>
                <h5 class="mb-3">Buy Once - Get Free Updated lifetime</h5>
                <p class="text-muted">Get the lifetime free updates once you purchase the Able Pro.</p><img
                    src="<?php echo e(url('')); ?>/assets/assets2/images/layout/img-announcement-4.png" alt="img" class="img-fluid">
            </div>
        </div>
    </div>
</div><!-- [ Header ] end --><!-- [ Main Content ] start -->

<?php echo $__env->yieldContent('content'); ?>


<footer class="pc-footer">
    <div class="footer-wrapper container-fluid">
        <div class="row">
            <div class="col my-1"><p class="m-0">Able Pro &#9829; crafted by Team <a
                        href="https://themeforest.net/user/phoenixcoded" target="_blank">Phoenixcoded</a></p></div>
            <div class="col-auto my-1">
                <ul class="list-inline footer-link mb-0">
                    <li class="list-inline-item"><a href="../index.html">Home</a></li>
                    <li class="list-inline-item"><a href="https://phoenixcoded.gitbook.io/able-pro/" target="_blank">Documentation</a>
                    </li>
                    <li class="list-inline-item"><a href="https://phoenixcoded.authordesk.app/"
                                                    target="_blank">Support</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer><!-- Required Js -->
<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="<?php echo e(url('')); ?>/assets/assets2/js/plugins/popper.min.js"></script>
<script src="<?php echo e(url('')); ?>/assets/assets2/js/plugins/simplebar.min.js"></script>
<script src="<?php echo e(url('')); ?>/assets/assets2/js/plugins/bootstrap.min.js"></script>
<script src="<?php echo e(url('')); ?>/assets/assets2/js/fonts/custom-font.js"></script>
<script src="<?php echo e(url('')); ?>/assets/assets2/js/pcoded.js"></script>
<script src="<?php echo e(url('')); ?>/assets/assets2/js/dz.js"></script>
<script src="<?php echo e(url('')); ?>/assets/assets2/js/plugins/feather.min.js"></script>
<script src="<?php echo e(url('')); ?>/assets/assets2/js/pages/ac-slider.js"></script>
<script>layout_change('false');</script>

<script>layout_theme_contrast_change('false');</script>
<script>change_box_container('false');</script>
<script>layout_caption_change('true');</script>
<script>layout_rtl_change('false');</script>
<script>preset_change('preset-1');</script>
<script>main_layout_change('vertical');</script><!-- [Page Specific JS] start --><!-- bootstrap-datepicker -->
<script src="<?php echo e(url('')); ?>/assets/assets2/js/plugins/datepicker-full.min.js"></script>
<script src="<?php echo e(url('')); ?>/assets/assets2/js/plugins/apexcharts.min.js"></script>
<script src="<?php echo e(url('')); ?>/assets/assets2/js/plugins/peity-vanilla.min.js"></script>
<script src="<?php echo e(url('')); ?>/assets/assets2/js/pages/course-dashboard.js"></script><!-- [Page Specific JS] end -->
<!-- [ Main Content ] end --><!-- Required Js -->
<script src="<?php echo e(url('')); ?>/assets/assets2/js/plugins/popper.min.js"></script>
<script src="<?php echo e(url('')); ?>/assets/assets2/js/plugins/simplebar.min.js"></script>
<script src="<?php echo e(url('')); ?>/assets/assets2/js/plugins/bootstrap.min.js"></script>
<script src="<?php echo e(url('')); ?>/assets/assets2/js/fonts/custom-font.js"></script>
<script src="<?php echo e(url('')); ?>/assets/assets2/js/pcoded.js"></script>
<script src="<?php echo e(url('')); ?>/assets/assets2/js/plugins/feather.min.js"></script>
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
                                src="<?php echo e(url('')); ?>/assets/assets2/images/customizer/caption-on.svg" alt="img"
                                class="img-fluid"> </a><a
                            href="#" data-bs-toggle="tooltip" title="Horizontal"
                            data-value="horizontal"><img
                                src="<?php echo e(url('')); ?>/assets/assets2/images/customizer/horizontal.svg" alt="img"
                                class="img-fluid"> </a><a href="#"
                                                          data-bs-toggle="tooltip"
                                                          title="Color Header"
                                                          data-value="color-header"><img
                                src="<?php echo e(url('')); ?>/assets/assets2/images/customizer/color-header.svg" alt="img"
                                class="img-fluid"> </a><a
                            href="#" data-bs-toggle="tooltip" title="Compact"
                            data-value="compact"><img src="<?php echo e(url('')); ?>/assets/assets2/images/customizer/compact.svg"
                                                      alt="img"
                                                      class="img-fluid"> </a><a href="#"
                                                                                data-bs-toggle="tooltip" title="Tab"
                                                                                data-value="tab"><img
                                src="<?php echo e(url('')); ?>/assets/assets2/images/customizer/tab.svg" alt="img" class="img-fluid"></a>
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
                                        src="<?php echo e(url('')); ?>/assets/assets2/images/customizer/caption-on.svg"
                                        alt="img" class="img-fluid"></button>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-grid">
                                <button class="preset-btn btn-img btn" data-value="false"
                                        onclick="layout_caption_change('false');" data-bs-toggle="tooltip"
                                        title="Caption Hide"><img
                                        src="<?php echo e(url('')); ?>/assets/assets2/images/customizer/caption-off.svg"
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
                                        <img src="<?php echo e(url('')); ?>/assets/assets2/images/customizer/ltr.svg" alt="img"
                                             class="img-fluid">
                                    </button>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-grid">
                                    <button class="preset-btn btn-img btn" data-value="true"
                                            onclick="layout_rtl_change('true');" data-bs-toggle="tooltip" title="RTL">
                                        <img src="<?php echo e(url('')); ?>/assets/assets2/images/customizer/rtl.svg" alt="img"
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
                                            src="<?php echo e(url('')); ?>/assets/assets2/images/customizer/full.svg" alt="img"
                                            class="img-fluid"></button>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-grid">
                                    <button class="preset-btn btn-img btn" data-value="true"
                                            onclick="change_box_container('true')" data-bs-toggle="tooltip"
                                            title="Fixed Width"><img
                                            src="<?php echo e(url('')); ?>/assets/assets2/images/customizer/fixed.svg"
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



<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/project/fadded/core/resources/views/templates/basic/layouts/main2.blade.php ENDPATH**/ ?>