# Quickly dd anything from the commandline

[![Latest Version on Packagist](https://img.shields.io/packagist/v/spatie/laravel-artisan-dd.svg?style=flat-square)](https://packagist.org/packages/spatie/laravel-artisan-dd)
[![run-tests](https://github.com/spatie/laravel-artisan-dd/actions/workflows/run-tests.yml/badge.svg)](https://github.com/spatie/laravel-artisan-dd/actions/workflows/run-tests.yml)
![Check & fix styling](https://github.com/spatie/laravel-artisan-dd/workflows/Check%20&%20fix%20styling/badge.svg)
[![Total Downloads](https://img.shields.io/packagist/dt/spatie/laravel-artisan-dd.svg?style=flat-square)](https://packagist.org/packages/spatie/laravel-artisan-dd)

[Laravel's tinker command](https://github.com/laravel/tinker) allows to run any code you want as if you are inside your Laravel app. But if you want to run a single line of code if can be a bit bothersome. You must start up tinker, type the code, press enter, and quit tinker.

This package contains an Artisan command to dd anything from the commandline. No need to start and quit tinker anymore.

```bash
# dumps the first user
php artisan dd "User::first()"
```

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-artisan-dd.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/laravel-artisan-dd)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require spatie/laravel-artisan-dd
```

You must register the `Spatie\ArtisanDd\DdCommand` in the bootstrap file:

```php
// bootstrap/app.php

->withCommands([
    \Spatie\ArtisanDd\DdCommand::class,
])
```

## Usage

You can pass any code you want to execute as the first argument. The result will be dumped to the screen.

``` bash
php artisan dd "bcrypt('secret')"; 
```

Multiple pieces of code can be dumped in one go:

``` bash
php artisan dd "bcrypt('secret')" "bcrypt('another-secret')"; 
```

## Support for short class names

Under the hood registers short class names using our [laravel-tinker-tools](https://github.com/spatie/laravel-tinker-tools) package. So instead of 

```php
php artisan dd "\App\Models\NewsItem::first()"; 
```

you can do this:

```php
php artisan dd "NewsItem::first()"; 
```

## A word to the wise

This command can run arbitrary code by using PHP's `eval`. Be aware that this can be potentially dangerous. By default the command will only run in a `local` environment. You can make it run in other environments by setting an `ALLOW_DD_COMMAND` enviroment variable to `true`. 

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security

If you've found a bug regarding security please mail [security@spatie.be](mailto:security@spatie.be) instead of using the issue tracker.

## Credits

- [Freek Van der Herten](https://github.com/freekmurze)
- [All Contributors](../../contributors)

Idea: [Sebastian De Deyne](https://github.com/sebastiandedeyne)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
