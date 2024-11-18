<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - ZonaBit</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <header>
        <h1>Lista de Productos</h1>
        <a href="../index.php">Volver a Inicio</a>
    </header>

    <div class="filter-menu">
        <form method="GET" action="products.php">
            <label for="filter">Filtrar por Categoría:</label>
            <select name="filter" id="filter" onchange="this.form.submit()">
                <option value="all" <?= $category === 'all' ? 'selected' : '' ?>>Todas</option>
                <option value="portatiles" <?= $category === 'portatiles' ? 'selected' : '' ?>>Portátiles</option>
                <!-- Más opciones -->
            </select>
        </form>

        <form method="GET" action="products.php">
            <label for="order">Ordenar por Precio:</label>
            <select name="order" id="order" onchange="this.form.submit()">
                <option value="asc" <?= $order === 'asc' ? 'selected' : '' ?>>Ascendente</option>
                <option value="desc" <?= $order === 'desc' ? 'selected' : '' ?>>Descendente</option>
            </select>
        </form>
    </div>

    <div class="products-grid">
        <?php foreach ($sortedProducts as $product): ?>
            <div class="product-item">
                <img src="<?= $product->getImage(); ?>" alt="<?= $product->getName(); ?>">
                <h2><?= $product->getName(); ?></h2>
                <p>Precio: <?= $product->getPrice(); ?> €</p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
