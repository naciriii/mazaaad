<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Product;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    \URL::forceScheme('https'); 
     Product::whereDate('stop_date','<=',date('Y-m-d H:i:s'))->update(['is_available' => false]);
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
