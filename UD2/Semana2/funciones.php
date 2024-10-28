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
<body>
    <header>
        <h1>Funciones</h1>
        <nav>
            <ul>
            <li>
                <a href="#">Funciones</a></li>
                <li><a href="#">Argumentos</a></li>
                <li><a href="#">Include/Require</a></li>
                <li><a href="#">Extensiones</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <h2>Funciones</h2>
            <p>Este es un ejemplo de una llamada a una función</p>
            <h2>UD2. 5 FUNCIONES. </h2>
        </section>

        <?php 
           echo "<section>";
           print "h2>UD2. 5 FUNCIONES TESTS. </h2>";
           echo funcion_test(); 
           echo "</section>";


           $precio = 60;

           $precio_iva = precio_con_iva($precio);

           print "</br>1 - El precio con IVA es ". $precio_iva;
           print "</br>2 - El precio sin IVA es ". precio_con_iva($precio);
        ?>

    </main>

    <footer>
        <p>&copy; 2024 Mi Sitio Web. Todos los derechos reservados.</p>
    </footer>
</body>
</html>

<?php
            function funcion_test(){
                $grupo = "Black Sabbath";
                $disco = "<b> Paranoid </b>";
                return "<p> El grupo $grupo sacó el disco $disco en 1970 </p>";
            }


            function precio_con_iva($precio_arg){
                return $precio_arg * 1.21;
            }

            function precio_iva_defecto($precio_arg, $iva = 1.21){
                return $precio_arg * (1+$iva);
            }
?>