<!DOCTYPE html>
<html lang="en">
<x-head />

<body>

    <x-loader />

    <div class="page-wrapper">
        <x-header_style_four />

        @yield('content')

        <x-mobile_nav />
        <x-search_popup />
        <x-scroll_to_top />
        <x-scripts />

</body>

</html>


