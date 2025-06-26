<?php

namespace Shankar\CountryPhoneValidator;

use Illuminate\Support\ServiceProvider;

class CountryPhoneValidatorServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/data/countries.php' => config_path('countries.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/data/countries.php', 'countries');
    }
}
