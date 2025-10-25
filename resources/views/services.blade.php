@extends('layouts.main')

@section('title', 'Our Services - Nathapam Global UK International Ltd | Comprehensive Visa Solutions')
@section('description', 'Explore our comprehensive visa services including US, Canada, Schengen, and UK visas. Professional consultation, document preparation, and application support with 90% success rate.')
@section('keywords', 'visa services, US visa, Canada visa, Schengen visa, UK visa, immigration services, visa consultation, document preparation, visa application')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-primary-600 via-primary-700 to-navy-800 text-white py-20 overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="absolute inset-0">
        <div class="absolute top-10 right-10 w-40 h-40 bg-accent-400 rounded-full opacity-10 animate-pulse"></div>
        <div class="absolute bottom-10 left-10 w-32 h-32 bg-secondary-400 rounded-full opacity-10 animate-bounce"></div>
        <div class="absolute top-1/3 right-1/4 w-20 h-20 bg-white rounded-full opacity-5 animate-ping"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 animate-fade-in-up">
                Our <span class="text-accent-400">Services</span>
            </h1>
            <p class="text-xl md:text-2xl mb-8 text-gray-200 animate-fade-in-up animation-delay-200">
                Comprehensive Visa Solutions for Your Global Journey
            </p>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 animate-fade-in-up animation-delay-400">
                <div class="bg-white/10 backdrop-blur-sm rounded-lg p-4">
                    <i class="fas fa-flag-usa text-3xl text-accent-400 mb-2"></i>
                    <div class="text-sm font-semibold">US Visas</div>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-lg p-4">
                    <i class="fas fa-maple-leaf text-3xl text-accent-400 mb-2"></i>
                    <div class="text-sm font-semibold">Canada Visas</div>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-lg p-4">
                    <i class="fas fa-star text-3xl text-accent-400 mb-2"></i>
                    <div class="text-sm font-semibold">Schengen Visas</div>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-lg p-4">
                    <i class="fas fa-crown text-3xl text-accent-400 mb-2"></i>
                    <div class="text-sm font-semibold">UK Visas</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Categories -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">
                    Visa <span class="text-primary-600">Categories</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Expert guidance for all types of visa applications
                </p>
            </div>
            
            <!-- US Visas -->
            <div class="mb-16" data-aos="fade-up">
                <div class="bg-gradient-to-r from-blue-50 to-blue-100 rounded-2xl p-8">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-flag-usa text-white text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-3xl font-bold text-gray-900">United States Visas</h3>
                            <p class="text-gray-600">Tourist, Business, Student, and Work Visas</p>
                        </div>
                    </div>
                    
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="bg-white rounded-lg p-6 shadow-md hover:shadow-lg transition-shadow">
                            <i class="fas fa-plane text-blue-600 text-2xl mb-3"></i>
                            <h4 class="font-bold text-gray-900 mb-2">B1/B2 Tourist</h4>
                            <p class="text-gray-600 text-sm mb-3">Tourism and business visits</p>
                            <div class="text-blue-600 font-semibold">From £299</div>
                        </div>
                        <div class="bg-white rounded-lg p-6 shadow-md hover:shadow-lg transition-shadow">
                            <i class="fas fa-graduation-cap text-blue-600 text-2xl mb-3"></i>
                            <h4 class="font-bold text-gray-900 mb-2">F1 Student</h4>
                            <p class="text-gray-600 text-sm mb-3">Academic studies</p>
                            <div class="text-blue-600 font-semibold">From £499</div>
                        </div>
                        <div class="bg-white rounded-lg p-6 shadow-md hover:shadow-lg transition-shadow">
                            <i class="fas fa-briefcase text-blue-600 text-2xl mb-3"></i>
                            <h4 class="font-bold text-gray-900 mb-2">H1B Work</h4>
                            <p class="text-gray-600 text-sm mb-3">Specialty occupations</p>
                            <div class="text-blue-600 font-semibold">From £799</div>
                        </div>
                        <div class="bg-white rounded-lg p-6 shadow-md hover:shadow-lg transition-shadow">
                            <i class="fas fa-heart text-blue-600 text-2xl mb-3"></i>
                            <h4 class="font-bold text-gray-900 mb-2">K1 Fiancé</h4>
                            <p class="text-gray-600 text-sm mb-3">Marriage-based visas</p>
                            <div class="text-blue-600 font-semibold">From £699</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Canada Visas -->
            <div class="mb-16" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-gradient-to-r from-red-50 to-red-100 rounded-2xl p-8">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-red-600 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-maple-leaf text-white text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-3xl font-bold text-gray-900">Canada Visas</h3>
                            <p class="text-gray-600">Visitor, Study, Work, and Permanent Residence</p>
                        </div>
                    </div>
                    
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="bg-white rounded-lg p-6 shadow-md hover:shadow-lg transition-shadow">
                            <i class="fas fa-passport text-red-600 text-2xl mb-3"></i>
                            <h4 class="font-bold text-gray-900 mb-2">Visitor Visa</h4>
                            <p class="text-gray-600 text-sm mb-3">Tourism and family visits</p>
                            <div class="text-red-600 font-semibold">From £199</div>
                        </div>
                        <div class="bg-white rounded-lg p-6 shadow-md hover:shadow-lg transition-shadow">
                            <i class="fas fa-university text-red-600 text-2xl mb-3"></i>
                            <h4 class="font-bold text-gray-900 mb-2">Study Permit</h4>
                            <p class="text-gray-600 text-sm mb-3">Educational programs</p>
                            <div class="text-red-600 font-semibold">From £399</div>
                        </div>
                        <div class="bg-white rounded-lg p-6 shadow-md hover:shadow-lg transition-shadow">
                            <i class="fas fa-tools text-red-600 text-2xl mb-3"></i>
                            <h4 class="font-bold text-gray-900 mb-2">Work Permit</h4>
                            <p class="text-gray-600 text-sm mb-3">Employment opportunities</p>
                            <div class="text-red-600 font-semibold">From £599</div>
                        </div>
                        <div class="bg-white rounded-lg p-6 shadow-md hover:shadow-lg transition-shadow">
                            <i class="fas fa-home text-red-600 text-2xl mb-3"></i>
                            <h4 class="font-bold text-gray-900 mb-2">Express Entry</h4>
                            <p class="text-gray-600 text-sm mb-3">Permanent residence</p>
                            <div class="text-red-600 font-semibold">From £999</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Schengen Visas -->
            <div class="mb-16" data-aos="fade-up" data-aos-delay="200">
                <div class="bg-gradient-to-r from-yellow-50 to-yellow-100 rounded-2xl p-8">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-yellow-600 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-star text-white text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-3xl font-bold text-gray-900">Schengen Visas</h3>
                            <p class="text-gray-600">Access to 26 European Countries</p>
                        </div>
                    </div>
                    
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="bg-white rounded-lg p-6 shadow-md hover:shadow-lg transition-shadow">
                            <i class="fas fa-camera text-yellow-600 text-2xl mb-3"></i>
                            <h4 class="font-bold text-gray-900 mb-2">Tourist Visa</h4>
                            <p class="text-gray-600 text-sm mb-3">Leisure and sightseeing</p>
                            <div class="text-yellow-600 font-semibold">From £149</div>
                        </div>
                        <div class="bg-white rounded-lg p-6 shadow-md hover:shadow-lg transition-shadow">
                            <i class="fas fa-handshake text-yellow-600 text-2xl mb-3"></i>
                            <h4 class="font-bold text-gray-900 mb-2">Business Visa</h4>
                            <p class="text-gray-600 text-sm mb-3">Meetings and conferences</p>
                            <div class="text-yellow-600 font-semibold">From £199</div>
                        </div>
                        <div class="bg-white rounded-lg p-6 shadow-md hover:shadow-lg transition-shadow">
                            <i class="fas fa-users text-yellow-600 text-2xl mb-3"></i>
                            <h4 class="font-bold text-gray-900 mb-2">Family Visit</h4>
                            <p class="text-gray-600 text-sm mb-3">Visiting relatives</p>
                            <div class="text-yellow-600 font-semibold">From £179</div>
                        </div>
                        <div class="bg-white rounded-lg p-6 shadow-md hover:shadow-lg transition-shadow">
                            <i class="fas fa-stethoscope text-yellow-600 text-2xl mb-3"></i>
                            <h4 class="font-bold text-gray-900 mb-2">Medical Visa</h4>
                            <p class="text-gray-600 text-sm mb-3">Medical treatment</p>
                            <div class="text-yellow-600 font-semibold">From £249</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- UK Visas -->
            <div class="mb-16" data-aos="fade-up" data-aos-delay="300">
                <div class="bg-gradient-to-r from-purple-50 to-purple-100 rounded-2xl p-8">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-purple-600 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-crown text-white text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-3xl font-bold text-gray-900">United Kingdom Visas</h3>
                            <p class="text-gray-600">Visit, Study, Work, and Settlement</p>
                        </div>
                    </div>
                    
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="bg-white rounded-lg p-6 shadow-md hover:shadow-lg transition-shadow">
                            <i class="fas fa-suitcase text-purple-600 text-2xl mb-3"></i>
                            <h4 class="font-bold text-gray-900 mb-2">Standard Visitor</h4>
                            <p class="text-gray-600 text-sm mb-3">Tourism and business</p>
                            <div class="text-purple-600 font-semibold">From £199</div>
                        </div>
                        <div class="bg-white rounded-lg p-6 shadow-md hover:shadow-lg transition-shadow">
                            <i class="fas fa-book text-purple-600 text-2xl mb-3"></i>
                            <h4 class="font-bold text-gray-900 mb-2">Student Visa</h4>
                            <p class="text-gray-600 text-sm mb-3">Academic courses</p>
                            <div class="text-purple-600 font-semibold">From £399</div>
                        </div>
                        <div class="bg-white rounded-lg p-6 shadow-md hover:shadow-lg transition-shadow">
                            <i class="fas fa-id-card text-purple-600 text-2xl mb-3"></i>
                            <h4 class="font-bold text-gray-900 mb-2">Skilled Worker</h4>
                            <p class="text-gray-600 text-sm mb-3">Employment-based</p>
                            <div class="text-purple-600 font-semibold">From £699</div>
                        </div>
                        <div class="bg-white rounded-lg p-6 shadow-md hover:shadow-lg transition-shadow">
                            <i class="fas fa-ring text-purple-600 text-2xl mb-3"></i>
                            <h4 class="font-bold text-gray-900 mb-2">Spouse Visa</h4>
                            <p class="text-gray-600 text-sm mb-3">Family reunification</p>
                            <div class="text-purple-600 font-semibold">From £799</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Application Process -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">
                    Our Application <span class="text-primary-600">Process</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Simple, transparent, and efficient visa application process
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="relative">
                        <div class="w-20 h-20 bg-primary-600 rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-white text-2xl font-bold">1</span>
                        </div>
                        <div class="hidden lg:block absolute top-10 left-full w-full h-0.5 bg-primary-200"></div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Initial Consultation</h3>
                    <p class="text-gray-600">Free assessment of your case and eligibility evaluation</p>
                </div>
                
                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="relative">
                        <div class="w-20 h-20 bg-accent-600 rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-white text-2xl font-bold">2</span>
                        </div>
                        <div class="hidden lg:block absolute top-10 left-full w-full h-0.5 bg-accent-200"></div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Document Preparation</h3>
                    <p class="text-gray-600">Comprehensive document checklist and preparation assistance</p>
                </div>
                
                <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="relative">
                        <div class="w-20 h-20 bg-secondary-600 rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-white text-2xl font-bold">3</span>
                        </div>
                        <div class="hidden lg:block absolute top-10 left-full w-full h-0.5 bg-secondary-200"></div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Application Submission</h3>
                    <p class="text-gray-600">Professional application filing and appointment booking</p>
                </div>
                
                <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-20 h-20 bg-navy-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-white text-2xl font-bold">4</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Follow-up & Support</h3>
                    <p class="text-gray-600">Continuous tracking and post-approval assistance</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Packages -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">
                    Service <span class="text-primary-600">Packages</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Choose the package that best fits your needs
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Basic Package -->
                <div class="bg-white border-2 border-gray-200 rounded-2xl p-8 hover:border-primary-300 transition-colors" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Basic Package</h3>
                        <div class="text-4xl font-bold text-primary-600 mb-2">£199</div>
                        <p class="text-gray-600">Perfect for straightforward applications</p>
                    </div>
                    
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center">
                            <i class="fas fa-check text-primary-600 mr-3"></i>
                            <span class="text-gray-700">Initial consultation</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-primary-600 mr-3"></i>
                            <span class="text-gray-700">Document checklist</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-primary-600 mr-3"></i>
                            <span class="text-gray-700">Application review</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-primary-600 mr-3"></i>
                            <span class="text-gray-700">Email support</span>
                        </li>
                    </ul>
                    
                    <a href="{{ route('contact') }}" class="block w-full bg-primary-600 hover:bg-primary-700 text-white text-center py-3 rounded-lg font-semibold transition-colors">
                        Choose Basic
                    </a>
                </div>
                
                <!-- Premium Package -->
                <div class="bg-white border-2 border-primary-500 rounded-2xl p-8 relative transform scale-105" data-aos="fade-up" data-aos-delay="200">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                        <span class="bg-primary-600 text-white px-4 py-2 rounded-full text-sm font-semibold">Most Popular</span>
                    </div>
                    
                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Premium Package</h3>
                        <div class="text-4xl font-bold text-primary-600 mb-2">£399</div>
                        <p class="text-gray-600">Comprehensive support and guidance</p>
                    </div>
                    
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center">
                            <i class="fas fa-check text-primary-600 mr-3"></i>
                            <span class="text-gray-700">Everything in Basic</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-primary-600 mr-3"></i>
                            <span class="text-gray-700">Document preparation</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-primary-600 mr-3"></i>
                            <span class="text-gray-700">Interview preparation</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-primary-600 mr-3"></i>
                            <span class="text-gray-700">Phone support</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-primary-600 mr-3"></i>
                            <span class="text-gray-700">Application tracking</span>
                        </li>
                    </ul>
                    
                    <a href="{{ route('contact') }}" class="block w-full bg-primary-600 hover:bg-primary-700 text-white text-center py-3 rounded-lg font-semibold transition-colors">
                        Choose Premium
                    </a>
                </div>
                
                <!-- VIP Package -->
                <div class="bg-white border-2 border-gray-200 rounded-2xl p-8 hover:border-accent-300 transition-colors" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">VIP Package</h3>
                        <div class="text-4xl font-bold text-accent-600 mb-2">£699</div>
                        <p class="text-gray-600">Complete white-glove service</p>
                    </div>
                    
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center">
                            <i class="fas fa-check text-accent-600 mr-3"></i>
                            <span class="text-gray-700">Everything in Premium</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-accent-600 mr-3"></i>
                            <span class="text-gray-700">Dedicated consultant</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-accent-600 mr-3"></i>
                            <span class="text-gray-700">Priority processing</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-accent-600 mr-3"></i>
                            <span class="text-gray-700">24/7 support</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-accent-600 mr-3"></i>
                            <span class="text-gray-700">Post-approval assistance</span>
                        </li>
                    </ul>
                    
                    <a href="{{ route('contact') }}" class="block w-full bg-accent-600 hover:bg-accent-700 text-white text-center py-3 rounded-lg font-semibold transition-colors">
                        Choose VIP
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Our Services -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">
                    Why Choose Our <span class="text-primary-600">Services</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Experience the difference with our professional approach
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-chart-line text-primary-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">90% Success Rate</h3>
                    <p class="text-gray-600">Industry-leading approval rates backed by expertise and experience.</p>
                </div>
                
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-accent-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-clock text-accent-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Fast Processing</h3>
                    <p class="text-gray-600">Streamlined processes to minimize waiting times and expedite applications.</p>
                </div>
                
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-secondary-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-shield-alt text-secondary-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Secure & Confidential</h3>
                    <p class="text-gray-600">Your personal information is protected with bank-level security measures.</p>
                </div>
                
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-16 h-16 bg-navy-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-users text-navy-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Expert Team</h3>
                    <p class="text-gray-600">ICCRC certified consultants with years of immigration experience.</p>
                </div>
                
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow" data-aos="fade-up" data-aos-delay="500">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-headset text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">24/7 Support</h3>
                    <p class="text-gray-600">Round-the-clock assistance whenever you need help or have questions.</p>
                </div>
                
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow" data-aos="fade-up" data-aos-delay="600">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-money-bill-wave text-orange-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Transparent Pricing</h3>
                    <p class="text-gray-600">No hidden fees. Clear, upfront pricing for all our services.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-20 bg-gradient-to-r from-primary-600 to-navy-700 text-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
            <h2 class="text-4xl font-bold mb-6">Ready to Start Your Visa Application?</h2>
            <p class="text-xl mb-8 text-gray-200">
                Get expert guidance and increase your chances of visa approval with our professional services.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="bg-accent-500 hover:bg-accent-600 text-white px-8 py-4 rounded-lg font-semibold transition-colors duration-300 inline-flex items-center justify-center">
                    <i class="fas fa-phone mr-2"></i>
                    Get Free Consultation
                </a>
                <a href="{{ route('apply-now') }}" class="bg-white/10 hover:bg-white/20 text-white border-2 border-white/30 px-8 py-4 rounded-lg font-semibold transition-colors duration-300 inline-flex items-center justify-center">
                    <i class="fas fa-arrow-right mr-2"></i>
                    Apply Now
                </a>
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