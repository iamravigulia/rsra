<?php

namespace edgewizz\rswa;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class RswaServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Edgewizz\Rswa\Controllers\RswaController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // dd($this);
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadViewsFrom(__DIR__ . '/components', 'rswa');
        Blade::component('rswa::rswa.open', 'rswa.open');
        Blade::component('rswa::rswa.index', 'rswa.index');
        Blade::component('rswa::rswa.edit', 'rswa.edit');
    }
}
