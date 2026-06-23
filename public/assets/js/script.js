document.addEventListener('DOMContentLoaded', function() {

    // --- Initialize AOS (Animate On Scroll) ---
    AOS.init({
        duration: 1000,
        once: true,
    });

    // --- Page Loader (Works on all pages) ---
    window.addEventListener('load', function() {
        const loader = document.querySelector('.loader');
        const preloader = document.getElementById('preloader');
        
        // Handle the original loader
        if (loader) {
            setTimeout(function() {
                loader.style.opacity = '0';
                loader.style.transition = 'opacity 0.5s ease';
                
                setTimeout(function() {
                    loader.style.display = 'none';
                }, 500);
            }, 500);
        }
        
        // Handle the new preloader (2 seconds duration)
        if (preloader) {
            setTimeout(function() {
                preloader.classList.add('fade-out');
                
                setTimeout(function() {
                    preloader.style.display = 'none';
                }, 500);
            }, 2000); 
        }
    });

    // --- Hero Slider Logic ---
    const slides = document.querySelectorAll('.hero-slide');
    const dots = document.querySelectorAll('.dot');
    let currentSlide = 0;
    let slideInterval;

    if (slides.length > 0 && dots.length > 0) {
        function showSlide(index) {
            if (index >= slides.length) { currentSlide = 0; }
            if (index < 0) { currentSlide = slides.length - 1; }
            
            slides.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));
            
            slides[currentSlide].classList.add('active');
            dots[currentSlide].classList.add('active');
        }

        function nextSlide() {
            currentSlide++;
            showSlide(currentSlide);
        }

        function startSlider() {
            clearInterval(slideInterval);
            slideInterval = setInterval(nextSlide, 5000);
        }

        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                currentSlide = index;
                showSlide(currentSlide);
                startSlider();
            });
        });

        startSlider();
    }

    // --- Hide/Reveal Header on Scroll ---
    const header = document.getElementById('main-header');
    let lastScroll = 0;

    if (header) {
        window.addEventListener('scroll', () => {
            const currentScroll = window.scrollY;

            if (currentScroll <= 0) {
                header.classList.remove('header-hidden');
                return;
            }

            if (currentScroll > lastScroll && !header.classList.contains('header-hidden')) {
                header.classList.add('header-hidden');
            } else if (currentScroll < lastScroll && header.classList.contains('header-hidden')) {
                header.classList.remove('header-hidden');
            }
            lastScroll = currentScroll;
        });
    }

    // --- Mobile Menu Toggle ---
    const navToggle = document.getElementById('nav-toggle');
    const mainNav = document.getElementById('main-nav');
    
    if (navToggle && mainNav) {
        navToggle.addEventListener('click', () => {
            mainNav.classList.toggle('nav-open');
            navToggle.classList.toggle('nav-open');
        });

        const navLinks = mainNav.querySelectorAll('a');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                mainNav.classList.remove('nav-open');
                navToggle.classList.remove('nav-open');
            });
        });
    }

    // --- Contact Form Submission (Laravel Backend) ---
    const contactForm = document.getElementById('contact-form');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent default browser submission

            const submitBtn = this.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn.innerHTML;
            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

            // UI Loading State
            submitBtn.innerHTML = 'Sending...';
            submitBtn.disabled = true;

            // Gather form data
            const formData = new FormData(this);

            // If you are using the separate file upload logic from the previous step,
            // ensure the hidden input 'stored_file_path' exists and append it if needed.
            // FormData automatically grabs inputs by their 'name' attribute, 
            // so ensure your hidden input has name="stored_file_path" inside the form in HTML.

            fetch('/contact-submit', { // Change this to your Laravel route
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'Accept': 'application/json'
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Success Logic
                    alert(data.message || 'Your message has been sent successfully!');
                    contactForm.reset(); // Clear form fields
                    
                    // Reset file preview if it exists
                    const filePreview = document.getElementById('file-preview');
                    const videoPreview = document.getElementById('video-preview');
                    const fileName = document.getElementById('file-name');
                    if (filePreview) { filePreview.style.display = 'none'; filePreview.src = ''; }
                    if (videoPreview) { videoPreview.style.display = 'none'; videoPreview.src = ''; }
                    if (fileName) { fileName.textContent = ''; }
                    
                    // Remove hidden path input if it exists
                    const hiddenPath = document.getElementById('stored_file_path');
                    if (hiddenPath) hiddenPath.remove();

                } else {
                    // Handle Validation Errors or Logic Errors
                    if (data.errors) {
                        let errorMessages = Object.values(data.errors).flat().join('\n');
                        alert('Validation Error:\n' + errorMessages);
                    } else {
                        alert(data.message || 'An error occurred. Please try again.');
                    }
                }
            })
            .catch(error => {
                console.error('Network Error:', error);
                alert('A network error occurred. Please check your connection.');
            })
            .finally(() => {
                // Reset Button State
                submitBtn.innerHTML = originalBtnText;
                submitBtn.disabled = false;
            });
        });
    }

    // --- File Upload Preview Logic (Enhanced with Laravel Upload) ---
    const projectFileInput = document.getElementById('project-file');
    const MAX_FILE_SIZE = 6 * 1024 * 1024; // 6MB in bytes
    
    if (projectFileInput) {
        projectFileInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            const filePreview = document.getElementById('file-preview');
            const videoPreview = document.getElementById('video-preview');
            const fileNameDisplay = document.getElementById('file-name');
            
            // Reset previews
            if (filePreview) {
                filePreview.style.display = 'none';
                filePreview.src = '';
            }
            if (videoPreview) {
                videoPreview.style.display = 'none';
                videoPreview.src = '';
            }
            if (fileNameDisplay) {
                fileNameDisplay.textContent = '';
            }

            if (file) {
                // 1. Check file size client-side
                if (file.size > MAX_FILE_SIZE) {
                    alert('File size exceeds the maximum limit of 6MB.');
                    this.value = ''; 
                    return;
                }
                
                // Display file name
                if (fileNameDisplay) {
                    fileNameDisplay.textContent = `Uploading: ${file.name}...`;
                }

                // 2. Show Preview (Client-side)
                if (file.type.match('image.*')) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        if (filePreview) {
                            filePreview.src = e.target.result;
                            filePreview.style.display = 'block';
                        }
                    };
                    reader.readAsDataURL(file);
                } else if (file.type.match('video.*')) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        if (videoPreview) {
                            videoPreview.src = e.target.result;
                            videoPreview.style.display = 'block';
                        }
                    };
                    reader.readAsDataURL(file);
                }

                // 3. Upload to Laravel Backend
                const formData = new FormData();
                formData.append('file', file); // 'file' should match the name expected in your Controller

                // Get CSRF token from meta tag
                const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

                if (!csrfToken) {
                    console.error('CSRF token not found. Ensure you have <meta name="csrf-token" content="..."> in your head.');
                    return;
                }

                fetch('/upload-project-file', { // Change this URL to your Laravel route
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken,
                        'Accept': 'application/json'
                    },
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success && data.path) {
                        console.log('File stored successfully:', data.path);
                        
                        // Update UI to show success
                        if (fileNameDisplay) {
                            fileNameDisplay.textContent = `Selected: ${file.name} (Uploaded)`;
                        }

                        // Create/Update hidden input to store the path for final form submission
                        let hiddenInput = document.getElementById('stored_file_path');
                        if (!hiddenInput) {
                            hiddenInput = document.createElement('input');
                            hiddenInput.type = 'hidden';
                            hiddenInput.name = 'stored_file_path'; // Name your backend will read
                            hiddenInput.id = 'stored_file_path';
                            // Append to the form or input parent
                            projectFileInput.parentNode.appendChild(hiddenInput);
                        }
                        hiddenInput.value = data.path;

                    } else {
                        console.error('Upload failed:', data);
                        alert(data.message || 'File upload failed. Please check server logs.');
                        if (fileNameDisplay) fileNameDisplay.textContent = 'Upload failed.';
                    }
                })
                .catch(error => {
                    console.error('Network Error:', error);
                    alert('An error occurred during the upload.');
                    if (fileNameDisplay) fileNameDisplay.textContent = 'Upload error.';
                });
            }
        });
    }

    // --- Smooth Scroll for Anchor Links ---
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                window.scrollTo({
                    top: target.offsetTop - 80, 
                    behavior: 'smooth'
                });
            }
        });
    });

    // --- Change Header Background on Scroll ---
    window.addEventListener('scroll', function() {
        const header = document.getElementById('main-header');
        if (header) {
            if (window.scrollY > 50) {
                header.style.backgroundColor = 'rgba(255, 255, 255, 0.95)';
                header.style.backdropFilter = 'blur(10px)';
            } else {
                header.style.backgroundColor = 'rgba(255, 255, 255, 0.95)';
                header.style.backdropFilter = 'blur(10px)';
            }
        }
    });

    // --- Active Navigation Link Highlighting ---
    function updateActiveNav() {
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.main-nav ul li a[href^="#"]');
        
        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (window.scrollY >= (sectionTop - 100)) {
                current = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === `#${current}`) {
                link.classList.add('active');
            }
        });
    }

    window.addEventListener('scroll', updateActiveNav);
    updateActiveNav(); 

    // --- FAQ Accordion ---
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        
        if (question) {
            question.addEventListener('click', () => {
                faqItems.forEach(otherItem => {
                    if (otherItem !== item && otherItem.classList.contains('active')) {
                        otherItem.classList.remove('active');
                    }
                });
                
                item.classList.toggle('active');
            });
        }
    });
});

 document.addEventListener('DOMContentLoaded', function() {
            const faqItems = document.querySelectorAll('.faq-item');
            
            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question');
                
                question.addEventListener('click', () => {
                    // Close all other FAQ items
                    faqItems.forEach(otherItem => {
                        if (otherItem !== item && otherItem.classList.contains('active')) {
                            otherItem.classList.remove('active');
                        }
                    });
                    
                    // Toggle current FAQ item
                    item.classList.toggle('active');
                });
            });
        });