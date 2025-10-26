@extends('layouts.main')

@section('title', 'Visa Information - Nathapam Global UK International Ltd')
@section('description', 'Comprehensive visa information and requirements for US, Canada, Schengen, and UK visas. Get detailed guidance on visa processes and documentation.')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-indigo-900 via-green-800 to-blue-900 text-white py-20 overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="absolute inset-0">
        <div class="absolute top-16 left-16 w-40 h-40 bg-purple-400 rounded-full opacity-10 animate-pulse"></div>
        <div class="absolute bottom-24 right-24 w-32 h-32 bg-blue-400 rounded-full opacity-10 animate-bounce"></div>
        <div class="absolute top-1/3 right-1/4 w-20 h-20 bg-indigo-400 rounded-full opacity-10 animate-ping"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center max-w-5xl mx-auto">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 animate-fade-in-up">
                Visa <span class="text-yellow-400">Information</span> Hub
            </h1>
            <p class="text-xl md:text-2xl mb-8 text-blue-100 animate-fade-in-up animation-delay-200">
                Everything you need to know about visa requirements, processes, and documentation for your destination country.
            </p>
            {{-- <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-12 animate-fade-in-up animation-delay-400">
                <div class="text-center">
                    <div class="bg-white bg-opacity-20 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-3">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm0 4a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zm10-4a1 1 0 100-2 1 1 0 000 2zm0 4a1 1 0 100-2 1 1 0 000 2z"/>
                        </svg>
                    </div>
                    <span class="font-semibold">USA</span>
                </div>
                <div class="text-center">
                    <div class="bg-white bg-opacity-20 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-3">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <span class="font-semibold">Canada</span>
                </div>
                <div class="text-center">
                    <div class="bg-white bg-opacity-20 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-3">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <span class="font-semibold">Schengen</span>
                </div>
                <div class="text-center">
                    <div class="bg-white bg-opacity-20 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-3">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm0 4a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zm10-4a1 1 0 100-2 1 1 0 000 2zm0 4a1 1 0 100-2 1 1 0 000 2z"/>
                        </svg>
                    </div>
                    <span class="font-semibold">UK</span>
                </div>
            </div> --}}
        </div>
    </div>
</section>

<!-- Quick Navigation -->
<section class="py-12 bg-white border-b">
    <div class="container mx-auto px-6">
        <div class="flex flex-wrap justify-center gap-4">
            <a href="#usa-visas" class="bg-blue-100 text-blue-800 px-6 py-3 rounded-full hover:bg-blue-200 transition-colors duration-300 font-semibold">
                <svg class="w-4 h-4 inline mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm0 4a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zm10-4a1 1 0 100-2 1 1 0 000 2zm0 4a1 1 0 100-2 1 1 0 000 2z"/>
                </svg>USA Visas
            </a>
            <a href="#canada-visas" class="bg-red-100 text-red-800 px-6 py-3 rounded-full hover:bg-red-200 transition-colors duration-300 font-semibold">
                <svg class="w-4 h-4 inline mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                </svg>Canada Visas
            </a>
            <a href="#schengen-visas" class="bg-yellow-100 text-yellow-800 px-6 py-3 rounded-full hover:bg-yellow-200 transition-colors duration-300 font-semibold">
                <svg class="w-4 h-4 inline mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>Schengen Visas
            </a>
            <a href="#uk-visas" class="bg-purple-100 text-purple-800 px-6 py-3 rounded-full hover:bg-purple-200 transition-colors duration-300 font-semibold">
                <svg class="w-4 h-4 inline mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm0 4a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zm10-4a1 1 0 100-2 1 1 0 000 2zm0 4a1 1 0 100-2 1 1 0 000 2z"/>
                </svg>UK Visas
            </a>
            <a href="#general-requirements" class="bg-gray-100 text-gray-800 px-6 py-3 rounded-full hover:bg-gray-200 transition-colors duration-300 font-semibold">
                <svg class="w-4 h-4 inline mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm0 4a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zm10-4a1 1 0 100-2 1 1 0 000 2zm0 4a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                </svg>General Requirements
            </a>
        </div>
    </div>
</section>

<!-- USA Visas Section -->
<section id="usa-visas" class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">
                <svg class="w-8 h-8 text-blue-600 mr-3 inline" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm0 4a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zm10-4a1 1 0 100-2 1 1 0 000 2zm0 4a1 1 0 100-2 1 1 0 000 2z"/>
                </svg>
                United States Visas
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Comprehensive information about US visa types, requirements, and application processes.
            </p>
        </div>
        
        <div class="grid lg:grid-cols-2 gap-8">
            <!-- B1/B2 Tourist Visa -->
            <div class="bg-white rounded-2xl shadow-xl p-8 animate-fade-in-up">
                <div class="flex items-center mb-6">
                    <div class="bg-blue-100 p-3 rounded-lg mr-4">
                        <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800">B1/B2 Tourist Visa</h3>
                        <p class="text-gray-600">Tourism and Business Visits</p>
                    </div>
                </div>
                
                <div class="space-y-4">
                    <div>
                        <h4 class="font-semibold text-gray-800 mb-2">Purpose:</h4>
                        <ul class="text-gray-600 space-y-1">
                            <li>• Tourism and sightseeing</li>
                            <li>• Business meetings and conferences</li>
                            <li>• Visiting friends and family</li>
                            <li>• Medical treatment</li>
                        </ul>
                    </div>
                    
                    <div>
                        <h4 class="font-semibold text-gray-800 mb-2">Key Requirements:</h4>
                        <ul class="text-gray-600 space-y-1">
                            <li>• Valid passport (6+ months validity)</li>
                            <li>• DS-160 form completion</li>
                            <li>• Visa interview appointment</li>
                            <li>• Financial proof ($10,000+ recommended)</li>
                            <li>• Strong ties to home country</li>
                        </ul>
                    </div>
                    
                    <div class="bg-blue-50 p-4 rounded-lg">
                        <div class="flex justify-between items-center">
                            <span class="font-semibold text-blue-800">Processing Time:</span>
                            <span class="text-blue-600">3-5 weeks</span>
                        </div>
                        <div class="flex justify-between items-center mt-2">
                            <span class="font-semibold text-blue-800">Validity:</span>
                            <span class="text-blue-600">Up to 10 years</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- F1 Student Visa -->
            <div class="bg-white rounded-2xl shadow-xl p-8 animate-fade-in-up animation-delay-200">
                <div class="flex items-center mb-6">
                    <div class="bg-green-100 p-3 rounded-lg mr-4">
                        <svg class="w-8 h-8 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800">F1 Student Visa</h3>
                        <p class="text-gray-600">Academic Studies</p>
                    </div>
                </div>
                
                <div class="space-y-4">
                    <div>
                        <h4 class="font-semibold text-gray-800 mb-2">Purpose:</h4>
                        <ul class="text-gray-600 space-y-1">
                            <li>• Full-time academic studies</li>
                            <li>• University and college programs</li>
                            <li>• Language training programs</li>
                            <li>• Optional Practical Training (OPT)</li>
                        </ul>
                    </div>
                    
                    <div>
                        <h4 class="font-semibold text-gray-800 mb-2">Key Requirements:</h4>
                        <ul class="text-gray-600 space-y-1">
                            <li>• I-20 form from SEVP-approved school</li>
                            <li>• SEVIS fee payment ($350)</li>
                            <li>• Academic transcripts and diplomas</li>
                            <li>• English proficiency test scores</li>
                            <li>• Financial support documentation</li>
                        </ul>
                    </div>
                    
                    <div class="bg-green-50 p-4 rounded-lg">
                        <div class="flex justify-between items-center">
                            <span class="font-semibold text-green-800">Processing Time:</span>
                            <span class="text-green-600">2-8 weeks</span>
                        </div>
                        <div class="flex justify-between items-center mt-2">
                            <span class="font-semibold text-green-800">Validity:</span>
                            <span class="text-green-600">Duration of studies</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Canada Visas Section -->
<section id="canada-visas" class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">
                <svg class="w-8 h-8 text-red-600 mr-3 inline" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                </svg>
                Canada Visas
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Detailed information about Canadian visa options for visitors, students, workers, and immigrants.
            </p>
        </div>
        
        <div class="grid lg:grid-cols-2 gap-8">
            <!-- Visitor Visa -->
            <div class="bg-white rounded-2xl shadow-xl p-8 border animate-fade-in-up">
                <div class="flex items-center mb-6">
                    <div class="bg-red-100 p-3 rounded-lg mr-4">
                        <svg class="w-8 h-8 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 9a2 2 0 114 0 2 2 0 01-4 0z"/>
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a4 4 0 00-3.446 6.032l-2.261 2.26a1 1 0 101.414 1.415l2.261-2.261A4 4 0 1011 5z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800">Visitor Visa (TRV)</h3>
                        <p class="text-gray-600">Tourism and Family Visits</p>
                    </div>
                </div>
                
                <div class="space-y-4">
                    <div>
                        <h4 class="font-semibold text-gray-800 mb-2">Purpose:</h4>
                        <ul class="text-gray-600 space-y-1">
                            <li>• Tourism and leisure travel</li>
                            <li>• Visiting family and friends</li>
                            <li>• Business meetings (short-term)</li>
                            <li>• Transit through Canada</li>
                        </ul>
                    </div>
                    
                    <div>
                        <h4 class="font-semibold text-gray-800 mb-2">Key Requirements:</h4>
                        <ul class="text-gray-600 space-y-1">
                            <li>• Valid passport</li>
                            <li>• Completed application form</li>
                            <li>• Proof of financial support</li>
                            <li>• Letter of invitation (if applicable)</li>
                            <li>• Travel itinerary</li>
                        </ul>
                    </div>
                    
                    <div class="bg-red-50 p-4 rounded-lg">
                        <div class="flex justify-between items-center">
                            <span class="font-semibold text-red-800">Processing Time:</span>
                            <span class="text-red-600">2-4 weeks</span>
                        </div>
                        <div class="flex justify-between items-center mt-2">
                            <span class="font-semibold text-red-800">Validity:</span>
                            <span class="text-red-600">Up to 10 years</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Study Permit -->
            <div class="bg-white rounded-2xl shadow-xl p-8 border animate-fade-in-up animation-delay-200">
                <div class="flex items-center mb-6">
                    <div class="bg-blue-100 p-3 rounded-lg mr-4">
                        <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800">Study Permit</h3>
                        <p class="text-gray-600">Educational Programs</p>
                    </div>
                </div>
                
                <div class="space-y-4">
                    <div>
                        <h4 class="font-semibold text-gray-800 mb-2">Purpose:</h4>
                        <ul class="text-gray-600 space-y-1">
                            <li>• Full-time studies at DLI institutions</li>
                            <li>• University and college programs</li>
                            <li>• Post-graduation work opportunities</li>
                            <li>• Pathway to permanent residence</li>
                        </ul>
                    </div>
                    
                    <div>
                        <h4 class="font-semibold text-gray-800 mb-2">Key Requirements:</h4>
                        <ul class="text-gray-600 space-y-1">
                            <li>• Letter of acceptance from DLI</li>
                            <li>• Proof of financial support</li>
                            <li>• Medical examination (if required)</li>
                            <li>• Statement of purpose</li>
                            <li>• Language proficiency scores</li>
                        </ul>
                    </div>
                    
                    <div class="bg-blue-50 p-4 rounded-lg">
                        <div class="flex justify-between items-center">
                            <span class="font-semibold text-blue-800">Processing Time:</span>
                            <span class="text-blue-600">4-12 weeks</span>
                        </div>
                        <div class="flex justify-between items-center mt-2">
                            <span class="font-semibold text-blue-800">Validity:</span>
                            <span class="text-blue-600">Duration of studies</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Schengen Visas Section -->
<section id="schengen-visas" class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">
                <svg class="w-8 h-8 text-yellow-600 mr-3 inline" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                Schengen Visas
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Access 26 European countries with a single Schengen visa. Learn about requirements and processes.
            </p>
        </div>
        
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <h3 class="text-2xl font-bold text-gray-800 mb-6">Schengen Area Countries</h3>
            <div class="grid md:grid-cols-3 lg:grid-cols-4 gap-4">
                @php
                $schengenCountries = [
                    'Austria', 'Belgium', 'Czech Republic', 'Denmark', 'Estonia', 'Finland',
                    'France', 'Germany', 'Greece', 'Hungary', 'Iceland', 'Italy',
                    'Latvia', 'Lithuania', 'Luxembourg', 'Malta', 'Netherlands', 'Norway',
                    'Poland', 'Portugal', 'Slovakia', 'Slovenia', 'Spain', 'Sweden',
                    'Switzerland', 'Liechtenstein'
                ];
                @endphp
                
                @foreach($schengenCountries as $country)
                <div class="flex items-center p-2 bg-yellow-50 rounded-lg">
                    <i class="fas fa-check text-yellow-600 mr-2"></i>
                    <span class="text-gray-700">{{ $country }}</span>
                </div>
                @endforeach
            </div>
        </div>
        
        <div class="grid lg:grid-cols-2 gap-8">
            <!-- Tourist Visa -->
            <div class="bg-white rounded-2xl shadow-xl p-8 animate-fade-in-up">
                <div class="flex items-center mb-6">
                    <div class="bg-yellow-100 p-3 rounded-lg mr-4">
                        <svg class="w-8 h-8 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800">Tourist Visa</h3>
                        <p class="text-gray-600">Leisure and Sightseeing</p>
                    </div>
                </div>
                
                <div class="space-y-4">
                    <div>
                        <h4 class="font-semibold text-gray-800 mb-2">Purpose:</h4>
                        <ul class="text-gray-600 space-y-1">
                            <li>• Tourism and sightseeing</li>
                            <li>• Cultural events and festivals</li>
                            <li>• Short-term courses (up to 90 days)</li>
                            <li>• Visiting multiple Schengen countries</li>
                        </ul>
                    </div>
                    
                    <div>
                        <h4 class="font-semibold text-gray-800 mb-2">Key Requirements:</h4>
                        <ul class="text-gray-600 space-y-1">
                            <li>• Valid passport (3+ months validity)</li>
                            <li>• Completed application form</li>
                            <li>• Travel insurance (€30,000 coverage)</li>
                            <li>• Proof of accommodation</li>
                            <li>• Financial means (€65/day minimum)</li>
                        </ul>
                    </div>
                    
                    <div class="bg-yellow-50 p-4 rounded-lg">
                        <div class="flex justify-between items-center">
                            <span class="font-semibold text-yellow-800">Processing Time:</span>
                            <span class="text-yellow-600">15 calendar days</span>
                        </div>
                        <div class="flex justify-between items-center mt-2">
                            <span class="font-semibold text-yellow-800">Stay Duration:</span>
                            <span class="text-yellow-600">90 days in 180 days</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Business Visa -->
            <div class="bg-white rounded-2xl shadow-xl p-8 animate-fade-in-up animation-delay-200">
                <div class="flex items-center mb-6">
                    <div class="bg-green-100 p-3 rounded-lg mr-4">
                        <svg class="w-8 h-8 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800">Business Visa</h3>
                        <p class="text-gray-600">Meetings and Conferences</p>
                    </div>
                </div>
                
                <div class="space-y-4">
                    <div>
                        <h4 class="font-semibold text-gray-800 mb-2">Purpose:</h4>
                        <ul class="text-gray-600 space-y-1">
                            <li>• Business meetings and negotiations</li>
                            <li>• Conferences and trade fairs</li>
                            <li>• Contract signing and consultations</li>
                            <li>• Market research activities</li>
                        </ul>
                    </div>
                    
                    <div>
                        <h4 class="font-semibold text-gray-800 mb-2">Key Requirements:</h4>
                        <ul class="text-gray-600 space-y-1">
                            <li>• Business invitation letter</li>
                            <li>• Company registration documents</li>
                            <li>• Employment verification letter</li>
                            <li>• Business bank statements</li>
                            <li>• Conference/meeting documentation</li>
                        </ul>
                    </div>
                    
                    <div class="bg-green-50 p-4 rounded-lg">
                        <div class="flex justify-between items-center">
                            <span class="font-semibold text-green-800">Processing Time:</span>
                            <span class="text-green-600">15 calendar days</span>
                        </div>
                        <div class="flex justify-between items-center mt-2">
                            <span class="font-semibold text-green-800">Multiple Entry:</span>
                            <span class="text-green-600">Available</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- UK Visas Section -->
<section id="uk-visas" class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">
                <svg class="w-8 h-8 text-purple-600 mr-3 inline" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm0 4a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zm10-4a1 1 0 100-2 1 1 0 000 2zm0 4a1 1 0 100-2 1 1 0 000 2z"/>
                </svg>
                United Kingdom Visas
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Comprehensive guide to UK visa types for visitors, students, workers, and those seeking settlement.
            </p>
        </div>
        
        <div class="grid lg:grid-cols-2 gap-8">
            <!-- Standard Visitor Visa -->
            <div class="bg-white rounded-2xl shadow-xl p-8 border animate-fade-in-up">
                <div class="flex items-center mb-6">
                    <div class="bg-purple-100 p-3 rounded-lg mr-4">
                        <svg class="w-8 h-8 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                            <path fill-rule="evenodd" d="M4 5a2 2 0 012-2v1a1 1 0 001 1h6a1 1 0 001-1V3a2 2 0 012 2v6a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 2a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800">Standard Visitor Visa</h3>
                        <p class="text-gray-600">Tourism and Business</p>
                    </div>
                </div>
                
                <div class="space-y-4">
                    <div>
                        <h4 class="font-semibold text-gray-800 mb-2">Purpose:</h4>
                        <ul class="text-gray-600 space-y-1">
                            <li>• Tourism and leisure activities</li>
                            <li>• Business meetings and conferences</li>
                            <li>• Visiting family and friends</li>
                            <li>• Medical treatment (private)</li>
                        </ul>
                    </div>
                    
                    <div>
                        <h4 class="font-semibold text-gray-800 mb-2">Key Requirements:</h4>
                        <ul class="text-gray-600 space-y-1">
                            <li>• Valid passport</li>
                            <li>• Proof of financial support</li>
                            <li>• Accommodation details</li>
                            <li>• Travel itinerary</li>
                            <li>• Strong ties to home country</li>
                        </ul>
                    </div>
                    
                    <div class="bg-purple-50 p-4 rounded-lg">
                        <div class="flex justify-between items-center">
                            <span class="font-semibold text-purple-800">Processing Time:</span>
                            <span class="text-purple-600">3 weeks</span>
                        </div>
                        <div class="flex justify-between items-center mt-2">
                            <span class="font-semibold text-purple-800">Stay Duration:</span>
                            <span class="text-purple-600">Up to 6 months</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Student Visa -->
            <div class="bg-white rounded-2xl shadow-xl p-8 border animate-fade-in-up animation-delay-200">
                <div class="flex items-center mb-6">
                    <div class="bg-blue-100 p-3 rounded-lg mr-4">
                        <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800">Student Visa</h3>
                        <p class="text-gray-600">Academic Courses</p>
                    </div>
                </div>
                
                <div class="space-y-4">
                    <div>
                        <h4 class="font-semibold text-gray-800 mb-2">Purpose:</h4>
                        <ul class="text-gray-600 space-y-1">
                            <li>• Full-time degree courses</li>
                            <li>• English language courses</li>
                            <li>• Foundation and pathway programs</li>
                            <li>• Post-study work opportunities</li>
                        </ul>
                    </div>
                    
                    <div>
                        <h4 class="font-semibold text-gray-800 mb-2">Key Requirements:</h4>
                        <ul class="text-gray-600 space-y-1">
                            <li>• Confirmation of Acceptance (CAS)</li>
                            <li>• English language proficiency</li>
                            <li>• Financial requirements proof</li>
                            <li>• Academic qualifications</li>
                            <li>• Tuberculosis test (if required)</li>
                        </ul>
                    </div>
                    
                    <div class="bg-blue-50 p-4 rounded-lg">
                        <div class="flex justify-between items-center">
                            <span class="font-semibold text-blue-800">Processing Time:</span>
                            <span class="text-blue-600">3-8 weeks</span>
                        </div>
                        <div class="flex justify-between items-center mt-2">
                            <span class="font-semibold text-blue-800">Work Rights:</span>
                            <span class="text-blue-600">Part-time allowed</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- General Requirements Section -->
<section id="general-requirements" class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">
                <svg class="w-8 h-8 text-indigo-600 mr-3 inline" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm0 4a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zm10-4a1 1 0 100-2 1 1 0 000 2zm0 4a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                </svg>
                General Requirements
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Common requirements and documents needed for most visa applications worldwide.
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Essential Documents -->
            <div class="bg-white rounded-2xl shadow-xl p-8 animate-fade-in-up">
                <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-4 text-center">Essential Documents</h3>
                <ul class="text-gray-600 space-y-2">
                    <li>• Valid passport (6+ months validity)</li>
                    <li>• Completed visa application form</li>
                    <li>• Recent passport-sized photographs</li>
                    <li>• Travel itinerary and bookings</li>
                    <li>• Proof of accommodation</li>
                    <li>• Travel insurance (where required)</li>
                </ul>
            </div>
            
            <!-- Financial Requirements -->
            <div class="bg-white rounded-2xl shadow-xl p-8 animate-fade-in-up animation-delay-200">
                <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4z"/>
                        <path d="M6 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2V6zm4 2.5a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM8 9a1 1 0 000 2v2a1 1 0 001 1h4a1 1 0 001-1v-2a1 1 0 000-2H8z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-4 text-center">Financial Requirements</h3>
                <ul class="text-gray-600 space-y-2">
                    <li>• Bank statements (3-6 months)</li>
                    <li>• Proof of income/employment</li>
                    <li>• Sponsorship letters (if applicable)</li>
                    <li>• Tax returns and financial records</li>
                    <li>• Proof of funds for travel expenses</li>
                    <li>• Property ownership documents</li>
                </ul>
            </div>
            
            <!-- Supporting Documents -->
            <div class="bg-white rounded-2xl shadow-xl p-8 animate-fade-in-up animation-delay-400">
                <div class="bg-purple-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                        <path fill-rule="evenodd" d="M4 5a2 2 0 012-2v1a1 1 0 001 1h6a1 1 0 001-1V3a2 2 0 012 2v6a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm8 4a1 1 0 10-2 0v1H8a1 1 0 100 2h2v1a1 1 0 102 0v-1h2a1 1 0 100-2h-2V9z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-4 text-center">Supporting Documents</h3>
                <ul class="text-gray-600 space-y-2">
                    <li>• Invitation letters (if visiting)</li>
                    <li>• Employment verification letter</li>
                    <li>• Educational certificates</li>
                    <li>• Medical examination reports</li>
                    <li>• Police clearance certificates</li>
                    <li>• Marriage/birth certificates</li>
                </ul>
            </div>
        </div>
        
        <!-- Application Process Timeline -->
        <div class="mt-16 bg-white rounded-2xl shadow-xl p-8">
            <h3 class="text-2xl font-bold text-gray-800 mb-8 text-center">Typical Application Process</h3>
            <div class="grid md:grid-cols-5 gap-6">
                <div class="text-center">
                    <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-blue-600 font-bold text-xl">1</span>
                    </div>
                    <h4 class="font-semibold text-gray-800 mb-2">Consultation</h4>
                    <p class="text-sm text-gray-600">Initial assessment and document review</p>
                </div>
                
                <div class="text-center">
                    <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-green-600 font-bold text-xl">2</span>
                    </div>
                    <h4 class="font-semibold text-gray-800 mb-2">Preparation</h4>
                    <p class="text-sm text-gray-600">Document collection and form completion</p>
                </div>
                
                <div class="text-center">
                    <div class="bg-yellow-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-yellow-600 font-bold text-xl">3</span>
                    </div>
                    <h4 class="font-semibold text-gray-800 mb-2">Submission</h4>
                    <p class="text-sm text-gray-600">Application and biometrics submission</p>
                </div>
                
                <div class="text-center">
                    <div class="bg-purple-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-purple-600 font-bold text-xl">4</span>
                    </div>
                    <h4 class="font-semibold text-gray-800 mb-2">Interview</h4>
                    <p class="text-sm text-gray-600">Visa interview (if required)</p>
                </div>
                
                <div class="text-center">
                    <div class="bg-indigo-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-indigo-600 font-bold text-xl">5</span>
                    </div>
                    <h4 class="font-semibold text-gray-800 mb-2">Decision</h4>
                    <p class="text-sm text-gray-600">Visa approval and passport return</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-indigo-600 to-purple-600 text-white">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold mb-6">Need Help with Your Visa Application?</h2>
        <p class="text-xl mb-8 max-w-3xl mx-auto">
            Our expert team is ready to guide you through the entire visa process. Get personalized assistance today.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ route('contact') }}" 
               class="bg-white text-indigo-600 hover:bg-gray-100 font-semibold py-4 px-8 rounded-lg transform hover:scale-105 transition-all duration-300 shadow-lg">
                <svg class="w-5 h-5 mr-2 inline" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd"/>
                </svg>
                Get Free Consultation
            </a>
            <a href="{{ route('apply-now') }}" 
               class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-4 px-8 rounded-lg transform hover:scale-105 transition-all duration-300 shadow-lg">
                <svg class="w-5 h-5 mr-2 inline" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"/>
                </svg>
                Apply Now
            </a>
        </div>
    </div>
</section>
@endsection