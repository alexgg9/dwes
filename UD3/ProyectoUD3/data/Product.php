<?php

require_once 'models/Product.php';
require_once 'models/Category.php';

// Array de productos (convertidos a objetos con Category)
$productosObjetos = [
    new Product(0, 'Portátil Gigabyte', 800, 'assets/portatil_gigabyte.jpg', Category::Portatiles),
    new Product(1, 'Sobremesa Gaming Lenovo', 1200, 'assets/sobremesa_lenovo.jpg', Category::Sobremesa),
    new Product(2, 'Móvil Libre Oppo', 150, 'assets/movil_oppo.jpg', Category::Smarthphones),
    new Product(3, 'Xiaomi TV', 240, 'assets/xiaomi_tv.jpg', Category::TV),
    new Product(4, 'Ratón NewSkill', 40, 'assets/raton_newskill.jpg', Category::Perifericos),
    new Product(5, 'Tarjeta SD Kingston', 10, 'assets/tarjetasd_kingston.jpg', Category::Memorias),
    new Product(6, 'Auriculares SteelSeries', 300, 'assets/auriculares_steelseries.jpg', Category::Perifericos),
    new Product(7, 'Xiaomi Smart Band 9', 42, 'assets/xiaomi_smartband9.jpg', Category::Smartwatches)
];
