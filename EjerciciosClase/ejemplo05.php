<?php

if(isset($_POST)){
$n1=$_POST['txtNumero1'];
$n2=$_POST['txtNumero2'];
}


$n1= 20;
$n2= 3;
$Suma= $n1 + $n2;
$Multiplicacion= $n1 * $n2;
$division= $n1 / $n2;
$residuo= $n1 % $n2;
$Potencia= $n1 ** $n2;

echo "El numero 1 es : $n1 <br>";
echo "El numero 2  es : $n2 <br>";
echo "-------------------------------------<br>";
echo "La Multiplicacion es : $Multiplicacion<br>";
echo "La  Division es : $division <br>";
echo "El residuo es : $residuo <br>";
echo "La Potencia es : $Potencia <br>";

?>