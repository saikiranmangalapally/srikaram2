<!--Start Page Header-->
<section class="sr-page-header">
    <div class="sr-page-header__bg" style="background-image: url('{{ asset('assets/images/page-header-bg-premium.png') }}?v=1.0.2');"></div>
    <div class="sr-page-header__overlay"></div>
    <div class="container">
        <div class="sr-page-header__content sr-reveal">
            <h1 class="sr-page-header__title">{{ $title ?? 'Srikaram' }}</h1>
            <ul class="sr-breadcrumb">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li class="separator"><i class="fas fa-chevron-right"></i></li>
                <li class="current">{{ $subtitle ?? 'Details' }}</li>
            </ul>
        </div>
    </div>
</section>

<style>
    .sr-page-header {
        position: relative;
        padding: 120px 0 80px;
        background: #1a1a1a;
        overflow: hidden;
    }
    .sr-page-header__bg {
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        background-size: cover;
        background-position: center;
        opacity: 0.3;
        filter: grayscale(100%);
    }
    .sr-page-header__overlay {
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        background: linear-gradient(to bottom, rgba(26,26,26,0.8), #1a1a1a);
    }
    .sr-page-header__content {
        position: relative;
        z-index: 2;
        text-align: center;
    }
    .sr-page-header__title {
        font-family: var(--font-heading);
        font-size: 56px;
        font-weight: 800;
        color: #fff;
        margin-bottom: 20px;
        letter-spacing: -1px;
    }
    .sr-breadcrumb {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 15px;
    }
    .sr-breadcrumb li a {
        color: rgba(255,255,255,0.6);
        text-decoration: none;
        font-weight: 600;
        transition: color 0.3s;
    }
    .sr-breadcrumb li a:hover { color: var(--sr-primary); }
    .sr-breadcrumb li.separator {
        color: rgba(255,255,255,0.3);
        font-size: 10px;
    }
    .sr-breadcrumb li.current {
        color: var(--sr-primary);
        font-weight: 700;
    }

    @media (max-width: 768px) {
        .sr-page-header__title { font-size: 36px; }
    }
</style>
<!--End Page Header-->


