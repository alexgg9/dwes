<?php


require_once __DIR__ . '/../utils/Functions.php';

$utils = new Functions();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $reporte = [
        'nombre' => htmlspecialchars($_POST['nombre']),
        'email' => htmlspecialchars($_POST['email']),
        'telefono' => htmlspecialchars($_POST['telefono']),
        'direccion' => htmlspecialchars($_POST['direccion'] ?? ''),
        'categoria' => htmlspecialchars($_POST['categoria']),
        'fecha-compra' => htmlspecialchars($_POST['fecha-compra']),
        'mensaje' => htmlspecialchars($_POST['mensaje']),
    ];

   
    $reporteHTML = $utils->generarReporteHTML($reporte);

    
    echo $reporteHTML;
}
?>