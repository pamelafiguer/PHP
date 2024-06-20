<?php

if(isset($_POST)){
$Nombre=$_POST['nombre'];
$minutos=$_POST['minutos'];
$precio=$_POST['precio'];
$pais=$_POST['pais'];

$ptotal=0;


}

switch($pais){
    case 1 : $ptotal = $minutos * $precio;break;
    case 2 : $ptotal = $minutos * $precio;break;
    case 3 : $ptotal = $minutos * $precio;break;
    case 4 : $ptotal = $minutos * $precio;break;
    case 5 : $ptotal = $minutos * $precio;break;
    case 6 : $ptotal = $minutos * $precio;break;
    case 7 : $ptotal = $minutos * $precio;break;
    case 8 : $ptotal = $minutos * $precio;break;
    case 9 : $ptotal = $minutos * $precio;break;
    case 10 : $ptotal = $minutos * $precio;break;
    case 11 : $ptotal = $minutos * $precio;break;
    case 12 : $ptotal = $minutos * $precio;break;
    case 13 : $ptotal = $minutos * $precio;break;
    case 14 : $ptotal = $minutos * $precio;break;
    default: $ptotal=0;

}




echo "NOMBRES : $Nombre<br>";
echo "MINUTOS HABLADOS : $minutos<br>";
echo "PRECIO DE LAS LLAMADAS : $precio<br>";
echo "EL PAIS : $pais<br>";
echo "El total  es : $ptotal<br>";





?>