## Helper Class

[![tests](https://github.com/slvler/helpmate/actions/workflows/Tests.yml/badge.svg)](https://github.com/slvler/helpmate/actions/workflows/Tests.yml)
[![Latest Stable Version](https://poser.pugx.org/slvler/helpmate/v)](https://packagist.org/packages/slvler/helpmate)
[![Latest Unstable Version](https://poser.pugx.org/slvler/helpmate/v/unstable)](https://packagist.org/packages/slvler/helpmate)
[![License](https://poser.pugx.org/slvler/helpmate/license)](https://packagist.org/packages/slvler/helpmate)
[![Total Downloads](https://poser.pugx.org/slvler/helpmate/downloads)](https://packagist.org/packages/slvler/helpmate)

A simple helper class implementation for Laravel.
#### Config
- Run the Composer require command from the Terminal:
```bash
composer require slvler/helpmate
```
- If you're using Laravel 8.6
- the final steps for you are to add the service provider of the package and alias the package. To do this open your `config/app.php` file.
- Add a new line to the `providers` array:
```php
Qwerty\HelperService\Providers\QwertyHelperServiceProvider::class
```
- function list command the Terminal:
```php
php artisan helper:list
```
