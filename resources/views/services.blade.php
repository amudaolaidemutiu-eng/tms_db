@extends('layouts.app')

@section('title', 'Services')

@section('content')
    <!-- === PAGE HERO === -->
    <section class="page-hero page-hero-services">
        <div class="container">
            <h1 data-aos="fade-up">Our Professional Plumbing Services</h1>
            <p data-aos="fade-up" data-aos-delay="100">Comprehensive solutions for a better-functioning space.</p>
            <div data-aos="fade-up" data-aos-delay="200">
                <a href="#services" class="btn">Explore Our Services</a>
            </div>
        </div>
    </section>
    
    <!-- === SERVICES SECTION === -->
    <section class="services-section" id="services">
        <!-- ... Your services grid HTML goes here ... -->
        <div class="container">
             <!-- ... -->
        </div>
    </section>

    <!-- === CTA SECTION === -->
    <section class="cta-section" data-aos="fade-up">
        <div class="container">
            <h2>Ready to Get Started?</h2>
            <p>Contact us today for a free quote.</p>
            <a href="{{ route('quote') }}" class="btn">Get Your Free Quote</a>
        </div>
    </section>
@endsection