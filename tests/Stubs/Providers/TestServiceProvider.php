<?php

namespace ErbiumTech\OpenPayroll\Tests\Stubs\Providers;

use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        \ErbiumTech\OpenPayroll\OpenPayroll::routes();
    }

    /**
     * Register any application services.
     */
    public function register()
    {
    }
}
