@extends('layouts.main')

@section('title', 'Visa Processing Experts | Nathapam Global UK International Ltd – US, Canada & Schengen')
@section('description', 'Apply for your US, Canada, or Schengen visa with confidence. Nathapam Global UK International Ltd offers professional visa processing, document support, and expert guidance for students and tourists.')
@section('keywords', 'visa processing UK, US visa help, Canada visa consultants, Schengen visa services, study abroad visa, tourist visa UK, visa assistance London')

@section('content')
<!-- Hero Section -->
<section class="hero-gradient min-h-screen flex items-center relative overflow-hidden py-4">
    <!-- Modern Background Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <!-- Floating Elements with proper spacing -->
        <div class="absolute top-24 left-12 w-20 h-20 bg-white/10 rounded-full animate-float" style="animation-delay: 0s;"></div>
        <div class="absolute top-48 right-24 w-16 h-16 bg-white/10 rounded-full animate-float" style="animation-delay: 2s;"></div>
        <div class="absolute bottom-48 left-24 w-12 h-12 bg-white/10 rounded-full animate-float" style="animation-delay: 4s;"></div>
        <div class="absolute bottom-24 right-48 w-24 h-24 bg-white/10 rounded-full animate-float" style="animation-delay: 1s;"></div>
        
        <!-- Modern Grid Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="grid grid-cols-12 gap-6 h-full">
                <div class="col-span-1 bg-gradient-to-b from-white/10 to-transparent"></div>
                <div class="col-span-1 bg-gradient-to-b from-white/5 to-transparent"></div>
                <div class="col-span-1 bg-gradient-to-b from-white/10 to-transparent"></div>
                <div class="col-span-1 bg-gradient-to-b from-white/5 to-transparent"></div>
                <div class="col-span-1 bg-gradient-to-b from-white/10 to-transparent"></div>
                <div class="col-span-1 bg-gradient-to-b from-white/5 to-transparent"></div>
                <div class="col-span-1 bg-gradient-to-b from-white/10 to-transparent"></div>
                <div class="col-span-1 bg-gradient-to-b from-white/5 to-transparent"></div>
                <div class="col-span-1 bg-gradient-to-b from-white/10 to-transparent"></div>
                <div class="col-span-1 bg-gradient-to-b from-white/5 to-transparent"></div>
                <div class="col-span-1 bg-gradient-to-b from-white/10 to-transparent"></div>
                <div class="col-span-1 bg-gradient-to-b from-white/5 to-transparent"></div>
            </div>
        </div>
    </div>

    <!-- Main Content Container with proper spacing -->
    <div class="container mx-auto px-6 sm:px-8 lg:px-12 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">
            <!-- Hero Content -->
            <div class="text-white space-y-6" data-aos="fade-right" data-aos-duration="1000">
                <!-- Trust Badge -->
                <div class="mb-6">
                    <span class="inline-flex items-center px-6 py-3 bg-white/10 backdrop-blur-sm rounded-full text-sm font-medium border border-white/20 animate-fade-in-up">
                        <span class="mr-2">🌟</span>
                        Trusted by 5000+ Clients Worldwide
                    </span>
                </div>
                
                <!-- Main Heading with proper spacing -->
                <div class="space-y-4">
                    <h1 class="text-display-2 font-montserrat font-bold leading-tight">
                        Your Trusted Partner for 
                        <span class="text-accent block mt-2 animate-fade-in-left" style="animation-delay: 0.5s;">
                            Smooth Visa Processing
                        </span>
                    </h1>
                </div>
                
                <!-- Description with 24px spacing -->
                <div class="mt-6">
                    <p class="text-body-large text-blue-100 leading-relaxed max-w-2xl animate-fade-in-up" style="animation-delay: 0.7s;">
                        We specialize in fast, transparent visa processing for the United States, Canada, and Schengen countries — helping students, families, and tourists achieve their travel goals with ease.
                    </p>
                </div>
                
                <!-- CTA Buttons with consistent spacing -->
                <div class="flex flex-col sm:flex-row gap-6 mt-8 animate-fade-in-up justify-center sm:justify-start" style="animation-delay: 0.9s;">
                    <a href="{{ route('apply-now') }}" class="btn-secondary hover-lift group">
                        <i class="fas fa-paper-plane mr-3 group-hover:translate-x-1 transition-transform"></i>
                        Apply Now
                    </a>
                    <a href="{{ route('contact') }}" class="btn-outline border-white text-white hover:bg-white hover:text-primary hover-lift">
                        <i class="fas fa-calendar-alt mr-3"></i>
                        Book Consultation
                    </a>
                </div>

                <!-- Trust Indicators with proper spacing -->
                <div class="flex flex-wrap items-center gap-8 mt-8 text-blue-100 animate-fade-in-up" style="animation-delay: 1.1s;">
                    <div class="flex items-center hover:text-white transition-colors group">
                        <div class="w-10 h-10 bg-accent/20 rounded-xl flex items-center justify-center mr-3 group-hover:bg-accent/30 transition-colors">
                            <i class="fas fa-shield-alt text-accent text-lg"></i>
                        </div>
                        <span class="font-medium">Trusted & Secure</span>
                    </div>
                    <div class="flex items-center hover:text-white transition-colors group">
                        <div class="w-10 h-10 bg-accent/20 rounded-xl flex items-center justify-center mr-3 group-hover:bg-accent/30 transition-colors">
                            <i class="fas fa-clock text-accent text-lg"></i>
                        </div>
                        <span class="font-medium">24/7 Support</span>
                    </div>
                    <div class="flex items-center hover:text-white transition-colors group">
                        <div class="w-10 h-10 bg-accent/20 rounded-xl flex items-center justify-center mr-3 group-hover:bg-accent/30 transition-colors">
                            <i class="fas fa-award text-accent text-lg"></i>
                        </div>
                        <span class="font-medium">90% Success Rate</span>
                    </div>
                </div>
            </div>

            <!-- Hero Illustration -->
            <div class="relative" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="300">
                <div class="relative z-10 animate-scale-in">
                    <!-- Modern SVG Illustration -->
                    <div class="bg-white/10 backdrop-blur-sm rounded-3xl p-8 hover-glow border border-white/20">
                        <svg viewBox="0 0 500 400" class="w-full h-auto max-w-lg mx-auto">
                            <!-- Enhanced Gradients and Filters -->
                            <defs>
                                <linearGradient id="globeGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#4DB7FE;stop-opacity:0.4" />
                                    <stop offset="50%" style="stop-color:#D4AF37;stop-opacity:0.3" />
                                    <stop offset="100%" style="stop-color:#004AAD;stop-opacity:0.4" />
                                </linearGradient>
                                <filter id="glow" x="-50%" y="-50%" width="200%" height="200%">
                                    <feGaussianBlur stdDeviation="4" result="coloredBlur"/>
                                    <feMerge> 
                                        <feMergeNode in="coloredBlur"/>
                                        <feMergeNode in="SourceGraphic"/>
                                    </feMerge>
                                </filter>
                                <filter id="shadow" x="-50%" y="-50%" width="200%" height="200%">
                                    <feDropShadow dx="2" dy="4" stdDeviation="3" flood-color="rgba(0,0,0,0.3)"/>
                                </filter>
                            </defs>
                            
                            <!-- Globe with enhanced styling -->
                            <circle cx="250" cy="200" r="120" fill="url(#globeGradient)" stroke="rgba(255,255,255,0.6)" stroke-width="2" filter="url(#glow)"/>
                            <path d="M130 200 Q250 120 370 200 Q250 280 130 200" fill="none" stroke="rgba(255,255,255,0.7)" stroke-width="2"/>
                            <path d="M250 80 Q330 200 250 320 Q170 200 250 80" fill="none" stroke="rgba(255,255,255,0.7)" stroke-width="2"/>
                            
                            <!-- Animated Airplane -->
                            <g transform="translate(300,150) rotate(45)" class="animate-pulse">
                                <path d="M0 0 L20 0 L25 -5 L30 0 L25 5 L20 0 L15 8 L10 8 L5 3 L0 3 Z" fill="#4DB7FE" filter="url(#shadow)"/>
                                <circle cx="15" cy="0" r="2" fill="white"/>
                            </g>
                            
                            <!-- Modern Passport -->
                            <g transform="translate(180,120)">
                                <rect x="0" y="0" width="40" height="60" rx="6" fill="#D4AF37" filter="url(#shadow)"/>
                                <rect x="5" y="5" width="30" height="20" rx="3" fill="white"/>
                                <line x1="8" y1="35" x2="32" y2="35" stroke="white" stroke-width="2"/>
                                <line x1="8" y1="42" x2="25" y2="42" stroke="white" stroke-width="1"/>
                                <line x1="8" y1="48" x2="28" y2="48" stroke="white" stroke-width="1"/>
                            </g>
                            
                            <!-- Animated Visa Stamps -->
                            <circle cx="320" cy="250" r="15" fill="rgba(212,175,55,0.9)" class="animate-pulse" style="animation-delay: 0.5s;" filter="url(#shadow)"/>
                            <circle cx="180" cy="280" r="12" fill="rgba(77,183,254,0.9)" class="animate-pulse" style="animation-delay: 1s;" filter="url(#shadow)"/>
                            <circle cx="350" cy="180" r="10" fill="rgba(255,255,255,0.9)" class="animate-pulse" style="animation-delay: 1.5s;" filter="url(#shadow)"/>
                        </svg>
                    </div>
                </div>
                
                <!-- Enhanced Background Decoration -->
                <div class="absolute inset-0 bg-gradient-to-br from-white/8 to-transparent rounded-3xl transform rotate-6 -z-10 border border-white/10"></div>
                <div class="absolute inset-0 bg-gradient-to-tl from-accent/15 to-transparent rounded-3xl transform -rotate-3 -z-20 border border-accent/10"></div>
            </div>
        </div>
    </div>

    <!-- Enhanced Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white animate-bounce">
        <div class="flex flex-col items-center space-y-2">
            <span class="text-sm opacity-75 font-medium">Scroll to explore</span>
            <div class="w-6 h-10 border-2 border-white/50 rounded-full flex justify-center">
                <div class="w-1 h-3 bg-white rounded-full mt-2 animate-bounce"></div>
            </div>
        </div>
    </div>
</section>
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
<section class="py-24 bg-gradient-to-br from-primary via-accent to-primary-dark relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-12 left-12 w-32 h-32 bg-white/5 rounded-full blur-xl"></div>
        <div class="absolute bottom-12 right-12 w-40 h-40 bg-white/5 rounded-full blur-xl"></div>
        <div class="absolute top-1/2 left-1/4 w-24 h-24 bg-secondary/10 rounded-full blur-lg"></div>
    </div>

    <div class="container mx-auto px-6 sm:px-8 lg:px-12 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-heading-2 font-montserrat font-bold text-white mb-4">
                Trusted by Thousands Worldwide
            </h2>
            <p class="text-body text-blue-100 max-w-2xl mx-auto">
                Our proven track record speaks for itself with exceptional results across all visa categories.
            </p>
        </div>

        <!-- Stats Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 lg:gap-12">
            <div class="stats-card group" data-aos="fade-up" data-aos-delay="100">
                <div class="relative">
                    <div class="stats-number" data-counter="5000">0</div>
                    <div class="stats-label">Visas Processed</div>
                    <div class="absolute -top-2 -right-2 w-4 h-4 bg-secondary rounded-full animate-ping opacity-75"></div>
                </div>
            </div>
            <div class="stats-card group" data-aos="fade-up" data-aos-delay="200">
                <div class="relative">
                    <div class="stats-number" data-counter="90">0</div>
                    <div class="stats-label">Success Rate %</div>
                    <div class="absolute -top-2 -right-2 w-4 h-4 bg-accent rounded-full animate-ping opacity-75" style="animation-delay: 0.5s;"></div>
                </div>
            </div>
            <div class="stats-card group" data-aos="fade-up" data-aos-delay="300">
                <div class="relative">
                    <div class="stats-number" data-counter="15">0</div>
                    <div class="stats-label">Countries Served</div>
                    <div class="absolute -top-2 -right-2 w-4 h-4 bg-secondary rounded-full animate-ping opacity-75" style="animation-delay: 1s;"></div>
                </div>
            </div>
            <div class="stats-card group" data-aos="fade-up" data-aos-delay="400">
                <div class="relative">
                    <div class="stats-number" data-counter="24">0</div>
                    <div class="stats-label">Hours Support</div>
                    <div class="absolute -top-2 -right-2 w-4 h-4 bg-accent rounded-full animate-ping opacity-75" style="animation-delay: 1.5s;"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-24 bg-white relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-50/50 to-indigo-50/50"></div>
        <div class="absolute top-20 right-20 w-64 h-64 bg-primary/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 left-20 w-48 h-48 bg-secondary/5 rounded-full blur-2xl"></div>
        
        <!-- Grid Pattern -->
        <div class="absolute inset-0 opacity-[0.02]">
            <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, rgb(59 130 246) 1px, transparent 0); background-size: 24px 24px;"></div>
        </div>
    </div>

    <div class="container mx-auto px-6 sm:px-8 lg:px-12 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-flex items-center px-4 py-2 bg-primary/10 text-primary rounded-full text-sm font-medium mb-6">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                Why Choose Us
            </div>
            <h2 class="text-heading-1 font-montserrat font-bold text-navy mb-6">
                Your Trusted Partner for <span class="text-primary">Visa Success</span>
            </h2>
            <p class="text-body-lg text-zinc-600 max-w-3xl mx-auto leading-relaxed">
                With years of experience and a proven track record, we provide personalized visa solutions 
                that maximize your chances of approval while ensuring a smooth, stress-free process.
            </p>
        </div>

        <!-- Features Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="group" data-aos="fade-up" data-aos-delay="100">
                <div class="card card-hover h-full p-8 text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-primary to-primary-dark rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-heading-4 font-montserrat font-bold text-navy mb-4">Transparent Process</h3>
                    <p class="text-body text-zinc-600 leading-relaxed">
                        Complete visibility into your application status with regular updates and clear communication throughout the entire process.
                    </p>
                </div>
            </div>

            <div class="group" data-aos="fade-up" data-aos-delay="200">
                <div class="card card-hover h-full p-8 text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-secondary to-accent rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-heading-4 font-montserrat font-bold text-navy mb-4">Fast Turnaround</h3>
                    <p class="text-body text-zinc-600 leading-relaxed">
                        Quick processing times with efficient document review and submission to get your visa application moving faster.
                    </p>
                </div>
            </div>

            <div class="group" data-aos="fade-up" data-aos-delay="300">
                <div class="card card-hover h-full p-8 text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                    <h3 class="text-heading-4 font-montserrat font-bold text-navy mb-4">90% Success Rate</h3>
                    <p class="text-body text-zinc-600 leading-relaxed">
                        Proven expertise with industry-leading approval rates across all visa categories and destinations.
                    </p>
                </div>
            </div>

            <div class="group" data-aos="fade-up" data-aos-delay="400">
                <div class="card card-hover h-full p-8 text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-indigo-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-heading-4 font-montserrat font-bold text-navy mb-4">Personalized Support</h3>
                    <p class="text-body text-zinc-600 leading-relaxed">
                        Dedicated visa consultants who understand your unique situation and provide tailored guidance every step of the way.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Overview Section -->
<section class="py-24 bg-gradient-to-br from-zinc-50 to-blue-50/50 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-32 left-32 w-48 h-48 bg-primary/5 rounded-full blur-2xl"></div>
        <div class="absolute bottom-32 right-32 w-64 h-64 bg-secondary/5 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-accent/3 rounded-full blur-3xl"></div>
        
        <!-- Grid Pattern -->
        <div class="absolute inset-0 opacity-[0.015]">
            <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, rgb(99 102 241) 1px, transparent 0); background-size: 32px 32px;"></div>
        </div>
    </div>

    <div class="container mx-auto px-6 sm:px-8 lg:px-12 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-flex items-center px-4 py-2 bg-primary/10 text-primary rounded-full text-sm font-medium mb-6">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                Our Services
            </div>
            <h2 class="text-heading-1 font-montserrat font-bold text-navy mb-6">
                Comprehensive <span class="text-primary">Visa Solutions</span>
            </h2>
            <p class="text-body-lg text-zinc-600 max-w-3xl mx-auto leading-relaxed">
                From tourist visas to study permits, we provide expert guidance and support for all your international travel needs with personalized service and proven results.
            </p>
        </div>

        <!-- Services Grid -->
        <div class="grid md:grid-cols-3 gap-8 lg:gap-12">
            <!-- US Visa Services -->
            <div class="group" data-aos="fade-up" data-aos-delay="100">
                <div class="card card-hover h-full p-8 relative overflow-hidden">
                    <!-- Card Background Gradient -->
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-indigo-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    
                    <div class="relative z-10">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        
                        <h3 class="text-heading-3 font-montserrat font-bold text-navy mb-4">US Visa Services</h3>
                        
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center text-zinc-600">
                                <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <a href="{{ route('visa-information') }}" class="hover:text-primary transition-colors">Tourist Visa (B1/B2)</a>
                            </li>
                            <li class="flex items-center text-zinc-600">
                                <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <a href="{{ route('visa-information') }}" class="hover:text-primary transition-colors">Student Visa (F1)</a>
                            </li>
                            <li class="flex items-center text-zinc-600">
                                <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <a href="{{ route('visa-information') }}" class="hover:text-primary transition-colors">Business Visa</a>
                            </li>
                            <li class="flex items-center text-zinc-600">
                                <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <a href="{{ route('faq') }}" class="hover:text-primary transition-colors">Interview Preparation</a>
                            </li>
                        </ul>
                        
                        <a href="{{ route('services') }}" class="btn-outline group-hover:btn-primary transition-all duration-300">
                            Learn More
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Canada Visa Services -->
            <div class="group" data-aos="fade-up" data-aos-delay="200">
                <div class="card card-hover h-full p-8 relative overflow-hidden">
                    <!-- Card Background Gradient -->
                    <div class="absolute inset-0 bg-gradient-to-br from-red-500/5 to-orange-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    
                    <div class="relative z-10">
                        <div class="w-16 h-16 bg-gradient-to-br from-red-500 to-orange-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                            </svg>
                        </div>
                        
                        <h3 class="text-heading-3 font-montserrat font-bold text-navy mb-4">Canada Visa Services</h3>
                        
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center text-zinc-600">
                                <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <a href="{{ route('visa-information') }}" class="hover:text-primary transition-colors">Visitor Visa</a>
                            </li>
                            <li class="flex items-center text-zinc-600">
                                <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <a href="{{ route('visa-information') }}" class="hover:text-primary transition-colors">Study Permit</a>
                            </li>
                            <li class="flex items-center text-zinc-600">
                                <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <a href="{{ route('visa-information') }}" class="hover:text-primary transition-colors">Work Permit</a>
                            </li>
                            <li class="flex items-center text-zinc-600">
                                <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <a href="{{ route('apply-now') }}" class="hover:text-primary transition-colors">Express Entry</a>
                            </li>
                        </ul>
                        
                        <a href="{{ route('services') }}" class="btn-outline group-hover:btn-primary transition-all duration-300">
                            Learn More
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Schengen Visa Services -->
            <div class="group" data-aos="fade-up" data-aos-delay="300">
                <div class="card card-hover h-full p-8 relative overflow-hidden">
                    <!-- Card Background Gradient -->
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-500/5 to-indigo-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    
                    <div class="relative z-10">
                        <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-indigo-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        
                        <h3 class="text-heading-3 font-montserrat font-bold text-navy mb-4">Schengen Visa Services</h3>
                        
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center text-zinc-600">
                                <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <a href="{{ route('visa-information') }}" class="hover:text-primary transition-colors">Tourist Visa</a>
                            </li>
                            <li class="flex items-center text-zinc-600">
                                <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <a href="{{ route('visa-information') }}" class="hover:text-primary transition-colors">Business Visa</a>
                            </li>
                            <li class="flex items-center text-zinc-600">
                                <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <a href="{{ route('visa-information') }}" class="hover:text-primary transition-colors">Student Visa</a>
                            </li>
                            <li class="flex items-center text-zinc-600">
                                <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <a href="{{ route('faq') }}" class="hover:text-primary transition-colors">Multiple Entry</a>
                            </li>
                        </ul>
                        
                        <a href="{{ route('services') }}" class="btn-outline group-hover:btn-primary transition-all duration-300">
                            Learn More
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Button -->
        <div class="text-center mt-16" data-aos="fade-up" data-aos-delay="400">
            <a href="{{ route('services') }}" class="btn-primary">
                View All Services
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-24 bg-gradient-to-br from-navy/5 to-primary/5 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-20 right-20 w-72 h-72 bg-primary/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 left-20 w-96 h-96 bg-secondary/8 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-accent/5 rounded-full blur-3xl"></div>
        
        <!-- Decorative Elements -->
        <div class="absolute top-32 left-1/4 w-2 h-2 bg-primary/20 rounded-full animate-pulse"></div>
        <div class="absolute bottom-40 right-1/3 w-3 h-3 bg-secondary/30 rounded-full animate-pulse" style="animation-delay: 1s;"></div>
        <div class="absolute top-1/3 right-1/4 w-1 h-1 bg-accent/40 rounded-full animate-pulse" style="animation-delay: 2s;"></div>
    </div>

    <div class="container mx-auto px-6 sm:px-8 lg:px-12 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-flex items-center px-4 py-2 bg-primary/10 text-primary rounded-full text-sm font-medium mb-6">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                </svg>
                Client Testimonials
            </div>
            <h2 class="text-heading-1 font-montserrat font-bold text-navy mb-6">
                What Our <span class="text-primary">Clients Say</span>
            </h2>
            <p class="text-body-lg text-zinc-600 max-w-3xl mx-auto leading-relaxed">
                Real experiences from students, families, and tourists who trusted us with their visa applications.
            </p>
        </div>

        <!-- Testimonials Grid -->
        <div class="grid md:grid-cols-3 gap-8 lg:gap-12 mb-16">
            <!-- Testimonial 1 -->
            <div class="group" data-aos="fade-up" data-aos-delay="100">
                <div class="card card-hover h-full p-8 relative overflow-hidden">
                    <!-- Card Background -->
                    <div class="absolute inset-0 bg-white/80 backdrop-blur-sm border border-white/20"></div>
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-indigo-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    
                    <div class="relative z-10">
                        <!-- Stars -->
                        <div class="flex items-center mb-6">
                            <div class="flex text-yellow-400">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            </div>
                        </div>
                        
                        <!-- Testimonial Text -->
                        <p class="text-zinc-600 mb-8 leading-relaxed italic">
                            "Nathapam Global made my Canada study visa process incredibly smooth. Their team guided me through every step, and I got my visa approved in just 3 weeks!"
                        </p>
                        
                        <!-- Client Info -->
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-full flex items-center justify-center text-white font-semibold mr-4 group-hover:scale-110 transition-transform duration-300">
                                S
                            </div>
                            <div>
                                <h4 class="font-semibold text-navy">Sarah Johnson</h4>
                                <p class="text-sm text-zinc-500">Student, University of Toronto</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="group" data-aos="fade-up" data-aos-delay="200">
                <div class="card card-hover h-full p-8 relative overflow-hidden">
                    <!-- Card Background -->
                    <div class="absolute inset-0 bg-white/80 backdrop-blur-sm border border-white/20"></div>
                    <div class="absolute inset-0 bg-gradient-to-br from-green-500/5 to-emerald-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    
                    <div class="relative z-10">
                        <!-- Stars -->
                        <div class="flex items-center mb-6">
                            <div class="flex text-yellow-400">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            </div>
                        </div>
                        
                        <!-- Testimonial Text -->
                        <p class="text-zinc-600 mb-8 leading-relaxed italic">
                            "Professional service and excellent communication. They helped me get my US business visa without any hassle. Highly recommend their services!"
                        </p>
                        
                        <!-- Client Info -->
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded-full flex items-center justify-center text-white font-semibold mr-4 group-hover:scale-110 transition-transform duration-300">
                                M
                            </div>
                            <div>
                                <h4 class="font-semibold text-navy">Michael Chen</h4>
                                <p class="text-sm text-zinc-500">Business Traveler</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="group" data-aos="fade-up" data-aos-delay="300">
                <div class="card card-hover h-full p-8 relative overflow-hidden">
                    <!-- Card Background -->
                    <div class="absolute inset-0 bg-white/80 backdrop-blur-sm border border-white/20"></div>
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-500/5 to-pink-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    
                    <div class="relative z-10">
                        <!-- Stars -->
                        <div class="flex items-center mb-6">
                            <div class="flex text-yellow-400">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            </div>
                        </div>
                        
                        <!-- Testimonial Text -->
                        <p class="text-zinc-600 mb-8 leading-relaxed italic">
                            "Amazing experience! They processed Schengen visas for our entire family of 5. Everything was handled professionally and we got all visas approved."
                        </p>
                        
                        <!-- Client Info -->
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-600 rounded-full flex items-center justify-center text-white font-semibold mr-4 group-hover:scale-110 transition-transform duration-300">
                                A
                            </div>
                            <div>
                                <h4 class="font-semibold text-navy">Aisha Patel</h4>
                                <p class="text-sm text-zinc-500">Family Vacation</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- View All Testimonials Link -->
        <div class="text-center" data-aos="fade-up" data-aos-delay="400">
            <a href="{{ route('testimonials') }}" class="btn-outline group">
                View All Testimonials
                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Blog Preview Section -->
<section class="py-24 bg-gradient-to-br from-zinc-50 to-blue-50/30 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-20 left-20 w-80 h-80 bg-blue-500/8 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 right-20 w-96 h-96 bg-indigo-500/6 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[700px] h-[700px] bg-purple-500/4 rounded-full blur-3xl"></div>
        
        <!-- Grid Pattern -->
        <div class="absolute inset-0 opacity-30">
            <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, rgba(59, 130, 246, 0.15) 1px, transparent 0); background-size: 20px 20px;"></div>
        </div>
        
        <!-- Decorative Elements -->
        <div class="absolute top-40 left-1/3 w-2 h-2 bg-blue-500/30 rounded-full animate-pulse"></div>
        <div class="absolute bottom-32 right-1/4 w-3 h-3 bg-indigo-500/40 rounded-full animate-pulse" style="animation-delay: 1.5s;"></div>
        <div class="absolute top-1/4 right-1/3 w-1 h-1 bg-purple-500/50 rounded-full animate-pulse" style="animation-delay: 3s;"></div>
    </div>

    <div class="container mx-auto px-6 sm:px-8 lg:px-12 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-flex items-center px-4 py-2 bg-blue-500/10 text-blue-600 rounded-full text-sm font-medium mb-6">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z"/>
                    <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z"/>
                </svg>
                Latest Updates
            </div>
            <h2 class="text-heading-1 font-montserrat font-bold text-navy mb-6">
                Latest <span class="text-primary">Visa Information</span>
            </h2>
            <p class="text-body-lg text-zinc-600 max-w-3xl mx-auto leading-relaxed">
                Stay updated with the latest visa requirements, tips, and guides from our experts.
            </p>
        </div>

        <!-- Blog Posts Grid -->
        <div class="grid md:grid-cols-3 gap-8 lg:gap-12 mb-16">
            <!-- Blog Post 1 -->
            <article class="group" data-aos="fade-up" data-aos-delay="100">
                <div class="card card-hover h-full overflow-hidden relative">
                    <!-- Card Background -->
                    <div class="absolute inset-0 bg-white/90 backdrop-blur-sm border border-white/20"></div>
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-indigo-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    
                    <div class="relative z-10">
                        <!-- Featured Image -->
                        <div class="h-48 bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center relative overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-br from-blue-500/20 to-indigo-600/20"></div>
                            <svg class="w-16 h-16 text-white relative z-10 group-hover:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4zM18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"/>
                            </svg>
                        </div>
                        
                        <div class="p-6">
                            <!-- Date -->
                            <div class="flex items-center text-sm text-zinc-500 mb-3">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                                </svg>
                                <span>January 15, 2025</span>
                            </div>
                            
                            <!-- Title -->
                            <h3 class="text-xl font-montserrat font-semibold text-navy mb-3 group-hover:text-primary transition-colors">
                                Step-by-Step Guide to US Tourist Visa Application
                            </h3>
                            
                            <!-- Excerpt -->
                            <p class="text-zinc-600 mb-4 leading-relaxed">
                                Complete guide covering all requirements, documents, and interview preparation for US B1/B2 visa applications.
                            </p>
                            
                            <!-- Read More Link -->
                            <a href="{{ route('blog.show', 'us-tourist-visa-guide') }}" class="inline-flex items-center text-primary hover:text-primary-dark font-semibold group/link">
                                Read More
                                <svg class="w-4 h-4 ml-2 group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Blog Post 2 -->
            <article class="group" data-aos="fade-up" data-aos-delay="200">
                <div class="card card-hover h-full overflow-hidden relative">
                    <!-- Card Background -->
                    <div class="absolute inset-0 bg-white/90 backdrop-blur-sm border border-white/20"></div>
                    <div class="absolute inset-0 bg-gradient-to-br from-green-500/5 to-emerald-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    
                    <div class="relative z-10">
                        <!-- Featured Image -->
                        <div class="h-48 bg-gradient-to-br from-green-500 to-emerald-600 flex items-center justify-center relative overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-br from-green-500/20 to-emerald-600/20"></div>
                            <svg class="w-16 h-16 text-white relative z-10 group-hover:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                            </svg>
                        </div>
                        
                        <div class="p-6">
                            <!-- Date -->
                            <div class="flex items-center text-sm text-zinc-500 mb-3">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                                </svg>
                                <span>January 12, 2025</span>
                            </div>
                            
                            <!-- Title -->
                            <h3 class="text-xl font-montserrat font-semibold text-navy mb-3 group-hover:text-primary transition-colors">
                                Canada Study Permit Requirements 2025
                            </h3>
                            
                            <!-- Excerpt -->
                            <p class="text-zinc-600 mb-4 leading-relaxed">
                                Updated requirements and process for obtaining a Canada study permit, including new financial requirements.
                            </p>
                            
                            <!-- Read More Link -->
                            <a href="{{ route('blog.show', 'canada-study-permit-2025') }}" class="inline-flex items-center text-primary hover:text-primary-dark font-semibold group/link">
                                Read More
                                <svg class="w-4 h-4 ml-2 group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Blog Post 3 -->
            <article class="group" data-aos="fade-up" data-aos-delay="300">
                <div class="card card-hover h-full overflow-hidden relative">
                    <!-- Card Background -->
                    <div class="absolute inset-0 bg-white/90 backdrop-blur-sm border border-white/20"></div>
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-500/5 to-pink-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    
                    <div class="relative z-10">
                        <!-- Featured Image -->
                        <div class="h-48 bg-gradient-to-br from-purple-500 to-pink-600 flex items-center justify-center relative overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-br from-purple-500/20 to-pink-600/20"></div>
                            <svg class="w-16 h-16 text-white relative z-10 group-hover:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 2L3 7v11a1 1 0 001 1h12a1 1 0 001-1V7l-7-5zM8 15v-3a1 1 0 011-1h2a1 1 0 011 1v3H8z"/>
                            </svg>
                        </div>
                        
                        <div class="p-6">
                            <!-- Date -->
                            <div class="flex items-center text-sm text-zinc-500 mb-3">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                                </svg>
                                <span>January 10, 2025</span>
                            </div>
                            
                            <!-- Title -->
                            <h3 class="text-xl font-montserrat font-semibold text-navy mb-3 group-hover:text-primary transition-colors">
                                Schengen Visa Interview Tips
                            </h3>
                            
                            <!-- Excerpt -->
                            <p class="text-zinc-600 mb-4 leading-relaxed">
                                Essential tips and common questions for your Schengen visa interview to increase your approval chances.
                            </p>
                            
                            <!-- Read More Link -->
                            <a href="{{ route('blog.show', 'schengen-visa-interview-tips') }}" class="inline-flex items-center text-primary hover:text-primary-dark font-semibold group/link">
                                Read More
                                <svg class="w-4 h-4 ml-2 group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </article>
        </div>

        <!-- View All Articles Button -->
        <div class="text-center" data-aos="fade-up" data-aos-delay="400">
            <a href="{{ route('visa-information') }}" class="btn-primary group">
                View All Articles
                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-24 bg-gradient-to-br from-primary via-blue-600 to-indigo-700 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-blue-600/20 via-indigo-600/10 to-purple-600/20"></div>
        <div class="absolute top-20 right-20 w-96 h-96 bg-white/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 left-20 w-80 h-80 bg-blue-300/10 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-indigo-400/5 rounded-full blur-3xl"></div>
        
        <!-- Animated Elements -->
        <div class="absolute top-32 left-1/4 w-3 h-3 bg-white/20 rounded-full animate-pulse"></div>
        <div class="absolute bottom-40 right-1/3 w-2 h-2 bg-blue-200/30 rounded-full animate-pulse" style="animation-delay: 1s;"></div>
        <div class="absolute top-1/3 right-1/4 w-4 h-4 bg-indigo-200/25 rounded-full animate-pulse" style="animation-delay: 2s;"></div>
        
        <!-- Grid Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, rgba(255, 255, 255, 0.3) 1px, transparent 0); background-size: 30px 30px;"></div>
        </div>
    </div>

    <div class="container mx-auto px-6 sm:px-8 lg:px-12 text-center relative z-10">
        <div data-aos="fade-up">
            <!-- Main Heading -->
            <h2 class="text-heading-1 font-montserrat font-bold text-white mb-6">
                Ready to Start Your <span class="text-blue-200">Visa Journey?</span>
            </h2>
            
            <!-- Description -->
            <p class="text-body-lg text-blue-100 mb-12 max-w-3xl mx-auto leading-relaxed">
                Join thousands of satisfied clients who trusted us with their 
                <a href="{{ route('testimonials') }}" class="text-white underline hover:text-blue-200 transition-colors font-medium">visa applications</a>. 
                Get started today and let our experts guide you through the process with personalized support and proven success.
            </p>
            
            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center mb-16">
                <a href="{{ route('apply-now') }}" class="btn-secondary group">
                    <svg class="w-5 h-5 mr-3 group-hover:translate-x-1 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"/>
                    </svg>
                    Apply Now
                </a>
                <a href="{{ route('contact') }}" class="btn-outline border-2 border-white text-white hover:bg-white hover:text-primary group">
                    <svg class="w-5 h-5 mr-3 group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                    </svg>
                    Call Us Today
                </a>
            </div>
            
            <!-- Trust Indicators -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                <div class="flex items-center justify-center text-blue-100">
                    <svg class="w-6 h-6 mr-3 text-blue-200" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="font-medium">90% Success Rate</span>
                </div>
                <div class="flex items-center justify-center text-blue-100">
                    <svg class="w-6 h-6 mr-3 text-blue-200" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                    </svg>
                    <span class="font-medium">Fast Processing</span>
                </div>
                <div class="flex items-center justify-center text-blue-100">
                    <svg class="w-6 h-6 mr-3 text-blue-200" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span class="font-medium">Expert Support</span>
                </div>
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