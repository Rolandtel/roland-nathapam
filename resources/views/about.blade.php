@extends('layouts.main')

@section('title', 'About Us - Nathapam Global UK International Ltd | Expert Visa Consultants')
@section('description', 'Learn about Nathapam Global UK International Ltd - your trusted visa consultancy with 10+ years of experience, 90% success rate, and expert team dedicated to making your immigration dreams come true.')
@section('keywords', 'about nathapam global, visa consultancy company, immigration experts, visa success stories, professional visa services, UK visa consultants')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-600 via-blue-700 to-slate-800 text-white overflow-hidden py-4">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0">
        <!-- Grid Pattern -->
        <div class="absolute inset-0 bg-grid-pattern opacity-10"></div>
        
        <!-- Floating Elements -->
        <div class="absolute top-20 left-20 w-32 h-32 bg-sky-400/20 rounded-full blur-xl animate-float"></div>
        <div class="absolute bottom-32 right-32 w-24 h-24 bg-yellow-400/20 rounded-full blur-lg animate-float-delayed"></div>
        <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-white/10 rounded-full blur-md animate-pulse-slow"></div>
        <div class="absolute top-1/3 right-1/4 w-20 h-20 bg-sky-300/15 rounded-full blur-lg animate-float-reverse"></div>
        
        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/50 via-transparent to-transparent"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-5xl mx-auto text-center">
            <!-- Section Badge -->
            <div class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full text-sm font-medium mb-8 animate-fade-in-up">
                <svg class="w-4 h-4 mr-2 text-sky-400" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4zM18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"/>
                </svg>
                About Our Company
            </div>
            
            <h1 class="text-6xl md:text-7xl lg:text-8xl font-bold mb-8 animate-fade-in-up animation-delay-200">
                About <span class="text-transparent bg-clip-text bg-gradient-to-r from-sky-400 to-sky-300">Nathapam</span>
                <br class="hidden md:block">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-blue-300">Global</span>
            </h1>
            
            <p class="text-xl md:text-2xl lg:text-3xl mb-12 text-gray-200 max-w-4xl mx-auto leading-relaxed animate-fade-in-up animation-delay-400">
                Your Trusted Partner in Global Immigration Solutions
            </p>
            
            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto mb-12 animate-fade-in-up animation-delay-600">
                <div class="group bg-white/10 backdrop-blur-md rounded-2xl p-6 border border-white/20 hover:bg-white/15 transition-all duration-300 hover:scale-105">
                    <div class="text-4xl md:text-5xl font-bold text-sky-400 mb-2 group-hover:scale-110 transition-transform duration-300">10+</div>
                    <div class="text-gray-200 font-medium">Years Experience</div>
                    <div class="w-full h-1 bg-gradient-to-r from-sky-400 to-sky-300 rounded-full mt-3 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
                </div>
                <div class="group bg-white/10 backdrop-blur-md rounded-2xl p-6 border border-white/20 hover:bg-white/15 transition-all duration-300 hover:scale-105">
                    <div class="text-4xl md:text-5xl font-bold text-yellow-400 mb-2 group-hover:scale-110 transition-transform duration-300">5000+</div>
                    <div class="text-gray-200 font-medium">Visas Processed</div>
                    <div class="w-full h-1 bg-gradient-to-r from-yellow-400 to-yellow-300 rounded-full mt-3 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
                </div>
                <div class="group bg-white/10 backdrop-blur-md rounded-2xl p-6 border border-white/20 hover:bg-white/15 transition-all duration-300 hover:scale-105">
                    <div class="text-4xl md:text-5xl font-bold text-blue-300 mb-2 group-hover:scale-110 transition-transform duration-300">90%</div>
                    <div class="text-gray-200 font-medium">Success Rate</div>
                    <div class="w-full h-1 bg-gradient-to-r from-blue-300 to-blue-200 rounded-full mt-3 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
                </div>
            </div>
            
            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center animate-fade-in-up animation-delay-800">
                <a href="#story" class="group bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white px-8 py-4 rounded-xl font-semibold transition-all duration-300 inline-flex items-center justify-center shadow-lg hover:shadow-xl hover:scale-105">
                    <svg class="w-5 h-5 mr-2 group-hover:rotate-12 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    Our Story
                </a>
                <a href="#team" class="group bg-white/10 hover:bg-white/20 text-white border-2 border-white/30 hover:border-white/50 px-8 py-4 rounded-xl font-semibold transition-all duration-300 inline-flex items-center justify-center backdrop-blur-sm hover:scale-105">
                    <svg class="w-5 h-5 mr-2 group-hover:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                    </svg>
                    Meet Our Team
                </a>
            </div>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <div class="w-6 h-10 border-2 border-white/30 rounded-full flex justify-center">
            <div class="w-1 h-3 bg-white/60 rounded-full mt-2 animate-pulse"></div>
        </div>
    </div>
</section>

<!-- Company Story Section -->
<section id="story" class="py-24 bg-white relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute top-20 right-20 w-64 h-64 bg-blue-50 rounded-full blur-3xl opacity-60"></div>
        <div class="absolute bottom-20 left-20 w-48 h-48 bg-sky-50 rounded-full blur-2xl opacity-40"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="space-y-8" data-aos="fade-right">
                    <!-- Section Badge -->
                    <div class="inline-flex items-center px-4 py-2 bg-blue-50 rounded-full text-sm font-medium text-blue-700">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                        </svg>
                        Our Journey
                    </div>

                    <h2 class="text-5xl md:text-6xl font-bold text-gray-900 leading-tight">
                        Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-blue-400">Story</span>
                    </h2>
                    
                    <div class="space-y-6">
                        <p class="text-xl text-gray-700 leading-relaxed">
                            Founded with a vision to bridge dreams and destinations, Nathapam Global UK International Ltd has been at the forefront of immigration consultancy for over a decade. What started as a small consultancy firm has grown into a trusted global partner for thousands of individuals and families seeking new opportunities abroad.
                        </p>
                        <p class="text-lg text-gray-600 leading-relaxed">
                            Our journey began with a simple belief: everyone deserves the chance to pursue their dreams, regardless of geographical boundaries. Today, we stand proud as one of the leading visa consultancy firms, with a proven track record of success and a commitment to excellence that sets us apart.
                        </p>
                    </div>
                    
                    <!-- Achievement Badge -->
                    <div class="flex items-center space-x-4 p-6 bg-gradient-to-r from-blue-50 to-yellow-50 rounded-2xl border border-blue-100">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-gray-900">Certified Excellence</h4>
                            <p class="text-gray-600">ICCRC registered and government approved</p>
                        </div>
                    </div>
                </div>
                
                <div class="relative" data-aos="fade-left">
                    <!-- Main Stats Card -->
                    <div class="bg-gradient-to-br from-white to-gray-50 rounded-3xl p-8 shadow-2xl border border-gray-100 relative overflow-hidden">
                        <!-- Background Pattern -->
                        <div class="absolute inset-0 bg-grid-pattern opacity-5"></div>
                        
                        <div class="relative z-10">
                            <h3 class="text-2xl font-bold text-gray-900 mb-8 text-center">Our Impact</h3>
                            
                            <div class="grid grid-cols-2 gap-6">
                                <div class="text-center group">
                                    <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <h4 class="text-lg font-bold text-gray-900">Global Reach</h4>
                                    <p class="text-3xl font-bold text-blue-600 mb-1">50+</p>
                                    <p class="text-sm text-gray-600">Countries</p>
                                </div>
                                
                                <div class="text-center group">
                                    <div class="w-20 h-20 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                    </div>
                                    <h4 class="text-lg font-bold text-gray-900">Expert Team</h4>
                                    <p class="text-3xl font-bold text-yellow-600 mb-1">25+</p>
                                    <p class="text-sm text-gray-600">Specialists</p>
                                </div>
                                
                                <div class="text-center group">
                                    <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <h4 class="text-lg font-bold text-gray-900">24/7 Support</h4>
                                    <p class="text-3xl font-bold text-green-600 mb-1">365</p>
                                    <p class="text-sm text-gray-600">Days Available</p>
                                </div>
                                
                                <div class="text-center group">
                                    <div class="w-20 h-20 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <h4 class="text-lg font-bold text-gray-900">Secure Process</h4>
                                    <p class="text-3xl font-bold text-indigo-600 mb-1">100%</p>
                                    <p class="text-sm text-gray-600">Confidential</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision Section -->
<section class="py-24 bg-gradient-to-br from-gray-50 to-gray-100 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute top-32 left-32 w-72 h-72 bg-green-100 rounded-full blur-3xl opacity-50"></div>
        <div class="absolute bottom-32 right-32 w-56 h-56 bg-yellow-100 rounded-full blur-2xl opacity-60"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-7xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-20" data-aos="fade-up">
                <div class="inline-flex items-center px-4 py-2 bg-blue-50 rounded-full text-sm font-medium text-blue-700 mb-6">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                    </svg>
                    Mission & Vision
                </div>
                <h2 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                    Our Mission & <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-blue-400">Vision</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                    Driven by purpose, guided by excellence, and committed to your success
                </p>
            </div>
            
            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Mission Card -->
                <div class="group bg-white rounded-3xl p-10 shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-100 relative overflow-hidden" data-aos="fade-up" data-aos-delay="100">
                    <!-- Background Pattern -->
                    <div class="absolute inset-0 bg-grid-pattern opacity-5"></div>
                    
                    <div class="relative z-10">
                        <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mb-8 shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 2L3 7v11a1 1 0 001 1h12a1 1 0 001-1V7l-7-5zM8 15v-3a1 1 0 011-1h2a1 1 0 011 1v3H8z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <h3 class="text-3xl font-bold text-gray-900 mb-6">Our Mission</h3>
                        <p class="text-lg text-gray-700 leading-relaxed mb-8">
                            To provide comprehensive, reliable, and personalized immigration solutions that transform dreams into reality. We are committed to delivering exceptional service with integrity, transparency, and unwavering dedication to our clients' success.
                        </p>
                        <ul class="space-y-4">
                            <li class="flex items-center text-gray-700 group/item">
                                <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-4 group-hover/item:bg-blue-500 transition-colors duration-300">
                                    <svg class="w-4 h-4 text-blue-600 group-hover/item:text-white transition-colors duration-300" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <span class="font-medium">Personalized consultation for every client</span>
                            </li>
                            <li class="flex items-center text-gray-700 group/item">
                                <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-4 group-hover/item:bg-blue-500 transition-colors duration-300">
                                    <svg class="w-4 h-4 text-blue-600 group-hover/item:text-white transition-colors duration-300" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <span class="font-medium">Transparent and honest communication</span>
                            </li>
                            <li class="flex items-center text-gray-700 group/item">
                                <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-4 group-hover/item:bg-blue-500 transition-colors duration-300">
                                    <svg class="w-4 h-4 text-blue-600 group-hover/item:text-white transition-colors duration-300" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <span class="font-medium">Continuous support throughout the process</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Vision Card -->
                <div class="group bg-white rounded-3xl p-10 shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-100 relative overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                    <!-- Background Pattern -->
                    <div class="absolute inset-0 bg-grid-pattern opacity-5"></div>
                    
                    <div class="relative z-10">
                        <div class="w-20 h-20 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-2xl flex items-center justify-center mb-8 shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        </div>
                        <h3 class="text-3xl font-bold text-gray-900 mb-6">Our Vision</h3>
                        <p class="text-lg text-gray-700 leading-relaxed mb-8">
                            To be the world's most trusted immigration consultancy, recognized for our expertise, innovation, and commitment to client success. We envision a world where geographical boundaries don't limit opportunities and dreams.
                        </p>
                        <ul class="space-y-4">
                            <li class="flex items-center text-gray-700 group/item">
                                <div class="w-8 h-8 bg-yellow-100 rounded-full flex items-center justify-center mr-4 group-hover/item:bg-yellow-500 transition-colors duration-300">
                                    <svg class="w-4 h-4 text-yellow-600 group-hover/item:text-white transition-colors duration-300" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <span class="font-medium">Global leadership in immigration services</span>
                            </li>
                            <li class="flex items-center text-gray-700 group/item">
                                <div class="w-8 h-8 bg-yellow-100 rounded-full flex items-center justify-center mr-4 group-hover/item:bg-yellow-500 transition-colors duration-300">
                                    <svg class="w-4 h-4 text-yellow-600 group-hover/item:text-white transition-colors duration-300" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <span class="font-medium">Innovation in service delivery</span>
                            </li>
                            <li class="flex items-center text-gray-700 group/item">
                                <div class="w-8 h-8 bg-yellow-100 rounded-full flex items-center justify-center mr-4 group-hover/item:bg-yellow-500 transition-colors duration-300">
                                    <svg class="w-4 h-4 text-yellow-600 group-hover/item:text-white transition-colors duration-300" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <span class="font-medium">Empowering global mobility</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Core Values Section -->
<section class="py-24 bg-white relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute top-20 left-20 w-80 h-80 bg-blue-50 rounded-full blur-3xl opacity-40"></div>
        <div class="absolute bottom-20 right-20 w-64 h-64 bg-yellow-50 rounded-full blur-2xl opacity-50"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-7xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-20" data-aos="fade-up">
                <div class="inline-flex items-center px-4 py-2 bg-blue-50 rounded-full text-sm font-medium text-blue-700 mb-6">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"/>
                    </svg>
                    Core Values
                </div>
                <h2 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                    Our Core <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-blue-400">Values</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                    The principles that guide everything we do
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Integrity -->
                <div class="group text-center bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-24 h-24 bg-gradient-to-br from-primary-100 to-primary-200 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-gradient-to-br group-hover:from-primary-500 group-hover:to-primary-600 transition-all duration-300 shadow-lg">
                        <i class="fas fa-handshake text-primary-600 group-hover:text-white text-3xl transition-colors duration-300"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Integrity</h3>
                    <p class="text-gray-600 leading-relaxed">We maintain the highest ethical standards in all our interactions and services.</p>
                    <div class="w-full h-1 bg-gradient-to-r from-primary-400 to-primary-300 rounded-full mt-6 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
                </div>
                
                <!-- Excellence -->
                <div class="group text-center bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-24 h-24 bg-gradient-to-br from-accent-100 to-accent-200 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-gradient-to-br group-hover:from-accent-500 group-hover:to-accent-600 transition-all duration-300 shadow-lg">
                        <i class="fas fa-star text-accent-600 group-hover:text-white text-3xl transition-colors duration-300"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Excellence</h3>
                    <p class="text-gray-600 leading-relaxed">We strive for perfection in every aspect of our service delivery.</p>
                    <div class="w-full h-1 bg-gradient-to-r from-accent-400 to-accent-300 rounded-full mt-6 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
                </div>
                
                <!-- Innovation -->
                <div class="group text-center bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-24 h-24 bg-gradient-to-br from-secondary-100 to-secondary-200 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-gradient-to-br group-hover:from-secondary-500 group-hover:to-secondary-600 transition-all duration-300 shadow-lg">
                        <i class="fas fa-lightbulb text-secondary-600 group-hover:text-white text-3xl transition-colors duration-300"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Innovation</h3>
                    <p class="text-gray-600 leading-relaxed">We continuously evolve our processes to provide better solutions.</p>
                    <div class="w-full h-1 bg-gradient-to-r from-secondary-400 to-secondary-300 rounded-full mt-6 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
                </div>
                
                <!-- Compassion -->
                <div class="group text-center bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-24 h-24 bg-gradient-to-br from-navy-100 to-navy-200 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-gradient-to-br group-hover:from-navy-500 group-hover:to-navy-600 transition-all duration-300 shadow-lg">
                        <i class="fas fa-heart text-navy-600 group-hover:text-white text-3xl transition-colors duration-300"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Compassion</h3>
                    <p class="text-gray-600 leading-relaxed">We understand the emotional journey and provide empathetic support.</p>
                    <div class="w-full h-1 bg-gradient-to-r from-navy-400 to-navy-300 rounded-full mt-6 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section id="team" class="py-24 bg-gradient-to-br from-gray-50 to-gray-100 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute top-32 right-32 w-96 h-96 bg-primary-100 rounded-full blur-3xl opacity-30"></div>
        <div class="absolute bottom-32 left-32 w-72 h-72 bg-accent-100 rounded-full blur-2xl opacity-40"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-7xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-20" data-aos="fade-up">
                <div class="inline-flex items-center px-4 py-2 bg-primary-50 rounded-full text-sm font-medium text-primary-700 mb-6">
                    <i class="fas fa-users mr-2"></i>
                    Our Team
                </div>
                <h2 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                    Meet Our Expert <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-yellow-400">Team</span>

                </h2>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                    Experienced professionals dedicated to your immigration success
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                <!-- Team Member 1 -->
                <div class="group bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 text-center border border-gray-100 relative overflow-hidden" data-aos="fade-up" data-aos-delay="100">
                    <!-- Background Pattern -->
                    <div class="absolute inset-0 bg-grid-pattern opacity-5"></div>
                    
                    <div class="relative z-10">
                        <div class="w-32 h-32 bg-gradient-to-br from-primary-400 to-primary-600 rounded-full flex items-center justify-center mx-auto mb-6 shadow-xl group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-user text-white text-4xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Sarah Johnson</h3>
                        <p class="text-primary-600 font-semibold mb-4 text-lg">Managing Director & Senior Consultant</p>
                        <p class="text-gray-600 mb-6 leading-relaxed">ICCRC Certified with 12+ years of experience in immigration law and visa processing.</p>
                        <div class="flex flex-wrap justify-center gap-2">
                            <span class="px-4 py-2 bg-primary-100 text-primary-700 rounded-full text-sm font-medium">US Visas</span>
                            <span class="px-4 py-2 bg-accent-100 text-accent-700 rounded-full text-sm font-medium">Canada PR</span>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 2 -->
                <div class="group bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 text-center border border-gray-100 relative overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                    <!-- Background Pattern -->
                    <div class="absolute inset-0 bg-grid-pattern opacity-5"></div>
                    
                    <div class="relative z-10">
                        <div class="w-32 h-32 bg-gradient-to-br from-accent-400 to-accent-600 rounded-full flex items-center justify-center mx-auto mb-6 shadow-xl group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-user text-white text-4xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Michael Chen</h3>
                        <p class="text-yellow-600 font-semibold mb-4 text-lg">Senior Immigration Advisor</p>
                        <p class="text-gray-600 mb-6 leading-relaxed">Specialized in European visa applications with extensive knowledge of Schengen requirements.</p>
                        <div class="flex flex-wrap justify-center gap-2">
                            <span class="px-4 py-2 bg-yellow-100 text-yellow-700 rounded-full text-sm font-medium">Schengen</span>
                            <span class="px-4 py-2 bg-green-100 text-green-700 rounded-full text-sm font-medium">UK Visas</span>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 3 -->
                <div class="group bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 text-center border border-gray-100 relative overflow-hidden" data-aos="fade-up" data-aos-delay="300">
                    <!-- Background Pattern -->
                    <div class="absolute inset-0 bg-grid-pattern opacity-5"></div>
                    
                    <div class="relative z-10">
                        <div class="w-32 h-32 bg-gradient-to-br from-green-400 to-green-600 rounded-full flex items-center justify-center mx-auto mb-6 shadow-xl group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Priya Sharma</h3>
                        <p class="text-green-600 font-semibold mb-4 text-lg">Documentation Specialist</p>
                        <p class="text-gray-600 mb-6 leading-relaxed">Expert in document preparation and verification with meticulous attention to detail.</p>
                        <div class="flex flex-wrap justify-center gap-2">
                            <span class="px-4 py-2 bg-green-100 text-green-700 rounded-full text-sm font-medium">Documents</span>
                            <span class="px-4 py-2 bg-indigo-100 text-indigo-700 rounded-full text-sm font-medium">Compliance</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Certifications & Achievements -->
<section class="py-24 bg-white relative overflow-hidden hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute top-20 left-20 w-80 h-80 bg-blue-50 rounded-full blur-3xl opacity-40"></div>
        <div class="absolute bottom-20 right-20 w-64 h-64 bg-yellow-50 rounded-full blur-2xl opacity-50"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-7xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-20" data-aos="fade-up">
                <div class="inline-flex items-center px-4 py-2 bg-blue-50 rounded-full text-sm font-medium text-blue-700">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L3 9v12h6v-7h6v7h6V9l-9-7z"/>
                    </svg>
                    Certifications & Achievements
                </div>
                <h2 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                    Certifications & <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-blue-400">Achievements</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                    Recognized excellence and professional credentials
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- ICCRC Certified -->                <div class="group text-center bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-24 h-24 bg-gradient-to-br from-blue-100 to-blue-200 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-gradient-to-br group-hover:from-blue-500 group-hover:to-blue-600 transition-all duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-blue-600 group-hover:text-white transition-colors duration-300" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2L3 9v12h6v-7h6v7h6V9l-9-7z"/>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-3">ICCRC Certified</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">Immigration Consultants of Canada Regulatory Council</p>
                    <div class="w-full h-1 bg-gradient-to-r from-blue-400 to-blue-300 rounded-full mt-6 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
                </div>
                
                <!-- ISO 9001:2015 -->
                <div class="group text-center bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-24 h-24 bg-gradient-to-br from-yellow-100 to-yellow-200 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-gradient-to-br group-hover:from-yellow-500 group-hover:to-yellow-600 transition-all duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-yellow-600 group-hover:text-white transition-colors duration-300" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-3">ISO 9001:2015</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">Quality Management System Certified</p>
                    <div class="w-full h-1 bg-gradient-to-r from-yellow-400 to-yellow-300 rounded-full mt-6 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
                </div>
                
                <!-- Government Approved -->
                <div class="group text-center bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-24 h-24 bg-gradient-to-br from-green-100 to-green-200 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-gradient-to-br group-hover:from-green-500 group-hover:to-green-600 transition-all duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-green-600 group-hover:text-white transition-colors duration-300" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M12,7C13.4,7 14.8,8.6 14.8,10V11H16V16H8V11H9.2V10C9.2,8.6 10.6,7 12,7M12,8.2C11.2,8.2 10.4,8.7 10.4,10V11H13.6V10C13.6,8.7 12.8,8.2 12,8.2Z"/>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-3">Government Approved</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">Licensed Immigration Consultancy</p>
                    <div class="w-full h-1 bg-gradient-to-r from-green-400 to-green-300 rounded-full mt-6 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
                </div>
                
                <!-- Excellence Award -->
                <div class="group text-center bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-24 h-24 bg-gradient-to-br from-indigo-100 to-indigo-200 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-gradient-to-br group-hover:from-indigo-500 group-hover:to-indigo-600 transition-all duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-indigo-600 group-hover:text-white transition-colors duration-300" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M5,16L3,5L8.5,12L12,4L15.5,12L21,5L19,16H5M12,20A2,2 0 0,1 14,22H10A2,2 0 0,1 12,20Z"/>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-3">Excellence Award</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">Best Immigration Consultancy 2023</p>
                    <div class="w-full h-1 bg-gradient-to-r from-indigo-400 to-indigo-300 rounded-full mt-6 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-24 bg-gradient-to-br from-blue-600 via-blue-700 to-indigo-800 text-white relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-grid-pattern opacity-10"></div>
        <div class="absolute top-20 left-20 w-64 h-64 bg-yellow-400/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 right-20 w-48 h-48 bg-green-400/20 rounded-full blur-2xl"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-white/5 rounded-full blur-3xl"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-5xl mx-auto text-center" data-aos="fade-up">
            <!-- Section Badge -->
            <div class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full text-sm font-medium mb-8">
                <svg class="w-4 h-4 mr-2 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                </svg>
                Ready to Begin?
            </div>
            
            <h2 class="text-5xl md:text-6xl font-bold mb-8 leading-tight">
                Ready to Start Your <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-300">Journey?</span>
            </h2>
            
            <p class="text-xl md:text-2xl mb-12 text-gray-200 max-w-4xl mx-auto leading-relaxed">
                Let our experienced team guide you through your immigration process with confidence and expertise.
            </p>
            
            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-6 justify-center mb-12">
                <a href="{{ route('contact') }}" class="group bg-gradient-to-r from-yellow-500 to-yellow-600 hover:from-yellow-600 hover:to-yellow-700 text-white px-10 py-5 rounded-2xl font-bold text-lg transition-all duration-300 inline-flex items-center justify-center shadow-xl hover:shadow-2xl hover:scale-105">
                    <svg class="w-5 h-5 mr-3 group-hover:rotate-12 transition-transform duration-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z"/>
                    </svg>
                    Get Free Consultation
                </a>
                <a href="{{ route('services') }}" class="group bg-white/10 hover:bg-white/20 text-white border-2 border-white/30 hover:border-white/50 px-10 py-5 rounded-2xl font-bold text-lg transition-all duration-300 inline-flex items-center justify-center backdrop-blur-sm hover:scale-105">
                    <svg class="w-5 h-5 mr-3 group-hover:translate-x-1 transition-transform duration-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"/>
                    </svg>
                    View Our Services
                </a>
            </div>
            
            <!-- Trust Indicators -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto">
                <div class="flex items-center justify-center space-x-3 text-gray-300">
                    <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z"/>
                        </svg>
                    </div>
                    <span class="font-medium">100% Secure Process</span>
                </div>
                <div class="flex items-center justify-center space-x-3 text-gray-300">
                    <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-green-400" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22C6.47,22 2,17.5 2,12A10,10 0 0,1 12,2M12.5,7V12.25L17,14.92L16.25,16.15L11,13V7H12.5Z"/>
                        </svg>
                    </div>
                    <span class="font-medium">24/7 Support</span>
                </div>
                <div class="flex items-center justify-center space-x-3 text-gray-300">
                    <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-blue-300" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M5,16L3,5L8.5,12L12,4L15.5,12L21,5L19,16H5M12,20A2,2 0 0,1 14,22H10A2,2 0 0,1 12,20Z"/>
                        </svg>
                    </div>
                    <span class="font-medium">90% Success Rate</span>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
@keyframes fade-in-up {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fade-in-up {
    animation: fade-in-up 0.8s ease-out forwards;
}

.animation-delay-200 {
    animation-delay: 0.2s;
}

.animation-delay-400 {
    animation-delay: 0.4s;
}
</style>
@endsection
