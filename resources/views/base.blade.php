<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-5EDQJMNP71"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-5EDQJMNP71');
    </script>
    <!-- title -->
    <title>The PRO House - Business Setup Consultant in UAE and Russia</title>
    <link rel="canonical" href="https://theprohouse.org" />
    <meta name="twitter:title" content="The PRO House">
    <meta name="twitter:description" content="Our understanding of diverse cultures and global business practices positions us as a reliable partner for those seeking services beyond their borders.">
    <meta name="twitter:url" content="https://x.com/the_pro_house">
    <meta name="twitter:card" content="The PRO House">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="author" content="Cybernetics">
    <!-- description -->
    <meta name="description" content="Business Incorporation, Corporate Banking, Auditing & Accounting, Migration & Study Abroad, Real Estate, Mortgage & Will Writing. We do business in UAE and Russia">
    <!-- keywords -->
    <meta name="keywords" content="Business Incorporation, Corporate Banking, Auditing & Accounting, Migration & Study Abroad, Real Estate, Mortgage & Will Writing">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('/assets/images/prohouse/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('/assets/images/prohouse/favicon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/assets/images/prohouse/favicon.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/assets/images/prohouse/favicon.png') }}">
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/bootsnav.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/font-icons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/theme-vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/responsive.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/prohouse.css') }}" />
    <link href="{{ asset('/assets/css/mystickyelement.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Whatsapp -->
    <div class="mystickyelements-fixed mystickyelements-position-right mystickyelements-position-screen-center mystickyelements-position-mobile-right mystickyelements-on-hover mystickyelements-size-medium mystickyelements-mobile-size-medium mystickyelements-templates-default">
        <div class="mystickyelement-lists-wrap">
            <ul class="mystickyelements-lists mystickyno-minimize">
                <li id="mystickyelements-social-whatsapp" class="mystickyelements-social-icon-li mystickyelements-social-whatsapp  element-desktop-on element-mobile-on">
                    <span class="mystickyelements-social-icon social-whatsapp social-custom" style="background: #000">
                        <a href="https://api.whatsapp.com/send?phone=97142277348&text=Hello!%20I%20am%20interested%20in%20your%20service" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp"></i></a>
                    </span>
                    <span class="mystickyelements-social-text" style="background: #000;">
                        <a href="https://api.whatsapp.com/send?phone=97142277348&text=Hello!%20I%20am%20interested%20in%20your%20service" target="_blank" rel="noopener">WhatsApp</a>
                    </span>
                </li>
            </ul>
        </div>
    </div>
    <!-- End Whatsapp -->
    @include("nav")
    <div class="sidebar-wrapper mobile-height">
        @yield("content")
        <!-- start footer -->
        <footer class="footer-center-logo bg-light-gray padding-five-tb sm-padding-30px-tb">
            <div class="container">
                <div class="row align-items-center">
                    <!-- start copyright -->
                    <div class="col-lg-4 col-md-5 text-small text-center alt-font sm-margin-15px-bottom">
                        &copy; {{ date('Y') }} THE PRO HOUSE.
                    </div>
                    <!-- end copyright -->
                    <!-- start logo -->
                    <div class="col-lg-4 col-md-2 text-center sm-margin-10px-bottom">
                        <a href="{{ route('index') }}"><img class="footer-logo" src="{{ asset('/assets/images/prohouse/logo/logo-prohouse-black.webp') }}" data-at2x="{{ asset('/assets/images/prohouse/logo/logo-prohouse-black.webp') }}" alt="Pofo" rel="noreferrer"></a>
                    </div>
                    <!-- end logo -->
                    <!-- start social media -->
                    <div class="col-lg-4 col-md-5 text-center">
                        <span class="alt-font text-small margin-20px-right md-margin-15px-right">On social networks</span>
                        <div class="social-icon-style-8 d-inline-block align-middle">
                            <ul class="small-icon mb-0">
                                <li><a class="facebook" href="https://www.facebook.com/" target="_blank" rel="noreferrer"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a></li>
                                <li><a class="twitter" href="https://x.com/the_pro_house" target="_blank" rel="noreferrer"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a class="instagram" href="https://instagram.com/theprohouseae" target="_blank" rel="noreferrer"><i class="fa-brands fa-instagram me-0" aria-hidden="true"></i></a></li>
                                <li><a class="linkedin" href="https://www.linkedin.com/in/the-pro-house" target="_blank" rel="noreferrer"><i class="fa-brands fa-linkedin me-0" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end social media -->
                </div>
            </div>
        </footer>
        <!-- end footer -->
    </div>
    <!-- start scroll to top -->
    <a class="scroll-top-arrow" href="javascript:void(0);" rel="noreferrer"><i class="ti-arrow-up"></i></a>
    <!-- end scroll to top  -->
    <!-- javascript -->
    <script type="text/javascript" src="{{ asset('/assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/bootsnav.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/jquery.nav.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/hamburger-menu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/theme-vendors.min.js') }}"></script>
    <!-- setting -->
    <script type="text/javascript" src="{{ asset('/assets/js/main.js') }}"></script>
    <script>
        $(function() {
            $(".mystickyelements-fixed").hover(function() {
                $("#mystickyelements-social-whatsapp").addClass("elements-active elements-hover-active");
                $(".mystickyelements-fixed").addClass("mystickyelements-on-click");
            });

            $(".mystickyelements-fixed").mouseleave(function() {
                $("#mystickyelements-social-whatsapp").removeClass("elements-active elements-hover-active");
                $(".mystickyelements-fixed").removeClass("mystickyelements-on-click");
            })
        });
    </script>
</body>

</html>