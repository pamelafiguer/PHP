<?php
include("conexion.php");


if(isset($_POST['calcular'])){

    if (
        !empty($_POST['txtNombre']) && 
        !empty($_POST['txtApellidos']) && 
        !empty($_POST['Distrito']) && 
        !empty($_POST['Turno']) && 
        !empty($_POST['edad']) && 
        !empty($_POST['RedesSociales']) && 
        !empty($_POST['Correo']) && 
        !empty($_POST['Sueldo']) 
    ) {

    $Nombre=$_POST['txtNombre'];
    $Apellido=$_POST['txtApellidos'];
    $Distrito=$_POST['Distrito'];
    $Turno=$_POST['Turno'];
    $edad=$_POST['edad'];
    $Redes=$_POST['Redes'];
    $Correo=$_POST['Correo'];
    $Sueldo = floatval($_POST['Sueldo']);

    }

    $Sueldo <= 0;
    $Escolaridad <= 0;
    $Gratificacion <= 0;
    $Bono <= 0;
    $TotalEgreso <= 0;
    $TotalIngreso <= 0;
    $AFP <= 0;
    $Renta <= 0;
    $Neto <= 0;

    $Escolaridad= $Sueldo  + 0.15;;
    $Gratificacion= $Sueldo + 0.20;
    $Bono= $Sueldo + 0.04;
    $TotalIngreso= $Escolaridad + $Gratificacion + $Bono;
    $AFP= $TotalIngreso - 0.08;
    $Renta= $TotalIngreso- 0.05;
    $TotalEgreso= $AFP + $Renta;
    $Neto= $TotalIngreso - $TotalEgreso;;



$consulta="INSERT INTO empleado (Nombres, Apellidos, Distrito, Turno, Edad, Redes_Sociales, Correo, Sueldo, Escolaridad, Gratificacion, Bono, AFP, Renta, TotalEgreso, TotalIngreso, Neto) 
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

}


echo "Escolaridad:  <br>";
echo "Gratificacion: $Gratificacion.<br>";
echo "Bono: $Bono. <br>";
echo "AFP:  $AFP. <br>";
echo "Renta: $Renta  <br>";
echo "TotalEgreso: $TotalEgreso <br>";
echo "TotalIngreso:  $TotalIngreso <br>";
echo "Neto: $Neto  <br>";
echo "<a href=http://localhost/php/ejemplo01/Ejercicio/Formulario01.php> volver a la pagina</a> ";
?>