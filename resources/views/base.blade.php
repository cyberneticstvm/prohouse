<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- title -->
    <title>The PRO House - Business Incorporation Consultant</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="author" content="Cybernetics">
    <!-- description -->
    <meta name="description" content="Business Incorporation, Corporate Banking, Auditing & Accounting, Migration & Study Abroad, Real Estate, Mortgage & Will Writing">
    <!-- keywords -->
    <meta name="keywords" content="Business Incorporation, Corporate Banking, Auditing & Accounting, Migration & Study Abroad, Real Estate, Mortgage & Will Writing">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('/assets/images/prohouse/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('/assets/images/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/assets/images/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/assets/images/apple-touch-icon-114x114.png') }}">
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/bootsnav.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/font-icons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/theme-vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/responsive.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/prohouse.css') }}" />
</head>

<body class="w-100">
    <!-- start header -->
    <header class="no-sticky">
        <!-- start navigation -->
        <nav class="navbar full-width-pull-menu navbar-top-scroll no-border-top nav-box-width no-transition">
            <!-- start navigation panel -->
            <div class="container-fluid nav-header-container h-100px sm-h-70px">
                <!-- start logo -->
                <div class="col-auto ps-0"><a href="{{ route('index') }}" title="PRO House" class="logo"><img src="{{ asset('/assets/images/prohouse/logo/logo-prohouse-black.webp') }}" data-at2x="{{ asset('/assets/images/prohouse/logo/logo-prohouse-black.webp') }}" alt="PRO House"></a></div>
                <!-- end logo -->
                <!-- start main menu -->
                <div class="col-auto pe-0">
                    <div class="menu-wrap full-screen">
                        <div class="row g-0 h-100 justify-content-center">
                            <div class="col-md-6 p-0 text-center z-index-0 d-none d-md-flex flex-column justify-content-center cover-background" style="background-image:url('{{ asset('/assets/images/menu-background-1.png') }}')">
                                <div class="z-index-minus1 opacity-medium bg-extra-dark-gray"></div>
                                <a href="{{ route('index') }}"><img alt="" src="{{ asset('/assets/images/prohouse/logo/logo-prohouse-white.webp') }}" data-at2x="{{ asset('/assets/images/prohouse/logo/logo-prohouse-white.webp') }}"></a>
                                <div class="position-absolute bottom-50 text-center w-100 margin-30px-bottom">
                                    <div class="text-small text-extra-medium-gray">&copy; {{ date('Y') }} The PRO House</div>
                                </div>
                            </div>
                            @include("nav")
                        </div>
                    </div>
                    <!-- end main menu -->
                    <button class="navbar-toggler mobile-toggle" type="button" id="open-button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
            <!-- end navigation panel -->
        </nav>
        <!-- end navigation -->
    </header>
    <!-- end header -->
    @yield("content")
    <!-- start footer -->
    <footer class="footer-strip border-color-extra-light-gray border-top padding-50px-tb sm-padding-30px-tb">
        <div class="container">
            <div class="row align-items-center">
                <!-- start logo -->
                <div class="col-md-2 text-center text-lg-start sm-margin-20px-bottom">
                    <a href="{{ route('index') }}"><img class="footer-logo" src="{{ asset('/assets/images/prohouse/logo/logo-prohouse-black.webp') }}" data-at2x="{{ asset('/assets/images/prohouse/logo/logo-prohouse-black.webp') }}" alt="The PRO House"></a>
                </div>
                <!-- end logo -->
                <!-- start copyright -->
                <div class="col-md-6 text-center text-small alt-font sm-margin-10px-bottom">
                    &copy; {{ date('Y') }} The PRO House.
                </div>
                <!-- end copyright -->
                <!-- start social media -->
                <div class="col-md-3 text-center text-lg-end">
                    <div class="social-icon-style-8 d-inline-block align-middle">
                        <ul class="small-icon mb-0">
                            <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a></li>
                            <li><a class="twitter" href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a class="google" href="https://plus.google.com" target="_blank"><i class="fa-brands fa-google-plus-g"></i></a></li>
                            <li><a class="dribbble" href="https://dribbble.com/" target="_blank"><i class="fa-brands fa-dribbble me-0" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- end social media -->
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- start scroll to top -->
    <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
    <!-- end scroll to top  -->
    <!-- javascript -->
    <script type="text/javascript" src="{{ asset('/assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/bootsnav.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/jquery.nav.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/hamburger-menu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/theme-vendors.min.js') }}"></script>
    <!-- setting -->
    <script type="text/javascript" src="{{ asset('/assets/js/main.js') }}"></script>
</body>

</html>