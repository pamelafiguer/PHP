<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>


<div class="container">
        <form name="form1" method="post" action="Grabar.php">
        <h2> PRODUCTOS </h2><br>
        <br>
        <div class="form-group">
            <div class="form-content">
                <label for="name">NOMBRE   : </label>
                <input type="text" name="Nombre" placeholder="Escribe Nombre"><br>
            </div>
            <div class="form-content">
                <label for="name">CONTACTO NOMBRE: </label>
                <input type="text" name="Contacto" placeholder="Escribe nombre de contacto"><br>
            </div>
            <div class="form-content">
                <label for="name"> DIRECCION   : </label>
                <input type="text" name="Direccion" placeholder="Escribe direccion"></br>
            </div>
        <div class="form-content">
            <label for="name">CIUDAD     : </label>
            <input type="text" name="Ciudad" placeholder="Escribe ciudad"></br>
        </div>
        <div class="form-content">
            <label for="name">CODIGO POSTAL    : </label>
            <input type="text" name="CodigoPostal" placeholder="Escribe codigo postal"></br>
        </div>
        <div class="form-content">
            <label for="name">PAIS    : </label>
            <input type="text" name="Pais" placeholder="Escribe Pais"></br>
        </div>
        </div>
            
        <div class="form-group">
        <input class="btn btn-primary" type="submit"  value="Guardar">
        </div>
        <a href="http://localhost/dashboard/php/index.html">Volver a pagina </a>
        </form>
    </div>

    
</body>
</html>