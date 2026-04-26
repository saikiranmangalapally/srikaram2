<!--Start Main Header One-->
<header class="main-header main-header-one">

    <div class="main-header-one__top">
        <div class="auto-container">
            <div class="main-header-one__top-inner">
                <div class="main-header-one__top-left">
                    <ul class="header-social-links">
                        <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fab fa-linkedin"></span></a></li>
                        <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>

                <div class="main-header-one__top-right">
                    <div class="main-header-one__top-right-btn">
                        <a href="{{ route('contact') }}">Get A Quote +</a>
                    </div>

                    <div class="header-contact-info">
                        <ul>
                            <li>
                                <div class="inner">
                                    <div class="icon-box">
                                        <span class="icon-phone-call"></span>
                                    </div>
                                    <div class="content-box">
                                        <p>Call anytime</p>
                                        <h4><a href="tel:+918500766456">+91 85007 66456</a></h4>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="inner">
                                    <div class="icon-box">
                                        <span class="icon-message"></span>
                                    </div>
                                    <div class="content-box">
                                        <p>Send email</p>
                                        <h4><a href="mailto:srikaramconstruction@gmail.com">srikaramconstruction@gmail.com</a></h4>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="inner">
                                    <div class="icon-box">
                                        <span class="icon-pin"></span>
                                    </div>
                                    <div class="content-box">
                                        <p>Hyderabad, India</p>
                                        <h4>Telangana</h4>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="main-header-one__bottom">
        <div class="main-header-one__bottom-inner">
            <nav class="main-menu main-menu-one">
                <div class="main-menu__wrapper clearfix">
                    <div class="auto-container">
                        <div class="main-menu__wrapper-inner">

                            <div class="main-header-one__bottom-left">
                                <div class="logo-box-one">
                                    <a href="{{ route('index') }}">
                                        <img src="{{ asset('assets/images/logo.png') }}?v=1.0.1" alt="Awesome Logo"
                                            title="">
                                    </a>
                                </div>
                            </div>

                            <div class="main-header-one__bottom-middle">
                                <div class="main-menu-box">
                                    <a href="#" class="mobile-nav__toggler">
                                        <i class="fa fa-bars"></i>
                                    </a>

                                    <x-menuList />
                                </div>
                            </div>

                            <div class="main-header-one__bottom-right">
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
<!--End Main Header One-->

<div class="stricky-header stricky-header--one stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->


