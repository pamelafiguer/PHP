<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<div class="form-container">
    <h2>Contactanos</h2>

    <p>Formulario de contacto</p>

    <form  method="post" autocomplete="off">

    <div class="form-group">
        <div class="form-content">
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" placeholder="Nombre">
        </div>

        <div class="form-content">
            <label for="email">Correo</label>
            <input type="text" id="email" name = "email" placeholder="Correo">

        </div>

    <div class="form-group">
        <div class="form-content">
            <label for="name">Direccion</label>
            <input type="text" id="direccion" name="direction" placeholder="Direccion">
        </div>

        <div class="form-content">
            <label for="phone">Telefono</label>
            <input type="tel" id="phone" name = "phone" placeholder="Telefono">

        </div>
    </div>

    <label for="message">Mensaje</label>
    <textarea name="message" id="message" cols="30" rows="10" placeholder="Mensaje"></textarea>

    <input class="btn" type="submit" name="contact" value="Enviar Mensaje">

    
    </form>

</div>

    <?php
    include("contacto.php")
    ?>
    
</body>
</html>