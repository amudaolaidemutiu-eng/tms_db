

<?php $__env->startSection('title', 'Services'); ?>

<?php $__env->startSection('content'); ?>
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
            <a href="<?php echo e(route('quote')); ?>" class="btn">Get Your Free Quote</a>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\dashboard\tms_db\tms_db\resources\views/services.blade.php ENDPATH**/ ?>