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
      <form name="form" method="POST" action="Buscar.php">
            <h2> PRODUCTOS </h2><br>
            <br>
            <div class="form-group">
                  <div class="form-content">
                  <label for="name">NOMBRE DEL PRODUCTO :  </label> <br>
                  <input type="text" name="NombreProducto" placeholder="Nombre del Producto"></br>
                  </div>
            <div class="form-content">
                  <label for="name">NOMBRE DEL PROVEEDOR :  </label>
                  
                  <br><select name="Proveedor" id="Proveedor">
                  <?php
                        foreach ($suppliers as $supplier) {
                              $nombreProveedor = htmlspecialchars(trim($supplier['SupplierName'])); 
                              echo "<option value='$nombreProveedor'>$nombreProveedor</option>";
                        }
                  ?>
                  </select><br>
            </div>
            <div class="form-content">
            <label for="name">NOMBRE DE CATEGORIA :  </label>
                  
                  <br><select name="Categoria" id="Categoria">
                  <?php
                        foreach ($categories as $category) {
                              $categoria = htmlspecialchars(trim($category['CategoryName'])); 
                              echo "<option value='$categoria'>$categoria</option>";
                        }
                  ?>
                  </select><br>
            </div>
            <div class="form-content">
                  <label for="name">UNIDADES :  </label><br>
                  <input type="number" name="Unidades" placeholder="Unidades">
            </div>
            <div class="form-content">
                  <label for="name">PRECIO UNIDAD :  </label>
                  <input type="number" name="PrecioUni" placeholder="Precio">
            </div><br>

            <div>
            <input type="radio" value="categoria" name="tipo_busqueda" id="categoria" checked/>
            <label for="categoria">Buscar por Categoría</label>
            </div>
            <div>
            <input type="radio" value="proveedor" name="tipo_busqueda" id="proveedor" checked/>
            <label for="proveedor">Buscar por Proveedor</label>
            </div>
            </div>


      <input class="btn1" type="submit" formaction="Guardar.php" value="Guardar" ><br>
      <input class="btn2" type="submit" formaction="Buscar.php" value="Consultar">


      </form>



</body>
</html>