<?php

if(isset($_POST)){
$Nombre=$_POST['txtNombre'];
$Categoria=$_POST['Cate'];
$Sueldo=$_POST['txtSueldo'];

}

$Sueldo <=0;

if($Categoria == 1){
    $Sueldo = $Sueldo * 1.15;
}elseif ($Categoria == 2) {
    $Sueldo = $Sueldo * 1.20;

}elseif ($Categoria == 3) {
    $Sueldo = $Sueldo * 1.25;
} else {
    $Sueldo = $Sueldo * 1.10;
}





echo "El nombre es : $Nombre<br>";
echo "La categoria es : $Categoria<br>";
echo "el Sueldo es : $Sueldo<br>";


