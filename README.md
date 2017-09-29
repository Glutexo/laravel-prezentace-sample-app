# Ukázková aplikace v Laravelu #

## Nový projekt ##

Nejprve musíme vytvořit projekt. To za nás udělá [Composer].

```
composer create-project --prefer-dist laravel/laravel sample-app
```

Ve složce s laravelí aplikací, v našem případě _sample-app_ máme po ruce nástroj [Artisan]. Jeho pomocí spustíme jednoduchý nativní PHP server.

```
php artisan serve
```

[Composer]: https://www.getcomposer.org/
[Artisan]: https://laravel.com/docs/5.5/artisan
