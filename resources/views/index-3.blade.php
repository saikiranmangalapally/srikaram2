@extends('layouts.layout3')
@section('title', 'Bulidy || Responsive Laravel  Template')
@push('styles')

    <link rel="stylesheet" href="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1">

@endpush

@section('content')

    <!-- /.stricky-header -->


    <!--Start Main Slider Two-->
    <section class="main-slider main-slider-two">
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                                "effect": "fade",
                                "pagination": {
                                "el": "#main-slider-pagination",
                                "type": "bullets",
                                "clickable": true
                                },
                                "navigation": {
                                "nextEl": "#main-slider__swiper-button-next",
                                "prevEl": "#main-slider__swiper-button-prev"
                                },
                                "autoplay": {
                                "delay": 5000
                                }}'>
            <div class="swiper-wrapper">

                <!--Start Main Slider One-->
                <div class="swiper-slide">
                    <div class="image-layer"
                        style="background-image:url({{ asset('assets/images/hero-construction.png') }}?v=1.0.1)">
                    </div>
                    <div class="main-slider-two__bg"></div>
                    <div class="main-slider-two__img"><img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1"
                            alt="#">
                    </div>
                    <div class="shape1"></div>
                    <div class="shape2 float-bob-y"></div>
                    <div class="shape3"><img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                    </div>
                    <div class="container">
                        <div class="main-slider-two__content">
                            <div class="main-slider-two__list">
                                <ul>
                                    <li>Modern</li>
                                    <li>Business</li>
                                    <li>Industry</li>
                                </ul>
                            </div>

                            <div class="title">
                                <h2>Technology <br> Automation <br> Solutions</h2>
                            </div>

                            <div class="btn-box">
                                <a class="thm-btn" href="{{ route('contact') }}">
                                    <span class="txt">Free Consultation</span>
                                    <i class="icon-double-chevron"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Main Slider One-->

                <!--Start Main Slider One-->
                <div class="swiper-slide">
                    <div class="image-layer"
                        style="background-image:url({{ asset('assets/images/hero-construction.png') }}?v=1.0.1)">
                    </div>
                    <div class="main-slider-two__bg"></div>
                    <div class="main-slider-two__img"><img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1"
                            alt="#">
                    </div>
                    <div class="shape1"></div>
                    <div class="shape2 float-bob-y"></div>
                    <div class="shape3"><img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                    </div>
                    <div class="container">
                        <div class="main-slider-two__content">
                            <div class="main-slider-two__list">
                                <ul>
                                    <li>Modern</li>
                                    <li>Business</li>
                                    <li>Industry</li>
                                </ul>
                            </div>

                            <div class="title">
                                <h2>Technology <br> Automation <br> Solutions</h2>
                            </div>

                            <div class="btn-box">
                                <a class="thm-btn" href="{{ route('contact') }}">
                                    <span class="txt">Free Consultation</span>
                                    <i class="icon-double-chevron"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Main Slider One-->

                <!--Start Main Slider One-->
                <div class="swiper-slide">
                    <div class="image-layer"
                        style="background-image:url({{ asset('assets/images/hero-construction.png') }}?v=1.0.1)">
                    </div>
                    <div class="main-slider-two__bg"></div>
                    <div class="main-slider-two__img"><img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1"
                            alt="#">
                    </div>
                    <div class="shape1"></div>
                    <div class="shape2 float-bob-y"></div>
                    <div class="shape3"><img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                    </div>
                    <div class="container">
                        <div class="main-slider-two__content">
                            <div class="main-slider-two__list">
                                <ul>
                                    <li>Modern</li>
                                    <li>Business</li>
                                    <li>Industry</li>
                                </ul>
                            </div>

                            <div class="title">
                                <h2>Technology <br> Automation <br> Solutions</h2>
                            </div>

                            <div class="btn-box">
                                <a class="thm-btn" href="{{ route('contact') }}">
                                    <span class="txt">Free Consultation</span>
                                    <i class="icon-double-chevron"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Main Slider One-->

            </div>

            <!-- If we need navigation buttons -->
            <div class="main-slider__nav style2">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                    <i class="icon-left-arrow"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                    <i class="icon-right-arrow"></i>
                </div>
            </div>

        </div>
    </section>
    <!--End Main Slider Two-->

    <!--Start Feature Four-->
    <section class="feature-four">
        <div class="auto-container">
            <div class="feature-four__inner">
                <div class="feature-four__bg"
                    style="background-image: url({{ asset('assets/images/hero-construction.png') }}?v=1.0.1);"></div>
                <div class="container">
                    <div class="row">
                        <!--Start Feature Four Single-->
                        <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                            <div class="feature-four__single">
                                <div class="icon-box">
                                    <span class="icon-growth"></span>
                                </div>
                                <h2><a href="{{ route('bridge-costruction') }}">Power & <br> Energy</a></h2>
                                <p>Lorem ipsum is are many variations of pass of majority.</p>
                                <div class="btn-box">
                                    <a href="{{ route('bridge-costruction') }}"><span class="icon-right-arrow-1"></span></a>
                                </div>
                            </div>
                        </div>
                        <!--End Feature Four Single-->

                        <!--Start Feature Four Single-->
                        <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.3s">
                            <div class="feature-four__single">
                                <div class="icon-box">
                                    <span class="icon-work-process"></span>
                                </div>
                                <h2><a href="{{ route('bridge-costruction') }}">Machanical <br> Engineering</a></h2>
                                <p>Lorem ipsum is are many variations of pass of majority.</p>
                                <div class="btn-box">
                                    <a href="{{ route('bridge-costruction') }}"><span class="icon-right-arrow-1"></span></a>
                                </div>
                            </div>
                        </div>
                        <!--End Feature Four Single-->

                        <!--Start Feature Four Single-->
                        <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.5s">
                            <div class="feature-four__single">
                                <div class="icon-box">
                                    <span class="icon-search"></span>
                                </div>
                                <h2><a href="{{ route('bridge-costruction') }}">Chemical <br> Research</a></h2>
                                <p>Lorem ipsum is are many variations of pass of majority.</p>
                                <div class="btn-box">
                                    <a href="{{ route('bridge-costruction') }}"><span class="icon-right-arrow-1"></span></a>
                                </div>
                            </div>
                        </div>
                        <!--End Feature Four Single-->

                        <!--Start Feature Four Right Content-->
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="feature-four__right-content">
                                <h2>Our Expert</h2> <br>
                                <h2><span class="odometer" data-count="300">00</span><span class="plus"> </span>
                                    Team </h2> <br>
                                <h2> Member</h2>
                            </div>
                        </div>
                        <!--End Feature Four Right Content-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Feature Four-->

    <!--Start Video Two-->
    <section class="video-two">
        <div class="video-two__bg" style="background-image: url({{ asset('assets/images/hero-construction.png') }}?v=1.0.1);">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="video-two__inner text-center">
                        <div class="video-box">
                            <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                <div class="video-two__icon">
                                    <span class="icon-play-button"></span>
                                    <i class="ripple"></i>
                                </div>
                            </a>
                        </div>
                        <h2>Trusted By The World's Best <br>
                            Organizations</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Video Two-->

    <!--Start About Two-->
    <section class="about-two">
        <div class="container">
            <div class="row">
                <!--Start About Two Content-->
                <div class="col-xl-6">
                    <div class="about-two__content">
                        <div class="sec-title-two">
                            <div class="sub-title">
                                <h3>About Us</h3>
                                <div class="round-two"></div>
                            </div>
                            <h2>our Manufactures High <br> Quality Products</h2>
                        </div>
                        <div class="text-box1">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qofficia
                                mollianim id est laborum. Sed ut perspiciatis unde omnis iste natus
                                voluptateaccusantium Nemo enim ipsam voluptatem </p>
                        </div>

                        <ul class="about-two__content-list">
                            <li>
                                <div class="inner">
                                    <div class="icon-box">
                                        <span class="icon-check-1"></span>
                                    </div>
                                    <div class="text-box">
                                        <p>Take a look at our round up of the best shows</p>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="inner">
                                    <div class="icon-box">
                                        <span class="icon-check-1"></span>
                                    </div>
                                    <div class="text-box">
                                        <p>It has survived not only five centuries</p>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="inner">
                                    <div class="icon-box">
                                        <span class="icon-check-1"></span>
                                    </div>
                                    <div class="text-box">
                                        <p>Lorem Ipsum has been the ndustry standard dummy text</p>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <div class="about-two__progress">
                            <!--Start About Two Progress Single-->
                            <div class="about-two__progress-single">
                                <h4 class="about-two__progress-single-title">Business Consulting</h4>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="88%">
                                        <div class="count-text">88%</div>
                                    </div>
                                </div>
                            </div>
                            <!--End About Two Progress Single-->
                        </div>

                        <div class="about-two__content-bottom">
                            <div class="author-box">
                                <div class="img-box">
                                    <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                </div>
                                <div class="title-box">
                                    <h2>Mhon Smith</h2>
                                    <span>Ceo - Fahim</span>
                                </div>
                            </div>

                            <div class="btn-box">
                                <a class="thm-btn" href="{{ route('about') }}">
                                    <span class="txt">Read More </span>
                                    <i class="icon-double-chevron"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <!--End About Two Content-->

                <!--Start About Two Right-->
                <div class="col-xl-6">
                    <div class="about-two__right">
                        <div class="row filter-layout masonary-layout">
                            <!--Start About Two Right Single-->
                            <div class="col-xl-6 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                                <div class="about-two__right-single">
                                    <div class="img-box">
                                        <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                    </div>
                                </div>
                            </div>
                            <!--End About Two Right Single-->
                            <!--Start About Two Right Single-->
                            <div class="col-xl-6 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.3s">
                                <div class="about-two__right-single mb30">
                                    <div class="img-box">
                                        <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                        <div class="video-box">
                                            <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                                <div class="about-two__right-single-icon">
                                                    <span class="icon-play-button-1"></span>
                                                    <i class="ripple"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End About Two Right Single-->

                            <!--Start About Two Right Single-->
                            <div class="col-xl-6 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                                <div class="about-two__right-single">
                                    <div class="counter-box">
                                        <h2> <span class="odometer" data-count="400">00</span><span class="plus"> </span>
                                            <br>
                                            Project <br> Complete
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <!--End About Two Right Single-->

                            <!--Start About Two Right Single-->
                            <div class="col-xl-6 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.3s">
                                <div class="about-two__right-single">
                                    <div class="img-box">
                                        <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                    </div>
                                </div>
                            </div>
                            <!--End About Two Right Single-->
                        </div>
                    </div>
                </div>
                <!--End About Two Right-->

            </div>
        </div>
    </section>
    <!--End About Two-->


    <!--Start Services Two-->
    <section class="services-two">
        <div class="services-two__img wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms"><img
                src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#"></div>
        <div class="container">
            <div class="sec-title-two">
                <div class="sub-title">
                    <h3>What We Have</h3>
                    <div class="round-two"></div>
                </div>
                <h2>We Provide Best Services</h2>
            </div>
            <div class="row">
                <!--Start Services Two Left Content-->
                <div class="col-xl-10 col-lg-10">
                    <div class="services-two__left-content">
                        <div class="row filter-layout masonary-layout">
                            <!--Start Services Two Left Content Single-->
                            <div class="col-xl-6 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                                <div class="services-two__left-content-single text-center">
                                    <div class="icon-box">
                                        <span class="icon-maintenance"></span>
                                    </div>
                                    <div class="inner">
                                        <h2><a href="{{ route('bridge-costruction') }}">Metal Forming</a></h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--End Services Two Left Content Single-->

                            <!--Start Services Two Left Content Single-->
                            <div class="col-xl-6 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.3s">
                                <div class="services-two__left-content-single mb30 text-center">
                                    <div class="icon-box">
                                        <span class="icon-work-process"></span>
                                    </div>
                                    <div class="inner">
                                        <h2><a href="{{ route('bridge-costruction') }}">Civil Engineering</a></h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--End Services Two Left Content Single-->

                            <!--Start Services Two Left Content Single-->
                            <div class="col-xl-6 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                                <div class="services-two__left-content-single text-center">
                                    <div class="icon-box">
                                        <span class="icon-worker"></span>
                                    </div>
                                    <div class="inner">
                                        <h2><a href="{{ route('bridge-costruction') }}">Planning Strategies</a></h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--End Services Two Left Content Single-->

                            <!--Start Services Two Left Content Single-->
                            <div class="col-xl-6 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.3s">
                                <div class="services-two__left-content-single text-center">
                                    <div class="icon-box">
                                        <span class="icon-construction"></span>
                                    </div>
                                    <div class="inner">
                                        <h2><a href="{{ route('bridge-costruction') }}">Power & Energy</a></h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--End Services Two Left Content Single-->
                        </div>
                    </div>
                </div>
                <!--Start Services Two Left Content-->

                <!--Start Services Two Right Content-->
                <div class="col-xl-2 col-lg-2">
                    <div class="services-two__right-content">
                        <!--Start Services Two Right Content Single-->
                        <div class="services-two__right-content-single wow animated fadeInUp" data-wow-delay="0.1s">
                            <div class="icon-box">
                                <span class="icon-roof"></span>
                            </div>

                            <div class="title-box">
                                <h2><a href="{{ route('bridge-costruction') }}">Quality <br> materials</a></h2>
                            </div>
                        </div>
                        <!--Start Services Two Right Content Single-->

                        <!--Start Services Two Right Content Single-->
                        <div class="services-two__right-content-single wow animated fadeInUp" data-wow-delay="0.3s">
                            <div class="icon-box">
                                <span class="icon-shield"></span>
                            </div>

                            <div class="title-box">
                                <h2><a href="{{ route('bridge-costruction') }}">Fully <br> insured</a></h2>
                            </div>
                        </div>
                        <!--Start Services Two Right Content Single-->

                        <!--Start Services Two Right Content Single-->
                        <div class="services-two__right-content-single wow animated fadeInUp" data-wow-delay="0.1s">
                            <div class="icon-box">
                                <span class="icon-mission"></span>
                            </div>

                            <div class="title-box">
                                <h2><a href="{{ route('bridge-costruction') }}">Mission <br> statement</a></h2>
                            </div>
                        </div>
                        <!--Start Services Two Right Content Single-->

                        <!--Start Services Two Right Content Single-->
                        <div class="services-two__right-content-single wow animated fadeInUp" data-wow-delay="0.3s">
                            <div class="icon-box">
                                <span class="icon-construction-worker"></span>
                            </div>

                            <div class="title-box">
                                <h2><a href="{{ route('bridge-costruction') }}">Expert <br> engineers</a></h2>
                            </div>
                        </div>
                        <!--Start Services Two Right Content Single-->

                        <!--Start Services Two Right Content Single-->
                        <div class="services-two__right-content-single wow animated fadeInUp" data-wow-delay="0.1s">
                            <div class="icon-box">
                                <span class="icon-architect"></span>
                            </div>

                            <div class="title-box">
                                <h2><a href="{{ route('bridge-costruction') }}">Solutions <br> Personalized </a></h2>
                            </div>
                        </div>
                        <!--Start Services Two Right Content Single-->
                    </div>
                </div>
                <!--End Services Two Right Content-->
            </div>
        </div>
    </section>
    <!--End Services Two-->


    <!--Start Team Two-->
    <section class="team-two">
        <div class="auto-container">
            <div class="sec-title-two text-center">
                <div class="sub-title">
                    <div class="round-one"></div>
                    <h3>Our Experts</h3>
                    <div class="round-two"></div>
                </div>
                <h2>Our Industrial Expert Team</h2>
            </div>

            <div class="row filter-layout masonary-layout">
                <!--Start Team Two Single-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="team-two__single">
                        <div class="team-two__single-img">
                            <div class="inner">
                                <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                <ul class="social-icon">
                                    <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="team-two__single-content text-center">
                            <h2><a href="{{ route('team-details') }}">Jhon Smith</a></h2>
                            <p>Web Designer</p>
                        </div>
                    </div>
                </div>
                <!--End Team Two Single-->

                <!--Start Team Two Single-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInDown" data-wow-delay=".3s">
                    <div class="team-two__single mb40">
                        <div class="team-two__single-img">
                            <div class="inner">
                                <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                <ul class="social-icon">
                                    <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="team-two__single-content text-center">
                            <h2><a href="{{ route('team-details') }}">Jhon Smith</a></h2>
                            <p>Web Designer</p>
                        </div>
                    </div>
                </div>
                <!--End Team Two Single-->

                <!--Start Team Two Single-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="team-two__single">
                        <div class="team-two__single-img">
                            <div class="inner">
                                <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                <ul class="social-icon">
                                    <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="team-two__single-content text-center">
                            <h2><a href="{{ route('team-details') }}">Jhon Smith</a></h2>
                            <p>Web Designer</p>
                        </div>
                    </div>
                </div>
                <!--End Team Two Single-->

                <!--Start Team Two Single-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInDown" data-wow-delay=".3s">
                    <div class="team-two__single mb40">
                        <div class="team-two__single-img">
                            <div class="inner">
                                <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                <ul class="social-icon">
                                    <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="team-two__single-content text-center">
                            <h2><a href="{{ route('team-details') }}">Jhon Smith</a></h2>
                            <p>Web Designer</p>
                        </div>
                    </div>
                </div>
                <!--End Team Two Single-->
            </div>
        </div>
    </section>
    <!--End Team Two-->


    <!--Start Portfolio Two-->
    <section class="portfolio-two">
        <div class="portfolio-two__top">
            <div class="container">
                <div class="sec-title-two">
                    <div class="sub-title">
                        <h3>Our Recent Work</h3>
                        <div class="round-two"></div>
                    </div>
                    <h2>Our Work Showcase</h2>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row filter-layout masonary-layout">
                <div class="col-xl-12">
                    <div class="portfolio-two__inner">

                        <div class="owl-carousel owl-theme thm-owl__carousel portfolio-two__carousel" data-owl-options='{
                                            "loop": true,
                                            "autoplay": true,
                                            "margin": 1,
                                            "nav": true,
                                            "dots": false,
                                            "smartSpeed": 500,
                                            "autoplayTimeout": 10000,
                                            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                                            "responsive": {
                                                    "0": {
                                                        "items": 1
                                                    },
                                                    "768": {
                                                        "items": 2
                                                    },
                                                    "992": {
                                                        "items": 3
                                                    },
                                                    "1200": {
                                                        "items": 4
                                                    }
                                                }
                                            }'>

                            <!--Start Portfolio Two Single-->
                            <div class="portfolio-two__single">
                                <div class="portfolio-two__single-img">
                                    <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                    <div class="overlay-content">
                                        <h2><a href="{{ route('portfolio-details') }}">Manufacturing</a></h2>
                                        <p>Wall Protection</p>
                                    </div>
                                </div>
                            </div>
                            <!--End Portfolio Two Single-->

                            <!--Start Portfolio Two Single-->
                            <div class="portfolio-two__single mb30">
                                <div class="portfolio-two__single-img">
                                    <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                    <div class="overlay-content">
                                        <h2><a href="{{ route('portfolio-details') }}">Manufacturing</a></h2>
                                        <p>Wall Protection</p>
                                    </div>
                                </div>
                            </div>
                            <!--End Portfolio Two Single-->

                            <!--Start Portfolio Two Single-->
                            <div class="portfolio-two__single">
                                <div class="portfolio-two__single-img">
                                    <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                    <div class="overlay-content">
                                        <h2><a href="{{ route('portfolio-details') }}">Manufacturing</a></h2>
                                        <p>Wall Protection</p>
                                    </div>
                                </div>
                            </div>
                            <!--End Portfolio Two Single-->
                            <!--Start Portfolio Two Single-->
                            <div class="portfolio-two__single mb30">
                                <div class="portfolio-two__single-img">
                                    <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                    <div class="overlay-content">
                                        <h2><a href="{{ route('portfolio-details') }}">Manufacturing</a></h2>
                                        <p>Wall Protection</p>
                                    </div>
                                </div>
                            </div>
                            <!--End Portfolio Two Single-->

                            <!--Start Portfolio Two Single-->
                            <div class="portfolio-two__single">
                                <div class="portfolio-two__single-img">
                                    <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                    <div class="overlay-content">
                                        <h2><a href="{{ route('portfolio-details') }}">Manufacturing</a></h2>
                                        <p>Wall Protection</p>
                                    </div>
                                </div>
                            </div>
                            <!--End Portfolio Two Single-->

                            <!--Start Portfolio Two Single-->
                            <div class="portfolio-two__single mb30">
                                <div class="portfolio-two__single-img">
                                    <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                    <div class="overlay-content">
                                        <h2><a href="{{ route('portfolio-details') }}">Manufacturing</a></h2>
                                        <p>Wall Protection</p>
                                    </div>
                                </div>
                            </div>
                            <!--End Portfolio Two Single-->

                            <!--Start Portfolio Two Single-->
                            <div class="portfolio-two__single">
                                <div class="portfolio-two__single-img">
                                    <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                    <div class="overlay-content">
                                        <h2><a href="{{ route('portfolio-details') }}">Manufacturing</a></h2>
                                        <p>Wall Protection</p>
                                    </div>
                                </div>
                            </div>
                            <!--End Portfolio Two Single-->
                            <!--Start Portfolio Two Single-->
                            <div class="portfolio-two__single mb30">
                                <div class="portfolio-two__single-img">
                                    <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                    <div class="overlay-content">
                                        <h2><a href="{{ route('portfolio-details') }}">Manufacturing</a></h2>
                                        <p>Wall Protection</p>
                                    </div>
                                </div>
                            </div>
                            <!--End Portfolio Two Single-->

                            <!--Start Portfolio Two Single-->
                            <div class="portfolio-two__single">
                                <div class="portfolio-two__single-img">
                                    <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                    <div class="overlay-content">
                                        <h2><a href="{{ route('portfolio-details') }}">Manufacturing</a></h2>
                                        <p>Wall Protection</p>
                                    </div>
                                </div>
                            </div>
                            <!--End Portfolio Two Single-->

                            <!--Start Portfolio Two Single-->
                            <div class="portfolio-two__single mb30">
                                <div class="portfolio-two__single-img">
                                    <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                    <div class="overlay-content">
                                        <h2><a href="{{ route('portfolio-details') }}">Manufacturing</a></h2>
                                        <p>Wall Protection</p>
                                    </div>
                                </div>
                            </div>
                            <!--End Portfolio Two Single-->

                            <!--Start Portfolio Two Single-->
                            <div class="portfolio-two__single">
                                <div class="portfolio-two__single-img">
                                    <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                    <div class="overlay-content">
                                        <h2><a href="{{ route('portfolio-details') }}">Manufacturing</a></h2>
                                        <p>Wall Protection</p>
                                    </div>
                                </div>
                            </div>
                            <!--End Portfolio Two Single-->
                            <!--Start Portfolio Two Single-->
                            <div class="portfolio-two__single mb30">
                                <div class="portfolio-two__single-img">
                                    <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                    <div class="overlay-content">
                                        <h2><a href="{{ route('portfolio-details') }}">Manufacturing</a></h2>
                                        <p>Wall Protection</p>
                                    </div>
                                </div>
                            </div>
                            <!--End Portfolio Two Single-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Portfolio Two-->


    <!--Start Feature Three-->
    <section class="feature-three">
        <div class="shape1 float-bob-y"><img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#"></div>
        <div class="shape2 float-bob-y"><img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#"></div>
        <div class="feature-three__bg"
            style="background-image: url({{ asset('assets/images/hero-construction.png') }}?v=1.0.1);">
        </div>
        <div class="feature-three__pattern"
            style="background-image: url({{ asset('assets/images/hero-construction.png') }}?v=1.0.1);">
        </div>
        <div class="container">
            <div class="feature-three__inner">
                <ul class="feature-three__box">
                    <li class="feature-three__single text-center">
                        <div class="icon-box">
                            <span class="icon-checking"></span>
                        </div>
                        <div class="title-box">
                            <h2><a href="{{ route('bridge-costruction') }}">Smart Work</a></h2>
                        </div>
                    </li>

                    <li class="feature-three__single text-center">
                        <div class="icon-box">
                            <span class="icon-wallpaper"></span>
                        </div>
                        <div class="title-box">
                            <h2><a href="{{ route('bridge-costruction') }}">Unique Design</a></h2>
                        </div>
                    </li>

                    <li class="feature-three__single text-center">
                        <div class="icon-box">
                            <span class="icon-programmer"></span>
                        </div>
                        <div class="title-box">
                            <h2><a href="{{ route('bridge-costruction') }}">Skilled Team</a></h2>
                        </div>
                    </li>

                    <li class="feature-three__single text-center">
                        <div class="icon-box">
                            <span class="icon-best-price"></span>
                        </div>
                        <div class="title-box">
                            <h2><a href="{{ route('bridge-costruction') }}">Best Pricing</a></h2>
                        </div>
                    </li>

                    <li class="feature-three__single text-center">
                        <div class="icon-box">
                            <span class="icon-like"></span>
                        </div>
                        <div class="title-box">
                            <h2><a href="{{ route('bridge-costruction') }}">Quality Material</a></h2>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Feature Three-->


    <!--Start Industry Skill One-->
    <section class="industry-skill-one">
        <div class="shape1"><img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#"></div>
        <div class="industry-skill-one__bg"
            style="background-image: url({{ asset('assets/images/hero-construction.png') }}?v=1.0.1);"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-4"></div>

                <!--Start Industry Skill One Content-->
                <div class="col-xl-8">
                    <div class="industry-skill-one__content">
                        <div class="sec-title-two">
                            <div class="sub-title">
                                <h3>Our Industry Skill</h3>
                                <div class="round-two"></div>
                            </div>
                            <h2>We Are Full Expert In All <br> Industry Work</h2>
                        </div>
                        <div class="text-box">
                            <p>We believe that success is achieved through a highly collaborative interaction </p>
                        </div>

                        <div class="industry-skill-one__progress">
                            <!--Start Industry Skill One Progress Single-->
                            <div class="industry-skill-one__progress-single">
                                <h4 class="industry-skill-one__progress-title">Engineering
                                </h4>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="90%">
                                        <div class="count-text">90%</div>
                                    </div>
                                </div>
                            </div>
                            <!--End Industry Skill One Progress Single-->

                            <!--Start Industry Skill One Progress Single-->
                            <div class="industry-skill-one__progress-single">
                                <h4 class="industry-skill-one__progress-title">Construction
                                </h4>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="85%">
                                        <div class="count-text">85%</div>
                                    </div>
                                </div>
                            </div>
                            <!--End Industry Skill One Progress Single-->

                            <!--Start Industry Skill One Progress Single-->
                            <div class="industry-skill-one__progress-single">
                                <h4 class="industry-skill-one__progress-title">Industry
                                </h4>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="80%">
                                        <div class="count-text">80%</div>
                                    </div>
                                </div>
                            </div>
                            <!--End Industry Skill One Progress Single-->
                        </div>
                    </div>
                </div>
                <!--End Industry Skill One Content-->
            </div>
        </div>
    </section>
    <!--End Industry Skill One-->


    <!--Start Why Choose One-->
    <section class="why-choose-one">
        <div class="container">
            <div class="sec-title-two text-center">
                <div class="sub-title">
                    <div class="round-one"></div>
                    <h3>Why Choose Us</h3>
                    <div class="round-two"></div>
                </div>
                <h2>Enjoy Unlimited Access</h2>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="why-choose-one__inner">
                        <div class="why-choose-one__img">
                            <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                        </div>
                        <ul class="why-choose-one__list">
                            <li class="wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">
                                <div class="icon-box">
                                    <span class="icon-crane-1"></span>
                                </div>
                                <div class="content-box">
                                    <h2><a href="{{ route('bridge-costruction') }}">Flexible Services</a></h2>
                                    <p>In a free hour when our power of choice is untrammelled and when nothing
                                        prevents.</p>
                                    <div class="btn-box">
                                        <a href="{{ route('bridge-costruction') }}">Read More <span
                                                class="icon-check"></span></a>
                                    </div>
                                </div>
                            </li>
                            <li class="style2 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                                <div class="content-box">
                                    <h2><a href="{{ route('bridge-costruction') }}">Powerfull Strategy</a></h2>
                                    <p>In a free hour when our power of choice is untrammelled and when nothing
                                        prevents.</p>
                                    <div class="btn-box">
                                        <a href="{{ route('bridge-costruction') }}">Read More <span
                                                class="icon-check"></span></a>
                                    </div>
                                </div>
                                <div class="icon-box">
                                    <span class="icon-analysis"></span>
                                </div>
                            </li>
                        </ul>

                        <ul class="why-choose-one__list">
                            <li class="wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">
                                <div class="icon-box">
                                    <span class="icon-helmet"></span>
                                </div>
                                <div class="content-box">
                                    <h2><a href="{{ route('bridge-costruction') }}">Modern Technology</a></h2>
                                    <p>In a free hour when our power of choice is untrammelled and when nothing
                                        prevents.</p>
                                    <div class="btn-box">
                                        <a href="{{ route('bridge-costruction') }}">Read More <span
                                                class="icon-check"></span></a>
                                    </div>
                                </div>
                            </li>
                            <li class="style2 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                                <div class="content-box">
                                    <h2><a href="{{ route('bridge-costruction') }}">Special Project</a></h2>
                                    <p>In a free hour when our power of choice is untrammelled and when nothing
                                        prevents.</p>
                                    <div class="btn-box">
                                        <a href="{{ route('bridge-costruction') }}">Read More <span
                                                class="icon-check"></span></a>
                                    </div>
                                </div>
                                <div class="icon-box">
                                    <span class="icon-construction-2"></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Why Choose One-->


    <!--Start Testimonial Two-->
    <section class="testimonial-two">
        <div class="testimonial-two__img wow slideInLeft" data-wow-delay="500ms" data-wow-duration="2500ms">
            <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
        </div>
        <div class="shape2 float-bob-y">
            <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
        </div>
        <div class="shape3 float-bob-x">
            <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
        </div>
        <div class="container">
            <div class="sec-title-two">
                <div class="sub-title">
                    <h3>Our Clients</h3>
                    <div class="round-two"></div>
                </div>
                <h2>Happy Clients Say</h2>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="testimonial-two__inner">

                        <div class="owl-carousel owl-theme thm-owl__carousel testimonial-two__carousel" data-owl-options='{
                                            "loop": true,
                                            "autoplay": true,
                                            "margin": 30,
                                            "nav": true,
                                            "dots": false,
                                            "smartSpeed": 500,
                                            "autoplayTimeout": 10000,
                                            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                                            "responsive": {
                                                    "0": {
                                                        "items": 1
                                                    },
                                                    "768": {
                                                        "items": 2
                                                    },
                                                    "992": {
                                                        "items": 2
                                                    },
                                                    "1200": {
                                                        "items": 2
                                                    }
                                                }
                                            }'>

                            <!--Start Testimonial Two Single-->
                            <div class="testimonial-two__single">
                                <div class="shape1"><img
                                        src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                </div>
                                <div class="quote-icon">
                                    <span class="icon-quote-left"></span>
                                </div>
                                <div class="testimonial-two__single-inner">
                                    <div class="rating-box">
                                        <ul>
                                            <li>
                                                <span class="fas fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fas fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fas fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fas fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fas fa-star"></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="text-box">
                                        <p>From its medieval origins to the digital learn everything there
                                            is to know about the ubiquitous lorem ipsum passage esse and
                                            dolore fugiat nulla pariatur excepteur sint occaecat cupidatat
                                            non proident, sunt in culpa qui officia deserunt mollit
                                            anim id est laborum.
                                        </p>
                                    </div>

                                    <div class="client-info">
                                        <div class="img-box">
                                            <div class="icon">
                                                <span class="icon-right-quotation-mark"></span>
                                            </div>
                                            <div class="inner">
                                                <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1"
                                                    alt="#">
                                            </div>
                                        </div>
                                        <div class="text-box">
                                            <h3>Regina Hamilton</h3>
                                            <p>CEO, of SaasCo</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--End Testimonial Two Single-->

                            <!--Start Testimonial Two Single-->
                            <div class="testimonial-two__single">
                                <div class="shape1"><img
                                        src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                </div>
                                <div class="quote-icon">
                                    <span class="icon-quote-left"></span>
                                </div>
                                <div class="testimonial-two__single-inner">
                                    <div class="rating-box">
                                        <ul>
                                            <li>
                                                <span class="fas fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fas fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fas fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fas fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fas fa-star"></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="text-box">
                                        <p>From its medieval origins to the digital learn everything there
                                            is to know about the ubiquitous lorem ipsum passage esse and
                                            dolore fugiat nulla pariatur excepteur sint occaecat cupidatat
                                            non proident, sunt in culpa qui officia deserunt mollit
                                            anim id est laborum.
                                        </p>
                                    </div>

                                    <div class="client-info">
                                        <div class="img-box">
                                            <div class="icon">
                                                <span class="icon-right-quotation-mark"></span>
                                            </div>
                                            <div class="inner">
                                                <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1"
                                                    alt="#">
                                            </div>
                                        </div>
                                        <div class="text-box">
                                            <h3>Regina Hamilton</h3>
                                            <p>CEO, of SaasCo</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--End Testimonial Two Single-->

                            <!--Start Testimonial Two Single-->
                            <div class="testimonial-two__single">
                                <div class="shape1"><img
                                        src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                </div>
                                <div class="quote-icon">
                                    <span class="icon-quote-left"></span>
                                </div>
                                <div class="testimonial-two__single-inner">
                                    <div class="rating-box">
                                        <ul>
                                            <li>
                                                <span class="fas fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fas fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fas fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fas fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fas fa-star"></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="text-box">
                                        <p>From its medieval origins to the digital learn everything there
                                            is to know about the ubiquitous lorem ipsum passage esse and
                                            dolore fugiat nulla pariatur excepteur sint occaecat cupidatat
                                            non proident, sunt in culpa qui officia deserunt mollit
                                            anim id est laborum.
                                        </p>
                                    </div>

                                    <div class="client-info">
                                        <div class="img-box">
                                            <div class="icon">
                                                <span class="icon-right-quotation-mark"></span>
                                            </div>
                                            <div class="inner">
                                                <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1"
                                                    alt="#">
                                            </div>
                                        </div>
                                        <div class="text-box">
                                            <h3>Regina Hamilton</h3>
                                            <p>CEO, of SaasCo</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--End Testimonial Two Single-->

                            <!--Start Testimonial Two Single-->
                            <div class="testimonial-two__single">
                                <div class="shape1"><img
                                        src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                </div>
                                <div class="quote-icon">
                                    <span class="icon-quote-left"></span>
                                </div>
                                <div class="testimonial-two__single-inner">
                                    <div class="rating-box">
                                        <ul>
                                            <li>
                                                <span class="fas fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fas fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fas fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fas fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fas fa-star"></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="text-box">
                                        <p>From its medieval origins to the digital learn everything there
                                            is to know about the ubiquitous lorem ipsum passage esse and
                                            dolore fugiat nulla pariatur excepteur sint occaecat cupidatat
                                            non proident, sunt in culpa qui officia deserunt mollit
                                            anim id est laborum.
                                        </p>
                                    </div>

                                    <div class="client-info">
                                        <div class="img-box">
                                            <div class="icon">
                                                <span class="icon-right-quotation-mark"></span>
                                            </div>
                                            <div class="inner">
                                                <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1"
                                                    alt="#">
                                            </div>
                                        </div>
                                        <div class="text-box">
                                            <h3>Regina Hamilton</h3>
                                            <p>CEO, of SaasCo</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--End Testimonial Two Single-->

                            <!--Start Testimonial Two Single-->
                            <div class="testimonial-two__single">
                                <div class="shape1"><img
                                        src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                </div>
                                <div class="quote-icon">
                                    <span class="icon-quote-left"></span>
                                </div>
                                <div class="testimonial-two__single-inner">
                                    <div class="rating-box">
                                        <ul>
                                            <li>
                                                <span class="fas fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fas fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fas fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fas fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fas fa-star"></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="text-box">
                                        <p>From its medieval origins to the digital learn everything there
                                            is to know about the ubiquitous lorem ipsum passage esse and
                                            dolore fugiat nulla pariatur excepteur sint occaecat cupidatat
                                            non proident, sunt in culpa qui officia deserunt mollit
                                            anim id est laborum.
                                        </p>
                                    </div>

                                    <div class="client-info">
                                        <div class="img-box">
                                            <div class="icon">
                                                <span class="icon-right-quotation-mark"></span>
                                            </div>
                                            <div class="inner">
                                                <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1"
                                                    alt="#">
                                            </div>
                                        </div>
                                        <div class="text-box">
                                            <h3>Regina Hamilton</h3>
                                            <p>CEO, of SaasCo</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--End Testimonial Two Single-->

                            <!--Start Testimonial Two Single-->
                            <div class="testimonial-two__single">
                                <div class="shape1"><img
                                        src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                </div>
                                <div class="quote-icon">
                                    <span class="icon-quote-left"></span>
                                </div>
                                <div class="testimonial-two__single-inner">
                                    <div class="rating-box">
                                        <ul>
                                            <li>
                                                <span class="fas fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fas fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fas fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fas fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fas fa-star"></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="text-box">
                                        <p>From its medieval origins to the digital learn everything there
                                            is to know about the ubiquitous lorem ipsum passage esse and
                                            dolore fugiat nulla pariatur excepteur sint occaecat cupidatat
                                            non proident, sunt in culpa qui officia deserunt mollit
                                            anim id est laborum.
                                        </p>
                                    </div>

                                    <div class="client-info">
                                        <div class="img-box">
                                            <div class="icon">
                                                <span class="icon-right-quotation-mark"></span>
                                            </div>
                                            <div class="inner">
                                                <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1"
                                                    alt="#">
                                            </div>
                                        </div>
                                        <div class="text-box">
                                            <h3>Regina Hamilton</h3>
                                            <p>CEO, of SaasCo</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--End Testimonial Two Single-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Testimonial Two-->

    <!--Start Blog Two-->
    <section class="blog-two">
        <div class="container">
            <div class="sec-title-two text-center">
                <div class="sub-title">
                    <div class="round-one"></div>
                    <h3>Our Blog</h3>
                    <div class="round-two"></div>
                </div>
                <h2>Our Latest Information</h2>
            </div>
            <div class="row">
                <!--Start Blog Two Single-->
                <div class="col-xl-6 col-lg-6 wow animated fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-two__single">
                        <div class="blog-two__single-img">
                            <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                            <div class="overlay-content">
                                <div class="top-text">
                                    <div class="date-box text-center">
                                        <p>20 <br> May</p>
                                    </div>

                                    <div class="meta-box">
                                        <p><a href="#"><span class="icon-conversation"></span> 2 Comments</a></p>
                                    </div>
                                </div>
                                <div class="title">
                                    <h2><a href="{{ route('blog-details') }}">Technology Support Allows Erie Non Profit To
                                            Serve</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Blog Two Single-->

                <!--Start Blog Two Single-->
                <div class="col-xl-6 col-lg-6">
                    <div class="blog-two__single">
                        <ul class="blog-two__single-list">

                            <li class="blog-two__single-list-single wow animated fadeInUp" data-wow-delay="0.1s">
                                <div class="inner">
                                    <div class="img-box">
                                        <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                    </div>

                                    <div class="content-box">
                                        <ul class="meta-box">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-conversation"></span>
                                                </div>
                                                <div class="text">
                                                    <p><a href="#">02 Comment</a></p>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="icon">
                                                    <span class="icon-user"></span>
                                                </div>
                                                <div class="text">
                                                    <p><a href="#">Admin</a></p>
                                                </div>
                                            </li>
                                        </ul>

                                        <h3><a href="{{ route('blog-details') }}">Software Makes Your Profit Double If You
                                                Scale Properly</a>
                                        </h3>
                                    </div>
                                </div>
                            </li>

                            <li class="blog-two__single-list-single wow animated fadeInUp" data-wow-delay="0.3s">
                                <div class="inner">
                                    <div class="img-box">
                                        <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                    </div>

                                    <div class="content-box">
                                        <ul class="meta-box">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-conversation"></span>
                                                </div>
                                                <div class="text">
                                                    <p><a href="#">02 Comment</a></p>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="icon">
                                                    <span class="icon-user"></span>
                                                </div>
                                                <div class="text">
                                                    <p><a href="#">Admin</a></p>
                                                </div>
                                            </li>
                                        </ul>

                                        <h3><a href="{{ route('blog-details') }}">Software Makes Your Profit Double If You
                                                Scale Properly</a>
                                        </h3>
                                    </div>
                                </div>
                            </li>

                            <li class="blog-two__single-list-single wow animated fadeInUp" data-wow-delay="0.1s">
                                <div class="inner">
                                    <div class="img-box">
                                        <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                    </div>

                                    <div class="content-box">
                                        <ul class="meta-box">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-conversation"></span>
                                                </div>
                                                <div class="text">
                                                    <p><a href="#">02 Comment</a></p>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="icon">
                                                    <span class="icon-user"></span>
                                                </div>
                                                <div class="text">
                                                    <p><a href="#">Admin</a></p>
                                                </div>
                                            </li>
                                        </ul>

                                        <h3><a href="{{ route('blog-details') }}">Software Makes Your Profit Double If You
                                                Scale Properly</a>
                                        </h3>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
                <!--End Blog Two Single-->
            </div>
        </div>
    </section>
    <!--End Blog Two-->


    <!--Start Cta One -->
    <section class="cta-one">
        <div class="shape1"></div>
        <div class="cta-one__bg" style="background-image: url({{ asset('assets/images/hero-construction.png') }}?v=1.0.1);">
        </div>
        <div class="container">
            <div class="row">
                <div class="cta-one__inner">
                    <div class="cta-one__content">
                        <div class="text-box">
                            <p>Quality Services provider</p>
                            <h2>Need Our services?</h2>
                        </div>

                        <div class="btn-box">
                            <a class="thm-btn" href="{{ route('contact') }}">
                                <span class="txt">get free quote</span>
                                <i class="icon-double-chevron"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Cta One -->

    
@endsection



