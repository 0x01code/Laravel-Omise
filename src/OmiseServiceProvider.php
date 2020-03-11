<?php

namespace ox01code\Omise;

use ox01code\Omise\process\OmiseCharge;
use ox01code\Omise\process\OmiseSource;
use Illuminate\Support\ServiceProvider;

class OmiseServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/omise.php' => config_path('omise.php'),
        ], 'config');
    }

    public function register()
    {
        $configPath = __DIR__ . '/config/omise.php';
        $this->mergeConfigFrom($configPath, 'omise');

        $this->app->call([$this, 'registerOmiseCharge']);
        $this->app->call([$this, 'registerOmiseSource']);
    }

    public function registerOmiseCharge()
    {
        $this->app->singleton(OmiseCharge::class, function () {
            return new OmiseCharge;
        });
    }

    public function registerOmiseSource()
    {
        $this->app->singleton(OmiseSource::class, function () {
            return new OmiseSource;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    // public function provides()
    // {
    //     return [Omise::class];
    // }
}
