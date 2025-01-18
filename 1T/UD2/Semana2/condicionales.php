<?php

$persona1 = 10;
$persona2 = 20;
if ($persona1 > $persona2) {
    echo "La persona 1 es mayor que la persona 2" . "<br>";
} elseif ($persona1 < $persona2) {
    echo "La persona 2 es mayor que la persona 1" . "<br>";
} else {
    echo "La persona 1 y 2 tienen la misma edad" . "<br>";
}

//Operador ternario

//Sintaxis Basica del operador ternario
//(condicion) ? valor_si_verdadero : valor_si_falso,

echo ($persona1 > $persona2) ? "La persona 1 es mayor que la persona 2 " . "<br>" : "La persona 2 es mayor que la persona 1" . "<br>";

$interruptor = true;
echo ($interruptor) ? "encencido" . "<br>" : "apagado" . "<br>";

//Ejemplo de Swintch
$dia = "lunes";
switch ($dia) {
    case "lunes":
        echo "Hoy es lunes <br>";
        break;
    case "martes":
        echo "Hoy es martes <br>";
        break;
    case "miercoles":
        echo "Hoy es miercoles <br>";
        break;
    case "jueves":
        echo "Hoy es juevesm<br>";
        break;
    case "viernes":
        echo "Hoy es viernes <br>";
        break;
    case "sabado":
        echo "Hoy es sabado  <br>";
        break;
    case "domingo":
        echo "Hoy es domingo  <br>";
        break;
    default:
        echo "No se reconoce el dia";
}

//Match 
// A diferenciad del switch, el match no es sensible a mayúsculas y minúsculas
//Identidad es cuando tiene el mismo valor y el mismo tipo

$dia = "lunes";
$salida = match ($dia) {
    "lunes" => "Hoy es lunes <br>",
    "martes" => "Hoy es martes <br>",
    "miercoles" => "Hoy es miercoles <br>",
    "jueves" => "Hoy es jueves <br>",
    "viernes" => "Hoy es viernes <br>",
    "sabado" => "Hoy es sabado <br>",
    "domingo" => "Hoy es domingo <br>",
    default => "No se reconoce el dia <br>",
};
echo($salida);

//Macth con rangos
$pie = 10;
$output = match (true) {
    $pie < 2 => "eres un bebe <br>",
    $pie > 10 => "eres un niño <br>",
    $pie >= 18 => "eres un adulto <br>",
    $pie >= 45 => "eres un anciano <br>",

    default => "no tienes pie <br>",
};



?>