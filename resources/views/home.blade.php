@extends('layouts.main')

@section('title', 'Visa Processing Experts | Nathapam Global UK International Ltd – US, Canada & Schengen')
@section('description', 'Apply for your US, Canada, or Schengen visa with confidence. Nathapam Global UK International Ltd offers professional visa processing, document support, and expert guidance for students and tourists.')
@section('keywords', 'visa processing UK, US visa help, Canada visa consultants, Schengen visa services, study abroad visa, tourist visa UK, visa assistance London')

@push('styles')
<style>
    .hero-bg {
        background: linear-gradient(135deg, rgba(0, 74, 173, 0.95) 0%, rgba(77, 183, 254, 0.95) 100%), 
                    url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><defs><pattern id="grid" width="50" height="50" patternUnits="userSpaceOnUse"><path d="M 50 0 L 0 0 0 50" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="1"/></pattern></defs><rect width="100%" height="100%" fill="url(%23grid)"/></svg>');
        background-size: cover, 50px 50px;
        background-position: center, center;
    }
    
    .floating-animation {
        animation: float 6s ease-in-out infinite;
    }
    
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }
    
    .typing-animation {
        overflow: hidden;
        border-right: 3px solid #4DB7FE;
        white-space: nowrap;
        animation: typing 3.5s steps(40, end), blink-caret 0.75s step-end infinite;
    }
    
    @keyframes typing {
        from { width: 0; }
        to { width: 100%; }
    }
    
    @keyframes blink-caret {
        from, to { border-color: transparent; }
        50% { border-color: #4DB7FE; }
    }
</style>
@endpush

@section('content')
<!-- Hero Section -->
<section class="hero-bg min-h-screen flex items-center relative overflow-hidden">
    <!-- Floating Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-20 left-10 w-20 h-20 bg-white/10 rounded-full floating-animation" style="animation-delay: 0s;"></div>
        <div class="absolute top-40 right-20 w-16 h-16 bg-white/10 rounded-full floating-animation" style="animation-delay: 2s;"></div>
        <div class="absolute bottom-40 left-20 w-12 h-12 bg-white/10 rounded-full floating-animation" style="animation-delay: 4s;"></div>
        <div class="absolute bottom-20 right-40 w-24 h-24 bg-white/10 rounded-full floating-animation" style="animation-delay: 1s;"></div>
    </div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Hero Content -->
            <div class="text-white" data-aos="fade-right">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-montserrat font-bold mb-6 leading-tight">
                    Your Trusted Partner for 
                    <span class="text-accent typing-animation inline-block">Smooth Visa Processing</span>
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-blue-100 leading-relaxed">
                    We specialize in fast, transparent visa processing for the United States, Canada, and Schengen countries — helping students, families, and tourists achieve their travel goals with ease.
                </p>
                
                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 mb-8">
                    <a href="{{ route('apply-now') }}" class="btn-secondary text-center">
                        <i class="fas fa-paper-plane mr-2"></i>
                        Apply Now
                    </a>
                    <a href="{{ route('contact') }}" class="btn-outline border-white text-white hover:bg-white hover:text-primary">
                        <i class="fas fa-calendar-alt mr-2"></i>
                        Book Consultation
                    </a>
                </div>

                <!-- Trust Indicators -->
                <div class="flex flex-wrap items-center gap-6 text-blue-100">
                    <div class="flex items-center">
                        <i class="fas fa-shield-alt text-accent mr-2"></i>
                        <span>Trusted & Secure</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-clock text-accent mr-2"></i>
                        <span>24/7 Support</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-award text-accent mr-2"></i>
                        <span>90% Success Rate</span>
                    </div>
                </div>
            </div>

            <!-- Hero Image/Illustration -->
            <div class="relative" data-aos="fade-left">
                <div class="relative z-10">
                    <!-- SVG Illustration -->
                    <svg viewBox="0 0 500 400" class="w-full h-auto max-w-lg mx-auto">
                        <!-- Globe -->
                        <circle cx="250" cy="200" r="120" fill="rgba(255,255,255,0.1)" stroke="rgba(255,255,255,0.3)" stroke-width="2"/>
                        <path d="M130 200 Q250 120 370 200 Q250 280 130 200" fill="none" stroke="rgba(255,255,255,0.3)" stroke-width="2"/>
                        <path d="M250 80 Q330 200 250 320 Q170 200 250 80" fill="none" stroke="rgba(255,255,255,0.3)" stroke-width="2"/>
                        
                        <!-- Airplane -->
                        <g transform="translate(300,150) rotate(45)">
                            <path d="M0 0 L20 0 L25 -5 L30 0 L25 5 L20 0 L15 8 L10 8 L5 3 L0 3 Z" fill="#4DB7FE"/>
                            <circle cx="15" cy="0" r="2" fill="white"/>
                        </g>
                        
                        <!-- Passport -->
                        <g transform="translate(180,120)">
                            <rect x="0" y="0" width="40" height="60" rx="4" fill="#D4AF37"/>
                            <rect x="5" y="5" width="30" height="20" rx="2" fill="white"/>
                            <line x1="8" y1="35" x2="32" y2="35" stroke="white" stroke-width="2"/>
                            <line x1="8" y1="42" x2="25" y2="42" stroke="white" stroke-width="1"/>
                            <line x1="8" y1="48" x2="28" y2="48" stroke="white" stroke-width="1"/>
                        </g>
                        
                        <!-- Visa Stamps -->
                        <circle cx="320" cy="250" r="15" fill="rgba(212,175,55,0.8)"/>
                        <circle cx="180" cy="280" r="12" fill="rgba(77,183,254,0.8)"/>
                        <circle cx="350" cy="180" r="10" fill="rgba(255,255,255,0.8)"/>
                    </svg>
                </div>
                
                <!-- Background Decoration -->
                <div class="absolute inset-0 bg-gradient-to-br from-white/5 to-transparent rounded-3xl transform rotate-6"></div>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white animate-bounce">
        <i class="fas fa-chevron-down text-2xl"></i>
    </div>
</section>

<!-- Stats Section -->
<section class="hero-gradient py-16">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="stats-card" data-aos="fade-up" data-aos-delay="100">
                <div class="stats-number" data-counter="5000">0</div>
                <div class="stats-label">Visas Processed</div>
            </div>
            <div class="stats-card" data-aos="fade-up" data-aos-delay="200">
                <div class="stats-number" data-counter="90">0</div>
                <div class="stats-label">Success Rate %</div>
            </div>
            <div class="stats-card" data-aos="fade-up" data-aos-delay="300">
                <div class="stats-number" data-counter="15">0</div>
                <div class="stats-label">Countries Served</div>
            </div>
            <div class="stats-card" data-aos="fade-up" data-aos-delay="400">
                <div class="stats-number" data-counter="24">0</div>
                <div class="stats-label">Hours Support</div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="section-padding bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-montserrat font-bold text-navy mb-4">
                Why Choose Nathapam Global?
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                We combine expertise, transparency, and personalized service to make your visa journey smooth and successful.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Feature 1 -->
            <div class="card card-hover text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="service-icon">
                    <i class="fas fa-eye"></i>
                </div>
                <h3 class="text-xl font-montserrat font-semibold text-navy mb-3">Transparent Process</h3>
                <p class="text-gray-600">
                    Complete visibility into your application status with regular updates and clear communication.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="card card-hover text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="service-icon">
                    <i class="fas fa-rocket"></i>
                </div>
                <h3 class="text-xl font-montserrat font-semibold text-navy mb-3">Fast Turnaround</h3>
                <p class="text-gray-600">
                    Quick processing times with efficient document handling and expedited services available.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="card card-hover text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="service-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3 class="text-xl font-montserrat font-semibold text-navy mb-3">90% Success Rate</h3>
                <p class="text-gray-600">
                    Proven track record with thousands of successful visa applications across multiple countries.
                </p>
            </div>

            <!-- Feature 4 -->
            <div class="card card-hover text-center" data-aos="fade-up" data-aos-delay="400">
                <div class="service-icon">
                    <i class="fas fa-headset"></i>
                </div>
                <h3 class="text-xl font-montserrat font-semibold text-navy mb-3">Personalized Support</h3>
                <p class="text-gray-600">
                    Dedicated visa consultants providing one-on-one guidance throughout your application journey.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Services Overview Section -->
<section class="section-padding bg-light-gray">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-montserrat font-bold text-navy mb-4">
                Our Visa Services
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Comprehensive visa processing services for your travel, study, and business needs.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- US Visa Services -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                <div class="service-icon">
                    <i class="fas fa-flag-usa"></i>
                </div>
                <h3 class="text-2xl font-montserrat font-semibold text-navy mb-4">US Visa Services</h3>
                <ul class="text-gray-600 space-y-2 mb-6">
                    <li><i class="fas fa-check text-accent mr-2"></i><a href="{{ route('visa-information') }}" class="text-gray-600 hover:text-primary transition-colors">Tourist Visa (B1/B2)</a></li>
                    <li><i class="fas fa-check text-accent mr-2"></i><a href="{{ route('visa-information') }}" class="text-gray-600 hover:text-primary transition-colors">Student Visa (F1)</a></li>
                    <li><i class="fas fa-check text-accent mr-2"></i><a href="{{ route('visa-information') }}" class="text-gray-600 hover:text-primary transition-colors">Business Visa</a></li>
                    <li><i class="fas fa-check text-accent mr-2"></i><a href="{{ route('faq') }}" class="text-gray-600 hover:text-primary transition-colors">Interview Preparation</a></li>
                </ul>
                <a href="{{ route('services') }}" class="btn-outline">Learn More</a>
            </div>

            <!-- Canada Visa Services -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                <div class="service-icon">
                    <i class="fas fa-maple-leaf"></i>
                </div>
                <h3 class="text-2xl font-montserrat font-semibold text-navy mb-4">Canada Visa Services</h3>
                <ul class="text-gray-600 space-y-2 mb-6">
                    <li><i class="fas fa-check text-accent mr-2"></i><a href="{{ route('visa-information') }}" class="text-gray-600 hover:text-primary transition-colors">Visitor Visa</a></li>
                    <li><i class="fas fa-check text-accent mr-2"></i><a href="{{ route('visa-information') }}" class="text-gray-600 hover:text-primary transition-colors">Study Permit</a></li>
                    <li><i class="fas fa-check text-accent mr-2"></i><a href="{{ route('visa-information') }}" class="text-gray-600 hover:text-primary transition-colors">Work Permit</a></li>
                    <li><i class="fas fa-check text-accent mr-2"></i><a href="{{ route('apply-now') }}" class="text-gray-600 hover:text-primary transition-colors">Express Entry</a></li>
                </ul>
                <a href="{{ route('services') }}" class="btn-outline">Learn More</a>
            </div>

            <!-- Schengen Visa Services -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                <div class="service-icon">
                    <i class="fas fa-globe-europe"></i>
                </div>
                <h3 class="text-2xl font-montserrat font-semibold text-navy mb-4">Schengen Visa Services</h3>
                <ul class="text-gray-600 space-y-2 mb-6">
                    <li><i class="fas fa-check text-accent mr-2"></i><a href="{{ route('visa-information') }}" class="text-gray-600 hover:text-primary transition-colors">Tourist Visa</a></li>
                    <li><i class="fas fa-check text-accent mr-2"></i><a href="{{ route('visa-information') }}" class="text-gray-600 hover:text-primary transition-colors">Business Visa</a></li>
                    <li><i class="fas fa-check text-accent mr-2"></i><a href="{{ route('visa-information') }}" class="text-gray-600 hover:text-primary transition-colors">Student Visa</a></li>
                    <li><i class="fas fa-check text-accent mr-2"></i><a href="{{ route('faq') }}" class="text-gray-600 hover:text-primary transition-colors">Multiple Entry</a></li>
                </ul>
                <a href="{{ route('services') }}" class="btn-outline">Learn More</a>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="section-padding bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-montserrat font-bold text-navy mb-4">
                What Our Clients Say
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Real experiences from students, families, and tourists who trusted us with their visa applications.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="testimonial-card" data-aos="fade-up" data-aos-delay="100">
                <div class="flex items-center mb-4 pt-8">
                    <div class="w-12 h-12 bg-gradient-to-br from-primary to-accent rounded-full flex items-center justify-center text-white font-bold mr-4">
                        S
                    </div>
                    <div>
                        <h4 class="font-semibold text-navy">Sarah Johnson</h4>
                        <p class="text-sm text-gray-600">Student, University of Toronto</p>
                    </div>
                </div>
                <p class="text-gray-700 mb-4">
                    Nathapam Global made my Canada study visa process incredibly smooth. Their team guided me through every step, and I got my visa approved in just 3 weeks!
                </p>
                <div class="flex text-secondary">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="testimonial-card" data-aos="fade-up" data-aos-delay="200">
                <div class="flex items-center mb-4 pt-8">
                    <div class="w-12 h-12 bg-gradient-to-br from-primary to-accent rounded-full flex items-center justify-center text-white font-bold mr-4">
                        M
                    </div>
                    <div>
                        <h4 class="font-semibold text-navy">Michael Chen</h4>
                        <p class="text-sm text-gray-600">Business Traveler</p>
                    </div>
                </div>
                <p class="text-gray-700 mb-4">
                    Professional service and excellent communication. They helped me get my US business visa without any hassle. Highly recommend their services!
                </p>
                <div class="flex text-secondary">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="testimonial-card" data-aos="fade-up" data-aos-delay="300">
                <div class="flex items-center mb-4 pt-8">
                    <div class="w-12 h-12 bg-gradient-to-br from-primary to-accent rounded-full flex items-center justify-center text-white font-bold mr-4">
                        A
                    </div>
                    <div>
                        <h4 class="font-semibold text-navy">Aisha Patel</h4>
                        <p class="text-sm text-gray-600">Family Vacation</p>
                    </div>
                </div>
                <p class="text-gray-700 mb-4">
                    Amazing experience! They processed Schengen visas for our entire family of 5. Everything was handled professionally and we got all visas approved.
                </p>
                <div class="flex text-secondary">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
        </div>

        <div class="text-center mt-12" data-aos="fade-up">
            <a href="{{ route('testimonials') }}" class="btn-outline">View All Testimonials</a>
        </div>
    </div>
</section>

<!-- Blog Preview Section -->
<section class="section-padding bg-light-gray">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-montserrat font-bold text-navy mb-4">
                Latest Visa Information
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Stay updated with the latest visa requirements, tips, and guides from our experts.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Blog Post 1 -->
            <article class="card card-hover" data-aos="fade-up" data-aos-delay="100">
                <div class="h-48 bg-gradient-to-br from-primary to-accent rounded-lg mb-4 flex items-center justify-center">
                    <i class="fas fa-passport text-white text-4xl"></i>
                </div>
                <div class="flex items-center text-sm text-gray-500 mb-2">
                    <i class="fas fa-calendar mr-2"></i>
                    <span>January 15, 2025</span>
                </div>
                <h3 class="text-xl font-montserrat font-semibold text-navy mb-3">
                    Step-by-Step Guide to US Tourist Visa Application
                </h3>
                <p class="text-gray-600 mb-4">
                    Complete guide covering all requirements, documents, and interview preparation for US B1/B2 visa applications.
                </p>
                <a href="{{ route('blog.show', 'us-tourist-visa-guide') }}" class="text-primary hover:text-primary-dark font-semibold">
                    Read More <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </article>

            <!-- Blog Post 2 -->
            <article class="card card-hover" data-aos="fade-up" data-aos-delay="200">
                <div class="h-48 bg-gradient-to-br from-secondary to-primary rounded-lg mb-4 flex items-center justify-center">
                    <i class="fas fa-graduation-cap text-white text-4xl"></i>
                </div>
                <div class="flex items-center text-sm text-gray-500 mb-2">
                    <i class="fas fa-calendar mr-2"></i>
                    <span>January 12, 2025</span>
                </div>
                <h3 class="text-xl font-montserrat font-semibold text-navy mb-3">
                    Canada Study Permit Requirements 2025
                </h3>
                <p class="text-gray-600 mb-4">
                    Updated requirements and process for obtaining a Canada study permit, including new financial requirements.
                </p>
                <a href="{{ route('blog.show', 'canada-study-permit-2025') }}" class="text-primary hover:text-primary-dark font-semibold">
                    Read More <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </article>

            <!-- Blog Post 3 -->
            <article class="card card-hover" data-aos="fade-up" data-aos-delay="300">
                <div class="h-48 bg-gradient-to-br from-accent to-secondary rounded-lg mb-4 flex items-center justify-center">
                    <i class="fas fa-plane text-white text-4xl"></i>
                </div>
                <div class="flex items-center text-sm text-gray-500 mb-2">
                    <i class="fas fa-calendar mr-2"></i>
                    <span>January 10, 2025</span>
                </div>
                <h3 class="text-xl font-montserrat font-semibold text-navy mb-3">
                    Schengen Visa Interview Tips
                </h3>
                <p class="text-gray-600 mb-4">
                    Essential tips and common questions for your Schengen visa interview to increase your approval chances.
                </p>
                <a href="{{ route('blog.show', 'schengen-visa-interview-tips') }}" class="text-primary hover:text-primary-dark font-semibold">
                    Read More <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </article>
        </div>

        <div class="text-center mt-12" data-aos="fade-up">
            <a href="{{ route('visa-information') }}" class="btn-primary">View All Articles</a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="hero-gradient section-padding">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-montserrat font-bold text-white mb-4">
                Ready to Start Your Visa Journey?
            </h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                Join thousands of satisfied clients who trusted us with their <a href="{{ route('testimonials') }}" class="text-white underline hover:text-blue-200 transition-colors">visa applications</a>. Get started today and let our experts guide you through the process.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('apply-now') }}" class="btn-secondary">
                    <i class="fas fa-paper-plane mr-2"></i>
                    Apply Now
                </a>
                <a href="{{ route('contact') }}" class="btn-outline border-white text-white hover:bg-white hover:text-primary">
                    <i class="fas fa-phone mr-2"></i>
                    Call Us Today
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Counter Animation
    const counters = document.querySelectorAll('[data-counter]');
    const animateCounter = (counter) => {
        const target = parseInt(counter.getAttribute('data-counter'));
        const duration = 2000;
        const step = target / (duration / 16);
        let current = 0;
        
        const timer = setInterval(() => {
            current += step;
            if (current >= target) {
                counter.textContent = target + (target === 90 ? '%' : target === 24 ? '/7' : '+');
                clearInterval(timer);
            } else {
                counter.textContent = Math.floor(current) + (target === 90 ? '%' : target === 24 ? '/7' : '+');
            }
        }, 16);
    };
    
    // Intersection Observer for counters
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                counterObserver.unobserve(entry.target);
            }
        });
    });
    
    counters.forEach(counter => {
        counterObserver.observe(counter);
    });
});
</script>
@endpush