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

## Instalación
1. Clona el repositorio del proyecto.
2. Configura un servidor local como [XAMPP](https://www.apachefriends.org/index.html) o [WAMP](https://www.wampserver.com/).
3. Coloca los archivos del proyecto en la carpeta `htdocs` (o equivalente).
4. Accede a `http://localhost/ZonaBit`.

## Uso
1. Navega por las diferentes categorías de productos.
2. Utiliza el filtrado y ordenamiento para encontrar el producto deseado.
3. Agrega productos al carrito.
4. Envía consultas o reportes a través del formulario de contacto.

## Contribuciones
Las contribuciones son bienvenidas. Por favor, sigue los siguientes pasos:
1. Realiza un fork del repositorio.
2. Crea una rama (`feature/nueva-funcionalidad`).
3. Realiza los cambios y haz commit.
4. Envía un pull request.

## Licencia
Este proyecto está licenciado bajo la [MIT License](https://opensource.org/licenses/MIT).

## Contacto
Para consultas, puedes contactar con nosotros a través de:
- Correo: soporte@zonabit.com
- Teléfono: +34 123 456 789
