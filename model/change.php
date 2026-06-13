<?php
// print_r($_REQUEST);
$hora = $_REQUEST['hora'];

require_once '../db/Conexion.php';
$con = new Conexion();
$conectar = $con->conectar();

$sql = "SELECT * FROM citas WHERE hora = '$hora'";
$stmt = $conectar->prepare($sql);
$stmt->execute();
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

if($usuarios){
    echo "<span style='color:red;'>Horario ocupado</span>";
}else{
    echo "<span style='color:green;'>Horario disponible</span>";
}

?>