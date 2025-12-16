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
        view()->composer(['layouts.frontend','frontend.cart','frontend.checkout','frontend.contact'], function($view){
            $cartItems = Cart::with('product')->where('customer_id', auth('customer')?->user()?->id ?? 0)->get();
            // dd($cartItems);
             $view->with('carts',[
                'count' => count($cartItems),
                'data' => $cartItems,
             ]);
        });


        Paginator::useBootstrapFive();

    }
}
