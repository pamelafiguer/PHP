<?php
include("conexion.php");


if(isset($_POST['calcular'])){

    if (
        strlen($_POST['txtNombres']) >= 1 && 
        strlen($_POST['txtApellidos']) >= 1 && 
        strlen($_POST['Distrito']) >= 1 && 
        strlen($_POST['Turno']) >= 1 && 
        strlen($_POST['Edad']) >= 1 && 
        strlen($_POST['Redes']) >= 1 && 
        strlen($_POST['email']) >= 1 && 
        strlen($_POST['Sueldo']) >= 1   
    ) {

    $Nombre=$_POST['txtNombres'];
    $Apellido=$_POST['txtApellidos'];
    $Distrito=$_POST['Distrito'];
    $Turno=$_POST['Turno'];
    $Edad=$_POST['Edad'];
    $Redes=$_POST['Redes'];
    $Correo=$_POST['email'];
    $Sueldo = $_POST['Sueldo'];

    $Escolaridad= $Sueldo  + 0.15;;
    $Gratificacion= $Sueldo + 0.20;
    $Bono= $Sueldo + 0.04;
    $TotalIngreso= $Escolaridad + $Gratificacion + $Bono;
    $AFP= $TotalIngreso - 0.08;
    $Renta= $TotalIngreso- 0.05;
    $TotalEgreso= $AFP + $Renta;
    $Neto= $TotalIngreso - $TotalEgreso;;

    

$consulta= "INSERT INTO Empleado (Nombres, Apellidos, Distrito, Turno, Edad, Redes_Sociales, Correo, Sueldo, Escolaridad, Gratificacion, Bono, AFP, Renta, TotalEgreso, TotalIngreso, Neto) 
VALUES ('$Nombre', '$Apellido','$Distrito', '$Turno', '$Edad', '$Redes', '$Correo', '$Sueldo', '$Escolaridad', '$Gratificacion', '$Bono', '$AFP', '$Renta', '$TotalEgreso', '$TotalIngreso', '$Neto');";


$resultado=mysqli_query($conexion,$consulta);
    

if ($resultado) {
    ?>
        <h3 class="success">Tu registro se a completado</h3>
    <?php
}else {
    ?>
        <h3 class="error">Ocurrio un error</h3>
    <?php
}

} else { 
    ?> <h3 class="error">Llenar todos los campos</h3>
    
    <?php 
    }
}





echo "<a href=http://localhost/php/ejemplo01/Ejercicio/Formulario01.php> volver a la pagina</a> ";
?>