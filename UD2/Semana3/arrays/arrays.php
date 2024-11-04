<?php
print "<h1>UD2. ARRAYS</h1>";


print "<br>
Un array es un tipo de datos que nos permite almacenar varios valores.
Cada miembro del array se almacena en una posición a la que se le hace referencia utilizando un valor clave.
Las claves pueden ser numéricas o asociativas.";
print "<br> Array asociativo y sus dos formas de crearlo:";

    $persona  = array(
    'name' => 'John',
     'age' => 25
    );

    // a partir de PHP 5.4
    $alumno = [
        'name' => 'John',
        'ciclo' => '2DAW'
    ];

    print "<br> Array persona:";
    print_r($persona);

    print "<br> Array alumno:";
    print_r($alumno);


    print "<h2> Array numerico y sus tres formas de crearlo:</h2>";
    //array número
    $modulos = array (0 => "PHP", 1 => "HTML", 2 => "CSS");
    $alumnos1 = array("Antonio", "Juan", "Pedro");
    $alumnos2 = ["Antonio", "Juan", "Pedro"]; //más utilizado

    print "<br> Array modulos:";
    print_r($modulos);

    print "<br> Array alumnos1:";
    print_r($alumnos1);

    print "<br> Array alumnos2:";  
    print_r($alumnos2);

    print "<br> El alumno 2 es". $alumnos1[1];

    print "<br> El alumno 2 es". $alumnos2[1];

    //texto como arrays
    print "<h3>Cadenas o variables de texto tratadas como arrays</h3>";
    print "<br> print de la variable TEXTO para ver que las cadenas se pueden tratar como arrays  ";
    $texto= "hola";
    //print_r ($texto);
    print "<br /> ELEMENTO CADENA DE TEXTO hola [3]: ". $texto[3];



    // array bidimensional
    print "<h2>UD2. ARRAYS BIDIMENSIONALES O MULTIDIMENSIONALES</h2>";
    $ciclos = array(
        "DAW" => array ("PR" => "Programación", "BD" => "Bases de datos", "DWES" => "Desarrollo web en entorno servidor"),
        "DAM" => array ("PR" => "Programación", "BD" => "Bases de datos", "PMDM" => "Programación multimedia y de dispositivos móviles")
    );

    $deportes = [
        "futbol" => ["Madrid", "Barcelona", "Betis"],
        "baloncesto" => ["Barcelona", "Real Madrid", "Unicaja"],
        "tenis" => ["Nadal", "Federer", "Djokovic"],
    ];

    $deportes2 = [
        ["Madrid", "Barcelona", "Betis"],
        ["Barcelona", "Real Madrid", "Unicaja"],
        ["Nadal", "Federer", "Djokovic"],
    ];

    print "</br> Asociativo(clave valor)<br/>";
    print_r($deportes);
    print "</br> Númerico <br/>";
    print_r($deportes2);

    print "<h4>Arrays sin especificar el valor</h4>";
$cena_navidad[]= "juan";
$cena_navidad[]= "pedro";
$cena_navidad[]= "maria";

foreach ($cena_navidad as $key => $value) {
    print "invindado numero ".($key +1) ." a la cena: $value <br>";
}   

// ANEXO FOREACH con clave valor <br />";
print "<h2>FOREACH con clave valor de la variable SERVER </h2>";
 
foreach ($_SERVER as $clave => $valor) 
/*
{
    print "<br/>";
    print "<tr/>";
        print "<td> Clave: ".$clave."</td> --------- Valor: ";
        print "<td>".$valor."</td>";
    print "</tr>";

}
*/
    echo "<br/>Recorrrer array con current, reset...<br/>";
    $musica = ["Rock", "Jazz", "Pop"];
    print_r($musica);

    //recorriendo con next

    while($valor = current($musica)){
        print "<br/>".$valor;
        next($musica);
    }

    echo "<br><br /> <b> Recorrerlo uno a uno </b>";

   print "<br/>Reinicio el puntero con reset: ".reset($musica) ;
   print "<br/>La clave de la posici贸n actual del array es: ". key($musica) ;
   print "<br/>El elemento del array musica es ".current($musica) ;
   next($musica);
   next($musica);
   print "<br/>El elemento del array musica es ".current($musica) ;
    //estamos en el tercer elemento
    prev($musica);
    print "<br/>La clave de la posici贸n actual del array es: ". key($musica) ;

    print "<br/>El elemento del array musica es ".current($musica) ;

   print "<br/>Reinicio el puntero con reset: ".reset($musica) ;
   print "<br/>La clave de la posici贸n actual del array es: ". key($musica) ;
   print "<br/>El elemento final del array musica es ".end($musica) ;
   print "<br/>La clave de la posici贸n actual del array es: ". key($musica) ;

   print "<h2> Funciones importantes para tratar arrays </h2>";


   print "</br> eliminamos un elemento del array musica con unset ";
   unset($musica[2]);
    unset($musica[0]);

   print_r($musica) . "<br>";
   $musica[0] = "Jazz";
   print_r($musica) . "<br>";

   print "<br/><h3> Busqueda con in_array </h3>";


   $para_buscar = "Cumbia";
   if (in_array($para_buscar, $musica)) 
    {

        print "<br/>Existe el elemento ". $para_buscar ;
        print "Su clave es ". array_search ($para_buscar, $musica);
    }

     else
         print "NO Existe el elemento ".$para_buscar ;


     //busqueda con 
     $para_buscar = "0";
     if (array_key_exists($para_buscar, $musica)) 
         {

             print "<br/>Existe el elemento ".$para_buscar ;
             print "El elemento es ". $musica[$para_buscar];
         }

         else
             print "NO Existe el elemento ".$para_buscar ;


?>