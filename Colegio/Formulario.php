<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colegio</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<form action="Ejemplo01.php" method="post">
    <link rel="a" href="Ejemplo01.php">
<h1>Promedio de Notas del Estudiante</h1>

Nombres:

<input type="text" name="txtNombre"  id="Nombre" >

Apellidos:

<input type="text" name="txtApellidos"  id="Apellidos" ><br>


<br>
Cursos:

<select name="cursos" id="Cursos"> <br>
    
    <option value="Matematica">Matematica</option>
    <option value="Lenguaje">Lenguaje</option>
    <option value="Historia">Historia</option>
    <option value="Ciencias">Ciencias</option>
    <option value="Aritmetica">Aritmetica</option>
    <option value="Algebra">Algebra</option>
    <option value="Economia">Economia</option>
    <option value="Sociales">Sociales</option>
    <option value="Biologia">Bioloigia</option>
    <option value="Robotica">Robotica</option>

    

</select><br>


Nota1 :

<input type="text" name="Nota1"  id="Nota1" >

Nota2 :

<input type="text" name="Nota2"  id="Nota2" ><br>

Nota3 :

<input type="text" name="Nota3"  id="Nota3" >

Nota4:

<input type="text" name="Nota4"  id="Nota4" ><br>




<input class="btn" type="submit" name="calcular" value="Enviar Mensaje">   
<input class="btnn" type="submit" name="consultar" value="consulta">   


</form>
<?php
    include("Ejemplo01.php")
?>


    
</body>
</html>