<?php

namespace FilippoToso\PositionStack;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->singleton('positionstack', function () {
            return new Client(config('services.positionstack.key'));
        });
    }
}
