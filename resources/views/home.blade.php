@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- === HOME PAGE HERO WITH SLIDER === -->
    <section class="hero" id="hero">
        <!-- External URL -->
        <div class="hero-slide active" style="background-image: url('https://images.unsplash.com/photo-1584622650111-993a426fbf0a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');"></div>
        
        <!-- Local images -->
        <div class="hero-slide" style="background-image: url('{{ asset('assets/img/hero_1.png') }}');"></div>
        <div class="hero-slide" style="background-image: url('{{ asset('assets/img/hero_2.png') }}');"></div>
        <div class="hero-slide" style="background-image: url('{{ asset('assets/img/hero_3.png') }}');"></div>
        <div class="hero-slide" style="background-image: url('{{ asset('assets/img/hero_4.png') }}');"></div>
        
        <div class="hero-overlay"></div>
        <div class="hero-content" data-aos="fade-up">
            <h1>Professional plumbing services you can rely on.</h1>
            <p>Quality work, transparent pricing, and a commitment to your satisfaction. <br>Your Trusted Partner for a Better-Functioning Space</p>
            <div class="hero-buttons">
                <a href="{{ route('quote') }}" class="btn">Get a Free Quote</a>
                <a href="tel:+447359279653" class="btn btn-outline">Call Us Now</a>
            </div>
        </div>
        <!-- Slider Dots -->
        <div class="hero-slider-dots">
            <span class="dot active" data-slide="0"></span>
            <span class="dot" data-slide="1"></span>
            <span class="dot" data-slide="2"></span>
            <span class="dot" data-slide="3"></span>
            <span class="dot" data-slide="4"></span>
        </div>
    </section>

    <!-- === HOME PAGE SERVICES (EXPANDED) === -->
    <section class="section section-light">
        <div class="container">
            <div class="section-header" style="text-align: center; max-width: 700px; margin: 0 auto;" data-aos="fade-up" data-aos-delay="100">
                <h2>Our Services</h2>
                <p>We specialize in making your home or business operate smoothly with expert plumbing solutions.</p>
            </div>
            
            <!-- Added all 6 services -->
            <div class="services-grid">
                <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon">🔧</div>
                    <h3>General Plumbing</h3>
                    <p>From leaky faucets to full pipe installations, our expert plumbers are here to solve any issue.</p>
                    <a href="{{ route('quote') }}" class="btn">Get a Quote</a>
                </div>

                <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon">🚿</div>
                    <h3>Bathroom Plumbing</h3>
                    <p>Complete bathroom plumbing services including installations, repairs, and upgrades.</p>
                    <a href="{{ route('quote') }}" class="btn">Get a Quote</a>
                </div>

                <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon">🔥</div>
                    <h3>Water Heating</h3>
                    <p>Professional water heater installation, repair, and maintenance services.</p>
                    <a href="{{ route('quote') }}" class="btn">Get a Quote</a>
                </div>

                <div class="service-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon">🚰</div>
                    <h3>Pipe Services</h3>
                    <p>Pipe installation, repair, and replacement using high-quality materials.</p>
                    <a href="{{ route('quote') }}" class="btn">Get a Quote</a>
                </div>

                <div class="service-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="icon">🔍</div>
                    <h3>Leak Detection</h3>
                    <p>Advanced leak detection services to find and fix hidden leaks quickly.</p>
                    <a href="{{ route('quote') }}" class="btn">Get a Quote</a>
                </div>

                <div class="service-card" data-aos="fade-up" data-aos-delay="600">
                    <div class="icon">🏠</div>
                    <h3>Emergency Services</h3>
                    <p>24/7 emergency plumbing services for those unexpected urgent issues.</p>
                    <a href="{{ route('quote') }}" class="btn">Get a Quote</a>
                </div>
            </div>
        </div>
    </section>
@endsection