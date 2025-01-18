<?php
define("DB_NAME", "ud5_login2.db");


try {
    // Crear la base de datos si no existe
    $db = new SQLite3(DB_NAME);
    
    // Crear la tabla de usuarios si no existe
    $db->exec("CREATE TABLE IF NOT EXISTS usuarios (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                usuario TEXT NOT NULL,
                password TEXT NOT NULL
            )");

    // Crear la tabla de productos (ropa) si no existe
    $db->exec("CREATE TABLE IF NOT EXISTS productos (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                nombre TEXT NOT NULL,
                descripcion TEXT NOT NULL,
                precio DECIMAL(10, 2) NOT NULL,
                stock INTEGER NOT NULL
            )");

    // Insertar un usuario admin por defecto si no existe
    $stmt = $db->prepare("SELECT * FROM usuarios WHERE usuario = :usuario");
    $stmt->bindValue(':usuario', 'admin');
    $result = $stmt->execute();

    if ($result->fetchArray() === false) {
        $stmt = $db->prepare("INSERT INTO usuarios (usuario, password) VALUES (:usuario, :password)");
        $stmt->bindValue(':usuario', 'admin');
        $stmt->bindValue(':password', password_hash('admin', PASSWORD_DEFAULT));
        $stmt->execute();
    }


    // Insertar 10 productos de prueba si la tabla está vacía
    $productosPrueba = [
        ['nombre' => 'Manzana Orgánica', 'descripcion' => 'Fresca y deliciosa.', 'precio' => 1.99, 'stock' => 100, 'categoria' => 'Fruta'],
        ['nombre' => 'Zanahoria Orgánica', 'descripcion' => 'Fresca y orgánica.', 'precio' => 2.50, 'stock' => 80, 'categoria' => 'Verdura'],
        ['nombre' => 'Harina Sin Gluten', 'descripcion' => 'Ideal para celiacos.', 'precio' => 4.99, 'stock' => 150, 'categoria' => 'Sin gluten'],
        ['nombre' => 'Suplemento Vitamina C', 'descripcion' => 'Suplemento orgánico.', 'precio' => 15.99, 'stock' => 200, 'categoria' => 'Suplemento'],
        ['nombre' => 'Aceite de Oliva Orgánico', 'descripcion' => 'Aceite de oliva extra virgen.', 'precio' => 6.99, 'stock' => 50, 'categoria' => 'Aceite']
    ];
    // Insertar productos solo si la tabla está vacía
    $stmt = $db->query("SELECT COUNT(*) AS total FROM productos");
    $row = $stmt->fetchArray();
    if ($row['total'] == 0) {
        foreach ($productosPrueba as $producto) {
            $stmt = $db->prepare("INSERT INTO productos (nombre, descripcion, precio, stock) VALUES (:nombre, :descripcion, :precio, :stock)");
            $stmt->bindValue(':nombre', $producto['nombre']);
            $stmt->bindValue(':descripcion', $producto['descripcion']);
            $stmt->bindValue(':precio', $producto['precio']);
            $stmt->bindValue(':stock', $producto['stock']);
            $stmt->execute();
        }
    }

    echo "Base de datos y productos de prueba inicializados correctamente.";

} catch (Exception $e) {
    echo "Error de conexión a la base de datos: " . $e->getMessage();
}
?>
