<!--Start Main Header-->
<header class="main-header main-header-two sr-header">
    <div class="main-header-two__top sr-top-bar">
        <div class="container">
            <div class="main-header-two__top-inner">
                <div class="main-header-two__top-left">
                    <ul class="sr-top-info">
                        <li>
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:srikaramconstruction@gmail.com">srikaramconstruction@gmail.com</a>
                        </li>
                        <li>
                            <i class="fab fa-whatsapp"></i>
                            <a href="https://wa.me/918500766456" target="_blank">+91 85007 66456</a>
                        </li>
                    </ul>
                </div>
                <div class="main-header-two__top-right">
                    <div class="sr-top-tagline">
                        <i class="fas fa-clock"></i>
                        Open for Consultations: Mon - Sat
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-header-two__bottom sr-nav-bar">
        <div class="container">
            <div class="main-menu__wrapper-inner">
                <div class="sr-logo">
                    <a href="<?php echo e(route('index')); ?>" aria-label="Srikaram Constructions">
                        <div class="sr-logo__text">Srikaram</div>
                        <div class="sr-logo__subtext">Constructions</div>
                    </a>
                </div>

                <div class="main-menu-box sr-menu-box">
                    <?php if (isset($component)) { $__componentOriginal08d8a7e78212e5276ff67ebb414c512b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal08d8a7e78212e5276ff67ebb414c512b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.menuList','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('menuList'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal08d8a7e78212e5276ff67ebb414c512b)): ?>
<?php $attributes = $__attributesOriginal08d8a7e78212e5276ff67ebb414c512b; ?>
<?php unset($__attributesOriginal08d8a7e78212e5276ff67ebb414c512b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal08d8a7e78212e5276ff67ebb414c512b)): ?>
<?php $component = $__componentOriginal08d8a7e78212e5276ff67ebb414c512b; ?>
<?php unset($__componentOriginal08d8a7e78212e5276ff67ebb414c512b); ?>
<?php endif; ?>
                </div>

                <div class="sr-header-actions">
                    <a href="#" class="mobile-nav__toggler">
                        <i class="fa fa-bars"></i>
                    </a>
                    <a href="<?php echo e(route('index')); ?>#contact" class="sr-btn sr-btn--primary sr-btn--sm d-none d-xl-inline-flex">
                        Get Quote
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<style>
    .sr-header {
        background: #fff;
        box-shadow: 0 4px 30px rgba(0,0,0,0.03);
    }
    .sr-top-bar {
        background: #1a1a1a;
        color: #fff;
        padding: 8px 0;
        font-size: 13px;
        font-family: var(--font-body);
    }
    .sr-top-info {
        display: flex;
        gap: 25px;
        list-style: none;
        margin: 0;
        padding: 0;
    }
    .sr-top-info a {
        color: rgba(255,255,255,0.8);
        text-decoration: none;
        transition: color 0.3s;
    }
    .sr-top-info a:hover { color: var(--sr-primary); }
    .sr-top-info i { color: var(--sr-primary); margin-right: 8px; }

    .sr-nav-bar {
        padding: 15px 0;
    }
    .sr-logo a {
        text-decoration: none;
        display: block;
    }
    .sr-logo__text {
        color: #1a1a1a;
        font-size: 28px;
        font-weight: 900;
        font-family: var(--font-heading);
        line-height: 0.9;
        letter-spacing: -1px;
    }
    .sr-logo__subtext {
        color: var(--sr-primary);
        font-size: 10px;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 3px;
        margin-top: 4px;
        border-top: 2px solid var(--sr-primary);
        display: inline-block;
        padding-top: 2px;
    }
    .sr-header-actions {
        display: flex;
        align-items: center;
        gap: 20px;
    }
    .main-menu__wrapper-inner {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
    }
    .sr-header-actions {
        display: flex;
        align-items: center;
        gap: 20px;
    }
    .mobile-nav__toggler {
        display: none;
        color: #1a1a1a;
        font-size: 24px;
        padding: 5px;
        cursor: pointer;
    }

    @media (max-width: 1199px) {
        .main-menu-box {
            display: none !important;
        }
        .mobile-nav__toggler {
            display: block;
        }
        .sr-logo__text {
            font-size: 20px;
        }
        .sr-logo__subtext {
            font-size: 9px;
            letter-spacing: 1px;
        }
        .sr-top-tagline {
            display: none;
        }
    }

    @media (max-width: 767px) {
        .sr-btn--sm {
            display: none !important;
        }
        .sr-header-actions {
            display: flex;
        }
        .sr-top-bar {
            display: none;
        }
        .sr-nav-bar {
            padding: 10px 0;
        }
    }

    .main-menu__list {
        display: flex;
        align-items: center;
        list-style: none;
        margin: 0;
        padding: 0;
    }
    .main-menu__list > li > a {
        font-family: var(--font-heading) !important;
        font-weight: 600 !important;
        font-size: 15px !important;
        color: #1a1a1a !important;
        padding: 10px 15px !important;
    }
    .main-menu__list > li.current > a {
        color: var(--sr-primary) !important;
    }
    .main-menu__list > li.dropdown {
        position: relative;
    }
    .main-menu__list > li.dropdown > ul {
        position: absolute;
        top: 100%;
        left: 0;
        min-width: 250px;
        background: #fff;
        box-shadow: 0 15px 40px rgba(0,0,0,0.12);
        list-style: none;
        padding: 15px 0;
        margin: 0;
        opacity: 0;
        visibility: hidden;
        display: block; /* Use block + opacity for better accessibility */
        transform: translateY(15px);
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        z-index: 1000;
        border-radius: 16px;
        border-top: 4px solid var(--sr-primary);
    }
    .main-menu__list > li.dropdown:hover > ul {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }
    .main-menu__list > li.dropdown > ul > li > a {
        display: block;
        padding: 10px 25px;
        color: #1a1a1a;
        text-decoration: none;
        font-weight: 600;
        font-size: 14px;
        transition: all 0.3s;
    }
    .main-menu__list > li.dropdown > ul > li > a:hover {
        background: var(--sr-sand);
        color: var(--sr-primary);
        padding-left: 30px;
    }
    .sr-top-tagline {
        font-weight: 500;
        color: rgba(255,255,255,0.7);
    }
    .sr-top-tagline i { color: var(--sr-primary); margin-right: 8px; }
</style>
<!--End Main Header-->

<div class="stricky-header stricky-header--two stricked-menu main-menu">
    <div class="sticky-header__content"></div>
</div>



<?php /**PATH C:\Users\saikiranmangalapally\Downloads\srikaram_flat_files\resources\views/components/header_style_one.blade.php ENDPATH**/ ?>