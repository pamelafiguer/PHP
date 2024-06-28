<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form name="form" method="POST" action="GrabarCategoria.php">
            <h2> Nueva Categoria </h2><br>
            
            <div class="form-group">
                <div class="form-content">
                    <label for="name">CATEGORIA  :</label> 
                    <input type="text" name="CategoryName" placeholder="Categoria"></br>
                </div>
                <div class="form-content">
                    <label for="name">DESCRIPCION  :</label> 
                    <input type="text" name="Description" placeholder="Descripcion"></br>
                </div>

                
            </div>
            <input class="btn btn-primary" type="submit"  value="Grabar"><br>
            <a href='http://localhost/dashboard/php/index.html'>Volver a la página</a>

        </form>
        </div>
    
</body>
</html>