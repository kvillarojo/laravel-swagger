# Laravel Swagger
Test Application for implementing Swagger UI package on Laravel.

## Requirements
- AMPPS, WAMP, XAMPP or MAMP (Optional)
- Homestead (Recommended)
- Composer 1.6.5
- PHP 7.2.7

## Getting started
- Copy .env.example to .env
- Run `composer install` or `php composer.phar install` to install required packages
- Run `php artisan key:generate` to create application key
<!-- - Run `php artisan migrate` to execute outstanding migrations
- Run `php artisan db:seed --class=UsersTableSeeder` to populate users table -->

## Setup DarkaOnLine/L5-Swagger for a new project
- Run `composer require "darkaonline/l5-swagger"` to install lg-swagger package
- Run `php artisan vendor:publish --provider "L5Swagger\L5SwaggerServiceProvider"` to publish L5-Swagger's config and view files
- For Laravel >=5.5, no need to manually add `L5SwaggerServiceProvider` into `config`. It uses package auto discovery feature. Skip this if you are on >=5.5. If not, open your `AppServiceProvider` (located in app/Providers) and add this line in register function:

```php
$this->app->register(\L5Swagger\L5SwaggerServiceProvider::class);
```

or open your `config/app.php` and add this line in providers section:

```php
L5Swagger\L5SwaggerServiceProvider::class,
```

## How to access documentation
- Go to `http://your-site-url/api/documentation`

## Swagger annotations and generating documentation
In order to generate the Swagger documentation for your API, Swagger offers a set of annotations to declare and manipulate the output. These annotations can be added in your controller, model or even a separate file. An example of annotations can [be found here](https://github.com/DarkaOnLine/L5-Swagger/blob/master/tests/storage/annotations/Swagger/Anotations.php). For more info check out Swagger's ["pet store" example](https://github.com/DarkaOnLine/L5-Swagger) or the [Swagger OpenApi Specification](https://github.com/OAI/OpenAPI-Specification/blob/master/versions/2.0.md).

After the annotations have been added you can run `php artisan l5-swagger:generate` to generate the documentation. Alternatively, you can set `L5_SWAGGER_GENERATE_ALWAYS` to `true` in your `.env` file so that your documentation will automatically be generated. Make sure your settings in `config/l5-swagger.php` are complete.

# References
- [DarkaOnLine/L5-Swagger](https://github.com/DarkaOnLine/L5-Swagger)
- [Integrate Swagger API documentation with Laravel Project (L5 Swagger)](http://www.befirstcode.com/2017/03/integrate-swagger-in-laravel-project-l5.html)
