<?php

namespace CountryPhoneValidator\Helpers;

class Countries
{
    protected static $countries = [
        [
            "name" => "India",
            "dial_code" => "+91",
            "iso_code" => "IN",
            "regex" => "/^[6-9]\d{9}$/"
        ],
        [
            "name" => "United States",
            "dial_code" => "+1",
            "iso_code" => "US",
            "regex" => "/^\d{10}$/"
        ],
        [
            "name" => "United Kingdom",
            "dial_code" => "+44",
            "iso_code" => "GB",
            "regex" => "/^\d{10}$/"
        ]
        // Add more countries as needed
    ];

    public static function findByDialCode(string $dialCode): ?array
    {
        foreach (self::$countries as $country) {
            if ($country['dial_code'] === $dialCode) {
                return $country;
            }
        }
        return null;
    }

    public static function findByName(string $name): ?array
    {
        foreach (self::$countries as $country) {
            if (strtolower($country['name']) === strtolower($name)) {
                return $country;
            }
        }
        return null;
    }
}
