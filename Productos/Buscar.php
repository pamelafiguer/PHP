<?php
require_once "ConexionPDO.php";

$conn = new ConexionPDO();
$conn->open_connection();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tipoBusqueda = $_POST['tipo_busqueda'];
    $terminoBusqueda = $tipoBusqueda == 'categoria' ? $_POST['Categoria'] : $_POST['Proveedor'];

    try {
        if ($tipoBusqueda == 'categoria') {
            // Aquí debes crear un procedimiento similar para la búsqueda por categoría
            $sql = "CALL GetProductsByCategory(:terminoBusqueda)";
        } else {
            $sql = "CALL GetProductsBySupplier(:terminoBusqueda)";
        }

        $stmt = $conn->ejecutar($sql, [':terminoBusqueda' => $terminoBusqueda]);
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

        echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <link rel="stylesheet" href="style5.css">
</head>
<body>';

        if ($resultados) {
            echo "<table border='1'><tr>
                    <td>Nro</td>
                    <td>Codigo del Producto</td>
                    <td>Nombre del Producto</td>
                    <td>Nombre Proveedor</td>
                    <td>Categoria</td>
                    <td>Unidad</td>
                    <td>Precio</td></tr>";
            $n = 1;
            foreach ($resultados as $row) {
                echo "<tr><td>" . $n . "</td>";
                echo "<td>" . $row['ProductID'] . "</td>";
                echo "<td>" . $row['ProductName'] . "</td>";
                echo "<td>" . $row['SupplierName'] . "</td>";
                echo "<td>" . $row['CategoryName'] . "</td>";
                echo "<td>" . $row['Unit'] . "</td>";
                echo "<td>" . $row['Price'] . "</td>";
                echo "<td> <a href=eliminar.php?ProductID=".$row['ProductID'].">Eliminar</a>";
                echo "</tr>";
                $n++;
            }
            echo "</table>";
        } else {
            echo "No se encontraron resultados.";
        }
    } catch (PDOException $e) {
        echo "Error en la consulta: " . $e->getMessage();
    }
}

echo "<a href='FrmProductos.php'>Volver a la página</a>";
$conn->close_connection();
?>
