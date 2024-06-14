<?php
include("ConexionColegio.php");






if(isset($_POST['calcular'])){



    if (
        strlen($_POST['txtNombre']) >= 1 && 
        strlen($_POST['txtApellidos']) >= 1 && 
        strlen($_POST['cursos']) >= 1 && 
        strlen($_POST['Nota1']) >= 1 &&
        strlen($_POST['Nota2']) >= 1 &&
        strlen($_POST['Nota3']) >= 1 &&
        strlen($_POST['Nota4']) >= 1 )
    {

    $Nombre=$_POST['txtNombre'];
    $Apellido=$_POST['txtApellidos'];
    $Cursos=$_POST['cursos'];
    $Nota1=$_POST['Nota1'];
    $Nota2=$_POST['Nota2'];
    $Nota3=$_POST['Nota3'];
    $Nota4=$_POST['Nota4'];

    $Promediofinal=($Nota1 + $Nota2 + $Nota3 + $Nota4) / 4;

    if ($Promediofinal >= 13 ) {
        $Obs = "Aprobado";
    }else{
        $Obs = "Desaprobado";

    }




$consulta="INSERT INTO Promedios(Nombres, Apellidos, Curso, Nota1, Nota2, Nota3, Nota4 , Promedio, Obs) 
VALUES ('$Nombre', '$Apellido','$Cursos', '$Nota1', '$Nota2', '$Nota3','$Nota4', '$Promediofinal', '$Obs')";

$resultado=mysqli_query($conexion,$consulta);

if($consulta){
    ?>
    <h1>¡Guardo correctamente los registros!</h1>
    <?php


}else{
       ?>
       <h1>¡No Se Guardo los registros!</h1>
        <?php
             }
            
        }
}
 ?>

<?php

if (isset($_POST["consultar"])) {

    include("ConexionColegio.php");
    $consulta=mysqli_query($conexion, "SELECT * FROM Promedios");
    while($resultado = mysqli_fetch_array($consulta)){
    

      /*  $Tipo=$_POST['Tipo'];
        include("ConexionColegio.php");
        $consulta=mysqli_query($conexion, "SELECT * FROM Promedios where  = $Tipo");
        while($resultado = mysqli_fetch_array($consulta)) */{
        
    echo "

   <table width=\"100\" border=\"1\">
<tr>
<td>Codigo del estudiante</td><td>NOMBRES</td><td>Apellidos</td>
<td>CURSO</td><td>NOTA1</td><td>NOTA2</td><td>NOTA3</td><td>NOTA4</td>
<td>PROMEDIO</td><td>OBS</td>
</tr>
<tr>
<td>".$resultado["idEstudiante"]."</td>
<td>".$resultado["Nombres"]." </td>
<td>".$resultado["Apellidos"]." </td>
<td> ".$resultado["Curso"]."</td>
<td>".$resultado["Nota1"]."</td>
<td>".$resultado["Nota2"]." </td>
<td>".$resultado["Nota3"]." </td>
<td>".$resultado["Nota4"]." </td>
<td>".$resultado["Promedio"]." </td>
<td>".$resultado["Obs"]." </td>

</tr>
</table>

";





}
include("CerrarConex.php");
}


} 
        

echo "<a href=http://localhost/dashboard/php/Colegio/Formulario.php> volver a la pagina</a> ";

    


    

?>
