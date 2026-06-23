@extends('layouts.app')

@section('title', 'About')

@section('content')
    <!-- === PAGE HERO === -->
    <section class="page-hero page-hero-about">
        <div class="container">
            <h1 data-aos="fade-up">About TMS Integrated Service</h1>
            <p data-aos="fade-up" data-aos-delay="100">Our story, our mission, our team.</p>
            <div data-aos="fade-up" data-aos-delay="200">
                <a href="#story" class="btn">Discover Our Story</a>
            </div>
        </div>
    </section>
    
    <!-- === OUR STORY SECTION === -->
    <section class="section section-light" id="story">
        <div class="container">
            <div class="page-content">
                <h2 data-aos="fade-up">Our Story</h2>
                <p data-aos="fade-up" data-aos-delay="100">Founded on the principles of integrity, quality, and customer care, TMS Integrated Service has been serving the community with pride since 2015. We started with a simple mission: to provide homeowners and businesses with a single, trustworthy source for essential property maintenance services.</p>
                
                <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80" alt="Our team" data-aos="fade-up" data-aos-delay="200">
                
                <p data-aos="fade-up" data-aos-delay="300">What began as a small plumbing operation has grown into a comprehensive service company, but our core values remain unchanged. We believe in doing the job right the first time, treating every property with respect, and building lasting relationships with our clients.</p>
            </div>
        </div>
    </section>
    
    <!-- === MISSION & VALUES SECTION === -->
    <section class="section">
        <div class="container">
            <div class="section-header" style="text-align: center;" data-aos="fade-up">
                <h2>Our Mission & Values</h2>
                <p>The principles that guide everything we do</p>
            </div>
            
            <div class="features-grid">
                <div class="feature" data-aos="fade-up">
                    <div class="icon">🎯</div>
                    <h3>Our Mission</h3>
                    <p>To provide exceptional plumbing services that enhance the comfort, safety, and functionality of our clients' properties while maintaining the highest standards of integrity and professionalism.</p>
                </div>
                
                <div class="feature" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon">🤝</div>
                    <h3>Integrity</h3>
                    <p>We operate with honesty and transparency in all our dealings. No hidden fees, no unnecessary services—just honest work at fair prices.</p>
                </div>
                
                <div class="feature" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon">⭐</div>
                    <h3>Quality</h3>
                    <p>We never compromise on quality. From the materials we use to the techniques we employ, excellence is our standard.</p>
                </div>
                
                <div class="feature" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon">👥</div>
                    <h3>Customer Care</h3>
                    <p>We treat every client like family. Your satisfaction is our top priority, and we go above and beyond to exceed your expectations.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- === TEAM SECTION === -->
    <section class="section section-light" id="team">
        <div class="container">
            <div class="section-header" style="text-align: center;" data-aos="fade-up">
                <h2>Meet Our Team</h2>
                <p>Our team is our greatest asset. Each member is a skilled professional dedicated to delivering outstanding service.</p>
            </div>
            
            <div class="team-grid">
                <!-- Founder -->
                <div class="team-member" data-aos="fade-up" data-aos-delay="100">
                    <img src="https://i.pravatar.cc/150?img=68" alt="Toheeb Olawale">
                    <h4>Toheeb Olawale</h4>
                    <p>Founder & Master Plumber</p>
                    <p>With over 10 years of experience, Toheeb founded TMS with a vision to create a plumbing service that puts customers first.</p>
                </div>
                
                <!-- Team Member 2 -->
                <div class="team-member" data-aos="fade-up" data-aos-delay="200">
                    <img src="https://i.pravatar.cc/150?img=53" alt="Abdullahi Musa">
                    <h4>Abdullahi Musa</h4>
                    <p>Head of Operations</p>
                    <p>Abdullahi ensures that every aspect of our service runs smoothly, from scheduling to quality control.</p>
                </div>
                
                <!-- Team Member 3 -->
                <div class="team-member" data-aos="fade-up" data-aos-delay="300">
                    <img src="https://i.pravatar.cc/150?img=14" alt="Ibrahim Suleiman">
                    <h4>Ibrahim Suleiman</h4>
                    <p>Lead Technician</p>
                    <p>Ibrahim brings technical expertise and problem-solving skills to every job, ensuring exceptional results.</p>
                </div>
                
                <!-- Team Member 4 -->
                <div class="team-member" data-aos="fade-up" data-aos-delay="400">
                    <img src="https://i.pravatar.cc/150?img=52" alt="Yusuf Adebayo">
                    <h4>Yusuf Adebayo</h4>
                    <p>Customer Relations Manager</p>
                    <p>Yusuf is dedicated to ensuring every client has a positive experience from first contact to job completion.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- === STATS SECTION === -->
    <section class="section section-dark">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item" data-aos="fade-up">
                    <div class="stat-number">8+</div>
                    <div class="stat-label">Years in Business</div>
                </div>
                
                <div class="stat-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="stat-number">500+</div>
                    <div class="stat-label">Satisfied Customers</div>
                </div>
                
                <div class="stat-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="stat-number">100%</div>
                    <div class="stat-label">Satisfaction Rate</div>
                </div>
                
                <div class="stat-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-number">24/7</div>
                    <div class="stat-label">Emergency Service</div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- === CTA SECTION === -->
    <section class="cta-section" data-aos="fade-up">
        <div class="container">
            <h2>Ready to Experience the TMS Difference?</h2>
            <p>Join our family of satisfied customers and discover why we're the trusted choice for plumbing services.</p>
            <a href="{{ route('quote') }}" class="btn">Get Your Free Quote</a>
        </div>
    </section>
@endsection