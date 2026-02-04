<?php

use Faker\Guesser\Name;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Backend\MessageController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ReviewsController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\DashboardController;

//Admin Logout
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');


Route::middleware('auth')->group(function(){
    Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    //*Category route
    Route::controller(CategoryController::class)->prefix('/categories')->name('category.')->group(function(){
        Route::get('/', 'index')->name('index');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{category}', 'Edit')->name('edit');
        Route::post('/update/{category}', 'Update')->name('update');
        Route::get('/delete/{category}', 'delete')->name('delete');
    });

    //*Products Route
    Route::controller(ProductController::class)->prefix('/products')->name('product.')->group(function(){
        Route::get('/', 'index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store', 'store')->name('store');   
        Route::get('/edit/{product}', 'Edit')->name('edit');
        Route::post('/update/{product}', 'Update')->name('update');
        Route::get('/delete/{product}', 'Delete')->name('delete');
    });

    //* Message Route
    Route::get('/message', [MessageController::class , 'showUserMsg'])->name('message');
    Route::post('/message/markasread/{message}', [MessageController::class, 'markAsRead'])->name('message.markasread');

    //*  Customer Route
    Route::get('/customers', [CustomerController::class, 'allCustomer'])->name('customers');

    // Reviews
    Route::get('/reviews', [ReviewsController::class, 'reviews'])->name('reviews');
    Route::post('/reviews/approve/{review}', [ReviewsController::class, 'approveReview'])->name('reviews.approve');
    
});
