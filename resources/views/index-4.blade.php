@extends('layouts.layout4')
@section('title', 'Bulidy || Responsive Laravel  Template')


@section('content')

    <!-- /.stricky-header -->


    <!--Start Main Slider -->
    <section class="main-slider main-slider-one">
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
                    <div class="shape1"
                        style="background-image: url({{ asset('assets/images/hero-construction.png') }}?v=1.0.1);"></div>
                    <div class="shape2"><img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                    </div>
                    <div class="shape3"><img class="float-bob-y"
                            src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#"></div>
                    <div class="container">
                        <div class="main-slider-one__content">
                            <div class="title">
                                <h2>World's Largest <br> And Trusted <br> Company</h2>
                            </div>
                            <div class="btn-box">
                                <a class="thm-btn" href="{{ route('contact') }}">
                                    <span class="txt">Contact Now</span>
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
                    <div class="shape1"
                        style="background-image: url({{ asset('assets/images/hero-construction.png') }}?v=1.0.1);"></div>
                    <div class="shape2"><img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                    </div>
                    <div class="shape3"><img class="float-bob-y"
                            src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#"></div>
                    <div class="container">
                        <div class="main-slider-one__content">
                            <div class="title">
                                <h2>World's Largest <br> And Trusted <br> Company</h2>
                            </div>
                            <div class="btn-box">
                                <a class="thm-btn" href="{{ route('contact') }}">
                                    <span class="txt">Contact Now</span>
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
                    <div class="shape1"
                        style="background-image: url({{ asset('assets/images/hero-construction.png') }}?v=1.0.1);"></div>
                    <div class="shape2"><img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                    </div>
                    <div class="shape3"><img class="float-bob-y"
                            src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#"></div>
                    <div class="container">
                        <div class="main-slider-one__content">
                            <div class="title">
                                <h2>World's Largest <br> And Trusted <br> Company</h2>
                            </div>
                            <div class="btn-box">
                                <a class="thm-btn" href="{{ route('contact') }}">
                                    <span class="txt">Contact Now</span>
                                    <i class="icon-double-chevron"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Main Slider One-->
            </div>

            <!-- If we need navigation buttons -->
            <div class="main-slider__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                    <i class="icon-left-arrow"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                    <i class="icon-right-arrow"></i>
                </div>
            </div>

        </div>
    </section>
    <!--End Main Slider-->


    <!--Start Feature One -->
    <section class="feature-one">
        <div class="feature-one__pattern"
            style="background-image: url({{ asset('assets/images/hero-construction.png') }}?v=1.0.1);">
        </div>
        <div class="shape1">
            <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
        </div>
        <div class="shape2">
            <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
        </div>
        <div class="container">
            <div class="row">
                <!--Start Feature One Content-->
                <div class="col-xl-7">
                    <div class="feature-one__content">
                        <ul class="feature-one__content-list">
                            <li class="wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">
                                <div class="inner">
                                    <div class="left-content">
                                        <div class="icon-box">
                                            <span class="icon-construction"></span>
                                        </div>
                                        <div class="title-box">
                                            <h2><a href="{{ route('bridge-costruction') }}">We Make Strong Essential <br>
                                                    Innovations</a></h2>
                                        </div>
                                    </div>

                                    <div class="btn-box">
                                        <a href="{{ route('bridge-costruction') }}"><span
                                                class="icon-right-arrow-1"></span></a>
                                    </div>
                                </div>
                            </li>

                            <li class="wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1000ms">
                                <div class="inner">
                                    <div class="left-content">
                                        <div class="icon-box">
                                            <span class="icon-construction-1"></span>
                                        </div>
                                        <div class="title-box">
                                            <h2><a href="{{ route('bridge-costruction') }}">We Take Care and Growth <br>
                                                    Your
                                                    Business </a></h2>
                                        </div>
                                    </div>

                                    <div class="btn-box">
                                        <a href="{{ route('bridge-costruction') }}"><span
                                                class="icon-right-arrow-1"></span></a>
                                    </div>
                                </div>
                            </li>

                            <li class="wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1000ms">
                                <div class="inner">
                                    <div class="left-content">
                                        <div class="icon-box">
                                            <span class="icon-construction-2"></span>
                                        </div>
                                        <div class="title-box">
                                            <h2><a href="{{ route('bridge-costruction') }}">Providing Full Range Of <br>
                                                    High
                                                    Solution</a></h2>
                                        </div>
                                    </div>

                                    <div class="btn-box">
                                        <a href="{{ route('bridge-costruction') }}"><span
                                                class="icon-right-arrow-1"></span></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--End Feature One Content-->

                <!--Start Feature One Form-->
                <div class="col-xl-5">
                    <div class="feature-one__form">
                        <div class="feature-one__form-bg"
                            style="background-image: url({{ asset('assets/images/hero-construction.png') }}?v=1.0.1);">
                        </div>
                        <div class="title-box">
                            <h2>Free Consultation</h2>
                        </div>

                        <div class="form-box">
                            <form method="post" action="{{ route('index') }}">
                                <div class="form-group">
                                    <input type="text" name="username" placeholder="Full Name" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" placeholder="Phone" required="">
                                </div>
                                <div class="form-group">
                                    <div class="select-box">
                                        <select class="selectmenu wide">
                                            <option selected>Choose Services</option>
                                            <option>Indoor Cleaning</option>
                                            <option>House Cleaning</option>
                                            <option>Plumbing Cleaning</option>
                                            <option>Window Cleaning</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea placeholder="Write Message"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="button-box">
                                            <button class="thm-btn" type="submit" data-loading-text="Please wait...">
                                                <span class="txt">
                                                    Free Consultation
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <!--End Feature One Form-->
            </div>
        </div>
    </section>
    <!--End Feature One -->


    <!--Start About One -->
    <section class="about-one">
        <div class="about-one__bg" style="background-image: url({{ asset('assets/images/hero-construction.png') }}?v=1.0.1);">
        </div>
        <div class="shape1 float-bob-y"><img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#"></div>
        <div class="shape4 float-bob-y"><img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#"></div>
        <div class="container">
            <div class="row">
                <!--Start About One Img-->
                <div class="col-xl-6">
                    <div class="about-one__img">
                        <div class="inner">
                            <div class="shape2"></div>
                            <div class="shape3"><img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                            </div>
                            <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                        </div>
                    </div>
                </div>
                <!--End About One Img-->

                <!--Start About One Content-->
                <div class="col-xl-6">
                    <div class="about-one__content">
                        <div class="sec-title">
                            <h2>Special Industrial Process <br> Production For Business <br> And Company </h2>
                        </div>

                        <div class="about-one__content-text">
                            <p>Nulla commodo dolor massa, vel pellentesque nulla congue quis. Fusce ut convallis
                                diam. Nam id tortor et nunc tempor faucibus. Sed eu leo egestas, imperdiet felis
                                sed, vestibulum ligula.</p>
                        </div>

                        <div class="about-one__content-text2">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="about-one__content-text2-single">
                                        <ul>
                                            <li>
                                                <div class="icon-box">
                                                    <span class="icon-confirmation"></span>
                                                </div>
                                                <div class="text-box">
                                                    <p>Innovative work</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="text">
                                            <p>Lorem ipsum dolor sit ame sedme consectetur nod.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="about-one__content-text2-single">
                                        <ul>
                                            <li>
                                                <div class="icon-box">
                                                    <span class="icon-confirmation"></span>
                                                </div>
                                                <div class="text-box">
                                                    <p>Certified company
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="text">
                                            <p>Lorem ipsum dolor sit ame sedme consectetur nod.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="about-one__content-bottom">
                            <div class="btn-box">
                                <a class="thm-btn" href="{{ route('about') }}">
                                    <span class="txt">Discover More </span>
                                    <i class="icon-double-chevron"></i>
                                </a>
                            </div>
                            <div class="contact-info">
                                <div class="icon-box">
                                    <span class="icon-telephone"></span>
                                </div>
                                <div class="text-box">
                                    <h4><a href="tel:9200368090"> 92 (003) 68-090</a></h4>
                                    <p>Call to Our Experts</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--End About One Content-->
            </div>
        </div>
    </section>
    <!--End About One -->


    <!--Start Services One -->
    <section class="services-one">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>We Provide Best Services <br> For Industries</h2>
            </div>

            <div class="row">
                <!--Start Services One Single-->
                <div class="col-xl-3 col-lg-6 col-md-6  wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                    <div class="services-one__single text-center">
                        <div class="services-one__single-img">
                            <div class="inner">
                                <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                            </div>
                            <div class="icon-box">
                                <span class="icon-wrench"></span>
                            </div>
                        </div>

                        <div class="services-one__single-title">
                            <h2><a href="{{ route('bridge-costruction') }}">Petroleum Refinery</a></h2>
                        </div>
                    </div>
                </div>
                <!--End Services One Single-->

                <!--Start Services One Single-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">
                    <div class="services-one__single text-center">
                        <div class="services-one__single-img">
                            <div class="inner">
                                <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                            </div>
                            <div class="icon-box">
                                <span class="icon-house-repair"></span>
                            </div>
                        </div>

                        <div class="services-one__single-title">
                            <h2><a href="{{ route('bridge-costruction') }}">Mechanical Works </a></h2>
                        </div>
                    </div>
                </div>
                <!--End Services One Single-->

                <!--Start Services One Single-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                    <div class="services-one__single text-center">
                        <div class="services-one__single-img">
                            <div class="inner">
                                <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                            </div>
                            <div class="icon-box">
                                <span class="icon-engineering"></span>
                            </div>
                        </div>

                        <div class="services-one__single-title">
                            <h2><a href="{{ route('bridge-costruction') }}">Power & Energy</a></h2>
                        </div>
                    </div>
                </div>
                <!--End Services One Single-->

                <!--Start Services One Single-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1000ms">
                    <div class="services-one__single text-center">
                        <div class="services-one__single-img">
                            <div class="inner">
                                <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                            </div>
                            <div class="icon-box">
                                <span class="icon-factory"></span>
                            </div>
                        </div>

                        <div class="services-one__single-title">
                            <h2><a href="{{ route('bridge-costruction') }}">Welding & Laser</a></h2>
                        </div>
                    </div>
                </div>
                <!--End Services One Single-->
            </div>
        </div>
    </section>
    <!--End Services One -->

    <!--Start Brand One-->
    <section class="brand-one">
        <div class="container">
            <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                                                "0": {
                                                    "spaceBetween": 30,
                                                    "slidesPerView": 1
                                                },
                                                "375": {
                                                    "spaceBetween": 30,
                                                    "slidesPerView": 1
                                                },
                                                "575": {
                                                    "spaceBetween": 30,
                                                    "slidesPerView": 2
                                                },
                                                "767": {
                                                    "spaceBetween": 30,
                                                    "slidesPerView": 2
                                                },
                                                "991": {
                                                    "spaceBetween": 30,
                                                    "slidesPerView": 3
                                                },
                                                "1199": {
                                                    "spaceBetween": 30,
                                                    "slidesPerView": 4
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
                </div>
            </div>
        </div>
    </section>
    <!--End Brand One -->

    <!--Start Portfolio One-->
    <section class="portfolio-one">
        <div class="portfolio-one__bg"
            style="background-image: url({{ asset('assets/images/hero-construction.png') }}?v=1.0.1);"></div>
        <div class="container">
            <div class="portfolio-one__top">
                <div class="sec-title">
                    <h2>Delivering Excellence With <br> Business</h2>
                </div>
                <div class="btn-box">
                    <a class="thm-btn" href="{{ route('portfolio') }}">
                        <span class="txt">More Services </span>
                        <i class="icon-double-chevron"></i>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="portfolio-one__inner">

                        <div class="portfolio-one__tab-box tabs-box">
                            <div class="portfolio-one__tab-menu">
                                <div class="title">
                                    <h2>Our Portfolio</h2>
                                </div>
                                <div class="portfolio-one__tab-menu-bg"
                                    style="background-image: url({{ asset('assets/images/hero-construction.png') }}?v=1.0.1);">
                                </div>
                                <ul class="tab-buttons clearfix list-unstyled">
                                    <li data-tab="#civil" class="tab-btn">Civil & Engineering<span
                                            class="icon-double-chevron"></span></li>
                                    <li data-tab="#industrial" class="tab-btn active-btn">Mechanical Industrial<span
                                            class="icon-double-chevron"></span>
                                    </li>
                                    <li data-tab="#design" class="tab-btn">Interior Design<span
                                            class="icon-double-chevron"></span></li>
                                    <li data-tab="#mechanical" class="tab-btn">Mechanical Works<span
                                            class="icon-double-chevron"></span></li>
                                </ul>
                            </div>


                            <div class="tabs-content">
                                <!--Start Tab-->
                                <div class="tab active-tab" id="civil">
                                    <div class="tabs-content__inner">
                                        <div class="tabs-content__img">
                                            <div class="inner">
                                                <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1"
                                                    alt="#">
                                                <div class="content-box">
                                                    <div class="text-box">
                                                        <h2><a href="{{ route('portfolio-details') }}">Businesses Growth</a>
                                                        </h2>
                                                        <p>Forestry Innovation</p>
                                                    </div>

                                                    <div class="btn-box">
                                                        <a href="{{ route('portfolio-details') }}"><span
                                                                class="icon-double-chevron"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Tab-->

                                <!--Start Tab-->
                                <div class="tab" id="industrial">
                                    <div class="tabs-content__inner">
                                        <div class="tabs-content__img">
                                            <div class="inner">
                                                <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1"
                                                    alt="#">
                                                <div class="content-box">
                                                    <div class="text-box">
                                                        <h2><a href="{{ route('portfolio-details') }}">Businesses Growth</a>
                                                        </h2>
                                                        <p>Forestry Innovation</p>
                                                    </div>

                                                    <div class="btn-box">
                                                        <a href="{{ route('portfolio-details') }}"><span
                                                                class="icon-double-chevron"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Tab-->

                                <!--Start Tab-->
                                <div class="tab" id="design">
                                    <div class="tabs-content__inner">
                                        <div class="tabs-content__img">
                                            <div class="inner">
                                                <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1"
                                                    alt="#">
                                                <div class="content-box">
                                                    <div class="text-box">
                                                        <h2><a href="{{ route('portfolio-details') }}">Businesses Growth</a>
                                                        </h2>
                                                        <p>Forestry Innovation</p>
                                                    </div>

                                                    <div class="btn-box">
                                                        <a href="{{ route('portfolio-details') }}"><span
                                                                class="icon-double-chevron"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Tab-->

                                <!--Start Tab-->
                                <div class="tab" id="mechanical">
                                    <div class="tabs-content__inner">
                                        <div class="tabs-content__img">
                                            <div class="inner">
                                                <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1"
                                                    alt="#">
                                                <div class="content-box">
                                                    <div class="text-box">
                                                        <h2><a href="{{ route('portfolio-details') }}">Businesses Growth</a>
                                                        </h2>
                                                        <p>Forestry Innovation</p>
                                                    </div>

                                                    <div class="btn-box">
                                                        <a href="{{ route('portfolio-details') }}"><span
                                                                class="icon-double-chevron"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Tab-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Portfolio One-->


    <!--Start Features Two-->
    <section class="features-two">
        <div class="container">
            <div class="sec-title text-center">
                <h2>Creative Features From Production <br> Industry</h2>
            </div>
            <div class="row">
                <!--Start Features Two Single-->
                <div class="col-xl-4 col-lg-4 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                    <div class="features-two__single">
                        <div class="features-two__single-inner">
                            <div class="features-two__single-icon">
                                <span class="icon-factory-1"></span>
                            </div>

                            <div class="features-two__single-content">
                                <h2><a href="{{ route('bridge-costruction') }}">Processing Industry</a></h2>
                                <p>While designing residential property
                                    great emphasis is placed on landsc
                                    design and transport.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Features Two Single-->

                <!--Start Features Two Single-->
                <div class="col-xl-4 col-lg-4 col-md-6 wow animated fadeInUp" data-wow-delay="0.3s">
                    <div class="features-two__single">
                        <div class="features-two__single-inner">
                            <div class="features-two__single-icon">
                                <span class="icon-crane"></span>
                            </div>

                            <div class="features-two__single-content">
                                <h2><a href="{{ route('bridge-costruction') }}">Ecological Production</a></h2>
                                <p>While designing residential property
                                    great emphasis is placed on landsc
                                    design and transport.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Features Two Single-->

                <!--Start Features Two Single-->
                <div class="col-xl-4 col-lg-4 col-md-6 wow animated fadeInUp" data-wow-delay="0.5s">
                    <div class="features-two__single">
                        <div class="features-two__single-inner">
                            <div class="features-two__single-icon">
                                <span class="icon-gas-station"></span>
                            </div>

                            <div class="features-two__single-content">
                                <h2><a href="{{ route('bridge-costruction') }}">Gas and Oil Industry</a></h2>
                                <p>While designing residential property
                                    great emphasis is placed on landsc
                                    design and transport.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Features Two Single-->

                <!--Start Features Two Single-->
                <div class="col-xl-4 col-lg-4 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                    <div class="features-two__single">
                        <div class="features-two__single-inner">
                            <div class="features-two__single-icon">
                                <span class="icon-express-delivery"></span>
                            </div>

                            <div class="features-two__single-content">
                                <h2><a href="{{ route('bridge-costruction') }}">Quick Delivery</a></h2>
                                <p>While designing residential property
                                    great emphasis is placed on landsc
                                    design and transport.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Features Two Single-->

                <!--Start Features Two Single-->
                <div class="col-xl-4 col-lg-4 col-md-6 wow animated fadeInUp" data-wow-delay="0.3s">
                    <div class="features-two__single">
                        <div class="features-two__single-inner">
                            <div class="features-two__single-icon">
                                <span class="icon-renewable-energy"></span>
                            </div>

                            <div class="features-two__single-content">
                                <h2><a href="{{ route('bridge-costruction') }}">Renewable Energy</a></h2>
                                <p>While designing residential property
                                    great emphasis is placed on landsc
                                    design and transport.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Features Two Single-->

                <!--Start Features Two Single-->
                <div class="col-xl-4 col-lg-4 col-md-6 wow animated fadeInUp" data-wow-delay="0.5s">
                    <div class="features-two__single">
                        <div class="features-two__single-inner">
                            <div class="features-two__single-icon">
                                <span class="icon-customer-support"></span>
                            </div>

                            <div class="features-two__single-content">
                                <h2><a href="{{ route('bridge-costruction') }}">Expert Support Member</a></h2>
                                <p>While designing residential property
                                    great emphasis is placed on landsc
                                    design and transport.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Features Two Single-->
            </div>
        </div>
    </section>
    <!--End Features Two-->


    <!--Start Product One-->
    <section class="product-one">
        <div class="product-one__bg"
            style="background-image: url({{ asset('assets/images/hero-construction.png') }}?v=1.0.1);">
        </div>
        <div class="product-one__pattern"
            style="background-image: url({{ asset('assets/images/hero-construction.png') }}?v=1.0.1);">
        </div>
        <div class="shape1 float-bob-y"><img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#"></div>
        <div class="shape2 float-bob-y"><img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#"></div>
        <div class="container">
            <div class="sec-title">
                <h2>We Have Qualityfull Product</h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="product-one__inner">

                        <div class="owl-carousel owl-theme thm-owl__carousel product-one__carousel" data-owl-options='{
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
                                                        "items": 3
                                                    },
                                                    "1200": {
                                                        "items": 4
                                                    }
                                                }
                                            }'>

                            <!--Start Product One Single-->
                            <div class="product-one__single">
                                <div class="product-one__single-img">
                                    <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                </div>
                                <div class="product-one__single-inner">
                                    <div class="rating-box text-center">
                                        <ul>
                                            <li>
                                                <span class="icon-pointed-star"></span>
                                            </li>
                                            <li>
                                                <span class="icon-pointed-star"></span>
                                            </li>
                                            <li>
                                                <span class="icon-pointed-star"></span>
                                            </li>
                                            <li>
                                                <span class="icon-pointed-star"></span>
                                            </li>
                                            <li>
                                                <span class="icon-pointed-star"></span>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="content-box">
                                        <div class="left">
                                            <h3><a href="#">Compact Drill</a></h3>
                                            <p>Construction</p>
                                        </div>
                                        <div class="right">
                                            <p>$159.00</p>
                                        </div>
                                    </div>

                                    <div class="product-one__single-cart-btn">
                                        <div class="title">
                                            <h6><a href="#">Add To Cart</a></h6>
                                        </div>

                                        <div class="icon">
                                            <ul>
                                                <li><a href="#"><span class="icon-visibility"></span></a></li>
                                                <li><a href="#"><span class="icon-heart"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--End Product One Single-->

                            <!--Start Product One Single-->
                            <div class="product-one__single">
                                <div class="product-one__single-img">
                                    <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                </div>
                                <div class="product-one__single-inner">
                                    <div class="rating-box text-center">
                                        <ul>
                                            <li>
                                                <span class="icon-pointed-star"></span>
                                            </li>
                                            <li>
                                                <span class="icon-pointed-star"></span>
                                            </li>
                                            <li>
                                                <span class="icon-pointed-star"></span>
                                            </li>
                                            <li>
                                                <span class="icon-pointed-star"></span>
                                            </li>
                                            <li>
                                                <span class="icon-pointed-star"></span>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="content-box">
                                        <div class="left">
                                            <h3><a href="#">Compact Drill</a></h3>
                                            <p>Construction</p>
                                        </div>
                                        <div class="right">
                                            <p>$159.00</p>
                                        </div>
                                    </div>

                                    <div class="product-one__single-cart-btn">
                                        <div class="title">
                                            <h6><a href="#">Add To Cart</a></h6>
                                        </div>

                                        <div class="icon">
                                            <ul>
                                                <li><a href="#"><span class="icon-visibility"></span></a></li>
                                                <li><a href="#"><span class="icon-heart"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--End Product One Single-->

                            <!--Start Product One Single-->
                            <div class="product-one__single">
                                <div class="product-one__single-img">
                                    <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                </div>
                                <div class="product-one__single-inner">
                                    <div class="rating-box text-center">
                                        <ul>
                                            <li>
                                                <span class="icon-pointed-star"></span>
                                            </li>
                                            <li>
                                                <span class="icon-pointed-star"></span>
                                            </li>
                                            <li>
                                                <span class="icon-pointed-star"></span>
                                            </li>
                                            <li>
                                                <span class="icon-pointed-star"></span>
                                            </li>
                                            <li>
                                                <span class="icon-pointed-star"></span>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="content-box">
                                        <div class="left">
                                            <h3><a href="#">Compact Drill</a></h3>
                                            <p>Construction</p>
                                        </div>
                                        <div class="right">
                                            <p>$159.00</p>
                                        </div>
                                    </div>

                                    <div class="product-one__single-cart-btn">
                                        <div class="title">
                                            <h6><a href="#">Add To Cart</a></h6>
                                        </div>

                                        <div class="icon">
                                            <ul>
                                                <li><a href="#"><span class="icon-visibility"></span></a></li>
                                                <li><a href="#"><span class="icon-heart"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--End Product One Single-->

                            <!--Start Product One Single-->
                            <div class="product-one__single">
                                <div class="product-one__single-img">
                                    <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                </div>
                                <div class="product-one__single-inner">
                                    <div class="rating-box text-center">
                                        <ul>
                                            <li>
                                                <span class="icon-pointed-star"></span>
                                            </li>
                                            <li>
                                                <span class="icon-pointed-star"></span>
                                            </li>
                                            <li>
                                                <span class="icon-pointed-star"></span>
                                            </li>
                                            <li>
                                                <span class="icon-pointed-star"></span>
                                            </li>
                                            <li>
                                                <span class="icon-pointed-star"></span>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="content-box">
                                        <div class="left">
                                            <h3><a href="#">Compact Drill</a></h3>
                                            <p>Construction</p>
                                        </div>
                                        <div class="right">
                                            <p>$159.00</p>
                                        </div>
                                    </div>

                                    <div class="product-one__single-cart-btn">
                                        <div class="title">
                                            <h6><a href="#">Add To Cart</a></h6>
                                        </div>

                                        <div class="icon">
                                            <ul>
                                                <li><a href="#"><span class="icon-visibility"></span></a></li>
                                                <li><a href="#"><span class="icon-heart"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--End Product One Single-->

                            <!--Start Product One Single-->
                            <div class="product-one__single">
                                <div class="product-one__single-img">
                                    <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                </div>
                                <div class="product-one__single-inner">
                                    <div class="rating-box text-center">
                                        <ul>
                                            <li>
                                                <span class="icon-pointed-star"></span>
                                            </li>
                                            <li>
                                                <span class="icon-pointed-star"></span>
                                            </li>
                                            <li>
                                                <span class="icon-pointed-star"></span>
                                            </li>
                                            <li>
                                                <span class="icon-pointed-star"></span>
                                            </li>
                                            <li>
                                                <span class="icon-pointed-star"></span>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="content-box">
                                        <div class="left">
                                            <h3><a href="#">Compact Drill</a></h3>
                                            <p>Construction</p>
                                        </div>
                                        <div class="right">
                                            <p>$159.00</p>
                                        </div>
                                    </div>

                                    <div class="product-one__single-cart-btn">
                                        <div class="title">
                                            <h6><a href="#">Add To Cart</a></h6>
                                        </div>

                                        <div class="icon">
                                            <ul>
                                                <li><a href="#"><span class="icon-visibility"></span></a></li>
                                                <li><a href="#"><span class="icon-heart"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--End Product One Single-->

                            <!--Start Product One Single-->
                            <div class="product-one__single">
                                <div class="product-one__single-img">
                                    <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                </div>
                                <div class="product-one__single-inner">
                                    <div class="rating-box text-center">
                                        <ul>
                                            <li>
                                                <span class="icon-pointed-star"></span>
                                            </li>
                                            <li>
                                                <span class="icon-pointed-star"></span>
                                            </li>
                                            <li>
                                                <span class="icon-pointed-star"></span>
                                            </li>
                                            <li>
                                                <span class="icon-pointed-star"></span>
                                            </li>
                                            <li>
                                                <span class="icon-pointed-star"></span>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="content-box">
                                        <div class="left">
                                            <h3><a href="#">Compact Drill</a></h3>
                                            <p>Construction</p>
                                        </div>
                                        <div class="right">
                                            <p>$159.00</p>
                                        </div>
                                    </div>

                                    <div class="product-one__single-cart-btn">
                                        <div class="title">
                                            <h6><a href="#">Add To Cart</a></h6>
                                        </div>

                                        <div class="icon">
                                            <ul>
                                                <li><a href="#"><span class="icon-visibility"></span></a></li>
                                                <li><a href="#"><span class="icon-heart"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--End Product One Single-->

                            <!--Start Product One Single-->
                            <div class="product-one__single">
                                <div class="product-one__single-img">
                                    <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                </div>
                                <div class="product-one__single-inner">
                                    <div class="rating-box text-center">
                                        <ul>
                                            <li>
                                                <span class="icon-pointed-star"></span>
                                            </li>
                                            <li>
                                                <span class="icon-pointed-star"></span>
                                            </li>
                                            <li>
                                                <span class="icon-pointed-star"></span>
                                            </li>
                                            <li>
                                                <span class="icon-pointed-star"></span>
                                            </li>
                                            <li>
                                                <span class="icon-pointed-star"></span>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="content-box">
                                        <div class="left">
                                            <h3><a href="#">Compact Drill</a></h3>
                                            <p>Construction</p>
                                        </div>
                                        <div class="right">
                                            <p>$159.00</p>
                                        </div>
                                    </div>

                                    <div class="product-one__single-cart-btn">
                                        <div class="title">
                                            <h6><a href="#">Add To Cart</a></h6>
                                        </div>

                                        <div class="icon">
                                            <ul>
                                                <li><a href="#"><span class="icon-visibility"></span></a></li>
                                                <li><a href="#"><span class="icon-heart"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--End Product One Single-->

                            <!--Start Product One Single-->
                            <div class="product-one__single">
                                <div class="product-one__single-img">
                                    <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                </div>
                                <div class="product-one__single-inner">
                                    <div class="rating-box text-center">
                                        <ul>
                                            <li>
                                                <span class="icon-pointed-star"></span>
                                            </li>
                                            <li>
                                                <span class="icon-pointed-star"></span>
                                            </li>
                                            <li>
                                                <span class="icon-pointed-star"></span>
                                            </li>
                                            <li>
                                                <span class="icon-pointed-star"></span>
                                            </li>
                                            <li>
                                                <span class="icon-pointed-star"></span>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="content-box">
                                        <div class="left">
                                            <h3><a href="#">Compact Drill</a></h3>
                                            <p>Construction</p>
                                        </div>
                                        <div class="right">
                                            <p>$159.00</p>
                                        </div>
                                    </div>

                                    <div class="product-one__single-cart-btn">
                                        <div class="title">
                                            <h6><a href="#">Add To Cart</a></h6>
                                        </div>

                                        <div class="icon">
                                            <ul>
                                                <li><a href="#"><span class="icon-visibility"></span></a></li>
                                                <li><a href="#"><span class="icon-heart"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--End Product One Single-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Product One-->


    <!--Start Testimonial One -->
    <section class="testimonial-one">
        <div class="testimonial-one__pattern"
            style="background-image: url({{ asset('assets/images/hero-construction.png') }}?v=1.0.1);">
        </div>
        <div class="shape1 float-bob-y"><img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
        </div>
        <div class="container">
            <div class="testimonial-one__top">
                <div class="sec-title">
                    <h2>Our Happy Cusatomers <br> Say About</h2>
                </div>

                <div class="btn-box">
                    <a class="thm-btn" href="{{ route('about') }}">
                        <span class="txt">More Services </span>
                        <i class="icon-double-chevron"></i>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testimonial-one__inner">
                        <div class="owl-carousel owl-theme thm-owl__carousel testimonial-one__carousel" data-owl-options='{
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


                            <!--Start Testimonial One Single-->
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__single-top">
                                    <div class="img-box">
                                        <div class="inner">
                                            <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1"
                                                alt="#">
                                        </div>
                                        <div class="icon">
                                            <span class="icon-right-quotation-mark"></span>
                                        </div>
                                    </div>

                                    <div class="text-box">
                                        <h2>Smith Vectoria</h2>
                                        <p>director</p>
                                        <div class="rating-box">
                                            <ul>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="testimonial-one__single-bottom">
                                    <div class="text-box">
                                        <p>Pellentesque habitant morbi tristique senectus netus et malesuada fames
                                            ac
                                            turp egestas. Aliquam viverra arcu. Donec aliquet blandit enim feugiat
                                            mattis.</p>
                                    </div>

                                    <div class="btn-box">
                                        <a href="#">Read more <span class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--End Testimonial One Single-->

                            <!--Start Testimonial One Single-->
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__single-top">
                                    <div class="img-box">
                                        <div class="inner">
                                            <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1"
                                                alt="#">
                                        </div>
                                        <div class="icon">
                                            <span class="icon-right-quotation-mark"></span>
                                        </div>
                                    </div>

                                    <div class="text-box">
                                        <h2>Smith Vectoria</h2>
                                        <p>director</p>
                                        <div class="rating-box">
                                            <ul>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="testimonial-one__single-bottom">
                                    <div class="text-box">
                                        <p>Pellentesque habitant morbi tristique senectus netus et malesuada fames
                                            ac
                                            turp egestas. Aliquam viverra arcu. Donec aliquet blandit enim feugiat
                                            mattis.</p>
                                    </div>

                                    <div class="btn-box">
                                        <a href="#">Read more <span class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--End Testimonial One Single-->

                            <!--Start Testimonial One Single-->
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__single-top">
                                    <div class="img-box">
                                        <div class="inner">
                                            <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1"
                                                alt="#">
                                        </div>
                                        <div class="icon">
                                            <span class="icon-right-quotation-mark"></span>
                                        </div>
                                    </div>

                                    <div class="text-box">
                                        <h2>Smith Vectoria</h2>
                                        <p>director</p>
                                        <div class="rating-box">
                                            <ul>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="testimonial-one__single-bottom">
                                    <div class="text-box">
                                        <p>Pellentesque habitant morbi tristique senectus netus et malesuada fames
                                            ac
                                            turp egestas. Aliquam viverra arcu. Donec aliquet blandit enim feugiat
                                            mattis.</p>
                                    </div>

                                    <div class="btn-box">
                                        <a href="#">Read more <span class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--End Testimonial One Single-->

                            <!--Start Testimonial One Single-->
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__single-top">
                                    <div class="img-box">
                                        <div class="inner">
                                            <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1"
                                                alt="#">
                                        </div>
                                        <div class="icon">
                                            <span class="icon-right-quotation-mark"></span>
                                        </div>
                                    </div>

                                    <div class="text-box">
                                        <h2>Smith Vectoria</h2>
                                        <p>director</p>
                                        <div class="rating-box">
                                            <ul>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="testimonial-one__single-bottom">
                                    <div class="text-box">
                                        <p>Pellentesque habitant morbi tristique senectus netus et malesuada fames
                                            ac
                                            turp egestas. Aliquam viverra arcu. Donec aliquet blandit enim feugiat
                                            mattis.</p>
                                    </div>

                                    <div class="btn-box">
                                        <a href="#">Read more <span class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--End Testimonial One Single-->

                            <!--Start Testimonial One Single-->
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__single-top">
                                    <div class="img-box">
                                        <div class="inner">
                                            <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1"
                                                alt="#">
                                        </div>
                                        <div class="icon">
                                            <span class="icon-right-quotation-mark"></span>
                                        </div>
                                    </div>

                                    <div class="text-box">
                                        <h2>Smith Vectoria</h2>
                                        <p>director</p>
                                        <div class="rating-box">
                                            <ul>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="testimonial-one__single-bottom">
                                    <div class="text-box">
                                        <p>Pellentesque habitant morbi tristique senectus netus et malesuada fames
                                            ac
                                            turp egestas. Aliquam viverra arcu. Donec aliquet blandit enim feugiat
                                            mattis.</p>
                                    </div>

                                    <div class="btn-box">
                                        <a href="#">Read more <span class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--End Testimonial One Single-->

                            <!--Start Testimonial One Single-->
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__single-top">
                                    <div class="img-box">
                                        <div class="inner">
                                            <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1"
                                                alt="#">
                                        </div>
                                        <div class="icon">
                                            <span class="icon-right-quotation-mark"></span>
                                        </div>
                                    </div>

                                    <div class="text-box">
                                        <h2>Smith Vectoria</h2>
                                        <p>director</p>
                                        <div class="rating-box">
                                            <ul>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="testimonial-one__single-bottom">
                                    <div class="text-box">
                                        <p>Pellentesque habitant morbi tristique senectus netus et malesuada fames
                                            ac
                                            turp egestas. Aliquam viverra arcu. Donec aliquet blandit enim feugiat
                                            mattis.</p>
                                    </div>

                                    <div class="btn-box">
                                        <a href="#">Read more <span class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--End Testimonial One Single-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Testimonial One -->



    <!--Start Team One -->
    <section class="team-one">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Our Industrial Expert Team</h2>
            </div>
            <div class="row">
                <!--Start Team One Single-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                    <div class="team-one__single">
                        <div class="team-one__single-img">
                            <div class="inner">
                                <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                <div class="content-box text-center">
                                    <ul>
                                        <li><a href="#"><span class="icon-twitter"></span></a></li>
                                        <li><a href="#"><span class="icon-facebook"></span></a></li>
                                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    </ul>
                                    <div class="text-box">
                                        <h2><a href="{{ route('team-details') }}">Sarah Albert</a></h2>
                                        <p>Manager</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Team One Single-->

                <!--Start Team One Single-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.3s">
                    <div class="team-one__single">
                        <div class="team-one__single-img">
                            <div class="inner">
                                <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                <div class="content-box text-center">
                                    <ul>
                                        <li><a href="#"><span class="icon-twitter"></span></a></li>
                                        <li><a href="#"><span class="icon-facebook"></span></a></li>
                                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    </ul>
                                    <div class="text-box">
                                        <h2><a href="{{ route('team-details') }}">Sarah Albert</a></h2>
                                        <p>Manager</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Team One Single-->

                <!--Start Team One Single-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.5s">
                    <div class="team-one__single">
                        <div class="team-one__single-img">
                            <div class="inner">
                                <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                <div class="content-box text-center">
                                    <ul>
                                        <li><a href="#"><span class="icon-twitter"></span></a></li>
                                        <li><a href="#"><span class="icon-facebook"></span></a></li>
                                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    </ul>
                                    <div class="text-box">
                                        <h2><a href="{{ route('team-details') }}">Sarah Albert</a></h2>
                                        <p>Manager</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Team One Single-->

                <!--Start Team One Single-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.7s">
                    <div class="team-one__single">
                        <div class="team-one__single-img">
                            <div class="inner">
                                <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                                <div class="content-box text-center">
                                    <ul>
                                        <li><a href="#"><span class="icon-twitter"></span></a></li>
                                        <li><a href="#"><span class="icon-facebook"></span></a></li>
                                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    </ul>
                                    <div class="text-box">
                                        <h2><a href="{{ route('team-details') }}">Sarah Albert</a></h2>
                                        <p>Manager</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Team One Single-->
            </div>
        </div>
    </section>
    <!--End Team One -->

    <!--Start Video One-->
    <section class="video-one">
        <div class="video-one__bg jarallax" data-jarallax data-speed="0.2" data-imgposition="50% 0%"
            style="background-image: url({{ asset('assets/images/hero-construction.png') }}?v=1.0.1);"></div>
        <div class="video-one__pattern"
            style="background-image: url({{ asset('assets/images/hero-construction.png') }}?v=1.0.1);">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="video-one__inner">
                        <div class="video-box">
                            <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                <div class="video-one__icon">
                                    <span class="icon-play-button"></span>
                                    <i class="ripple"></i>
                                </div>
                            </a>
                            <span class="border-animation border-1"></span>
                            <span class="border-animation border-2"></span>
                            <span class="border-animation border-3"></span>
                        </div>
                        <h2>Play Video</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Video One-->


    <!--Start Faq One-->
    <section class="faq-one">
        <div class="faq-one__bg" style="background-image: url({{ asset('assets/images/hero-construction.png') }}?v=1.0.1);">

            <div class="faq-one__progress">
                <div class="faq-one__progress-pattern"
                    style="background-image: url({{ asset('assets/images/hero-construction.png') }}?v=1.0.1);"></div>
                <div class="faq-one__progress-inner">
                    <!--Start Faq One Progress Single-->
                    <div class="faq-one__progress-single">
                        <div class="top">
                            <h3>Construction - </h3>
                            <div class="count-text">90%</div>
                        </div>
                        <div class="bar">
                            <div class="bar-inner count-bar" data-percent="90%">
                            </div>
                        </div>
                    </div>
                    <!--End Faq One Progress Single-->

                    <!--Start Faq One Progress Single-->
                    <div class="faq-one__progress-single">
                        <div class="top">
                            <h3>Interior Design - </h3>
                            <div class="count-text">70%</div>
                        </div>
                        <div class="bar">
                            <div class="bar-inner count-bar" data-percent="70%">
                            </div>
                        </div>
                    </div>
                    <!--End Faq One Progress Single-->

                    <!--Start Faq One Progress Single-->
                    <div class="faq-one__progress-single mar0">
                        <div class="top">
                            <h3>Engineering - </h3>
                            <div class="count-text">50%</div>
                        </div>
                        <div class="bar">
                            <div class="bar-inner count-bar" data-percent="50%">
                            </div>
                        </div>
                    </div>
                    <!--End Faq One Progress Single-->
                </div>
            </div>
        </div>

        <div class="faq-one__pattern" style="background-image: url({{ asset('assets/images/hero-construction.png') }}?v=1.0.1);">
        </div>
        <div class="shape1 float-bob-y"><img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="faq-one__inner">
                        <div class="faq-one__content">
                            <div class="sec-title">
                                <h2>Get Every Single Answer <br> From Here</h2>
                            </div>


                            <div class="faq-one__accordion">
                                <ul class="accordion-box">

                                    <li class="accordion block active-block">
                                        <div class="acc-btn active">
                                            <div class="icon-outer">
                                                <i class="icon-plus"></i>
                                            </div>
                                            <h3>
                                                What Are The Page & Storage Limits?
                                            </h3>
                                        </div>
                                        <div class="acc-content current">
                                            <p>Lorem Suspendisse finibus urna mauris, vitae consequat quam blandit
                                                vel. Vestibulum leo ligula, molestie ullamcorper vulputate vitae,
                                                sodales commodo nisl. Nulla facilisi. Pellentesque est metus. There
                                                are many variations of passages.</p>
                                        </div>
                                    </li>

                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <div class="icon-outer">
                                                <i class="icon-plus"></i>
                                            </div>
                                            <h3>
                                                We can help your business to grow
                                            </h3>
                                        </div>
                                        <div class="acc-content">
                                            <p>Lorem Suspendisse finibus urna mauris, vitae consequat quam blandit
                                                vel. Vestibulum leo ligula, molestie ullamcorper vulputate vitae,
                                                sodales commodo nisl. Nulla facilisi. Pellentesque est metus. There
                                                are many variations of passages.</p>
                                        </div>
                                    </li>

                                    <li class="accordion block mb0">
                                        <div class="acc-btn">
                                            <div class="icon-outer">
                                                <i class="icon-plus"></i>
                                            </div>
                                            <h3>
                                                Best financial and consultancy advisors
                                            </h3>
                                        </div>
                                        <div class="acc-content">
                                            <p>Lorem Suspendisse finibus urna mauris, vitae consequat quam blandit
                                                vel. Vestibulum leo ligula, molestie ullamcorper vulputate vitae,
                                                sodales commodo nisl. Nulla facilisi. Pellentesque est metus. There
                                                are many variations of passages.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Faq One-->

    <!--Start Blog One-->
    <section class="blog-one">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Every Recent Update Blog</h2>
            </div>
            <div class="row">
                <!--Start Blog One Single-->
                <div class="col-xl-6 col-lg-6 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">
                    <div class="blog-one__single">
                        <div class="blog-one__single-inner">
                            <div class="img-box">
                                <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">

                                <ul class="meta-box">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-user"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="#">Admin</a></p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="icon-conversation"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="#">02 Comment</a></p>
                                        </div>
                                    </li>
                                </ul>

                                <div class="date-box">
                                    <p>28</p>
                                    <span>Aug</span>
                                </div>
                            </div>

                            <div class="content-box">
                                <div class="text1">
                                    <span>Fresh Product</span>
                                </div>
                                <h2><a href="{{ route('blog-details') }}">We Craft Marketing & Digital Product That Grow
                                        Businesses</a></h2>
                                <p>Excepteur sint occaecat cupidatat non proid
                                    ent sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <div class="text2">
                                    <p><span>Date</span> 18th Jan, 2023</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Blog One Single-->

                <!--Start Blog One Single-->
                <div class="col-xl-6 col-lg-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                    <div class="blog-one__single">
                        <div class="blog-one__single-inner">
                            <div class="img-box">
                                <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">

                                <ul class="meta-box">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-user"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="#">Admin</a></p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="icon-conversation"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="#">02 Comment</a></p>
                                        </div>
                                    </li>
                                </ul>

                                <div class="date-box">
                                    <p>28</p>
                                    <span>Aug</span>
                                </div>
                            </div>

                            <div class="content-box">
                                <div class="text1">
                                    <span>Fresh Product</span>
                                </div>
                                <h2><a href="{{ route('blog-details') }}">Construction Industry Heading Upright Using
                                        Our Businesses</a></h2>
                                <p>Excepteur sint occaecat cupidatat non proid
                                    ent sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <div class="text2">
                                    <p><span>Date</span> 18th Jan, 2023</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Blog One Single-->
            </div>
        </div>
    </section>
    <!--End Blog One-->


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



