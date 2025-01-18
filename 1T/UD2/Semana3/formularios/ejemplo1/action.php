<?php 
echo "HOLA ".htmlspecialchars($_POST['nombre'])."<br>";
echo "Usted tiene ".(int)$_POST['edad']. " años"; 

print_r($_POST);

?>