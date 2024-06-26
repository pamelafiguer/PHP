<?php
$CategoryID = $_POST['CategoryID'];
$CategoryName = $_POST['CategoryName'];
$Description = $_POST['Description'];
include 'Conexion.php';
$conexion = new Conexion();
$categoria = $conexion->actualizarCategoria($CategoryID,$CategoryName,$Description);
header("Location: listado.php");
?>