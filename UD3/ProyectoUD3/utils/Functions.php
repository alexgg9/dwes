<?php

require_once __DIR__ . '/../interfaces/IFunctions.php';

class Functions implements IFunctions{
    
    function generarProductoHTML($producto) {
        if($producto instanceof TvProduct){
            return "
            <div class='product'>
                <img src='" . '../../' . $producto->getImage() . "' alt='" . $producto->getName() . "'>
                <h3>{$producto->name}</h3>
                <p class='price'>" . $this->formatPrice($producto->price) . "</p>
                <p class='inches'>{$producto->inches} pulgadas</p>
                <button><i class='fas fa-shopping-cart'></i> Agregar al Carrito</button>
            </div>";
        }else{
    
            return "
            <div class='product'>
                <img src='" . '../../' . $producto->getImage() . "' alt='" . $producto->getName() . "'>
                <h3>" . $producto->getName() . "</h3>
                <p class='price'>Precio: " . $producto->getPrice() . " €</p>
                <button><i class='fas fa-shopping-cart'></i> Agregar al Carrito</button>
            </div>";
        }
    }
    
    
    function formatPrice($price) {
        return number_format($price, 2, ',', '.') . ' €'; 
    }
    
    
    function formatDate($date) {
        $timestamp = strtotime($date); 
        return date("d/m/Y", $timestamp);
    }
    
    
    function generarReporteHTML($reporte) {
        
        $direccionHTML = !empty($reporte['direccion']) 
            ? "<p><strong>Dirección:</strong> {$reporte['direccion']}</p>" 
            : "<p><strong>Dirección:</strong> No proporcionada</p>";
    
        // Generar el HTML
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
                    <p><strong>Nombre:</strong> {$reporte['nombre']}</p>
                    <p><strong>Email:</strong> {$reporte['email']}</p>
                    <p><strong>Teléfono:</strong> {$reporte['telefono']}</p>
                    $direccionHTML
                    <p><strong>Categoría del Producto:</strong> {$reporte['categoria']}</p>
                    <p><strong>Fecha de Compra:</strong> " . $this->formatDate($reporte['fecha-compra']) . "</p>
                    <p><strong>Descripción del Problema:</strong> {$reporte['mensaje']}</p>
                </div>
                <a href='../views/form/form.html' class='back-button'>Volver al formulario</a>
            </div>
        </body>
        </html>";
    }



}

?>
