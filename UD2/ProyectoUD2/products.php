<?php
include 'functions.php';

// Definicion del ARRAY de productos(Array Multidimencional contiene Arrays asociativos)
$productos = [
    ['id' => 0, 'nombre' => 'Portátil Gigabyte', 'precio' => 800, 'imagen' => 'assets/portatil_gigabyte.jpg', 'categoria' => 'portatiles'],
    ['id' => 1, 'nombre' => 'Sobremesa Gaming Lenovo', 'precio' => 1200, 'imagen' => 'assets/sobremesa_lenovo.jpg', 'categoria' => 'sobremesas'],
    ['id' => 2, 'nombre' => 'Móvil Libre Oppo', 'precio' => 150, 'imagen' => 'assets/movil_oppo.jpg', 'categoria' => 'smartphones'],
    ['id' => 3, 'nombre' => 'Xiaomi TV', 'precio' => 240, 'imagen' => 'assets/xiaomi_tv.jpg', 'categoria' => 'tv'],
    ['id' => 4, 'nombre' => 'Ratón NewSkill', 'precio' => 40, 'imagen' => 'assets/raton_newskill.jpg', 'categoria' => 'perifericos'],
    ['id' => 5, 'nombre' => 'Tarjeta SD Kingston', 'precio' => 10, 'imagen' => 'assets/tarjetasd_kingston.jpg', 'categoria' => 'memorias'],
    ['id' => 6, 'nombre' => 'Auriculares SteelSeries', 'precio' => 300, 'imagen' => 'assets/auriculares_steelseries.jpg', 'categoria' => 'perifericos'],
    ['id' => 7, 'nombre' => 'Xiaomi Smart Band 9', 'precio' => 42, 'imagen' => 'assets/xiaomi_smartband9.jpg', 'categoria' => 'smartwatches']
];

$categoriaSeleccionada = isset($_GET['filter']) ? $_GET['filter'] : 'all';
$order = isset($_GET['order']) ? $_GET['order'] : 'asc';

// Filtrar productos según la categoría seleccionada
$productosFiltrados = getFilteredProducts($productos, $categoriaSeleccionada);

// Ordenar productos según el orden seleccionado
sortProducts($productosFiltrados, $order);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>ZonaBit - Products</title>
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
                <li><a href="index.html">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="form.html">Contact</a></li>
                <li>
                    <i class="fas fa-shopping-cart"></i> 
                </li>
            </ul>
        </nav>
    </header>
    <!-- Main Section -->
    <main>
        <!-- Products Section -->
        <section id="products">
            <h2>Products</h2>

            <div class="filter-menu">
            <form method="get" action="products.php">
                <label for="filter"> Filtrar por categoría: </label>
                <select id="filter" name="filter" onchange="this.form.submit()">
                    <option value="all" <?php echo $categoriaSeleccionada === 'all' ? 'selected' : ''; ?>>Todos</option>
                    <option value="portatiles" <?php echo $categoriaSeleccionada === 'portatiles' ? 'selected' : ''; ?>>Portátiles</option>
                    <option value="sobremesas" <?php echo $categoriaSeleccionada === 'sobremesas' ? 'selected' : ''; ?>>Sobremesas</option>
                    <option value="smartphones" <?php echo $categoriaSeleccionada === 'smartphones' ? 'selected' : ''; ?>>Móviles</option>
                    <option value="tv" <?php echo $categoriaSeleccionada === 'tv' ? 'selected' : ''; ?>>TV</option>
                    <option value="perifericos" <?php echo $categoriaSeleccionada === 'perifericos' ? 'selected' : ''; ?>>Periféricos</option>
                    <option value="memorias" <?php echo $categoriaSeleccionada === 'memorias' ? 'selected' : ''; ?>>Memorias</option>
                    <option value="smartwatches" <?php echo $categoriaSeleccionada === 'smartwatches' ? 'selected' : ''; ?>>Smartwatches</option>
                </select>
            </form>
            
            <form method="get" action="products.php">
                <label for="order"> Ordenar por precio: </label>
                <select id="order" name="order" onchange="this.form.submit()">
                    <option value="asc" <?php echo $order === 'asc' ? 'selected' : ''; ?>>Precio ascendente</option>
                    <option value="desc" <?php echo $order === 'desc' ? 'selected' : ''; ?>>Precio descendente</option>
                </select>
            </form>
        </div>

        <div class="products-grid" id="productGrid">
            <?php 
            if (empty($productosFiltrados)) {
                echo "<p>No hay productos disponibles en esta categoría.</p>";
            } else {
                foreach ($productosFiltrados as $producto) {
                    echo generarProductoHTML($producto);
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
