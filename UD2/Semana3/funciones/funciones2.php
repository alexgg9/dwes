<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Página con Pico CSS</title>
    <!-- Enlace al CDN de Pico CSS -->
    <link rel="stylesheet" href="styles.css">
</head>

<?php

    $precio_consola = 500;
    precio_iva($precio_consola);

    $precio_consola = precio_iva($precio_consola);

    function precio_iva($precio_arg){
        return $precio_arg * 1.21;
    }

    print "<br><br/> ARGUMENTOS POR REFERENCIA DE LA VARIABLES CONSOLA (Sin aumentar el IVA) $precio_consola <br />";

    print "<br/><br/> ARGUMENTOS por valor y por referencia <br/ >";

    function precio_iva_referencia(&$precio, $iva=0.21) {

        $precio *= (1 + $iva);
    }

    $precio = 10;  //100325
    print "<br/><br/>1- ANTES de llamar a la función:  El precio con IVA es ".$precio ;  //10

    precio_iva_referencia($precio);

    print "<br/>2- DESPUES de llamar a la función:  El precio con IVA es ". $precio ;  //121


?>