<?php
include("ConexionCliente.php");

if($conexion){
    echo "la conexion a la base de datos es correcto.<br>";
}else{
    echo " no permite conectarse a la base de datos.<br>";
}




if(isset($_POST['Guardar'])){

    if (
        strlen($_POST['txtNombres']) >= 1 && 
        strlen($_POST['CargoContacto']) >= 1 && 
        strlen($_POST['Direccion']) >= 1 && 
        strlen($_POST['Ciudad']) >= 1 && 
        strlen($_POST['Codigo']) >= 1 && 
        strlen($_POST['Pais']) >= 1 
        
    )
    {

    $Nombre=$_POST['txtNombres'];
    $Cargo=$_POST['CargoContacto'];
    $Direccion=$_POST['Direccion'];
    $Ciudad=$_POST['Ciudad'];
    $Codigo=$_POST['Codigo'];
    $Pais=$_POST['Pais'];

    

$consulta="INSERT INTO customers (CustomerName, ContactName, Address, City, PostalCode, Country) 
VALUES ('$Nombre', '$Cargo','$Direccion', '$Ciudad', '$Codigo', '$Pais')";

$resultado=mysqli_query($conexion,$consulta);
    

if ($resultado) {
    ?>
        <h3>Tu registro se a completado</h3>
    <?php
}else {
    ?>
        <h3>Ocurrio un error</h3>
    <?php
}

    }


}




?>

<?php

if (isset($_POST["Consultar"])) {

include("ConexionCliente.php");
$Codigo=$_POST['Codigo'];
$consulta=mysqli_query($conexion, "SELECT * FROM customers where PostalCode= $Codigo");
while($resultado = mysqli_fetch_array($consulta)){


{
    
echo "

<table width=\"600\" border=\"3\"><br>
<tr>
<td>Codigo del Cliente</td><td>Nombre Contacto </td><td>Cargo de Contacto</td>
<td>Direccion</td><td>Ciudad</td><td>Codigo Postal</td><td>Pais</td>

</tr>
<tr>
<td>".$resultado["CustomerID"]."</td>
<td>".$resultado["CustomerName"]." </td>
<td>".$resultado["ContactName"]." </td>
<td> ".$resultado["Address"]."</td>
<td>".$resultado["City"]."</td>
<td>".$resultado["PostalCode"]." </td>
<td>".$resultado["Country"]." </td>

</tr>
</table>

";





}
include("CerrarConexionCliente.php");
}


} 
    

echo "<a href=http://localhost/php/ejemplo01/Ejercicio/FrmCliente.php> volver a la pagina</a> ";

?>
