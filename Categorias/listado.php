<?php
include 'Conexion.php';


$buscar = isset($_POST['Buscar']) ? $_POST['Buscar'] : '';
$conexion = new Conexion();
$resultado = $conexion->obtenerCategorias($buscar);

echo "<h3>Table Categories</h3>";
?>
<link rel="stylesheet" href="style2.css">
<form name="form1" action="" method="post">
            
            <br>
            <div class="form-group">
                <div class="form-content">
                    <label for="name">BUSCAR :</label> <br>
                    <input type="text" name="Buscar" value="<?= htmlspecialchars($buscar); ?>"><br>
                </div><br>
                <br><input class="btn1" type="submit" value="Buscar">
               
       
      

    
            </div>
    </form>
<?php

echo "<table border='1'>
            <thead>
            
                <th>CategoryID</th>
                <th>CategoryName</th>
                <th>Description</th>
                
            
             </thead>";
while ($registro = $conexion->recorrer($resultado)) {
    echo "<tr>";
    echo "<td>" . $registro['CategoryID'];
    echo "<td>" . $registro['CategoryName'];
    echo "<td>" . $registro['Description'];
    $tr="<td><a href=EditarCategorias.php?CategoryID=".$registro['CategoryID'].">Editar</a>";
    $tr.="<td><a href=EliminarCategoria.php?CategoryID=".$registro['CategoryID'].">Eliminar</a>";

    echo $tr;
}
echo "</table>";
?>