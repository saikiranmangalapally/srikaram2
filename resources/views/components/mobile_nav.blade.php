<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler">
            <i class="fas fa-times"></i>
        </span>
        <div class="logo-box mb-4">
            <a href="{{ route('index') }}" aria-label="Srikaram Constructions">
                <div class="sr-logo__text" style="color: #fff; font-size: 28px;">Srikaram</div>
                <div class="sr-logo__subtext">Constructions</div>
            </a>
        </div>
        <div class="mobile-nav__container"></div>
        <ul class="mobile-nav__contact list-unstyled mt-4">
            <li class="mb-3">
                <i class="fas fa-envelope" style="color: var(--sr-primary); margin-right: 10px;"></i>
                <a href="mailto:srikaramconstruction@gmail.com" style="color: rgba(255,255,255,0.8); text-decoration: none;">srikaramconstruction@gmail.com</a>
            </li>
            <li class="mb-4">
                <i class="fab fa-whatsapp" style="color: var(--sr-primary); margin-right: 10px;"></i>
                <a href="https://wa.me/918500766456" target="_blank" style="color: rgba(255,255,255,0.8); text-decoration: none;">+91 85007 66456</a>
            </li>
        </ul>
        <div class="mobile-nav__social mt-4">
            <a href="https://wa.me/918500766456" target="_blank" class="fab fa-whatsapp" aria-label="WhatsApp"></a>
            <a href="mailto:srikaramconstruction@gmail.com" class="fas fa-envelope" aria-label="Email"></a>
        </div>
    </div>
</div>

<style>
    .mobile-nav__content {
        background: #1a1a1a !important;
        padding: 40px 30px !important;
    }
    .mobile-nav__close {
        color: #fff !important;
        font-size: 20px !important;
    }
    .mobile-nav__social a {
        width: 45px !important;
        height: 45px !important;
        background: rgba(255,255,255,0.05) !important;
        color: #fff !important;
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        border-radius: 50% !important;
        margin-right: 10px !important;
        transition: all 0.3s !important;
    }
    .mobile-nav__social a:hover {
        background: var(--sr-primary) !important;
    }
    .mobile-nav__container .main-menu__list > li > a {
        color: #fff !important;
        font-family: var(--font-heading) !important;
        font-weight: 600 !important;
        border-bottom: 1px solid rgba(255,255,255,0.05) !important;
        padding: 15px 0 !important;
    }
</style>



