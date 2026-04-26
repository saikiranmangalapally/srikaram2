<!DOCTYPE html>
<html lang="en">
<x-head />

<body>

    <x-loader />

    <div class="page-wrapper">
        <x-header_style_one />

        @yield('content')

        <x-footer_style_one />

    </div><!-- /.page-wrapper -->

    <x-mobile_nav />
    <x-search_popup />
    <!-- WhatsApp Floating Action -->
    <a href="https://wa.me/918500766456" class="sr-float-whatsapp" target="_blank" rel="noopener">
        <i class="fab fa-whatsapp"></i>
    </a>
    <x-scripts />

</body>

</html>

