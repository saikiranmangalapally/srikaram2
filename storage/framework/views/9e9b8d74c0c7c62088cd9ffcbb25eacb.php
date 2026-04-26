<ul class="main-menu__list">
    <li <?php if(request()->routeIs('index')): ?> class="current" <?php endif; ?>>
        <a href="<?php echo e(route('index')); ?>">Home</a>
    </li>
    <li class="dropdown <?php if(request()->routeIs('services') || request()->routeIs('construction') || request()->routeIs('interior-design') || request()->routeIs('land-surveying')): ?> current <?php endif; ?>">
        <a href="<?php echo e(route('services')); ?>">Services</a>
        <ul>
            <li><a href="<?php echo e(route('construction')); ?>">House Construction</a></li>
            <li><a href="<?php echo e(route('interior-design')); ?>">Interior Design</a></li>
            <li><a href="<?php echo e(route('land-surveying')); ?>">Land Surveying</a></li>
        </ul>
    </li>
    <li <?php if(request()->routeIs('about')): ?> class="current" <?php endif; ?>>
        <a href="<?php echo e(route('about')); ?>">About</a>
    </li>
    <li <?php if(request()->routeIs('portfolio') || request()->routeIs('portfolio-details')): ?> class="current" <?php endif; ?>>
        <a href="<?php echo e(route('portfolio')); ?>">Portfolio</a>
    </li>
    <li <?php if(request()->routeIs('team')): ?> class="current" <?php endif; ?>>
        <a href="<?php echo e(route('team')); ?>">Team</a>
    </li>
    <li <?php if(request()->routeIs('faq')): ?> class="current" <?php endif; ?>>
        <a href="<?php echo e(route('faq')); ?>">FAQ</a>
    </li>
    <li <?php if(request()->routeIs('contact')): ?> class="current" <?php endif; ?>>
        <a href="<?php echo e(route('contact')); ?>">Contact</a>
    </li>
</ul>



<?php /**PATH C:\Users\saikiranmangalapally\Downloads\srikaram_flat_files\resources\views/components/menuList.blade.php ENDPATH**/ ?>