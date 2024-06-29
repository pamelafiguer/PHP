<?php
require_once "ConexionPDO.php";
$conn=new ConexionPDO();
$rs=$conn->ejecutar("select * from customers");
$data=$rs->fetchAll();


echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>';
echo "<table border='1'><tr>
<thead>
<th>Nro</th>
<th>Nombre</th>
<th>Nombre de Contacto</th>
<th>Direccion</th>
<th>Ciudad</th>
<th>Codigo Postal</th>
<th>Pais</th></tr>";
$n=1;
foreach ($data as $row){
    echo "<tr><td>".$n."</td>";
    echo "<td>".$row['CustomerName']."</td>";
    echo "<td>".$row['ContactName']."</td>";
    echo "<td>".$row['Address']."</td>";
    echo "<td>".$row['City']."</td>";
    echo "<td>".$row['PostalCode']."</td>";
    echo "<td>".$row['Country']."</td>";
    echo "<td><a href=editar.php?CustomerID=".$row['CustomerID'].">Editar</a></td>";
    echo "<td><a href=eliminar.php?CustomerID=".$row['CustomerID'].">Eliminar</a></td>";
    echo "</tr> <thead>";
    $n++;
}
echo "</table>";

echo "<a href=https://73901147.000webhostapp.com/php/ejemplo01/Customers/Nuevo.php> volver a la pagina</a> "
?>