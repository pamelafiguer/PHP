<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FICHA</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
        <form name="form" method="POST" action="Buscar.php">
        <div class="form-container">
            <div class="form-group">
                <div class="form-content">
                    <label for="name">PAGINA WEB DEL AUTOR :  </label> 
                    <input type="text" name="PaginaWeb" placeholder="Nombre del Producto">
                </div>
                
                <div class="form-content">
                    <label for="name">IDIOMA :  </label>
                    <input type="text" name="Idioma" placeholder="Unidades">
                </div>
                <div class="form-content">
                    <label for="name">GLOBAL :  </label>
                    <input type="text" name="Global" placeholder="Precio">
                </div>
                <div class="form-content">
                    <label for="name">ENCABEZADO :  </label>
                    <input type="text" name="Encabezado" placeholder="Precio">
                </div>
                <div class="form-content">
                    <label for="name">TITULO :  </label>
                    <input type="text" name="Encabezado" placeholder="Precio">
                </div>
                <div class="form-content">
                    <label for="name">CONTENIDO :  </label>
                    <input type="text" name="Encabezado" placeholder="Precio">
                </div>
                <div class="form-content">
                    <label for="name">FECHA DE REGISTRO :  </label>
                    <input type="text" name="Encabezado" placeholder="Precio">
                </div>
                <div class="form-content">
                    <label for="name">FECHA DE CODIFICACION :  </label>
                    <input type="text" name="Encabezado" placeholder="Precio">
                </div>

                
                
            </div>
                <br><input class="btn1" type="submit" formaction="Guardar.php" value="Guardar" ><br>
                <br><input class="btn2" type="submit" formaction="Buscar.php" value="Consultar"><br>
        </div>
        </form>

</body>
</html>