# ZonaBit - Tienda Informática

## Descripción
ZonaBit es una tienda de informática en línea que ofrece una amplia gama de productos tecnológicos, desde ordenadores portátiles y de sobremesa hasta periféricos y componentes. También cuenta con servicios de reparación, configuración de hardware, ensamblaje personalizado y configuración de redes.

## Características Principales
- **Búsqueda de Productos**: Incluye una barra de búsqueda para localizar productos fácilmente.
- **Filtrado y Ordenamiento**: Permite filtrar los productos por categorías y ordenarlos por precio.
- **Carrito de Compras**: Agrega productos al carrito con un clic.
- **Formulario de Contacto**: Los usuarios pueden enviar consultas o reportes de incidencias.
- **Servicios Profesionales**: Ofrece servicios técnicos como reparación y mantenimiento.

## Estructura del Proyecto
### HTML
- `index.html`: Página principal con la sección de inicio y servicios.
- `products.php`: Página de productos con filtrado y ordenamiento dinámico.
- `form.html`: Página de contacto para consultas y reportes.
- `procesa_formulario`: Archivo php que se encarga de procesar el formulario.


### CSS
- `styles.css`: Archivo principal de estilos para el diseño de la tienda.

### PHP
- **Funciones en `functions.php`**:
  - `getFilteredProducts`: Filtra los productos por categoría.
  - `addProductToCart`: Añade productos al carrito.
  - `sortProducts`: Ordena los productos por precio.
  - `formatPrice`: Formatea el precio de los productos.
  - `formatDate`: Formatea la fecha para los reportes.
  - `generarProductoHTML`: Genera el HTML para mostrar un producto.
  - `generarReporteHTML`: Genera un reporte de incidencia en HTML.

### Imágenes
- Almacenadas en la carpeta `assets`, incluyen imágenes de productos como portátiles, sobremesas, móviles, etc.

