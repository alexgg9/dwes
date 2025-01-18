<?php
    // Comentario de linea
    echo "Hola Mundo";

    /* Comentario
    de
    bloque
    */

    echo "<p>Primer Script PHP</p>";


    echo "<p>El lenguaje PHP es un lenguaje de programacion POCO TIPADO</p>";
    

    $lunes;
    $lunes = "Lunes";
    

    $dia_mes = 14;

    echo "<p>Concatenando variables: " . $lunes . " " . $dia_mes . "</p>";

    $dia_mes = "lunes catorce";

    echo "hoy es " . $lunes . " " . $dia_mes;

    //$2hola = "Hola Mundo"; // Error de sintaxis

    //PHP soporta varios tipos de datos, entre los mas comunes:

    $numero = 42;

    $precio = 19.99;

    $saludo = "Hola, mundo!";

    $esVerdad = true;

    $colores = array("rojo", "verde", "azul");

    $vacio = null;

    class Coche{
        public $marca;
        public function __construct($marca){
            $this->marca = $marca;
        }
    }

    $miCoche = new Coche("Ferrari");


    $x = 10; // Ámbito global

    function miFuncion() {
        global $x; // Hace $x accesible dentro de la función
        echo $x;
    }

    miFuncion(); // Imprime: 10

    function contador() {
        static $contador = 0; // Persiste su valor entre llamadas
        $contador++;
        echo "<p>Contador: $contador</p>";
    }
    
    contador(); // Imprime: 1
    contador(); // Imprime: 2
    contador(); // Imprime: 3

    function contador2() {
        $contador = 0; // Persiste su valor entre llamadas
        $contador++;
        echo "<p>Contador: $contador</p>";
    }
    
    contador2(); // Imprime: 1
    contador2(); // Imprime: 2
    contador2(); // Imprime: 3


    
?>