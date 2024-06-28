<?php
if (isset($_GET['CategoryID'])) {
    $CategoryID = intval($_GET['CategoryID']);
    include 'Conexion.php';
    $conexion = new Conexion();
    $resultado = $conexion->ejecutar("SELECT * FROM categories WHERE CategoryID=" . $CategoryID);

    if ($resultado) {
        $registro = $conexion->recorrer($resultado);
    } else {
        die("No se encontró la categoría con el ID proporcionado.");
    }
} else {
    die("CategoryID no proporcionado en la URL.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form name="form1" action="actualizarCategoria.php" method="post">
        <h2>Actualizar Categoría</h2><br>
        <br>
        <div class="form-group">
        <input type="hidden" name="CategoryID" value="<?= htmlspecialchars($CategoryID); ?>">
                <div class="form-content">
                    <label for="name">CATEGORÍA:</label>
                    <input type="text" name="CategoryName" value="<?= htmlspecialchars($registro['CategoryName']); ?>"><br>
                </div>
                <div class="form-content">
                    <label for="name">DESCRIPCIÓN:</label>
                    <input type="text" name="Description" value="<?= htmlspecialchars($registro['Description']); ?>"><br>
                </div>
            </div>
            <input class="btn btn-primary" type="submit"  value="Grabar">
            <a href='http://localhost/dashboard/php/Categorias/listado.php'>Volver a la página</a>


        </form>
    </div>
</body>
</html>


