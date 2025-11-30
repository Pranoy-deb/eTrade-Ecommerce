<?php

use App\Http\Controllers\Auth\CustomerAuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ShopController;

Route::get('/', [HomeController::class, 'index'])->name('frontend.home');

//Shop page route
Route::get('/shop', [ShopController::class, 'shopPage'])->name('frontend.shop');

// Product Single Page
Route::get('/product/{product:slug}', [HomeController::class, 'showSingleProduct'])->name('frontend.product.single');

// Cart page route
Route::post('/add-to-cart', [CartController::class, 'addToCard'])->name('frontend.cart');

// Customer Auth Routes
Route::get('/customer/sign-in', [CustomerAuthController::class, 'showLoginForm'])->name('frontend.customer.login');
Route::get('/customer/sign-up', [CustomerAuthController::class, 'showSignUpForm'])->name('frontend.customer.signup');
Route::post('/customer/register', [CustomerAuthController::class, 'register'])->name('frontend.customer.register');
Route::get('/customer/profile', [CustomerAuthController::class, 'showProfile'])->name('frontend.customer.profile');

Auth::routes();
