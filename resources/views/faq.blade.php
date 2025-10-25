@extends('layouts.main')

@section('title', 'Visa FAQs | Nathapam Global UK International Ltd – Common Visa Questions')
@section('meta_description', 'Get answers to frequently asked visa questions — timelines, required documents, embassy procedures, and more from Nathapam Global UK International Ltd.')
@section('keywords', 'visa FAQs UK, visa application timeline, tourist visa help, reapply for visa, visa documents checklist')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-blue-900 via-blue-800 to-indigo-900 text-white py-20 overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="absolute inset-0">
        <div class="absolute top-10 left-10 w-20 h-20 bg-blue-400 rounded-full opacity-20 animate-pulse"></div>
        <div class="absolute top-32 right-20 w-16 h-16 bg-indigo-400 rounded-full opacity-30 animate-bounce"></div>
        <div class="absolute bottom-20 left-1/4 w-12 h-12 bg-purple-400 rounded-full opacity-25 animate-ping"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center max-w-4xl mx-auto">
            <div class="inline-flex items-center bg-blue-600/30 backdrop-blur-sm rounded-full px-6 py-2 mb-6 border border-blue-400/30">
                <svg class="w-5 h-5 mr-2 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span class="text-blue-200 font-medium">Frequently Asked Questions</span>
            </div>
            
            <h1 class="text-5xl md:text-6xl font-bold mb-6 bg-gradient-to-r from-white to-blue-200 bg-clip-text text-transparent">
                Visa FAQs
            </h1>
            <p class="text-xl md:text-2xl text-blue-100 mb-8 leading-relaxed">
                Get instant answers to the most common visa questions and concerns
            </p>
            
            <!-- Quick Stats -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-12">
                <div class="text-center">
                    <div class="text-3xl font-bold text-blue-300">500+</div>
                    <div class="text-blue-200 text-sm">Questions Answered</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-green-300">98%</div>
                    <div class="text-blue-200 text-sm">Success Rate</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-yellow-300">24/7</div>
                    <div class="text-blue-200 text-sm">Support Available</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-purple-300">15+</div>
                    <div class="text-blue-200 text-sm">Countries Covered</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Categories -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Browse by Category</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Find answers quickly by selecting your area of interest</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
            <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 cursor-pointer border-l-4 border-blue-500" onclick="scrollToCategory('general')">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2">General Questions</h3>
                <p class="text-gray-600 text-sm">Basic visa information and requirements</p>
            </div>
            
            <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 cursor-pointer border-l-4 border-green-500" onclick="scrollToCategory('application')">
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2">Application Process</h3>
                <p class="text-gray-600 text-sm">Step-by-step application guidance</p>
            </div>
            
            <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 cursor-pointer border-l-4 border-purple-500" onclick="scrollToCategory('documents')">
                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2">Documents & Requirements</h3>
                <p class="text-gray-600 text-sm">Required documents and preparation</p>
            </div>
            
            <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 cursor-pointer border-l-4 border-orange-500" onclick="scrollToCategory('processing')">
                <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2">Processing & Timeline</h3>
                <p class="text-gray-600 text-sm">Processing times and status updates</p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Sections -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <!-- General Questions -->
        <div id="general" class="mb-16">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 flex items-center">
                <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center mr-3">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                General Questions
            </h2>
            
            <div class="space-y-4">
                @foreach($generalFaqs as $index => $faq)
                <div class="bg-gray-50 rounded-xl border border-gray-200 overflow-hidden">
                    <button class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-100 transition-colors duration-200" onclick="toggleFaq('general-{{ $index }}')">
                        <span class="font-semibold text-gray-800">{{ $faq['question'] }}</span>
                        <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-200" id="general-{{ $index }}-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="px-6 pb-4 hidden" id="general-{{ $index }}-content">
                        <p class="text-gray-600 leading-relaxed">{{ $faq['answer'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Application Process -->
        <div id="application" class="mb-16">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 flex items-center">
                <div class="w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center mr-3">
                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                Application Process
            </h2>
            
            <div class="space-y-4">
                @foreach($applicationFaqs as $index => $faq)
                <div class="bg-gray-50 rounded-xl border border-gray-200 overflow-hidden">
                    <button class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-100 transition-colors duration-200" onclick="toggleFaq('application-{{ $index }}')">
                        <span class="font-semibold text-gray-800">{{ $faq['question'] }}</span>
                        <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-200" id="application-{{ $index }}-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="px-6 pb-4 hidden" id="application-{{ $index }}-content">
                        <p class="text-gray-600 leading-relaxed">{{ $faq['answer'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Documents & Requirements -->
        <div id="documents" class="mb-16">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 flex items-center">
                <div class="w-8 h-8 bg-purple-100 rounded-lg flex items-center justify-center mr-3">
                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                </div>
                Documents & Requirements
            </div>
            
            <div class="space-y-4">
                @foreach($documentFaqs as $index => $faq)
                <div class="bg-gray-50 rounded-xl border border-gray-200 overflow-hidden">
                    <button class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-100 transition-colors duration-200" onclick="toggleFaq('documents-{{ $index }}')">
                        <span class="font-semibold text-gray-800">{{ $faq['question'] }}</span>
                        <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-200" id="documents-{{ $index }}-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="px-6 pb-4 hidden" id="documents-{{ $index }}-content">
                        <p class="text-gray-600 leading-relaxed">{{ $faq['answer'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Processing & Timeline -->
        <div id="processing" class="mb-16">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 flex items-center">
                <div class="w-8 h-8 bg-orange-100 rounded-lg flex items-center justify-center mr-3">
                    <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                Processing & Timeline
            </h2>
            
            <div class="space-y-4">
                @foreach($processingFaqs as $index => $faq)
                <div class="bg-gray-50 rounded-xl border border-gray-200 overflow-hidden">
                    <button class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-100 transition-colors duration-200" onclick="toggleFaq('processing-{{ $index }}')">
                        <span class="font-semibold text-gray-800">{{ $faq['question'] }}</span>
                        <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-200" id="processing-{{ $index }}-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="px-6 pb-4 hidden" id="processing-{{ $index }}-content">
                        <p class="text-gray-600 leading-relaxed">{{ $faq['answer'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- Still Have Questions -->
<section class="py-16 bg-gradient-to-r from-blue-600 to-indigo-700 text-white">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Still Have Questions?</h2>
        <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
            Can't find the answer you're looking for? Our expert consultants are here to help you with personalized guidance.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition-colors duration-200 flex items-center justify-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                Contact Us
            </a>
            <a href="tel:+447432404502" class="bg-blue-500 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-400 transition-colors duration-200 flex items-center justify-center border-2 border-blue-400">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                </svg>
                Call Now
            </a>
        </div>
    </div>
</section>

<script>
function toggleFaq(id) {
    const content = document.getElementById(id + '-content');
    const icon = document.getElementById(id + '-icon');
    
    if (content.classList.contains('hidden')) {
        content.classList.remove('hidden');
        icon.style.transform = 'rotate(180deg)';
    } else {
        content.classList.add('hidden');
        icon.style.transform = 'rotate(0deg)';
    }
}

function scrollToCategory(category) {
    document.getElementById(category).scrollIntoView({ 
        behavior: 'smooth',
        block: 'start'
    });
}
</script>
@endsection