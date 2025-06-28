
# country-phone-validator

A Laravel package for validating mobile phone numbers across different countries with additional features.

## Features

- Validate phone numbers for 200+ countries
- Check if a number belongs to a specific country
- Get country code from phone number
- Format phone numbers according to international standards
- Support for custom validation rules
- Easy integration with Laravel validation system



## Installation

You can install this package via Composer:

```bash
composer require shankar/country-phone-validator
```

The package will be auto-discovered by Laravel. If you are not using package auto-discovery, add the service provider to your `config/app.php`:

```php
'providers' => [
    // ...
    Shankar\CountryPhoneValidator\CountryPhoneValidatorServiceProvider::class,
],
```



## Usage

### Basic Phone Number Validation

```php
use Shankar\CountryPhoneValidator\Rules\PhoneNumber;

$request->validate([
    'phone' => ['required', new PhoneNumber],
]);
```

### Validate by Country Name

```php
use Shankar\CountryPhoneValidator\Rules\ValidPhoneByCountryName;

$request->validate([
    'phone' => ['required', new ValidPhoneByCountryName('India')],
]);
```

### Validate by Dial Code

```php
use Shankar\CountryPhoneValidator\Rules\ValidPhoneByDialCode;

$request->validate([
    'phone' => ['required', new ValidPhoneByDialCode('+91')],
]);
```



## Country Names and Dial Codes

You can retrieve the list of supported countries with their dial codes and validation regex using the `Countries` class:

```php
use Shankar\CountryPhoneValidator\Countries;

$countries = Countries::all();
// Example output:
// [
//     [
//         'name' => 'India',
//         'dial_code' => '+91',
//         'regex' => '/^...$/'
//     ],
//     ...
// ]
```



