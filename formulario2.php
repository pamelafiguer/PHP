<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="estilo01.css">
    <title>Mi pagina</title>
    
</head>
<body>
<form action="ejemplo06.php" method="post">
<h1>Formulario</h1>

Escribe Nombres:

<input type="text" name="txtNombre"  id="Nombre" ><br>
Seleccionar Tipo:

<select name="Tipo" id="">
    
    <?php

    for($i = 1; $i<= 5; $i++){
        echo "<option value=$i>$i</option>";
    }
    
    
    ?>


</select>

seleccionar dia:

<select name="dia" id="">
    <?php

    for($i = 1; $i<= 100; $i++){
        echo "<option value=$i>$i</option>";
    }
    
    
    ?>

</select>

seleccionar edad:

<select name="edad" id="">
    <?php

    for($i = 1; $i<= 100; $i++){
        echo "<option value=$i>$i</option>";
    }
    
    
    ?>

</select>

<input type="submit" value="calcular"> 




</form>
    
</body>
</html>