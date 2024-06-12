<?php

if(isset($_POST)){
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['apellido'];
$Grado=$_POST['Grado'];
$Categoria=$_POST['Categoria'];
$Sueldo=0;

}
$Sueldo <=0;

if($Grado == "TECNICO PROFESIONAL"){
    if ($Categoria == "a") {
        $Sueldo = 3000; # code...
    }
    
}elseif ($Grado == "LICENCIADO") {
    if ($Categoria == "a") {
        $Sueldo = 2500; # code...
    } 
    
}else{
    $Sueldo=2500;
}


echo "NOMBRES : $Nombre<br>";
echo "Apellidos : $Apellido<br>";
echo "Grado de instruccion : $Grado<br>";
echo "Categoria : $Categoria<br>";
echo "Sueldo : $Sueldo<br>";
echo "<a href:http://localhost/php/ejemplo01/Formulario03.php>Retornar</a>";