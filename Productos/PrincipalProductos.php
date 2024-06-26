<?php
require_once "ConexionPDO.php";
$conn = new ConexionPDO();
$conn->open_connection();

$sql = "SELECT p.ProductID, p.ProductName, s.SupplierName, c.CategoryName, p.Unit, p.Price 
        FROM products p 
        INNER JOIN categories c ON p.CategoryID = c.CategoryID 
        INNER JOIN suppliers s ON p.SupplierID = s.SupplierID 
        ORDER BY p.ProductID";

$rs = $conn->ejecutar($sql);
$data = $rs->fetchAll(PDO::FETCH_ASSOC);

if ($data) {
    echo "<table border='1'><tr>
            <td>Nro</td>
            <td>Codigo del Producto</td>
            <td>Nombre del Producto</td>
            <td>Nombre Proveedor</td>
            <td>Categoria</td>
            <td>Unidad</td>
            <td>Precio</td></tr>";
    $n = 1;
    foreach ($data as $row) {
        echo "<tr><td>".$n."</td>";
        echo "<td>".$row['ProductID']."</td>";
        echo "<td>".$row['ProductName']."</td>";
        echo "<td>".$row['SupplierName']."</td>";
        echo "<td>".$row['CategoryName']."</td>";
        echo "<td>".$row['Unit']."</td>";
        echo "<td>".$row['Price']."</td>";
        echo "</tr>";
        $n++;
    }
    echo "</table>";
} else {
    echo "No se encontraron resultados.";
}

$conn->close_connection();


echo "<a href='http://localhost/php/ejemplo01/Productos/FrmProductos.php'>Volver a la página</a>";
?>