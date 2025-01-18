<?php
//gettype obtiene el tipo de la variable que se le pasa como parámetro y devuelve una cadena de texto, que puede ser
//php array, boolean, double, integer, object, string, null, resource o unknowntype.

    $variable=18.7;
    $variable=8;
    $variable="hola";
    $variable=null;
    $variable=array(1,2,3,4,5);
    $variable=true;

    echo "El tipo de variable es: ".gettype($variable). "<br>";

    echo "<br> VAR_DUMP -> ", var_dump($variable);

    echo "<br> ¿es un array? ->", is_array($variable);

    $salida=is_array($variable);

    echo "<br> La salida es boleana? ->". is_bool($salida);


    //settype

    $a = $b = "3.1416";

    settype($b, "float");

    print "<br />";
    print "\$a vale $a, de tipo " . gettype($a) . "\n";
    print "<br />";
    print "\$b vale $b, de tipo " . gettype($b) . "\n";


    //Isset
    $variable = "Hola";
    //$variable = null;
    if(isset($variable)){
        echo $variable;
    }else{
        echo "La variable no existe";
    }
    //Unset
    unset($variable);
    if(isset($variable)){
        echo $variable;
    }else{
        echo " <br>La variable no existe";
    }



      // Desactivar toda las notificaciónes del PHP

    //error_reporting(0);

    
    // Notificar solamente errores de ejecución
    error_reporting(E_ERROR | E_PARSE);

    error_reporting(E_ERROR | E_WARNING | E_PARSE);


    //error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);


    // Mostrar todos los errores menos el E_NOTICE

    // Valor predeterminado ya descrito en php.ini

    error_reporting(E_ALL ^ E_NOTICE);


    //Notificar todos los errores de PHP

    //error_reporting(E_ALL);


    // Notificar todos los errores de PHP
    //error_reporting(-1);

    

    // Lo mismo que error_reporting(E_ALL);

    //ini_set('error_reporting', E_ALL);


?>