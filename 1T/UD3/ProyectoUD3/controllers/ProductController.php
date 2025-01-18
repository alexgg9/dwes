<?php

require_once __DIR__ . '/../models/Product.php';

class ProductController {
    public function listProducts($category = 'all', $order = 'asc') {
        // Importa los datos de los productos
        require_once __DIR__ . '/../data/Product.php';

        // Filtrar productos
        $filteredProducts = Product::filterByCategory($productosObjetos, $category);

        // Ordenar productos
        $sortedProducts = Product::sortByPrice($filteredProducts, $order);

        // Retorna los productos ordenados
        return $sortedProducts;
    }
}
