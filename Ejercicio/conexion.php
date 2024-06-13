<?php
$servername = "localhost"; // o el nombre del servidor donde se ejecuta MySQL
$username = "root";
$password = "1234";
$database = "hospital";

// Crear la conexión
$conexion = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

?>