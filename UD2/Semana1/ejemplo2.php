<?php
    // Código PHP aquí
    echo "<p><h1>Conversiones de tipos posibles y los resultados obtenidos: </h1></p>";



    $foo = "0";  // $foo es string (ASCII 48)
    $foo += 2;   // $foo es ahora un integer (2)
    $foo = $foo + 1.3;  // $foo es ahora un float (3.3)
   // $foo = 5 + "10 Cerditos pequeñitos"; // $foo es integer (15)
    $foo = 5 + (integer)"20 Cerdos pequeños ";     // $foo es integer (15)

    echo $foo;

   
    
   
    

?>

<p>
    <h1>IMPRIMIR POR PANTALLA </h1>
    <?php
    
        echo "<br>Hola, mundo!";
        print "<br>Hola, mundo!";
        echo "<br>Hola, ", "mundo!";

        //Ejemplo 5 
        $nombre = "Rafa";
        print "<br>Hola, " . $nombre . "!"; 
      

     
        echo" <br>Este es un 'ejemplo' con comillas dobles y simples.";
        echo' <br>Este es un "ejemplo" con comillas dobles y simples.';
        

        $cliente = "Rafa";
        $apellido = "Lucena ";
        $edad = 21;
        printf("<br>Hola soy %s mi paellido es %s y tengo %d anios", $cliente, $apellido, $edad);

        printf("<br>Número decimal: %d\n", 42); 

        //Formato de numero flotante
        printf("<br>Número flotante: %f\n", 42.1337); // Salida: Número flotante: 42.133700

        //Formato de cadena
        $b .= "foo";
        $a .= $b;

        echo $a;

        //Ejemplo 
        $a = 'a';
        $b = 'b';

        $a .= $b .= "foo";

        echo "<br> Ejemplo  ",$a,"\n",$b;
    ?>


</p>