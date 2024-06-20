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

$consulta="INSERT INTO paciente (Nombres, Apellidos, Tipo, Dia, Edad, Total) 
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


?>



<?php

if (isset($_POST["consultar"])) {

    /*include("Conexion.php");
    $consulta=mysqli_query($conexion, "SELECT * FROM Paciente");
    while($resultado = mysqli_fetch_array($consulta)){
    */

        $Tipo=$_POST['Tipo'];
        include("Conexion.php");
        $consulta=mysqli_query($conexion, "SELECT * FROM Paciente where tipo = $Tipo");
        while($resultado = mysqli_fetch_array($consulta)) {
        
    echo "

<table width=\"100\" border=\"1\">
<tr>
<td>cODIGO DEL PACIENTE</td><td>NOMBRE DEL PACIENTE</td><td>Apellidos PACIENTE</td>
<td>Tipo</td><td>Dia HOSPITALIZDA</td><td>CostoTotal DE PAGAR</td>
</tr>
<tr>
<td>".$resultado["idAlumno"]."</td>
<td>".$resultado["Nombres"]." </td>
<td>".$resultado["Apellidos"]." </td>
<td> ".$resultado["tipo"]."</td>
<td>".$resultado["Dia"]."</td>
<td>".$resultado["Edad"]." </td>
<td>".$resultado["CostoTotal"]." </td>

</tr>
</table>

";





}
include("CerraConexion.php");
}


        
        

echo "<a href=http://localhost/dashboard/php/formulario.php> volver a la pagina</a> ";

    


    

?>
