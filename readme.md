## Forum based on Laravel PHP Framework

## Установка

Клонируйте репозиторий. Далее запускаете ```$ composer install``` далее, в файле /config/app.php в массиве providers
раскомментируйте следующее:
```
Collective\Html\HtmlServiceProvider::class,
Spatie\Glide\GlideServiceProvider::class,
```
 и в массиве aliases:
```
'Form' => Collective\Html\FormFacade::class,
'Html' => Collective\Html\FormFacade::class,
'GlideImage' => 'Spatie\Glide\GlideImageFacade',
```
Для добавления файла конфигурации пакета Laravel-Glide в ```config/``` выполните:
 ```php artisan vendor:publish --provider="Spatie\Glide\GlideServiceProvider"```

Создайте файл .env, пропишите туда название БД и пользователя. Чтобы получить чистую структуру таблиц, выполните
```$ php artisan migrate```

Чтобы заполнить БД тестовыми данными, выполните последовательно:
```
$ composer dump-autoload
$ php artisan migrate:refresh --seed
```

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

## Official Laravel Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
