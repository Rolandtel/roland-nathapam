@extends('layouts.main')

@section('title', 'About Us - Nathapam Global UK International Ltd | Expert Visa Consultants')
@section('description', 'Learn about Nathapam Global UK International Ltd - your trusted visa consultancy with 10+ years of experience, 90% success rate, and expert team dedicated to making your immigration dreams come true.')
@section('keywords', 'about nathapam global, visa consultancy company, immigration experts, visa success stories, professional visa services, UK visa consultants')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-primary-600 via-primary-700 to-navy-800 text-white py-20 overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="absolute inset-0">
        <div class="absolute top-10 left-10 w-32 h-32 bg-accent-400 rounded-full opacity-10 animate-pulse"></div>
        <div class="absolute bottom-20 right-20 w-24 h-24 bg-secondary-400 rounded-full opacity-10 animate-bounce"></div>
        <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-white rounded-full opacity-5 animate-ping"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 animate-fade-in-up">
                About <span class="text-accent-400">Nathapam Global</span>
            </h1>
            <p class="text-xl md:text-2xl mb-8 text-gray-200 animate-fade-in-up animation-delay-200">
                Your Trusted Partner in Global Immigration Solutions
            </p>
            <div class="flex flex-wrap justify-center gap-8 text-center animate-fade-in-up animation-delay-400">
                <div class="bg-white/10 backdrop-blur-sm rounded-lg p-4 min-w-[150px]">
                    <div class="text-3xl font-bold text-accent-400">10+</div>
                    <div class="text-sm text-gray-200">Years Experience</div>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-lg p-4 min-w-[150px]">
                    <div class="text-3xl font-bold text-accent-400">5000+</div>
                    <div class="text-sm text-gray-200">Visas Processed</div>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-lg p-4 min-w-[150px]">
                    <div class="text-3xl font-bold text-accent-400">90%</div>
                    <div class="text-sm text-gray-200">Success Rate</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Company Story Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-6" data-aos="fade-right">
                    <h2 class="text-4xl font-bold text-gray-900 mb-6">
                        Our <span class="text-primary-600">Story</span>
                    </h2>
                    <p class="text-lg text-gray-700 leading-relaxed">
                        Founded with a vision to bridge dreams and destinations, Nathapam Global UK International Ltd has been at the forefront of immigration consultancy for over a decade. What started as a small consultancy firm has grown into a trusted global partner for thousands of individuals and families seeking new opportunities abroad.
                    </p>
                    <p class="text-lg text-gray-700 leading-relaxed">
                        Our journey began with a simple belief: everyone deserves the chance to pursue their dreams, regardless of geographical boundaries. Today, we stand proud as one of the leading visa consultancy firms, with a proven track record of success and a commitment to excellence that sets us apart.
                    </p>
                    <div class="flex items-center space-x-4 pt-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-award text-primary-600 text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Certified Excellence</h4>
                            <p class="text-gray-600">ICCRC registered and government approved</p>
                        </div>
                    </div>
                </div>
                <div class="relative" data-aos="fade-left">
                    <div class="bg-gradient-to-br from-primary-100 to-accent-100 rounded-2xl p-8 shadow-xl">
                        <div class="grid grid-cols-2 gap-6">
                            <div class="text-center">
                                <div class="w-16 h-16 bg-primary-600 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <i class="fas fa-globe text-white text-2xl"></i>
                                </div>
                                <h4 class="font-semibold text-gray-900">Global Reach</h4>
                                <p class="text-sm text-gray-600">50+ Countries</p>
                            </div>
                            <div class="text-center">
                                <div class="w-16 h-16 bg-accent-600 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <i class="fas fa-users text-white text-2xl"></i>
                                </div>
                                <h4 class="font-semibold text-gray-900">Expert Team</h4>
                                <p class="text-sm text-gray-600">25+ Specialists</p>
                            </div>
                            <div class="text-center">
                                <div class="w-16 h-16 bg-secondary-600 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <i class="fas fa-clock text-white text-2xl"></i>
                                </div>
                                <h4 class="font-semibold text-gray-900">24/7 Support</h4>
                                <p class="text-sm text-gray-600">Always Available</p>
                            </div>
                            <div class="text-center">
                                <div class="w-16 h-16 bg-navy-600 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <i class="fas fa-shield-alt text-white text-2xl"></i>
                                </div>
                                <h4 class="font-semibold text-gray-900">Secure Process</h4>
                                <p class="text-sm text-gray-600">100% Confidential</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">
                    Our Mission & <span class="text-primary-600">Vision</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Driven by purpose, guided by excellence, and committed to your success
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-12">
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-bullseye text-primary-600 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Our Mission</h3>
                    <p class="text-gray-700 leading-relaxed mb-6">
                        To provide comprehensive, reliable, and personalized immigration solutions that transform dreams into reality. We are committed to delivering exceptional service with integrity, transparency, and unwavering dedication to our clients' success.
                    </p>
                    <ul class="space-y-2">
                        <li class="flex items-center text-gray-700">
                            <i class="fas fa-check text-primary-600 mr-3"></i>
                            Personalized consultation for every client
                        </li>
                        <li class="flex items-center text-gray-700">
                            <i class="fas fa-check text-primary-600 mr-3"></i>
                            Transparent and honest communication
                        </li>
                        <li class="flex items-center text-gray-700">
                            <i class="fas fa-check text-primary-600 mr-3"></i>
                            Continuous support throughout the process
                        </li>
                    </ul>
                </div>
                
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-accent-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-eye text-accent-600 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Our Vision</h3>
                    <p class="text-gray-700 leading-relaxed mb-6">
                        To be the world's most trusted immigration consultancy, recognized for our expertise, innovation, and commitment to client success. We envision a world where geographical boundaries don't limit opportunities and dreams.
                    </p>
                    <ul class="space-y-2">
                        <li class="flex items-center text-gray-700">
                            <i class="fas fa-check text-accent-600 mr-3"></i>
                            Global leadership in immigration services
                        </li>
                        <li class="flex items-center text-gray-700">
                            <i class="fas fa-check text-accent-600 mr-3"></i>
                            Innovation in service delivery
                        </li>
                        <li class="flex items-center text-gray-700">
                            <i class="fas fa-check text-accent-600 mr-3"></i>
                            Empowering global mobility
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Core Values Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">
                    Our Core <span class="text-primary-600">Values</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    The principles that guide everything we do
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center group" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-20 h-20 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-primary-600 transition-colors duration-300">
                        <i class="fas fa-handshake text-primary-600 group-hover:text-white text-2xl transition-colors duration-300"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Integrity</h3>
                    <p class="text-gray-600">We maintain the highest ethical standards in all our interactions and services.</p>
                </div>
                
                <div class="text-center group" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-20 h-20 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-accent-600 transition-colors duration-300">
                        <i class="fas fa-star text-accent-600 group-hover:text-white text-2xl transition-colors duration-300"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Excellence</h3>
                    <p class="text-gray-600">We strive for perfection in every aspect of our service delivery.</p>
                </div>
                
                <div class="text-center group" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-20 h-20 bg-secondary-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-secondary-600 transition-colors duration-300">
                        <i class="fas fa-lightbulb text-secondary-600 group-hover:text-white text-2xl transition-colors duration-300"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Innovation</h3>
                    <p class="text-gray-600">We continuously evolve our processes to provide better solutions.</p>
                </div>
                
                <div class="text-center group" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-20 h-20 bg-navy-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-navy-600 transition-colors duration-300">
                        <i class="fas fa-heart text-navy-600 group-hover:text-white text-2xl transition-colors duration-300"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Compassion</h3>
                    <p class="text-gray-600">We understand the emotional journey and provide empathetic support.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">
                    Meet Our Expert <span class="text-primary-600">Team</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Experienced professionals dedicated to your immigration success
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Team Member 1 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300 text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-24 h-24 bg-gradient-to-br from-primary-400 to-primary-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-user text-white text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Sarah Johnson</h3>
                    <p class="text-primary-600 font-semibold mb-3">Managing Director & Senior Consultant</p>
                    <p class="text-gray-600 mb-4">ICCRC Certified with 12+ years of experience in immigration law and visa processing.</p>
                    <div class="flex justify-center space-x-3">
                        <span class="px-3 py-1 bg-primary-100 text-primary-700 rounded-full text-sm">US Visas</span>
                        <span class="px-3 py-1 bg-accent-100 text-accent-700 rounded-full text-sm">Canada PR</span>
                    </div>
                </div>
                
                <!-- Team Member 2 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300 text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-24 h-24 bg-gradient-to-br from-accent-400 to-accent-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-user text-white text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Michael Chen</h3>
                    <p class="text-accent-600 font-semibold mb-3">Senior Immigration Advisor</p>
                    <p class="text-gray-600 mb-4">Specialized in European visa applications with extensive knowledge of Schengen requirements.</p>
                    <div class="flex justify-center space-x-3">
                        <span class="px-3 py-1 bg-accent-100 text-accent-700 rounded-full text-sm">Schengen</span>
                        <span class="px-3 py-1 bg-secondary-100 text-secondary-700 rounded-full text-sm">UK Visas</span>
                    </div>
                </div>
                
                <!-- Team Member 3 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300 text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-24 h-24 bg-gradient-to-br from-secondary-400 to-secondary-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-user text-white text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Priya Sharma</h3>
                    <p class="text-secondary-600 font-semibold mb-3">Documentation Specialist</p>
                    <p class="text-gray-600 mb-4">Expert in document preparation and verification with meticulous attention to detail.</p>
                    <div class="flex justify-center space-x-3">
                        <span class="px-3 py-1 bg-secondary-100 text-secondary-700 rounded-full text-sm">Documents</span>
                        <span class="px-3 py-1 bg-navy-100 text-navy-700 rounded-full text-sm">Compliance</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Certifications & Achievements -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">
                    Certifications & <span class="text-primary-600">Achievements</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Recognized excellence and professional credentials
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-20 h-20 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-certificate text-primary-600 text-2xl"></i>
                    </div>
                    <h4 class="font-bold text-gray-900 mb-2">ICCRC Certified</h4>
                    <p class="text-gray-600 text-sm">Immigration Consultants of Canada Regulatory Council</p>
                </div>
                
                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-20 h-20 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-award text-accent-600 text-2xl"></i>
                    </div>
                    <h4 class="font-bold text-gray-900 mb-2">ISO 9001:2015</h4>
                    <p class="text-gray-600 text-sm">Quality Management System Certified</p>
                </div>
                
                <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-20 h-20 bg-secondary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-shield-alt text-secondary-600 text-2xl"></i>
                    </div>
                    <h4 class="font-bold text-gray-900 mb-2">Government Approved</h4>
                    <p class="text-gray-600 text-sm">Licensed Immigration Consultancy</p>
                </div>
                
                <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-20 h-20 bg-navy-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-trophy text-navy-600 text-2xl"></i>
                    </div>
                    <h4 class="font-bold text-gray-900 mb-2">Excellence Award</h4>
                    <p class="text-gray-600 text-sm">Best Immigration Consultancy 2023</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-20 bg-gradient-to-r from-primary-600 to-navy-700 text-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
            <h2 class="text-4xl font-bold mb-6">Ready to Start Your Journey?</h2>
            <p class="text-xl mb-8 text-gray-200">
                Let our experienced team guide you through your immigration process with confidence and expertise.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="bg-accent-500 hover:bg-accent-600 text-white px-8 py-4 rounded-lg font-semibold transition-colors duration-300 inline-flex items-center justify-center">
                    <i class="fas fa-phone mr-2"></i>
                    Get Free Consultation
                </a>
                <a href="{{ route('services') }}" class="bg-white/10 hover:bg-white/20 text-white border-2 border-white/30 px-8 py-4 rounded-lg font-semibold transition-colors duration-300 inline-flex items-center justify-center">
                    <i class="fas fa-arrow-right mr-2"></i>
                    View Our Services
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