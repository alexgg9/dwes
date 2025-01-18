# Proyecto CRUD de Películas

### Realizado por Alejandro Gálvez García

Este proyecto es una aplicación CRUD (Crear, Leer, Actualizar, Eliminar) desarrollado en PHP utilizando PDO, un diseño basado en el patrón MVC, y generación de reportes en PDF con FPDF. El objetivo principal es gestionar una tabla de películas con la siguiente estructura:

| Campo         | Tipo         | Descripción                         |
|---------------|--------------|-------------------------------------|
| `id`          | INT (PK)     | Identificador único de la película. |
| `title`       | VARCHAR(255) | Título de la película.              |
| `director`    | VARCHAR(255) | Director de la película.            |
| `release_date`| DATE         | Fecha de estreno de la película.    |

## Características

1. **Gestión de películas**:
   - Crear nuevas películas.
   - Leer el listado completo de películas.
   - Actualizar información de películas existentes.
   - Eliminar películas del sistema.

2. **Diseño basado en MVC**:
   - **Modelo (Model)**: Gestión de la conexión a la base de datos y operaciones CRUD.
   - **Vista (View)**: Interfaz de usuario en HTML y PHP.
   - **Controlador (Controller)**: Lógica que conecta las vistas con los modelos.

3. **Uso de PDO**:
   - Proporciona una conexión segura y preparada para prevenir inyecciones SQL.

4. **Reportes en PDF**:
   - Generación de reportes en formato PDF con la biblioteca [FPDF](http://www.fpdf.org/).
