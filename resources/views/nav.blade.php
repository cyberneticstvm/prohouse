<!-- start navigation -->
<nav class="navbar no-margin-bottom bootsnav alt-font bg-white sidebar-nav sidebar-nav-style-1 navbar-expand-lg">
    <!-- start logo -->
    <div class="col-12 sidenav-header">
        <div class="logo-holder">
            <a href="{{ route('index') }}" class="d-inline-block logo"><img alt="Pofo" src="{{ asset('/assets/images/prohouse/logo/logo-prohouse-black.webp') }}" data-at2x="{{ asset('/assets/images/prohouse/logo/logo-prohouse-black.webp') }}" /></a>
        </div>
        <!-- end logo -->
        <button class="navbar-toggler mobile-toggle" type="button" id="mobileToggleSidenav">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
    <div class="col-12 px-0 mt-5">
        <div id="navbar-menu" class="collapse navbar-collapse no-padding">
            <ul class="nav navbar-nav navbar-left-sidebar font-weight-500">
                <li class="dropdown">
                    <a href="{{ route('index') }}" title="Home">Home</a>
                </li>
                <li class="dropdown">
                    <a data-bs-toggle="dropdown" href="{{ route('index') }}" title="About ProHouse">About PRO House </a>
                </li>
                <li class="dropdown">
                    <a data-bs-toggle="dropdown" href="#" title="Services">Services <i class="fa-solid fa-angle-right"></i></a>
                    <ul class="dropdown-menu second-level">
                        <li class="dropdown">
                            <a href="{{ route('index') }}" title="Business Incorporation" data-bs-toggle="dropdown">Business Incorporation</a>
                        </li>
                        <li class="dropdown">
                            <a href="{{ route('index') }}" title="Corporate Banking" data-bs-toggle="dropdown">Corporate Banking</a>
                        </li>
                        <li class="dropdown">
                            <a href="{{ route('index') }}" title="Auditing & Accounting" data-bs-toggle="dropdown">Auditing & Accounting</a>
                        </li>
                        <li class="dropdown">
                            <a href="{{ route('index') }}" title="Study Abroad & Migration" data-bs-toggle="dropdown">Study Abroad & Migration</a>
                        </li>
                        <li class="dropdown">
                            <a href="{{ route('index') }}" title="Real Estate: Mortgage (UK & UAE) & Will Writing" data-bs-toggle="dropdown">Real Estate: Mortgage (UK & UAE) & Will Writing</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a data-bs-toggle="dropdown" href="#" title="Contact">Contact PRO House <i class="fa-solid fa-angle-right"></i></a>
                    <ul class="dropdown-menu second-level">
                        <li class="dropdown ms-3 contact">
                            The PRO House<br />
                            NGI Housess<br />
                            1st floor, Blue Titan Business Centre<br />
                            Port Saeed, Deira<br />
                            Dubai, P.O. 376031<br />
                            UAE & UK Contact: +971 4 227 7348<br />
                            Russia Contact: +971 50 478 3477<br />
                            Email: info@theprohouse.org
                        </li>
                    </ul>
                </li>
                <li>
                    <div class="side-left-menu-close close-side"></div>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-12 position-absolute top-auto bottom-0 left-0 w-100 padding-20px-bottom sm-padding-15px-bottom">
        <div class="footer-holder">
            <form action="search-result.html" method="post" class="navbar-form no-padding search-box">
                <div class="input-group add-on">
                    <input name="text" id="text" data-email="required" type="text" placeholder="Enter your keywords..." class="form-control">
                    <div class="input-group-btn">
                        <button class="btn btn-default search-button" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </div>
            </form>
            <div class="icon-social-medium margin-eleven-bottom padding-eight-top sm-padding-15px-top sm-margin-15px-bottom">
                <a href="https://www.facebook.com/" target="_blank" class="text-link-extra-dark-gray"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a>
                <a href="https://x.com/the_pro_house" target="_blank" class="text-link-extra-dark-gray"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i></a>
                <a href="https://instagram.com/theprohouse01" target="_blank" class="text-link-extra-dark-gray"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a>
                <a href="https://linkedin.com/in/the-pro-house" target="_blank" class="text-link-extra-dark-gray"><i class="fa-brands fa-linkedin" aria-hidden="true"></i></a>
            </div>
            <div class="text-medium-gray text-extra-small border-top border-color-extra-light-gray padding-twelve-top sm-padding-15px-top">&copy; {{ date('Y') }} THE PRO HOUSE. All rights reserved</div>
        </div>
    </div>
</nav>
<!-- end navigation -->