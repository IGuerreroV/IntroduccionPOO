<?php include 'includes/header.php';

// Definir una clase
class Producto {
    public $nombre;
    public $precio;
    public $disponible;

}

$producto = new Producto();
$producto->nombre = 'Tablet';
$producto->precio = 200;
$producto->disponible = true;

echo '<pre>';
var_dump($producto);
echo '</pre>';

$producto2 = new Producto();
$producto2->nombre = 'Monitor Curvo';
$producto2->precio = 300;
$producto2->disponible = true;

echo '<pre>';
var_dump($producto2);
echo '</pre>';

include 'includes/footer.php';