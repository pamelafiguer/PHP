<?php

// Obtener los datos del formulario
$nombreProducto = $_POST['NombreProducto'];
$nombreProveedor = $_POST['Proveedor'];
$categoria = $_POST['Categoria'];
$unidades = $_POST['Unidades'];
$precio = $_POST['PrecioUni'];

require_once "ConexionPDO.php";
$conn = new ConexionPDO();
$pdo = $conn->open_connection(); 

try {
    $pdo->beginTransaction();

    if ($nombreProveedor) {
        $supplier_id = $nombreProveedor['SupplierID'];
    } else {
        $stmt = $pdo->prepare("INSERT INTO suppliers (SupplierName) VALUES (nombre_proveedor)");
        $stmt->execute(['nombre_proveedor' => $nombreProveedor]);
        $supplier_id = $pdo->lastInsertId();
    }

    
    if ($categoria) {
        $category_id = $categoria['CategoryID'];
    } else {
        $stmt = $pdo->prepare("INSERT INTO categories (CategoryName) VALUES (categoria)");
        $stmt->execute(['categoria' => $categoria]);
        $category_id = $pdo->lastInsertId();
    }

     
    $stmt = $pdo->prepare("INSERT INTO products (ProductName, SupplierID, CategoryID, Unit, Price) VALUES ( '$nombreProducto', '$supplier_id', '$category_id', '$unidades', '$precio')");
    header("Location: PrincipalProductos.php");
    exit();
} catch (Exception $e) {
    
    $pdo->rollBack();
    echo "Fallo: " . $e->getMessage();
}

$conn->close_connection();

?>