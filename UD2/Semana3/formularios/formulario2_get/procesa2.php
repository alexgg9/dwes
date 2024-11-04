<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesa 2</title>
</head>
<body>
    <h1>Procesa 2</h1>
</body>
</html>
<?php 


    $nombre = $_GET['nombre'];
    $modulos = $_GET['modulos'];

    print "Nombre: ".$_GET['nombre']."<br />";;

    foreach($modulos as $clave => $modulo){
        print "Clave: ".$clave." Modulo: ".$modulo."<br />";
    }

    print_r($_GET['modulos']);

?>

