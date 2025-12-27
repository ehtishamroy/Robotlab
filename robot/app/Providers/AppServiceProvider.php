<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Product;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Share published products with all layout views for navigation menu
        View::composer(['layouts.home', 'layouts.frontend'], function ($view) {
            $view->with('menuProducts', Product::published()->orderBy('sort_order')->orderBy('name')->take(8)->get());
        });
    }
}
