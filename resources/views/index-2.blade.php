@extends('layouts.layout2')
@section('title', 'Bulidy || Responsive Laravel  Template')
@push('styles')

    <link rel="stylesheet" href="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1">
    <link rel="stylesheet" href="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1">

@endpush

@section('content')

    <!-- /.stricky-header -->


    <!--Start Main Slider Three-->
    <section class="main-slider main-slider-three">
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


                <!--Start Main Slider Three-->
                <div class="swiper-slide">
                    <div class="image-layer"
                        style="background-image:url({{ asset('assets/images/hero-construction.png') }}?v=1.0.1)">
                    </div>

                    <div class="main-slider-three__img"><img
                            src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                    </div>

                    <div class="container">
                        <div class="main-slider-three__content">
                            <div class="title">
                                <h2>Strong Metals For <br> Products</h2>
                            </div>
                            <p>Expand Your Business Everywhere</p>


                            <div class="main-slider-three__content-bottom">
                                <div class="btn-box">
                                    <a class="thm-btn" href="{{ route('contact') }}">
                                        <span class="txt">Consultation</span>
                                        <i class="icon-double-chevron"></i>
                                    </a>
                                </div>

                                <div class="video-box">
                                    <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                        <div class="main-slider-three__content-icon">
                                            <span class="icon-play-button"></span>
                                            <i class="ripple"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--End Main Slider Three-->

                <!--Start Main Slider Three-->
                <div class="swiper-slide">
                    <div class="image-layer"
                        style="background-image:url({{ asset('assets/images/hero-construction.png') }}?v=1.0.1)">
                    </div>

                    <div class="main-slider-three__img"><img
                            src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                    </div>

                    <div class="container">
                        <div class="main-slider-three__content">
                            <div class="title">
                                <h2>Strong Metals For <br> Products</h2>
                            </div>
                            <p>Expand Your Business Everywhere</p>


                            <div class="main-slider-three__content-bottom">
                                <div class="btn-box">
                                    <a class="thm-btn" href="{{ route('contact') }}">
                                        <span class="txt">Consultation</span>
                                        <i class="icon-double-chevron"></i>
                                    </a>
                                </div>

                                <div class="video-box">
                                    <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                        <div class="main-slider-three__content-icon">
                                            <span class="icon-play-button"></span>
                                            <i class="ripple"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--End Main Slider Three-->

                <!--Start Main Slider Three-->
                <div class="swiper-slide">
                    <div class="image-layer"
                        style="background-image:url({{ asset('assets/images/hero-construction.png') }}?v=1.0.1)">
                    </div>

                    <div class="main-slider-three__img"><img
                            src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                    </div>

                    <div class="container">
                        <div class="main-slider-three__content">
                            <div class="title">
                                <h2>Strong Metals For <br> Products</h2>
                            </div>
                            <p>Expand Your Business Everywhere</p>


                            <div class="main-slider-three__content-bottom">
                                <div class="btn-box">
                                    <a class="thm-btn" href="{{ route('contact') }}">
                                        <span class="txt">Consultation</span>
                                        <i class="icon-double-chevron"></i>
                                    </a>
                                </div>

                                <div class="video-box">
                                    <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                        <div class="main-slider-three__content-icon">
                                            <span class="icon-play-button"></span>
                                            <i class="ripple"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--End Main Slider Three-->
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
    <!--End Main Slider Three-->


    <!--Start Feature Five-->
    <section class="feature-five">
        <div class="feature-five__bg"
            style="background-image: url({{ asset('assets/images/hero-construction.png') }}?v=1.0.1);">
        </div>
        <div class="shape1"><img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#"></div>
        <div class="shape2" style="background-image: url({{ asset('assets/images/hero-construction.png') }}?v=1.0.1);"></div>
        <div class="container">
            <div class="row">
                <!--Start Feature Five Single-->
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="feature-five__single">
                        <div class="icon-box">
                            <span class="icon-construction"></span>
                        </div>

                        <div class="title-box">
                            <h2><a href="{{ route('bridge-costruction') }}">Construction</a></h2>
                        </div>
                    </div>
                </div>
                <!--End Feature Five Single-->

                <!--Start Feature Five Single-->
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="feature-five__single">
                        <div class="icon-box">
                            <span class="icon-hook"></span>
                        </div>

                        <div class="title-box">
                            <h2><a href="{{ route('bridge-costruction') }}">Special Projects</a></h2>
                        </div>
                    </div>
                </div>
                <!--End Feature Five Single-->

                <!--Start Feature Five Single-->
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="feature-five__single">
                        <div class="icon-box">
                            <span class="icon-blueprint"></span>
                        </div>

                        <div class="title-box">
                            <h2><a href="{{ route('bridge-costruction') }}">Interior Design</a></h2>
                        </div>
                    </div>
                </div>
                <!--End Feature Five Single-->

                <!--Start Feature Five Single-->
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="feature-five__single">
                        <div class="icon-box">
                            <span class="icon-architect"></span>
                        </div>

                        <div class="title-box">
                            <h2><a href="{{ route('bridge-costruction') }}">Urban Planning</a></h2>
                        </div>
                    </div>
                </div>
                <!--End Feature Five Single-->
            </div>
        </div>
    </section>
    <!--End Feature Five-->


    <!--Start About Three-->
    <section class="about-three">
        <div class="big-title">
            <h2>About Us</h2>
        </div>
        <div class="shape1 wow slideInRight" data-wow-delay="500ms" data-wow-duration="2500ms"><img class="float-bob-y"
                src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#"></div>
        <div class="container">
            <div class="row">
                <!--Start About Three Img-->
                <div class="col-xl-6">
                    <div class="about-three__img">
                        <div class="inner">
                            <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                        </div>
                    </div>
                </div>
                <!--End About Three Img-->

                <!--Start About Three Content-->
                <div class="col-xl-6">
                    <div class="about-three__content">
                        <div class="sec-title-three">
                            <div class="sec-title-three__tagline">
                                <p>the building overview</p>
                            </div>
                            <h2>World Largest Trusted <br> Quality Construction</h2>
                        </div>

                        <div class="text-box">
                            <p>Interior of volumes, space, hese interiors air, proportion, with certain light and
                                mood. These interiors are meant last forever.
                                you need to be sure there isn't anything embarrassing
                                hidden in the middle of text.</p>
                        </div>

                        <ul class="about-three__content-list">
                            <li>
                                <p> <span class="icon-check"></span> convallis Lorem ipsum dolor sit ametarcu non
                                    ligula </p>
                            </li>

                            <li>
                                <p> <span class="icon-check"></span> Sed tempor arcu non arcu non ligula coligula
                                </p>
                            </li>

                            <li>
                                <p> <span class="icon-check"></span> Fusce sodale sligula ligula co lacus
                                    sollicitudin </p>
                            </li>
                        </ul>

                        <div class="client-info">
                            <div class="btn-box">
                                <a class="thm-btn" href="{{ route('about') }}">
                                    <span class="txt">More Details</span>
                                    <i class="icon-double-chevron"></i>
                                </a>
                            </div>

                            <div class="content-box">
                                <div class="img-box">
                                    <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                </div>

                                <div class="text-box">
                                    <h4>Mike Hardson</h4>
                                    <p>CEO of Info</p>
                                </div>
                            </div>
                        </div>


                        <div class="about-three__content-bottom">
                            <ul>
                                <li>
                                    <div class="number-box">
                                        <h2>01</h2>
                                    </div>
                                    <div class="text-box text-center">
                                        <h2><span class="odometer" data-count="8800">00</span></h2>
                                        <p>Sqaure Areas</p>
                                    </div>
                                </li>

                                <li>
                                    <div class="number-box">
                                        <h2>02</h2>
                                    </div>
                                    <div class="text-box text-center">
                                        <h2><span class="odometer" data-count="680">00</span></h2>
                                        <p>Car Parkings</p>
                                    </div>
                                </li>

                                <li>
                                    <div class="number-box">
                                        <h2>03</h2>
                                    </div>
                                    <div class="text-box text-center">
                                        <h2><span class="odometer" data-count="360">00</span></h2>
                                        <p>Apartments</p>
                                    </div>
                                </li>

                                <li>
                                    <div class="number-box">
                                        <h2>04</h2>
                                    </div>
                                    <div class="text-box text-center">
                                        <h2><span class="odometer" data-count="280">00</span></h2>
                                        <p>Bedrooms</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <!--End About Three Content-->
            </div>
        </div>
    </section>
    <!--End About Three-->


    <!--Start Services Three-->
    <section class="services-three">
        <div class="services-three__bg"
            style="background-image: url({{ asset('assets/images/hero-construction.png') }}?v=1.0.1);"></div>
        <div class="big-title">
            <h2>Services</h2>
        </div>
        <div class="container">
            <div class="services-three__top">
                <div class="sec-title-three">
                    <div class="sec-title-three__tagline">
                        <p>OUR POPULAR SERVICES</p>
                    </div>
                    <h2>World Best Services <br> We Provide</h2>
                </div>

                <div class="counter-box">
                    <h2><span class="odometer" data-count="10">00</span> <span class="plus"> </span></h2>
                    <p>Years Experiences</p>
                </div>
            </div>

            <div class="row">
                <!--Start Services Three Left-->
                <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.1s">
                    <div class="services-three__left">
                        <div class="services-three__left-img">
                            <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                            <div class="content-box">
                                <span>Services</span>
                                <h3>Powerfull Strategy</h3>
                                <p>Lorem ium dolor sit do <br>
                                    sed pisicing elit.</p>
                                <div class="btn-box">
                                    <a href="{{ route('bridge-costruction') }}"> <i class="icon-right-arrow-1"></i> More
                                        Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Services Three Left-->


                <!--Start Services Three Right-->
                <div class="col-xl-8 col-lg-8">
                    <div class="services-three__right">
                        <div class="row">
                            <!--Start Services Three Right Single-->
                            <div class="col-xl-6 col-lg-6 wow animated fadeInUp" data-wow-delay="0.1s">
                                <div class="services-three__right-single">
                                    <div class="inner">
                                        <div class="icon-box">
                                            <span class=" icon-automated-process"></span>
                                            <div class="bg-box"></div>
                                        </div>
                                        <div class="content-box">
                                            <h2><a href="{{ route('bridge-costruction') }}">Engineering Industry</a></h2>
                                            <p>Lorem ipsum is simply sit of free text dolor.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Services Three Right Single-->

                            <!--Start Services Three Right Single-->
                            <div class="col-xl-6 col-lg-6 wow animated fadeInUp" data-wow-delay="0.3s">
                                <div class="services-three__right-single">
                                    <div class="inner">
                                        <div class="icon-box">
                                            <span class="icon-consumer-behavior"></span>
                                            <div class="bg-box"></div>
                                        </div>
                                        <div class="content-box">
                                            <h2><a href="{{ route('bridge-costruction') }}">Power & Energy</a></h2>
                                            <p>Lorem ipsum is simply sit of free text dolor.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Services Three Right Single-->
                            <!--Start Services Three Right Single-->
                            <div class="col-xl-6 col-lg-6 wow animated fadeInUp" data-wow-delay="0.1s">
                                <div class="services-three__right-single">
                                    <div class="inner">
                                        <div class="icon-box">
                                            <span class="icon-strategy"></span>
                                            <div class="bg-box"></div>
                                        </div>
                                        <div class="content-box">
                                            <h2><a href="{{ route('bridge-costruction') }}">Atomic Energy</a></h2>
                                            <p>Lorem ipsum is simply sit of free text dolor.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Services Three Right Single-->

                            <!--Start Services Three Right Single-->
                            <div class="col-xl-6 col-lg-6 wow animated fadeInUp" data-wow-delay="0.3s">
                                <div class="services-three__right-single">
                                    <div class="inner">
                                        <div class="icon-box">
                                            <span class="icon-development"></span>
                                            <div class="bg-box"></div>
                                        </div>
                                        <div class="content-box">
                                            <h2><a href="{{ route('bridge-costruction') }}">Firewall Advance</a></h2>
                                            <p>Lorem ipsum is simply sit of free text dolor.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Services Three Right Single-->
                        </div>
                    </div>
                </div>
                <!--Start Services Three Right-->
            </div>

        </div>
    </section>
    <!--End Services Three-->


    <!--Start Video Three-->
    <section class="video-three">
        <div class="video-three__bg jarallax" data-jarallax data-speed="0.2" data-imgposition="50% 0%"
            style="background-image: url({{ asset('assets/images/hero-construction.png') }}?v=1.0.1);">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="video-three__inner">
                        <div class="video-box">
                            <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                <div class="video-three__icon">
                                    <span class="icon-play-button"></span>
                                    <i class="ripple"></i>
                                </div>
                            </a>
                            <span class="border-animation border-1"></span>
                            <span class="border-animation border-2"></span>
                            <span class="border-animation border-3"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Video Three-->


    <!--Start Feature Six-->
    <section class="feature-six">
        <div class="feature-six__bg wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms"
            style="background-image: url({{ asset('assets/images/hero-construction.png') }}?v=1.0.1);">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="feature-six__inner">
                        <div class="feature-six__content">
                            <div class="sec-title-three">
                                <div class="sec-title-three__tagline">
                                    <p>OUR Core Feature</p>
                                </div>
                                <h2>View Full Project Managment <br> Our Company</h2>
                            </div>

                            <div class="text-box1">
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proide sunt in
                                    culpa qui officia deserunt mollit anim id est laborum. </p>
                            </div>

                            <div class="feature-six__content-text2">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="feature-six__content-text2-single">
                                            <ul>
                                                <li><a href="#"><span class="icon-check"></span> Consulting
                                                        Agency</a></li>

                                                <li><a href="#"><span class="icon-check"></span> Financial
                                                        Advice</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="feature-six__content-text2-single">
                                            <div class="text-box">
                                                <h2>Business Meet</h2>
                                                <p>Duis aute irure reprehenderit in voluptate velit esse
                                                    cillum </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="feature-six__progress">
                                <!--Start Feature Six Progress Single-->
                                <div class="feature-six__progress-single">
                                    <h4 class="feature-six__progress-title">Consulting
                                    </h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="78%">
                                            <div class="count-text">78%</div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Feature Six Progress Single-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Feature Six-->


    <!--Start Team Three-->
    <section class="team-three">
        <div class="container">
            <div class="sec-title-three text-center">
                <div class="sec-title-three__tagline">
                    <p>Meet our team</p>
                </div>
                <h2>Our Executive <span>Construction</span> <br> Team Member</h2>
            </div>
            <div class="row">
                <!--Start Team Three Single-->
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="team-three__single">
                        <div class="team-three__single-img">
                            <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                            <ul class="social-links clearfix">
                                <li class="share"><a href="#"><span class="icon-share"></span></a>
                                    <ul class="social-links-inner">
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="icon-twitter"></i></a>
                                        </li>
                                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="title-box">
                            <h2><a href="{{ route('team-details') }}">James Martin</a></h2>
                            <p>Senior Worker</p>
                        </div>
                    </div>
                </div>
                <!--End Team Three Single-->

                <!--Start Team Three Single-->
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <div class="team-three__single">
                        <div class="team-three__single-img">
                            <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                            <ul class="social-links clearfix">
                                <li class="share"><a href="#"><span class="icon-share"></span></a>
                                    <ul class="social-links-inner">
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="icon-twitter"></i></a>
                                        </li>
                                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="title-box">
                            <h2><a href="{{ route('team-details') }}">Jhon Smith</a></h2>
                            <p>Senior Worker</p>
                        </div>
                    </div>
                </div>
                <!--End Team Three Single-->

                <!--Start Team Three Single-->
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="team-three__single">
                        <div class="team-three__single-img">
                            <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                            <ul class="social-links clearfix">
                                <li class="share"><a href="#"><span class="icon-share"></span></a>
                                    <ul class="social-links-inner">
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="icon-twitter"></i></a>
                                        </li>
                                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="title-box">
                            <h2><a href="{{ route('team-details') }}">James Brown</a></h2>
                            <p>Senior Worker</p>
                        </div>
                    </div>
                </div>
                <!--End Team Three Single-->

                <!--Start Team Three Single-->
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="team-three__single">
                        <div class="team-three__single-img">
                            <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                            <ul class="social-links clearfix">
                                <li class="share"><a href="#"><span class="icon-share"></span></a>
                                    <ul class="social-links-inner">
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="icon-twitter"></i></a>
                                        </li>
                                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="title-box">
                            <h2><a href="{{ route('team-details') }}">Aleesha Brown</a></h2>
                            <p>Senior Worker</p>
                        </div>
                    </div>
                </div>
                <!--End Team Three Single-->

                <!--Start Team Three Single-->
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <div class="team-three__single">
                        <div class="team-three__single-img">
                            <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                            <ul class="social-links clearfix">
                                <li class="share"><a href="#"><span class="icon-share"></span></a>
                                    <ul class="social-links-inner">
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="icon-twitter"></i></a>
                                        </li>
                                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="title-box">
                            <h2><a href="{{ route('team-details') }}">Kevin Deen</a></h2>
                            <p>Senior Worker</p>
                        </div>
                    </div>
                </div>
                <!--End Team Three Single-->
                <!--Start Team Three Single-->
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="team-three__single">
                        <div class="content-box">
                            <h2>Our <span class="odometer" data-count="400">00</span> <span class="plus"> </span>
                            </h2>
                            <h3>Executive <br> Team Member</h3>
                        </div>
                    </div>
                </div>
                <!--End Team Three Single-->
            </div>
        </div>
    </section>
    <!--End Team Three-->

    <!--Start Portfolio Three-->
    <section class="portfolio-three">
        <div class="portfolio-three__bg"
            style="background-image: url({{ asset('assets/images/hero-construction.png') }}?v=1.0.1);"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="portfolio-three__top">
                        <div class="sec-title-three">
                            <div class="sec-title-three__tagline">
                                <p>Recent Project</p>
                            </div>
                            <h2>Every Project Is Important <br> For Our Team</h2>
                        </div>

                        <div class="counter-box">
                            <h2><span class="odometer" data-count="400">00</span> <span class="plus"> </span></h2>
                            <p>Completed Project</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="portfolio-three__inner">

                        <div class="owl-carousel owl-theme thm-owl__carousel portfolio-two__carousel" data-owl-options='{
                                        "loop": true,
                                        "autoplay": true,
                                        "margin": 0,
                                        "nav": false,
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

                            <!--Start Portfolio Three Single-->
                            <div class="portfolio-three__single">
                                <div class="portfolio-three__single-img">
                                    <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                    <div class="content-box">
                                        <h2><a href="{{ route('portfolio-details') }}">Exclusive <br> new offers</a></h2>
                                    </div>
                                    <div class="btn-box">
                                        <a href="{{ route('portfolio-details') }}"><span
                                                class="icon-right-arrow-1"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--End Portfolio Three Single-->

                            <!--Start Portfolio Three Single-->
                            <div class="portfolio-three__single">
                                <div class="portfolio-three__single-img">
                                    <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                    <div class="content-box">
                                        <h2><a href="{{ route('portfolio-details') }}">Exclusive <br> new offers</a></h2>
                                    </div>
                                    <div class="btn-box">
                                        <a href="{{ route('portfolio-details') }}"><span
                                                class="icon-right-arrow-1"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--End Portfolio Three Single-->

                            <!--Start Portfolio Three Single-->
                            <div class="portfolio-three__single">
                                <div class="portfolio-three__single-img">
                                    <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                    <div class="content-box">
                                        <h2><a href="{{ route('portfolio-details') }}">Exclusive <br> new offers</a></h2>
                                    </div>
                                    <div class="btn-box">
                                        <a href="{{ route('portfolio-details') }}"><span
                                                class="icon-right-arrow-1"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--End Portfolio Three Single-->

                            <!--Start Portfolio Three Single-->
                            <div class="portfolio-three__single">
                                <div class="portfolio-three__single-img">
                                    <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                    <div class="content-box">
                                        <h2><a href="{{ route('portfolio-details') }}">Exclusive <br> new offers</a></h2>
                                    </div>
                                    <div class="btn-box">
                                        <a href="{{ route('portfolio-details') }}"><span
                                                class="icon-right-arrow-1"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--End Portfolio Three Single-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Portfolio Three-->


    <!--Start Prices plan One -->
    <section class="prices-plan-one">
        <div class="container">
            <div class="sec-title-three text-center">
                <div class="sec-title-three__tagline">
                    <p>Prices plan</p>
                </div>
                <h2>Our Update prices plan </h2>
            </div>
            <div class="row">
                <!--Start Prices plan One Single-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                    <div class="prices-plan-one__single">
                        <div class="prices-plan-one__single-bg"
                            style="background-image: url({{ asset('assets/images/hero-construction.png') }}?v=1.0.1);">
                        </div>
                        <div class="prices-plan-one__single-bg2"
                            style="background-image: url({{ asset('assets/images/hero-construction.png') }}?v=1.0.1);">
                        </div>
                        <div class="inner">
                            <div class="table-header">
                                <div class="category-wrapper">
                                    <h3>Basic</h3>
                                    <p>$250 with 20% Special Discount</p>
                                </div>
                                <h2> <span class="dollar">$</span> 119 <span>/per month</span></h2>
                            </div>


                            <div class="table-content">
                                <ul>
                                    <li>
                                        <div class="inner">
                                            <div class="icon-box">
                                                <span class="icon-check-1"></span>
                                            </div>
                                            <div class="text-box">
                                                <p>Financial Solutions</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="inner">
                                            <div class="icon-box">
                                                <span class="icon-check-1"></span>
                                            </div>
                                            <div class="text-box">
                                                <p>12 Hours Support</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="inner">
                                            <div class="icon-box">
                                                <span class="icon-check-1"></span>
                                            </div>
                                            <div class="text-box">
                                                <p>Coporate Solutions</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="inner">
                                            <div class="icon-box">
                                                <span class="icon-check-1"></span>
                                            </div>
                                            <div class="text-box">
                                                <p>Busines Consultations</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="table-footer">
                                <a class="thm-btn" href="{{ route('contact') }}">
                                    <span class="txt">Get Started</span>
                                    <i class="icon-double-chevron"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Prices plan One Single-->

                <!--Start Prices plan One Single-->
                <div class="col-xl-4 col-lg-4 wow fadeInDown" data-wow-delay=".3s">
                    <div class="prices-plan-one__single">
                        <div class="prices-plan-one__single-bg"
                            style="background-image: url({{ asset('assets/images/hero-construction.png') }}?v=1.0.1);">
                        </div>
                        <div class="prices-plan-one__single-bg2"
                            style="background-image: url({{ asset('assets/images/hero-construction.png') }}?v=1.0.1);">
                        </div>
                        <div class="inner">
                            <div class="table-header">
                                <div class="category-wrapper">
                                    <h3>Started</h3>
                                    <p>$250 with 20% Special Discount</p>
                                </div>
                                <h2> <span class="dollar">$</span> 299 <span>/per month</span></h2>
                            </div>


                            <div class="table-content">
                                <ul>
                                    <li>
                                        <div class="inner">
                                            <div class="icon-box">
                                                <span class="icon-check-1"></span>
                                            </div>
                                            <div class="text-box">
                                                <p>Financial Solutions</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="inner">
                                            <div class="icon-box">
                                                <span class="icon-check-1"></span>
                                            </div>
                                            <div class="text-box">
                                                <p>12 Hours Support</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="inner">
                                            <div class="icon-box">
                                                <span class="icon-check-1"></span>
                                            </div>
                                            <div class="text-box">
                                                <p>Coporate Solutions</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="inner">
                                            <div class="icon-box">
                                                <span class="icon-check-1"></span>
                                            </div>
                                            <div class="text-box">
                                                <p>Busines Consultations</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="table-footer">
                                <a class="thm-btn" href="{{ route('contact') }}">
                                    <span class="txt">Get Started</span>
                                    <i class="icon-double-chevron"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Prices plan One Single-->

                <!--Start Prices plan One Single-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                    <div class="prices-plan-one__single">
                        <div class="prices-plan-one__single-bg"
                            style="background-image: url({{ asset('assets/images/hero-construction.png') }}?v=1.0.1);">
                        </div>
                        <div class="prices-plan-one__single-bg2"
                            style="background-image: url({{ asset('assets/images/hero-construction.png') }}?v=1.0.1);">
                        </div>
                        <div class="inner">
                            <div class="table-header">
                                <div class="category-wrapper">
                                    <h3>Premium</h3>
                                    <p>$250 with 20% Special Discount</p>
                                </div>
                                <h2> <span class="dollar">$</span> 399 <span>/per month</span></h2>
                            </div>


                            <div class="table-content">
                                <ul>
                                    <li>
                                        <div class="inner">
                                            <div class="icon-box">
                                                <span class="icon-check-1"></span>
                                            </div>
                                            <div class="text-box">
                                                <p>Financial Solutions</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="inner">
                                            <div class="icon-box">
                                                <span class="icon-check-1"></span>
                                            </div>
                                            <div class="text-box">
                                                <p>12 Hours Support</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="inner">
                                            <div class="icon-box">
                                                <span class="icon-check-1"></span>
                                            </div>
                                            <div class="text-box">
                                                <p>Coporate Solutions</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="inner">
                                            <div class="icon-box">
                                                <span class="icon-check-1"></span>
                                            </div>
                                            <div class="text-box">
                                                <p>Busines Consultations</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="table-footer">
                                <a class="thm-btn" href="{{ route('contact') }}">
                                    <span class="txt">Get Started</span>
                                    <i class="icon-double-chevron"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Prices plan One Single-->
            </div>
        </div>
    </section>
    <!--End Prices plan One -->


    <!--Start Brand Two-->
    <section class="brand-two">
        <div class="container">

            <div class="brand-two__title">
                <h2>Trusted by <span class="odometer" data-count="10000">00</span><span class="plus"> </span>
                    Customers Worldwide</h2>
            </div>
            <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                                            "0": {
                                                "spaceBetween": 30,
                                                "slidesPerView": 1
                                            },
                                            "375": {
                                                "spaceBetween": 30,
                                                "slidesPerView": 2
                                            },
                                            "575": {
                                                "spaceBetween": 30,
                                                "slidesPerView": 2
                                            },
                                            "767": {
                                                "spaceBetween": 30,
                                                "slidesPerView": 3
                                            },
                                            "991": {
                                                "spaceBetween": 30,
                                                "slidesPerView": 4
                                            },
                                            "1199": {
                                                "spaceBetween": 30,
                                                "slidesPerView": 5
                                            }
                                        }}'>
                <div class="swiper-wrapper">


                    <div class="swiper-slide">
                        <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--End Brand Two -->


    <!--Start Faq Two-->
    <section class="faq-two">
        <div class="container">
            <div class="faq-two__title text-center">
                <h2>Our Benefits And Faq</h2>
            </div>
            <div class="row">
                <!--Start Faq Two Left-->
                <div class="col-xl-6 col-lg-6">
                    <div class="faq-two__left">
                        <div class="faq-two__left-text">
                            <p>Dorem iDsum dolor sit amet, conse ctetur adipisicing elit sed do eiusm od tempor ut
                                labore. sit amet scelerisque eros. Phasellus hendrerit neque a augue.</p>
                        </div>

                        <div class="faq-two__left-bottom">
                            <div class="row">
                                <div class="col-xl-6 col-lg-12 col-md-6">
                                    <div class="faq-two__left-bottom-single">
                                        <div class="img-box">
                                            <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                        </div>
                                        <p> <span class="icon-check"></span> If you are going passage.</p>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-12 col-md-6">
                                    <div class="faq-two__left-bottom-single">
                                        <div class="img-box">
                                            <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                        </div>
                                        <p> <span class="icon-check"></span> Lorem ipsum available.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Faq Two Left-->


                <!--Start Faq Two Accordion-->
                <div class="col-xl-6 col-lg-6">
                    <div class="faq-two__accordion">
                        <ul class="accordion-box">
                            <li class="accordion block active-block">
                                <div class="acc-btn active">
                                    <div class="icon-outer">
                                        <i class="icon-plus"></i>
                                    </div>
                                    <h3>
                                        How can I make a change to my application?
                                    </h3>
                                </div>
                                <div class="acc-content current">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                                    </p>
                                </div>
                            </li>

                            <li class="accordion block mb0">
                                <div class="acc-btn">
                                    <div class="icon-outer">
                                        <i class="icon-plus"></i>
                                    </div>
                                    <h3>
                                        Duis id leo id quam venenatis lobortis eu mattis
                                    </h3>
                                </div>
                                <div class="acc-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--End Faq Two Accordion-->
            </div>
        </div>
    </section>
    <!--End Faq Two-->


    <!--Start Testimonial Three-->
    <section class="testimonial-three clearfix">
        <div class="border1"></div>
        <div class="border2"></div>
        <div class="middle-box"> </div>

        <div class="testimonial-three__bg"
            style="background-image: url({{ asset('assets/images/hero-construction.png') }}?v=1.0.1);"></div>
        <div class="container-fluid">
            <div class="testimonial-three__title">
                <h2>Our Sweet Client Say</h2>
            </div>

            <div class="testimonial-three__content">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testimonial-three__content-inner">

                            <div class="owl-carousel owl-theme thm-owl__carousel testimonial-three__carousel"
                                data-owl-options='{
                                        "loop": true,
                                        "autoplay": true,
                                        "margin": 30,
                                        "nav": false,
                                        "dots": false,
                                        "smartSpeed": 500,
                                        "autoplayTimeout": 10000,
                                        "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                                        "responsive": {
                                                "0": {
                                                    "items": 1
                                                },
                                                "768": {
                                                    "items": 1
                                                },
                                                "992": {
                                                    "items": 1
                                                },
                                                "1200": {
                                                    "items": 1
                                                }
                                            }
                                        }'>

                                <!--Start Testimonial Three Single-->
                                <div class="testimonial-three__single">
                                    <div class="testimonial-three__single-content">
                                        <div class="text-box">
                                            <p>Room Wallpaper </p>
                                            <h2><a href="#">Exterior Design</a></h2>
                                        </div>
                                    </div>

                                    <div class="overlay-content">
                                        <div class="icon-box">
                                            <span class="icon-right-quotation-mark"></span>
                                        </div>
                                        <div class="inner">
                                            <div class="text-box">
                                                <p>Lorem ipsum dolor sit amet elit, sed do eiusmod tempor to incidut
                                                    labore et dolore magna for aliqua. Quis ipsum suspendisse.</p>
                                            </div>

                                            <div class="client-info">
                                                <div class="img-box">
                                                    <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1"
                                                        alt="#">
                                                </div>

                                                <div class="text">
                                                    <h4>John Smith</h4>
                                                    <p>Our Customer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Testimonial Three Single-->

                                <!--Start Testimonial Three Single-->
                                <div class="testimonial-three__single">
                                    <div class="testimonial-three__single-content">
                                        <div class="text-box">
                                            <p>Room Wallpaper </p>
                                            <h2><a href="#">Wall Paintings</a></h2>
                                        </div>
                                    </div>

                                    <div class="overlay-content">
                                        <div class="icon-box">
                                            <span class="icon-right-quotation-mark"></span>
                                        </div>
                                        <div class="inner">
                                            <div class="text-box">
                                                <p>Lorem ipsum dolor sit amet elit, sed do eiusmod tempor to incidut
                                                    labore et dolore magna for aliqua. Quis ipsum suspendisse.</p>
                                            </div>

                                            <div class="client-info">
                                                <div class="img-box">
                                                    <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1"
                                                        alt="#">
                                                </div>

                                                <div class="text">
                                                    <h4>John Smith</h4>
                                                    <p>Our Customer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Testimonial Three Single-->

                                <!--Start Testimonial Three Single-->
                                <div class="testimonial-three__single">
                                    <div class="testimonial-three__single-content">
                                        <div class="text-box">
                                            <p>Room Wallpaper </p>
                                            <h2><a href="#">Room Interior</a></h2>
                                        </div>
                                    </div>

                                    <div class="overlay-content">
                                        <div class="icon-box">
                                            <span class="icon-right-quotation-mark"></span>
                                        </div>
                                        <div class="inner">
                                            <div class="text-box">
                                                <p>Lorem ipsum dolor sit amet elit, sed do eiusmod tempor to incidut
                                                    labore et dolore magna for aliqua. Quis ipsum suspendisse.</p>
                                            </div>

                                            <div class="client-info">
                                                <div class="img-box">
                                                    <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1"
                                                        alt="#">
                                                </div>

                                                <div class="text">
                                                    <h4>John Smith</h4>
                                                    <p>Our Customer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Testimonial Three Single-->

                                <!--Start Testimonial Three Single-->
                                <div class="testimonial-three__single">
                                    <div class="testimonial-three__single-content">
                                        <div class="text-box">
                                            <p>Room Wallpaper </p>
                                            <h2><a href="#">Exterior Design</a></h2>
                                        </div>
                                    </div>

                                    <div class="overlay-content">
                                        <div class="icon-box">
                                            <span class="icon-right-quotation-mark"></span>
                                        </div>
                                        <div class="inner">
                                            <div class="text-box">
                                                <p>Lorem ipsum dolor sit amet elit, sed do eiusmod tempor to incidut
                                                    labore et dolore magna for aliqua. Quis ipsum suspendisse.</p>
                                            </div>

                                            <div class="client-info">
                                                <div class="img-box">
                                                    <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1"
                                                        alt="#">
                                                </div>

                                                <div class="text">
                                                    <h4>John Smith</h4>
                                                    <p>Our Customer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Testimonial Three Single-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Testimonial Three-->


    <!--Start Blog Three -->
    <section class="blog-three clearfix">
        <div class="container">
            <div class="sec-title-three text-center">
                <div class="sec-title-three__tagline">
                    <p>Recent Articles</p>
                </div>
                <h2>Our Latest News Insight </h2>
            </div>
            <div class="row">
                <!--Start Blog Three Single-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-three__single style2">
                        <div class="blog-three__single-content">
                            <h2><a href="{{ route('blog-details') }}">The purpose of lorem
                                    looking block.</a></h2>
                            <p>January 22, 2023</p>
                        </div>
                    </div>

                    <div class="blog-three__single">
                        <div class="blog-three__single-content">
                            <h2><a href="{{ route('blog-details') }}">The purpose of lorem
                                    looking block.</a></h2>
                            <p>January 22, 2023</p>
                        </div>
                    </div>
                </div>
                <!--End Blog Three Single-->

                <!--Start Blog Three Single-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-three__single">
                        <div class="blog-three__single-img">
                            <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                        </div>

                        <div class="blog-three__single-content style2">
                            <h2><a href="{{ route('blog-details') }}">The purpose of lorem
                                    looking block.</a></h2>
                            <p>January 22, 2023</p>
                        </div>
                    </div>
                </div>
                <!--End Blog Three Single-->

                <!--Start Blog Three Single-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.3s">
                    <div class="blog-three__single">
                        <div class="blog-three__single-img">
                            <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                        </div>

                        <div class="blog-three__single-content style2">
                            <h2><a href="{{ route('blog-details') }}">The purpose of lorem
                                    looking block.</a></h2>
                            <p>January 22, 2023</p>
                        </div>
                    </div>
                </div>
                <!--End Blog Three Single-->

                <!--Start Blog Three Single-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.4s">
                    <div class="blog-three__single">
                        <div class="blog-three__single-img">
                            <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                        </div>

                        <div class="blog-three__single-content style2">
                            <h2><a href="{{ route('blog-details') }}">The purpose of lorem
                                    looking block.</a></h2>
                            <p>January 22, 2023</p>
                        </div>
                    </div>
                </div>
                <!--End Blog Three Single-->
            </div>
        </div>
    </section>
    <!--End Blog Three -->

    <!--Start Cta Two -->
    <section class="cta-two">
        <div class="container">
            <div class="row">
                <div class="cta-two__inner">
                    <div class="cta-two__content">
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
    <!--End Cta Two -->

    <x-footer_style_two />
@endsection



