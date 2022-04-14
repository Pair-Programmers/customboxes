<?php

namespace App\Providers;

use App\Models\Industry;
use App\Models\Product;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        Schema::defaultStringLength(191);

        $industriesHeader=Industry::where('is_industry', true)->get();
        View::share('industriesHeader',$industriesHeader);

        $productsFooter=Product::where('is_active', true)->orderBy('id', 'desc')->get()->take(12);
        View::share('productsFooter',$productsFooter);

    }
}
