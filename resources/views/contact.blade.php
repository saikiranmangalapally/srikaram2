@extends('layouts.layoutCommon')
@section('title', 'Contact Us | Srikaram Constructions')

@section('content')
    <x-pageHeader title="Let's Build Together" subtitle="Contact Us" />

    <!-- Contact Info Cards -->
    <section class="sr-section">
        <div class="container">
            <div class="row g-4 mb-5">
                <div class="col-lg-6 sr-reveal">
                    <div class="sr-card p-5 text-center h-100 border-primary" style="border: 1px solid var(--sr-primary);">
                        <div class="sr-icon-box mx-auto mb-4" style="background: var(--sr-primary); color: #fff; width: 70px; height: 70px; font-size: 28px;">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <h4 style="font-family: var(--font-heading); font-weight: 800; margin-bottom: 10px;">WhatsApp</h4>
                        <p style="color: var(--sr-muted); margin-bottom: 5px;">Quick Response Chat</p>
                        <a href="https://wa.me/918500766456" target="_blank" style="color: var(--sr-primary); font-weight: 800; font-size: 20px; text-decoration: none;">+91 85007 66456</a>
                    </div>
                </div>
                <div class="col-lg-6 sr-reveal" data-wow-delay="0.2s">
                    <div class="sr-card p-5 text-center h-100">
                        <div class="sr-icon-box mx-auto mb-4" style="background: rgba(230, 126, 34, 0.1); color: var(--sr-primary); width: 70px; height: 70px; font-size: 28px;">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h4 style="font-family: var(--font-heading); font-weight: 800; margin-bottom: 10px;">Email Us</h4>
                        <p style="color: var(--sr-muted); margin-bottom: 5px;">For Official Proposals</p>
                        <a href="mailto:srikaramconstruction@gmail.com" style="color: var(--sr-primary); font-weight: 800; font-size: 18px; text-decoration: none;">srikaramconstruction@gmail.com</a>
                    </div>
                </div>
            </div>

            <div class="row g-5 align-items-stretch">
                <!-- Map Placeholder -->
                <div class="col-lg-6 sr-reveal">
                    <div class="sr-card h-100 overflow-hidden" style="min-height: 400px; background: #eee; position: relative;">
                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; flex-direction: column; text-align: center; padding: 40px;">
                            <i class="fas fa-map-marker-alt mb-4" style="font-size: 48px; color: var(--sr-primary);"></i>
                            <h3 style="font-family: var(--font-heading); font-weight: 800;">Our Office</h3>
                            <p style="max-width: 300px; color: var(--sr-muted);">Srikaram Constructions<br>Hyderabad, Telangana, India</p>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-6 sr-reveal">
                    <div class="sr-card sr-consult-form-card p-5 shadow-lg">
                        <h3 class="sr-heading sr-heading--sm mb-4">Send a <span style="color: var(--sr-primary);">Direct Message</span></h3>
                        <form id="sr-contact-page-form" class="row g-4">
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Full Name</label>
                                <input type="text" name="name" class="sr-input" placeholder="e.g. John Doe" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Phone Number</label>
                                <input type="tel" name="phone" class="sr-input" placeholder="e.g. +91 85007 66456" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-bold">Subject</label>
                                <input type="text" name="subject" class="sr-input" placeholder="How can we help you?" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-bold">Your Message</label>
                                <textarea name="message" class="sr-input" rows="5" placeholder="Describe your construction or design needs..."></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="sr-btn w-100 py-4 shadow-sm">
                                    Submit via WhatsApp <i class="fab fa-whatsapp ms-2"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('sr-contact-page-form');
    if(form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            const name = this.name.value;
            const phone = this.phone.value;
            const subject = this.subject.value;
            const message = this.message.value;
            
            const whatsappMsg = `*New Contact Inquiry*%0A%0A*Name:* ${name}%0A*Phone:* ${phone}%0A*Subject:* ${subject}%0A*Message:* ${message}`;
            window.open(`https://wa.me/918500766456?text=${whatsappMsg}`, '_blank');
        });
    }
});
</script>
@endpush




