<?php 

$valor = $_REQUEST['valor'];
$estado = 1;

include '../db/Conexion.php';
$con = new Conexion();
$conectar = $con->conectar();

// $stmt = $conectar->prepare("SELECT * FROM usuarios WHERE sucursal = :sucursal AND estado = :estado");
$stmt = $conectar->prepare("SELECT * FROM usuarios WHERE sucursal = :sucursal");
$stmt->bindParam(':sucursal', $valor);
// $stmt->bindParam(':estado', $estado);
$stmt->execute();
$propiedad = $stmt->fetch(PDO::FETCH_ASSOC);

if($propiedad){
    header('location: ../login.php');
}else{
    header('location: ../registro.php?valor='.$valor);
}


?>