<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View; // Import View facade
use Illuminate\Support\Facades\Auth; // Import Auth facade
use App\Models\Cart; // Import the Cart model

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
        // Share cart count with all views
        View::composer('*', function ($view) {
            $cart_count = 0;

            // Check if the user is authenticated
            if (Auth::check()) {
                // Get the count of cart items for the authenticated user
                $cart_count = Cart::where('userid', Auth::user()->id)->count();
            }

            // Share the cart count with all views
            $view->with('cart_count', $cart_count);
        });
    }
}
