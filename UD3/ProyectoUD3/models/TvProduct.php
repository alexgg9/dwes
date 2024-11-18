<?php

class tvProduct extends Product {

    public int $inches;

    public function __construct($id, $name, $price, $image, $category, $inches) {
        parent::__construct($id, $name, $price, $image, $category);
        $this->inches = $inches;
    }


    public function getInches(){
        return $this->inches;
    }

    public function setInches($inches){
        $this->inches = $inches;
        return $this;
    }

    public function __toString() {
        return "ID: $this->id, Nombre: $this->name, Precio: $this->price, Imagen: $this->image, Categoria: {$this->category->value}, Pulgadas: $this->inches";
    }  
}

?>