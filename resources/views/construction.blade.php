@extends('layouts.layoutCommon')
@section('title', 'Residential & Commercial Construction | Srikaram Constructions')

@section('content')
    <x-pageHeader title="Building Excellence" subtitle="Construction Services" />

    <section class="sr-section">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-8 sr-reveal">
                    <div class="sr-card overflow-hidden mb-5">
                        <img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="Construction Excellence" class="w-100" style="height: 450px; object-fit: cover;">
                    </div>
                    
                    <h2 class="sr-heading mb-4">Precision Engineering for <span style="color: var(--sr-primary);">Modern Living</span></h2>
                    <p class="sr-lead mb-4">At Srikaram Constructions, we don't just build structures; we build dreams. Our construction wing specializes in high-end residential villas, premium apartment complexes, and functional commercial spaces.</p>
                    
                    <div class="row g-4 mb-5">
                        <div class="col-md-6">
                            <div class="p-4 rounded-4" style="background: #f8f9fa;">
                                <h4 class="fw-bold mb-3"><i class="fas fa-drafting-table text-primary me-2"></i> Turnkey Solutions</h4>
                                <p class="mb-0">From foundation to finishing, we handle everything, ensuring a stress-free experience for our clients.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-4 rounded-4" style="background: #f8f9fa;">
                                <h4 class="fw-bold mb-3"><i class="fas fa-shield-alt text-primary me-2"></i> Structural Integrity</h4>
                                <p class="mb-0">Our engineers use premium materials and rigorous testing to ensure every building stands the test of time.</p>
                            </div>
                        </div>
                    </div>

                    <h3 class="fw-bold mb-4">Our Construction Process</h3>
                    <div class="sr-process-vertical">
                        <div class="step mb-4 pb-4 border-bottom">
                            <h5 class="fw-bold"><span class="text-primary me-2">01.</span> Planning & Design</h5>
                            <p class="text-muted">Detailed blueprints and structural designs tailored to your vision and budget.</p>
                        </div>
                        <div class="step mb-4 pb-4 border-bottom">
                            <h5 class="fw-bold"><span class="text-primary me-2">02.</span> Foundation & Shell</h5>
                            <p class="text-muted">Robust structural work using high-grade TMT steel and premium concrete mixes.</p>
                        </div>
                        <div class="step mb-4 pb-4 border-bottom">
                            <h5 class="fw-bold"><span class="text-primary me-2">03.</span> MEP & Finishing</h5>
                            <p class="text-muted">Expert electrical, plumbing, and aesthetic finishes that breathe life into the structure.</p>
                        </div>
                        <div class="step">
                            <h5 class="fw-bold"><span class="text-primary me-2">04.</span> Handover</h5>
                            <p class="text-muted">Thorough quality checks before delivering your keys to a brand-new masterpiece.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sr-sticky-sidebar">
                        <div class="sr-card p-5 mb-4" style="background: #1a1a1a; color: #fff;">
                            <h4 class="fw-bold mb-4">Other Services</h4>
                            <ul class="list-unstyled sr-sidebar-links">
                                <li class="mb-3"><a href="{{ route('interior-design') }}" class="text-white-50 text-decoration-none d-flex justify-content-between">Interior Design <i class="fas fa-chevron-right"></i></a></li>
                                <li class="mb-3"><a href="{{ route('land-surveying') }}" class="text-white-50 text-decoration-none d-flex justify-content-between">Land Surveying <i class="fas fa-chevron-right"></i></a></li>
                            </ul>
                        </div>

                        <div class="sr-card p-5 border-primary" style="border: 2px solid var(--sr-primary);">
                            <h4 class="fw-bold mb-3">Quick Inquiry</h4>
                            <p class="text-muted mb-4">Get a detailed quote for your project.</p>
                            <form id="sr-sidebar-form">
                                <input type="text" class="sr-input mb-3" placeholder="Your Name" required>
                                <input type="tel" class="sr-input mb-3" placeholder="Phone Number" required>
                                <button type="submit" class="sr-btn w-100">Contact Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
@endsection




