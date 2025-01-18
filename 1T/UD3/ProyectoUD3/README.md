# ZonaBit - Tienda Informática

## Descripción
ZonaBit es una tienda de informática en línea que ofrece una amplia gama de productos tecnológicos, desde ordenadores portátiles y de sobremesa hasta periféricos y componentes. También cuenta con servicios de reparación, configuración de hardware, ensamblaje personalizado y configuración de redes.

## Características Principales

- **Filtrado y Ordenamiento**: Permite filtrar los productos por categorías y ordenarlos por precio.
- **Formulario de Contacto**: Los usuarios pueden enviar consultas o reportes de incidencias.
- **Servicios Profesionales**: Ofrece servicios técnicos como reparación y mantenimiento.

## Estructura del Proyecto

### HTML
- `index.html`: Página principal con la sección de inicio y servicios.
- `form.html`: Página de contacto para consultas y reportes.

### CSS
- `styles.css`: Archivo principal de estilos para el diseño de la tienda.

### PHP

#### Clases y Funciones:

- **`Producto`**:
  - Clase base para representar los productos en la tienda. Contiene propiedades como `nombre`, `precio`, `imagen`, y métodos para obtener detalles y mostrar productos.
  
- **`TvProduct`** (hereda de `Producto`):
  - Clase derivada que extiende `Producto`. Representa productos específicos de tipo "TV", con propiedades adicionales como `tamaño` de la pantalla.
  
- **`Funciones`**:
  - **Implementa la interfaz `IFunctions`**. Contiene métodos comunes utilizados en toda la tienda, como:
    - `formatPrice`: Formatea el precio de un producto.
    - `formatDate`: Formatea la fecha para los reportes.
    - `generarProductoHTML`: Genera el HTML para mostrar un producto en la página.
    - `generarReporteHTML`: Genera un reporte de incidencia en formato HTML.

- **`ProductController`**:
  - Controlador que gestiona las solicitudes relacionadas con los productos. Incluye métodos como:
    - `listProducts`: Recupera y muestra productos filtrados y ordenados.
  
- **`FormController`**:
  - Controlador que maneja el formulario de contacto. Recoge los datos enviados y genera el reporte de incidencia.

#### Funciones Importantes:
- **`formatPrice`**: Formatea el precio de los productos con el formato adecuado (ej. 1.234,56 €).
- **`formatDate`**: Formatea la fecha de compra o reporte de incidencia en formato `dd/mm/yyyy`.
- **`generarProductoHTML`**: Genera el código HTML necesario para mostrar un producto en la página web.
- **`generarReporteHTML`**: Genera un reporte de incidencia en formato HTML, mostrando los detalles del reporte (nombre, email, categoría, etc.).

### Archivos Clave:
- `Functions.php`: Contiene la implementación de la clase `Funciones`, que incluye los métodos de utilidad para formatear precios, fechas y generar HTML.
- `Product.php`: Define las clases `Producto` y `TvProduct`, que representan productos en la tienda.
- `ProductController.php`: Controlador que se encarga de gestionar los productos y sus operaciones (filtrado, ordenación, etc.).
- `FormController.php`: Controlador que gestiona los formularios de contacto y reportes de incidencias.

### Excepciones
- Se utiliza un sistema básico de excepciones para manejar errores de validación en los formularios. Si los campos obligatorios no son completados, se lanza una excepción que detiene el proceso y muestra un mensaje de error al usuario.

### Imágenes
- Las imágenes de los productos están almacenadas en la carpeta `assets`. Estas incluyen imágenes de portátiles, sobremesas, componentes, teléfonos móviles, entre otros.

## Uso
1. **Visitar la página principal** (`index.html`): El usuario puede ver los productos destacados, acceder a las categorías y explorar los servicios disponibles.
2. **Explorar productos** (`products.php`): Los productos se pueden filtrar por categoría y ordenar por precio.
3. **Enviar un reporte** (`form.html`): Los usuarios pueden rellenar el formulario de incidencias y recibir un reporte generado 

## Dependencias
- **PHP**: Se utiliza para el procesamiento de datos, generación de reportes y manejo de formularios.
- **HTML/CSS**: Para la estructura y diseño de las páginas.


## Posibles Mejoras
- Implementación de una base de datos para gestionar productos y clientes.
- Integración de un sistema de autenticación para usuarios registrados.
- Ampliación del sistema de filtrado y búsqueda para incluir más atributos de productos.

---

### Licencia

Este proyecto está bajo la licencia MIT. Puedes utilizar, modificar y distribuir este software de forma gratuita.
