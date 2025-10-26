<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- SEO Meta Tags -->
    <title>@yield('title', 'Visa Processing Experts | Nathapam Global UK International Ltd – US, Canada & Schengen')</title>
    <meta name="description" content="@yield('description', 'Apply for your US, Canada, or Schengen visa with confidence. Nathapam Global UK International Ltd offers professional visa processing, document support, and expert guidance for students and tourists.')">
    <meta name="keywords" content="@yield('keywords', 'visa processing UK, US visa help, Canada visa consultants, Schengen visa services, study abroad visa, tourist visa UK, visa assistance London')">
    <meta name="author" content="Nathapam Global UK International Ltd">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="@yield('title', 'Visa Processing Experts | Nathapam Global UK International Ltd')">
    <meta property="og:description" content="@yield('description', 'Professional visa processing services for US, Canada, and Schengen countries.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/nathapam-logo.png') }}">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Visa Processing Experts | Nathapam Global UK International Ltd')">
    <meta name="twitter:description" content="@yield('description', 'Professional visa processing services for US, Canada, and Schengen countries.')">

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Structured Data for SEO -->
        <script type="application/ld+json">
@verbatim
{
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Nathapam Global UK International Ltd",
    "url": "https://nathapamglobal.co.uk",
    "logo": "https://nathapamglobal.co.uk/assets/nathapam-logo.png",
    "description": "Professional visa processing services for US, Canada, Schengen, and UK visas. Expert consultation and document support for students and tourists.",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "2 Haydock Avenue",
        "addressLocality": "Hereford",
        "addressRegion": "Herefordshire",
        "postalCode": "HR4 9LZ",
        "addressCountry": "GB"
    },
    "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+44-7432-404-502",
        "contactType": "customer service",
        "availableLanguage": ["English"],
        "hoursAvailable": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
            "opens": "09:00",
            "closes": "18:00"
        }
    },
    "sameAs": [
        "https://wa.me/447432404502"
    ],
    "serviceArea": {
        "@type": "Country",
        "name": "United Kingdom"
    },
    "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Visa Services",
        "itemListElement": [
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "US Visa Processing",
                    "description": "Complete US visa application assistance including B1/B2 tourist and business visas"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Canada Visa Processing",
                    "description": "Canadian visitor visa and study permit application support"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Schengen Visa Processing",
                    "description": "European Schengen visa applications for tourism and business"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "UK Visa Processing",
                    "description": "UK visitor visa and immigration services"
                }
            }
        ]
    }
}
@endverbatim
</script>

    <!-- Custom Styles -->
    <style>
        :root {
            --primary: #1e40af;
            --primary-dark: #1e3a8a;
            --accent: #f59e0b;
            --navy: #0f172a;
            --slate-50: #f8fafc;
            --slate-100: #f1f5f9;
            --slate-200: #e2e8f0;
            --slate-300: #cbd5e1;
            --slate-600: #475569;
            --slate-700: #334155;
            --slate-800: #1e293b;
            --slate-900: #0f172a;
        }

        .section-container {
            @apply max-w-7xl mx-auto px-4 sm:px-6 lg:px-8;
        }

        .section-padding {
            @apply py-16 lg:py-20;
        }

        .btn-primary {
            @apply inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-semibold rounded-xl hover:from-blue-700 hover:to-indigo-700 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl;
        }

        .nav-link {
            @apply relative text-slate-700 hover:text-blue-600 font-medium transition-all duration-300 py-2 px-1;
        }

        .nav-link.active {
            @apply text-blue-600;
        }

        .nav-link::after {
            @apply absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-indigo-600 transition-all duration-300;
            content: '';
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            @apply w-full;
        }

        .mobile-nav-link {
            @apply flex items-center px-4 py-3 text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-xl font-medium transition-all duration-300;
        }

        .mobile-nav-link.active {
            @apply text-blue-600 bg-blue-50;
        }

        .footer-link {
            @apply text-slate-300 hover:text-white transition-colors duration-300;
        }

        .social-link {
            @apply w-10 h-10 bg-white/10 backdrop-blur-sm rounded-xl flex items-center justify-center text-white hover:bg-white/20 transition-all duration-300;
        }

        .fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .fade-in-left {
            animation: fadeInLeft 0.8s ease-out forwards;
        }

        .fade-in-right {
            animation: fadeInRight 0.8s ease-out forwards;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .animation-delay-200 {
            animation-delay: 0.2s;
        }

        .animation-delay-400 {
            animation-delay: 0.4s;
        }

        .animation-delay-600 {
            animation-delay: 0.6s;
        }

        .animation-delay-800 {
            animation-delay: 0.8s;
        }

        .animation-delay-1000 {
            animation-delay: 1s;
        }

        /* WhatsApp Button Animation */
        .whatsapp-btn {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
        }

        /* Header Backdrop Blur Enhancement */
        .header-blur {
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }

        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Focus Styles for Accessibility */
        .focus-visible:focus {
            @apply outline-none ring-2 ring-blue-500 ring-offset-2;
        }

        /* Loading Animation */
        .loading-spinner {
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }
    </style>

        @stack('styles')
</head>

<body class="font-inter antialiased bg-slate-50 overflow-x-hidden">
    <!-- Skip to main content -->
    <a href="#main-content"
        class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 bg-blue-600 text-white px-4 py-2 rounded-xl z-[100] focus-visible">
        Skip to main content
    </a>

    <!-- Header -->
    <header class="bg-white/95 backdrop-blur-md shadow-sm sticky top-0 z-[90] border-b border-slate-200/50 header-blur" id="header">
        <nav class="section-container">
            <div class="flex justify-between items-center h-16 lg:h-20 px-4 lg:px-6">
                <!-- Logo -->
                <div class="flex-shrink-0 fade-in-left">
                    <a href="{{ route('home') }}" class="flex items-center group focus-visible" aria-label="Nathapam Global Home">
                        <div class="relative">
                            <img src="{{ asset('assets/nathapam-logo.png') }}" 
                                 alt="Nathapam Global Logo" 
                                 class="w-46 h-46 lg:w-50 lg:h-50 object-contain group-hover:scale-105 transition-transform duration-300"
                                 onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="w-16 h-16 lg:w-20 lg:h-20 bg-gradient-to-br from-blue-600 via-amber-500 to-blue-800 rounded-xl flex items-center justify-center shadow-lg group-hover:shadow-xl transition-all duration-300 group-hover:scale-105" style="display: none;">
                                <i class="fas fa-globe text-white text-2xl lg:text-3xl"></i>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-6 xl:space-x-8 fade-in-up">
                    <a href="{{ route('about') }}"
                        class="nav-link focus-visible {{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>
                    <a href="{{ route('services') }}"
                        class="nav-link focus-visible {{ request()->routeIs('services') ? 'active' : '' }}">Services</a>
                    <a href="{{ route('visa-information') }}"
                        class="nav-link focus-visible {{ request()->routeIs('visa-information') ? 'active' : '' }}">Visa Information</a>
                    <a href="{{ route('testimonials') }}"
                        class="nav-link focus-visible {{ request()->routeIs('testimonials') ? 'active' : '' }}">Testimonials</a>
                    <a href="{{ route('faq') }}"
                        class="nav-link focus-visible {{ request()->routeIs('faq') ? 'active' : '' }}">FAQ</a>
                    <a href="{{ route('contact') }}"
                        class="nav-link focus-visible {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
                </div>

                <!-- CTA Button -->
                <div class="hidden lg:flex items-center fade-in-right">
                    <a href="{{ route('apply-now') }}" class="btn-primary group focus-visible" aria-label="Apply for visa now">
                        <span>Apply Now</span>
                        <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="lg:hidden">
                    <button type="button"
                        class="mobile-menu-button p-2 rounded-xl text-slate-600 hover:text-blue-600 hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-blue-500/20 transition-all duration-300 focus-visible"
                        aria-label="Toggle mobile menu"
                        aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>

            <!-- Mobile Navigation -->
            <div class="mobile-menu hidden lg:hidden" role="navigation" aria-label="Mobile navigation">
                <div class="px-2 pt-2 pb-3 space-y-1 bg-white/95 backdrop-blur-md border-t border-slate-200/50 rounded-b-2xl shadow-lg">
                    <a href="{{ route('about') }}"
                        class="mobile-nav-link focus-visible {{ request()->routeIs('about') ? 'active' : '' }}">
                        <i class="fas fa-users mr-3"></i>About Us
                    </a>
                    <a href="{{ route('services') }}"
                        class="mobile-nav-link focus-visible {{ request()->routeIs('services') ? 'active' : '' }}">
                        <i class="fas fa-concierge-bell mr-3"></i>Services
                    </a>
                    <a href="{{ route('visa-information') }}"
                        class="mobile-nav-link focus-visible {{ request()->routeIs('visa-information') ? 'active' : '' }}">
                        <i class="fas fa-passport mr-3"></i>Visa Information
                    </a>
                    <a href="{{ route('testimonials') }}"
                        class="mobile-nav-link focus-visible {{ request()->routeIs('testimonials') ? 'active' : '' }}">
                        <i class="fas fa-star mr-3"></i>Testimonials
                    </a>
                    <a href="{{ route('faq') }}"
                        class="mobile-nav-link focus-visible {{ request()->routeIs('faq') ? 'active' : '' }}">
                        <i class="fas fa-question-circle mr-3"></i>FAQ
                    </a>
                    <a href="{{ route('contact') }}"
                        class="mobile-nav-link focus-visible {{ request()->routeIs('contact') ? 'active' : '' }}">
                        <i class="fas fa-envelope mr-3"></i>Contact
                    </a>
                    <div class="pt-4 px-2">
                        <a href="{{ route('apply-now') }}" class="btn-primary w-full text-center justify-center focus-visible">
                            <span>Apply Now</span>
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main id="main-content" class="relative z-10">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-white relative z-20">
        <div class="section-container py-12 lg:py-16 px-4 lg:px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">
                <!-- Company Info -->
                <div class="lg:col-span-2 fade-in-up">
                    <div class="flex justify-center lg:justify-start mb-8">
                        <div class="relative">
                            <img src="{{ asset('assets/nathapam-logo.png') }}" 
                                 alt="Nathapam Global Logo" 
                                 class="w-46 h-46 lg:w-50 lg:h-50 object-contain"
                                 onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="w-24 h-24 lg:w-32 lg:h-32 bg-gradient-to-br from-blue-600 via-amber-500 to-blue-800 rounded-xl flex items-center justify-center shadow-lg" style="display: none;">
                                <i class="fas fa-globe text-white text-4xl lg:text-5xl"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-slate-300 mb-8 max-w-md text-base lg:text-lg leading-relaxed text-center lg:text-left">
                        Your trusted partner for smooth visa processing. We specialize in fast, transparent visa
                        processing for the United States, Canada, and Schengen countries.
                    </p>
                    <div class="flex justify-center lg:justify-start space-x-4">
                        <a href="#" class="social-link group focus-visible" aria-label="Facebook">
                            <i class="fab fa-facebook-f text-xl group-hover:scale-110 transition-transform duration-300"></i>
                        </a>
                        <a href="#" class="social-link group focus-visible" aria-label="Twitter">
                            <i class="fab fa-twitter text-xl group-hover:scale-110 transition-transform duration-300"></i>
                        </a>
                        <a href="#" class="social-link group focus-visible" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in text-xl group-hover:scale-110 transition-transform duration-300"></i>
                        </a>
                        <a href="#" class="social-link group focus-visible" aria-label="Instagram">
                            <i class="fab fa-instagram text-xl group-hover:scale-110 transition-transform duration-300"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="fade-in-up animation-delay-200">
                    <h4 class="text-lg lg:text-xl font-montserrat font-semibold mb-6 text-amber-400">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="{{ route('about') }}" class="footer-link focus-visible">About Us</a></li>
                        <li><a href="{{ route('services') }}" class="footer-link focus-visible">Services</a></li>
                        <li><a href="{{ route('visa-information') }}" class="footer-link focus-visible">Visa Information</a></li>
                        <li><a href="{{ route('testimonials') }}" class="footer-link focus-visible">Testimonials</a></li>
                        <li><a href="{{ route('contact') }}" class="footer-link focus-visible">Contact</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="fade-in-up animation-delay-400">
                    <h4 class="text-lg lg:text-xl font-montserrat font-semibold mb-6 text-amber-400">Contact Info</h4>
                    <ul class="space-y-4">
                        <li class="flex items-start space-x-3 group">
                            <div class="w-8 h-8 bg-amber-500/20 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                <i class="fas fa-map-marker-alt text-amber-400 text-sm"></i>
                            </div>
                            <span class="text-slate-300 group-hover:text-white transition-colors duration-300">2 Haydock Avenue, Hereford, HR4 9LZ, UK</span>
                        </li>
                        <li class="flex items-center space-x-3 group">
                            <div class="w-8 h-8 bg-amber-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-phone text-amber-400 text-sm"></i>
                            </div>
                            <a href="tel:+447432404502" class="text-slate-300 group-hover:text-white transition-colors duration-300 focus-visible">+44 7432 404 502</a>
                        </li>
                        <li class="flex items-center space-x-3 group">
                            <div class="w-8 h-8 bg-amber-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-envelope text-amber-400 text-sm"></i>
                            </div>
                            <a href="mailto:info@nathapamglobal.co.uk" class="text-slate-300 group-hover:text-white transition-colors duration-300 focus-visible">info@nathapamglobal.co.uk</a>
                        </li>
                        <li class="flex items-center space-x-3 group">
                            <div class="w-8 h-8 bg-amber-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-clock text-amber-400 text-sm"></i>
                            </div>
                            <span class="text-slate-300 group-hover:text-white transition-colors duration-300">Mon - Fri: 9:00 AM - 6:00 PM</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Footer -->
            <div class="border-t border-slate-700 mt-12 pt-8 px-4 lg:px-0 flex flex-col md:flex-row justify-between items-center fade-in-up animation-delay-600">
                <p class="text-slate-300 text-sm lg:text-base text-center md:text-left">
                    © {{ date('Y') }} Nathapam Global UK International Ltd. All rights reserved.
                </p>
                <div class="flex flex-wrap justify-center space-x-4 lg:space-x-6 mt-4 md:mt-0">
                    <a href="#" class="footer-link text-sm lg:text-base focus-visible">Privacy Policy</a>
                    <a href="#" class="footer-link text-sm lg:text-base focus-visible">Terms of Service</a>
                    <a href="#" class="footer-link text-sm lg:text-base focus-visible">Cookie Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Fixed Action Buttons -->
    <div class="fixed bottom-6 right-6 z-[80] flex flex-col space-y-4">
        <!-- Scroll to Top Button -->
        <button id="scrollToTop"
            class="bg-blue-600 text-white p-3 lg:p-4 rounded-full shadow-lg hover:bg-blue-700 hover:shadow-xl transition-all duration-300 opacity-0 invisible transform hover:scale-110 group focus-visible"
            aria-label="Scroll to top">
            <i class="fas fa-arrow-up text-lg lg:text-xl group-hover:-translate-y-1 transition-transform duration-300"></i>
        </button>
        
        <!-- WhatsApp Chat Button -->
        <a href="https://wa.me/447432404502?text=Hello! I'm interested in your visa services. Can you help me?"
            target="_blank"
            class="whatsapp-btn bg-green-500 hover:bg-green-600 text-white p-4 lg:p-5 rounded-full shadow-lg transition-all duration-300 hover:scale-110 group focus-visible"
            title="Chat with us on WhatsApp"
            aria-label="Chat with us on WhatsApp">
            <i class="fab fa-whatsapp text-xl lg:text-2xl group-hover:rotate-12 transition-transform duration-300"></i>
        </a>
    </div>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            offset: 100
        });

        // Mobile menu toggle
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.querySelector('.mobile-menu-button');
            const mobileMenu = document.querySelector('.mobile-menu');

            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', function() {
                    const isExpanded = mobileMenu.classList.contains('hidden');
                    mobileMenu.classList.toggle('hidden');
                    mobileMenuButton.setAttribute('aria-expanded', isExpanded ? 'true' : 'false');
                });

                // Close mobile menu when clicking outside
                document.addEventListener('click', function(event) {
                    if (!mobileMenuButton.contains(event.target) && !mobileMenu.contains(event.target)) {
                        mobileMenu.classList.add('hidden');
                        mobileMenuButton.setAttribute('aria-expanded', 'false');
                    }
                });

                // Close mobile menu on escape key
                document.addEventListener('keydown', function(event) {
                    if (event.key === 'Escape' && !mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                        mobileMenuButton.setAttribute('aria-expanded', 'false');
                        mobileMenuButton.focus();
                    }
                });
            }

            // Scroll to top functionality
            const scrollToTopBtn = document.getElementById('scrollToTop');

            if (scrollToTopBtn) {
                window.addEventListener('scroll', function() {
                    if (window.pageYOffset > 300) {
                        scrollToTopBtn.classList.remove('opacity-0', 'invisible');
                    } else {
                        scrollToTopBtn.classList.add('opacity-0', 'invisible');
                    }
                });

                scrollToTopBtn.addEventListener('click', function() {
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                });
            }

            // Header scroll effect
            const header = document.getElementById('header');
            if (header) {
                window.addEventListener('scroll', function() {
                    if (window.pageYOffset > 100) {
                        header.classList.add('shadow-md');
                    } else {
                        header.classList.remove('shadow-md');
                    }
                });
            }

            // Enhanced focus management for accessibility
            const focusableElements = document.querySelectorAll('a, button, input, textarea, select, [tabindex]:not([tabindex="-1"])');
            
            // Trap focus in mobile menu when open
            if (mobileMenu) {
                mobileMenu.addEventListener('keydown', function(event) {
                    if (event.key === 'Tab') {
                        const focusableInMenu = mobileMenu.querySelectorAll('a, button');
                        const firstFocusable = focusableInMenu[0];
                        const lastFocusable = focusableInMenu[focusableInMenu.length - 1];

                        if (event.shiftKey) {
                            if (document.activeElement === firstFocusable) {
                                event.preventDefault();
                                lastFocusable.focus();
                            }
                        } else {
                            if (document.activeElement === lastFocusable) {
                                event.preventDefault();
                                firstFocusable.focus();
                            }
                        }
                    }
                });
            }

            // Smooth scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        e.preventDefault();
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // Preload critical images
            const criticalImages = [
                '{{ asset("assets/nathapam-logo.png") }}'
            ];

            criticalImages.forEach(src => {
                const img = new Image();
                img.src = src;
            });

            // Error handling for missing assets
            document.querySelectorAll('img').forEach(img => {
                img.addEventListener('error', function() {
                    console.warn('Failed to load image:', this.src);
                    // Fallback handled by onerror attribute in HTML
                });
            });
        });

        // Performance optimization: Lazy load non-critical resources
        if ('IntersectionObserver' in window) {
            const lazyElements = document.querySelectorAll('[data-lazy]');
            const lazyObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const element = entry.target;
                        element.src = element.dataset.lazy;
                        element.removeAttribute('data-lazy');
                        lazyObserver.unobserve(element);
                    }
                });
            });

            lazyElements.forEach(element => {
                lazyObserver.observe(element);
            });
        }
    </script>

    @stack('scripts')
</body>

</html>
