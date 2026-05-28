<?php
$sucursal = $_SESSION['sucursal'];

require_once 'db/Conexion.php';
$con = new Conexion();
$conectar = $con->conectar();

// trar todos los usuarios para el servicio
$sqlB = "SELECT * FROM usuarios WHERE sucursal = :sucursal";
$stmtB = $conectar->prepare($sqlB);
$stmtB->bindParam(':sucursal', $sucursal);
$stmtB->execute();
$usuariosB = $stmtB->fetchAll(PDO::FETCH_ASSOC);

?>