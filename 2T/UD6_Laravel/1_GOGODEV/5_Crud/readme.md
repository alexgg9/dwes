### Documentación del CRUD de `User` y `Note`

#### Modelos

##### User

El modelo `User` representa a los usuarios de la aplicación. Utiliza las traits `HasFactory` y `Notifiable` para facilitar la creación de instancias y el envío de notificaciones.

- **Atributos rellenables (`$fillable`)**: `name`, `email`, `password`.
- **Atributos ocultos (`$hidden`)**: `password`, `remember_token`.
- **Casts**: Convierte `email_verified_at` a `datetime` y `password` a un hash.

El modelo `User` tiene una relación uno a muchos con el modelo `Note`, lo que significa que un usuario puede tener múltiples notas.

```php
public function notes()
{
    return $this->hasMany(Note::class);
}
```

##### Note

El modelo `Note` representa las notas creadas por los usuarios. Utiliza la trait `HasFactory` para facilitar la creación de instancias.

- **Atributos rellenables (`$fillable`)**: `title`, `content`, `user_id`.

El modelo `Note` tiene una relación inversa con el modelo `User`, indicando que cada nota pertenece a un usuario.

```php
public function user()
{
    return $this->belongsTo(User::class);
}
```

#### Controladores

##### UserController

El `UserController` maneja las operaciones CRUD para los usuarios:

- **index()**: Muestra una lista de todos los usuarios.
- **create()**: Muestra el formulario para crear un nuevo usuario.
- **store(Request $request)**: Valida y guarda un nuevo usuario en la base de datos.
- **show(User $user)**: Muestra los detalles de un usuario específico.
- **edit(User $user)**: Muestra el formulario para editar un usuario existente.
- **update(Request $request, User $user)**: Valida y actualiza un usuario existente.
- **destroy(User $user)**: Elimina un usuario de la base de datos.

##### NoteController

El `NoteController` maneja las operaciones CRUD para las notas:

- **index()**: Muestra una lista de todas las notas.
- **create()**: Muestra el formulario para crear una nueva nota.
- **store(Request $request)**: Valida y guarda una nueva nota en la base de datos.
- **show(Note $note)**: Muestra los detalles de una nota específica.
- **edit(Note $note)**: Muestra el formulario para editar una nota existente.
- **update(Request $request, Note $note)**: Valida y actualiza una nota existente.
- **destroy(Note $note)**: Elimina una nota de la base de datos.

#### Rutas

Las rutas para los controladores `UserController` y `NoteController` están definidas en el archivo `web.php` utilizando el método `resource` de Laravel, que crea automáticamente todas las rutas necesarias para las operaciones CRUD.

```php
Route::resource('/users', UserController::class);
Route::resource('/notes', NoteController::class);
```

#### Vistas

Las vistas para los usuarios y las notas deben estar ubicadas en `resources/views/users` y `resources/views/notes` respectivamente. Cada carpeta debe contener las vistas necesarias para las operaciones CRUD: `index.blade.php`, `create.blade.php`, `edit.blade.php`, `show.blade.php`, etc.

### Resumen

Este CRUD permite gestionar usuarios y sus notas asociadas en una aplicación Laravel. Los modelos `User` y `Note` están relacionados mediante una relación uno a muchos. Los controladores `UserController` y `NoteController` manejan las operaciones CRUD, y las rutas están definidas en `web.php`. Las vistas correspondientes permiten la interacción del usuario con la aplicación.
