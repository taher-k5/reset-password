# This is my package reset-password

[![Latest Version on Packagist](https://img.shields.io/packagist/v/taher-k5/reset-password.svg?style=flat-square)](https://packagist.org/packages/taher-k5/reset-password)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/taher-k5/reset-password/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/taher-k5/reset-password/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/taher-k5/reset-password/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/taher-k5/reset-password/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/taher-k5/reset-password.svg?style=flat-square)](https://packagist.org/packages/taher-k5/reset-password)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require taher-k5/reset-password
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="reset-password-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="reset-password-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="reset-password-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$resetPassword = new SFS\ResetPassword();
echo $resetPassword->echoPhrase('Hello, SFS!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Taher kathiriya](https://github.com/taher-k5)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
