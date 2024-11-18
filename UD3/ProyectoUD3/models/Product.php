<?php


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


    public static function filterByCategory($products, $category) {
        if ($category === 'all') {
            return $products;
        }
        return array_filter($products, function ($product) use ($category) {
            return $product->getCategory() === $category;
        });
    }

    public static function sortByPrice($products, $order = 'asc') {
        usort($products, function ($a, $b) use ($order) {
            return $order === 'asc' ? $a->getPrice() <=> $b->getPrice() : $b->getPrice() <=> $a->getPrice();
        });
        return $products;
    }


    public function __toString() {
        return "ID: $this->id, Nombre: $this->name, Precio: $this->price, Imagen: $this->image, Categoria: {$this->category->value}";
    }

    
       
}

require 'Category.php'; 

$producto1 = new Product(1, "Portátil Gigabyte", 800.0, "assets/portatil_gigabyte.jpg", Category::Portatiles);

echo $producto1;

?>