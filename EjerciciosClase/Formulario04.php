<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="estilo.css">
    <h1>Sueldo de un Trabajador</h1>
</head>
<body>
    <form action="ejemplo10.php" method="post">
        <label for="name">Nombres :</label>
        <input type="text" id="Nombre" name="Nombre" placeholder="Nombre"><br>

        <label for="lastname">Apellidos :</label>
        <input type="text" id="Apellido" name="apellido" placeholder="Apellidos"><br>

        <label for="Grado">Grado de Instruccion</label>
        <select name="Grado" id="grado"><br>
            <option >TECNICO PROFESIONAL</option>
            <option >LICENCIADO</option>
            <option >MAGISTER</option>
            <option >DOCTOR</option>
            <option >POSDOCTOR</option>
        </select><br>

        <label for="Categoria">Categoria</label>
        <select name="Categoria" id="categorias"><br>
            <option value="a">A</option>
            <option value="b">B</option>
            <option value="c">C</option>
        </select><br>

        <input type="submit" value="Calcular">

    </form>


</body>
</html>