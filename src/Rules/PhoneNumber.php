<?php

namespace Shankar\CountryPhoneValidator\Rules;

use Illuminate\Contracts\Validation\Rule;
use Shankar\CountryPhoneValidator\Countries;

class PhoneNumber implements Rule
{


    public function passes($attribute, $value)
    {
        return preg_match('/^\+?[0-9]{7,15}$/', $value);
    }
    public function message()
    {
        return 'The :attribute must be a valid phone number.';
    }
}
