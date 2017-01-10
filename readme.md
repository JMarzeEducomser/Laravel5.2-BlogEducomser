# Curso de Laravel 5.2 (Framework Php) - Educomser SRL

> Curso de Laravel 5.2 para Educomser SRL.

## Documentación Oficial

Recuerda revisar la documentación para reforzar los conocimientos impartidos [Laravel website](https://laravel.com/docs/5.2).

## Trabajos de Investigación

Todos los trabajos deben ser enviados por correo electrónico en formato texto.

1. Realizar ejemplos puntuales (¿para que sirve cada uno?) sobre los métodos permitidos en las rutas (patch y options). Se requieren los archivos: routes.php. [Routing](https://laravel.com/docs/5.2/routing)
2. ¿Qué es homestead y valet para Laravel?
3. Investigue sobre la encriptación en Laravel
4. Implemente migraciones y modelos para los siguientes requerimientos: Los usuarios del sistema pueden comentar sobre los posts publicados, Los usuarios del sistema puden calificar los posts de 0 a 5 estrellas, Los usuarios del sistema pueden responder a los comentarios de otros usuarios. Se requiere los archivos: Migraciones y Modelos. [Migrations](https://laravel.com/docs/5.2/migrations), [Eloquent ORM](https://laravel.com/docs/5.2/eloquent), [Relationships](https://laravel.com/docs/5.2/eloquent-relationships)
5. Implemente controlador, vista y rutas para las entidades: Categoría y Tag. Se requiere los archivos: Controlador, Vistas y routes.php.
6. Implementar CRUD en las entidades Categoría y Tag. Se requiere los archivos: CategoriaController y TagController.
7. Implementar la recuperación de Posts eliminados. Se requiere el controlador.

## Notas Parciales

Código de Alumno | Email | Asistencia (25) | TI-01 | TI-02 | TI-03 | TI-04 | TI-05 | Examen Final (40) | Extras | Nota Final (100)
--- | :---: | :---: | :---: | :---: | :---: | :---: | :---: | :---: | :---: | :---:
ACE020285 |
CLE080386 | erickcastillolaura@gmail.com
FUD210474 | dsflores@gmail.com
GGM230183 |
GVJ050286 |
LCJ040178 |
QCR300690 | rodrigo.quiroga.challco@gmail.com
MEG190892 | gaby.murga.space@gmail.com
MGJ031077 |
MVE300689 | ely22.valencia@gmail.com

## Comandos Artisan

Crear un proyecto Laravel 5.2
```javascript
composer create-project --prefer-dist laravel/laravel nombreCarpetaDestino "5.2.*"
```
Ejecutar el Servidor Artisan:
```javascript
php artisan serve
```
Crear un Controlador
```javascript
php artisan make:controller NombreSingularController
php artisan make:controller NombreSingularController --resource
```
Cambiar Namespace
```javascript
php artisan app:name Namespace
```
Cambiar Key
```javascript
php artisan key:generate
```
Crear una Migración
```javascript
php artisan make:migration crate_entidadPlural_table --create=entidadPlural
```
Ejecutar Migraciones
```javascript
php artisan migrate
php artisan migrate --seed
php artisan migrate:refresh --seed
```
Ejecutar un Seeder determinado
```javascript
php artisan db:seed --class=NombreTableSeeder
```
Crear un Modelo
```javascript
php artisan make:model EntidadSingular
```
Crear un Seeder
```javascript
php artisan make:seeder EntidadPluralTableSeeder
```

## Facilitador

J. Marcelo Arze - Lic. en Informática
- [marze@educomser.com](marze@educomser.com)
- [arze.jesus@gmail.com](arze.jesus@gmail.com)