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
        strlen($_POST['Sueldo']) >= 1  
    ) 
    {

    $Nombre=$_POST['txtNombre'];
    $Apellido=$_POST['txtApellidos'];
    $Distrito=$_POST['Distrito'];
    $Turno=$_POST['Turno'];
    $edad=$_POST['edad'];
    $Redes=$_POST['Redes'];
    $Correo=$_POST['Correo'];
    $Sueldo = floatval($_POST['Sueldo']);

    $Escolaridad= $Sueldo  + 0.15;;
    $Gratificacion= $Sueldo + 0.20;
    $Bono= $Sueldo + 0.04;
    $TotalIngreso= $Escolaridad + $Gratificacion + $Bono;
    $AFP= $TotalIngreso - 0.08;
    $Renta= $TotalIngreso- 0.05;
    $TotalEgreso= $AFP + $Renta;
    $Neto= $TotalIngreso - $TotalEgreso;;

}

$consulta="INSERT INTO Empleado (Nombres, Apellidos, Distrito, Turno, Edad, Redes_Sociales, Correo, Sueldo, Escolaridad, Gratificacion, Bono, AFP, Renta, TotalEgreso, TotalIngreso, Neto) 
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


echo "Escolaridad: " . $Escolaridad . "<br>";
echo "Gratificacion: " . $Gratificacion . "<br>";
echo "Bono: " . $Bono . "<br>";
echo "AFP: " . $AFP . "<br>";
echo "Renta: " . $Renta . "<br>";
echo "TotalEgreso: " . $TotalEgreso . "<br>";
echo "TotalIngreso: " . $TotalIngreso . "<br>";
echo "Neto: " . $Neto . "<br>";
echo "<a href=http://localhost/php/ejemplo01/Ejercicio/Formulario01.php> volver a la pagina</a> ";

?>