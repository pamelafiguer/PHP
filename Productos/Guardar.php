<?php
$nombreProducto = $_POST['NombreProducto'];
$nombreProveedor = $_POST['Proveedor'];
$categoria = $_POST['Categoria'];
$unidades = $_POST['Unidades'];
$precio = $_POST['PrecioUni'];

require_once "ConexionPDO.php";
$conn = new ConexionPDO();
$conn->open_connection();

function getOrInsertSupplier($conn, $nombreProveedor) {
    if (is_array($nombreProveedor) && isset($nombreProveedor['SupplierID'])) {
        return $nombreProveedor['SupplierID'];
    } else {
        $sql = "INSERT INTO suppliers (SupplierName) VALUES ('$nombreProveedor')";
        $conn->ejecutar($sql);
        return $conn->get_last_insert_id();
    }
}

function getOrInsertCategory($conn, $categoria) {
    if (is_array($categoria) && isset($categoria['CategoryID'])) {
        return $categoria['CategoryID'];
    } else {
        $sql = "INSERT INTO categories (CategoryName) VALUES ('$categoria')";
        $conn->ejecutar($sql);
        return $conn->get_last_insert_id();
    }
}

try {
    $conn->beginTransaction();

    $supplier_id = getOrInsertSupplier($conn, $nombreProveedor);
    $category_id = getOrInsertCategory($conn, $categoria);

    $sql = "INSERT INTO products (ProductName, SupplierID, CategoryID, Unit, Price) VALUES ('$nombreProducto', '$supplier_id', '$category_id', '$unidades', '$precio')";
    $conn->ejecutar($sql);

    
    header("Location:PrincipalProductos.php");

    exit();
} catch (Exception $e) {
    $conn->rollBack();
    echo "Fallo: " . $e->getMessage();
}

$conn->close_connection();
?>