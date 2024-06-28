<?php

require_once "ConexionPDO.php";
                  $conn=new ConexionPDO();
                  $conn->open_connection();
                  $sql1 = "CALL GetDistinctSuppliers()";
                  $sql2 = "CALL GetDistinctCategories()";

                  $rs = $conn->ejecutar($sql1);
                  $suppliers = $rs->fetchAll(PDO::FETCH_ASSOC);
                  $conn->closeCursor($rs);

                  $st = $conn->ejecutar($sql2);
                  $categories = $st->fetchAll(PDO::FETCH_ASSOC);
                  $conn->closeCursor($st);
                   // $data=$rs->fetchAll();
                   //var_dump($data);
                  
            

?>


<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Productos</title>
      <link rel="stylesheet" href="style4.css">
</head>
<body>
<div class="container">
        <form name="form" method="POST" action="Buscar.php">
            <h2>PRODUCTOS</h2>
            <div class="form-group">
                <label for="NombreProducto">NOMBRE DEL PRODUCTO:</label>
                <input type="text" name="NombreProducto" id="NombreProducto" placeholder="Nombre del Producto">
            </div>
            <div class="form-group">
                <label for="Proveedor">NOMBRE DEL PROVEEDOR:</label>
                <select name="Proveedor" id="Proveedor">
                    <?php
                        foreach ($suppliers as $supplier) {
                            $nombreProveedor = htmlspecialchars(trim($supplier['SupplierName']));
                            echo "<option value='$nombreProveedor'>$nombreProveedor</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="Categoria">NOMBRE DE CATEGORÍA:</label>
                <select name="Categoria" id="Categoria">
                    <?php
                        foreach ($categories as $category) {
                            $categoria = htmlspecialchars(trim($category['CategoryName']));
                            echo "<option value='$categoria'>$categoria</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="Unidades">UNIDADES:</label>
                <input type="number" name="Unidades" id="Unidades" placeholder="Unidades">
            </div>
            <div class="form-group">
                <label for="PrecioUni">PRECIO UNIDAD:</label>
                <input type="number" name="PrecioUni" id="PrecioUni" placeholder="Precio">
            </div>
            <div class="form-group radio-group">
                <label>
                    <input type="radio" value="categoria" name="tipo_busqueda" id="categoria" checked> Buscar por Categoría
                </label>
                <label>
                    <input type="radio" value="proveedor" name="tipo_busqueda" id="proveedor"> Buscar por Proveedor
                </label>
            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" formaction="Guardar.php" value="Guardar">
                <input class="btn btn-secondary" type="submit" formaction="Buscar.php" value="Consultar">
            </div>
            <a href='http://localhost/dashboard/php/index.html'>Volver a la página</a>
      </form>
    </div>
</body>
</html>