<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;

// Public routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/visa-information', [HomeController::class, 'visaInformation'])->name('visa-information');
Route::get('/apply-now', [HomeController::class, 'applyNow'])->name('apply-now');
Route::get('/testimonials', [HomeController::class, 'testimonials'])->name('testimonials');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

// Blog routes
Route::get('/blog', function () {
    return view('blog.index');
})->name('blog.index');

Route::get('/blog/{slug}', function ($slug) {
    return view('blog.show', compact('slug'));
})->name('blog.show');

// Form submission routes
Route::post('/contact', function () {
    // Handle contact form submission
    return redirect()->back()->with('success', 'Thank you for your message. We will contact you within 24 hours.');
})->name('contact.submit');

Route::post('/apply', function () {
    // Handle application form submission
    return redirect()->back()->with('success', 'Your application has been submitted. Our team will contact you within 24 hours.');
})->name('apply.submit');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('settings/password', 'settings.password')->name('password.edit');
    Volt::route('settings/appearance', 'settings.appearance')->name('appearance.edit');

    Volt::route('settings/two-factor', 'settings.two-factor')
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');
});

require __DIR__.'/auth.php';
