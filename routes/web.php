<?php

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
Route::get('/cart', [CartController::class, 'cartpage'])->name('frontend.cart');


Auth::routes();
