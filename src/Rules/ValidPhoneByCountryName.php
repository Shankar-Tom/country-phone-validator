<?php

namespace Shankar\CountryPhoneValidator\Rules;

use Illuminate\Contracts\Validation\Rule;
use Shankar\CountryPhoneValidator\Countries;

class ValidPhoneByCountryName implements Rule
{
    protected $countryName;

    public function __construct($countryName)
    {
        $this->countryName = strtolower($countryName);
    }

    public function passes($attribute, $value)
    {
        $countries = Countries::all();

        foreach ($countries as $country) {
            if (strtolower($country['name']) === $this->countryName) {
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
