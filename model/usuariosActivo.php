<?php

require_once 'db/Conexion.php';
$con = new Conexion();
$conectar = $con->conectar();

$sqlB = $conectar->query("SELECT * FROM usuarios");

$usuariosB = $sqlB->fetchAll(PDO::FETCH_ASSOC);


?>