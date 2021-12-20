# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/nachet/monitor.svg?style=flat-square)](https://packagist.org/packages/nachet/monitor)
[![Total Downloads](https://img.shields.io/packagist/dt/nachet/monitor.svg?style=flat-square)](https://packagist.org/packages/nachet/monitor)


This package is to monitor external servers using laravel.

## Installation

You can install the package via composer:

```bash
composer require nachet/monitor
```

## Usage
Generating a ssh key:
```bash
ssh-keygen
ssh-copy-id user@ip
```

Adding a hosty in the config file:
```bash
php artisan vendor:publish --tag=config
```
```env
HostName=ip
```
### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email inachet3@gmail.com instead of using the issue tracker.

## Credits

-   [Iheb Nachet](https://github.com/iheb69nachet)


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
