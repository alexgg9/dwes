# Resumen de Controladores en Laravel

## 1. Introducción

En Laravel, el patrón MVC (Modelo-Vista-Controlador) se implementa mediante tres componentes clave:  **Modelos** , **Vistas** y  **Controladores** . Los controladores son responsables de gestionar la lógica de negocio, recibir solicitudes HTTP, interactuar con los modelos y devolver respuestas, generalmente a través de vistas.

## 2. Vinculación Ruta-Controlador-Vista

### 2.1 Configuración Inicial

1. **Conexión a la base de datos** : En el archivo `.env`, configura los parámetros de conexión a la base de datos, como el tipo de conexión (`DB_CONNECTION`), host, puerto, nombre de la base de datos, usuario y contraseña.
2. **Modelado de datos** : Define las migraciones de las tablas en la base de datos y el modelo Eloquent correspondiente. En el modelo, utiliza `$fillable` para especificar qué campos pueden ser asignados en masa.
3. **Migración** : Ejecuta las migraciones para crear las tablas en la base de datos con el comando `php artisan migrate:refresh`.

### 2.2 Creación y Configuración del Controlador

1. **Generación del controlador** : Usa el comando `php artisan make:controller NombreControlador` para crear un nuevo controlador. El controlador se ubicará en `app/Http/Controllers/`.
2. **Rutas** : Define rutas en el archivo `routes/web.php` y asocia estas rutas con métodos del controlador. Por ejemplo:

```php
Route::get('/', [UserController::class, 'index'])->name('user.index');
```

### 2.3 Vinculación Controlador-Vista

1. **Vista** : Crea un archivo en `resources/views` y usa `return view('nombreVista')` en el controlador para pasar la vista correspondiente.
2. **Renderizado de vista** : Dentro de la vista, puedes utilizar directivas como `@foreach`, `@if`, y `@forelse` para mostrar datos dinámicos pasados desde el controlador.

## 3. Consultas a Modelos y Pintado de Datos

1. **Obtención de datos** : Usa el ORM Eloquent para consultar datos. Por ejemplo, `User::all()` para obtener todos los usuarios.
2. **Pintar datos** : En la vista, puedes iterar sobre los datos con `@foreach` y mostrar campos específicos de los modelos como `$user->name`.

```php
@foreach($users as $user)
   <li>{{$user->name}}</li>
@endforeach
```

3. **Condiciones** : Usar `@if` o `@forelse` para manejar condiciones y mostrar mensajes si no hay datos.

## 4. Inserción de Datos

Para insertar datos en la base de datos, puedes crear un nuevo registro en el controlador:

```php
public function create(){
    User::create([
        'name' => 'John Doe',
        'email' => 'john@example.com',
        'password' => Hash::make('password')
    ]);
}
```

Usa `redirect()->route('user.index')` para redirigir al usuario a la lista después de crear un nuevo registro.

## 5. Eloquent

Eloquent permite realizar consultas complejas usando métodos como `where()`, `orWhere()`, `orderBy()`, y `limit()`. Ejemplo:

```php
$users = User::where('age', '>=', 18)->orderBy('name')->get();
```

Eloquent también soporta la paginación y la búsqueda de registros específicos por ID con métodos como `find()` y `first()`.

## 6. SQL RAW (Consultas SQL Directas)

Si necesitas un control total sobre las consultas, puedes usar consultas SQL crudas con el método `DB::select()` para obtener datos o `DB::insert()` para insertar registros.

```php
$users = DB::select('SELECT * FROM users');
```

 **Ventajas** : Control total de las consultas.
 **Desventajas** : Pérdida de la abstracción de Eloquent y mayor complejidad en el código.
