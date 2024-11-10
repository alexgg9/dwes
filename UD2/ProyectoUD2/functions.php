<?php
function getFilteredProducts($productos, $categoria) {
    if ($categoria === 'all') {
        return $productos; // devuelve todos los productos
    }
    
    return array_filter($productos, function($producto) use ($categoria) {
        return $producto['categoria'] === $categoria; // muestra los productos dependiendo de la categoría seleccionada
    });
}
//futura implementacion
function addProductToCart(&$carrito, $nombre) {
    if (isset($_GET['add'])) {
        $nuevo_producto = $_GET['add'];
        if (!in_array($nuevo_producto, $carrito)) {
            $carrito[] = $nuevo_producto;
        }
    }
}
// Función para ordenar productos por precio
function sortProducts(&$productos, $order) {
    if ($order === 'asc') {
        usort($productos, function($a, $b) { //Uso de usort que permite ordenar un array comparando dos variables e indicando cual es mayor o menor
            return $a['precio'] <=> $b['precio'];
        });
    } else if ($order === 'desc') {
        usort($productos, function($a, $b) {
            return $b['precio'] <=> $a['precio'];
        });
    }
}
// Funcion para formatear el precio del producto
function formatPrice($price) {
    return number_format($price, 2).' €';
}

function formatDate ($date) {
    return date('d/m/Y', strtotime($date));
}

// Función para generar el HTML de un producto
function generarProductoHTML($producto) {
    return "
    <div class='product' data-category='{$producto['categoria']}'>
        <img src='{$producto['imagen']}' alt='{$producto['nombre']}'>
        <h3>{$producto['nombre']}</h3>
        <p class='price'>" . formatPrice($producto['precio']) . "</p>
        <button><i class='fas fa-shopping-cart'></i> Agregar al Carrito</button>
    </div>";
}



// Generamos el HTML de la incidencia
function generarReporteHTML($nombre, $email, $telefono, $direccion, $categoria, $fechaCompra, $mensaje) {
    $direccionHTML = !empty($direccion) ? "<p><strong>Dirección:</strong> $direccion</p>" : "<p><strong>Dirección:</strong> No proporcionada</p>";
    
    return "
    <!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Reporte de Incidencia</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f9;
                color: #333;
                margin: 0;
                padding: 0;
            }
            .container {
                width: 80%;
                margin: 0 auto;
                padding: 30px;
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }
            h2 {
                text-align: center;
                color: #4CAF50;
            }
            .info-section {
                margin-bottom: 20px;
            }
            .info-section p {
                font-size: 16px;
                line-height: 1.6;
                padding: 5px 0;
                border-bottom: 1px solid #ddd;
            }
            .info-section strong {
                color: #333;
            }
            .back-button {
                display: block;
                width: 200px;
                margin: 30px auto;
                text-align: center;
                background-color: #4CAF50;
                color: white;
                padding: 10px;
                border-radius: 5px;
                text-decoration: none;
                font-size: 16px;
            }
            .back-button:hover {
                background-color: #45a049;
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <h2>Información del Reporte de Incidencia</h2>
            <div class='info-section'>
                <p><strong>Nombre:</strong> $nombre</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Teléfono:</strong> $telefono</p>
                $direccionHTML
                <p><strong>Categoría del Producto:</strong> $categoria</p>
                <p><strong>Fecha de Compra:</strong> " . formatDate($fechaCompra) . "</p>
                <p><strong>Descripción del Problema:</strong> $mensaje</p>
            </div>
            <a href='form.html' class='back-button'>Volver al formulario</a>
        </div>
    </body>
    </html>";
}


?>
