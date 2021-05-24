<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<h1 align="center">
Prueba técnica Ecomexperts.
</h1>

## About Project

Estableciendo  un  contexto  de  trabajo  con  MercadoLibre en  el  que queremos  realizar  nuevas
publicaciones, se deberá crear una tabla donde se puedan crear, editar, listar y eliminar artículos.
La tabla de artículos debe contener: ID | TITLE | PRICE | STATUS | QTY

Desarrollar un CRUD basado en una arquitectura REST:
Recursos:

- [Crear Artículos]() POST ‘localhost/api/articles/create’
- [Editar Artículos]() PUT ‘localhost/api/articles/edit/:id’
- [Eliminar]() DELETE ‘localhost/api/articles/:id’
- [Listar todos los Artículos]() GET ‘localhost/api/articles?page=1&limit=30&status=active’

## More

El listado tiene que ser en consultas paginadas, el límite por página tiene que ser configurable como parámetro en el request utilizando page y limit como params.
También, se debe poder filtrar los artículos por estado. status. En cada página se debe indicar la cantidad de resultados encontrados y la página actual donde se encuentra el cursor.
Ejemplo: {
        page: 1,
        limit: 30,
        results: [ {objeto}, {objeto} ,{objeto} ],
        total: 3
}

## Search Articles

-Buscar un artículo
    GET ‘localhost/api/articles/:id’
Poder consultar la cantidad de artículos por estados.

-Recurso:
    Buscar un artículo
    GET ‘localhost/api/articles/status/:status’
    => response { count: 10 }

-Ejemplo
Para saber la cantidad de publicaciones activas
GET ‘localhost/api/articles/status/active’
    Response
    {
        Count: 10
    }

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
