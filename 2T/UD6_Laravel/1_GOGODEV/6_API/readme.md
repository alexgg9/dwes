# API de Notas en Laravel

## Endpoints

### 1. Obtener todas las notas
- **Método:** GET
- **Ruta:** `/api/note`
- **Respuesta:**
```json
{
  "data": [
    {"id": 1, "title": "Nota 1", "content": "Contenido de la nota 1"},
    {"id": 2, "title": "Nota 2", "content": "Contenido de la nota 2"}
  ]
}
```

### 2. Crear una nueva nota
- **Método:** POST
- **Ruta:** `/api/note`
- **Parámetros:**
```json
{
  "title": "Nueva Nota",
  "content": "Contenido de la nota"
}
```
- **Respuesta:**
```json
{
  "success": true,
  "data": {"id": 3, "title": "Nueva Nota", "content": "Contenido de la nota"}
}
```

### 3. Obtener una nota por ID
- **Método:** GET
- **Ruta:** `/api/note/{id}`
- **Respuesta:**
```json
{
  "data": {"id": 1, "title": "Nota 1", "content": "Contenido de la nota 1"}
}
```

### 4. Actualizar una nota
- **Método:** PUT/PATCH
- **Ruta:** `/api/note/{id}`
- **Parámetros:**
```json
{
  "title": "Nota actualizada",
  "content": "Nuevo contenido de la nota"
}
```
- **Respuesta:**
```json
{
  "data": {"id": 1, "title": "Nota actualizada", "content": "Nuevo contenido de la nota"}
}
```

### 5. Eliminar una nota
- **Método:** DELETE
- **Ruta:** `/api/note/{id}`
- **Respuesta:**
```json
{
  "success": true,
  "data": {"id": 1, "title": "Nota eliminada", "content": "Contenido eliminado"}
}
```

## Modelo
La API utiliza el modelo `Note.php`:
```php
class Note extends Model {
    use HasFactory;
    protected $guarded = [];
    protected $hidden = ['created_at', 'updated_at'];
}
```

## Rutas
Las rutas están definidas en `routes/api.php`:
```php
Route::resource('/note', 'App\Http\Controllers\NoteController');
```



