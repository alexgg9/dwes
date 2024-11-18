<?php
interface Functions {
    public function getFilteredProducts($productos, $categoria);
    public function sortProducts($productos);
    public function formatPrice($precio);
    public function formatDate($fecha);
    public function generarProductoHTML($producto);
    public function generarReporteHTML($incidencias);

}
?>