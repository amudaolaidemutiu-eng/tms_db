@extends('layouts.app')

@section('title', 'Why TMS?')

@section('content')
    <!-- === PAGE HERO === -->
    <section class="page-hero page-hero-why-tms">
        <div class="container">
            <h1 data-aos="fade-up">Why Choose TMS?</h1>
            <p data-aos="fade-up" data-aos-delay="100">We're more than a service company; we're your partners in creating a better-functioning space.</p>
            <div data-aos="fade-up" data-aos-delay="200">
                <a href="#features" class="btn">Discover Our Advantages</a>
            </div>
        </div>
    </section>
    
    <!-- === FEATURES SECTION === -->
    <section class="section section-light" id="features">
        <div class="container">
            <div class="section-header" style="text-align: center;" data-aos="fade-up">
                <h2>The TMS Difference</h2>
                <p>Discover what sets us apart from the competition and why our customers trust us with their plumbing needs.</p>
            </div>
            
            <div class="features-grid">
                <div class="feature" data-aos="fade-up">
                    <div class="icon">👍</div>
                    <h3>Satisfaction Guaranteed</h3>
                    <p>We stand behind our work with a 100% satisfaction guarantee. If you're not happy, we'll make it right.</p>
                </div>
                
                <div class="feature" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon">⏱️</div>
                    <h3>Fast & Reliable</h3>
                    <p>We respect your time. Our team arrives on schedule and works efficiently to get the job done.</p>
                </div>
                
                <div class="feature" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon">💰</div>
                    <h3>Transparent Pricing</h3>
                    <p>No hidden fees or surprises. We provide clear, upfront quotes before any work begins.</p>
                </div>
                
                <div class="feature" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon">🛡️</div>
                    <h3>Fully Licensed & Insured</h3>
                    <p>Your peace of mind is our priority. We are fully licensed, bonded, and insured for your protection.</p>
                </div>
                
                <div class="feature" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon">👨‍🔧</div>
                    <h3>Expert Technicians</h3>
                    <p>Our team consists of highly trained professionals with years of experience in the plumbing industry.</p>
                </div>
                
                <div class="feature" data-aos="fade-up" data-aos-delay="500">
                    <div class="icon">🔧</div>
                    <h3>Quality Materials</h3>
                    <p>We use only the highest quality materials and equipment to ensure long-lasting results.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- === TESTIMONIALS SECTION === -->
    <section class="section">
        <div class="container">
            <div class="section-header" style="text-align: center;" data-aos="fade-up">
                <h2>What Our Customers Say</h2>
                <p>Don't just take our word for it - hear from our satisfied customers.</p>
            </div>
            
            <div class="testimonials-grid">
                <div class="testimonial-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="stars">★★★★★</div>
                    <p>"TMS Integrated Service transformed our bathroom. The team was professional, efficient, and the quality of work exceeded our expectations. Highly recommend!"</p>
                    <div class="customer-info">
                        <div class="customer-name">Sarah Johnson</div>
                        <div class="customer-location">London, UK</div>
                    </div>
                </div>
                
                <div class="testimonial-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="stars">★★★★★</div>
                    <p>"We had an emergency plumbing issue on a weekend, and TMS came to the rescue. Fast response time and fair pricing. Will definitely use them again."</p>
                    <div class="customer-info">
                        <div class="customer-name">Michael Brown</div>
                        <div class="customer-location">Manchester, UK</div>
                    </div>
                </div>
                
                <div class="testimonial-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="stars">★★★★★</div>
                    <p>"The team at TMS is knowledgeable and trustworthy. They explained everything clearly and provided options that fit our budget. Excellent service!"</p>
                    <div class="customer-info">
                        <div class="customer-name">Emily Davis</div>
                        <div class="customer-location">Birmingham, UK</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- === CTA SECTION === -->
    <section class="cta-section" data-aos="fade-up">
        <div class="container">
            <h2>Ready to Experience the TMS Difference?</h2>
            <p>Contact us today for a free quote and discover why we're the trusted choice for plumbing services.</p>
            <a href="{{ route('quote') }}" class="btn">Get Your Free Quote</a>
        </div>
    </section>
@endsection