<?php

    $id=$_POST['CustomerID'];
    $nombre=$_POST['Nombre'];
    $Contacto=$_POST['Contacto'];
    $Direccion=$_POST['Direccion'];
    $ciudad=$_POST['Ciudad'];
    $CodigoPostal=$_POST['CodigoPostal'];
    $pais=$_POST['Pais'];
    
    require_once "ConexionPDO.php";
    $conn=new ConexionPDO();
    
    $sql="update customers set CustomerName='$nombre', ContactName='$Contacto', Address='$Direccion', City='$ciudad', PostalCode ='$CodigoPostal' , Country = '$pais' where CustomerID=".$id;
    
    $rs=$conn->ejecutar($sql);
    
    header("Location: Principal.php");

?>