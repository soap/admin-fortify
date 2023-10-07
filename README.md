# Extends Fortify to support Admin area authentication for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/soap/admin-fortify.svg?style=flat-square)](https://packagist.org/packages/soap/admin-fortify)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/soap/admin-fortify/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/soap/admin-fortify/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/soap/admin-fortify/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/soap/admin-fortify/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/soap/admin-fortify.svg?style=flat-square)](https://packagist.org/packages/soap/admin-fortify)

This package extends laravel/fortify to support multiple zone authentication using role guard for each zone (not multiple guards).

## Feeatures
- Multiple zones support for authentication e.g. https://example.com/login for staff and https://example.com/admin/login for administrators.
- Artisan command to add zone (separate route files and different feature). Admin zone may not require password reset feature etc.

## Support us

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require soap/admin-fortify
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="admin-fortify-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$adminFortify = new Soap\AdminFortify();
echo $adminFortify->echoPhrase('Hello, Soap!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Prasit Gebsaap](https://github.com/soap)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
