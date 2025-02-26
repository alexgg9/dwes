# Middleware en Laravel

En Laravel, un **middleware** es un mecanismo que filtra las solicitudes HTTP antes de que lleguen al controlador. Se usa para tareas como autenticación, CORS, logging, protección CSRF, entre otros.

---

## 📌 Creación y Uso de Middleware en Laravel

### 1️⃣ Crear un Middleware
Puedes generar un middleware con el siguiente comando en Artisan:

```bash
php artisan make:middleware MiMiddleware
```

Esto creará un archivo en `app/Http/Middleware/MiMiddleware.php`.

---

### 2️⃣ Editar el Middleware
En el archivo generado (`app/Http/Middleware/MiMiddleware.php`), puedes modificar la lógica en el método `handle()`:

```php
<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MiMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Acción antes de la solicitud
        if ($request->header('X-Token') !== 'secreto') {
            return response()->json(['error' => 'No autorizado'], 403);
        }

        $response = $next($request); // Pasa la solicitud al siguiente middleware o controlador

        // Acción después de la solicitud
        return $response;
    }
}
```

---

### 3️⃣ Registrar el Middleware
Para usar el middleware, debes registrarlo en `app/Http/Kernel.php`.

- **Middleware global (se ejecuta en todas las rutas)** → Agrégalo en `$middleware`:

```php
protected $middleware = [
    \App\Http\Middleware\MiMiddleware::class,
];
```

- **Middleware específico para rutas** → Agrégalo en `$routeMiddleware` con un alias:

```php
protected $routeMiddleware = [
    'mimiddleware' => \App\Http\Middleware\MiMiddleware::class,
];
```

---

### 4️⃣ Aplicar Middleware en Rutas
Puedes aplicarlo a rutas específicas en `routes/web.php` o `routes/api.php`:

```php
Route::get('/admin', function () {
    return "Acceso autorizado";
})->middleware('mimiddleware');
```

También puedes aplicarlo a un grupo de rutas:

```php
Route::middleware(['mimiddleware'])->group(function () {
    Route::get('/dashboard', function () {
        return "Bienvenido al dashboard";
    });
});
```



