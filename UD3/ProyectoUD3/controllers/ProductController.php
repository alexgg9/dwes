<?php

require_once __DIR__ . '/../models/Product.php';

class ProductController {
    public function listProducts($category = 'all', $order = 'asc') {
        global $productosObjetos; // Array de objetos `Product`

        // Filtrar y ordenar productos
        $filteredProducts = Product::filterByCategory($productosObjetos, $category);
        $sortedProducts = Product::sortByPrice($filteredProducts, $order);

        // Cargar la vista con los productos
        require_once __DIR__ . '/../views/products/index.php';
    }
}
