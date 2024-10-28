<?php
$contador = 0;
echo "<br> While:";
while ($contador < 10) {
    echo "<br> $contador"; // Imprime 0, 1, 2, 3, 4, 5, 6, 7, 8, 9
    $contador++;
}

$contador = 0;
echo "<br> Do While:";
do {
    echo "<br>" . $contador; // Imprime los pares
    $contador += 2;
} while ($contador < 10);

echo "<br> Bucle for:";
for ($i = 0; $i < 30; $i++) {
    echo "<br> valor de i:  $i"; // Imprime 0, 1, 2, 3, 4, 5, 6, 7, 8, 9
}

//BUCLE FOREACH

$semana = ["lunes", "martes", "miercoles", "jueves", "viernes", "sabado", "domingo"];

echo "Foreach --> ";
foreach ($semana as $dia) {
    echo $dia . " ";
}
?>
