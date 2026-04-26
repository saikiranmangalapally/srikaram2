<?php $__env->startSection('title', 'Modern Interior Design | Srikaram Constructions'); ?>

<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginalf5606eea0f9c25be0d1717ad67ba232c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5606eea0f9c25be0d1717ad67ba232c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.pageHeader','data' => ['title' => 'Elegance In Every Corner','subtitle' => 'Interior Design']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('pageHeader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Elegance In Every Corner','subtitle' => 'Interior Design']); ?>
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

    <section class="sr-section">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-8 sr-reveal">
                    <div class="sr-card overflow-hidden mb-5">
                        <img src="<?php echo e(asset('assets/images/service-interior.png')); ?>?v=1.0.1" alt="Interior Excellence" class="w-100" style="height: 450px; object-fit: cover;">
                    </div>
                    
                    <h2 class="sr-heading mb-4">Transforming Spaces Into <span style="color: var(--sr-primary);">Masterpieces</span></h2>
                    <p class="sr-lead mb-4">At Srikaram Constructions, our interior design wing is dedicated to creating functional, luxury spaces that resonate with your lifestyle. From modern minimalist homes to vibrant corporate offices, we bring your vision to life.</p>
                    
                    <div class="row g-4 mb-5">
                        <div class="col-md-6">
                            <div class="p-4 rounded-4" style="background: #f8f9fa;">
                                <h4 class="fw-bold mb-3"><i class="fas fa-cube text-primary me-2"></i> 3D Visualization</h4>
                                <p class="mb-0">See your space before it's built with our high-fidelity 3D renders and virtual tours.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-4 rounded-4" style="background: #f8f9fa;">
                                <h4 class="fw-bold mb-3"><i class="fas fa-couch text-primary me-2"></i> Custom Furniture</h4>
                                <p class="mb-0">Bespoke furniture solutions that fit perfectly into your space and style requirements.</p>
                            </div>
                        </div>
                    </div>

                    <h3 class="fw-bold mb-4">Our Design Philosophy</h3>
                    <p class="mb-5">We believe that great design is a blend of aesthetics and utility. Our team works closely with you to understand your habits, preferences, and aesthetic goals to deliver a space that is truly yours.</p>

                    <div class="row g-3">
                        <div class="col-6">
                            <div class="sr-card p-3 text-center" style="background: #fff; border: 1px solid #eee;">
                                <h5 class="fw-bold text-primary mb-0">Residential</h5>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="sr-card p-3 text-center" style="background: #fff; border: 1px solid #eee;">
                                <h5 class="fw-bold text-primary mb-0">Commercial</h5>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="sr-card p-3 text-center" style="background: #fff; border: 1px solid #eee;">
                                <h5 class="fw-bold text-primary mb-0">Kitchen & Wardrobes</h5>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="sr-card p-3 text-center" style="background: #fff; border: 1px solid #eee;">
                                <h5 class="fw-bold text-primary mb-0">Lighting Design</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sr-sticky-sidebar">
                        <div class="sr-card p-5 mb-4" style="background: #1a1a1a; color: #fff;">
                            <h4 class="fw-bold mb-4">Other Services</h4>
                            <ul class="list-unstyled sr-sidebar-links">
                                <li class="mb-3"><a href="<?php echo e(route('construction')); ?>" class="text-white-50 text-decoration-none d-flex justify-content-between">Construction <i class="fas fa-chevron-right"></i></a></li>
                                <li class="mb-3"><a href="<?php echo e(route('land-surveying')); ?>" class="text-white-50 text-decoration-none d-flex justify-content-between">Land Surveying <i class="fas fa-chevron-right"></i></a></li>
                            </ul>
                        </div>

                        <div class="sr-card p-5 border-primary" style="border: 2px solid var(--sr-primary);">
                            <h4 class="fw-bold mb-3">Consult a Designer</h4>
                            <p class="text-muted mb-4">Get expert advice on your interior project.</p>
                            <form id="sr-sidebar-form">
                                <input type="text" class="sr-input mb-3" placeholder="Your Name" required>
                                <input type="tel" class="sr-input mb-3" placeholder="Phone Number" required>
                                <button type="submit" class="sr-btn w-100">Book Appointment</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.layoutCommon', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\saikiranmangalapally\Downloads\srikaram_flat_files\resources\views/interior-design.blade.php ENDPATH**/ ?>