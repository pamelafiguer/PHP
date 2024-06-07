<?php

if(isset($_POST)){
$Nombre=$_POST['txtNombre'];
$Tipo=$_POST['Tipo'];
$dia=$_POST['dia'];
$edad=$_POST['edad'];

$ptotal=0;
}

switch(Tipo){
    case 1 : $ptotal = $dia * 25; break;
    case 2 : $ptotal = $dia * 30;break;
    case 3 : $ptotal = $dia * 40;break;
    case 4 : $ptotal = $dia * 50;break;
    case 5 : $ptotal = $dia * 60;break;
    default: $ptotal=0;

}




echo "El nombre es : .$Nombre<br>";
echo "El tipo es :.$Tipo<br>";
echo "el dia es :.$dia<br>";
echo "la edad  es :.$edad<br>";
echo "El total  es :.$ptotal<br>";





?>