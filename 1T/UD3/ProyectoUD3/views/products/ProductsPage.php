<?php
// Incluir las clases necesarias
require_once __DIR__ . '/../../controllers/ProductController.php';  // Incluir controlador
require_once __DIR__ . '/../../utils/Functions.php';  // Incluir funciones
$utils = new Functions();
// Recuperar los parámetros de la URL (filtro y orden)
$category = $_GET['filter'] ?? 'all'; 
$order = $_GET['order'] ?? 'asc'; 

// Crear una instancia del controlador
$productController = new ProductController();

// Obtener los productos ordenados y filtrados
$sortedProducts = $productController->listProducts($category, $order);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - ZonaBit</title>
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
    .filter-menu {    
        margin: 15px 0;
        padding: 10px;
        background-color: #f8f8f8;
        border: 1px solid #ddd;
        border-radius: 5px;
        display: flex;
        align-items: center;
    }

    .filter-menu label {
        margin-right: 10px;
        margin-left: 10px;
        font-size: 16px;
        font-weight: bold;
    }

    .filter-menu select {
        padding: 8px;
        font-size: 16px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background-color: #fff;
        cursor: pointer;
        transition: border-color 0.3s;
    }

    .filter-menu select:focus {
        border-color: black;
    }
    </style>
</head>
<body>
<header>
    <div class="logo">
        <h1>ZonaBit</h1>
    </div>
    <nav>
        <div class="search-bar">
            <input type="text" placeholder="Search...">
        </div>
        <ul>
            <li><a href="../../index.php">Home</a></li>
            <li><a href="ProductsPage.php">Products</a></li>
            <li><a href="https://drive.google.com/file/d/1xjEomYNbuogqnkxQ4RRnhisatBNahe7e/view?usp=sharing">Video</a></li>
            <li><a href="../form/form.html">Contact</a></li>
            <li>
                <i class="fas fa-shopping-cart"></i> 
            </li>
        </ul>
    </nav>
</header>

<main>
    <section id="products">
        <!-- Filtros de productos -->
        <div class="filter-menu">
            <form method="GET" action="ProductsPage.php">
                <label for="filter">Filtrar por Categoría:</label>
                <select name="filter" id="filter" onchange="this.form.submit()">
                    <option value="all" <?= $category === 'all' ? 'selected' : '' ?>>Todas</option>
                    <option value="portatiles" <?= $category === 'portatiles' ? 'selected' : '' ?>>Portátiles</option>
                    <option value="smartphones" <?= $category === 'smartphones' ? 'selected' : '' ?>>Smartphones</option>
                    <option value="tv" <?= $category === 'tv' ? 'selected' : '' ?>>TV</option>
                    <option value="perifericos" <?= $category === 'perifericos' ? 'selected' : '' ?>>Periféricos</option>
                    <option value="memorias" <?= $category === 'memorias' ? 'selected' : '' ?>>Memorias</option>
                    <option value="smartwatches" <?= $category === 'smartwatches' ? 'selected' : '' ?>>Smartwatches</option>
                </select>

                <label for="order">Ordenar por Precio:</label>
                <select name="order" id="order" onchange="this.form.submit()">
                    <option value="asc" <?= $order === 'asc' ? 'selected' : '' ?>>Ascendente</option>
                    <option value="desc" <?= $order === 'desc' ? 'selected' : '' ?>>Descendente</option>
                </select>
            </form>
        </div>

        <!-- Mostrar los productos -->
        <div class="products-grid" id="productGrid">
            <?php 
            if (empty($sortedProducts)) {
                echo "<p>No hay productos disponibles en esta categoría.</p>";
            } else {
                foreach ($sortedProducts as $producto) {
                    
                    echo $utils->generarProductoHTML($producto);  
                }
            }
            ?>
        </div>
    </section>
</main>

<footer>
    <p>&copy; 2024 ZonaBit. All rights reserved.</p>
    <p>Follow us on:
        <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
    </p>
</footer>
</body>
</html>
