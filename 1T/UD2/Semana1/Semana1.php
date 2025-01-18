<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semana 1 - Apuntes de PHP</title>
    <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        background-color: #eef2f3;
        color: #333;
        line-height: 1.6;
    }
    
    h1, h2, h3 {
        color: #333;
        font-weight: 600;
    }

    h1 {
        font-size: 2.5em;
        margin-bottom: 20px;
    }

    h2 {
        font-size: 2em;
        margin-top: 30px;
        margin-bottom: 15px;
    }

    h3 {
        font-size: 1.5em;
        margin-top: 20px;
        margin-bottom: 10px;
    }

    code {
        background-color: #d9e8f5;
        padding: 3px 6px;
        border-radius: 4px;
        font-family: 'Courier New', Courier, monospace;
        color: #d63384;
    }

    pre {
        background-color: #f7f7f7;
        padding: 15px;
        border-radius: 4px;
        overflow: auto;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        max-width: 100%;
    }

    .container {
        max-width: 900px;
        margin: 0 auto;
        padding: 20px;
        border-radius: 8px;
        background: white;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .section {
        margin-bottom: 40px;
        padding: 20px;
        border-left: 4px solid #007BFF; 
        background-color: #f9f9f9;
        border-radius: 4px;
    }

    .section-title {
        font-size: 1.8em;
        padding-bottom: 10px;
        margin-bottom: 15px;
        border-bottom: 2px solid #007BFF;
        color: #007BFF;
    }

    a {
        color: #007BFF;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    .button {
        background-color: #007BFF;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .button:hover {
        background-color: #0056b3;
    }
</style>

</head>
<body>
    <div class="container">
        <h1>Semana 1 - Apuntes de PHP - Alejandro Gálvez</h1>
        <div class="section">
            <h2 class="section-title">Introducción a PHP</h2>
            <p>PHP (Hypertext Preprocessor) es un lenguaje de programación de propósito general que está especialmente diseñado para el desarrollo web. Aquí algunos puntos clave:</p>
            <ul>
                <li>PHP se ejecuta en el servidor y genera contenido HTML dinámico.</li>
                <li>Se usa comúnmente junto con bases de datos como MySQL.</li>
                <li>La sintaxis de PHP es similar a C, Java y Perl.</li>
            </ul>
        </div>

        <div class="section">
            <h2 class="section-title">Sintaxis básica de PHP</h2>
            <h3>Uso de <code>echo</code></h3>
    <pre><code>&lt;?php
    echo "Hola, mundo!";
?&gt;</code></pre>
    <p>El código anterior usa <code>echo</code> para imprimir texto en la pantalla.</p>

    <h3>Uso de <code>print</code></h3>
    <pre><code>&lt;?php
    print "Hola, mundo!";
?&gt;</code></pre>
    <p>Tanto <code>echo</code> como <code>print</code> sirven para imprimir texto, pero <code>print</code> devuelve un valor (1).</p>

    <h3>Uso de <code>printf</code></h3>
    <p><code>printf</code> permite formatear cadenas, útil cuando quieres controlar el formato del texto impreso:</p>
    <pre><code>&lt;?php
    $nombre = "Juan";
    $edad = 25;
    printf("Hola, %s. Tienes %d años.", $nombre, $edad);
?&gt;</code></pre>
    <p>Este código imprime: <strong>Hola, Juan. Tienes 25 años.</strong></p>

    <p>El formato de <code>printf</code> utiliza especificadores:</p>
    <ul>
        <li><code>%s</code> para cadenas.</li>
        <li><code>%d</code> para enteros.</li>
        <li><code>%f</code> para números decimales.</li>
    </ul>

            <h3>Concatenación en PHP</h3>
            <p>En PHP, puedes concatenar (unir) cadenas utilizando el operador <code>.</code> (punto). Aquí tienes un ejemplo básico de concatenación:</p>
            <pre><code>&lt;?php
            $saludo = "Hola";
            $nombre = "Mundo";
            echo $saludo . ", " . $nombre . "!";
 ?&gt;</code></pre>
            <p>Este código imprime: <strong>Hola, Mundo!</strong></p>

            <p>En el ejemplo anterior:</p>
            <ul>
                <li><code>$saludo</code> almacena la cadena <em>"Hola"</em>.</li>
                <li><code>$nombre</code> almacena la cadena <em>"Mundo"</em>.</li>
                <li>El operador <code>.</code> se usa para unir varias cadenas y formar un único texto.</li>
            </ul>

            <p>También puedes combinar variables y texto directamente en una misma concatenación:</p>
            <pre><code>&lt;?php
            $nombre = "Juan";
            echo "Hola, " . $nombre . "!";
 ?&gt;</code></pre>
            <p>Este código imprime: <strong>Hola, Juan!</strong></p>
        </div>


        <div class="section">
    <h2 class="section-title">Variables y tipos de datos</h2>
    <p>En PHP, las variables se definen con el símbolo <code>$</code> y pueden almacenar diferentes tipos de datos. Ejemplo:</p>
    <pre><code>&lt;?php
$nombre = "Juan";
?&gt;</code></pre>
    <h3>Tipos de datos comunes en PHP</h3>
    <p>PHP soporta varios tipos de datos, entre los más comunes tenemos:</p>
    <pre><code>&lt;?php
// Tipo entero (integer)
$numero = 42;

// Tipo flotante (float)
$precio = 19.99;

// Tipo string (cadena de texto)
$saludo = "Hola, mundo!";

// Tipo booleano (boolean)
$esVerdad = true;

// Tipo array (arreglo)
$colores = array("rojo", "verde", "azul");

// Tipo null (nulo)
$vacio = null;
?&gt;</code></pre>

    <p>A continuación se describen los tipos de datos anteriores:</p>
    <ul>
        <li><code>$numero</code> es un entero (<em>integer</em>), que representa un número sin decimales, como <code>42</code>.</li>
        <li><code>$precio</code> es un número flotante (<em>float</em>), que incluye decimales, como <code>19.99</code>.</li>
        <li><code>$saludo</code> es una cadena de texto (<em>string</em>), como <code>"Hola, mundo!"</code>.</li>
        <li><code>$esVerdad</code> es una variable booleana (<em>boolean</em>), que puede ser <code>true</code> o <code>false</code>.</li>
        <li><code>$colores</code> es un arreglo (<em>array</em>), que almacena una lista de valores, en este caso, los colores <code>"rojo"</code>, <code>"verde"</code> y <code>"azul"</code>.</li>
        <li><code>$vacio</code> es una variable nula (<em>null</em>), que no tiene ningún valor asignado.</li>
    </ul>

    <p>Estos tipos de datos son fundamentales para manejar diferentes valores y estructuras en PHP.</p>
</div>


        <div class="section">
    <h2 class="section-title">Declaración de Clases</h2>
    <p>En PHP, una clase se define usando la palabra clave <code>class</code>. Ejemplo básico:</p>
    <pre><code>&lt;?php
class Coche {
    public $marca;
    
    // Constructor que inicializa la propiedad $marca
    public function __construct($marca) {
        $this->marca = $marca;
    }

    // Método para mostrar la marca
    public function mostrarMarca() {
        echo "La marca es " . $this->marca;
    }
}

$miCoche = new Coche("Toyota");
$miCoche->mostrarMarca(); // Imprime: La marca es Toyota
?&gt;</code></pre>
    <p>Este ejemplo define una clase <code>Coche</code> con una propiedad <code>$marca</code>, un constructor y un método <code>mostrarMarca()</code>.</p>
</div>

<div class="section">
    <h2 class="section-title">Ámbito de Variables y Variables Estáticas</h2>
    <p>En PHP, el ámbito de las variables define dónde pueden ser accedidas. A continuación se muestran dos ejemplos clave:</p>

    <h3>1. Variable Global</h3>
    <p>Las variables globales se pueden acceder desde cualquier parte del script si se declara explícitamente con <code>global</code>:</p>
    <pre><code>&lt;?php
$x = 10; // Ámbito global

function miFuncion() {
    global $x;
    echo $x; // Imprime: 10
}
miFuncion();
?&gt;</code></pre>

    <h3>2. Variable Estática</h3>
    <p>Las variables estáticas dentro de una función conservan su valor entre llamadas sucesivas:</p>
    <pre><code>&lt;?php
function contador() {
    static $contador = 0;
    $contador++;
    echo "&lt;p&gt;Contador: $contador&lt;/p&gt;";
}
contador(); // Imprime: 1
contador(); // Imprime: 2
?&gt;</code></pre>

</div>


<div class="section">
    <h2 class="section-title">Tipo de Variables</h2>
    <pre><code>&lt;?php
$variable = 10;
echo "El tipo de variable es: " . gettype($variable);
?&gt;</code></pre>
    <p>Utiliza <code>gettype()</code> para conocer el tipo de una variable.</p>
</div>

<div class="section">
    <h2 class="section-title">var_dump e is_array</h2>
    <pre><code>&lt;?php
$variable = [1, 2, 3];
var_dump($variable);
echo is_array($variable); // Devuelve 1 (verdadero)
?&gt;</code></pre>
    <p><code>var_dump()</code> muestra información detallada sobre una variable, e <code>is_array()</code> verifica si es un arreglo.</p>
</div>

<div class="section">
    <h2 class="section-title">settype</h2>
    <pre><code>&lt;?php
$a = "3.1416";
settype($a, "float");
echo gettype($a); // float
?&gt;</code></pre>
    <p>Cambia el tipo de una variable usando <code>settype()</code>.</p>
</div>

<div class="section">
    <h2 class="section-title">isset y unset</h2>
    <pre><code>&lt;?php
$variable = "Hola";
if (isset($variable)) {
    echo $variable; // Hola
}
unset($variable);
if (!isset($variable)) {
    echo "La variable no existe";
}
?&gt;</code></pre>
    <p><code>isset()</code> verifica si una variable está definida, y <code>unset()</code> la elimina.</p>
</div>

<div class="section">
    <h2 class="section-title">Manejo de Errores</h2>
    <pre><code>&lt;?php
error_reporting(E_ALL ^ E_NOTICE);
?&gt;</code></pre>
    <p>Configura qué tipos de errores quieres mostrar. En este caso, todos menos los <code>NOTICE</code>.</p>
</div>

<div class="section">
    <h2 class="section-title">Manejo de Fechas</h2>
    <p>PHP ofrece la función <code>date()</code> para formatear fechas. Algunos ejemplos:</p>

    <h3>Formato 1: Día/Mes/Año</h3>
    <pre><code>&lt;?php
echo date("d/m/Y"); // Imprime: 18/10/2024
?&gt;</code></pre>

    <h3>Formato 2: Año-Mes-Día Hora:Minutos:Segundos</h3>
    <pre><code>&lt;?php
echo date("Y-m-d H:i:s"); // Imprime: 2024-10-18 14:35:00
?&gt;</code></pre>

    <p>La función <code>date()</code> utiliza diferentes caracteres para personalizar el formato de la fecha. Por ejemplo:</p>
    <ul>
        <li><code>d</code>: Día (con ceros si es necesario)</li>
        <li><code>m</code>: Mes numérico</li>
        <li><code>Y</code>: Año en 4 dígitos</li>
        <li><code>H</code>: Hora en formato 24h</li>
        <li><code>i</code>: Minutos</li>
        <li><code>s</code>: Segundos</li>
    </ul>
</div>

<div class="section">
    <h2 class="section-title">Variables Especiales en PHP</h2>
    <p>PHP ofrece varias variables superglobales que son accesibles en cualquier parte del script. A continuación se describen algunas de las más comunes:</p>

    <h3>1. <code>$_POST</code></h3>
    <p>Contiene datos enviados mediante el método POST.</p>
    <pre><code>&lt;?php
print_r($_POST);
?&gt;</code></pre>

    <h3>2. <code>$_GET</code></h3>
    <p>Contiene datos enviados mediante el método GET.</p>
    <pre><code>&lt;?php
print_r($_GET);
?&gt;</code></pre>

    <h3>3. <code>$_SERVER</code></h3>
    <p>Contiene información sobre las cabeceras, rutas y localización del script.</p>
    <pre><code>&lt;?php
print_r($_SERVER);
?&gt;</code></pre>

    <h3>4. <code>$_SESSION</code></h3>
    <p>Contiene variables de sesión.</p>
    <pre><code>&lt;?php
session_start(); // Asegúrate de iniciar la sesión
print_r($_SESSION);
?&gt;</code></pre>

    <h3>5. <code>$_COOKIE</code></h3>
    <p>Contiene las cookies enviadas por el navegador.</p>
    <pre><code>&lt;?php
print_r($_COOKIE);
?&gt;</code></pre>

    <h3>6. <code>$_ENV</code></h3>
    <p>Contiene variables de entorno del servidor.</p>
    <pre><code>&lt;?php
print_r($_ENV);
?&gt;</code></pre>
</div>

<div class="section">
    <h2 class="section-title">Uso de <code>foreach</code> en PHP</h2>
    <p>El bucle <code>foreach</code> permite iterar sobre arrays y objetos. Aquí hay un par de ejemplos usando <code>$_SERVER</code>:</p>

    <h3>Ejemplo 1: Iterar solo valores</h3>
    <pre><code>&lt;?php
foreach($_SERVER as $row) {
    echo "$row &lt;br&gt;";
}
?&gt;</code></pre>

    <h3>Ejemplo 2: Iterar clave y valor</h3>
    <pre><code>&lt;?php
foreach($_SERVER as $key => $value) {
    echo "[ $key ] => $value &lt;br&gt;";
}
?&gt;</code></pre>
</div>



</body>
</html>
