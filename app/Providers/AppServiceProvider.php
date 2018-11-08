<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Service Spl 
        $this->app->when('App\Http\Controllers\SplController')
                  ->needs('App\Domain\Contracts\SplInterface')
                  ->give('App\Domain\Repositories\SplRepository');
        // Service User 
        $this->app->when('App\Http\Controllers\UserController')
                  ->needs('App\Domain\Contracts\UserInterface')
                  ->give('App\Domain\Repositories\UserRepository');
    }
}
