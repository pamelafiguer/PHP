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

    

    <form action="Contacto.php" method="post" autocomplete="off">

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

            <option value="">Ancon</option>
            <option value="">Ate</option>
            <option value="">Barranco</option>
            <option value="">Breña</option>
            <option value="">Carabayllo</option>
            <option value="">Cercado de Lima</option>
            <option value="">Chaclacayo</option>
            <option value="">Chorrillos</option>
            <option value="">Cieneguilla</option>
            <option value="">Comas</option>
            <option value="">El Agustino</optio>
            <option value="">Independencia</option>
            <option value="">Jesus Maria</option>
            <option value="">La Molina</option>
            <option value="">La Victoria</option>
            <option value="">Lince</option>
            <option value="">Los Olivos</option>
            <option value="">Lurigancho</option>
            <option value="">Lurin</option>
            <option value="">Magdalena del mar</option>
            <option value="">Miraflores</option>
            <option value="">Pachacamac</option>
            <option value="">Pucusana</option>
            <option value="">Pueblo Libre</option>
            <option value="">Puente Piedra</option>
            </select><br>
        </div> 

        <div class="form-content">
        <label for="Turno">Turno</label>
            <select name="Turno" id="Turno"><br>

            <option value="">Mañana</option>
            <option value="">Tarde</option>
            <option value="">Noche</option>
            
            </select><br>
        </div> 
        
        <div class="form-content">
        <label>Edad</label>
            <select  name="edad" ><br>

            <?php
                for($i = 1; $i<= 100; $i ++){
                    echo "<option value=$i>$i</option>";
                    }
            ?>
            
            </select><br>
        </div> 

        <div class="form-content">
        <label for="Redes">Redes Sociales</label>
            <select name="Redes" id="Redes"><br>

            <option value="">Facebook</option>
            <option value="">Instagram</option>
            <option value="">Twitter</option>
            <option value="">Linkendin</option>
            
            </select><br>
        </div> 

        <div class="form-content">
            <label for="email">Correo</label>
            <input type="text" id="email" name = "email" placeholder="Correo">

        </div>

        <div class="form-content">
            <label for="sueldo">Sueldo</label>
            <input type="decimal" id="Sueldo" name = "sueldo" placeholder="Sueldo">
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