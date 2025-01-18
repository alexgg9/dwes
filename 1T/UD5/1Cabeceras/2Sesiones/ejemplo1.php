<?php
// Iniciar sesión
session_start();

// Almacenar un dato en la sesión (por ejemplo, el nombre del usuario)
$_SESSION['usuario'] = 'Carlos';

// Recuperar el dato almacenado
echo "Bienvenido, " . $_SESSION['usuario'];

// El servidor recuerda al usuario mientras dure la sesión.

?>