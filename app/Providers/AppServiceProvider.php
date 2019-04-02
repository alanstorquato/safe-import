<?php

namespace App\Providers;

use App\Post;
use function foo\func;
use Illuminate\Support\ServiceProvider;
use \App\Billing\Stripe;

class AppServiceProvider extends ServiceProvider
{
    protected $defer = true;
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
        dd(Post::archives());
        //
        view()->composer('layouts.sidebar', function($view){
            $view->with('archives', \App\Post::archives());
        });


        \Carbon\Carbon::setLocale('pt-BR');
    }
}
