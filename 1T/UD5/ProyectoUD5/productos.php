<?php
session_start();
require('config.php');  // Asegúrate de incluir la conexión

// Si el usuario no está logueado, lo redirigimos a login
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

// cookie inicio de sesión
$loginCount = isset($_COOKIE['login_count_' . $_SESSION['usuario']]) ? $_COOKIE['login_count_' . $_SESSION['usuario']] : 0;

// cookie idioma
$idioma = isset($_COOKIE['lang']) ? htmlspecialchars($_COOKIE['lang']) : 'No disponible';


$pagina = isset($_GET['pagina']) ? (int) $_GET['pagina'] : 1;
$itemsPorPagina = 5;
$offset = ($pagina - 1) * $itemsPorPagina;

// Obtener los productos
$stmt = $db->prepare("SELECT * FROM productos LIMIT :limit OFFSET :offset");
$stmt->bindValue(':limit', $itemsPorPagina, SQLITE3_INTEGER);
$stmt->bindValue(':offset', $offset, SQLITE3_INTEGER);
$result = $stmt->execute();

$productos = [];
while ($row = $result->fetchArray()) {
    $productos[] = $row;
}

// Contar total de productos para la paginación
$stmt = $db->query("SELECT COUNT(*) as total FROM productos");
$totalProductos = $stmt->fetchArray()['total'];
$totalPaginas = ceil($totalProductos / $itemsPorPagina);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Productos</title>
    <link rel="stylesheet" href="https://unpkg.com/picocss@1.5.7/dist/pico.min.css">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h2>Productos Organicos</h2>

    <p>Bienvenido, <?php echo htmlspecialchars($_SESSION['usuario']); ?></p>
    <p>Has iniciado sesión <?= $loginCount ?> veces.</p>
    <p>Idioma: <?= $idioma; ?></p>
    
    <br><br>

    <?php if (isset($_SESSION['usuario']) && $_SESSION['usuario'] === 'admin'): ?>
        <a href="agregar_producto.php">Agregar Producto</a>
        <br><br>
    <?php endif; ?>


    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($productos as $producto): ?>
            <tr>
                <td><?php echo htmlspecialchars($producto['nombre']); ?></td>
                <td><?php echo htmlspecialchars($producto['descripcion']); ?></td>
                <td><?php echo $producto['precio']; ?></td>
                <td><?php echo $producto['stock']; ?></td>
                <td>
                <?php if (isset($_SESSION['usuario']) && $_SESSION['usuario'] === 'admin'): ?>
                    <a href="editar_producto.php?id=<?php echo $producto['id']; ?>">Editar</a>
                    <a href="eliminar_producto.php?id=<?php echo $producto['id']; ?>">Eliminar</a>
                <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <br>

    <div>
        <p>Páginas:</p>
        <?php for ($i = 1; $i <= $totalPaginas; $i++): ?>
            <a href="productos.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php endfor; ?>
    </div>

    <a href="logout.php">Cerrar sesión</a>
</body>
</html>
