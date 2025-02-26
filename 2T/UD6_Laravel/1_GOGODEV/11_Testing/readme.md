# Proyecto Testing - Laravel


Tipos de Test en Laravel

Laravel proporciona varios tipos de pruebas que permiten verificar el correcto funcionamiento de la aplicación:

🔹 Pruebas Unitarias

Estas pruebas verifican unidades pequeñas de código, como funciones o métodos individuales.

Se crean en tests/Unit/

Se ejecutan con php artisan test --testsuite=Unit

Ejemplo:

public function test_example()
{
    $this->assertTrue(true);
}

🔹 Pruebas de Características (Feature Tests)

Se utilizan para probar partes más grandes del código, como rutas, controladores y servicios.

Se crean en tests/Feature/

Se ejecutan con php artisan test --testsuite=Feature



## Métodos de Test

- **`test_set_database_config()`**: Restaura y configura la base de datos, luego verifica que la página principal cargue correctamente.
- **`test_get_users_list()`**: Verifica que la API devuelva una lista de usuarios con la estructura correcta, incluyendo un usuario específico y el número esperado de usuarios.
- **`test_get_user_detail()`**: Verifica que al consultar los detalles de un usuario, la API devuelva los datos correctos de ese usuario.
- **`test_get_non_existing_user_detail()`**: Verifica que la API devuelva un error 404 cuando se consulta un usuario inexistente.
