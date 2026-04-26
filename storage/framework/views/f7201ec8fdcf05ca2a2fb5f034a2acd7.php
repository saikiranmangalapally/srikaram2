<?php $__env->startSection('title', 'Our Portfolio | Srikaram Constructions'); ?>

<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginalf5606eea0f9c25be0d1717ad67ba232c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5606eea0f9c25be0d1717ad67ba232c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.pageHeader','data' => ['title' => 'Our Landmark Projects','subtitle' => 'Portfolio']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('pageHeader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Our Landmark Projects','subtitle' => 'Portfolio']); ?>
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

    <!-- Featured Projects Grid -->
    <section class="sr-section">
        <div class="container">
            <div class="text-center sr-reveal mb-5">
                <div class="sr-eyebrow justify-content-center">Portfolio</div>
                <h2 class="sr-heading">Delivering <span style="color: var(--sr-primary);">Excellence</span> Across Every Project</h2>
            </div>

            <div class="row g-4">
                <!-- Project 1: Luxury Villa -->
                <div class="col-lg-4 col-md-6 sr-reveal">
                    <div class="sr-portfolio-card">
                        <div class="sr-portfolio-card__img">
                            <img src="<?php echo e(asset('assets/images/hero-construction.png')); ?>?v=1.0.1" alt="Luxury Villa Construction">
                            <div class="sr-portfolio-card__overlay">
                                <div class="content">
                                    <span class="category">Residential</span>
                                    <h3>Luxury Private Villa</h3>
                                    <p>Hyderabad, Telangana</p>
                                    <a href="<?php echo e(route('portfolio-details')); ?>" class="sr-btn sr-btn--sm mt-3">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 2: Modern Interiors -->
                <div class="col-lg-4 col-md-6 sr-reveal" data-wow-delay="0.2s">
                    <div class="sr-portfolio-card">
                        <div class="sr-portfolio-card__img">
                            <img src="<?php echo e(asset('assets/images/hero-construction.png')); ?>?v=1.0.1" alt="Corporate Interior Design">
                            <div class="sr-portfolio-card__overlay">
                                <div class="content">
                                    <span class="category">Interiors</span>
                                    <h3>Premium Corporate Office</h3>
                                    <p>HITEC City, Hyderabad</p>
                                    <a href="<?php echo e(route('portfolio-details')); ?>" class="sr-btn sr-btn--sm mt-3">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 3: Land Survey -->
                <div class="col-lg-4 col-md-6 sr-reveal" data-wow-delay="0.4s">
                    <div class="sr-portfolio-card">
                        <div class="sr-portfolio-card__img">
                            <img src="<?php echo e(asset('assets/images/hero-construction.png')); ?>?v=1.0.1" alt="Digital Land Survey">
                            <div class="sr-portfolio-card__overlay">
                                <div class="content">
                                    <span class="category">Engineering</span>
                                    <h3>Highway Layout Mapping</h3>
                                    <p>Outer Ring Road, Hyderabad</p>
                                    <a href="<?php echo e(route('portfolio-details')); ?>" class="sr-btn sr-btn--sm mt-3">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Repeat with placeholder logic or more variations if needed, but 3 high-end ones are better than 9 generic ones -->
                <div class="col-lg-4 col-md-6 sr-reveal">
                    <div class="sr-portfolio-card">
                        <div class="sr-portfolio-card__img">
                            <img src="<?php echo e(asset('assets/images/hero-construction.png')); ?>?v=1.0.1" alt="Apartment Complex">
                            <div class="sr-portfolio-card__overlay">
                                <div class="content">
                                    <span class="category">Construction</span>
                                    <h3>Elite Residency Apartments</h3>
                                    <p>Kukatpally, Hyderabad</p>
                                    <a href="<?php echo e(route('portfolio-details')); ?>" class="sr-btn sr-btn--sm mt-3">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 sr-reveal" data-wow-delay="0.2s">
                    <div class="sr-portfolio-card">
                        <div class="sr-portfolio-card__img">
                            <img src="<?php echo e(asset('assets/images/hero-construction.png')); ?>?v=1.0.1" alt="Residential Interior">
                            <div class="sr-portfolio-card__overlay">
                                <div class="content">
                                    <span class="category">Interiors</span>
                                    <h3>Modern Penthouse Design</h3>
                                    <p>Banjara Hills, Hyderabad</p>
                                    <a href="<?php echo e(route('portfolio-details')); ?>" class="sr-btn sr-btn--sm mt-3">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 sr-reveal" data-wow-delay="0.4s">
                    <div class="sr-portfolio-card">
                        <div class="sr-portfolio-card__img">
                            <img src="<?php echo e(asset('assets/images/hero-construction.png')); ?>?v=1.0.1" alt="Topographical Survey">
                            <div class="sr-portfolio-card__overlay">
                                <div class="content">
                                    <span class="category">Surveying</span>
                                    <h3>Industrial Zone Topo Survey</h3>
                                    <p>Sangareddy District</p>
                                    <a href="<?php echo e(route('portfolio-details')); ?>" class="sr-btn sr-btn--sm mt-3">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Inquiry -->
    <section class="sr-section" style="background: var(--sr-primary);">
        <div class="container text-center">
            <h2 class="sr-heading text-white mb-4">Have a Project in Mind?</h2>
            <p class="sr-lead text-white-50 mb-5">From blueprint to reality, we handle it all with precision and passion.</p>
            <div class="d-flex flex-column flex-md-row justify-content-center gap-3">
                <a href="<?php echo e(route('contact')); ?>" class="sr-btn sr-btn--dark">Get a Free Estimate</a>
                <a href="https://wa.me/918500766456" class="sr-btn" style="background: #25D366; color: #fff; border: none;">Chat on WhatsApp</a>
            </div>
        </div>
    </section>

    
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<style>
    .sr-portfolio-card {
        border-radius: 24px;
        overflow: hidden;
        position: relative;
        background: #000;
        height: 450px;
    }
    .sr-portfolio-card__img {
        width: 100%;
        height: 100%;
        position: relative;
    }
    .sr-portfolio-card__img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.8s cubic-bezier(0.2, 1, 0.3, 1);
        opacity: 0.85;
    }
    .sr-portfolio-card:hover .sr-portfolio-card__img img {
        transform: scale(1.1);
        opacity: 0.6;
    }
    .sr-portfolio-card__overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        padding: 40px;
        display: flex;
        align-items: flex-end;
        background: linear-gradient(to top, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0) 60%);
        transition: background 0.4s;
    }
    .sr-portfolio-card__overlay .content {
        color: #fff;
        transform: translateY(20px);
        transition: transform 0.4s;
    }
    .sr-portfolio-card:hover .sr-portfolio-card__overlay .content {
        transform: translateY(0);
    }
    .sr-portfolio-card__overlay .category {
        display: inline-block;
        background: var(--sr-primary);
        padding: 5px 15px;
        border-radius: 50px;
        font-size: 12px;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 15px;
    }
    .sr-portfolio-card__overlay h3 {
        font-family: var(--font-heading);
        font-weight: 800;
        margin-bottom: 5px;
        font-size: 24px;
    }
    .sr-portfolio-card__overlay p {
        color: rgba(255,255,255,0.7);
        font-weight: 500;
        margin-bottom: 0;
    }
</style>
<?php $__env->stopPush(); ?>





<?php echo $__env->make('layouts.layoutCommon', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\saikiranmangalapally\Downloads\srikaram_flat_files\resources\views/portfolio.blade.php ENDPATH**/ ?>