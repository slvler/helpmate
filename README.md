## LaravelHelperClass
[![Latest Stable Version](http://poser.pugx.org/qwerty/helperclass/v)](https://packagist.org/packages/qwerty/helperclass)
[![Latest Unstable Version](http://poser.pugx.org/qwerty/helperclass/v/unstable)](https://packagist.org/packages/qwerty/helperclass) 
[![License](http://poser.pugx.org/qwerty/helperclass/license)](https://packagist.org/packages/qwerty/helperclass)


A simple helper class implementation for Laravel.

#### Config


Run the Composer require command from the Terminal:

    composer require slvler/helpmate
    
If you're using Laravel 8.6

the final steps for you are to add the service provider of the package and alias the package. To do this open your `config/app.php` file.

Add a new line to the `providers` array:

	Qwerty\HelperService\Providers\QwertyHelperServiceProvider::class



function list command the Terminal:

    php artisan helper:list
