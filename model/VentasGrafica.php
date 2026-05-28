<?php

// require_once 'db/Conexion.php';
// $con = new Conexion();
// $conectar = $con->conectar();

// $sql = "SELECT * FROM usuarios";
// $stmt = $conectar->prepare($sql);
// $stmt->execute();
// $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
// //  echo json_encode($usuarios);


include '../db/Conexion.php';
$con = new Conexion();
$conectar = $con->conectar();

// 📌 Cantidad de registros por página
$registros_por_pagina = 6;

// 📌 Página actual
$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

// Evitar valores inválidos
if ($pagina < 1) {
    $pagina = 1;
}

// 📌 Calcular desde dónde empezar
$inicio = ($pagina - 1) * $registros_por_pagina;

// 📌 Consulta con LIMIT
$sql = "SELECT ventas.id_venta,usuarios.id_usuario,usuarios.nombre,usuarios.apellido,usuarios.sucursal,servicio.id_servicio,
                servicio.servicio,ventas.fecha, COUNT(*) AS total 
                FROM ventas, usuarios, servicio WHERE usuarios.id_usuario = ventas.idusuario
                AND servicio.id_servicio = ventas.idusuario GROUP BY ventas.fecha LIMIT :inicio, :limite";
$stmt = $conectar->prepare($sql);
$stmt->bindParam(':inicio', $inicio, PDO::PARAM_INT);
$stmt->bindParam(':limite', $registros_por_pagina, PDO::PARAM_INT);
$stmt->execute();
$usuariosX = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($usuariosX);

// 📌 Total de registros
$sql_total = "SELECT COUNT(*) as total FROM ventas";
$stmt_total = $conectar->prepare($sql_total);
$stmt_total->execute();
$total_registros = $stmt_total->fetch(PDO::FETCH_ASSOC)['total'];

// 📌 Total de páginas
$total_paginasX = ceil($total_registros / $registros_por_pagina);


?>