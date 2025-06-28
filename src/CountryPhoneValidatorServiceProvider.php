<?php

namespace Shankar\CountryPhoneValidator;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use Shankar\CountryPhoneValidator\Rules\PhoneNumber;

class CountryPhoneValidatorServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Validator::extend('phone_number', function ($attribute, $value, $parameters, $validator) {

            return (new PhoneNumber())->passes($attribute, $value);
        });
    }

    public function register() {}
}
