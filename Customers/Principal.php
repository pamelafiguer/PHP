<?php
require_once "ConexionPDO.php";
$conn=new ConexionPDO();
$rs=$conn->ejecutar("select * from customers");
$data=$rs->fetchAll();
echo "<table border='1'><tr><td>Nro</td>
<td>Nombre</td>
<td>Nombre de Contacto</td>
<td>Direccion</td>
<td>Ciudad</td>
<td>Codigo Postal</td>
<td>Pais</td></tr>";
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
    echo "</tr>";
    $n++;
}
echo "</table>";

echo "<a href=http://localhost/php/Clientes/Customers/Nuevo.php> volver a la pagina</a> "
?>