<?php
$CategoryID = $_GET['CategoryID'];
include 'Conexion.php';
$conexion = new Conexion();
$categoria = $conexion->eliminarCategoria($CategoryID);
header("Location: listado.php");
?>
