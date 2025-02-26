# Proyecto Testing - Laravel


## Métodos de Test

- **`test_set_database_config()`**: Restaura y configura la base de datos, luego verifica que la página principal cargue correctamente.
- **`test_get_users_list()`**: Verifica que la API devuelva una lista de usuarios con la estructura correcta, incluyendo un usuario específico y el número esperado de usuarios.
- **`test_get_user_detail()`**: Verifica que al consultar los detalles de un usuario, la API devuelva los datos correctos de ese usuario.
- **`test_get_non_existing_user_detail()`**: Verifica que la API devuelva un error 404 cuando se consulta un usuario inexistente.
