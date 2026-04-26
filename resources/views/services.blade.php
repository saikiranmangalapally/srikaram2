@extends('layouts.layoutCommon')
@section('title', 'Our Services | Srikaram Constructions')

@section('content')
    <x-pageHeader title="Expert Building Solutions" subtitle="Our Services" />

    <!-- Core Services Grid -->
    <section class="sr-section">
        <div class="container">
            <div class="text-center sr-reveal mb-5">
                <div class="sr-eyebrow justify-content-center">What We Do</div>
                <h2 class="sr-heading">Comprehensive Services for <span style="color: var(--sr-primary);">Modern Infrastructure</span></h2>
            </div>

            <div class="row g-4">
                <!-- Construction -->
                <div class="col-lg-4 sr-reveal">
                    <div class="sr-service-card-large">
                        <div class="sr-service-card-large__img">
                            <a href="{{ route('construction') }}"><img src="{{ asset('assets/images/hero-construction.png') }}?v=1.0.1" alt="Construction"></a>
                        </div>
                        <div class="sr-service-card-large__content">
                            <div class="icon"><i class="fas fa-hammer"></i></div>
                            <h3>Residential & Commercial Construction</h3>
                            <p>We build high-end residential villas, apartment complexes, and commercial spaces. Our focus is on structural integrity, modern aesthetics, and sustainable building practices.</p>
                            <ul class="sr-list">
                                <li><i class="fas fa-check"></i> Turnkey Construction</li>
                                <li><i class="fas fa-check"></i> Project Management</li>
                                <li><i class="fas fa-check"></i> Structural Design</li>
                            </ul>
                            <a href="{{ route('construction') }}" class="sr-btn sr-btn--outline w-100 mt-4">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Interior -->
                <div class="col-lg-4 sr-reveal" data-wow-delay="0.2s">
                    <div class="sr-service-card-large">
                        <div class="sr-service-card-large__img">
                            <a href="{{ route('interior-design') }}"><img src="{{ asset('assets/images/service-interior.png') }}?v=1.0.1" alt="Interior Design"></a>
                        </div>
                        <div class="sr-service-card-large__content">
                            <div class="icon"><i class="fas fa-couch"></i></div>
                            <h3>Modern Interior Design</h3>
                            <p>Transforming houses into homes. Our interior design wing specializes in creating contemporary, functional, and luxury interiors that reflect your personal style.</p>
                            <ul class="sr-list">
                                <li><i class="fas fa-check"></i> 3D Interior Visualization</li>
                                <li><i class="fas fa-check"></i> Custom Furniture</li>
                                <li><i class="fas fa-check"></i> Lighting & Decor</li>
                            </ul>
                            <a href="{{ route('interior-design') }}" class="sr-btn sr-btn--outline w-100 mt-4">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Land Survey -->
                <div class="col-lg-4 sr-reveal" data-wow-delay="0.4s">
                    <div class="sr-service-card-large">
                        <div class="sr-service-card-large__img">
                            <a href="{{ route('land-surveying') }}"><img src="{{ asset('assets/images/service-survey.png') }}?v=1.0.1" alt="Land Surveying"></a>
                        </div>
                        <div class="sr-service-card-large__content">
                            <div class="icon"><i class="fas fa-map-marked-alt"></i></div>
                            <h3>Digital Land Surveying</h3>
                            <p>Precision is key. We offer state-of-the-art digital land surveying services for layouts, roads, and large-scale infrastructure projects using DGPS and Total Station.</p>
                            <ul class="sr-list">
                                <li><i class="fas fa-check"></i> Topographical Surveys</li>
                                <li><i class="fas fa-check"></i> Layout Plotting</li>
                                <li><i class="fas fa-check"></i> Boundary Marking</li>
                            </ul>
                            <a href="{{ route('land-surveying') }}" class="sr-btn sr-btn--outline w-100 mt-4">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Consultation Form Section -->
    <section id="contact-form" class="sr-section" style="background: #111; padding: 120px 0;">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-5 sr-reveal">
                    <div class="pe-lg-5">
                        <div class="sr-eyebrow text-white mb-3">Expert Advice</div>
                        <h2 class="sr-heading text-white">Get a Free <br><span style="color: var(--sr-primary);">Expert Consultation</span></h2>
                        <p class="sr-lead text-white-50 mt-4">Ready to start your journey? Fill out the form to discuss your project requirements with our senior engineers and designers. We'll get back to you within 24 hours.</p>
                        
                        <div class="mt-5">
                            <div class="d-flex align-items-center gap-4 mb-4">
                                <div class="sr-icon-box" style="background: rgba(255,255,255,0.05); color: var(--sr-primary); width: 60px; height: 60px; border-radius: 50%;">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div>
                                    <p class="mb-0 text-white-50 small text-uppercase fw-bold letter-spacing-1">Email Inquiries</p>
                                    <h4 class="text-white mb-0" style="font-size: 18px;">srikaramconstruction@gmail.com</h4>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-4">
                                <div class="sr-icon-box" style="background: rgba(255,255,255,0.05); color: var(--sr-primary); width: 60px; height: 60px; border-radius: 50%;">
                                    <i class="fab fa-whatsapp"></i>
                                </div>
                                <div>
                                    <p class="mb-0 text-white-50 small text-uppercase fw-bold letter-spacing-1">WhatsApp Us</p>
                                    <h4 class="text-white mb-0">+91 85007 66456</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 sr-reveal">
                    <div class="sr-card sr-consult-form-card p-5">
                        <form id="sr-consult-form" class="row g-4">
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Full Name</label>
                                <input type="text" name="name" class="sr-input" placeholder="e.g. John Doe" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Phone Number</label>
                                <input type="tel" name="phone" class="sr-input" placeholder="e.g. +91 85007 66456" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-bold">Interested Service</label>
                                <select name="service" class="sr-input" required>
                                    <option value="" selected disabled>Choose a service</option>
                                    <option value="Construction">Building Construction</option>
                                    <option value="Interior Design">Luxury Interior Design</option>
                                    <option value="Land Surveying">Digital Land Surveying</option>
                                    <option value="Other">Other Inquiry</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-bold">Your Message</label>
                                <textarea name="message" class="sr-input" rows="4" placeholder="Tell us a little about your project goals..."></textarea>
                            </div>
                            <div class="col-12 mt-5">
                                <button type="submit" class="sr-btn w-100 py-4 shadow-lg">
                                    Send via WhatsApp <i class="fab fa-whatsapp ms-2"></i>
                                </button>
                                <p class="text-center mt-3 text-muted small">No hidden charges. 100% Free Consultation.</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('styles')
<style>
    .sr-service-card-large {
        background: #fff;
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        height: 100%;
        transition: transform 0.4s, box-shadow 0.4s;
    }
    .sr-service-card-large:hover {
        transform: translateY(-10px);
        box-shadow: 0 30px 60px rgba(0,0,0,0.1);
    }
    .sr-service-card-large__img {
        height: 240px;
        overflow: hidden;
    }
    .sr-service-card-large__img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s;
    }
    .sr-service-card-large:hover .sr-service-card-large__img img {
        transform: scale(1.1);
    }
    .sr-service-card-large__content {
        padding: 40px;
        position: relative;
    }
    .sr-service-card-large__content .icon {
        width: 60px;
        height: 60px;
        background: var(--sr-primary);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 15px;
        font-size: 24px;
        position: absolute;
        top: -30px;
        left: 40px;
        box-shadow: 0 10px 20px rgba(230, 126, 34, 0.3);
    }
    .sr-service-card-large__content h3 {
        font-family: var(--font-heading);
        font-weight: 800;
        margin-top: 10px;
        margin-bottom: 20px;
    }
    .sr-list {
        list-style: none;
        padding: 0;
        margin: 20px 0;
    }
    .sr-list li {
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        gap: 10px;
        font-weight: 600;
        color: var(--sr-muted);
    }
    .sr-list li i {
        color: var(--sr-primary);
        font-size: 14px;
    }
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('sr-consult-form');
    if(form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            const name = this.name.value;
            const phone = this.phone.value;
            const service = this.service.value;
            const message = this.message.value;
            
            const whatsappMsg = `*New Service Inquiry*%0A%0A*Name:* ${name}%0A*Phone:* ${phone}%0A*Service:* ${service}%0A*Message:* ${message}`;
            window.open(`https://wa.me/918500766456?text=${whatsappMsg}`, '_blank');
        });
    }
});
</script>
@endpush
