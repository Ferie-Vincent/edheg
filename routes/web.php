<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Back\CourController;
use App\Http\Controllers\Back\EventController;
use App\Http\Controllers\Back\ProfController;
use App\Http\Controllers\Back\TestimonialController;
use App\Http\Controllers\Back\FaqController;
use App\Http\Controllers\Back\ImageController;

/**
 * Profil
 */
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/**
 * Front
 */
Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/tertiaire', [FrontController::class, 'tertiaire'])->name('tertiaire');
Route::get('/industrielle', [FrontController::class, 'industrielle'])->name('industrielle');
Route::get('/faq', [FrontController::class, 'faq'])->name('faq');
Route::get('/register-online', [FrontController::class, 'register'])->name('register-online');
Route::get('/event', [FrontController::class, 'event'])->name('event');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::get('/professeurs', [FrontController::class, 'professeurs'])->name('professeurs');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');
Route::post('/faqs/send', [FaqController::class, 'send'])->name('faq.send');

/**
 * Admin
 */
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/professeurs', [AdminController::class, 'professeurs'])->name('dashboard.professeurs');

    // Images
    Route::get('/dashboard/images', [ImageController::class, 'index'])->name('dashboard.images');
    Route::post('/images/update', [ImageController::class, 'update'])->name('images.update');
});

/**
 * Cours
 */
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/cours', [CourController::class, 'index'])->name('cours');
    Route::get('/cours/create', [CourController::class, 'create'])->name('cours.create');
    Route::post('/cours/create', [CourController::class, 'store'])->name('cours.store');
    Route::get('/cours/edit/{id}', [CourController::class, 'edit'])->name('cours.edit');
    Route::put('/cours/edit/{id}', [CourController::class, 'update'])->name('cours.update');
    Route::delete('/cours/delete/{id}', [CourController::class, 'destroy'])->name('cours.destroy');
});

/**
 * Events
 */
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/events', [EventController::class, 'index'])->name('back.events');
    Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
    Route::post('/events/create', [EventController::class, 'store'])->name('events.store');
    Route::get('/events/edit/{id}', [EventController::class, 'edit'])->name('events.edit');
    Route::put('/events/edit/{id}', [EventController::class, 'update'])->name('events.update');
    Route::delete('/events/delete/{id}', [EventController::class, 'destroy'])->name('events.destroy');
});

/**
 * Profs
 */
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profs', [ProfController::class, 'index'])->name('back.profs');
    Route::get('/profs/create', [ProfController::class, 'create'])->name('back.profs.create');
    Route::post('/profs/create', [ProfController::class, 'store'])->name('profs.store');
    Route::get('/profs/edit/{id}', [ProfController::class, 'edit'])->name('profs.edit');
    Route::put('/profs/edit/{id}', [ProfController::class, 'update'])->name('profs.update');
    Route::delete('/profs/delete/{id}', [ProfController::class, 'destroy'])->name('profs.destroy');
});

/**
 * Testimonials
 */
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/testimonials', [TestimonialController::class, 'index'])->name('back.testimonials');
    Route::get('/testimonials/create', [TestimonialController::class, 'create'])->name('back.testimonials.create');
    Route::post('/testimonials/create', [TestimonialController::class, 'store'])->name('testimonials.store');
    Route::get('/testimonials/edit/{id}', [TestimonialController::class, 'edit'])->name('testimonials.edit');
    Route::put('/testimonials/edit/{id}', [TestimonialController::class, 'update'])->name('testimonials.update');
    Route::delete('/testimonials/delete/{id}', [TestimonialController::class, 'destroy'])->name('testimonials.destroy');
});

/**
 * FAQs
 */
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/faqs', [FaqController::class, 'index'])->name('back.faqs');
    Route::get('/faqs/create', [FaqController::class, 'create'])->name('back.faqs.create');
    Route::post('/faqs/create', [FaqController::class, 'store'])->name('faqs.store');
    Route::get('/faqs/edit/{id}', [FaqController::class, 'edit'])->name('faqs.edit');
    Route::put('/faqs/edit/{id}', [FaqController::class, 'update'])->name('faqs.update');
    Route::delete('/faqs/delete/{id}', [FaqController::class, 'destroy'])->name('faqs.destroy');
});

require __DIR__ . '/auth.php';
