<?php

namespace App\Providers;

use App\Models\Cart;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('layouts.frontend', function($view){
            $cartItems = Cart::where('customer_id', auth('customer')?->user()?->id ?? 0)->get();
             $view->with('carts',[
                'count' => count($cartItems),
                'data' => $cartItems,
             ]);
        });


        Paginator::useBootstrapFive();

    }
}
