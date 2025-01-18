<?php
// Importar la biblioteca FPDF
require('fpdf/fpdf.php');

// Conexión a la base de datos
$mysqli = new mysqli("localhost", "root", "", "dwes");

// Verificar conexión
if ($mysqli->connect_error) {
    die("Error en la conexión: " . $mysqli->connect_error);
}

// Consultar los datos de la tabla 'coches'
$query = "SELECT id, title, director, release_date FROM films";
$resultado = $mysqli->query($query);

// Crear un nuevo PDF
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);

// Título del documento
$pdf->Cell(0, 10, 'Lista de Peliculas', 0, 1, 'C');
$pdf->Ln(10); // Salto de línea

// Encabezados de la tabla
$pdf->Cell(20, 10, 'ID', 1, 0, 'C');
$pdf->Cell(50, 10, 'Titulo', 1, 0, 'C');
$pdf->Cell(50, 10, 'Director', 1, 0, 'C');
$pdf->Cell(30, 10, 'Release Date', 1, 1, 'C');

// Agregar los datos a la tabla
while ($fila = $resultado->fetch_assoc()) {
    $pdf->Cell(20, 10, $fila['id'], 1, 0, 'C');
    $pdf->Cell(50, 10, $fila['title'], 1, 0, 'C');
    $pdf->Cell(50, 10, $fila['director'], 1, 0, 'C');
    $pdf->Cell(30, 10, $fila['release_date'], 1, 1, 'C');
}

// Cerrar la conexión
$mysqli->close();

// Salida del PDF
$pdf->Output('D', 'films.pdf');
?>