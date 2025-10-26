@extends('layouts.main')

@section('title', 'Apply Now - Nathapam Global UK International Ltd')
@section('description', 'Start your visa application process with Nathapam Global UK. Complete our comprehensive application form and get expert assistance for your visa journey.')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-blue-900 via-blue-800 to-green-700 text-white py-20 overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="absolute inset-0">
        <div class="absolute top-10 left-10 w-20 h-20 bg-yellow-400 rounded-full opacity-20 animate-pulse"></div>
        <div class="absolute bottom-20 right-20 w-32 h-32 bg-blue-400 rounded-full opacity-10 animate-bounce"></div>
        <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-green-400 rounded-full opacity-15 animate-ping"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center max-w-4xl mx-auto">
            <div class="inline-flex items-center bg-blue-600/30 backdrop-blur-sm rounded-full px-6 py-2 mb-6 border border-blue-400/30">
                <svg class="w-5 h-5 text-yellow-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
                <span class="text-sm font-medium">Start Your Journey Today</span>
            </div>
            
            <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">
                Apply for Your
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-green-400">
                    Dream Visa
                </span>
            </h1>
            
            <p class="text-xl text-gray-200 mb-8 leading-relaxed">
                Complete our comprehensive application form and let our experts guide you through every step of your visa journey. Your success is our priority.
            </p>
            
            <div class="flex flex-wrap justify-center gap-4 text-sm">
                <div class="flex items-center bg-blue-600/30 backdrop-blur-sm bg-opacity-10 rounded-full px-4 py-2">
                    <svg class="w-4 h-4 text-green-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                    <span>Secure & Confidential</span>
                </div>
                <div class="flex items-center bg-blue-600/30 backdrop-blur-sm bg-opacity-10 rounded-full px-4 py-2">
                    <svg class="w-4 h-4 text-blue-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span>Quick Processing</span>
                </div>
                <div class="flex items-center bg-blue-600/30 backdrop-blur-sm bg-opacity-10 rounded-full px-4 py-2">
                    <svg class="w-4 h-4 text-yellow-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                    <span>Expert Support</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Application Steps -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Simple Application Process</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Follow these easy steps to complete your visa application</p>
        </div>
        
        <div class="grid md:grid-cols-4 gap-8">
            @foreach([
                ['step' => '1', 'title' => 'Choose Visa Type', 'desc' => 'Select your destination and visa category', 'icon' => 'map', 'color' => 'blue'],
                ['step' => '2', 'title' => 'Fill Application', 'desc' => 'Complete the comprehensive application form', 'icon' => 'edit', 'color' => 'green'],
                ['step' => '3', 'title' => 'Upload Documents', 'desc' => 'Submit required documents securely', 'icon' => 'upload', 'color' => 'yellow'],
                ['step' => '4', 'title' => 'Expert Review', 'desc' => 'Our team reviews and processes your application', 'icon' => 'check', 'color' => 'gray']
            ] as $step)
            <div class="text-center group">
                <div class="relative mb-6">
                    <div class="w-20 h-20 bg-{{ $step['color'] }}-100 rounded-full flex items-center justify-center mx-auto group-hover:bg-{{ $step['color'] }}-200 transition-colors duration-300">
                        @if($step['icon'] == 'map')
                            <svg class="w-8 h-8 text-{{ $step['color'] }}-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        @elseif($step['icon'] == 'edit')
                            <svg class="w-8 h-8 text-{{ $step['color'] }}-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                            </svg>
                        @elseif($step['icon'] == 'upload')
                            <svg class="w-8 h-8 text-{{ $step['color'] }}-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                            </svg>
                        @else
                            <svg class="w-8 h-8 text-{{ $step['color'] }}-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        @endif
                    </div>
                    <div class="absolute -top-2 -right-2 w-8 h-8 bg-{{ $step['color'] }}-600 text-white rounded-full flex items-center justify-center text-sm font-bold">
                        {{ $step['step'] }}
                    </div>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $step['title'] }}</h3>
                <p class="text-gray-600">{{ $step['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Application Form -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Visa Application Form</h2>
                <p class="text-gray-600">Please fill out all required fields accurately. Our team will review your application within 24 hours.</p>
            </div>
            
            <form class="space-y-8" id="visaApplicationForm">
                @csrf
                
                <!-- Visa Type Selection -->
                <div class="bg-gray-50 rounded-xl p-8">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-6 flex items-center">
                        <svg class="w-6 h-6 text-blue-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Visa Information
                    </h3>
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Destination Country *</label>
                            <select name="destination_country" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="">Select Destination</option>
                                <option value="usa">United States</option>
                                <option value="canada">Canada</option>
                                <option value="schengen">Schengen Area</option>
                                <option value="uk">United Kingdom</option>
                                <option value="australia">Australia</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Visa Type *</label>
                            <select name="visa_type" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="">Select Visa Type</option>
                                <option value="tourist">Tourist/Visitor</option>
                                <option value="business">Business</option>
                                <option value="student">Student</option>
                                <option value="work">Work</option>
                                <option value="family">Family/Spouse</option>
                                <option value="transit">Transit</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Intended Travel Date *</label>
                            <input type="date" name="travel_date" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Duration of Stay</label>
                            <input type="text" name="duration" placeholder="e.g., 2 weeks, 3 months" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                    </div>
                </div>
                
                <!-- Personal Information -->
                <div class="bg-blue-50 rounded-xl p-8">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-6 flex items-center">
                        <svg class="w-6 h-6 text-blue-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        Personal Information
                    </h3>
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">First Name *</label>
                            <input type="text" name="first_name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Last Name *</label>
                            <input type="text" name="last_name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Date of Birth *</label>
                            <input type="date" name="date_of_birth" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nationality *</label>
                            <input type="text" name="nationality" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Passport Number *</label>
                            <input type="text" name="passport_number" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Passport Expiry Date *</label>
                            <input type="date" name="passport_expiry" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Gender *</label>
                            <select name="gender" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="">Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Marital Status</label>
                            <select name="marital_status" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="">Select Status</option>
                                <option value="single">Single</option>
                                <option value="married">Married</option>
                                <option value="divorced">Divorced</option>
                                <option value="widowed">Widowed</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Information -->
                <div class="bg-green-50 rounded-xl p-8">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-6 flex items-center">
                        <svg class="w-6 h-6 text-green-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        Contact Information
                    </h3>
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Current Address *</label>
                            <textarea name="current_address" required rows="3" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent"></textarea>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">City *</label>
                            <input type="text" name="city" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Country *</label>
                            <input type="text" name="country" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number *</label>
                            <input type="tel" name="phone" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                            <input type="email" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                        </div>
                    </div>
                </div>
                
                <!-- Employment Information -->
                <div class="bg-yellow-50 rounded-xl p-8">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-6 flex items-center">
                        <svg class="w-6 h-6 text-yellow-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H6a2 2 0 01-2-2V8a2 2 0 012-2V6"></path>
                        </svg>
                        Employment Information
                    </h3>
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Employment Status *</label>
                            <select name="employment_status" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent">
                                <option value="">Select Status</option>
                                <option value="employed">Employed</option>
                                <option value="self_employed">Self-Employed</option>
                                <option value="student">Student</option>
                                <option value="retired">Retired</option>
                                <option value="unemployed">Unemployed</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Occupation</label>
                            <input type="text" name="occupation" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Employer Name</label>
                            <input type="text" name="employer_name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Monthly Income (USD)</label>
                            <input type="number" name="monthly_income" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent">
                        </div>
                        
                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Employer Address</label>
                            <textarea name="employer_address" rows="2" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent"></textarea>
                        </div>
                    </div>
                </div>
                
                <!-- Travel History -->
                <div class="bg-orange-50 rounded-xl p-8">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-6 flex items-center">
                        <i class="fas fa-plane-departure text-orange-600 mr-3"></i>
                        Travel History
                    </h3>
                    
                    <div class="space-y-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Have you traveled internationally in the last 5 years?</label>
                            <div class="flex space-x-4">
                                <label class="flex items-center">
                                    <input type="radio" name="traveled_internationally" value="yes" class="mr-2">
                                    <span>Yes</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="traveled_internationally" value="no" class="mr-2">
                                    <span>No</span>
                                </label>
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Countries Visited (if any)</label>
                            <textarea name="countries_visited" rows="3" placeholder="List countries and approximate dates of visits" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent"></textarea>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Have you ever been refused a visa?</label>
                            <div class="flex space-x-4">
                                <label class="flex items-center">
                                    <input type="radio" name="visa_refused" value="yes" class="mr-2">
                                    <span>Yes</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="visa_refused" value="no" class="mr-2">
                                    <span>No</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Additional Information -->
                <div class="bg-gray-50 rounded-xl p-8">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-6 flex items-center">
                        <i class="fas fa-info-circle text-gray-600 mr-3"></i>
                        Additional Information
                    </h3>
                    
                    <div class="space-y-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Purpose of Visit</label>
                            <textarea name="purpose_of_visit" rows="3" placeholder="Please describe the purpose of your visit in detail" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-500 focus:border-transparent"></textarea>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Special Requirements or Comments</label>
                            <textarea name="special_requirements" rows="3" placeholder="Any special requirements, medical conditions, or additional information" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-500 focus:border-transparent"></textarea>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">How did you hear about us?</label>
                            <select name="referral_source" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-500 focus:border-transparent">
                                <option value="">Select Source</option>
                                <option value="google">Google Search</option>
                                <option value="social_media">Social Media</option>
                                <option value="referral">Friend/Family Referral</option>
                                <option value="advertisement">Advertisement</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <!-- Terms and Conditions -->
                <div class="bg-red-50 rounded-xl p-8">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-6 flex items-center">
                        <i class="fas fa-file-contract text-red-600 mr-3"></i>
                        Terms and Conditions
                    </h3>
                    
                    <div class="space-y-4">
                        <label class="flex items-start">
                            <input type="checkbox" name="terms_accepted" required class="mt-1 mr-3">
                            <span class="text-sm text-gray-700">
                                I agree to the <a href="#" class="text-blue-600 hover:underline">Terms and Conditions</a> and 
                                <a href="#" class="text-blue-600 hover:underline">Privacy Policy</a>. I understand that all information provided is accurate and complete.
                            </span>
                        </label>
                        
                        <label class="flex items-start">
                            <input type="checkbox" name="marketing_consent" class="mt-1 mr-3">
                            <span class="text-sm text-gray-700">
                                I consent to receive marketing communications and updates about visa services and travel information.
                            </span>
                        </label>
                        
                        <label class="flex items-start">
                            <input type="checkbox" name="data_processing" required class="mt-1 mr-3">
                            <span class="text-sm text-gray-700">
                                I consent to the processing of my personal data for visa application purposes and understand that my information will be handled securely.
                            </span>
                        </label>
                    </div>
                </div>
                
                <!-- Submit Button -->
                <div class="text-center pt-8">
                    <button type="submit" class="bg-gradient-to-r from-blue-600 to-green-600 text-white px-12 py-4 rounded-full text-lg font-semibold hover:from-blue-700 hover:to-green-700 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
                        <svg class="w-5 h-5 mr-2 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                        </svg>
                        Submit Application
                    </button>
                    
                    <p class="text-sm text-gray-600 mt-4">
                        Our team will review your application within 24 hours and contact you with next steps.
                    </p>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Support Section -->
<section class="py-16 bg-gradient-to-r from-blue-600 to-green-600 text-white">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-4">Need Help with Your Application?</h2>
        <p class="text-xl mb-8 opacity-90">Our expert consultants are here to assist you every step of the way</p>
        
        <div class="flex flex-wrap justify-center gap-6">
            <a href="https://wa.me/447438429122" class="bg-white text-blue-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition-colors duration-300 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488z"/>
                </svg>
                WhatsApp Support
            </a>
            <a href="tel:+447438429122" class="bg-transparent border-2 border-white text-white px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-blue-600 transition-colors duration-300 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                </svg>
                Call Now
            </a>
            <a href="mailto:info@nathapamglobal.co.uk" class="bg-transparent border-2 border-white text-white px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-blue-600 transition-colors duration-300 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                Email Us
            </a>
        </div>
    </div>
</section>

<script>
document.getElementById('visaApplicationForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Show success message
    alert('Thank you for your application! Our team will review it within 24 hours and contact you with the next steps.');
    
    // In a real application, you would submit the form data to your backend
    // fetch('/apply-now', {
    //     method: 'POST',
    //     body: new FormData(this),
    //     headers: {
    //         'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    //     }
    // });
});
</script>
@endsection