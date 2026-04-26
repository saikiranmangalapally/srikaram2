<?php $__env->startSection('title', 'Frequently Asked Questions | Srikaram Constructions'); ?>

<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginalf5606eea0f9c25be0d1717ad67ba232c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5606eea0f9c25be0d1717ad67ba232c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.pageHeader','data' => ['title' => 'Got Questions?','subtitle' => 'Frequently Asked Questions']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('pageHeader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Got Questions?','subtitle' => 'Frequently Asked Questions']); ?>
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
                    <div class="sr-eyebrow">Common Queries</div>
                    <h2 class="sr-heading mb-5">Everything You Need to Know About <span style="color: var(--sr-primary);">Building With Us</span></h2>

                    <div class="accordion sr-accordion" id="faqAccordion">
                        <!-- Q1 -->
                        <div class="accordion-item sr-card p-0 mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#q1">
                                    What are your primary areas of operation?
                                </button>
                            </h2>
                            <div id="q1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    We primarily operate across Andhra Pradesh and Telangana, specializing in luxury residential projects and large-scale land layouts.
                                </div>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion-item sr-card p-0 mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#q2">
                                    How do you ensure construction quality?
                                </button>
                            </h2>
                            <div id="q2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    We use high-grade TMT steel, premium concrete mixes, and conduct regular structural audits. Every phase is supervised by a senior civil engineer.
                                </div>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion-item sr-card p-0 mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#q3">
                                    Do you provide turnkey interior solutions?
                                </button>
                            </h2>
                            <div id="q3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    Yes, we handle everything from 3D visualization and plumbing/electrical work to bespoke furniture and modular kitchens.
                                </div>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion-item sr-card p-0 mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#q4">
                                    What technology do you use for land surveying?
                                </button>
                            </h2>
                            <div id="q4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    We utilize DGPS (Differential Global Positioning System) and Total Station technology to provide centimeter-level accuracy for mapping and layout plotting.
                                </div>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion-item sr-card p-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#q5">
                                    Can I get a custom quote for my project?
                                </button>
                            </h2>
                            <div id="q5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    Absolutely! You can reach out to us via the contact form or WhatsApp us directly at +91 85007 66456 for a free initial consultation and quote.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sr-sticky-sidebar">
                        <div class="sr-card p-5 text-center" style="background: var(--sr-primary); color: #fff;">
                            <h3 class="fw-bold mb-3">Still Have Questions?</h3>
                            <p class="mb-4">Our support team is available Mon-Sat to help you with your project needs.</p>
                            <a href="https://wa.me/918500766456" target="_blank" class="sr-btn sr-btn--outline w-100">WhatsApp Us Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<style>
    .sr-accordion .accordion-button {
        padding: 25px;
        background: #fff;
        border: none;
        box-shadow: none;
        color: var(--sr-secondary);
        font-size: 18px;
    }
    .sr-accordion .accordion-button:not(.collapsed) {
        color: var(--sr-primary);
        background: #fff;
    }
    .sr-accordion .accordion-body {
        padding: 0 25px 25px;
        line-height: 1.8;
    }
    .sr-accordion .accordion-item {
        border: 1px solid var(--sr-line);
        overflow: hidden;
    }
</style>
<?php $__env->stopPush(); ?>






<?php echo $__env->make('layouts.layoutCommon', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\saikiranmangalapally\Downloads\srikaram_flat_files\resources\views/faq.blade.php ENDPATH**/ ?>