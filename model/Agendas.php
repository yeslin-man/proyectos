<?php 
// header('Content-Type: aplication/json');

$sucursal = $_SESSION['sucursal'];

include 'db/Conexion.php';
$con = new Conexion();
$conectar = $con->conectar();

$sqlA = "SELECT * FROM citas WHERE estado = 1 AND sucursal='$sucursal' LIMIT 3";
$stmtA = $conectar->prepare($sqlA);
$stmtA->execute();
$agendas = $stmtA->fetchAll(PDO::FETCH_ASSOC);
//  echo json_encode($usuarios);

?>