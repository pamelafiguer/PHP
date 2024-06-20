<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mi pagina</title>
</head>
<body>
    

<h1>  <?php echo"Hallar los cinco Operadores aritmeticos<br>";?></h1>

<h2>  <?php echo"Sumar   +  <br>";?></h2>
<h2>  <?php echo"Multiplicar  *   <br>";?></h2>
<h2>  <?php echo"Dividir  /   <br>";?></h2>
<h2>  <?php echo"Residuo  %   <br>";?></h2>
<h2>  <?php echo"Potencia  **   <br>";?></h2>

<h2>  <?php echo"Resultado  <br>";?></h2>

<?php 
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




</body>
</html>