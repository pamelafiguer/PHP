<?php
if (!isset($_GET['ProductID'])) {
    die('Error: ProductID no proporcionado.');
}

$id = $_GET['ProductID'];

require_once "ConexionPDO.php";
$conn = new ConexionPDO();
$conn->open_connection();

try {
    $sql = "DELETE FROM products WHERE ProductID = :ProductID";
    $params = [':ProductID' => $id];

    $stmt = $conn->ejecutar($sql, $params);

    header("Location: PrincipalProductos.php");
} catch (PDOException $e) {
    echo "Error al eliminar el producto: " . $e->getMessage();
} finally {
    $conn->close_connection();
}
?>
