<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUTOR</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
        <form name="form" method="POST" action="Buscar.php">
        <div class="form-container">
        <h2>AUTORES </h2><br>
            <div class="form-group">
                <div class="form-content">
                    <label for="name">PAGINA WEB :  </label> 
                    <input type="text" name="NombreProducto" placeholder="Nombre del Producto">
                </div><br>
                
                <div class="form-content">
                    <label for="name">FECHA REGISTRO :  </label>
                    <input type="date" name="Tipo" placeholder="Unidades">
                </div><br>
                <div class="form-content">
                    <label for="name"> FECHA PUBLICACION :  </label>
                    <input type="date" name="Fecha" placeholder="Precio">
                </div><br>

                
                <br><input class="btn1" type="submit" formaction="Guardar.php" value="Guardar" ><br>
                <input class="btn2" type="submit" formaction="Buscar.php" value="Consultar">
            </div>
        </div>
        </form>

</body>
</html>