# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/spatie/laravel-artisan-dd.svg?style=flat-square)](https://packagist.org/packages/spatie/laravel-artisan-dd)
[![Build Status](https://img.shields.io/travis/spatie/laravel-artisan-dd/master.svg?style=flat-square)](https://travis-ci.org/spatie/laravel-artisan-dd)
[![SensioLabsInsight](https://img.shields.io/sensiolabs/i/8358d984-f9e9-4de2-a69e-b6bd5369694b.svg?style=flat-square)](https://insight.sensiolabs.com/projects/8358d984-f9e9-4de2-a69e-b6bd5369694b)
[![StyleCI](https://styleci.io/repos/91107001/shield?branch=master)](https://styleci.io/repos/91107001)
[![Quality Score](https://img.shields.io/scrutinizer/g/spatie/laravel-artisan-dd.svg?style=flat-square)](https://scrutinizer-ci.com/g/spatie/laravel-artisan-dd)
[![Total Downloads](https://img.shields.io/packagist/dt/spatie/laravel-artisan-dd.svg?style=flat-square)](https://packagist.org/packages/spatie/laravel-artisan-dd)

[Laravel's tinker command](https://github.com/laravel/tinker) allows to run any code you want as if you are inside your Laravel app. But if you want to run a single line of code if can be a bit bothersome. You must start up tinker, type the code, press enter, and quit tinker.

This package contains an Artisan command to dd anything from the commandline. No need to start and quit tinker anymore.

```bash
# dumps the first user
php artisan dd "User::first()"
```

## Postcardware

You're free to use this package (it's [MIT-licensed](LICENSE.md)), but if it makes it to your production environment we highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using.

Our address is: Spatie, Samberstraat 69D, 2060 Antwerp, Belgium.

We publish all received postcards [on our company website](https://spatie.be/en/opensource/postcards).

## Installation

You can install the package via composer:

```bash
composer require spatie/laravel-artisan-dd
```



## Usage

``` php
$skeleton = new Spatie\Skeleton();
echo $skeleton->echoPhrase('Hello, Spatie!');
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email freek@spatie.be instead of using the issue tracker.

## Credits

- [Freek Van der Herten](https://github.com/freekmurze)
- [All Contributors](../../contributors)

## About Spatie

Spatie is a webdesign agency based in Antwerp, Belgium. You'll find an overview of all our open source projects [on our website](https://spatie.be/opensource).

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
