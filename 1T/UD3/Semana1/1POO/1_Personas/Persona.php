<?php 
/*
Para declarar una clase, se utiliza la palabra clave class seguido del nombre de la clase. 
Para instanciar un objeto a partir de la clase, se utiliza new:
*/
class Persona {
    private string $nombre;
    private int $edad;

    public function setNombre(string $nom){ 
        $this->nombre=$nom;   
    }

    public function setEdad(int $edad){
        $this->edad=$edad;
    }

    public function imprimir(){
        echo $this->nombre;
        echo $this->edad;
        echo '<br>';
    }
}

$bruno = new Persona(); // creamos un objeto
$bruno->setNombre("Bruno Díaz <br>"); // llamamos a su setter
$bruno->setEdad(28);
$bruno->imprimir(); // imprimimos

?>