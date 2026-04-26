<?php $__env->startSection('title', 'About Us | Srikaram Constructions'); ?>

<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginalf5606eea0f9c25be0d1717ad67ba232c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5606eea0f9c25be0d1717ad67ba232c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.pageHeader','data' => ['title' => 'About Our Legacy','subtitle' => 'About Us']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('pageHeader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'About Our Legacy','subtitle' => 'About Us']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf5606eea0f9c25be0d1717ad67ba232c)): ?>
<?php $attributes = $__attributesOriginalf5606eea0f9c25be0d1717ad67ba232c; ?>
<?php unset($__attributesOriginalf5606eea0f9c25be0d1717ad67ba232c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf5606eea0f9c25be0d1717ad67ba232c)): ?>
<?php $component = $__componentOriginalf5606eea0f9c25be0d1717ad67ba232c; ?>
<?php unset($__componentOriginalf5606eea0f9c25be0d1717ad67ba232c); ?>
<?php endif; ?>

    <!-- Our Story Section -->
    <section class="sr-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 sr-reveal">
                    <div class="sr-about-visual">
                        <img src="<?php echo e(asset('assets/images/hero-construction.png')); ?>?v=1.0.1" alt="Building Excellence" class="img-fluid rounded-4 shadow-lg">
                        <div class="sr-experience-badge">
                            <span class="number">8</span>
                            <span class="text">Years of<br>Excellence</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 sr-reveal">
                    <div class="sr-eyebrow">Our Story</div>
                    <h2 class="sr-heading sr-heading--md mb-4">8 Years of <span style="color: var(--sr-primary);">Building Excellence</span></h2>
                    <p class="sr-lead mb-4">Srikaram Constructions was founded on the principle that every structure should be a masterpiece of engineering and a haven of comfort.</p>
                    <p style="color: var(--sr-muted); line-height: 1.8; margin-bottom: 30px;">For the past 8 years, we have been at the forefront of the construction industry, delivering high-quality residential and commercial projects. Our multidisciplinary approach—combining construction, interior design, and digital land surveying—ensures that our clients receive a comprehensive, hassle-free experience.</p>
                    
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <div class="d-flex gap-3">
                                <div class="sr-icon-small"><i class="fas fa-check-circle"></i></div>
                                <div>
                                    <h5 style="font-family: var(--font-heading); font-weight: 700; margin-bottom: 5px;">Quality First</h5>
                                    <p style="font-size: 14px; color: var(--sr-muted);">Uncompromising material and labor standards.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex gap-3">
                                <div class="sr-icon-small"><i class="fas fa-check-circle"></i></div>
                                <div>
                                    <h5 style="font-family: var(--font-heading); font-weight: 700; margin-bottom: 5px;">Timely Delivery</h5>
                                    <p style="font-size: 14px; color: var(--sr-muted);">Strict adherence to project timelines.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values Section -->
    <section class="sr-section" style="background: #f8f9fa;">
        <div class="container">
            <div class="text-center sr-reveal mb-5">
                <div class="sr-eyebrow justify-content-center">Our Foundations</div>
                <h2 class="sr-heading">The Values That <span style="color: var(--sr-primary);">Drive Us</span></h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 sr-reveal">
                    <div class="sr-card text-center p-5">
                        <div class="sr-icon-box mx-auto mb-4" style="width: 80px; height: 80px; font-size: 30px;">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3 style="font-family: var(--font-heading); font-weight: 800; margin-bottom: 15px;">Trust & Transparency</h3>
                        <p style="color: var(--sr-muted);">We believe in clear communication and honest pricing. Our clients are partners in the building process.</p>
                    </div>
                </div>
                <div class="col-lg-4 sr-reveal">
                    <div class="sr-card text-center p-5">
                        <div class="sr-icon-box mx-auto mb-4" style="width: 80px; height: 80px; font-size: 30px;">
                            <i class="fas fa-drafting-compass"></i>
                        </div>
                        <h3 style="font-family: var(--font-heading); font-weight: 800; margin-bottom: 15px;">Engineering Precision</h3>
                        <p style="color: var(--sr-muted);">From digital land surveys to structural integrity, we use modern technology to ensure absolute accuracy.</p>
                    </div>
                </div>
                <div class="col-lg-4 sr-reveal">
                    <div class="sr-card text-center p-5">
                        <div class="sr-icon-box mx-auto mb-4" style="width: 80px; height: 80px; font-size: 30px;">
                            <i class="fas fa-gem"></i>
                        </div>
                        <h3 style="font-family: var(--font-heading); font-weight: 800; margin-bottom: 15px;">Modern Aesthetics</h3>
                        <p style="color: var(--sr-muted);">Our interior design wing specializes in creating spaces that are contemporary, functional, and deeply personal.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="sr-section">
        <div class="container">
            <div class="sr-card sr-reveal" style="background: #1a1a1a; color: #fff; padding: 60px;">
                <div class="row g-5">
                    <div class="col-lg-6">
                        <h3 class="sr-heading sr-heading--sm text-white mb-4">Our Mission</h3>
                        <p style="color: rgba(255,255,255,0.7); font-size: 18px; line-height: 1.8;">To revolutionize the construction landscape in the region by providing end-to-end, high-quality, and technology-driven solutions that exceed client expectations and stand the test of time.</p>
                    </div>
                    <div class="col-lg-6" style="border-left: 1px solid rgba(255,255,255,0.1);">
                        <h3 class="sr-heading sr-heading--sm text-white mb-4">Our Vision</h3>
                        <p style="color: rgba(255,255,255,0.7); font-size: 18px; line-height: 1.8;">To be the most trusted and innovative construction partner, recognized for our commitment to quality, sustainability, and architectural excellence.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="sr-section sr-section--tight" style="background: var(--sr-primary);">
        <div class="container">
            <div class="d-flex flex-column flex-lg-row align-items-center justify-content-between gap-4 text-center text-lg-start sr-reveal">
                <div>
                    <h2 style="color: #fff; font-family: var(--font-heading); font-weight: 800; margin-bottom: 10px;">Ready to Start Your Journey?</h2>
                    <p style="color: rgba(255,255,255,0.8); margin-bottom: 0;">Consult with our experts for a free project estimation and advice.</p>
                </div>
                <a href="<?php echo e(route('index')); ?>#contact" class="sr-btn" style="background: #fff; color: var(--sr-primary);">
                    Contact Us Today <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </section>

    
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<style>
    .sr-experience-badge {
        position: absolute;
        bottom: -30px;
        right: -30px;
        background: var(--sr-primary);
        color: #fff;
        padding: 30px;
        border-radius: 20px;
        box-shadow: 0 20px 40px rgba(230, 126, 34, 0.3);
        text-align: center;
        z-index: 5;
    }
    .sr-experience-badge .number {
        display: block;
        font-size: 42px;
        font-weight: 900;
        line-height: 1;
        font-family: var(--font-heading);
    }
    .sr-experience-badge .text {
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    .sr-icon-small {
        width: 45px;
        height: 45px;
        background: rgba(230, 126, 34, 0.1);
        color: var(--sr-primary);
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
        flex-shrink: 0;
        font-size: 20px;
    }
</style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.layoutCommon', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\saikiranmangalapally\Downloads\srikaram_flat_files\resources\views/about.blade.php ENDPATH**/ ?>