@extends('layouts.layoutCommon')
@section('title', 'Expert Insights & Construction Tips | Srikaram Constructions')

@section('content')

    <x-pageHeader title="Construction Insights" subtitle="Our Blog" />

    <!--Start Blog page-->
    <section class="blog-page py-5">
        <div class="container">
            <div class="row">
                <!--Start Sidebar-->
                <div class="col-xl-4 col-lg-5 order-2 order-lg-1 mt-5 mt-lg-0">
                    <div class="sidebar shadow-sm p-4 bg-white rounded">
                        <!--Start Sidebar Single-->
                        <div class="sidebar__single sidebar__search mb-4">
                            <form action="#" class="sidebar__search-form d-flex border rounded overflow-hidden">
                                <input type="search" placeholder="Search insights..." class="form-control border-0 px-3">
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
                                <li class="mb-2"><a href="#" class="text-decoration-none text-dark d-flex justify-content-between align-items-center">Home Renovation <i class="fa fa-chevron-right small text-muted"></i></a></li>
                                <li class="mb-2"><a href="#" class="text-decoration-none text-dark d-flex justify-content-between align-items-center">Sustainable Building <i class="fa fa-chevron-right small text-muted"></i></a></li>
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
                                        <h4 class="fs-6 mb-1"><a href="{{ route('blog-details') }}" class="text-decoration-none text-dark fw-bold">Top 5 Trends in Modern Home Design for 2024</a></h4>
                                        <span class="text-muted small">Jan 12, 2024</span>
                                    </div>
                                </div>
                                <div class="sidebar__post-single d-flex mb-3 align-items-center">
                                    <div class="sidebar-post__img flex-shrink-0 me-3">
                                        <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#" class="rounded" width="70" height="70" style="object-fit: cover;">
                                    </div>
                                    <div class="sidebar__post-content-box">
                                        <h4 class="fs-6 mb-1"><a href="{{ route('blog-details') }}" class="text-decoration-none text-dark fw-bold">Why Land Surveying is Crucial Before You Buy</a></h4>
                                        <span class="text-muted small">Dec 28, 2023</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Sidebar Single-->

                        <!--Start Sidebar Single-->
                        <div class="sidebar__single sidebar__tags">
                            <h3 class="sidebar__title mb-3 fw-bold">Popular Tags</h3>
                            <div class="d-flex flex-wrap gap-2">
                                <a href="#" class="badge bg-light text-dark text-decoration-none p-2 border">Construction</a>
                                <a href="#" class="badge bg-light text-dark text-decoration-none p-2 border">Interiors</a>
                                <a href="#" class="badge bg-light text-dark text-decoration-none p-2 border">Survey</a>
                                <a href="#" class="badge bg-light text-dark text-decoration-none p-2 border">Safety</a>
                                <a href="#" class="badge bg-light text-dark text-decoration-none p-2 border">Architecture</a>
                            </div>
                        </div>
                        <!--End Sidebar Single-->
                    </div>
                </div>
                <!--End Sidebar-->

                <!--Start Blog page Content-->
                <div class="col-xl-8 col-lg-7 order-1 order-lg-2">
                    <div class="blog-page__content">
                        <!--Start Blog page Content Single-->
                        <div class="blog-page__content-single mb-5 bg-white rounded overflow-hidden shadow-sm border">
                            <div class="img-box position-relative">
                                <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#" class="img-fluid w-100" style="height: 400px; object-fit: cover;">
                                <div class="date-tag position-absolute top-0 start-0 bg-primary text-white p-2 ms-3 mt-3 rounded shadow">
                                    <span class="fw-bold">18</span><br><small>Jan</small>
                                </div>
                            </div>

                            <div class="content-box p-4">
                                <div class="tgaline mb-2 text-primary text-uppercase small fw-bold">
                                    House Construction
                                </div>
                                <h2 class="mb-3"><a href="{{ route('blog-details') }}" class="text-decoration-none text-dark hover-primary fw-bold">Planning Your Dream Home: A Step-by-Step Guide for Homeowners</a></h2>
                                <p class="text-muted mb-4">Building a home is a life-changing journey. From initial soil testing and land survey to the final coat of paint, we explore the essential milestones every homeowner should know to ensure a smooth construction process.</p>
                                <div class="meta-box d-flex justify-content-between align-items-center pt-3 border-top">
                                    <div class="author d-flex align-items-center">
                                        <i class="fa fa-user-circle text-primary me-2 fs-5"></i>
                                        <span class="text-dark small fw-bold">Srikaram Editorial Team</span>
                                    </div>
                                    <a href="{{ route('blog-details') }}" class="btn btn-outline-primary btn-sm rounded-pill px-4">Read Full Article</a>
                                </div>
                            </div>
                        </div>
                        <!--End Blog page Content Single-->

                        <!-- Quote Section -->
                        <div class="blog-page__content-text1 mb-5 p-5 bg-light rounded text-center border-start border-primary border-5 shadow-sm">
                            <div class="icon-box mb-3">
                                <span class="fa fa-quote-right text-primary fs-1 opacity-25"></span>
                            </div>
                            <h2 class="fst-italic lh-base mb-4 fw-light">"A house is made of bricks and beams. A home is made of hopes and dreams. Our mission is to build the foundation for those dreams."</h2>
                            <div class="bottom-box">
                                <p class="mb-0 fw-bold">Srikaram Constructions</p>
                                <span class="text-muted small">Crafting Quality Living Spaces</span>
                            </div>
                        </div>

                        <!--Start Blog page Content Single-->
                        <div class="blog-page__content-single mb-5 bg-white rounded overflow-hidden shadow-sm border">
                            <div class="img-box position-relative">
                                <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="#" class="img-fluid w-100" style="height: 400px; object-fit: cover;">
                                <div class="date-tag position-absolute top-0 start-0 bg-primary text-white p-2 ms-3 mt-3 rounded shadow">
                                    <span class="fw-bold">05</span><br><small>Jan</small>
                                </div>
                            </div>

                            <div class="content-box p-4">
                                <div class="tgaline mb-2 text-primary text-uppercase small fw-bold">
                                    Interior Design
                                </div>
                                <h2 class="mb-3"><a href="{{ route('blog-details') }}" class="text-decoration-none text-dark hover-primary fw-bold">Maximize Small Spaces: Smart Interior Design Hacks for Modern Apartments</a></h2>
                                <p class="text-muted mb-4">Living in an urban apartment doesn't mean compromising on style or comfort. Learn how our interior design experts use multi-functional furniture and smart lighting to make small spaces feel grand.</p>
                                <div class="meta-box d-flex justify-content-between align-items-center pt-3 border-top">
                                    <div class="author d-flex align-items-center">
                                        <i class="fa fa-user-circle text-primary me-2 fs-5"></i>
                                        <span class="text-dark small fw-bold">Srikaram Design Studio</span>
                                    </div>
                                    <a href="{{ route('blog-details') }}" class="btn btn-outline-primary btn-sm rounded-pill px-4">Read Full Article</a>
                                </div>
                            </div>
                        </div>
                        <!--End Blog page Content Single-->

                        <div class="blog-page__pagination d-flex justify-content-center">
                            <ul class="pagination shadow-sm">
                                <li class="page-item active"><a class="page-link px-4" href="#">1</a></li>
                                <li class="page-item"><a class="page-link px-4" href="#">2</a></li>
                                <li class="page-item">
                                    <a class="page-link px-4" href="#" aria-label="Next">
                                        <i class="fa fa-chevron-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <!--End Blog page Content-->
            </div>
        </div>
    </section>

    <!--Start Cta One -->
    <section class="cta-one bg-primary py-5 text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-2">Build Your Vision with Experts</h2>
                    <p class="mb-0 opacity-75">From legal land surveys to final interior touches, we are your one-stop construction partner.</p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <a class="btn btn-light btn-lg px-5 py-3 rounded-pill fw-bold text-primary shadow" href="{{ route('contact') }}">
                        Start a Project <i class="fa fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--End Cta One -->

    
@endsection

@push('styles')
<style>
    .hover-primary:hover {
        color: var(--thm-primary) !important;
        transition: color 0.3s ease;
    }
    .date-tag {
        z-index: 2;
        line-height: 1;
        text-align: center;
        min-width: 60px;
    }
    .sidebar__title::after {
        content: '';
        display: block;
        width: 40px;
        height: 3px;
        background: var(--thm-primary);
        margin-top: 8px;
    }
    .pagination .page-link {
        color: #333;
        border: 1px solid #eee;
    }
    .pagination .page-item.active .page-link {
        background-color: var(--thm-primary);
        border-color: var(--thm-primary);
        color: #fff;
    }
</style>
@endpush
dsection



