<?php


//Define varias constantes de varios tipos.
define ("PI", 3.1416);
define ("E", 2.7);
define ("GRAVEDAD", 9.81);

echo"El valor de PI es: ".PI." <br>";
echo"El valor de E es: ".E." <br>";
echo"El valor de GRAVEDAD es: ".GRAVEDAD." <br>";

date_default_timezone_set("America/Toronto");
define ("FECHA_ACTUAL", date("d/m/Y, e"));
define ("HORA_ACTUAL", date("H:i:s"));
echo"La fecha actual es: ".FECHA_ACTUAL." <br>";
echo"La hora actual es: ".HORA_ACTUAL." <br>";

$fecha = "2024-10-01";

echo " <br> 3" . date('D-Y-m-d', strtotime($fecha));


?>