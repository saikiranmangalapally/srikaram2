@extends('layouts.layoutCommon')
@section('title', 'Bulidy || Responsive Laravel  Template')


@section('content')

    <x-pageHeader title="Petroleum Refinery" subtitle="Petroleum Refinery" />


    <!--End Page Header-->


    <!--Start Services Details-->
    <section class="services-details">
        <div class="container">
            <div class="row">
                <!--Start Services Details Sidebar-->
                <div class="col-xl-4">
                    <div class="services-details__sidebar">
                        <!--Start Services Details Single-->
                        <div class="services-details__single sidebar__search">
                            <form action="#" class="sidebar__search-form">
                                <input type="search" placeholder="Search...">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <!--End Services Details Single-->

                        <!--Start Services Details Single-->
                        <div class="services-details__single sidebar__category">
                            <h3 class="sidebar__title">Category</h3>
                            <ul class="sidebar__category-list">
                                <li><a href="{{ route('bridge-costruction') }}">Bridge Costruction <span
                                            class="icon-caret"></span></a></li>
                                <li class="active"><a href="#">Petroleum Refinery
                                        <span class="icon-caret"></span></a></li>
                                <li><a href="{{ route('chemical-industry') }}">Chemical Industry <span
                                            class="icon-caret"></span></a></li>
                                <li><a href="{{ route('power-energy') }}">Power Energy <span class="icon-caret"></span></a>
                                </li>
                                <li><a href="{{ route('mechanical-works') }}">Mechanical Works <span
                                            class="icon-caret"></span></a></li>
                                <li><a href="{{ route('civil-engineering') }}">Civil Engineering <span
                                            class="icon-caret"></span></a></li>
                            </ul>
                        </div>
                        <!--End Services Details Single-->

                        <!--Start Services Details Single-->
                        <div class="services-details__single sidebar__single-button-box">
                            <div class="btn-one">
                                <a href="#">Download Doc <span class="icon-cloud-computing"></span></a>
                            </div>
                            <div class="btn-one btn-one--two">
                                <a href="#">Download Pdf<span class="icon-pdf"></span></a>
                            </div>
                        </div>
                        <!--End Services Details Single-->

                        <!--Start Services Details Single-->
                        <div class="services-details__single sidebar__tags">
                            <h3 class="sidebar__title">Tags Cloud</h3>
                            <ul class="sidebar__tags-list clearfix">
                                <li><a href="#">Carpet</a></li>
                                <li><a href="#">Office</a></li>
                                <li><a href="#">Agent</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Love</a></li>
                                <li><a href="#">Room</a></li>
                                <li><a href="#">Project</a></li>
                                <li><a href="#">Corporate</a></li>
                            </ul>
                        </div>
                        <!--End Services Details Single-->

                        <!--Start Services Details Single-->
                        <div class="services-details__single sidebar__contact">
                            <h3 class="sidebar__title">Contact Us</h3>
                            <ul class="sidebar__contact-list clearfix">
                                <li>
                                    <div class="inner">
                                        <div class="icon-box">
                                            <span class="icon-help"></span>
                                        </div>

                                        <div class="text-box">
                                            <h4>Have question?</h4>
                                            <p><a href="tel:3076806860"> 92 ( 307 ) 68 - 06860</a></p>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="inner">
                                        <div class="icon-box">
                                            <span class="icon-maps-and-flags"></span>
                                        </div>

                                        <div class="text-box">
                                            <h4>Visit store</h4>
                                            <p>Valentin, Street Road 24, New York</p>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="inner">
                                        <div class="icon-box">
                                            <span class="icon-mailbox"></span>
                                        </div>

                                        <div class="text-box">
                                            <h4>Write email</h4>
                                            <p><a href="mailto:yourmail@email.com">needhelp@company.com</a></p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--End Services Details Single-->

                    </div>
                </div>
                <!--End Services Details Sidebar-->


                <!--Start Services Details Content-->
                <div class="col-xl-8">
                    <div class="services-details__content">
                        <div class="services-details__content-img1">
                            <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                        </div>

                        <div class="services-details__content-text-box1">
                            <h2>Petroleum Refinery</h2>
                            <p class="text1">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia deserunt
                                mollanim id estaborum. Sed ut perspiciatis unde omnis iste natus error voluptatem
                                accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quasi architecto
                                beatae vitae dicta sunt. Nemo enim ipsam volupta
                                tem quia voluptas sit aspernatur aut odit aut fugit, sed quia Ut enim ad minim
                                veniam, quis nostrud exercitation ullamco laboris nisi commodo consequat. Duis aute
                                irure dolor in reprehenderit in voluptate velit </p>
                            <ul class="services-details__content-text-box1-list">
                                <li>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                        deserunt
                                    </p>
                                </li>

                                <li>
                                    <p> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium

                                    </p>
                                </li>

                                <li>
                                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,

                                </li>
                            </ul>

                            <p class="text2">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit </p>
                        </div>

                        <div class="services-details__content-img2">
                            <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                            <div class="icon-box">
                                <span class="icon-engineering"></span>
                            </div>
                        </div>

                        <div class="services-details__content-text-box2">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-4">
                                    <div class="single-box text-center">
                                        <div class="icon-box">
                                            <div class="icon-box-bg">
                                                <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1"
                                                    alt="#">
                                            </div>
                                            <span class="icon-work-process"></span>
                                        </div>

                                        <div class="text-box">
                                            <h3><a href="#">Qualityfull Work</a></h3>
                                            <p>Lorem ipsum is simply free text available in the market wesbites.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4">
                                    <div class="single-box text-center">
                                        <div class="icon-box">
                                            <div class="icon-box-bg">
                                                <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1"
                                                    alt="#">
                                            </div>
                                            <span class="icon-house-repair"></span>
                                        </div>

                                        <div class="text-box">
                                            <h3><a href="#">Best Choose Plan</a></h3>
                                            <p>Lorem ipsum is simply free text available in the market wesbites.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4">
                                    <div class="single-box text-center">
                                        <div class="icon-box">
                                            <div class="icon-box-bg">
                                                <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1"
                                                    alt="#">
                                            </div>
                                            <span class="icon-time-management"></span>
                                        </div>

                                        <div class="text-box">
                                            <h3><a href="#">It Management</a></h3>
                                            <p>Lorem ipsum is simply free text available in the market wesbites.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="services-details__content-text-box3">
                            <div class="img-box">
                                <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#">
                            </div>

                            <div class="content-box">
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                    fugiat nulla pariatur. </p>
                                <ul>
                                    <li>
                                        <div class="icon-box">
                                            <span class="icon-check-1"></span>
                                        </div>
                                        <div class="text-box">
                                            <p>Duis aute irure dolor in reprehenderit in voluptate </p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon-box">
                                            <span class="icon-check-1"></span>
                                        </div>
                                        <div class="text-box">
                                            <p> voluptate velit esse cillum dolore eu fugiat nulla </p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon-box">
                                            <span class="icon-check-1"></span>
                                        </div>
                                        <div class="text-box">
                                            <p>Kuis nostr exercitation ullamco laboris consequat. </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="services-details__content-text-box4">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollanim id est laborum. Sed ut perspiciatis unde omnis iste natus error voluptatem
                                accusantium doloremque laudantium, totam rem aperiam, </p>
                        </div>

                        <div class="services-details__accordion">
                            <ul class="accordion-box">

                                <li class="accordion block active-block">
                                    <div class="acc-btn active">
                                        <div class="icon-outer">
                                            <i class="icon-plus"></i>
                                        </div>
                                        <h3>
                                            Few Resons Why You Should Choose Us
                                        </h3>
                                    </div>
                                    <div class="acc-content current">
                                        <p>Excepteur sint occaecat cupidatat non proide sunt in culpa qui off
                                            deserunt mollit anim id est laborum. omnis iste natus error sit
                                            voluptate audantium, totam rem aperiam,
                                            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsavoluptatem
                                            quia voluptas </p>
                                    </div>
                                </li>

                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer">
                                            <i class="icon-plus"></i>
                                        </div>
                                        <h3>
                                            Few Resons Why You Should Choose Us
                                        </h3>
                                    </div>
                                    <div class="acc-content">
                                        <p>Excepteur sint occaecat cupidatat non proide sunt in culpa qui off
                                            deserunt mollit anim id est laborum. omnis iste natus error sit
                                            voluptate audantium, totam rem aperiam,
                                            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsavoluptatem
                                            quia voluptas </p>
                                    </div>
                                </li>

                                <li class="accordion block mb0">
                                    <div class="acc-btn">
                                        <div class="icon-outer">
                                            <i class="icon-plus"></i>
                                        </div>
                                        <h3>
                                            How To Update Application New Features
                                        </h3>
                                    </div>
                                    <div class="acc-content">
                                        <p>Excepteur sint occaecat cupidatat non proide sunt in culpa qui off
                                            deserunt mollit anim id est laborum. omnis iste natus error sit
                                            voluptate audantium, totam rem aperiam,
                                            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsavoluptatem
                                            quia voluptas </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Services Details Content-->
            </div>
        </div>
    </section>
    <!--End Services Details-->

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



