<?php

require_once "ConexionPDO.php";
                    $conn=new ConexionPDO();
                    $rs=$conn->ejecutar("select distinct(SupplierName) from suppliers order by 1 ;");
                    $st=$conn->ejecutar("select distinct(CategoryName) from categories order by 1 ;");
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
      <form name="form" method="post" action="PrincipalProductos.php">
        <div class="form-group">
               <div class="form-content">
                  <label for="name">NOMBRE DEL PRODUCTO :  </label> <br>
                  <input type="text" name="NombreProducto" placeholder="Nombre del Producto"></br>
                </div>
            <div class="form-content">
                  <label for="name">NOMBRE DEL PROVEEDOR :  </label>
                  
                  <br><select name="Proveedor" id="Proveedor">
                  <?php
                    
                    
                          // $consultaEstado = $conn->ejecutar($rs);
                                   while ($Proveedor =$rs->fetch()) {
                                    echo "<option value=$Proveedor[0]>$Proveedor[0]</option>";
                                    //echo $pais[0];
                                    
                                   }
                  ?>
                  </select><br>
            </div>
            <div class="form-content">
            <label for="name">NOMBRE DE CATEGORIA :  </label>
                  
                  <br><select name="Categoria" id="Categoria">
                  <?php
                    
                    
                          // $consultaEstado = $conn->ejecutar($rs);
                                   while ($Categoria =$st->fetch()) {
                                    echo "<option value=$Categoria[0]>$Categoria[0]</option>";
                                    //echo $pais[0];
                                    
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
                <input type="radio" value="huey" name="drone" id="huey" checked/>
                <label for="categoria">Categoria</label>
            </div>

            <div>
                <input type="radio" value="dewey" name="drone" id="dewey" checked/>
                <label for="proveedor">Proveedor</label>
            </div>
       </div>

    <input class="btn1" type="submit" formaction="Guardar.php" value="Guardar" ><br>
    <input class="btn2" type="submit" formaction="Modificar.php" value="Modificar"><br>
    <input class="btn3" type="submit" formaction="Eliminar.php" value="Eliminar"><br>
    <input class="btn3" type="submit" value="Consultar">

    
    </form>



    
</body>
</html>