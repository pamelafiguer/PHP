<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi pagina</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>  
<div class="form-container">
    
    <h2>Formulario de Empleados</h2>


    <form action="Contacto.php" method="POST">

    <div class="form-group">
        <div class="form-content">
            <label for="name">Nombres</label>
            <input type="text" id="name" name="txtNombres" placeholder="Nombres">
        </div>

        <div class="form-content">
            <label for="lastname">Apellidos</label>
            <input type="text" id="lastname" name="txtApellidos" placeholder="Apellidos">
        </div>

        
        <div class="form-content">
        <label for="Distrito">Distrito</label>
            <select name="Distrito" id="distrito"><br>

            <option value="Ancon">Ancon</option>
            <option value="Ate">Ate</option>
            <option value="Barranco">Barranco</option>
            <option value="Breña">Breña</option>
            <option value="Carabayllo">Carabayllo</option>
            <option value="Cercado de Lima">Cercado de Lima</option>
            <option value="Chaclacayo">Chaclacayo</option>
            <option value="Chorrillos">Chorrillos</option>
            <option value="Cieneguilla">Cieneguilla</option>
            <option value="Comas">Comas</option>
            <option value="El Agustino">El Agustino</optio>
            <option value="Independencia">Independencia</option>
            <option value="Jesus Maria">Jesus Maria</option>
            <option value="La Molina">La Molina</option>
            <option value="La Victoria">La Victoria</option>
            <option value="Lince">Lince</option>
            <option value="Los Olivos">Los Olivos</option>
            <option value="Lurigancho">Lurigancho</option>
            <option value="Lurin">Lurin</option>
            <option value="Magdalena">Magdalena del mar</option>
            <option value="Miraflores">Miraflores</option>
            <option value="Pachacamac">Pachacamac</option>
            <option value="Pucusana">Pucusana</option>
            <option value="Pueblo Libre">Pueblo Libre</option>
            <option value="Puente Piedra">Puente Piedra</option>
            <option value="San Juan de Lurigancho">San Juan de Lurigancho</option>
            <option value="San Luis">San Luis</option>
            </select><br>
        </div> 

        <div class="form-content">
        <label for="Turno">Turno</label>
            <select name="Turno" id="Turno"><br>

            <option value="Mañana">Mañana</option>
            <option value="Tarde">Tarde</option>
            <option value="Noche">Noche</option>
            
            </select><br>
        </div> 
        
        
        <div class="form-content">
            <label for="Edad">Edad</label>
            <select name="Edad" id="">
            <?php

            for($i = 1; $i<= 100; $i++){
            echo "<option value=$i>$i</option>";
                }

            ?>
            </select>
        </div>
        

        <div class="form-content">
        <label for="Redes">Redes Sociales</label>
            <select name="Redes" id="Redes"><br>

            <option value="Facebook">Facebook</option>
            <option value="Instagram">Instagram</option>
            <option value="Twitter">Twitter</option>
            <option value="Linkendin">Linkendin</option>
            
            </select><br>
        </div> 

        <div class="form-content">
            <label for="email">Correo</label>
            <input type="text" id="email" name = "email" placeholder="Correo">

        </div>

        <div class="form-content">
            <label for="sueldo">Sueldo</label>
            <input type="number" id="Sueldo" name = "Sueldo" placeholder="Sueldo">
        </div>

    </div>

    

    <input class="btn" type="submit" name="calcular" value="Enviar">



    
    </form>

    <?php
    include("Contacto.php")
    ?>

</div>
    
</body>
</html>