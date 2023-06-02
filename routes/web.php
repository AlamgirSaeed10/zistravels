<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('cheap-flights',[HomeController::class,'cheap_flights'])->name('home.cheap_flights');
Route::get('business-class',[HomeController::class,'business_class'])->name('home.business_class');
Route::get('why-us',[HomeController::class,'why_us'])->name('home.why_us');
Route::get('booking-conditions',[HomeController::class,'booking_conditions'])->name('home.booking_conditions');
Route::get('customer-faqs',[HomeController::class,'customer_faqs'])->name('home.customer_faqs');
Route::get('about-us',[HomeController::class,'about_us'])->name('home.about_us');
Route::get('blogs',[HomeController::class,'blogs'])->name('home.blogs');
Route::get('contact-us',[HomeController::class,'contact_us'])->name('home.contact_us');
Route::get('customer-reviews',[HomeController::class,'customer_reviews'])->name('home.customer_reviews');
Route::get('privacy-policy',[HomeController::class,'privacy_policy'])->name('home.privacy_policy');
Route::get('travel-tips',[HomeController::class,'travel_tips'])->name('home.travel_tips');
