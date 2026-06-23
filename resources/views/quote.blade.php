@extends('layouts.app')

@section('title', 'Get a Free Quote')

@section('content')
    @if (session('success'))
        <div class="alert alert-success" style="background: #d4edda; color: #155724; padding: 15px; text-align: center; margin-top: 80px; border-radius: 5px;">
            {{ session('success') }}
        </div>
    @endif

    <section class="page-hero page-hero-quote">
        <div class="hero-overlay"></div>
        <div class="hero-particles"></div>
        <div class="container">
            <div class="hero-content">
                <h1 data-aos="fade-up">Get a Free Quote</h1>
                <p data-aos="fade-up" data-aos-delay="100">Ready to get started? Tell us about your project and we'll provide a detailed estimate at no cost.</p>
                <div class="hero-buttons" data-aos="fade-up" data-aos-delay="200">
                    <a href="#quote-form" class="btn">Start Your Quote</a>
                    <a href="tel:+447359279653" class="btn btn-outline">Call Us</a>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section section-light">
        <div class="container">
            <div class="section-header" style="text-align: center;" data-aos="fade-up">
                <h2>Simple Quote Process</h2>
                <p>Getting your free quote is quick and easy</p>
            </div>
            
            <div class="process-steps">
                <div class="process-step" data-aos="fade-up" data-aos-delay="100">
                    <div class="step-number">1</div>
                    <h3>Tell Us About Your Project</h3>
                    <p>Fill out the form below with details about your plumbing needs</p>
                </div>
                
                <div class="process-step" data-aos="fade-up" data-aos-delay="200">
                    <div class="step-number">2</div>
                    <h3>We Review Your Request</h3>
                    <p>Our team will review your project details and prepare a comprehensive quote</p>
                </div>
                
                <div class="process-step" data-aos="fade-up" data-aos-delay="300">
                    <div class="step-number">3</div>
                    <h3>Receive Your Free Quote</h3>
                    <p>Get your detailed quote via email within 24 hours</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section quote-section" id="quote-form">
        <div class="container">
            <div class="quote-form-container" data-aos="fade-up">
                <div class="form-header">
                    <h2>Request Your Free Quote</h2>
                    <p>Please provide as much detail as possible so we can give you an accurate estimate</p>
                </div>
                
                <form action="{{ route('quote.store') }}" method="POST" id="laravel-quote-form" class="quote-form" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-section">
                        <h3><i class="fas fa-user"></i> Your Information</h3>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="quote-name">Full Name</label>
                                <input type="text" id="quote-name" name="name" value="{{ old('name') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="quote-email">Email Address</label>
                                <input type="email" id="quote-email" name="email" value="{{ old('email') }}" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="quote-phone">Phone Number</label>
                            <input type="tel" id="quote-phone" name="phone" value="{{ old('phone') }}" required>
                        </div>
                    </div>
                    
                    <div class="form-section">
                        <h3><i class="fas fa-wrench"></i> Service Details</h3>
                        
                        <div class="form-group">
                            <label for="quote-service">Service Type</label>
                            <select id="quote-service" name="freight_type" required>
                                <option value="">--Please choose an option--</option>
                                <option value="bathroom-installation" {{ old('freight_type') == 'bathroom-installation' ? 'selected' : '' }}>Bathroom Installation</option>
                                <option value="bathroom-kitchen-wc-plumbing" {{ old('freight_type') == 'bathroom-kitchen-wc-plumbing' ? 'selected' : '' }}>Bathroom, Kitchen and WC Plumbing</option>
                                <option value="electric-showers" {{ old('freight_type') == 'electric-showers' ? 'selected' : '' }}>Electric Showers</option>
                                <option value="gas-boiler" {{ old('freight_type') == 'gas-boiler' ? 'selected' : '' }}>Gas Boiler</option>
                                <option value="other" {{ old('freight_type') == 'other' ? 'selected' : '' }}>Others/specify</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="quote-details">Please describe your needs</label>
                            <textarea id="quote-details" name="message" rows="6" required>{{ old('message') }}</textarea>
                        </div>
                    </div>
                    
                    <div class="form-section">
                        <h3><i class="fas fa-camera"></i> Project Photos/Videos</h3>
                        <div class="file-upload-container">
                            <label class="file-upload-label">Upload a photo or video of your project (optional)</label>
                            <div class="file-upload-wrapper">
                                <label for="project_file" class="file-upload-button">
                                    <i class="fas fa-cloud-upload-alt"></i>
                                    <span>Click to upload or drag and drop</span>
                                </label>
                                <!-- IMPORTANT: Changed name to "project_file" to match Controller -->
                                <input type="file" id="project_file" name="project_file" class="file-upload-input" accept="image/*,video/*">
                                <div class="file-upload-text">Supported formats: JPG, PNG, GIF, MP4, MOV (Max file size: 25MB)</div>
                                
                                <!-- Preview Elements -->
                                <img id="file-preview" class="file-preview" alt="Preview" style="display: none; max-width: 100%; margin-top: 10px; border-radius: 5px;">
                                <video id="video-preview" class="file-preview" controls style="display: none; max-width: 100%; margin-top: 10px; border-radius: 5px;"></video>
                                <div id="file-name" class="file-name" style="margin-top: 5px; font-weight: bold;"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group checkbox-group">
                        <input type="checkbox" id="quote-terms" name="terms" required>
                        <label for="quote-terms">I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></label>
                    </div>
                    
                    <button type="submit" class="btn" style="width: 100%;">
                        <i class="fas fa-paper-plane"></i>
                        Request My Free Quote
                    </button>
                </form>
            </div>
        </div>
    </section>
    
    <section class="section section-light">
        <div class="container">
            <div class="section-header" style="text-align: center;" data-aos="fade-up">
                <h2>Quote FAQs</h2>
                <p>Common questions about our quoting process</p>
            </div>
            
            <div class="faq-container">
                <div class="faq-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="faq-question">
                        <span>How long does it take to receive my quote?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Most quotes are delivered within 24 hours of your request.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // File Upload Preview Logic
        document.getElementById('project_file').addEventListener('change', function(e) {
            const file = e.target.files[0];
            const filePreview = document.getElementById('file-preview');
            const videoPreview = document.getElementById('video-preview');
            const fileNameDisplay = document.getElementById('file-name');

            if (file) {
                // Show file name
                fileNameDisplay.textContent = 'Selected: ' + file.name;

                // Check if it's an image or video
                if (file.type.startsWith('image/')) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        filePreview.src = e.target.result;
                        filePreview.style.display = 'block';
                        videoPreview.style.display = 'none';
                    }
                    reader.readAsDataURL(file);
                } else if (file.type.startsWith('video/')) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        videoPreview.src = e.target.result;
                        videoPreview.style.display = 'block';
                        filePreview.style.display = 'none';
                    }
                    reader.readAsDataURL(file);
                }
            } else {
                // Reset if no file selected
                filePreview.style.display = 'none';
                videoPreview.style.display = 'none';
                fileNameDisplay.textContent = '';
            }
        });
    </script>
@endsection