@extends('layouts.layoutCommon')
@section('title', 'Digital Land Surveying | Srikaram Constructions')

@section('content')
    <x-pageHeader title="Precision Engineering" subtitle="Land Surveying" />

    <section class="sr-section">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-8 sr-reveal">
                    <div class="sr-card overflow-hidden mb-5">
                        <img src="{{ asset('assets/images/service-survey.png') }}?v=1.0.1" alt="Land Surveying" class="w-100" style="height: 450px; object-fit: cover;">
                    </div>
                    
                    <h2 class="sr-heading mb-4">Unmatched Precision with <span style="color: var(--sr-primary);">Digital Surveying</span></h2>
                    <p class="sr-lead mb-4">Accuracy is the foundation of any successful project. Srikaram Constructions provides state-of-the-art digital land surveying services using advanced technologies like DGPS and Total Station.</p>
                    
                    <div class="row g-4 mb-5">
                        <div class="col-md-6">
                            <div class="p-4 rounded-4" style="background: #f8f9fa;">
                                <h4 class="fw-bold mb-3"><i class="fas fa-satellite text-primary me-2"></i> DGPS Survey</h4>
                                <p class="mb-0">Centimeter-level accuracy for large-scale land parcels and boundary mapping.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-4 rounded-4" style="background: #f8f9fa;">
                                <h4 class="fw-bold mb-3"><i class="fas fa-microchip text-primary me-2"></i> Total Station</h4>
                                <p class="mb-0">High-precision topographical surveys for layouts, roads, and infrastructure.</p>
                            </div>
                        </div>
                    </div>

                    <h3 class="fw-bold mb-4">Our Surveying Expertise</h3>
                    <ul class="sr-list sr-list--grid mb-5">
                        <li><i class="fas fa-check-circle"></i> Topographical Surveys</li>
                        <li><i class="fas fa-check-circle"></i> Boundary Marking</li>
                        <li><i class="fas fa-check-circle"></i> Layout Plotting</li>
                        <li><i class="fas fa-check-circle"></i> Road & Drainage Mapping</li>
                        <li><i class="fas fa-check-circle"></i> Contour Mapping</li>
                        <li><i class="fas fa-check-circle"></i> Volume Calculations</li>
                    </ul>

                    <div class="p-5 rounded-4" style="background: #e9ecef;">
                        <h4 class="fw-bold mb-3">Why Digital Surveying?</h4>
                        <p class="mb-0">Traditional methods are prone to human error and time-consuming. Our digital approach ensures that every millimeter is accounted for, providing you with reliable data for planning and legal documentation.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sr-sticky-sidebar">
                        <div class="sr-card p-5 mb-4" style="background: #1a1a1a; color: #fff;">
                            <h4 class="fw-bold mb-4">Other Services</h4>
                            <ul class="list-unstyled sr-sidebar-links">
                                <li class="mb-3"><a href="{{ route('construction') }}" class="text-white-50 text-decoration-none d-flex justify-content-between">Construction <i class="fas fa-chevron-right"></i></a></li>
                                <li class="mb-3"><a href="{{ route('interior-design') }}" class="text-white-50 text-decoration-none d-flex justify-content-between">Interior Design <i class="fas fa-chevron-right"></i></a></li>
                            </ul>
                        </div>

                        <div class="sr-card p-5 border-primary" style="border: 2px solid var(--sr-primary);">
                            <h4 class="fw-bold mb-3">Request Survey</h4>
                            <p class="text-muted mb-4">Book a team for site measurement.</p>
                            <form id="sr-sidebar-form">
                                <input type="text" class="sr-input mb-3" placeholder="Your Name" required>
                                <input type="tel" class="sr-input mb-3" placeholder="Phone Number" required>
                                <button type="submit" class="sr-btn w-100">Schedule Site Visit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
@endsection

@push('styles')
<style>
    .sr-list--grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
    }
</style>
@endpush





