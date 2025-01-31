
# Relaciones en Laravel 11

Laravel proporciona una forma sencilla de manejar relaciones entre modelos en una base de datos. A continuación, se explican los tres tipos de relaciones más comunes.

## 1. Relación Uno a Uno

Esta relación se usa cuando un registro en una tabla está relacionado con un solo registro en otra tabla.

Ejemplo:

```php
class User extends Model
{
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
}
```

## 2. Relación Uno a Muchos

Se usa cuando un registro en una tabla puede estar relacionado con múltiples registros en otra tabla.

Ejemplo:

```php
class Post extends Model
{
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
```

## 3. Relación Muchos a Muchos

Se usa cuando múltiples registros en una tabla pueden estar relacionados con múltiples registros en otra tabla.

Ejemplo:

```php
class User extends Model
{
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
```

Estas son las relaciones más básicas en Laravel 11. Para más detalles, puedes consultar la documentación oficial de Laravel.
