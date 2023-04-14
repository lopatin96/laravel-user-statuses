<?php

namespace Atin\LaravelUserStatuses;

use Illuminate\Support\ServiceProvider;

class UserStatusesProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        $this->publishes([
            __DIR__.'/../database/migrations' => database_path('/migrations')
        ], 'laravel-user-statuses-migrations');
    }
}