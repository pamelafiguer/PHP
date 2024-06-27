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
    $sql = "SELECT SupplierID FROM suppliers WHERE SupplierName = :nombreProveedor";
    $stmt = $conn->ejecutar($sql, [':nombreProveedor' => $nombreProveedor]);
    $supplier = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($supplier) {
        return $supplier['SupplierID'];
    } else {
        $sql = "INSERT INTO suppliers (SupplierName) VALUES (:nombreProveedor)";
        $conn->ejecutar($sql, [':nombreProveedor' => $nombreProveedor]);
        return $conn->get_last_insert_id();
    }
}

function getOrInsertCategory($conn, $categoria) {
    $sql = "SELECT CategoryID FROM categories WHERE CategoryName = :categoria";
    $stmt = $conn->ejecutar($sql, [':categoria' => $categoria]);
    $category = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($category) {
        return $category['CategoryID'];
    } else {
        $sql = "INSERT INTO categories (CategoryName) VALUES (:categoria)";
        $conn->ejecutar($sql, [':categoria' => $categoria]);
        return $conn->get_last_insert_id();
    }
}

try {
    $conn->beginTransaction();

    $supplier_id = getOrInsertSupplier($conn, $nombreProveedor);
    $category_id = getOrInsertCategory($conn, $categoria);

    $sql = "INSERT INTO products (ProductName, SupplierID, CategoryID, Unit, Price) VALUES (:nombreProducto, :supplier_id, :category_id, :unidades, :precio)";
    $conn->ejecutar($sql, [
        ':nombreProducto' => $nombreProducto,
        ':supplier_id' => $supplier_id,
        ':category_id' => $category_id,
        ':unidades' => $unidades,
        ':precio' => $precio
    ]);

    $conn->commit();
    header("Location: PrincipalProductos.php");
    exit();
} catch (Exception $e) {
    $conn->rollBack();
    echo "Fallo: " . $e->getMessage();
}

$conn->close_connection();
?>