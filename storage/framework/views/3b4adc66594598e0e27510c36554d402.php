
<?php $__env->startSection('title', 'Srikaram Constructions | House Construction, Interiors & Land Survey'); ?>

<?php $__env->startPush('styles'); ?>
    <style>
        .sr-hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 140px 0 100px;
            background: 
                linear-gradient(rgba(26, 29, 33, 0.7), rgba(26, 29, 33, 0.5)),
                url('<?php echo e(asset('assets/images/hero-construction.png')); ?>?v=1.0.1') center/cover no-repeat;
            color: #fff;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="sr-home">
        <!-- Hero Section -->
        <section class="sr-hero" id="home">
            <div class="container">
                <div class="sr-hero__content sr-reveal">
                    <div class="sr-hero__badge">
                        <i class="fas fa-hard-hat"></i>
                        ISO Certified Construction & Survey Partner
                    </div>
                    <h1 class="sr-hero__title">Precision Engineering. <span style="color: var(--sr-primary);">Timeless Spaces.</span></h1>
                    <p class="sr-hero__text">We specialize in premium house construction, bespoke interiors, and high-accuracy land surveys. From site analysis to final handover, we build with integrity and innovation.</p>
                    <div class="sr-hero__actions">
                        <a class="sr-btn sr-btn--primary" href="#contact">
                            Start Your Project
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <a class="sr-btn sr-btn--outline" href="https://wa.me/918500766456" target="_blank">
                            <i class="fab fa-whatsapp"></i>
                            WhatsApp +91 85007 66456
                        </a>
                    </div>
                    <div class="sr-hero__stats">
                        <div class="sr-stat">
                            <span class="sr-stat__number">100%</span>
                            <span class="sr-stat__label">End-to-End Delivery<br>Concept to Handover</span>
                        </div>
                        <div class="sr-stat">
                            <span class="sr-stat__number">Precision</span>
                            <span class="sr-stat__label">Digital Land Survey<br>Error-Free Analysis</span>
                        </div>
                        <div class="sr-stat">
                            <span class="sr-stat__number">Modern</span>
                            <span class="sr-stat__label">Bespoke Interiors<br>Modular Excellence</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="sr-section sr-section--tight" id="services">
            <div class="container">
                <div class="row align-items-end mb-5">
                    <div class="col-lg-7 sr-reveal">
                        <div class="sr-eyebrow">Our Specialized Services</div>
                        <h2 class="sr-heading">Comprehensive Solutions for <span style="color: var(--sr-primary);">Modern Infrastructure</span></h2>
                    </div>
                    <div class="col-lg-5 sr-reveal">
                        <p class="sr-lead">We integrate technical precision with aesthetic vision to deliver spaces that are as functional as they are beautiful.</p>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 sr-reveal">
                        <article class="sr-card">
                            <div class="sr-icon-box"><i class="fas fa-building"></i></div>
                            <h3>House Construction</h3>
                            <p>End-to-end residential and commercial builds. We manage every phase from foundation to finishing with uncompromising quality.</p>
                            <a class="sr-link" href="<?php echo e(route('construction')); ?>">Explore Service <i class="fas fa-chevron-right"></i></a>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6 sr-reveal">
                        <article class="sr-card">
                            <div class="sr-icon-box"><i class="fas fa-pencil-ruler"></i></div>
                            <h3>Interior Design</h3>
                            <p>Bespoke interior solutions that blend comfort and style. Our designers create environments that reflect your unique personality.</p>
                            <a class="sr-link" href="<?php echo e(route('interior-design')); ?>">Explore Service <i class="fas fa-chevron-right"></i></a>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6 sr-reveal">
                        <article class="sr-card">
                            <div class="sr-icon-box"><i class="fas fa-map-marked-alt"></i></div>
                            <h3>Land Surveying</h3>
                            <p>Digital topographic and boundary surveys using state-of-the-art equipment for absolute accuracy and legal compliance.</p>
                            <a class="sr-link" href="<?php echo e(route('land-surveying')); ?>">Explore Service <i class="fas fa-chevron-right"></i></a>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section class="sr-section" id="about">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6 sr-reveal">
                        <div class="sr-about-visual">
                            <img src="<?php echo e(asset('assets/images/hero-construction.png')); ?>?v=1.0.1" alt="Srikaram Construction">
                            <div class="sr-experience-badge">
                                <span>8</span>
                                Years of Quality
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 sr-reveal">
                        <div class="sr-eyebrow">Who We Are</div>
                        <h2 class="sr-heading">Building a Legacy of <span style="color: var(--sr-primary);">Trust & Excellence</span></h2>
                        <p class="sr-lead">Srikaram Constructions is more than just a building firm. We are a team of dedicated professionals committed to redefining the construction landscape in India.</p>
                        <div class="mt-4">
                            <div class="d-flex gap-3 mb-4">
                                <div class="sr-icon-box" style="width: 50px; height: 50px; flex-shrink: 0;"><i class="fas fa-check"></i></div>
                                <div>
                                    <h4 class="mb-1" style="font-family: var(--font-heading); font-weight: 700;">Expert Craftsmanship</h4>
                                    <p class="mb-0" style="color: var(--sr-muted); font-size: 15px;">Every brick we lay and every design we craft is a testament to our skill.</p>
                                </div>
                            </div>
                            <div class="d-flex gap-3">
                                <div class="sr-icon-box" style="width: 50px; height: 50px; flex-shrink: 0;"><i class="fas fa-hand-holding-heart"></i></div>
                                <div>
                                    <h4 class="mb-1" style="font-family: var(--font-heading); font-weight: 700;">Customer-Centric Approach</h4>
                                    <p class="mb-0" style="color: var(--sr-muted); font-size: 15px;">Your vision is our blueprint. We listen, plan, and execute with you in mind.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Process Section -->
        <section class="sr-section sr-section--tight" id="process">
            <div class="container text-center">
                <div class="sr-eyebrow justify-content-center">Our Methodology</div>
                <h2 class="sr-heading">Your Project Journey, <span style="color: var(--sr-primary);">Streamlined</span></h2>
                <p class="sr-lead mx-auto">We follow a transparent, four-step process to ensure your project is delivered on time and within budget.</p>
                <div class="sr-process-grid">
                    <div class="sr-process-step sr-reveal">
                        <div class="sr-step-number mx-auto">01</div>
                        <h3>Consultation</h3>
                        <p>We begin by understanding your vision, budget, and timeline requirements.</p>
                    </div>
                    <div class="sr-process-step sr-reveal">
                        <div class="sr-step-number mx-auto">02</div>
                        <h3>Planning</h3>
                        <p>Detailed architectural designs and site analysis for a solid project foundation.</p>
                    </div>
                    <div class="sr-process-step sr-reveal">
                        <div class="sr-step-number mx-auto">03</div>
                        <h3>Execution</h3>
                        <p>Our expert crew brings the plans to life with precision and regular quality checks.</p>
                    </div>
                    <div class="sr-process-step sr-reveal">
                        <div class="sr-step-number mx-auto">04</div>
                        <h3>Handover</h3>
                        <p>Final walkthrough, quality assurance, and handing over the keys to your new space.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfolio Section -->
        <section class="sr-section" id="projects" style="background: var(--sr-sand);">
            <div class="container">
                <div class="row align-items-end mb-5">
                    <div class="col-lg-7 sr-reveal">
                        <div class="sr-eyebrow">Our Portfolio</div>
                        <h2 class="sr-heading">Featured <span style="color: var(--sr-primary);">Projects</span></h2>
                    </div>
                    <div class="col-lg-5 sr-reveal">
                        <p class="sr-lead">A showcase of our commitment to quality across construction, interiors, and surveying.</p>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 sr-reveal">
                        <div class="sr-portfolio-card">
                            <img src="<?php echo e(asset('assets/images/hero-construction.png')); ?>?v=1.0.1" alt="Construction Project">
                            <div class="sr-portfolio-info">
                                <h4>Luxury Villa Project</h4>
                                <p>Residential Construction</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 sr-reveal">
                        <div class="sr-portfolio-card">
                            <img src="<?php echo e(asset('assets/images/service-interior.png')); ?>?v=1.0.1" alt="Interior Project">
                            <div class="sr-portfolio-info">
                                <h4>Modern Office Space</h4>
                                <p>Interior Design</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 sr-reveal">
                        <div class="sr-portfolio-card">
                            <img src="<?php echo e(asset('assets/images/service-survey.png')); ?>?v=1.0.1" alt="Survey Project">
                            <div class="sr-portfolio-info">
                                <h4>Topographic Site Analysis</h4>
                                <p>Land Surveying</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials Section -->
        <section class="sr-section sr-section--tight" id="testimonials">
            <div class="container">
                <div class="text-center sr-reveal">
                    <div class="sr-eyebrow justify-content-center">Client Success Stories</div>
                    <h2 class="sr-heading">What Our Clients <span style="color: var(--sr-primary);">Say About Us</span></h2>
                </div>
                <div class="row g-4 mt-4">
                    <div class="col-lg-4 col-md-6 sr-reveal">
                        <article class="sr-card" style="height: 100%;">
                            <div class="sr-stars mb-3">
                                <i class="fas fa-star" style="color: #ffb400;"></i>
                                <i class="fas fa-star" style="color: #ffb400;"></i>
                                <i class="fas fa-star" style="color: #ffb400;"></i>
                                <i class="fas fa-star" style="color: #ffb400;"></i>
                                <i class="fas fa-star" style="color: #ffb400;"></i>
                            </div>
                            <p style="font-style: italic; color: var(--sr-muted);">"Srikaram Constructions delivered our dream home on time. Their attention to detail in the foundation and structural work gave us immense peace of mind."</p>
                            <div class="mt-4 pt-4 border-top">
                                <h5 class="mb-0" style="font-family: var(--font-heading); font-weight: 700;">Rajesh Kumar</h5>
                                <small style="color: var(--sr-primary); font-weight: 600;">Home Owner</small>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6 sr-reveal">
                        <article class="sr-card" style="height: 100%;">
                            <div class="sr-stars mb-3">
                                <i class="fas fa-star" style="color: #ffb400;"></i>
                                <i class="fas fa-star" style="color: #ffb400;"></i>
                                <i class="fas fa-star" style="color: #ffb400;"></i>
                                <i class="fas fa-star" style="color: #ffb400;"></i>
                                <i class="fas fa-star" style="color: #ffb400;"></i>
                            </div>
                            <p style="font-style: italic; color: var(--sr-muted);">"The interior design team transformed our dull office into a vibrant, modern workspace. Their modular furniture solutions are top-notch."</p>
                            <div class="mt-4 pt-4 border-top">
                                <h5 class="mb-0" style="font-family: var(--font-heading); font-weight: 700;">Anjali Sharma</h5>
                                <small style="color: var(--sr-primary); font-weight: 600;">Business Director</small>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6 sr-reveal">
                        <article class="sr-card" style="height: 100%;">
                            <div class="sr-stars mb-3">
                                <i class="fas fa-star" style="color: #ffb400;"></i>
                                <i class="fas fa-star" style="color: #ffb400;"></i>
                                <i class="fas fa-star" style="color: #ffb400;"></i>
                                <i class="fas fa-star" style="color: #ffb400;"></i>
                                <i class="fas fa-star" style="color: #ffb400;"></i>
                            </div>
                            <p style="font-style: italic; color: var(--sr-muted);">"Highly accurate digital land survey. They provided detailed topographic maps that saved us weeks of planning time."</p>
                            <div class="mt-4 pt-4 border-top">
                                <h5 class="mb-0" style="font-family: var(--font-heading); font-weight: 700;">Vikram Reddy</h5>
                                <small style="color: var(--sr-primary); font-weight: 600;">Real Estate Developer</small>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="sr-section" id="contact" style="background: var(--sr-sand);">
            <div class="container">
                <div class="sr-contact-section sr-reveal p-5 p-lg-8 shadow-lg bg-white" style="border-radius: 40px;">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-5">
                            <div class="sr-eyebrow">Get In Touch</div>
                            <h2 class="sr-heading sr-heading--md mb-4">Let's Build Something <span style="color: var(--sr-primary);">Great Together</span></h2>
                            <p class="sr-lead mb-5" style="color: var(--sr-muted); font-size: 17px;">Ready to start your dream project? Contact us for a free consultation and quote.</p>
                            
                            <div class="mt-4">
                                <div class="mb-4">
                                    <div style="font-size: 13px; font-weight: 700; text-transform: uppercase; color: var(--sr-primary); margin-bottom: 5px; letter-spacing: 1px;">WhatsApp Inquiries</div>
                                    <div style="font-size: 22px; font-weight: 800; font-family: var(--font-heading); color: #1a1a1a;">+91 85007 66456</div>
                                </div>
                                <div>
                                    <div style="font-size: 13px; font-weight: 700; text-transform: uppercase; color: var(--sr-primary); margin-bottom: 5px; letter-spacing: 1px;">Email Inquiries</div>
                                    <div style="font-size: 20px; font-weight: 800; font-family: var(--font-heading); color: #1a1a1a;">srikaramconstruction@gmail.com</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="sr-form-wrapper">
                                <form id="lead-form" class="sr-form">
                                    <div class="row g-4">
                                        <div class="col-md-6 sr-form-group">
                                            <input type="text" name="name" class="sr-input" placeholder="Your Name" required>
                                        </div>
                                        <div class="col-md-6 sr-form-group">
                                            <input type="tel" name="phone" class="sr-input" placeholder="Phone Number" required>
                                        </div>
                                        <div class="col-12 sr-form-group">
                                            <select name="service" class="sr-input w-100" required>
                                                <option value="" disabled selected>Select Service Required</option>
                                                <option value="Construction">House Construction</option>
                                                <option value="Interiors">Interior Design</option>
                                                <option value="Survey">Land Surveying</option>
                                            </select>
                                        </div>
                                        <div class="col-12 sr-form-group">
                                            <textarea name="message" class="sr-input" placeholder="Tell us about your project details..." rows="4" required></textarea>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <button type="submit" class="sr-btn sr-btn--primary w-100 py-3 shadow-sm">
                                                Send WhatsApp Inquiry
                                                <i class="fab fa-whatsapp ms-2"></i>
                                            </button>
                                            <div class="sr-form-status mt-3" id="lead-form-status"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        (function() {

            const filterButtons = document.querySelectorAll('.sr-filter-btn');
            const projectItems = document.querySelectorAll('.sr-project-item');

            filterButtons.forEach((button) => {
                button.addEventListener('click', () => {
                    const filter = button.dataset.filter;

                    filterButtons.forEach((item) => item.classList.remove('is-active'));
                    button.classList.add('is-active');

                    projectItems.forEach((project) => {
                        const matches = filter === 'all' || project.dataset.category === filter;
                        project.style.display = matches ? '' : 'none';
                    });
                });
            });

            const leadForm = document.getElementById('lead-form');
            const formStatus = document.getElementById('lead-form-status');

            if (leadForm && formStatus) {
                leadForm.addEventListener('submit', function(event) {
                    event.preventDefault();

                    const data = new FormData(leadForm);
                    const name = (data.get('name') || '').toString().trim();
                    const phone = (data.get('phone') || '').toString().trim();
                    const service = (data.get('service') || '').toString().trim();
                    const message = (data.get('message') || '').toString().trim();

                    if (!name || !phone || !service || !message) {
                        formStatus.className = 'sr-form-status is-visible';
                        formStatus.textContent = 'Please fill in all fields so we can help you better.';
                        return;
                    }

                    const whatsappMessage = [
                        'Hello Srikaram Constructions, I would like a consultation.',
                        '',
                        'Name: ' + name,
                        'Phone: ' + phone,
                        'Service Required: ' + service,
                        'Message: ' + message
                    ].join('\n');

                    formStatus.className = 'sr-form-status is-visible is-success';
                    formStatus.textContent = 'Inquiry sent! Opening WhatsApp...';

                    setTimeout(() => {
                        window.open('https://wa.me/918500766456?text=' + encodeURIComponent(whatsappMessage), '_blank');
                        leadForm.reset();
                        formStatus.classList.remove('is-visible');
                    }, 1000);
                });
            }
        })();
    </script>
<?php $__env->stopPush(); ?>





<?php echo $__env->make('layouts.layout1', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\saikiranmangalapally\Downloads\srikaram_flat_files\resources\views/index.blade.php ENDPATH**/ ?>