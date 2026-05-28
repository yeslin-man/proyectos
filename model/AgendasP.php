<?php 
// header('Content-Type: aplication/json');
require_once '../db/Conexion.php';
$con = new Conexion();
$conectar = $con->conectar();

$sql = "SELECT id_cita,
          cliente AS title,
          servicio,
          fecha AS start,
          hora,
          idusuario,
          sucursal,
          colorFondo,
          colorTexto,
          estado
          FROM citas WHERE estado = 1";
$stmt = $conectar->prepare($sql);
$stmt->execute();
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
 echo json_encode($usuarios);

?>