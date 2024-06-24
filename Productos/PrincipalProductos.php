<?php
require_once "ConexionPDO.php";
$conn=new ConexionPDO();
$conn->open_connection();


    $rs=$conn->ejecutar("SELECT p.ProductID, p.ProductName, s.SupplierName, c.CategoryName, p.Unit, p.Price FROM  
    products p  INNER JOIN  categories c ON p.CategoryID = c.CategoryID INNER JOIN suppliers  s ON 
    p.SupplierID = s.SupplierID where p.ProductID order by 1; ");
    $data=$rs->fetchAll();

    if ($data) {
        echo "<table border='1'><tr><td>Nro</td>
        <td>Codigo del Producto </td>
        <td>Nombre del Producto</td>
        <td>Nombre Proveedor</td>
        <td>Categoria</td>
        <td>Unidad </td>
        <td>Precio </td></tr>";
        $n = 1;
        foreach ($data as $row) {
            echo "<tr><td>".$n."</td>";
            echo "<td>".$row['ProductID']."</td>";
            echo "<td>".$row['ProductName']."</td>";
            echo "<td>".$row['SupplierName']."</td>";
            echo "<td>".$row['CategoryName']."</td>";
            echo "<td>".$row['Unit']."</td>";
            echo "<td>".$row['Price']."</td>";
            //echo "<td><a href=editar.php?CustomerID=".$row['Codigo'].">Editar</a></td>";
           // echo "<td><a href=eliminar.php?CustomerID=".$row['codigo'].">Eliminar</a></td>";
            echo "</tr>";
            $n++;
        }
        echo "</table>";
    
    }



echo "<a href='http://localhost/php/ejemplo01/Productos/FrmProductos.php'>Volver a la página</a>";
?>