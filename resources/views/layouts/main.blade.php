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
    <meta property="og:image" content="{{ asset('images/nathapam-logo.png') }}">
    
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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Structured Data for SEO -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Nathapam Global UK International Ltd",
        "url": "https://nathapamglobal.co.uk",
        "logo": "https://nathapamglobal.co.uk/images/nathapam-logo.png",
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
    </script>
    
    @stack('styles')
</head>
<body class="font-inter antialiased bg-gray-50">
    <!-- Skip to main content -->
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 bg-primary text-white px-4 py-2 rounded-md z-50">
        Skip to main content
    </a>

    <!-- Header -->
    <header class="bg-white shadow-sm sticky top-0 z-40" id="header">
        <nav class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16 lg:h-20">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="{{ route('home') }}" class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-gradient-to-br from-primary to-accent rounded-lg flex items-center justify-center">
                            <i class="fas fa-globe text-white text-lg"></i>
                        </div>
                        <div class="hidden sm:block">
                            <h1 class="text-xl font-montserrat font-bold text-navy">Nathapam Global</h1>
                            <p class="text-xs text-gray-600">UK International Ltd</p>
                        </div>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                    <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>
                    <a href="{{ route('services') }}" class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}">Services</a>
                    <a href="{{ route('visa-information') }}" class="nav-link {{ request()->routeIs('visa-information') ? 'active' : '' }}">Visa Information</a>
                    <a href="{{ route('testimonials') }}" class="nav-link {{ request()->routeIs('testimonials') ? 'active' : '' }}">Testimonials</a>
                    <a href="{{ route('faq') }}" class="nav-link {{ request()->routeIs('faq') ? 'active' : '' }}">FAQ</a>
                    <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
                </div>

                <!-- CTA Button -->
                <div class="hidden lg:flex items-center space-x-4">
                    <a href="{{ route('apply-now') }}" class="btn-primary">
                        Apply Now
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="lg:hidden">
                    <button type="button" class="mobile-menu-button p-2 rounded-md text-gray-600 hover:text-primary hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-primary">
                        <span class="sr-only">Open main menu</span>
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>

            <!-- Mobile Navigation -->
            <div class="mobile-menu hidden lg:hidden">
                <div class="px-2 pt-2 pb-3 space-y-1 bg-white border-t">
                    <a href="{{ route('home') }}" class="mobile-nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                    <a href="{{ route('about') }}" class="mobile-nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>
                    <a href="{{ route('services') }}" class="mobile-nav-link {{ request()->routeIs('services') ? 'active' : '' }}">Services</a>
                    <a href="{{ route('visa-information') }}" class="mobile-nav-link {{ request()->routeIs('visa-information') ? 'active' : '' }}">Visa Information</a>
                    <a href="{{ route('testimonials') }}" class="mobile-nav-link {{ request()->routeIs('testimonials') ? 'active' : '' }}">Testimonials</a>
                    <a href="{{ route('faq') }}" class="mobile-nav-link {{ request()->routeIs('faq') ? 'active' : '' }}">FAQ</a>
                    <a href="{{ route('contact') }}" class="mobile-nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
                    <div class="pt-4">
                        <a href="{{ route('apply-now') }}" class="btn-primary w-full text-center">Apply Now</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main id="main-content">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-navy text-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="lg:col-span-2">
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-primary to-accent rounded-lg flex items-center justify-center">
                            <i class="fas fa-globe text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-montserrat font-bold">Nathapam Global</h3>
                            <p class="text-sm text-gray-300">UK International Ltd</p>
                        </div>
                    </div>
                    <p class="text-gray-300 mb-4 max-w-md">
                        Your trusted partner for smooth visa processing. We specialize in fast, transparent visa processing for the United States, Canada, and Schengen countries.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-accent transition-colors">
                            <i class="fab fa-facebook-f text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-accent transition-colors">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-accent transition-colors">
                            <i class="fab fa-linkedin-in text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-accent transition-colors">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-montserrat font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-accent transition-colors">Home</a></li>
                        <li><a href="{{ route('about') }}" class="text-gray-300 hover:text-accent transition-colors">About Us</a></li>
                        <li><a href="{{ route('services') }}" class="text-gray-300 hover:text-accent transition-colors">Services</a></li>
                        <li><a href="{{ route('visa-information') }}" class="text-gray-300 hover:text-accent transition-colors">Visa Information</a></li>
                        <li><a href="{{ route('testimonials') }}" class="text-gray-300 hover:text-accent transition-colors">Testimonials</a></li>
                        <li><a href="{{ route('contact') }}" class="text-gray-300 hover:text-accent transition-colors">Contact</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="text-lg font-montserrat font-semibold mb-4">Contact Info</h4>
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-3">
                            <i class="fas fa-map-marker-alt text-accent mt-1"></i>
                            <span class="text-gray-300">123 Business Street, London, UK</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-phone text-accent"></i>
                            <span class="text-gray-300">+44 20 1234 5678</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-envelope text-accent"></i>
                            <span class="text-gray-300">info@nathapamglobal.co.uk</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-clock text-accent"></i>
                            <span class="text-gray-300">Mon - Fri: 9:00 AM - 6:00 PM</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Footer -->
            <div class="border-t border-gray-700 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-300 text-sm">
                    © {{ date('Y') }} Nathapam Global UK International Ltd. All rights reserved.
                </p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="text-gray-300 hover:text-accent text-sm transition-colors">Privacy Policy</a>
                    <a href="#" class="text-gray-300 hover:text-accent text-sm transition-colors">Terms of Service</a>
                    <a href="#" class="text-gray-300 hover:text-accent text-sm transition-colors">Cookie Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Chat Button -->
    <div class="fixed bottom-6 right-6 z-50">
        <a href="https://wa.me/442012345678" target="_blank" class="whatsapp-btn bg-green-500 hover:bg-green-600 text-white p-4 rounded-full shadow-lg transition-all duration-300 hover:scale-110">
            <i class="fab fa-whatsapp text-2xl"></i>
        </a>
    </div>

    <!-- Scroll to Top Button -->
    <button id="scrollToTop" class="fixed bottom-6 right-6 bg-primary text-white p-3 rounded-full shadow-lg hover:bg-primary-dark transition-all duration-300 opacity-0 invisible z-50">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/447432404502?text=Hello! I'm interested in your visa services. Can you help me?" 
       target="_blank" 
       class="fixed bottom-6 left-6 bg-green-500 text-white p-4 rounded-full shadow-lg hover:bg-green-600 transition-all duration-300 z-50 animate-pulse hover:animate-none"
       title="Chat with us on WhatsApp">
        <i class="fab fa-whatsapp text-xl"></i>
    </a>

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

            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });

            // Scroll to top functionality
            const scrollToTopBtn = document.getElementById('scrollToTop');
            
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

            // Header scroll effect
            const header = document.getElementById('header');
            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 100) {
                    header.classList.add('shadow-md');
                } else {
                    header.classList.remove('shadow-md');
                }
            });
        });
    </script>
    
    @stack('scripts')
</body>
</html>