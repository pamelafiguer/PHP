<?php
include("conexion.php");




if(isset($_POST['calcular'])){



    if (
        strlen($_POST['txtNombre']) >= 1 && 
        strlen($_POST['txtApellidos']) >= 1 && 
        strlen($_POST['Distrito']) >= 1 && 
        strlen($_POST['Turno']) >= 1 && 
        strlen($_POST['Edad']) >= 1 && 
        strlen($_POST['RedesSociales']) >= 1 && 
        strlen($_POST['Correo']) >= 1 && 
        strlen($_POST['Sueldo']) >= 1 && 
        strlen($_POST['Escolaridad']) >= 1 && 
        strlen($_POST['Gratificacioon']) >= 1 && 
        strlen($_POST['Bono']) >= 1 && 
        strlen($_POST['AFP']) >= 1 && 
        strlen($_POST['Renta']) >= 1 && 
        strlen($_POST['TotalEgreso']) >= 1 && 
        strlen($_POST['TotalIngreso']) >= 1 && 
        strlen($_POST['Neto']) >= 1 )
    {

    $Nombre=$_POST['txtNombre'];
    $Apellido=$_POST['txtApellidos'];
    $Distrito=$_POST['Distrito'];
    $Turno=$_POST['Turno'];
    $edad=$_POST['edad'];
    $Redes=$_POST['Redes'];
    $Correo=$_POST['Correo'];
    $Sueldo=$_POST['Sueldo'];
    $Escolaridad=$_POST['Escolaridad'];
    $Gratificacion=$_POST['Grati'];
    $Bono=$_POST['Bono'];
    $AFP=$_POST['AFP'];
    $Renta=$_POST['Renta'];
    $TotalEgreso=$_POST['Egreso'];
    $TotalIngreso=$_POST['Ingreso'];
    $Neto=$_POST['Neto'];
    $ptotal=0;

if ($Sueldo < 0) {
    $Escolaridad = $Sueldo  + 0.15;
    $Gratificacion = $Sueldo + 0.20;
    $Bono = $Sueldo + 0.04;
}else{
    $Sueldo = 0;
}

$TotalIngreso = $Escolaridad + $Gratificacion + $Bono;

if ($TotalIngreso < 0) {
    $AFP = $TotalIngreso - 0.08;
    $Renta = $TotalIngreso- 0.05;
    $TotalEgreso = $AFP + $Renta;
}else{
    $TotalEgreso = 0;
}

$Neto = $TotalIngreso - $TotalEgreso;

}



$consulta="INSERT INTO Empleados (Nombres, Apellidos, Distrito, Turno, Edad, Redes_Sociales, Correo, Sueldo, Escolaridad, Gratificacion, Bono, AFP, Renta, TotalEgreso, TotalIngreso, Neto) 
VALUES ('$Nombre', '$Apellido','$Distrito', '$Turno', '$edad', '$Redes', '$Correo', '$Sueldo', '$Escolaridad', '$Gratificacion', '$Bono', '$AFP', '$Renta', '$TotalEgreso', '$TotalIngreso', '$Neto')";

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


echo "<a href=http://localhost/dashboard/php/Ejercicio/Formulario01.php> volver a la pagina</a> ";

?>
