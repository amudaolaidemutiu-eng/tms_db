@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <!-- === PAGE HERO === -->
    <section class="page-hero page-hero-contact">
        <div class="hero-overlay"></div>
        <div class="hero-particles"></div>
        <div class="container">
            <div class="hero-content">
                <h1 data-aos="fade-up">Get in Touch</h1>
                <p data-aos="fade-up" data-aos-delay="100">Ready to fix your plumbing issues? Our expert team is standing by to help you create a better-functioning space.</p>
                <div class="hero-buttons" data-aos="fade-up" data-aos-delay="200">
                    <a href="#contact-form" class="btn">Send Message</a>
                    <a href="tel:+447359279653" class="btn btn-outline">Call Now</a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- === QUICK CONTACT === -->
    <section class="quick-contact">
        <div class="container">
            <div class="quick-contact-grid">
                <a href="tel:+447359279653" class="quick-contact-item" data-aos="zoom-in" data-aos-delay="100">
                    <div class="quick-contact-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="quick-contact-info">
                        <h3>Call Us</h3>
                        <p>+44 735 927 9653</p>
                    </div>
                </a>
                
                <a href="mailto:info@tmsintegrated.com" class="quick-contact-item" data-aos="zoom-in" data-aos-delay="200">
                    <div class="quick-contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="quick-contact-info">
                        <h3>Email Us</h3>
                        <p>info@tmsintegrated.com</p>
                    </div>
                </a>
                
                <a href="#" class="quick-contact-item" data-aos="zoom-in" data-aos-delay="300">
                    <div class="quick-contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="quick-contact-info">
                        <h3>Visit Us</h3>
                        <p>London, UK</p>
                    </div>
                </a>
            </div>
        </div>
    </section>
    
    <!-- === CONTACT FORM & MAP SECTION === -->
    <section class="section contact-section" id="contact-form">
        <div class="container">
            <div class="contact-form-wrapper">
                <div class="contact-form-container" data-aos="fade-right">
                    <div class="form-header">
                        <h2>Send Us a Message</h2>
                        <p>We'll respond as soon as possible</p>
                    </div>
                    
                    <!-- Form points to quote.store to reuse logic -->
                    <form id="contact-form" class="contact-form" action="{{ route('quote.store') }}" method="POST">
                        @csrf
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="contact-name">Your Name</label>
                                <input type="text" id="contact-name" name="name" required value="{{ old('name') }}">
                            </div>
                            <div class="form-group">
                                <label for="contact-email">Your Email</label>
                                <input type="email" id="contact-email" name="email" required value="{{ old('email') }}">
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="contact-phone">Phone Number</label>
                                <input type="tel" id="contact-phone" name="phone" required value="{{ old('phone') }}">
                            </div>
                            <div class="form-group">
                                <label for="contact-service">Service Needed</label>
                                <!-- Name changed to 'freight_type' to match DB -->
                                <select id="contact-service" name="freight_type">
                                    <option value="">Select a service</option>
                                    <option value="general-plumbing" {{ old('freight_type') == 'general-plumbing' ? 'selected' : '' }}>General Plumbing</option>
                                    <option value="emergency" {{ old('freight_type') == 'emergency' ? 'selected' : '' }}>Emergency Service</option>
                                    <option value="bathroom" {{ old('freight_type') == 'bathroom' ? 'selected' : '' }}>Bathroom Plumbing</option>
                                    <option value="water-heating" {{ old('freight_type') == 'water-heating' ? 'selected' : '' }}>Water Heating</option>
                                    <option value="pipe-services" {{ old('freight_type') == 'pipe-services' ? 'selected' : '' }}>Pipe Services</option>
                                    <option value="leak-detection" {{ old('freight_type') == 'leak-detection' ? 'selected' : '' }}>Leak Detection</option>
                                    <option value="other" {{ old('freight_type') == 'other' ? 'selected' : '' }}>Other</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="contact-message">Tell us about your project</label>
                            <textarea id="contact-message" name="message" required>{{ old('message') }}</textarea>
                        </div>
                        
                        <button type="submit" class="btn">
                            <span>Send Message</span>
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
                
                <div class="map-container" data-aos="fade-left">
                    <div class="map-header">
                        <h2>Find Us</h2>
                        <p>Visit our office in London</p>
                    </div>
                    
                    <div class="map-wrapper">
                        <div class="map-placeholder">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2478.942743521712!2d-0.1254086842248467!3d51.50732197963648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604b900d26973%3A0x429ab7e886fb5f89!2sLondon%2C%20UK!5e0!3m2!1sen!2sus!4v1629794749283!5m2!1sen!2sus" 
                                width="100%" 
                                height="450" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy">
                            </iframe>
                        </div>
                    </div>
                    
                    <div class="map-info">
                        <div class="info-item">
                            <i class="fas fa-clock"></i>
                            <div>
                                <h4>Business Hours</h4>
                                <p>Mon-Fri: 8AM-6PM<br>Sat: 9AM-4PM</p>
                            </div>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-exclamation-triangle"></i>
                            <div>
                                <h4>Emergency Service</h4>
                                <p>Available 24/7</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- === FAQ SECTION === -->
    <section class="section faq-section">
        <div class="container">
            <div class="section-header" style="text-align: center;" data-aos="fade-up">
                <h2>Frequently Asked Questions</h2>
                <p>Everything you need to know about our services</p>
            </div>
            
            <div class="faq-container">
                <div class="faq-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="faq-question">
                        <span>Do you offer emergency plumbing services?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we offer 24/7 emergency plumbing services for urgent issues. Our emergency team is always ready to respond to critical situations like burst pipes, major leaks, or blocked drains that require immediate attention.</p>
                    </div>
                </div>
                
                <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="faq-question">
                        <span>How quickly can you respond to a service request?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We typically respond to non-emergency service requests within 24 hours. For emergency situations, we aim to be on-site within 2 hours of your call. Our dispatch team works efficiently to ensure prompt service.</p>
                    </div>
                </div>
                
                <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="faq-question">
                        <span>Do you provide free estimates?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Absolutely! We provide free, no-obligation estimates for all our plumbing services. Our technicians will assess your needs and provide a detailed quote before any work begins. No hidden fees or surprises.</p>
                    </div>
                </div>
                
                <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="faq-question">
                        <span>Are your plumbers licensed and insured?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, all our plumbers are fully licensed, insured, and certified. They undergo regular training to stay updated with the latest techniques and safety regulations. Your peace of mind is our priority.</p>
                    </div>
                </div>
                
                <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                    <div class="faq-question">
                        <span>What areas do you service?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We provide plumbing services throughout London and surrounding areas. If you're unsure whether we cover your location, please give us a call. We're always expanding our service area to better serve our customers.</p>
                    </div>
                </div>
                
                <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
                    <div class="faq-question">
                        <span>Do you offer warranties on your work?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we stand behind our work with comprehensive warranties. All our services come with a workmanship guarantee, and parts are covered by manufacturer warranties. We believe in quality that lasts.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- === CTA SECTION === -->
    <section class="cta-section" data-aos="fade-up">
        <div class="container">
            <div class="cta-content">
                <h2>Need Immediate Assistance?</h2>
                <p>For emergency plumbing services, don't hesitate to call us right away. We're here when you need us most.</p>
                <div class="cta-buttons">
                    <a href="tel:+447359279653" class="btn">
                        <i class="fas fa-phone-alt"></i>
                        Call Emergency Line
                    </a>
                    <a href="{{ route('quote') }}" class="btn btn-outline">
                        <i class="fas fa-file-alt"></i>
                        Get Free Quote
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection