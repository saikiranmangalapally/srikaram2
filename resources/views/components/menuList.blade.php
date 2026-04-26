<ul class="main-menu__list">
    <li @if (request()->routeIs('index')) class="current" @endif>
        <a href="{{ route('index') }}">Home</a>
    </li>
    <li class="dropdown @if (request()->routeIs('services') || request()->routeIs('construction') || request()->routeIs('interior-design') || request()->routeIs('land-surveying')) current @endif">
        <a href="{{ route('services') }}">Services</a>
        <ul>
            <li><a href="{{ route('construction') }}">House Construction</a></li>
            <li><a href="{{ route('interior-design') }}">Interior Design</a></li>
            <li><a href="{{ route('land-surveying') }}">Land Surveying</a></li>
        </ul>
    </li>
    <li @if (request()->routeIs('about')) class="current" @endif>
        <a href="{{ route('about') }}">About</a>
    </li>
    <li @if (request()->routeIs('portfolio') || request()->routeIs('portfolio-details')) class="current" @endif>
        <a href="{{ route('portfolio') }}">Portfolio</a>
    </li>
    <li @if (request()->routeIs('team')) class="current" @endif>
        <a href="{{ route('team') }}">Team</a>
    </li>
    <li @if (request()->routeIs('faq')) class="current" @endif>
        <a href="{{ route('faq') }}">FAQ</a>
    </li>
    <li @if (request()->routeIs('contact')) class="current" @endif>
        <a href="{{ route('contact') }}">Contact</a>
    </li>
</ul>



