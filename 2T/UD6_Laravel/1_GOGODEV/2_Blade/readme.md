# 2. Laravel Blade - Documentación

Este README te guiará para configurar un proyecto Laravel que use plantillas Blade y siga las mejores prácticas para reutilizar y organizar el código.

## Configuración del Proyecto

Para comenzar el proyecto, crea una nueva aplicación Laravel ejecutando:

```bash
laravel new blade
```

Esto creará un nuevo proyecto Laravel con Blade habilitado.

### Opciones:

* **None** : Sin un kit de inicio como Jetstream.
* **PhpUnit** : Para pruebas.
* **SQLite** : Configuración de la base de datos.
* **Layouts** : Para configurar plantillas reutilizables.

## Configuración de Rutas

Vamos a configurar las rutas para las páginas y utilizar vistas Blade para organizar el contenido. Abre el archivo `routes/web.php` y agrega las siguientes rutas:

```php
<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('index');
Route::view('/about', 'about')->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/contact', 'contact')->name('contact');

?>
```

Aquí hemos creado rutas simples para las páginas `index`, `about`, `services` y `contact`, cada una apuntando a sus respectivas vistas Blade.

## Plantillas Blade: Layouts y Secciones

### Crear una Plantilla Base

Crea una carpeta llamada `layouts` dentro de `resources/views` y crea un archivo de plantilla Blade llamado `landing.blade.php`. Esta plantilla contendrá la estructura común para todas las páginas, como los encabezados, pies de página y menús de navegación.

```blade
<!-- resources/views/layouts/landing.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    @yield('content')
</body>
</html>
```

El `@yield` define espacios reservados (placeholders) para que cada vista pueda completar su contenido.

### Crear Vistas con Secciones

Cada vista extenderá la plantilla `landing.blade.php` y llenará el contenido usando `@section`. Aquí tienes un ejemplo para la vista `index.blade.php`:

```blade
<!-- resources/views/index.blade.php -->
@extends('layouts.landing')

@section('title', 'Inicio')

@section('content')
    <h1>Bienvenido a la página de inicio</h1>
    <p>Esta es la página principal.</p>
@endsection
```

En este ejemplo, la vista `index.blade.php` extiende la plantilla `landing.blade.php`, define el título de la página y llena la sección `content` con el HTML correspondiente.

### Otras Vistas

Puedes crear otras vistas (como `about.blade.php`, `services.blade.php`, `contact.blade.php`) de la misma manera, extendiendo `landing.blade.php` y llenando las secciones correspondientes.

## Vistas Parciales (Reutilización de Código)

Si tienes componentes como un menú de navegación que debe aparecer en múltiples páginas, puedes incluirlos como vistas parciales. Por ejemplo, puedes almacenar el menú en una carpeta `_partials`.

### Crear un Menú Parcial

```blade
<!-- resources/views/layouts/_partials/menu.blade.php -->
<header>
    <nav>
        <ul>
            <li><a href="{{ route('index') }}">Inicio</a></li>
            <li><a href="{{ route('about') }}">Acerca de</a></li>
            <li><a href="{{ route('services') }}">Servicios</a></li>
            <li><a href="{{ route('contact') }}">Contacto</a></li>
        </ul>
    </nav>
</header>
```

### Incluir el Menú en la Plantilla

Luego, puedes incluir el menú parcial en la plantilla `landing.blade.php`:

```blade
<!-- resources/views/layouts/landing.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    @include('layouts._partials.menu')

    @yield('content')
</body>
</html>
```

## Rutas Nombradas

Es recomendable utilizar **rutas nombradas** en lugar de escribir rutas absolutas directamente en el HTML. Esto hace que el código sea más fácil de mantener y actualizar en caso de cambios en las rutas.

Ejemplo:

```blade
<ul>
    <li><a href="{{ route('index') }}">Inicio</a></li>
    <li><a href="{{ route('services') }}">Servicios</a></li>
    <li><a href="{{ route('about') }}">Acerca de</a></li>
    <li><a href="{{ route('contact') }}">Contacto</a></li>
</ul>
```

De esta forma, si alguna ruta cambia, no tendrás que modificar todos los enlaces manualmente, solo el archivo de rutas.

## Componentes Blade

Para situaciones en las que quieras reutilizar partes de código (como tarjetas o bloques de contenido), puedes usar  **componentes Blade** . Los componentes permiten dividir el código en unidades más pequeñas y reutilizables.

### Crear un Componente de Tarjeta

Primero, crea una carpeta llamada `_components` dentro de `resources/views`, y luego crea un archivo de componente llamado `card.blade.php`.

```blade
<!-- resources/views/_components/card.blade.php -->
<div style="border: 1px solid #cd7979; margin: 10px; padding: 10px;">
    <h3>{{ $title }}</h3>
    <p>{{ $content }}</p>
</div>
```

### Usar el Componente en una Vista

Luego, en tu vista, puedes usar el componente y completar sus datos utilizando la directiva `@component` y `@slot`:

```blade
<!-- resources/views/services.blade.php -->
@extends('layouts.landing')

@section('title', 'Servicios')

@section('content')
    <h1>Servicios</h1>

    @component('_components.card')
        @slot('title', 'Servicio 1')
        @slot('content', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.')
    @endcomponent

    @component('_components.card')
        @slot('title', 'Servicio 2')
        @slot('content', 'Lorem ipsum dolor sit amet consectetur adipiscing elit.')
    @endcomponent
@endsection
```

### Recursos Estáticos

Si tienes archivos estáticos como imágenes, CSS o JavaScript, puedes cargarlos desde la carpeta `public`. Los archivos estáticos se gestionan utilizando el método `asset`.

### Imágenes

Crea una carpeta `assets/img` dentro de `public` y coloca tus imágenes allí. Luego, puedes usarlas en tus vistas:

```blade
<img src="{{ asset('assets/img/imagen.png') }}" alt="Descripción de la imagen" width="80px">
```

### CSS

Si tienes archivos CSS, por ejemplo `style.css`, colócalos en la carpeta `public/css`. Luego, incluye este archivo en tu plantilla `landing.blade.php`:

```blade
<!-- resources/views/layouts/landing.blade.php -->
<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
```

De esta forma, se cargarán los archivos estáticos como imágenes, hojas de estilo CSS o archivos JavaScript en las vistas.
