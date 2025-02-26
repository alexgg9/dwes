# Fundamentos Básicos de Laravel

Este documento es una guía básica para iniciar con Laravel, incluyendo cómo crear un proyecto, la estructura de carpetas y los conceptos más esenciales.

---

## Requisitos Previos

Antes de comenzar, asegúrate de tener instalado lo siguiente:

- **PHP >= 8.1**
- **Composer** (https://getcomposer.org/)
- **MySQL** o cualquier otro sistema de bases de datos compatible
- Opcional: **Node.js** para manejar los recursos front-end

---

## Crear un Proyecto Laravel

1. **Instalación Global de Laravel (opcional):**

   ```bash
   composer global require laravel/installer
   ```

   Luego, verifica que Laravel esté disponible ejecutando:

   ```bash
   laravel --version
   ```

2. **Crear un Nuevo Proyecto:**

   Si usaste la instalación global:

   ```bash
   laravel new nombre-del-proyecto
   ```

   Si no usaste la instalación global:

   ```bash
   composer create-project --prefer-dist laravel/laravel nombre-del-proyecto
   ```

3. **Entrar al Directorio del Proyecto:**

   ```bash
   cd nombre-del-proyecto
   ```

4. **Levantar el Servidor Local:**

   ```bash
   php artisan serve
   ```

   Accede al proyecto en tu navegador en: `http://localhost:8000`

---

## Estructura de Carpetas

### Directorios Principales

- **app/**: Contiene la lógica de la aplicación.
  - **Http/**: Controladores, Middleware y Requests.
  - **Models/**: Modelos de Eloquent (en caso de que existan).
  
- **bootstrap/**: Archivos de arranque de Laravel.

- **config/**: Configuraciones de la aplicación (base de datos, mail, cache, etc.).

- **database/**: Archivos relacionados con la base de datos.
  - **migrations/**: Migraciones para gestionar el esquema de la base de datos.
  - **seeders/**: Datos iniciales para poblar la base de datos.

- **public/**: Carpeta accesible desde el navegador (index.php, assets, etc.).

- **resources/**: Archivos de vistas, componentes, y recursos front-end.
  - **views/**: Plantillas Blade.

- **routes/**: Define las rutas de la aplicación.
  - **web.php**: Rutas para la web (HTTP GET, POST, etc.).
  - **api.php**: Rutas para APIs REST.

- **storage/**: Archivos generados por la aplicación (logs, cachés, etc.).

- **tests/**: Archivos para pruebas unitarias y funcionales.

- **vendor/**: Dependencias gestionadas por Composer.

---

## Comandos Básicos

- **Levantar el servidor local:**

  ```bash
  php artisan serve
  ```

- **Crear un controlador:**

  ```bash
  php artisan make:controller NombreDelControlador
  ```

- **Crear un modelo:**

  ```bash
  php artisan make:model NombreDelModelo
  ```

- **Crear una migración:**

  ```bash
  php artisan make:migration nombre_de_la_migracion
  ```

- **Ejecutar migraciones:**

  ```bash
  php artisan migrate
  ```

- **Limpiar caché:**

  ```bash
  php artisan cache:clear
  ```

---

## Flujo Básico de Trabajo

1. **Definir Rutas:** En `routes/web.php` o `routes/api.php`.

   ```php
   Route::get('/welcome', function () {
       return view('welcome');
   });
   ```

2. **Crear un Controlador:**

   ```bash
   php artisan make:controller EjemploController
   ```

   Luego, define métodos en el controlador para manejar la lógica.

3. **Conectar Vistas y Controladores:**

   Crea una vista en `resources/views` y retorna la vista desde el controlador:

   ```php
   public function index()
   {
       return view('ejemplo');
   }
   ```

