<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ProductController;
use Faker\Guesser\Name;

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
});
