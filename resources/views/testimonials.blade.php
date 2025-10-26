@extends('layouts.main')

@section('title', 'Client Testimonials - Nathapam Global UK International Ltd')
@section('description', 'Read success stories and testimonials from our satisfied clients who achieved their visa dreams with Nathapam Global UK International Ltd.')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-indigo-900 via-blue-800 to-green-700 text-white py-20 overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="absolute inset-0">
        <div class="absolute top-10 left-10 w-20 h-20 bg-yellow-400 rounded-full opacity-20 animate-pulse"></div>
        <div class="absolute bottom-20 right-20 w-32 h-32 bg-blue-400 rounded-full opacity-10 animate-bounce"></div>
        <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-green-400 rounded-full opacity-15 animate-ping"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center max-w-4xl mx-auto">
            <div class="inline-flex items-center bg-blue-600/30 backdrop-blur-sm rounded-full px-6 py-2 mb-6 border border-blue-400/30">
                <svg class="w-5 h-5 text-yellow-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                </svg>
                <span class="text-sm font-medium">Success Stories</span>
            </div>
            
            <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">
                Client
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-green-400">
                    Testimonials
                </span>
            </h1>
            
            <p class="text-xl text-gray-200 mb-8 leading-relaxed">
                Discover how we've helped thousands of clients achieve their visa dreams. Read their success stories and join our community of satisfied customers.
            </p>
            
            <div class="flex flex-wrap justify-center gap-8 text-center">
                @foreach([
                    ['number' => '5000+', 'label' => 'Happy Clients', 'icon' => 'users'],
                    ['number' => '98%', 'label' => 'Success Rate', 'icon' => 'chart'],
                    ['number' => '50+', 'label' => 'Countries', 'icon' => 'globe'],
                    ['number' => '10+', 'label' => 'Years Experience', 'icon' => 'award']
                ] as $stat)
                <div class="bg-white bg-opacity-10 rounded-lg p-6 backdrop-blur-sm">
                    @if($stat['icon'] === 'users')
                    <svg class="w-8 h-8 text-yellow-400 mb-2 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                    </svg>
                    @elseif($stat['icon'] === 'chart')
                    <svg class="w-8 h-8 text-yellow-400 mb-2 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z"/>
                    </svg>
                    @elseif($stat['icon'] === 'globe')
                    <svg class="w-8 h-8 text-yellow-400 mb-2 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z" clip-rule="evenodd"/>
                    </svg>
                    @else
                    <svg class="w-8 h-8 text-yellow-400 mb-2 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    @endif
                    <div class="text-3xl font-bold text-black">{{ $stat['number'] }}</div>
                    <div class="text-sm opacity-90 text-black">{{ $stat['label'] }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- Featured Testimonials -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">What Our Clients Say</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Real stories from real people who trusted us with their visa journey</p>
        </div>
        
        <div class="grid lg:grid-cols-3 gap-8">
            @foreach($featuredTestimonials as $testimonial)
            <div class="bg-gradient-to-br from-{{ $testimonial['color'] }}-50 to-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300 border border-{{ $testimonial['color'] }}-100">
                <div class="flex items-center mb-6">
                    <div class="w-16 h-16 bg-{{ $testimonial['color'] }}-100 rounded-full flex items-center justify-center mr-4">
                        <i class="{{ $testimonial['flag'] }} text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-800">{{ $testimonial['name'] }}</h3>
                        <p class="text-sm text-gray-600">{{ $testimonial['visa_type'] }}</p>
                        <div class="flex text-yellow-400 text-sm mt-1">
                            @for($i = 0; $i < 5; $i++)
                            <i class="fas fa-star"></i>
                            @endfor
                        </div>
                    </div>
                </div>
                
                <blockquote class="text-gray-700 mb-6 italic">
                    "{{ $testimonial['review'] }}"
                </blockquote>
                
                <div class="flex items-center justify-between text-sm text-gray-500">
                    <span>{{ $testimonial['location'] }}</span>
                    <span>{{ $testimonial['date'] }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Success Stories by Country -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Success Stories by Destination</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Explore testimonials organized by visa destination</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            @foreach(['USA', 'Canada', 'Schengen', 'UK'] as $country)
            <button class="country-filter bg-white border-2 border-blue-200 text-blue-600 px-6 py-3 rounded-full font-semibold hover:bg-blue-600 hover:text-white transition-colors duration-300 {{ $loop->first ? 'active bg-blue-600 text-white' : '' }}" data-country="{{ strtolower($country) }}">
                {{ $country }}
            </button>
            @endforeach
        </div>
        
        <div id="testimonials-container">
            @foreach($testimonialsByCountry as $country => $testimonials)
            <div class="testimonials-group {{ $country !== 'usa' ? 'hidden' : '' }}" data-country="{{ $country }}">
                <div class="grid md:grid-cols-2 gap-8">
                    @foreach($testimonials as $testimonial)
                    <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow duration-300">
                        <div class="flex items-start mb-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-blue-400 to-green-400 rounded-full flex items-center justify-center text-white font-bold mr-4">
                                {{ substr($testimonial['name'], 0, 1) }}
                            </div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-gray-800">{{ $testimonial['name'] }}</h4>
                                <p class="text-sm text-gray-600">{{ $testimonial['visa_type'] }}</p>
                                <div class="flex text-yellow-400 text-sm mt-1">
                                    @for($i = 0; $i < $testimonial['rating']; $i++)
                                    <i class="fas fa-star"></i>
                                    @endfor
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="text-sm text-gray-500">{{ $testimonial['date'] }}</div>
                                <div class="text-xs text-gray-400">{{ $testimonial['location'] }}</div>
                            </div>
                        </div>
                        
                        <p class="text-gray-700 mb-4">{{ $testimonial['review'] }}</p>
                        
                        @if(isset($testimonial['processing_time']))
                        <div class="bg-green-50 border border-green-200 rounded-lg p-3">
                            <div class="flex items-center text-green-700">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V5z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm font-medium">Processing Time: {{ $testimonial['processing_time'] }}</span>
                            </div>
                        </div>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Video Testimonials -->
<section class="py-20 bg-white hidden">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Video Testimonials</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Watch our clients share their success stories</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($videoTestimonials as $video)
            <div class="bg-gray-100 rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                <div class="relative aspect-video bg-gradient-to-br from-blue-400 to-green-400 flex items-center justify-center">
                    <button class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center hover:bg-opacity-30 transition-all duration-300">
                        <svg class="w-6 h-6 text-white ml-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z"/>
                        </svg>
                    </button>
                    <div class="absolute bottom-4 left-4 bg-black bg-opacity-50 text-white px-3 py-1 rounded-full text-sm">
                        {{ $video['duration'] }}
                    </div>
                </div>
                <div class="p-6">
                    <h4 class="font-semibold text-gray-800 mb-2">{{ $video['name'] }}</h4>
                    <p class="text-sm text-gray-600 mb-3">{{ $video['visa_type'] }} • {{ $video['country'] }}</p>
                    <p class="text-gray-700 text-sm">{{ $video['preview'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Trust Indicators -->
<section class="py-20 bg-gradient-to-r from-blue-600 to-green-600 text-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Why Clients Trust Us</h2>
            <p class="text-xl opacity-90 max-w-2xl mx-auto">Our commitment to excellence is reflected in every client relationship</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach([
                ['emoji' => '🛡️', 'title' => 'Secure Process', 'desc' => 'Your data is protected with bank-level security'],
                ['emoji' => '⚡', 'title' => 'Fast Processing', 'desc' => 'Quick turnaround times for all applications'],
                ['emoji' => '👥', 'title' => 'Expert Team', 'desc' => 'Experienced consultants with proven track records'],
                ['emoji' => '🎧', 'title' => '24/7 Support', 'desc' => 'Round-the-clock assistance for all your queries']
            ] as $feature)
            <div class="text-center">
                <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-4 text-3xl">
                    {{ $feature['emoji'] }}
                </div>
                <h3 class="text-xl font-semibold mb-2">{{ $feature['title'] }}</h3>
                <p class="opacity-90">{{ $feature['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6 text-center">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">Ready to Start Your Journey?</h2>
            <p class="text-xl text-gray-600 mb-8">Join thousands of satisfied clients who have achieved their dreams with our expert guidance.</p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-600 to-green-600 text-white font-semibold rounded-lg hover:from-blue-700 hover:to-green-700 transition-all duration-300 shadow-lg hover:shadow-xl">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z"/>
                    </svg>
                    Get Free Consultation
                </a>
                <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-4 border-2 border-blue-600 text-blue-600 font-semibold rounded-lg hover:bg-blue-600 hover:text-white transition-all duration-300">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                    </svg>
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</section>

<script>
// Country filter functionality
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.country-filter');
    const testimonialGroups = document.querySelectorAll('.testimonials-group');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const country = this.getAttribute('data-country');
            
            // Update active button
            filterButtons.forEach(btn => btn.classList.remove('active', 'bg-blue-600', 'text-white'));
            this.classList.add('active', 'bg-blue-600', 'text-white');
            
            // Show/hide testimonial groups
            testimonialGroups.forEach(group => {
                if (group.getAttribute('data-country') === country) {
                    group.classList.remove('hidden');
                } else {
                    group.classList.add('hidden');
                }
            });
        });
    });
});
</script>
@endsection