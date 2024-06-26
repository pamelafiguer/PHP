<?php
require 'conexion.php';

$columns = ['EmployeeID', 'LastName', 'FirstName', 'BirthDate', 'Photo', 'Notes'];
$table = "employees";
$campo = isset($_POST['Campo']) ? $conexion->real_escape_string($_POST['Campo']) : null;

$where = '';
    if($campo != null){

        $where = "WHERE (" ;
        $cont =count($columns);
        for ($i = 0; $i < $cont; $i++){
            $where .= $columns[$i] . " LIKE '%". $campo . "%' OR ";
        }
        $where = substr_replace($where, "", -3);
        $where .= ")";

    }
$sql = "SELECT " . implode(", ", $columns) . " 
FROM $table 
$where";

$resultado = $conexion->query($sql);
$num_row = $resultado->num_rows;
$html = '';

if ($num_row > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $html .= '<tr>';
        $html .= '<td>' . $row['EmployeeID'] . '</td>';
        $html .= '<td>' . $row['LastName'] . '</td>';
        $html .= '<td>' . $row['FirstName'] . '</td>';
        $html .= '<td>' . $row['BirthDate'] . '</td>';
        $html .= '<td>' . $row['Photo'] . '</td>';
        $html .= '<td>' . $row['Notes'] . '</td>';
        $html .= '<td><a href="#">Editar</a></td>';
        $html .= '<td><a href="#">Eliminar</a></td>';
        $html .= '</tr>';
    }
} else {
    $html .= '<tr>';
    $html .= '<td colspan="8">Sin resultados</td>';
    $html .= '</tr>';
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);

?>