<?php
$id=$_GET['CustomerID'];

require_once "ConexionPDO.php";
$conn=new ConexionPDO();

$sql="delete from customers where CustomerID=".$id;

$rs=$conn->ejecutar($sql);

header("Location: Principal.php");

?>