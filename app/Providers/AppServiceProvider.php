<?php

namespace App\Providers;

use App\Post;
use Carbon\Carbon;
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
        //
        \Carbon\Carbon::setLocale(config('app.locale'));

        view()->composer('layouts.sidebar', function($view){
            $view->with('archives', \App\Post::archives());
        });


    }
}
