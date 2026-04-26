@extends('layouts.layoutCommon')
@section('title', 'Our Experts | Srikaram Constructions')

@section('content')
    <x-pageHeader title="The Minds Behind Excellence" subtitle="Our Team" />

    <section class="sr-section">
        <div class="container">
            <div class="row g-5 mb-5 align-items-center">
                <div class="col-lg-6 sr-reveal">
                    <div class="sr-eyebrow">Our Leadership</div>
                    <h2 class="sr-heading">Committed to <span style="color: var(--sr-primary);">Structural Precision</span> and Aesthetic Vision</h2>
                </div>
                <div class="col-lg-6 sr-reveal">
                    <p class="sr-lead">Our team brings together over 8 years of excellence in civil engineering, interior architecture, and digital surveying. We work in synergy to ensure every project exceeds expectations.</p>
                </div>
            </div>

            <div class="row g-4">
                <!-- Expert 1 -->
                <div class="col-lg-4 col-md-6 sr-reveal">
                    <div class="sr-card p-0 overflow-hidden">
                        <div class="position-relative">
                            <div style="height: 400px; background: #eee; display: flex; align-items: center; justify-content: center; font-size: 80px; color: #ccc;">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="p-4 bg-white">
                                <h4 class="fw-bold mb-1">Chief Engineer</h4>
                                <p class="text-primary fw-bold mb-3">Construction Division</p>
                                <p class="small text-muted mb-0">Expert in structural integrity and turnkey project management with 15+ years of experience.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Expert 2 -->
                <div class="col-lg-4 col-md-6 sr-reveal" data-wow-delay="0.2s">
                    <div class="sr-card p-0 overflow-hidden">
                        <div class="position-relative">
                            <div style="height: 400px; background: #eee; display: flex; align-items: center; justify-content: center; font-size: 80px; color: #ccc;">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <div class="p-4 bg-white">
                                <h4 class="fw-bold mb-1">Lead Interior Designer</h4>
                                <p class="text-primary fw-bold mb-3">Interiors & 3D Visualization</p>
                                <p class="small text-muted mb-0">A visionary in modern aesthetics, specializing in luxury residential and modular kitchen designs.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Expert 3 -->
                <div class="col-lg-4 col-md-6 sr-reveal" data-wow-delay="0.4s">
                    <div class="sr-card p-0 overflow-hidden">
                        <div class="position-relative">
                            <div style="height: 400px; background: #eee; display: flex; align-items: center; justify-content: center; font-size: 80px; color: #ccc;">
                                <i class="fas fa-user-astronaut"></i>
                            </div>
                            <div class="p-4 bg-white">
                                <h4 class="fw-bold mb-1">Senior Surveyor</h4>
                                <p class="text-primary fw-bold mb-3">Digital Surveying & Mapping</p>
                                <p class="small text-muted mb-0">Specialist in DGPS and Total Station technology for high-precision land mapping and layouts.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Join Us Section -->
    <section class="sr-section" style="background: var(--sr-secondary); color: #fff;">
        <div class="container text-center">
            <h2 class="sr-heading mb-4 text-white">Want to <span style="color: var(--sr-primary);">Join Our Team?</span></h2>
            <p class="sr-lead mx-auto mb-5" style="max-width: 700px;">We are always looking for passionate engineers, designers, and surveyors. Send your portfolio to our email.</p>
            <a href="mailto:srikaramconstruction@gmail.com" class="sr-btn sr-btn--primary">Send Your CV</a>
        </div>
    </section>

    
@endsection



