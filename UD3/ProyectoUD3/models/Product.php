<?php

require_once __DIR__ . '/Category.php';

class Product {
    public int $id;
    public string $name;
    public float $price;
    public string $image;
    public Category $category;

    public function __construct(int $id, string $name, float $price, string $image, Category $category) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->category = $category;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
        return $this;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
        return $this;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setPrice($price){
        $this->price = $price;
        return $this;
    }
 
    public function getImage(){
        return $this->image;
    }

    public function setImage($image){
        $this->image = $image;
        return $this;
    }

    public function getCategory(){
        return $this->category;
    }

    public function setCategory($category){
        $this->category = $category;
        return $this;
    }

    //Polimorfismo
    public function getDetails(){
        return "{this->name} - {this->price}";
    }


    public static function filterByCategory($products, $category) {
        if ($category === 'all') {
            return $products;
        }
    
        $categoryEnum = Category::from($category);
    
        return array_filter($products, function ($product) use ($categoryEnum) {
            return $product->getCategory() === $categoryEnum;
        });
    }
    

    public static function sortByPrice($products, $order = 'asc') {
        usort($products, function ($a, $b) use ($order) {
            $priceA = $a->getPrice();
            $priceB = $b->getPrice();
            
            return $order === 'asc' ? $priceA <=> $priceB : $priceB <=> $a->getPrice();
        });
        return $products;
    }
    


    public function __toString() {
        return "ID: $this->id, Nombre: $this->name, Precio: $this->price, Imagen: $this->image, Categoria: {$this->category->value}";
    }

    
       
}


?>