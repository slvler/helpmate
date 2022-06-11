# laravel-helper



#### Config


Run the Composer require command from the Terminal:

    composer require qwerty/helperclass dev-main
    
If you're using Laravel 8.6

the final steps for you are to add the service provider of the package and alias the package. To do this open your `config/app.php` file.

Add a new line to the `providers` array:

	Qwerty\HelperService\Providers\QwertyHelperServiceProvider::class
