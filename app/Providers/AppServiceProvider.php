<?php

namespace App\Providers;

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
        $this->app->bind('App\Repositories\Contracts\SecretariaRepositoryInterface','App\Repositories\Eloquent\SecretariaRepository');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Blade::component('components.alert', 'alert');
        // Blade::component('components.breadcrumb', 'breadcrumb');
    }
}
