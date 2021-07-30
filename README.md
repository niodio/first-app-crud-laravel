<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Sobre o App

Meu primeiro web app creado com laravel, um simples crud.

### Install Laravel

-   **composer create-project --prefer-dist laravel/laravel blog**

### Configurando a DataBase

-   **.env**

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=here your database name(blog)
DB_USERNAME=here database username(admin)
DB_PASSWORD=here database password(admin)

### Create Migration

-   **php artisan make:migration create_products_table --create=products**

Após este comando, teremos o diretório "database/migrations"

-   **Crie uma database com o nome blog**
-   **Rode o comando... php artisan migrate**

### Add Resource Route

-   **Abra o arquivo "routes/web.php"**

use App\Http\Controllers\ProductController;
Route::resource('products', ProductController::class);

### Add Controller and Model

-   **Criando o controller ProductController com o comando abaixo**
-   **php artisan make:controller ProductController --resource --model=Product**

### Adiciona Arquivos Blade

-   **Crie as view blade no diretorio resources/view/products**
    (1) layout.blade.php
    (2) index.blade.php
    (3) create.blade.php
    (4) edit.blade.php
    (5) show.blade.php

-   **Rode o comando php artisan serve**
-   **Acesse http://localhost:8000/products**

#Minhas observações:

Para um primeiro contato com Laravel, achei o framework bastante intuitivo mas ainda tenho muito a aprender, repetição leva à perfeição.
