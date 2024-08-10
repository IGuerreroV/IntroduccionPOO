<?php include 'includes/header.php';

// Incluir las otras clases
function mi_autoload($clase) {
    require __DIR__ . '/clases/' . $clase . '.php';
}

spl_autoload_register('mi_autoload');

$detalles = new Detalles();
$clientes = new Clientes();

include 'includes/footer.php';