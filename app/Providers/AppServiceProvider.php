<?php

namespace App\Providers;

use App\Models\Industry;
use App\Models\Product;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

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

        try {
            $industriesHeader=Industry::where('is_industry', true)->get();
            $productsFooter=Product::where('is_active', true)->orderBy('id', 'desc')->get()->take(10);
            //code...
        } catch (\Throwable $th) {
            $industriesHeader = null;
            $productsFooter = null;
        }

        View::share('industriesHeader',$industriesHeader);
        View::share('productsFooter',$productsFooter);
        Validator::extend('recaptcha', 'App\Validators\\ReCaptcha@validate');

    }
}
