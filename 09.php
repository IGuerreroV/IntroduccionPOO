<?php include 'includes/header.php';

// Conectar a la BD con Mysqli (POO).
$db = new mysqli('localhost', 'root', 'root', 'bienesraices_crud');

// Creamos el query
$query = "SELECT titulo, imagen FROM propiedades";

// Lo preparamos
$stmt = $db->prepare($query);

// Lo ejecutamos
$stmt->execute();

// Creamos la variable
$stmt->bind_result($titulo, $imagen);


// Asignamos el resultado
while($stmt->fetch()):
    // Imprimimos el resultado
    var_dump($titulo, $imagen);
endwhile;


include 'includes/footer.php';