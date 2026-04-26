<?php $__env->startSection('title', 'Project Showcase | Srikaram Constructions'); ?>

<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginalf5606eea0f9c25be0d1717ad67ba232c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5606eea0f9c25be0d1717ad67ba232c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.pageHeader','data' => ['title' => 'Luxury Residential Villa','subtitle' => 'Project Details']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('pageHeader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Luxury Residential Villa','subtitle' => 'Project Details']); ?>
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
                        <img src="<?php echo e(asset('assets/images/hero-construction.png')); ?>?v=1.0.1" alt="Featured Project" class="w-100" style="height: 500px; object-fit: cover;">
                    </div>
                    
                    <h2 class="sr-heading mb-4">Building a <span style="color: var(--sr-primary);">Modern Masterpiece</span></h2>
                    <p class="sr-lead mb-4">This project showcases our commitment to structural excellence and luxury design. Located in the heart of the city, this villa integrates sustainable building practices with high-end aesthetic finishes.</p>
                    
                    <div class="row g-4 mb-5">
                        <div class="col-md-6">
                            <div class="p-4 rounded-4" style="background: #f8f9fa;">
                                <h4 class="fw-bold mb-3"><i class="fas fa-check-circle text-primary me-2"></i> Quality Materials</h4>
                                <p class="mb-0">Used premium grade TMT steel and specialized eco-friendly insulation systems.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-4 rounded-4" style="background: #f8f9fa;">
                                <h4 class="fw-bold mb-3"><i class="fas fa-magic text-primary me-2"></i> Smart Layout</h4>
                                <p class="mb-0">Designed for maximum natural light and ventilation, reducing energy costs by 20%.</p>
                            </div>
                        </div>
                    </div>

                    <h3 class="fw-bold mb-4">Project Overview</h3>
                    <p class="mb-5">Our team managed this project from site measurement (Land Surveying) to structural construction and final interior styling. This turnkey approach ensured that every design detail was executed with 100% fidelity to the original vision.</p>

                    <div class="row g-4">
                        <div class="col-6">
                            <img src="<?php echo e(asset('assets/images/service-interior.png')); ?>?v=1.0.1" alt="Interior Work" class="w-100 rounded-4" style="height: 250px; object-fit: cover;">
                        </div>
                        <div class="col-6">
                            <img src="<?php echo e(asset('assets/images/service-survey.png')); ?>?v=1.0.1" alt="Survey Work" class="w-100 rounded-4" style="height: 250px; object-fit: cover;">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sr-sticky-sidebar">
                        <div class="sr-card p-5 mb-4" style="background: #1a1a1a; color: #fff;">
                            <h4 class="fw-bold mb-4">Project Stats</h4>
                            <ul class="list-unstyled sr-stats-list">
                                <li class="mb-3 d-flex justify-content-between border-bottom border-white-10 pb-2">
                                    <span class="text-white-50">Category:</span>
                                    <span>Construction</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between border-bottom border-white-10 pb-2">
                                    <span class="text-white-50">Location:</span>
                                    <span>Vijayawada, AP</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between border-bottom border-white-10 pb-2">
                                    <span class="text-white-50">Completed:</span>
                                    <span>March 2024</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <span class="text-white-50">Duration:</span>
                                    <span>14 Months</span>
                                </li>
                            </ul>
                        </div>

                        <div class="sr-card p-5 border-primary text-center" style="border: 2px solid var(--sr-primary);">
                            <h4 class="fw-bold mb-3">Inspired?</h4>
                            <p class="text-muted mb-4">Let us build something similar for you.</p>
                            <a href="<?php echo e(route('contact')); ?>" class="sr-btn w-100">Get a Free Estimate</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<style>
    .border-white-10 {
        border-color: rgba(255,255,255,0.1) !important;
    }
    .sr-stats-list span:last-child {
        font-weight: 700;
    }
</style>
<?php $__env->stopPush(); ?>





<?php echo $__env->make('layouts.layoutCommon', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\saikiranmangalapally\Downloads\srikaram_flat_files\resources\views/portfolio-details.blade.php ENDPATH**/ ?>