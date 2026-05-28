<?php
    session_start();
    

     require_once '../db/Conexion.php';
    $con = new Conexion();
    $conectar = $con->conectar();
    
    $sql = "UPDATE usuarios SET estado = 0 WHERE id_usuario = ?";
    $stmt = $conectar->prepare($sql);
    $stmt->execute([$_SESSION['id_usuario']]);

    session_destroy();

    header("location: ../login.php");

    exit;
?>