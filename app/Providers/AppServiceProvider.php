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
        \Blade::component('components.alert', 'alert_component');
        \Blade::component('components.breadcrumb', 'breadcrumb_component');
        \Blade::component('components.search', 'search_component');
        \Blade::component('components.table', 'table_component');
        \Blade::component('components.paginate', 'paginate_component');
        \Blade::component('components.page', 'page_component');
        \Blade::component('components.form', 'form_component');
    }
}
