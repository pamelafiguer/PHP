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
            <option >Barranco</option>
            <option >Breña</option>
            <option >Carabayllo</option>
            <option >Cercado de Lima</option>
            <option >Chaclacayo</option>
            <option >Chorrillos</option>
            <option >Cieneguilla</option>
            <option >Comas</option>
            <option >El Agustino</optio>
            <option >Independencia</option>
            <option >Jesus Maria</option>
            <option >La Molina</option>
            <option >La Victoria</option>
            <option >Lince</option>
            <option>Los Olivos</option>
            <option >Lurigancho</option>
            <option>Lurin</option>
            <option>Magdalena del mar</option>
            <option>Miraflores</option>
            <option>Pachacamac</option>
            <option>Pucusana</option>
            <option>Pueblo Libre</option>
            <option>Puente Piedra</option>
            <option>San Juan de Lurigancho</option>
            </select><br>
        </div> 

        <div class="form-content">
        <label for="Turno">Turno</label>
            <select name="Turno" id="Turno"><br>

            <option >Mañana</option>
            <option >Tarde</option>
            <option >Noche</option>
            
            </select><br>
        </div> 
        
        <div class="form-content">
        <label>Edad</label>
            <select  name="Edad" ><br>

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

            <option >Facebook</option>
            <option >Instagram</option>
            <option >Twitter</option>
            <option >Linkendin</option>
            
            </select><br>
        </div> 

        <div class="form-content">
            <label for="email">Correo</label>
            <input type="text" id="email" name = "email" placeholder="Correo">

        </div>

        <div class="form-content">
            <label for="sueldo">Sueldo</label>
            <input type="number" id="Sueldo" name = "sueldo" placeholder="Sueldo">
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