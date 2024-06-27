<?php

    
    $nombre=$_POST['Nombre'];
    $Contacto=$_POST['Contacto'];
    $Direccion=$_POST['Direccion'];
    $ciudad=$_POST['Ciudad'];
    $CodigoPostal=$_POST['CodigoPostal'];
    $pais=$_POST['Pais'];

    
    
require_once "ConexionPDO.php";
$conn=new ConexionPDO();
    
$sql="insert into customers (CustomerName, ContactName, Address, City, PostalCode, Country) values ('$nombre','$Contacto','$Direccion','$ciudad', '$CodigoPostal','$pais')";
    
$rs=$conn->ejecutar($sql);
    
header("Location: Principal.php");
    
?>