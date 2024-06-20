<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">
    
    <h2>Clientes</h2>


    <form action="MostrarCliente.php" method="POST">

    <input type="hidden" name="CustomerId">

    <div class="form-group">
        <div class="form-content">
            <label for="name">Nombre Contacto :</label>
            <input type="text" id="name" name="txtNombres" placeholder="Nombres">
        </div>

        <div class="form-content">
            <label for="Cargo">Cargo de Contacto</label>
            <input type="text" id="Cargo" name="CargoContacto" placeholder="cargo">
        </div>

        <div class="form-content">
            <label for="Adress">Direccion</label>
            <input type="text" id="Direccion" name="Direccion" placeholder="Direccion">
        </div>

        <div class="form-content">
            <label for="City">Ciudad</label>
            <input type="text" id="Ciudad" name="Ciudad" placeholder="Ciudad">
        </div>

        <div class="form-content">
            <label for="Codigo">Codigo Postal</label>
            <input type="text" id="Codigo" name="Codigo" placeholder="Codigo Postal">
        </div>

        <div class="form-content">
            <label for="From">Pais</label>
            <input type="text" id="Pais" name="Pais" placeholder="Pais">
        </div>


    <input class="btn" type="submit" name="Guardar" value="Guardar">
    <input class="btn" type="submit" name="Consultar" value="Consultar">
    <input class="btn" type="submit" name="Actualizar" value="Actualizar">
    <input class="btn" type="submit" name="Eliminar" value="Eliminar">



</body>
</html>