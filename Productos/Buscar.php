<?php
    require_once "ConexionPDO.php";
    $conn = new ConexionPDO();
    $conn->open_connection();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $tipoBusqueda = $_POST['tipo_busqueda'];
        $terminoBusqueda = $tipoBusqueda == 'categoria' ? $_POST['Categoria'] : $_POST['Proveedor'];

        
        if ($tipoBusqueda == 'categoria') {
            $sql = "SELECT p.ProductID, p.ProductName, s.SupplierName, c.CategoryName, p.Unit, p.Price 
                    FROM products p 
                    INNER JOIN categories c ON p.CategoryID = c.CategoryID 
                    INNER JOIN suppliers s ON p.SupplierID = s.SupplierID 
                    WHERE c.CategoryName = :terminoBusqueda";
        } elseif ($tipoBusqueda == 'proveedor') {
            $sql = "SELECT p.ProductID, p.ProductName, s.SupplierName, c.CategoryName, p.Unit, p.Price 
                    FROM products p 
                    INNER JOIN categories c ON p.CategoryID = c.CategoryID 
                    INNER JOIN suppliers s ON p.SupplierID = s.SupplierID 
                    WHERE s.SupplierName = :terminoBusqueda";
        }
        
        try {
            $stmt = $conn->ejecutar($sql, [':terminoBusqueda' => $terminoBusqueda]);
            $resultados = $stmt->fetchAll();
    
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
                echo "</tr>";
                $n++;
            }
            echo "</table>";
        } else {
            echo "No se encontraron resultados.";
        }
        
        
    }catch (PDOException $e) {
    echo "Error en la consulta: " . $e->getMessage();
}
    
    
}

echo "<a href='http://localhost/php/ejemplo01/Productos/FrmProductos.php'>Volver a la página</a>";
$conn->close_connection();

?>