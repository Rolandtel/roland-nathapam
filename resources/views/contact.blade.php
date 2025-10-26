@extends('layouts.main')

@section('title', 'Contact Us - Nathapam Global UK International Ltd')
@section('description', 'Get in touch with Nathapam Global UK International Ltd for visa consultation and immigration
    services. Contact our expert team today.')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-blue-900 via-blue-800 to-indigo-900 text-white py-20 overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-20"></div>
        <div class="absolute inset-0">
            <div class="absolute top-10 left-10 w-32 h-32 bg-blue-400 rounded-full opacity-10 animate-pulse"></div>
            <div class="absolute bottom-20 right-20 w-24 h-24 bg-indigo-400 rounded-full opacity-10 animate-bounce"></div>
            <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-purple-400 rounded-full opacity-10 animate-ping"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center max-w-4xl mx-auto">
                <h1 class="text-5xl md:text-6xl font-bold mb-6 animate-fade-in-up">
                    Contact <span class="text-yellow-400">Our Experts</span>
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-blue-100 animate-fade-in-up animation-delay-200">
                    Ready to start your visa journey? Get in touch with our experienced team for personalized consultation.
                </p>
                <div class="flex flex-wrap justify-center gap-6 text-lg animate-fade-in-up animation-delay-400">
                    <div class="flex items-center bg-white bg-opacity-20 backdrop-blur-sm px-4 py-2 rounded-lg">
                        <svg class="w-5 h-5 text-yellow-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <span>+44 20 7946 0958</span>
                    </div>
                    <div class="flex items-center bg-white bg-opacity-20 backdrop-blur-sm px-4 py-2 rounded-lg">
                        <svg class="w-5 h-5 text-yellow-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <span>info@nathapamglobal.co.uk</span>
                    </div>
                    <div class="flex items-center bg-white bg-opacity-20 backdrop-blur-sm px-4 py-2 rounded-lg">
                        <svg class="w-5 h-5 text-yellow-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>Mon-Fri: 9AM-6PM</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form & Info Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="bg-white rounded-2xl shadow-xl p-8 animate-fade-in-left">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Send Us a Message</h2>
                    <form action="#" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="first_name" class="block text-sm font-medium text-gray-700 mb-2">First Name
                                    *</label>
                                <input type="text" id="first_name" name="first_name" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300">
                            </div>
                            <div>
                                <label for="last_name" class="block text-sm font-medium text-gray-700 mb-2">Last Name
                                    *</label>
                                <input type="text" id="last_name" name="last_name" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300">
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address
                                    *</label>
                                <input type="email" id="email" name="email" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300">
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone
                                    Number</label>
                                <input type="tel" id="phone" name="phone"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300">
                            </div>
                        </div>

                        <div>
                            <label for="visa_type" class="block text-sm font-medium text-gray-700 mb-2">Visa Type of
                                Interest</label>
                            <select id="visa_type" name="visa_type"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300">
                                <option value="">Select a visa type</option>
                                <option value="us_tourist">US Tourist Visa</option>
                                <option value="us_student">US Student Visa</option>
                                <option value="us_work">US Work Visa</option>
                                <option value="canada_visitor">Canada Visitor Visa</option>
                                <option value="canada_study">Canada Study Permit</option>
                                <option value="canada_work">Canada Work Permit</option>
                                <option value="schengen_tourist">Schengen Tourist Visa</option>
                                <option value="schengen_business">Schengen Business Visa</option>
                                <option value="uk_visitor">UK Visitor Visa</option>
                                <option value="uk_student">UK Student Visa</option>
                                <option value="uk_work">UK Work Visa</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message *</label>
                            <textarea id="message" name="message" rows="5" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 resize-vertical"
                                placeholder="Please describe your visa requirements and any specific questions you have..."></textarea>
                        </div>

                        <div class="flex items-start">
                            <input type="checkbox" id="privacy" name="privacy" required
                                class="mt-1 h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="privacy" class="ml-2 text-sm text-gray-600">
                                I agree to the <a href="#" class="text-blue-600 hover:underline">Privacy Policy</a>
                                and consent to being contacted regarding my inquiry. *
                            </label>
                        </div>

                        <button type="submit"
                            class="w-full bg-gradient-to-r from-blue-600 to-green-600 text-white font-semibold py-4 px-6 rounded-lg hover:from-blue-700 hover:to-green-700 transform hover:scale-105 transition-all duration-300 shadow-lg">
                            <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                            </svg>
                            Send Message
                        </button>
                    </form>
                </div>

                <!-- Contact Information -->
                <div class="space-y-8 animate-fade-in-right">
                    <!-- Office Information -->
                    <div class="bg-white rounded-2xl shadow-xl p-8">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6">Get in Touch</h3>
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="bg-blue-100 p-3 rounded-lg mr-4">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800 mb-1">Office Address</h4>
                                    <p class="text-gray-600">
                                        2 Haydock Avenue<br>
                                        Hereford, Herefordshire HR4 9LZ<br>
                                        United Kingdom
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="bg-green-100 p-3 rounded-lg mr-4">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800 mb-1">Phone Numbers</h4>
                                    <p class="text-gray-600">
                                        Main: <a href="tel:+447432404502" class="text-blue-600 hover:underline">+44 7432
                                            404 502</a><br>
                                        WhatsApp: <a href="https://wa.me/447432404502"
                                            class="text-green-600 hover:underline">+44 7432 404 502</a>
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="bg-purple-100 p-3 rounded-lg mr-4">
                                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800 mb-1">Email Addresses</h4>
                                    <p class="text-gray-600">
                                        General: <a href="mailto:info@nathampamglobal.co.uk"
                                            class="text-blue-600 hover:underline">info@nathampamglobal.co.uk</a><br>
                                        Support: <a href="mailto:nathapamquadrupleo@gmail.com"
                                            class="text-blue-600 hover:underline">nathapamquadrupleo@gmail.com</a><br>
                                        Urgent: <a href="mailto:anuoluwamercy28@gmail.com"
                                            class="text-blue-600 hover:underline">anuoluwamercy28@gmail.com</a>
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="bg-yellow-100 p-3 rounded-lg mr-4">
                                    <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800 mb-1">Business Hours</h4>
                                    <p class="text-gray-600">
                                        Monday - Friday: 9:00 AM - 6:00 PM<br>
                                        Saturday: 10:00 AM - 2:00 PM<br>
                                        Sunday: Closed
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Contact Options -->
                    <div class="bg-gradient-to-br from-blue-600 to-green-600 rounded-2xl shadow-xl p-6 md:p-8 text-white">
                        <h3 class="text-xl md:text-2xl font-bold mb-4 md:mb-6 text-center">Quick Contact</h3>
                        <div class="space-y-3 md:space-y-4">
                            <a href="https://wa.me/447432404502" target="_blank"
                                class="flex items-center p-3 md:p-4 bg-white bg-opacity-25 backdrop-blur-sm rounded-lg hover:bg-opacity-35 transition-all duration-300 transform hover:scale-105 shadow-lg border border-white border-opacity-20">
                                <div class="bg-green-500 p-2 rounded-lg mr-3 md:mr-4 flex-shrink-0">
                                    <svg class="w-5 h-5 md:w-6 md:h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.787"/>
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h4 class="font-semibold text-base md:text-lg truncate">WhatsApp Chat</h4>
                                    <p class="text-xs md:text-sm text-blue-100">Get instant responses</p>
                                </div>
                            </a>

                            <a href="tel:+447432404502"
                                class="flex items-center p-3 md:p-4 bg-white bg-opacity-25 backdrop-blur-sm rounded-lg hover:bg-opacity-35 transition-all duration-300 transform hover:scale-105 shadow-lg border border-white border-opacity-20">
                                <div class="bg-blue-500 p-2 rounded-lg mr-3 md:mr-4 flex-shrink-0">
                                    <svg class="w-5 h-5 md:w-6 md:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h4 class="font-semibold text-base md:text-lg truncate">Call Now</h4>
                                    <p class="text-xs md:text-sm text-blue-100">Speak with an expert</p>
                                </div>
                            </a>

                            <a href="mailto:info@nathapamglobal.co.uk"
                                class="flex items-center p-3 md:p-4 bg-white bg-opacity-25 backdrop-blur-sm rounded-lg hover:bg-opacity-35 transition-all duration-300 transform hover:scale-105 shadow-lg border border-white border-opacity-20">
                                <div class="bg-purple-500 p-2 rounded-lg mr-3 md:mr-4 flex-shrink-0">
                                    <svg class="w-5 h-5 md:w-6 md:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h4 class="font-semibold text-base md:text-lg truncate">Email Us</h4>
                                    <p class="text-xs md:text-sm text-blue-100">Detailed inquiries</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Find Our Office</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Visit us at our London office for in-person consultations and document reviews.
                </p>
            </div>

            <div class="bg-gray-200 rounded-2xl overflow-hidden shadow-xl h-96">
                <!-- Google Maps Embed Placeholder -->
                <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-gray-300 to-gray-400">
                    <div class="text-center text-gray-600">
                        <svg class="w-16 h-16 mx-auto mb-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <h3 class="text-2xl font-semibold mb-2">Interactive Map</h3>
                        <p class="text-lg">Google Maps integration will be added here</p>
                        <p class="text-sm mt-2">2 Haydock Avenue Hereford Herefordshire
                            Hr4 9lz</p>
                    </div>
                </div>
            </div>

            <div class="grid md:grid-cols-3 gap-8 mt-12">
                <div class="text-center">
                    <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-800 mb-2">Public Transport</h4>
                    <p class="text-gray-600">5 minutes walk from Westminster Station</p>
                </div>

                <div class="text-center">
                    <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-800 mb-2">Parking</h4>
                    <p class="text-gray-600">Paid parking available nearby</p>
                </div>

                <div class="text-center">
                    <div class="bg-purple-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-800 mb-2">Accessibility</h4>
                    <p class="text-gray-600">Wheelchair accessible entrance</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Maps Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-montserrat font-bold text-navy mb-4">
                    Find Our Office
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Visit us at our Hereford office for in-person consultations and document submission.
                </p>
            </div>

            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="aspect-w-16 aspect-h-9">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2438.123456789!2d-2.7158!3d52.0567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTLCsDAzJzI0LjEiTiAywrA0Mic1Ny4wIlc!5e0!3m2!1sen!2suk!4v1234567890123!5m2!1sen!2suk"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" class="w-full h-96 md:h-[450px]">
                    </iframe>
                </div>

                <div class="p-6 bg-gray-50">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="flex items-center">
                            <div class="bg-blue-100 p-3 rounded-lg mr-4">
                                <i class="fas fa-map-marker-alt text-blue-600 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Address</h4>
                                <p class="text-gray-600 text-sm">2 Haydock Avenue, Hereford HR4 9LZ</p>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div class="bg-green-100 p-3 rounded-lg mr-4">
                                <i class="fas fa-directions text-green-600 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Directions</h4>
                                <p class="text-gray-600 text-sm">5 minutes from Hereford city center</p>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div class="bg-purple-100 p-3 rounded-lg mr-4">
                                <i class="fas fa-car text-purple-600 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Parking</h4>
                                <p class="text-gray-600 text-sm">Free parking available on-site</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Frequently Asked Questions</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Quick answers to common questions about our services and processes.
                </p>
            </div>

            <div class="max-w-4xl mx-auto">
                <div class="space-y-6">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <button
                            class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 transition-colors duration-200">
                            <span class="font-semibold text-gray-800">How long does the visa application process
                                take?</span>
                            <i class="fas fa-chevron-down text-gray-400"></i>
                        </button>
                        <div class="px-6 pb-4 text-gray-600">
                            Processing times vary by visa type and country. Tourist visas typically take 5-15 business days,
                            while work and study visas can take 2-8 weeks. We provide estimated timelines during
                            consultation.
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <button
                            class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 transition-colors duration-200">
                            <span class="font-semibold text-gray-800">What documents do I need for my visa
                                application?</span>
                            <i class="fas fa-chevron-down text-gray-400"></i>
                        </button>
                        <div class="px-6 pb-4 text-gray-600">
                            Required documents vary by visa type but typically include passport, photos, financial
                            statements, invitation letters, and supporting documents. We provide a comprehensive checklist
                            after consultation.
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <button
                            class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 transition-colors duration-200">
                            <span class="font-semibold text-gray-800">Do you offer refunds if my visa is rejected?</span>
                            <i class="fas fa-chevron-down text-gray-400"></i>
                        </button>
                        <div class="px-6 pb-4 text-gray-600">
                            Our service fees are non-refundable as they cover professional consultation and application
                            preparation. However, we offer free reapplication assistance if rejection was due to our error.
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <button
                            class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 transition-colors duration-200">
                            <span class="font-semibold text-gray-800">Can you help with visa interviews?</span>
                            <i class="fas fa-chevron-down text-gray-400"></i>
                        </button>
                        <div class="px-6 pb-4 text-gray-600">
                            Yes! Our Premium and VIP packages include comprehensive interview preparation, including mock
                            interviews, question practice, and confidence-building sessions.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-blue-600 to-indigo-600 text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold mb-6">Ready to Start Your Visa Journey?</h2>
            <p class="text-xl mb-8 max-w-3xl mx-auto">
                Don't let visa complexities hold you back. Contact our expert team today for personalized guidance and
                support.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="https://wa.me/447432404502" target="_blank"
                    class="bg-green-500 hover:bg-green-600 text-white font-semibold py-4 px-8 rounded-lg transform hover:scale-105 transition-all duration-300 shadow-lg">
                    <i class="fab fa-whatsapp mr-2"></i>
                    WhatsApp Now
                </a>
                <a href="tel:+447432404502"
                    class="bg-white text-blue-600 hover:bg-gray-100 font-semibold py-4 px-8 rounded-lg transform hover:scale-105 transition-all duration-300 shadow-lg">
                    <i class="fas fa-phone mr-2"></i>
                    Call Us Today
                </a>
            </div>
        </div>
    </section>
@endsection
