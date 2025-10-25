@extends('layouts.main')

@section('title', 'Apply Now - Nathapam Global UK International Ltd')
@section('description', 'Start your visa application process with Nathapam Global UK. Complete our comprehensive application form and get expert assistance for your visa journey.')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-navy-900 via-primary-800 to-secondary-700 text-white py-20 overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="absolute inset-0">
        <div class="absolute top-10 left-10 w-20 h-20 bg-accent-400 rounded-full opacity-20 animate-pulse"></div>
        <div class="absolute bottom-20 right-20 w-32 h-32 bg-primary-400 rounded-full opacity-10 animate-bounce"></div>
        <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-secondary-400 rounded-full opacity-15 animate-ping"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center max-w-4xl mx-auto">
            <div class="inline-flex items-center bg-white bg-opacity-20 rounded-full px-6 py-2 mb-6 backdrop-blur-sm">
                <i class="fas fa-rocket text-accent-400 mr-2"></i>
                <span class="text-sm font-medium">Start Your Journey Today</span>
            </div>
            
            <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">
                Apply for Your
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-accent-400 to-secondary-400">
                    Dream Visa
                </span>
            </h1>
            
            <p class="text-xl text-gray-200 mb-8 leading-relaxed">
                Complete our comprehensive application form and let our experts guide you through every step of your visa journey. Your success is our priority.
            </p>
            
            <div class="flex flex-wrap justify-center gap-4 text-sm">
                <div class="flex items-center bg-white bg-opacity-10 rounded-full px-4 py-2">
                    <i class="fas fa-shield-alt text-green-400 mr-2"></i>
                    <span>Secure & Confidential</span>
                </div>
                <div class="flex items-center bg-white bg-opacity-10 rounded-full px-4 py-2">
                    <i class="fas fa-clock text-blue-400 mr-2"></i>
                    <span>Quick Processing</span>
                </div>
                <div class="flex items-center bg-white bg-opacity-10 rounded-full px-4 py-2">
                    <i class="fas fa-users text-purple-400 mr-2"></i>
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
                ['step' => '1', 'title' => 'Choose Visa Type', 'desc' => 'Select your destination and visa category', 'icon' => 'fas fa-map-marked-alt', 'color' => 'blue'],
                ['step' => '2', 'title' => 'Fill Application', 'desc' => 'Complete the comprehensive application form', 'icon' => 'fas fa-edit', 'color' => 'green'],
                ['step' => '3', 'title' => 'Upload Documents', 'desc' => 'Submit required documents securely', 'icon' => 'fas fa-cloud-upload-alt', 'color' => 'purple'],
                ['step' => '4', 'title' => 'Expert Review', 'desc' => 'Our team reviews and processes your application', 'icon' => 'fas fa-user-check', 'color' => 'orange']
            ] as $step)
            <div class="text-center group">
                <div class="relative mb-6">
                    <div class="w-20 h-20 bg-{{ $step['color'] }}-100 rounded-full flex items-center justify-center mx-auto group-hover:bg-{{ $step['color'] }}-200 transition-colors duration-300">
                        <i class="{{ $step['icon'] }} text-2xl text-{{ $step['color'] }}-600"></i>
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
                        <i class="fas fa-globe-americas text-primary-600 mr-3"></i>
                        Visa Information
                    </h3>
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Destination Country *</label>
                            <select name="destination_country" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent">
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
                            <select name="visa_type" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent">
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
                            <input type="date" name="travel_date" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Duration of Stay</label>
                            <input type="text" name="duration" placeholder="e.g., 2 weeks, 3 months" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                        </div>
                    </div>
                </div>
                
                <!-- Personal Information -->
                <div class="bg-blue-50 rounded-xl p-8">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-6 flex items-center">
                        <i class="fas fa-user text-blue-600 mr-3"></i>
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
                        <i class="fas fa-address-book text-green-600 mr-3"></i>
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
                <div class="bg-purple-50 rounded-xl p-8">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-6 flex items-center">
                        <i class="fas fa-briefcase text-purple-600 mr-3"></i>
                        Employment Information
                    </h3>
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Employment Status *</label>
                            <select name="employment_status" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
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
                            <input type="text" name="occupation" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Employer Name</label>
                            <input type="text" name="employer_name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Monthly Income (USD)</label>
                            <input type="number" name="monthly_income" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
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
                                I agree to the <a href="#" class="text-primary-600 hover:underline">Terms and Conditions</a> and 
                                <a href="#" class="text-primary-600 hover:underline">Privacy Policy</a>. I understand that all information provided is accurate and complete.
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
                    <button type="submit" class="bg-gradient-to-r from-primary-600 to-secondary-600 text-white px-12 py-4 rounded-full text-lg font-semibold hover:from-primary-700 hover:to-secondary-700 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
                        <i class="fas fa-paper-plane mr-2"></i>
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
<section class="py-16 bg-gradient-to-r from-primary-600 to-secondary-600 text-white">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-4">Need Help with Your Application?</h2>
        <p class="text-xl mb-8 opacity-90">Our expert consultants are here to assist you every step of the way</p>
        
        <div class="flex flex-wrap justify-center gap-6">
            <a href="https://wa.me/447438429122" class="bg-white text-primary-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition-colors duration-300 flex items-center">
                <i class="fab fa-whatsapp mr-2"></i>
                WhatsApp Support
            </a>
            <a href="tel:+447438429122" class="bg-transparent border-2 border-white text-white px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-primary-600 transition-colors duration-300 flex items-center">
                <i class="fas fa-phone mr-2"></i>
                Call Now
            </a>
            <a href="mailto:info@nathapamglobal.co.uk" class="bg-transparent border-2 border-white text-white px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-primary-600 transition-colors duration-300 flex items-center">
                <i class="fas fa-envelope mr-2"></i>
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