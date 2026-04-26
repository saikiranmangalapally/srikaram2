@extends('layouts.layoutCommon')
@section('title', 'Expert Guide: Planning Your Dream Home | Srikaram Constructions')

@section('content')

    <x-pageHeader title="Article Details" subtitle="Planning Your Dream Home" />

    <!--Start Blog Details-->
    <section class="blog-details py-5">
        <div class="container">
            <div class="row">
                <!--Start Sidebar-->
                <div class="col-xl-4 col-lg-5 order-2 order-lg-1 mt-5 mt-lg-0">
                    <div class="sidebar shadow-sm p-4 bg-white rounded">
                        <!--Start Sidebar Single-->
                        <div class="sidebar__single sidebar__search mb-4">
                            <form action="#" class="sidebar__search-form d-flex border rounded overflow-hidden">
                                <input type="search" placeholder="Search..." class="sr-input border-0 px-3">
                                <button type="submit" class="btn btn-primary px-3 rounded-0"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <!--End Sidebar Single-->

                        <!--Start Sidebar Single-->
                        <div class="sidebar__single sidebar__category mb-4">
                            <h3 class="sidebar__title mb-3 fw-bold">Categories</h3>
                            <ul class="sidebar__category-list list-unstyled">
                                <li class="mb-2"><a href="#" class="text-decoration-none text-dark d-flex justify-content-between align-items-center">House Construction <i class="fa fa-chevron-right small text-muted"></i></a></li>
                                <li class="mb-2"><a href="#" class="text-decoration-none text-dark d-flex justify-content-between align-items-center">Interior Design <i class="fa fa-chevron-right small text-muted"></i></a></li>
                                <li class="mb-2"><a href="#" class="text-decoration-none text-dark d-flex justify-content-between align-items-center">Land Surveying <i class="fa fa-chevron-right small text-muted"></i></a></li>
                            </ul>
                        </div>
                        <!--End Sidebar Single-->

                        <!--Start Sidebar Single-->
                        <div class="sidebar__single sidebar__recent-post mb-4">
                            <h3 class="sidebar__title mb-3 fw-bold">Recent Updates</h3>
                            <div class="sidebar__post-box">
                                <div class="sidebar__post-single d-flex mb-3 align-items-center">
                                    <div class="sidebar-post__img flex-shrink-0 me-3">
                                        <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#" class="rounded" width="70" height="70" style="object-fit: cover;">
                                    </div>
                                    <div class="sidebar__post-content-box">
                                        <h4 class="fs-6 mb-1"><a href="#" class="text-decoration-none text-dark fw-bold">Top 5 Trends in Modern Home Design</a></h4>
                                        <span class="text-muted small">Jan 12, 2024</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Sidebar Single-->
                    </div>
                </div>
                <!--End Sidebar-->

                <!--Start Blog Details Content-->
                <div class="col-xl-8 col-lg-7 order-1 order-lg-2">
                    <div class="blog-details__content">
                        <div class="blog-details__image mb-4">
                            <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#" class="img-fluid rounded shadow-sm w-100">
                        </div>

                        <div class="blog-details__meta mb-3 d-flex align-items-center text-muted small border-bottom pb-3">
                            <span class="me-3"><i class="fa fa-calendar-alt text-primary me-2"></i>Jan 18, 2024</span>
                            <span class="me-3"><i class="fa fa-user text-primary me-2"></i>By Srikaram Editorial</span>
                            <span><i class="fa fa-folder-open text-primary me-2"></i>House Construction</span>
                        </div>

                        <div class="blog-details__text mb-5">
                            <h2 class="fw-bold mb-4 display-6">Planning Your Dream Home: A Comprehensive Step-by-Step Guide for Homeowners</h2>
                            <p class="lead text-dark mb-4">Building a home is one of the most significant investments and personal achievements in life. At Srikaram Constructions, we believe that a successful build starts with meticulous planning.</p>
                            
                            <p class="mb-4">The journey begins long before the first brick is laid. It starts with a vision and a piece of land. Understanding the legal and technical aspects of your land through professional **Land Surveying** is the first non-negotiable step. This ensures your construction is within boundaries and adheres to local regulations.</p>

                            <div class="quote-box p-4 bg-light border-start border-primary border-5 mb-4 rounded shadow-sm fst-italic">
                                "The strength of a house lies in its foundation, not just the concrete, but the planning and integrity behind it."
                            </div>

                            <h3 class="fw-bold mb-3">Key Milestones in the Construction Journey</h3>
                            <ul class="list-group list-group-flush mb-4">
                                <li class="list-group-item bg-transparent px-0"><i class="fa fa-check-circle text-primary me-2"></i> **Site Analysis & Surveying:** Confirming site levels and legal boundaries.</li>
                                <li class="list-group-item bg-transparent px-0"><i class="fa fa-check-circle text-primary me-2"></i> **Architectural Planning:** Designing layouts that balance aesthetics with functionality.</li>
                                <li class="list-group-item bg-transparent px-0"><i class="fa fa-check-circle text-primary me-2"></i> **Structural Integrity:** Engineering the skeleton of your home for long-term safety.</li>
                                <li class="list-group-item bg-transparent px-0"><i class="fa fa-check-circle text-primary me-2"></i> **Interior Flow:** Planning where life happens inside the walls.</li>
                            </ul>

                            <p>Finally, we integrate **Interior Design** early in the process. Many homeowners wait until the building is complete to think about interiors, but planning your electrical points, lighting, and plumbing around your interior layout saves time and expensive rework later.</p>
                        </div>

                        <div class="blog-details__tag-share d-flex flex-wrap justify-content-between align-items-center py-4 border-top border-bottom mb-5">
                            <div class="tags d-flex gap-2">
                                <span class="fw-bold me-2">Tags:</span>
                                <a href="#" class="text-decoration-none badge bg-light text-muted border px-3 py-2">HomePlanning</a>
                                <a href="#" class="text-decoration-none badge bg-light text-muted border px-3 py-2">Construction</a>
                            </div>

                            <div class="share-links d-flex align-items-center gap-3">
                                <span class="fw-bold">Share:</span>
                                <a href="#" class="text-primary fs-5"><i class="fab fa-facebook"></i></a>
                                <a href="#" class="text-info fs-5"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="text-danger fs-5"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>

                        <div class="comment-one mb-5">
                            <h3 class="fw-bold mb-4">Reader Comments (2)</h3>
                            <div class="comment-one__single d-flex mb-4 p-4 bg-white border rounded shadow-sm">
                                <div class="comment-one__image flex-shrink-0 me-3">
                                    <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#" class="rounded-circle" width="60">
                                </div>
                                <div class="comment-one__content">
                                    <h5 class="fw-bold mb-1">Ravi Teja <small class="text-muted fw-normal ms-2">Dec 15, 2023</small></h5>
                                    <p class="text-muted mb-2">This guide is exactly what I needed. I was confused about whether to do the survey first or the architect plan. Great advice on integrating interiors early!</p>
                                    <a href="#" class="text-primary fw-bold small"><i class="fa fa-reply me-1"></i> Reply</a>
                                </div>
                            </div>
                        </div>

                        <div class="comment-form p-4 p-lg-5 bg-light rounded shadow-sm">
                            <h3 class="fw-bold mb-4">Leave a Reply</h3>
                            <form action="#" class="row g-3">
                                <div class="col-md-6">
                                    <input type="text" class="sr-input p-3 border-0 shadow-sm" placeholder="Your Name">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="sr-input p-3 border-0 shadow-sm" placeholder="Email Address">
                                </div>
                                <div class="col-12">
                                    <textarea class="sr-input p-3 border-0 shadow-sm" rows="5" placeholder="Write your comment..."></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary px-5 py-3 rounded-pill fw-bold shadow mt-3">Post Comment <i class="fa fa-paper-plane ms-2"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--End Blog Details Content-->
            </div>
        </div>
    </section>

    <!--Start Cta One -->
    <section class="cta-one bg-primary py-5 text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-2">Ready to Start Your Construction?</h2>
                    <p class="mb-0 opacity-75">Connect with our experts today for a free consultation and quote.</p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <a class="btn btn-light btn-lg px-5 py-3 rounded-pill fw-bold text-primary shadow" href="{{ route('contact') }}">
                        Get a Free Quote <i class="fa fa-phone-alt ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    
@endsection

@push('styles')
<style>
    .sidebar__title::after {
        content: '';
        display: block;
        width: 40px;
        height: 3px;
        background: var(--thm-primary);
        margin-top: 8px;
    }
    .blog-details__text p {
        line-height: 1.8;
        color: #444;
    }
    .comment-one__single:hover {
        border-color: var(--thm-primary) !important;
        transition: border-color 0.3s ease;
    }
</style>
@endpush

