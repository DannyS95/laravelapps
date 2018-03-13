<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Billing\Stripe;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.sidebar', function ($view){
            $archives = \App\Posts::archives();
            $tags = \App\Tag::has('posts')->pluck('name');
            $view->with(['archives' => $archives, 'tags' => $tags]);
        });


        Schema::defaultStringLength(191);
    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Stripe::class, function($app){
            return new Stripe(config('services.stripe.secret'));
        });
    }
}
