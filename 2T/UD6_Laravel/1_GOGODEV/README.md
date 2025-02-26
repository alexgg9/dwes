# Laravel API

Este es un proyecto de API simple utilizando el framework Laravel.

## Requisitos

- PHP >= 7.3
- Composer
- Laravel >= 8.x
- MySQL

## Instalación

1. Clona el repositorio:
    ```bash
    git clone https://github.com/tu_usuario/tu_repositorio.git
    cd tu_repositorio
    ```

2. Instala las dependencias de Composer:
    ```bash
    composer install
    ```

3. Copia el archivo `.env.example` a `.env` y configura tu base de datos:
    ```bash
    cp .env.example .env
    ```

4. Genera la clave de la aplicación:
    ```bash
    php artisan key:generate
    ```

5. Ejecuta las migraciones para crear las tablas en la base de datos:
    ```bash
    php artisan migrate
    ```

6. Inicia el servidor de desarrollo:
    ```bash
    php artisan serve
    ```

## Uso

Puedes acceder a la API a través de `http://localhost:8000`. A continuación se muestran algunos ejemplos de endpoints:

- `GET /api/users` - Obtener todos los usuarios
- `POST /api/users` - Crear un nuevo usuario
- `GET /api/users/{id}` - Obtener un usuario por ID
- `PUT /api/users/{id}` - Actualizar un usuario por ID
- `DELETE /api/users/{id}` - Eliminar un usuario por ID

## Testing

Para ejecutar las pruebas, utiliza el siguiente comando:
```bash
php artisan test
```

## Contribuir

Si deseas contribuir a este proyecto, por favor sigue los siguientes pasos:

1. Haz un fork del repositorio.
2. Crea una nueva rama (`git checkout -b feature/nueva-funcionalidad`).
3. Realiza tus cambios y haz commit (`git commit -am 'Añadir nueva funcionalidad'`).
4. Sube tus cambios a tu fork (`git push origin feature/nueva-funcionalidad`).
5. Crea un Pull Request.

## Licencia

Este proyecto está licenciado bajo la Licencia MIT. Consulta el archivo [LICENSE](LICENSE) para más detalles.
