<?php
namespace Todolist;

use Illuminate\Support\ServiceProvider;
use Todolist\TodolistController;

class TodolistServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadViewsFrom(__DIR__.'/views', 'todolist');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/devlabs/todolist'),
        ], 'views');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Todolist\TodolistController');
    }
}
