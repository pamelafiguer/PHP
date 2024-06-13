<?php
include("Conexion.php");




if(isset($_POST['calcular'])){



    if (
        strlen($_POST['txtNombre']) >= 1 && 
        strlen($_POST['txtApellidos']) >= 1 && 
        strlen($_POST['Tipo']) >= 1 && 
        strlen($_POST['dia']) >= 1 && 
        strlen($_POST['edad']) >= 1 )
    {

    $Nombre=$_POST['txtNombre'];
    $Apellido=$_POST['txtApellidos'];
    $Tipo=$_POST['Tipo'];
    $dia=$_POST['dia'];
    $edad=$_POST['edad'];
    $ptotal=0;

switch($Tipo){
    case 1 : $ptotal = $dia * 25; break;
    case 2 : $ptotal = $dia * 30;break;
    case 3 : $ptotal = $dia * 40;break;
    case 4 : $ptotal = $dia * 50;break;
    case 5 : $ptotal = $dia * 60;break;
    default: $ptotal=0;

}

if ($edad>= 14 && $edad<= 22) {
    $ptotal = $ptotal * 1.10;
    
}

$consulta="INSERT INTO Paciente (Nombres, Apellidos, Tipo, Dia, Edad, CostoTotal) 
VALUES ('$Nombre', '$Apellido','$Tipo', '$dia', '$edad', '$ptotal')";

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

echo "<a href=http://localhost/dashboard/php/formulario.php> volver a la pagina</a> ";

?>
