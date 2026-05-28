<?php

require_once '../db/Conexion.php';
$con = new Conexion();
$conectar = $con->conectar();

// 📌 Cantidad de registros por página
$registros_por_pagina = 10;

// 📌 Página actual
$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

// Evitar valores inválidos
if ($pagina < 1) {
    $pagina = 1;
}

// 📌 Calcular desde dónde empezar
$inicio = ($pagina - 1) * $registros_por_pagina;


// 📌 Consulta con LIMIT

$sql = "SELECT servicio.id_servicio,
               servicio.servicio,
               servicio.descripcion,
               servicio.precio,
               servicio.foto,
               usuarios.id_usuario,
               usuarios.nombre,
               usuarios.apellido,
               servicio.sucursal
        FROM servicio, usuarios 
        WHERE usuarios.id_usuario = servicio.idusuario
        LIMIT :inicio, :limite";

if(isset($_REQUEST['sucursal']) && isset($_REQUEST['servicio'])){

    $sucursal = $_REQUEST['sucursal'];
    $servicio = $_REQUEST['servicio'];

    $sql = "SELECT servicio.id_servicio,
                   servicio.servicio,
                   servicio.descripcion,
                   servicio.precio,
                   servicio.foto,
                   usuarios.id_usuario,
                   usuarios.nombre,
                   usuarios.apellido,
                   servicio.sucursal
            FROM servicio, usuarios 
            WHERE usuarios.id_usuario = servicio.idusuario 
            AND servicio.servicio = :servicio
            AND servicio.sucursal = :sucursal
            LIMIT :inicio, :limite";
}

$stmt = $conectar->prepare($sql);

if(isset($_REQUEST['sucursal']) && isset($_REQUEST['servicio'])){
    $stmt->bindValue(':servicio', $servicio);
    $stmt->bindValue(':sucursal', $sucursal);
}

$stmt->bindValue(':inicio', (int)$inicio, PDO::PARAM_INT);
$stmt->bindValue(':limite', (int)$registros_por_pagina, PDO::PARAM_INT);

$stmt->execute();

$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);






// $sql = "SELECT servicio.id_servicio,servicio.servicio,servicio.descripcion,servicio.precio,servicio.foto,usuarios.id_usuario,usuarios.nombre,usuarios.apellido
//  FROM servicio, usuarios WHERE usuarios.id_usuario = servicio.idusuario LIMIT :inicio, :limite";

// if(isset($_REQUEST['sucursal']) && isset($_REQUEST['servicio'])){
//     $sucursal = $_REQUEST['sucursal'];
//     $servicio = $_REQUEST['servicio'];
//     $sql = "SELECT servicio.id_servicio,servicio.servicio,servicio.descripcion,servicio.precio,servicio.foto,usuarios.id_usuario,usuarios.nombre,usuarios.apellido
//     FROM servicio, usuarios WHERE usuarios.id_usuario = servicio.idusuario AND servicio.servicio = '$servicio' AND servicio.sucursal = '$sucursal' LIMIT :inicio, :limite";

// }

// $stmt = $conectar->prepare($sql);
// $stmt->bindParam(':inicio', $inicio, PDO::PARAM_INT);
// $stmt->bindParam(':limite', $registros_por_pagina, PDO::PARAM_INT);
// $stmt->execute();
// $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);





// 📌 Total de registros
$sql_total = "SELECT COUNT(*) as total FROM servicio";
$stmt_total = $conectar->prepare($sql_total);
$stmt_total->execute();
$total_registros = $stmt_total->fetch(PDO::FETCH_ASSOC)['total'];

// 📌 Total de páginas
$total_paginas = ceil($total_registros / $registros_por_pagina);

?>