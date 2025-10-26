@extends('layouts.main')

@section('title', 'Our Services - Nathapam Global UK International Ltd | Comprehensive Visa Solutions')
@section('description', 'Explore our comprehensive visa services including US, Canada, Schengen, and UK visas. Professional consultation, document preparation, and application support with 90% success rate.')
@section('keywords', 'visa services, US visa, Canada visa, Schengen visa, UK visa, immigration services, visa consultation, document preparation, visa application')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-blue-600 via-blue-700 to-indigo-800 text-white py-24 overflow-hidden">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0">
        <!-- Grid Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="grid grid-cols-12 h-full">
                <div class="border-r border-white/20"></div>
                <div class="border-r border-white/20"></div>
                <div class="border-r border-white/20"></div>
                <div class="border-r border-white/20"></div>
                <div class="border-r border-white/20"></div>
                <div class="border-r border-white/20"></div>
                <div class="border-r border-white/20"></div>
                <div class="border-r border-white/20"></div>
                <div class="border-r border-white/20"></div>
                <div class="border-r border-white/20"></div>
                <div class="border-r border-white/20"></div>
                <div class="border-r border-white/20"></div>
            </div>
        </div>
        
        <!-- Floating Elements -->
        <div class="absolute top-20 right-20 w-32 h-32 bg-yellow-400/20 rounded-full animate-float"></div>
        <div class="absolute bottom-20 left-20 w-24 h-24 bg-green-400/20 rounded-full animate-float-delayed"></div>
        <div class="absolute top-1/3 right-1/4 w-16 h-16 bg-white/10 rounded-full animate-pulse"></div>
        <div class="absolute bottom-1/3 left-1/4 w-20 h-20 bg-yellow-300/15 rounded-full animate-bounce"></div>
        
        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-t from-indigo-900/50 to-transparent"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-5xl mx-auto text-center">
            <!-- Section Badge -->
            <div class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full text-sm font-medium mb-6 animate-fade-in-up">
                <svg class="w-4 h-4 mr-2 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z" clip-rule="evenodd"/>
                </svg>
                Professional Visa Services
            </div>
            
            <h1 class="text-5xl md:text-7xl font-bold mb-6 animate-fade-in-up animation-delay-200">
                Our <span class="text-yellow-400 relative">
                    Services
                    <div class="absolute -bottom-2 left-0 w-full h-1 bg-yellow-400/30 rounded-full"></div>
                </span>
            </h1>
            
            <p class="text-xl md:text-2xl mb-12 text-gray-200 max-w-3xl mx-auto animate-fade-in-up animation-delay-400">
                Comprehensive visa solutions tailored to your global journey. Expert guidance, transparent process, and proven success rates.
            </p>
            
            <!-- Service Categories Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-12 animate-fade-in-up animation-delay-600">
                <div class="group bg-white/10 backdrop-blur-sm rounded-xl p-6 hover:bg-white/20 transition-all duration-300 hover:scale-105">
                    <div class="w-16 h-16 bg-blue-500/20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-blue-500/30 transition-colors">
                        <svg class="w-8 h-8 text-blue-300" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div class="text-sm font-semibold text-white">US Visas</div>
                    <div class="text-xs text-gray-300 mt-1">Tourist • Business • Student</div>
                </div>
                
                <div class="group bg-white/10 backdrop-blur-sm rounded-xl p-6 hover:bg-white/20 transition-all duration-300 hover:scale-105">
                    <div class="w-16 h-16 bg-red-500/20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-red-500/30 transition-colors">
                        <svg class="w-8 h-8 text-red-300" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <div class="text-sm font-semibold text-white">Canada Visas</div>
                    <div class="text-xs text-gray-300 mt-1">Visitor • Study • Work</div>
                </div>
                
                <div class="group bg-white/10 backdrop-blur-sm rounded-xl p-6 hover:bg-white/20 transition-all duration-300 hover:scale-105">
                    <div class="w-16 h-16 bg-yellow-500/20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-yellow-500/30 transition-colors">
                        <svg class="w-8 h-8 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <div class="text-sm font-semibold text-white">Schengen Visas</div>
                    <div class="text-xs text-gray-300 mt-1">26 European Countries</div>
                </div>
                
                <div class="group bg-white/10 backdrop-blur-sm rounded-xl p-6 hover:bg-white/20 transition-all duration-300 hover:scale-105">
                    <div class="w-16 h-16 bg-purple-500/20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-purple-500/30 transition-colors">
                        <svg class="w-8 h-8 text-purple-300" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div class="text-sm font-semibold text-white">UK Visas</div>
                    <div class="text-xs text-gray-300 mt-1">Visit • Study • Work</div>
                </div>
            </div>
            
            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center animate-fade-in-up animation-delay-800">
                <a href="{{ route('contact') }}" class="group bg-yellow-500 hover:bg-yellow-600 text-white px-8 py-4 rounded-xl font-semibold transition-all duration-300 inline-flex items-center justify-center hover:scale-105 hover:shadow-xl">
                    <svg class="w-5 h-5 mr-2 group-hover:animate-pulse" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                    </svg>
                    Get Free Consultation
                </a>
                <a href="{{ route('apply-now') }}" class="group bg-white/10 hover:bg-white/20 text-white border-2 border-white/30 hover:border-white/50 px-8 py-4 rounded-xl font-semibold transition-all duration-300 inline-flex items-center justify-center hover:scale-105">
                    <svg class="w-5 h-5 mr-2 group-hover:translate-x-1 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                    Start Application
                </a>
            </div>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <div class="w-6 h-10 border-2 border-white/30 rounded-full flex justify-center">
            <div class="w-1 h-3 bg-white/50 rounded-full mt-2 animate-pulse"></div>
        </div>
    </div>
</section>

<!-- Service Categories -->
<section class="py-24 bg-white relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-bl from-blue-50 to-transparent rounded-full -translate-y-48 translate-x-48"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-gradient-to-tr from-yellow-50 to-transparent rounded-full translate-y-48 -translate-x-48"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-7xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-20" data-aos="fade-up">
                <div class="inline-flex items-center px-4 py-2 bg-blue-100 text-blue-700 rounded-full text-sm font-medium mb-6">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clip-rule="evenodd"/>
                    </svg>
                    Visa Categories
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Expert Guidance for <span class="text-blue-600 relative">
                        All Visa Types
                        <div class="absolute -bottom-2 left-0 w-full h-1 bg-blue-200 rounded-full"></div>
                    </span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    From tourist visas to permanent residence, we provide comprehensive support for every type of visa application
                </p>
            </div>
            
            <!-- US Visas -->
            <div class="mb-20" data-aos="fade-up">
                <div class="bg-gradient-to-br from-blue-50 via-blue-50 to-blue-100 rounded-3xl p-8 md:p-12 relative overflow-hidden">
                    <!-- Background Pattern -->
                    <div class="absolute top-0 right-0 w-64 h-64 opacity-5">
                        <svg viewBox="0 0 100 100" class="w-full h-full">
                            <defs>
                                <pattern id="us-pattern" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                    <circle cx="10" cy="10" r="2" fill="currentColor"/>
                                </pattern>
                            </defs>
                            <rect width="100" height="100" fill="url(#us-pattern)"/>
                        </svg>
                    </div>
                    
                    <div class="flex flex-col md:flex-row items-start md:items-center mb-8 relative z-10">
                        <div class="flex items-center mb-4 md:mb-0">
                            <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mr-6 shadow-lg">
                                <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">United States Visas</h3>
                                <p class="text-gray-600 text-lg">Tourist, Business, Student, and Work Visas</p>
                            </div>
                        </div>
                        <div class="ml-auto">
                            <div class="bg-blue-600 text-white px-4 py-2 rounded-full text-sm font-semibold">
                                Most Popular
                            </div>
                        </div>
                    </div>
                    
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 relative z-10">
                        <div class="group bg-white rounded-2xl p-6 shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                            <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-4 group-hover:bg-blue-200 transition-colors">
                                <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-2 text-lg">B1/B2 Tourist</h4>
                            <p class="text-gray-600 text-sm mb-4">Tourism and business visits up to 6 months</p>
                            <div class="flex items-center justify-between">
                                <div class="text-blue-600 font-bold text-lg">From £299</div>
                                <div class="text-xs text-gray-500">5-7 days</div>
                            </div>
                        </div>
                        
                        <div class="group bg-white rounded-2xl p-6 shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                            <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-4 group-hover:bg-blue-200 transition-colors">
                                <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                                </svg>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-2 text-lg">F1 Student</h4>
                            <p class="text-gray-600 text-sm mb-4">Academic studies and research programs</p>
                            <div class="flex items-center justify-between">
                                <div class="text-blue-600 font-bold text-lg">From £499</div>
                                <div class="text-xs text-gray-500">10-15 days</div>
                            </div>
                        </div>
                        
                        <div class="group bg-white rounded-2xl p-6 shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                            <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-4 group-hover:bg-blue-200 transition-colors">
                                <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"/>
                                    <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"/>
                                </svg>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-2 text-lg">H1B Work</h4>
                            <p class="text-gray-600 text-sm mb-4">Specialty occupations and skilled workers</p>
                            <div class="flex items-center justify-between">
                                <div class="text-blue-600 font-bold text-lg">From £799</div>
                                <div class="text-xs text-gray-500">15-20 days</div>
                            </div>
                        </div>
                        
                        <div class="group bg-white rounded-2xl p-6 shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                            <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-4 group-hover:bg-blue-200 transition-colors">
                                <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-2 text-lg">K1 Fiancé</h4>
                            <p class="text-gray-600 text-sm mb-4">Marriage-based and family visas</p>
                            <div class="flex items-center justify-between">
                                <div class="text-blue-600 font-bold text-lg">From £699</div>
                                <div class="text-xs text-gray-500">12-18 days</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Canada Visas -->
            <div class="mb-20" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-gradient-to-br from-red-50 via-red-50 to-red-100 rounded-3xl p-8 md:p-12 relative overflow-hidden">
                    <!-- Background Pattern -->
                    <div class="absolute top-0 right-0 w-64 h-64 opacity-5">
                        <svg viewBox="0 0 100 100" class="w-full h-full">
                            <defs>
                                <pattern id="canada-pattern" x="0" y="0" width="15" height="15" patternUnits="userSpaceOnUse">
                                    <path d="M7.5 2L10 7.5L7.5 13L5 7.5Z" fill="currentColor"/>
                                </pattern>
                            </defs>
                            <rect width="100" height="100" fill="url(#canada-pattern)"/>
                        </svg>
                    </div>
                    
                    <div class="flex flex-col md:flex-row items-start md:items-center mb-8 relative z-10">
                        <div class="flex items-center mb-4 md:mb-0">
                            <div class="w-20 h-20 bg-gradient-to-br from-red-500 to-red-600 rounded-2xl flex items-center justify-center mr-6 shadow-lg">
                                <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">Canada Visas</h3>
                                <p class="text-gray-600 text-lg">Visitor, Study, Work, and Permanent Residence</p>
                            </div>
                        </div>
                        <div class="ml-auto">
                            <div class="bg-red-600 text-white px-4 py-2 rounded-full text-sm font-semibold">
                                Express Entry Available
                            </div>
                        </div>
                    </div>
                    
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 relative z-10">
                        <div class="group bg-white rounded-2xl p-6 shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                            <div class="w-16 h-16 bg-red-100 rounded-xl flex items-center justify-center mb-4 group-hover:bg-red-200 transition-colors">
                                <svg class="w-8 h-8 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 2L3 7v11a2 2 0 002 2h10a2 2 0 002-2V7l-7-5zM8 15a1 1 0 01-2 0v-3a1 1 0 012 0v3zm4 0a1 1 0 01-2 0v-3a1 1 0 012 0v3z"/>
                                </svg>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-2 text-lg">Visitor Visa</h4>
                            <p class="text-gray-600 text-sm mb-4">Tourism and family visits up to 6 months</p>
                            <div class="flex items-center justify-between">
                                <div class="text-red-600 font-bold text-lg">From £199</div>
                                <div class="text-xs text-gray-500">3-5 days</div>
                            </div>
                        </div>
                        
                        <div class="group bg-white rounded-2xl p-6 shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                            <div class="w-16 h-16 bg-red-100 rounded-xl flex items-center justify-center mb-4 group-hover:bg-red-200 transition-colors">
                                <svg class="w-8 h-8 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                                </svg>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-2 text-lg">Study Permit</h4>
                            <p class="text-gray-600 text-sm mb-4">Educational programs and research</p>
                            <div class="flex items-center justify-between">
                                <div class="text-red-600 font-bold text-lg">From £399</div>
                                <div class="text-xs text-gray-500">7-10 days</div>
                            </div>
                        </div>
                        
                        <div class="group bg-white rounded-2xl p-6 shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                            <div class="w-16 h-16 bg-red-100 rounded-xl flex items-center justify-center mb-4 group-hover:bg-red-200 transition-colors">
                                <svg class="w-8 h-8 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"/>
                                    <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"/>
                                </svg>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-2 text-lg">Work Permit</h4>
                            <p class="text-gray-600 text-sm mb-4">Employment opportunities and LMIA</p>
                            <div class="flex items-center justify-between">
                                <div class="text-red-600 font-bold text-lg">From £599</div>
                                <div class="text-xs text-gray-500">10-14 days</div>
                            </div>
                        </div>
                        
                        <div class="group bg-white rounded-2xl p-6 shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                            <div class="w-16 h-16 bg-red-100 rounded-xl flex items-center justify-center mb-4 group-hover:bg-red-200 transition-colors">
                                <svg class="w-8 h-8 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 2L3 7v11a2 2 0 002 2h10a2 2 0 002-2V7l-7-5zM8 15a1 1 0 01-2 0v-3a1 1 0 012 0v3zm4 0a1 1 0 01-2 0v-3a1 1 0 012 0v3z"/>
                                </svg>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-2 text-lg">Express Entry</h4>
                            <p class="text-gray-600 text-sm mb-4">Permanent residence pathway</p>
                            <div class="flex items-center justify-between">
                                <div class="text-red-600 font-bold text-lg">From £999</div>
                                <div class="text-xs text-gray-500">20-30 days</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Schengen Visas -->
            <div class="mb-20" data-aos="fade-up" data-aos-delay="200">
                <div class="bg-gradient-to-br from-yellow-50 via-yellow-50 to-yellow-100 rounded-3xl p-8 md:p-12 relative overflow-hidden">
                    <!-- Background Pattern -->
                    <div class="absolute top-0 right-0 w-64 h-64 opacity-5">
                        <svg viewBox="0 0 100 100" class="w-full h-full">
                            <defs>
                                <pattern id="schengen-pattern" x="0" y="0" width="25" height="25" patternUnits="userSpaceOnUse">
                                    <polygon points="12.5,2 15.5,9.5 23,9.5 17.25,14.5 19.75,22 12.5,17 5.25,22 7.75,14.5 2,9.5 9.5,9.5" fill="currentColor"/>
                                </pattern>
                            </defs>
                            <rect width="100" height="100" fill="url(#schengen-pattern)"/>
                        </svg>
                    </div>
                    
                    <div class="flex flex-col md:flex-row items-start md:items-center mb-8 relative z-10">
                        <div class="flex items-center mb-4 md:mb-0">
                            <div class="w-20 h-20 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-2xl flex items-center justify-center mr-6 shadow-lg">
                                <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">Schengen Visas</h3>
                                <p class="text-gray-600 text-lg">Access to 26 European Countries</p>
                            </div>
                        </div>
                        <div class="ml-auto">
                            <div class="bg-yellow-600 text-white px-4 py-2 rounded-full text-sm font-semibold">
                                26 Countries Access
                            </div>
                        </div>
                    </div>
                    
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 relative z-10">
                        <div class="group bg-white rounded-2xl p-6 shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                            <div class="w-16 h-16 bg-yellow-100 rounded-xl flex items-center justify-center mb-4 group-hover:bg-yellow-200 transition-colors">
                                <svg class="w-8 h-8 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z"/>
                                    <path fill-rule="evenodd" d="M3 8a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 3a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 3a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-2 text-lg">Tourist Visa</h4>
                            <p class="text-gray-600 text-sm mb-4">Leisure and sightseeing across Europe</p>
                            <div class="flex items-center justify-between">
                                <div class="text-yellow-600 font-bold text-lg">From £149</div>
                                <div class="text-xs text-gray-500">3-5 days</div>
                            </div>
                        </div>
                        
                        <div class="group bg-white rounded-2xl p-6 shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                            <div class="w-16 h-16 bg-yellow-100 rounded-xl flex items-center justify-center mb-4 group-hover:bg-yellow-200 transition-colors">
                                <svg class="w-8 h-8 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"/>
                                    <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"/>
                                </svg>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-2 text-lg">Business Visa</h4>
                            <p class="text-gray-600 text-sm mb-4">Meetings and conferences</p>
                            <div class="flex items-center justify-between">
                                <div class="text-yellow-600 font-bold text-lg">From £199</div>
                                <div class="text-xs text-gray-500">5-7 days</div>
                            </div>
                        </div>
                        
                        <div class="group bg-white rounded-2xl p-6 shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                            <div class="w-16 h-16 bg-yellow-100 rounded-xl flex items-center justify-center mb-4 group-hover:bg-yellow-200 transition-colors">
                                <svg class="w-8 h-8 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-2 text-lg">Family Visit</h4>
                            <p class="text-gray-600 text-sm mb-4">Visiting relatives and friends</p>
                            <div class="flex items-center justify-between">
                                <div class="text-yellow-600 font-bold text-lg">From £179</div>
                                <div class="text-xs text-gray-500">4-6 days</div>
                            </div>
                        </div>
                        
                        <div class="group bg-white rounded-2xl p-6 shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                            <div class="w-16 h-16 bg-yellow-100 rounded-xl flex items-center justify-center mb-4 group-hover:bg-yellow-200 transition-colors">
                                <svg class="w-8 h-8 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm0 4a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zm10-4a1 1 0 100-2 1 1 0 000 2zm0 4a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-2 text-lg">Medical Visa</h4>
                            <p class="text-gray-600 text-sm mb-4">Medical treatment and care</p>
                            <div class="flex items-center justify-between">
                                <div class="text-yellow-600 font-bold text-lg">From £249</div>
                                <div class="text-xs text-gray-500">7-10 days</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- UK Visas -->
            <div class="mb-20" data-aos="fade-up" data-aos-delay="300">
                <div class="bg-gradient-to-br from-purple-50 via-purple-50 to-purple-100 rounded-3xl p-8 md:p-12 relative overflow-hidden">
                    <!-- Background Pattern -->
                    <div class="absolute top-0 right-0 w-64 h-64 opacity-5">
                        <svg viewBox="0 0 100 100" class="w-full h-full">
                            <defs>
                                <pattern id="uk-pattern" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                    <path d="M10 2L12 8L18 8L13.5 12L15.5 18L10 14.5L4.5 18L6.5 12L2 8L8 8Z" fill="currentColor"/>
                                </pattern>
                            </defs>
                            <rect width="100" height="100" fill="url(#uk-pattern)"/>
                        </svg>
                    </div>
                    
                    <div class="flex flex-col md:flex-row items-start md:items-center mb-8 relative z-10">
                        <div class="flex items-center mb-4 md:mb-0">
                            <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mr-6 shadow-lg">
                                <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm0 4a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zm10-4a1 1 0 100-2 1 1 0 000 2zm0 4a1 1 0 100-2 1 1 0 000 2z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">United Kingdom Visas</h3>
                                <p class="text-gray-600 text-lg">Visit, Study, Work, and Settlement</p>
                            </div>
                        </div>
                        <div class="ml-auto">
                            <div class="bg-purple-600 text-white px-4 py-2 rounded-full text-sm font-semibold">
                                Points-Based System
                            </div>
                        </div>
                    </div>
                    
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 relative z-10">
                        <div class="group bg-white rounded-2xl p-6 shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                            <div class="w-16 h-16 bg-purple-100 rounded-xl flex items-center justify-center mb-4 group-hover:bg-purple-200 transition-colors">
                                <svg class="w-8 h-8 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7 2a1 1 0 00-.707 1.707L7 4.414v3.758a1 1 0 01-.293.707l-4 4C.817 14.769 2.156 18 4.828 18h10.343c2.673 0 4.012-3.231 2.122-5.121l-4-4A1 1 0 0113 8.172V4.414l.707-.707A1 1 0 0013 2H7zm2 6.172V4h2v4.172a3 3 0 00.879 2.12l1.027 1.028a4 4 0 00-2.171.102l-.47.156a4 4 0 01-2.53 0l-.563-.187a1.993 1.993 0 00-.114-.035l1.063-1.063A3 3 0 009 8.172z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-2 text-lg">Standard Visitor</h4>
                            <p class="text-gray-600 text-sm mb-4">Tourism and business visits</p>
                            <div class="flex items-center justify-between">
                                <div class="text-purple-600 font-bold text-lg">From £199</div>
                                <div class="text-xs text-gray-500">5-7 days</div>
                            </div>
                        </div>
                        
                        <div class="group bg-white rounded-2xl p-6 shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                            <div class="w-16 h-16 bg-purple-100 rounded-xl flex items-center justify-center mb-4 group-hover:bg-purple-200 transition-colors">
                                <svg class="w-8 h-8 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                                </svg>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-2 text-lg">Student Visa</h4>
                            <p class="text-gray-600 text-sm mb-4">Academic courses and research</p>
                            <div class="flex items-center justify-between">
                                <div class="text-purple-600 font-bold text-lg">From £399</div>
                                <div class="text-xs text-gray-500">10-15 days</div>
                            </div>
                        </div>
                        
                        <div class="group bg-white rounded-2xl p-6 shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                            <div class="w-16 h-16 bg-purple-100 rounded-xl flex items-center justify-center mb-4 group-hover:bg-purple-200 transition-colors">
                                <svg class="w-8 h-8 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-2 text-lg">Skilled Worker</h4>
                            <p class="text-gray-600 text-sm mb-4">Employment-based immigration</p>
                            <div class="flex items-center justify-between">
                                <div class="text-purple-600 font-bold text-lg">From £699</div>
                                <div class="text-xs text-gray-500">15-20 days</div>
                            </div>
                        </div>
                        
                        <div class="group bg-white rounded-2xl p-6 shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                            <div class="w-16 h-16 bg-purple-100 rounded-xl flex items-center justify-center mb-4 group-hover:bg-purple-200 transition-colors">
                                <svg class="w-8 h-8 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-2 text-lg">Spouse Visa</h4>
                            <p class="text-gray-600 text-sm mb-4">Family reunification and settlement</p>
                            <div class="flex items-center justify-between">
                                <div class="text-purple-600 font-bold text-lg">From £799</div>
                                <div class="text-xs text-gray-500">12-18 days</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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

.animation-delay-600 {
    animation-delay: 0.6s;
}

.animation-delay-800 {
    animation-delay: 0.8s;
}
</style>
@endsection