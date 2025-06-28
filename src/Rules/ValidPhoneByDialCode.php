<?php

namespace Shankar\CountryPhoneValidator\Rules;

use Illuminate\Contracts\Validation\Rule;
use Shankar\CountryPhoneValidator\Countries;

class ValidPhoneByDialCode implements Rule
{
    protected $dialCode, $countryName;

    public function __construct($dialCode)
    {
        $this->dialCode = $dialCode;
    }

    public function passes($attribute, $value)
    {
        $countries = Countries::all();


        foreach ($countries as $country) {
            if ($country['dial_code'] === $this->dialCode) {
                $this->countryName = $country['name'];
                return preg_match($country['regex'], $value);
            }
        }

        return false;
    }

    public function message()
    {
        return "The :attribute is not a valid phone number for {$this->countryName}.";
    }
}
