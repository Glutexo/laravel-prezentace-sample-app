# Ukázková aplikace v Laravelu #

## Nový projekt ##

Nejprve musíme vytvořit projekt. To za nás udělá [Composer].

```
$ composer create-project --prefer-dist laravel/laravel sample-app
```

Ve složce s laravelí aplikací, v našem případě _sample-app_ máme po ruce nástroj [Artisan]. Jeho pomocí spustíme jednoduchý nativní PHP server.

```
$ php artisan serve
```

## Směrování ##

Třídu ovladače (Controller), stejně jako mnohé další, nám opět pomůže vytvořit [Artisan].

```
$ php artisan make:controller PostsController
```

## Databáze ##

Soubor s [Sqlite3] databází vytvoříme konzolovým příkazem následovaným libovolným SQL dotazem.

```
$ sqlite3 database/database.sqlite
sqlite> SELECT * FROM `sqlite_master`;
```

Novou migraci s tabulkou příspěvků nám vytvoří a spustí opět [Artisan]. Stejně tak nám vytvoří třídu modelu.

```
$ php artisan make:migration create_users_table
$ php artisan migrate
$ php artisan make:model Post
```

[Composer]: https://www.getcomposer.org/
[Artisan]: https://laravel.com/docs/5.5/artisan
[Sqlite3]: https://sqlite.org/

## Middleware ##

Nový middleware nám připraví náš známý [Artisan].

```
$ php artisan make:middleware LoggerMiddleware
```

## E-maily ##

I o vytvoření e-mailové třídy se postará [Artisan].

```
$ php artisan make:mail HelloWorld
```

## Úlohy ##

Založení nové úlohy je také úkolem [Artisanu][Artisan].

```
$ php artisan make:job SendMail
```

Při použití ovladače _database_ je nutné nejprve vytvořit datbázovou tabulku. [Artisan] obstará i to.

```
$ php artisan queue:table
$ php artisan migrate
```

Opět [Artisanem][Artisan] se úlohy ve frontě spustí. Parametr `--once` způsobí, že se po vyprázdnění fronty zpracování zastaví. Bez něj zůstane proces běžet a bude zpracovávat nově přibyvší úlohy.

```
$ php artisan queue:work --once
```

## Příkazy ##

Do [Artisanu][Artisan] můžeme doplňovat i vlastní příkazy. Sám [Artisan] se postará o jejich vytvoření.

```
$ php artisan make:command Hello
```

