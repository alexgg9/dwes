¡Entendido! A continuación, te dejo la documentación ajustada sin la parte de instalación de Laravel:

---

# Documentación Básica de Laravel

## Índice

1. [Introducción](https://chatgpt.com/#introducci%C3%B3n)
2. [Migraciones](https://chatgpt.com/#migraciones)
   1. [Comando de Migración](https://chatgpt.com/#comando-de-migraci%C3%B3n)
   2. [Crear una Migración](https://chatgpt.com/#crear-una-migraci%C3%B3n)
   3. [Ejecutar Migraciones](https://chatgpt.com/#ejecutar-migraciones)
3. [Modelos](https://chatgpt.com/#modelos)
   1. [Creación de un Modelo](https://chatgpt.com/#creaci%C3%B3n-de-un-modelo)
   2. [Uso de Eloquent en Modelos](https://chatgpt.com/#uso-de-eloquent-en-modelos)
4. [Comandos Artisan](https://chatgpt.com/#comandos-artisan)
5. [Conclusión](https://chatgpt.com/#conclusi%C3%B3n)

---

## Introducción

Laravel es un framework PHP robusto y fácil de usar, que proporciona herramientas elegantes para el desarrollo de aplicaciones web. En este archivo, se explica cómo trabajar con migraciones, modelos y comandos dentro de un proyecto Laravel.

---

## Migraciones

Las migraciones en Laravel son una forma de versionar y controlar el esquema de la base de datos. Nos permiten realizar cambios en la estructura de la base de datos de forma ordenada.

### Comando de Migración

Para generar una migración, puedes usar el comando `make:migration` de Artisan. La sintaxis básica es:

```bash
php artisan make:migration nombre_de_migracion
```

Este comando creará un archivo de migración en la carpeta `database/migrations` con un esquema base para crear o modificar una tabla en la base de datos.

### Crear una Migración

Por ejemplo, si deseas crear una migración para una tabla `posts`, puedes ejecutar el siguiente comando:

```bash
php artisan make:migration create_posts_table
```

Este comando creará un archivo de migración en `database/migrations` con un contenido similar a esto:

```php
public function up()
{
    Schema::create('posts', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('body');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('posts');
}
```

Dentro del método `up()`, defines las columnas de la tabla. En el método `down()`, defines lo que sucede cuando se retrocede la migración, usualmente eliminando la tabla.

### Ejecutar Migraciones

Para ejecutar las migraciones, utiliza el siguiente comando:

```bash
php artisan migrate
```

Este comando aplicará todas las migraciones pendientes y modificará la base de datos según el esquema definido.

Si deseas revertir las últimas migraciones, usa:

```bash
php artisan migrate:rollback
```

---

## Modelos

En Laravel, los modelos representan las tablas de la base de datos y permiten interactuar con ellas a través de  **Eloquent ORM** .

### Creación de un Modelo

Para crear un modelo, usa el comando `make:model` de Artisan:

```bash
php artisan make:model NombreDelModelo
```

Por ejemplo, para crear un modelo `Post`, ejecuta:

```bash
php artisan make:model Post
```

Esto creará un archivo `Post.php` en la carpeta `app/Models`.

El archivo generado tendrá el siguiente aspecto:

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
}
```

Laravel utiliza **Eloquent ORM** para que puedas interactuar con la base de datos de una manera fácil y fluida. Por defecto, el modelo `Post` estará relacionado con la tabla `posts`, pero esto puede ser modificado si es necesario.

### Uso de Eloquent en Modelos

Eloquent proporciona métodos para realizar operaciones CRUD (Crear, Leer, Actualizar y Eliminar) de forma sencilla. Aquí algunos ejemplos:

**Crear un nuevo registro:**

```php
$post = new Post;
$post->title = 'Título del post';
$post->body = 'Contenido del post';
$post->save();
```

**Obtener todos los registros:**

```php
$posts = Post::all();
```

**Obtener un registro por su ID:**

```php
$post = Post::find(1);
```

**Actualizar un registro:**

```php
$post = Post::find(1);
$post->title = 'Nuevo título';
$post->save();
```

**Eliminar un registro:**

```php
$post = Post::find(1);
$post->delete();
```

---

## Comandos Artisan

Artisan es la interfaz de línea de comandos de Laravel, que proporciona una serie de comandos útiles para facilitar tareas comunes en el desarrollo.

### Comandos Comunes

* **Generar un controlador** :

```bash
php artisan make:controller NombreDelControlador
```

* **Generar una migración** :

```bash
php artisan make:migration nombre_de_migracion
```

* **Ejecutar migraciones** :

```bash
php artisan migrate
```

* **Mostrar la lista de comandos disponibles** :

```bash
php artisan list
```

* **Generar un modelo** :

```bash
php artisan make:model NombreDelModelo
```
