<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $CategoryName = $_POST['CategoryName'];
    $Description = $_POST['Description'];
    include 'Conexion.php';
    $conexion = new Conexion();
    $categoria = $conexion->agregarCategoria($CategoryName,$Description);
    if ($categoria) {
    header("Location: listado.php");
    exit();
    } else {
    echo "Error al agregar Categoria";
    }
} else {
    echo "Acceso no permitido";
}
?>