<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="conteiner">
        <form name="form" method="POST" action="GrabarCategoria.php">
            <h2> Nueva Categoria </h2><br>
            <br>
            <div class="form-group">
                <div class="form-content">
                    <label for="name">CATEGORIA  :</label> <br>
                    <input type="text" name="CategoryName" placeholder="Categoria"></br>
                </div>
                <div class="form-content">
                    <label for="name">DESCRIPCION  :</label> <br>
                    <input type="text" name="Description" placeholder="Descripcion"></br>
                </div>

                
            </div>
            <input class="btn1" type="submit" value="Grabar"><br>
        </form>
        </div>
    
</body>
</html>