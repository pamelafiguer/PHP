<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="estilo.css">
    <title>Mi pagina</title>
    
</head>
<body>
<form action="ejemplo06.php" method="post">
    <link rel="a" href="ejemplo06.php">
<h1>Trabajador .......</h1>

Escribe Nombres:

<input type="text" name="txtNombre"  id="Nombre" ><br>

Escribe Apellidos:

<input type="text" name="txtApellidos"  id="Apellidos" ><br>

Seleccionar Tipo:

<select name="Tipo" id="Tipo">
    
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


<input class="btn" type="submit" name="calcular" value="Enviar Mensaje">


</form>

<?php
    include("ejemplo06.php")
?>
    
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="estilo.css">
    <title>Mi pagina</title>
    
</head>
<body>
<form action="ejemplo06.php" method="post">
    <link rel="a" href="ejemplo06.php">
<h1>Trabajador .......</h1>

Escribe Nombres:

<input type="text" name="txtNombre"  id="Nombre" ><br>

Escribe Apellidos:

<input type="text" name="txtApellidos"  id="Apellidos" ><br>

Seleccionar Tipo:

<select name="Tipo" id="Tipo">
    
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


<input class="btn" type="submit" name="calcular" value="Enviar Mensaje">


</form>

<?php
    include("ejemplo06.php")
?>
    
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="estilo.css">
    <title>Mi pagina</title>
    
</head>
<body>
<form action="ejemplo06.php" method="post">
    <link rel="a" href="ejemplo06.php">
<h1>Trabajador .......</h1>

Escribe Nombres:

<input type="text" name="txtNombre"  id="Nombre" ><br>

Escribe Apellidos:

<input type="text" name="txtApellidos"  id="Apellidos" ><br>

Seleccionar Tipo:

<select name="Tipo" id="Tipo">
    
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


<input class="btn" type="submit" name="calcular" value="Enviar Mensaje">


</form>

<?php
    include("ejemplo06.php")
?>
    
</body>
</html>