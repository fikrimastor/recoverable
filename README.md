# Recoverable : Another Laravel Package For Model Class

[![Latest Version on Packagist](https://img.shields.io/packagist/v/fikrimastor/recoverable.svg?style=flat-square)](https://packagist.org/packages/fikrimastor/recoverable)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/fikrimastor/recoverable/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/fikrimastor/recoverable/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/fikrimastor/recoverable/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/fikrimastor/recoverable/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/fikrimastor/recoverable.svg?style=flat-square)](https://packagist.org/packages/fikrimastor/recoverable)

Laravel eloquent model recoverable traits consist of duplicate, cascade soft delete and restore.

## Installation

You can install the package via composer:

```bash
composer require fikrimastor/recoverable
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="recoverable-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="recoverable-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="recoverable-views"
```

## Usage

```php
$recoverable = new FikriMastor\Recoverable();
echo $recoverable->echoPhrase('Hello, FikriMastor!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any
contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also
simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Fikri Mastor](https://github.com/fikrimastor)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
