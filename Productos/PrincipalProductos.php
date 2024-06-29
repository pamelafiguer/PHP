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

echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <link rel="stylesheet" href="style5.css">
</head>
<body>';

if ($data) {
    echo '<div class="container">';
    echo "<table><thead><tr>
            <th>Nro</th>
            <th>Codigo del Producto</th>
            <th>Nombre del Producto</th>
            <th>Nombre Proveedor</th>
            <th>Categoria</th>
            <th>Unidad</th>
            <th>Precio</th>
            <th>Acciones</th></tr></thead><tbody>";
    $n = 1;
    foreach ($data as $row) {
        echo "<tr>";
        echo "<td>".$n."</td>";
        echo "<td>".(isset($row['ProductID']) ? htmlspecialchars($row['ProductID']) : 'N/A')."</td>";
        echo "<td>".(isset($row['ProductName']) ? htmlspecialchars($row['ProductName']) : 'N/A')."</td>";
        echo "<td>".(isset($row['SupplierName']) ? htmlspecialchars($row['SupplierName']) : 'N/A')."</td>";
        echo "<td>".(isset($row['CategoryName']) ? htmlspecialchars($row['CategoryName']) : 'N/A')."</td>";
        echo "<td>".(isset($row['Unit']) ? htmlspecialchars($row['Unit']) : 'N/A')."</td>";
        echo "<td>".(isset($row['Price']) ? htmlspecialchars($row['Price']) : 'N/A')."</td>";
        echo "<td><a href='eliminar.php?ProductID=".htmlspecialchars($row['ProductID'])."'>Eliminar</a></td>";
        echo "</tr>";
        $n++;
    }
    echo "</tbody></table></div>";
} else {
    echo "<div class='container'><p>No se encontraron resultados.</p></div>";
}

$conn->close_connection();

echo "<div class='container'><a href='https://73901147.000webhostapp.com/php/ejemplo01/Productos/FrmProductos.php'>Volver a la página</a></div>";
echo '</body></html>';
?>
