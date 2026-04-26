<!--Start Main Header Three-->
<header class="main-header main-header-three">

    <div class="main-header-three__top">
        <div class="auto-container">
            <div class="main-header-three__top-inner">

                <div class="main-header-three__top-left">
                    <ul class="main-header-three__contact-info">
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
                    </ul>
                </div>

                <div class="main-header-three__top-right">
                    <div class="login-register">
                        <ul>
                            <li>
                                <a href="#"><span class="icon-user"></span> Login</a>
                            </li>

                            <li>
                                <a href="#">Register</a>
                            </li>
                        </ul>
                    </div>

                    <ul class="social-links">
                        <li>
                            <a href="#"><span class="fab fa-twitter"></span></a>
                        </li>

                        <li>
                            <a href="#"><span class="icon-facebook"></span></a>
                        </li>

                        <li>
                            <a href="#"><span class="icon-pinterest"></span></a>
                        </li>

                        <li>
                            <a href="#"><span class="icon-instagram"></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="main-header-three__bottom">
        <div class="main-header-three__bottom-inner">
            <nav class="main-menu main-menu-one">
                <div class="main-menu__wrapper clearfix">
                    <div class="auto-container">
                        <div class="main-menu__wrapper-inner">

                            <div class="main-header-three__bottom-left">
                                <div class="logo-box-one">
                                    <a href="{{ route('index') }}">
                                        <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="Awesome Logo"
                                            title="">
                                    </a>
                                </div>
                            </div>

                            <div class="main-header-three__bottom-middle">
                                <div class="main-menu-box">
                                    <a href="#" class="mobile-nav__toggler">
                                        <i class="fa fa-bars"></i>
                                    </a>

                                    <x-menuList />
                                </div>
                            </div>

                            <div class="main-header-three__bottom-right">
                                <div class="contact-box">
                                    <div class="icon-box">
                                        <span class="icon-telephone"></span>
                                    </div>
                                    <div class="text-box">
                                        <p>Call Anytime</p>
                                        <h4><a href="tel:+918500766456">+91 85007 66456</a></h4>
                                    </div>
                                </div>

                                <div class="header-search-box">
                                    <a href="#" class="main-menu__search search-toggler icon-magnifying-glass">
                                    </a>
                                </div>
                                <div class="main-header-one__bottom-right-btn">
                                    <a href="{{ route('contact') }}"> <span class="icon-plus"></span> Add a Project</a>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<!--End Main Header Three-->

<div class="stricky-header stricky-header--three stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->


