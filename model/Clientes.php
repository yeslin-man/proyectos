<?php

// require_once 'db/Conexion.php';
// $con = new Conexion();
// $conectar = $con->conectar();

// $sql = "SELECT * FROM clientes";
// $stmt = $conectar->prepare($sql);
// $stmt->execute();
// $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
// //  echo json_encode($usuarios);


require_once 'db/Conexion.php';
$con = new Conexion();
$conectar = $con->conectar();

$sucursal = $_SESSION['sucursal'];

// 📌 Cantidad de registros por página
$registros_por_pagina = 15;

// 📌 Página actual
$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

// Evitar valores inválidos
if ($pagina < 1) {
    $pagina = 1;
}

// 📌 Calcular desde dónde empezar
$inicio = ($pagina - 1) * $registros_por_pagina;

// 📌 Consulta con LIMIT
$sql = "SELECT * FROM clientes WHERE sucursal='$sucursal' LIMIT :inicio, :limite";
$stmt = $conectar->prepare($sql);
$stmt->bindParam(':inicio', $inicio, PDO::PARAM_INT);
$stmt->bindParam(':limite', $registros_por_pagina, PDO::PARAM_INT);
$stmt->execute();
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

// 📌 Total de registros
$sql_total = "SELECT COUNT(*) as total FROM clientes";
$stmt_total = $conectar->prepare($sql_total);
$stmt_total->execute();
$total_registros = $stmt_total->fetch(PDO::FETCH_ASSOC)['total'];

// 📌 Total de páginas
$total_paginas = ceil($total_registros / $registros_por_pagina);


?>