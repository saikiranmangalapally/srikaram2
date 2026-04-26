<!--Start Footer One -->
<footer class="sr-footer">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-4 col-lg-6">
                <div class="sr-footer-widget">
                    <div class="sr-logo mb-4">
                        <div class="sr-logo__text" style="color: #fff;">Srikaram</div>
                        <div class="sr-logo__subtext">Constructions</div>
                    </div>
                    <p class="mb-4" style="color: rgba(255,255,255,0.7); line-height: 1.8;">Leading the way in quality construction, bespoke interior design, and precise digital land surveying. We build with integrity and innovation.</p>
                    <div class="sr-social-links">
                        <a href="https://wa.me/918500766456" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i></a>
                        <a href="mailto:srikaramconstruction@gmail.com"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-6">
                <div class="sr-footer-widget">
                    <h4 class="sr-footer-title">Quick Links</h4>
                    <ul class="sr-footer-list">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('portfolio') }}">Our Projects</a></li>
                        <li><a href="{{ route('team') }}">Expert Team</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-xl-2 col-lg-6">
                <div class="sr-footer-widget">
                    <h4 class="sr-footer-title">Our Services</h4>
                    <ul class="sr-footer-list">
                        <li><a href="{{ route('construction') }}">House Construction</a></li>
                        <li><a href="{{ route('interior-design') }}">Interior Design</a></li>
                        <li><a href="{{ route('land-surveying') }}">Land Surveying</a></li>
                        <li><a href="{{ route('services') }}">All Services</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6">
                <div class="sr-footer-widget">
                    <h4 class="sr-footer-title">Get In Touch</h4>
                    <p class="mb-3" style="color: rgba(255,255,255,0.7);">Ready to start your project? Let's talk today.</p>
                    <div class="sr-footer-contact">
                        <div class="d-flex gap-3 mb-3">
                            <i class="fab fa-whatsapp" style="color: var(--sr-primary); margin-top: 5px;"></i>
                            <div>
                                <div style="font-size: 13px; color: rgba(255,255,255,0.5);">WhatsApp Us</div>
                                <div style="font-weight: 700; color: #fff;">+91 85007 66456</div>
                            </div>
                        </div>
                        <div class="d-flex gap-3">
                            <i class="fas fa-envelope" style="color: var(--sr-primary); margin-top: 5px;"></i>
                            <div>
                                <div style="font-size: 13px; color: rgba(255,255,255,0.5);">Email Us</div>
                                <div style="font-weight: 700; color: #fff;">srikaramconstruction@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sr-footer-bottom mt-5 pt-4 border-top" style="border-color: rgba(255,255,255,0.1) !important;">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0" style="color: rgba(255,255,255,0.5); font-size: 14px;">&copy; {{ date('Y') }} Srikaram Constructions. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-0" style="color: rgba(255,255,255,0.5); font-size: 14px;">Designed with Excellence</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
    .sr-footer {
        background: #1a1a1a;
        padding: 100px 0 40px;
        color: #fff;
    }
    .sr-footer-title {
        font-family: var(--font-heading);
        font-weight: 700;
        font-size: 20px;
        margin-bottom: 30px;
        color: #fff;
    }
    .sr-footer-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .sr-footer-list li {
        margin-bottom: 12px;
    }
    .sr-footer-list a {
        color: rgba(255,255,255,0.6);
        text-decoration: none;
        transition: all 0.3s;
        font-size: 15px;
    }
    .sr-footer-list a:hover {
        color: var(--sr-primary);
        padding-left: 5px;
    }
    .sr-social-links {
        display: flex;
        gap: 15px;
    }
    .sr-social-links a {
        width: 40px;
        height: 40px;
        background: rgba(255,255,255,0.05);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        text-decoration: none;
        transition: all 0.3s;
    }
    .sr-social-links a:hover {
        background: var(--sr-primary);
        transform: translateY(-3px);
    }
</style>
<!--End Footer One-->



