<?php
class Persona {
    // Propiedades
    public $nombre;
    public $edad;

    // Método constructor
    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    // Método
    public function saludar() {
        return "Hola, mi nombre es $this->nombre y tengo $this->edad años.";
    }
}

// Crear un objeto de la clase Persona
$persona1 = new Persona("Alejandro", 24);
echo $persona1->saludar(); 
?>