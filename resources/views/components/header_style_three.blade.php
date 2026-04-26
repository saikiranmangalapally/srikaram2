<!--Start Main Header Two-->
<header class="main-header main-header-two">

    <div class="main-header-two__top">
        <div class="auto-container">
            <div class="main-header-two__top-inner">

                <div class="main-header-two__top-left">
                    <ul class="main-header-two__contact-info">
                        <li>
                            <div class="inner">
                                <div class="icon-box">
                                    <span class="icon-clock"></span>
                                </div>
                                <div class="text-box">
                                    <p>Our Opening Hours Mon- Fri</p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="inner">
                                <div class="icon-box">
                                    <span class="icon-email"></span>
                                </div>
                                <div class="text-box">
                                    <p><a href="mailto:srikaramconstruction@gmail.com">srikaramconstruction@gmail.com</a></p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="inner">
                                <div class="icon-box">
                                    <span class="icon-pin"></span>
                                </div>
                                <div class="text-box">
                                    <p>Hyderabad, Telangana, India</p>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>

                <div class="main-header-two__top-right">
                    <div class="number">
                        <p><span class="icon-phone-call-2"></span> <a href="tel:+918500766456">+91 85007 66456</a>
                        </p>
                    </div>

                    <div class="btn-box">
                        <a href="{{ route('contact') }}">Lat's Talk</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-header-two__bottom">
        <div class="main-header-two__bottom-inner">
            <nav class="main-menu main-menu-one">
                <div class="main-menu__wrapper clearfix">
                    <div class="auto-container">
                        <div class="main-menu__wrapper-inner">

                            <div class="main-header-two__bottom-left">
                                <div class="logo-box-one">
                                    <a href="{{ route('index') }}">
                                        <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="Awesome Logo"
                                            title="">
                                    </a>
                                </div>
                            </div>

                            <div class="main-header-two__bottom-middle">
                                <div class="main-menu-box">
                                    <a href="#" class="mobile-nav__toggler">
                                        <i class="fa fa-bars"></i>
                                    </a>

                                    <x-menuList />
                                </div>
                            </div>

                            <div class="main-header-two__bottom-right">
                                <div class="header-search-box">
                                    <a href="#" class="main-menu__search search-toggler icon-magnifying-glass">
                                    </a>
                                </div>
                                <div class="main-header-one__bottom-right-btn">
                                    <a href="{{ route('contact') }}">Get a Quote</a>
                                </div>
                                <ul class="header-social-links-style2">
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

</header>
<!--End Main Header Two-->

<div class="stricky-header stricky-header--two stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->


