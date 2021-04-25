<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Sobre el proyecto

Este proyecto esta configurado con un sistema de autenticación basado en token el cual utiliza laravel passport para gestionar a traves de JWT los siguientes modulos:

-   Usuarios
-   Clientes

Para instalar el proyecto en un entorno local siga esta guia de instalación paso a paso.

## Guia de instalación

```
git clone https://github.com/JuanKno/crm-passport.git
```

-   En la raiz del proyecto ejecute

    ```
    composer install

    ```

    -   Asegurese de ejecutar las migraciones

    ```
    php artisan migrate --seed

    ```

    -   luego instale los recursos necesarios para que passport funcione adecuadamente

    ```
    php artisan passport:install

    ```

    -   Ejecute el proyecto en un entorno local

    ```
    php artisan serve

    ```

    -   por último asegurese de tener una herramienta con la cual hacer las peticiones a la API
    -   [postman](https://www.postman.com/downloads/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
