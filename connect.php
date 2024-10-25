<?php

$server = "localhost";
$user = "root"; 
$pass = ""; 
$db = "registro_usuarios";

$conn = new mysqli($server, $user, $pass, $db);

if ($conn->connect_error) {
   
    die("Error de conexión: " . $conn->connect_error);
} else {
   
    echo "Conexión exitosa a la base de datos";
}

?>
