# Quickly dd anything from the commandline

[![Latest Version on Packagist](https://img.shields.io/packagist/v/spatie/laravel-artisan-dd.svg?style=flat-square)](https://packagist.org/packages/spatie/laravel-artisan-dd)
![GitHub Workflow Status](https://img.shields.io/github/workflow/status/spatie/laravel-artisan-dd/run-tests?label=tests)
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

## Installation

You can install the package via composer:

```bash
composer require spatie/laravel-artisan-dd
```

You must register the `Spatie\ArtisanDd\DdCommand` in the console kernel.

```php
// app/Console/Kernel.php

protected $commands = [
    ...
    \Spatie\ArtisanDd\DdCommand::class,
];
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

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email freek@spatie.be instead of using the issue tracker.

## Postcardware

You're free to use this package (it's [MIT-licensed](LICENSE.md)), but if it makes it to your production environment we highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using.

Our address is: Spatie, Samberstraat 69D, 2060 Antwerp, Belgium.

We publish all received postcards [on our company website](https://spatie.be/en/opensource/postcards).

## Credits

- [Freek Van der Herten](https://github.com/freekmurze)
- [All Contributors](../../contributors)

Idea: [Sebastian De Deyne](https://github.com/sebastiandedeyne)

## Support us

Spatie is a webdesign agency based in Antwerp, Belgium. You'll find an overview of all our open source projects [on our website](https://spatie.be/opensource).

Does your business depend on our contributions? Reach out and support us on [Patreon](https://www.patreon.com/spatie). 
All pledges will be dedicated to allocating workforce on maintenance and new awesome stuff.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
