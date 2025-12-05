<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ShopController;
use App\Http\Controllers\Frontend\AboutUsController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Auth\CustomerAuthController;

// Home page route
Route::get('/', [HomeController::class, 'index'])->name('frontend.home');

//Shop page route
Route::get('/shop', [ShopController::class, 'shopPage'])->name('frontend.shop');

//Single Product  Page show
Route::get('/product/{product:slug}', [HomeController::class, 'showSingleProduct'])->name('frontend.product.single');

// Cart page route
Route::get('/cart/view', [CartController::class, 'viewCard'])->name('frontend.carts.view')->middleware('customer');
Route::post('/add-to-cart', [CartController::class, 'addToCard'])->name('frontend.cart')->middleware('customer');

// Checkout page route
Route::get('/checkout', [CartController::class, 'checkOutPage'])->name('frontend.checkout')->middleware('customer');

// Customer Auth Routes
Route::get('/customer/sign-in', [CustomerAuthController::class, 'showLoginForm'])->name('frontend.customer.login');
Route::post('/customer/login', [CustomerAuthController::class, 'login'])->name('frontend.customer.login.confirm');
Route::get('/customer/sign-up', [CustomerAuthController::class, 'showSignUpForm'])->name('frontend.customer.signup');
Route::post('/customer/register', [CustomerAuthController::class, 'register'])->name('frontend.customer.register');
Route::post('/customer/logout', [CustomerAuthController::class, 'logout'])->name('frontend.customer.logout');
Route::get('/customer/my-profile', [CustomerAuthController::class, 'showProfile'])->name('frontend.customer.profile')->middleware('customer');

// Contact page route
Route::get('/contact', [ContactController::class, 'contactPage'])->name('frontend.contact');

// About Us page route
Route::get('/about-us', [AboutUsController::class, 'aboutUsPage'])->name('frontend.about-us');

Auth::routes();

// Show 404 page for undefined routes
Route::fallback(function(){
    return response()->view('frontend.404', [], 404);

});