@extends('layouts.main')

@section('title', 'Client Testimonials - Nathapam Global UK International Ltd')
@section('description', 'Read success stories and testimonials from our satisfied clients who achieved their visa dreams with Nathapam Global UK International Ltd.')

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
                <i class="fas fa-star text-yellow-400 mr-2"></i>
                <span class="text-sm font-medium">Success Stories</span>
            </div>
            
            <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">
                Client
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-accent-400 to-secondary-400">
                    Testimonials
                </span>
            </h1>
            
            <p class="text-xl text-gray-200 mb-8 leading-relaxed">
                Discover how we've helped thousands of clients achieve their visa dreams. Read their success stories and join our community of satisfied customers.
            </p>
            
            <div class="flex flex-wrap justify-center gap-8 text-center">
                @foreach([
                    ['number' => '5000+', 'label' => 'Happy Clients', 'icon' => 'fas fa-users'],
                    ['number' => '98%', 'label' => 'Success Rate', 'icon' => 'fas fa-chart-line'],
                    ['number' => '50+', 'label' => 'Countries', 'icon' => 'fas fa-globe'],
                    ['number' => '10+', 'label' => 'Years Experience', 'icon' => 'fas fa-award']
                ] as $stat)
                <div class="bg-white bg-opacity-10 rounded-lg p-6 backdrop-blur-sm">
                    <i class="{{ $stat['icon'] }} text-3xl text-accent-400 mb-2"></i>
                    <div class="text-3xl font-bold">{{ $stat['number'] }}</div>
                    <div class="text-sm opacity-90">{{ $stat['label'] }}</div>
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
            <button class="country-filter bg-white border-2 border-primary-200 text-primary-600 px-6 py-3 rounded-full font-semibold hover:bg-primary-600 hover:text-white transition-colors duration-300 {{ $loop->first ? 'active bg-primary-600 text-white' : '' }}" data-country="{{ strtolower($country) }}">
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
                            <div class="w-12 h-12 bg-gradient-to-r from-primary-400 to-secondary-400 rounded-full flex items-center justify-center text-white font-bold mr-4">
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
                                <i class="fas fa-clock mr-2"></i>
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
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Video Testimonials</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Watch our clients share their success stories</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($videoTestimonials as $video)
            <div class="bg-gray-100 rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                <div class="relative aspect-video bg-gradient-to-br from-primary-400 to-secondary-400 flex items-center justify-center">
                    <button class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center hover:bg-opacity-30 transition-all duration-300">
                        <i class="fas fa-play text-white text-xl ml-1"></i>
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
<section class="py-20 bg-gradient-to-r from-primary-600 to-secondary-600 text-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Why Clients Trust Us</h2>
            <p class="text-xl opacity-90 max-w-2xl mx-auto">Our commitment to excellence is reflected in every client relationship</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach([
                ['icon' => 'fas fa-shield-alt', 'title' => 'Secure Process', 'desc' => 'Your data is protected with bank-level security'],
                ['icon' => 'fas fa-clock', 'title' => 'Fast Processing', 'desc' => 'Quick turnaround times for all applications'],
                ['icon' => 'fas fa-users', 'title' => 'Expert Team', 'desc' => 'Experienced consultants with proven track records'],
                ['icon' => 'fas fa-headset', 'title' => '24/7 Support', 'desc' => 'Round-the-clock assistance for all your queries']
            ] as $feature)
            <div class="text-center">
                <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="{{ $feature['icon'] }} text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">{{ $feature['title'] }}</h3>
                <p class="opacity-90">{{ $feature['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6 text-center">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">Ready to Start Your Success Story?</h2>
            <p class="text-xl text-gray-600 mb-8">Join thousands of satisfied clients who achieved their visa dreams with our expert guidance</p>
            
            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{ route('apply-now') }}" class="bg-gradient-to-r from-primary-600 to-secondary-600 text-white px-8 py-4 rounded-full text-lg font-semibold hover:from-primary-700 hover:to-secondary-700 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
                    <i class="fas fa-rocket mr-2"></i>
                    Start Your Application
                </a>
                <a href="{{ route('contact') }}" class="bg-transparent border-2 border-primary-600 text-primary-600 px-8 py-4 rounded-full text-lg font-semibold hover:bg-primary-600 hover:text-white transition-colors duration-300">
                    <i class="fas fa-comments mr-2"></i>
                    Get Free Consultation
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
            filterButtons.forEach(btn => btn.classList.remove('active', 'bg-primary-600', 'text-white'));
            this.classList.add('active', 'bg-primary-600', 'text-white');
            
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