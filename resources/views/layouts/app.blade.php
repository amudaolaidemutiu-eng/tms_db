<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TMS Integrated Service | @yield('title')</title>
    <meta name="description" content="TMS Integrated Service offers professional plumbing services.">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Assets -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
</head>
<body>
    <!-- Preloader -->
    <div class="preloader" id="preloader">
        <div class="preloader-content">
            <div class="preloader-spinner"></div>
            <div class="preloader-text">Loading...</div>
        </div>
    </div>

    <!-- Header -->
    <header class="main-header" id="main-header">
        <div class="container">
            <a href="{{ route('home') }}" class="logo">
                <img src="{{ asset('assets/img/TMS_INTERGRATED_SERVICES.png') }}" alt="TMS Integrated Service Logo">
            </a>
            <nav class="main-nav" id="main-nav">
                <ul>
                    <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                    <li><a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">Services</a></li>
                    <li><a href="{{ route('why-tms') }}" class="{{ request()->routeIs('why-tms') ? 'active' : '' }}">Why TMS?</a></li>
                    <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
                    <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
                    
                    <!-- Authentication Links (Hidden Login/Register) -->
                    @auth
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                        </li>
                    @endauth
                    
                    <li><a href="{{ route('quote') }}" class="btn">Free Quote</a></li>
                </ul>
            </nav>
            <button class="nav-toggle" id="nav-toggle">
                <span></span><span></span><span></span>
            </button>
        </div>
    </header>

    <main>
        <!-- Page Content Loads Here -->
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="main-footer">
        <div class="container">
            <div>
                <h3>TMS Integrated Service Limited</h3>
                <p>Your Trusted Partner for a Better-Functioning Space. We provide top-tier plumbing solutions to keep your property in perfect condition.</p>
            </div>
            <div>
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('services') }}">Services</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
            <div>
                <h3>Contact Info</h3>
                <p><strong>Phone:</strong> <a href="tel:+447359279653">+44 735 927 9653</a></p>
                <p><strong>Email:</strong> <a href="mailto:info@tmsintegrated.com">info@tmsintegrated.com</a></p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} TMS Integrated Service Limited. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('assets/js/script.js') }}" defer></script>
</body>
</html>