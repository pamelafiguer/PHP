<?php
$id=$_GET['CustomerID'];
require_once "ConexionPDO.php";
$conn=new ConexionPDO();
$sql="select * from customers where CustomerID=".$id;
$rs=$conn->ejecutar($sql);
$data=$rs->fetchAll();
foreach($data as $row){
    
    $nombre=$row['CustomerName'];
    $Contacto=$row['ContactName'];
    $Direccion=$row['Address'];
    $ciudad=$row['City'];
    $CodigoPostal=$row['PostalCode'];
    $pais=$row['Country'];

}
?>
<html>
    <link rel="stylesheet" href="style2.css">
<form name="form1" method="post" action="guardar.php">
    
    <div class="form-group">
        
            <input type="hidden" name="CustomerID" value="<?=$id;?>"> 
       
        <div class="form-content">
            <label for="name">NOMBRE     : </label>
            <input type="text" name="Nombre" value='<?=$nombre;?>'></br>
        </div>
        <div class="form-content">
            <label for="name">CONTACTO   : </label>
            <input type="text" name="Contacto" value='<?=$Contacto;?>'></br> 
        </div>
        <div class="form-content">
            <label for="name">DIRECCION   : </label>
            <input type="text" name="Direccion" value='<?=$Direccion;?>'></br>
        </div>
        <div class="form-content">
            <label for="name">CIUDAD      : </label>
            <input type="text" name="Ciudad" value='<?=$ciudad;?>'></br>
        </div>
        <div class="form-content">
            <label for="name">CODIGO POSTAL : </label>
            <input type="text" name="CodigoPostal" value='<?=$CodigoPostal;?>'></br>
        </div>
        <div class="form-content">
            <label for="name">PAIS          : </label>
            <input type="text" name="Pais" value='<?=$pais;?>'></br>       
        </div>
    </div>
   
     <input class="btn" type="submit" value="Consul">
</form>
</html>

    