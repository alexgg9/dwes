# Proyecto de Gestión de Usuarios y Productos

## Descripción
Este proyecto es una aplicación básica de gestión de usuarios y productos desarrollada en PHP. Permite a los usuarios iniciar sesión, visualizar productos, y realizar ciertas acciones según el rol del usuario (administrador o usuario regular). Además, se lleva un contador de inicios de sesión por usuario mediante cookies.

## Funcionalidades

### Usuarios
1. **Inicio de Sesión:**
   - Los usuarios pueden iniciar sesión con sus credenciales almacenadas en la base de datos SQLite.
   - Los administradores tienen permisos adicionales para gestionar productos.

2. **Roles de Usuario:**
   - **Administrador:** Puede agregar, editar y eliminar productos.
   - **Usuario Regular:** Solo puede visualizar los productos.

3. **Contador de Sesiones por Usuario:**
   - Cada usuario tiene un contador de inicio de sesión gestionado mediante cookies (`login_count_[usuario]`).

4. **Gestión de Idioma:**
   - El idioma preferido del usuario se almacena en una cookie (`lang`) y puede ser consultado.

### Productos
1. **Visualización de Productos:**
   - Todos los usuarios pueden visualizar una lista de productos paginada.
   - Cada producto tiene información como nombre, descripción, precio y stock.

2. **Gestión de Productos:**
   - Los administradores pueden agregar, editar y eliminar productos desde la interfaz.
