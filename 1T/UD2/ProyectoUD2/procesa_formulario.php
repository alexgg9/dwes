<?php
include 'functions.php';


if($_SERVER["REQUEST_METHOD"] == "POST"){

    $nombre = htmlspecialchars(trim($_POST['nombre'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $telefono = htmlspecialchars(trim($_POST['telefono'] ?? ''));
    $direccion = htmlspecialchars(trim($_POST['direccion'] ?? ''));
    $categoria = htmlspecialchars(trim($_POST['categoria'] ?? ''));
    $fechaCompra = isset($_POST['fecha-compra']) ? htmlspecialchars(trim($_POST['fecha-compra'])) : '';
    $mensaje = htmlspecialchars(trim($_POST['mensaje'] ?? ''));

    /* Debugging form data

        echo "<pre>";
        print_r($_POST);
        echo "</pre>";

    */


    if(!$nombre || !$email || !$telefono || !$direccion || !$categoria || !$fechaCompra || !$mensaje){
        echo "<p>Error: Por favor completa todos los campos requeridos.</p>";
        echo "<a href='form.html'>Volver al formulario</a>";
        exit();
    }

    echo generarReporteHTML($nombre, $email, $telefono, $direccion, $categoria, $fechaCompra, $mensaje); // Genero el HTML de la incidencia en function.php
} else {
    header("Location: form.html");
    exit();
}

?>
