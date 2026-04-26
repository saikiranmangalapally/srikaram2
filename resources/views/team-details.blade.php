@extends('layouts.layoutCommon')
@section('title', 'Team Detail | Srikaram Constructions')

@section('content')

    <x-pageHeader title="Team Member" subtitle="Expert Profile" />

    <!--Start Team Details Top-->
    <section class="team-details-top py-5">
        <div class="container">
            <div class="row align-items-center">
                <!--Start Team Details Top Client Info-->
                <div class="col-xl-4 col-lg-5">
                    <div class="team-details-top__client-info text-center p-4 bg-white shadow rounded border">
                        <div class="img-box mb-4 overflow-hidden rounded shadow-sm">
                            <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#" class="img-fluid w-100" style="height: 400px; object-fit: cover;">
                        </div>
                        <div class="content-box">
                            <h2 class="fw-bold mb-1">Mr. Rajesh Kumar</h2>
                            <span class="text-primary fw-bold text-uppercase small d-block mb-3">Senior Project Manager</span>
                            <p class="text-muted small mb-4">With over 15 years of experience in residential construction, Rajesh ensures every Srikaram project meets the highest standards of quality and safety.</p>
                            <div class="social-links d-flex justify-content-center gap-3">
                                <a href="#" class="btn btn-outline-primary btn-sm rounded-circle"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="btn btn-outline-primary btn-sm rounded-circle"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="btn btn-outline-primary btn-sm rounded-circle"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Team Details Top Client Info-->

                <!--Start Team Details Top content-->
                <div class="col-xl-8 col-lg-7 mt-5 mt-lg-0 ps-lg-5">
                    <div class="team-details-top__content">
                        <div class="title-box mb-4">
                            <h2 class="display-6 fw-bold mb-3">Expertise in Sustainable Building & Structural Integrity</h2>
                            <p class="lead text-muted">Dedicated to transforming blueprints into beautiful, safe, and long-lasting homes for our clients.</p>
                        </div>
                        <div class="text-box mb-5">
                            <p>Rajesh leads our on-site execution teams with a focus on precision and efficiency. His background in civil engineering and passion for sustainable architecture have been instrumental in Srikaram's growth. He believes that the success of a construction project lies in the harmony between the architect's vision and the engineer's execution.</p>
                        </div>

                        <div class="team-details-top__content-info bg-light p-4 rounded shadow-sm mb-4">
                            <div class="row g-4">
                                <div class="col-sm-6">
                                    <div class="info-item d-flex align-items-center">
                                        <div class="icon-box bg-primary text-white p-2 rounded me-3">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div>
                                            <span class="d-block small text-muted">Email</span>
                                            <span class="fw-bold">rajesh@srikaram.com</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="info-item d-flex align-items-center">
                                        <div class="icon-box bg-primary text-white p-2 rounded me-3">
                                            <i class="fa fa-phone-alt"></i>
                                        </div>
                                        <div>
                                            <span class="d-block small text-muted">Phone</span>
                                            <span class="fw-bold">+91 85007 66456</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="info-item d-flex align-items-center">
                                        <div class="icon-box bg-primary text-white p-2 rounded me-3">
                                            <i class="fa fa-map-marker-alt"></i>
                                        </div>
                                        <div>
                                            <span class="d-block small text-muted">Location</span>
                                            <span class="fw-bold">Hyderabad, India</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="info-item d-flex align-items-center">
                                        <div class="icon-box bg-primary text-white p-2 rounded me-3">
                                            <i class="fa fa-graduation-cap"></i>
                                        </div>
                                        <div>
                                            <span class="d-block small text-muted">Education</span>
                                            <span class="fw-bold">M.Tech, Structural Engineering</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="team-details-top__content-btn">
                            <a class="btn btn-primary btn-lg px-5 py-3 rounded-pill fw-bold shadow" href="{{ route('contact') }}">
                                Contact Me <i class="fa fa-paper-plane ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--End Team Details Top content-->
            </div>
        </div>
    </section>
    <!--End Team Details Top-->

    <!--Start Portfolio Page (Projects Managed)-->
    <section class="portfolio-page py-5 bg-light">
        <div class="container">
            <div class="sec-title text-center mb-5">
                <span class="text-primary fw-bold text-uppercase small">Successful Projects</span>
                <h2 class="fw-bold">Managed by Mr. Rajesh</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="portfolio-card bg-white rounded overflow-hidden shadow-sm border h-100">
                        <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#" class="img-fluid w-100" style="height: 250px; object-fit: cover;">
                        <div class="p-4">
                            <h4 class="fw-bold mb-1">Luxury Villa Cluster</h4>
                            <p class="text-muted small">Completed: 2023</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="portfolio-card bg-white rounded overflow-hidden shadow-sm border h-100">
                        <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#" class="img-fluid w-100" style="height: 250px; object-fit: cover;">
                        <div class="p-4">
                            <h4 class="fw-bold mb-1">Modern Corporate Office</h4>
                            <p class="text-muted small">Completed: 2022</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="portfolio-card bg-white rounded overflow-hidden shadow-sm border h-100">
                        <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#" class="img-fluid w-100" style="height: 250px; object-fit: cover;">
                        <div class="p-4">
                            <h4 class="fw-bold mb-1">Urban Residential Complex</h4>
                            <p class="text-muted small">Completed: 2023</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Portfolio Page-->

    <!--Start Cta One -->
    <section class="cta-one bg-primary py-5 text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-2">Build Your Vision with Experts</h2>
                    <p class="mb-0 opacity-75">Connect with our specialized team for a seamless construction journey.</p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <a class="btn btn-light btn-lg px-5 py-3 rounded-pill fw-bold text-primary shadow" href="{{ route('contact') }}">
                        Book a Consultation <i class="fa fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    
@endsection



