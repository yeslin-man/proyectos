<?php

$operacion = $_REQUEST['operacion'];

    switch ($operacion) {
        case 'Eliminar':eliminar();break;
        case 'Editar':editar();break;
    }

    // funcion para insertar
    function eliminar(){
        $id_cita = $_REQUEST['id_cita'];

        require_once '../db/Conexion.php';
        $con = new Conexion();
        $conectar = $con->conectar();

        $sql = $conectar->prepare("DELETE FROM citas WHERE id_cita = :id_cita");
        $sql->bindParam(':id_cita', $id_cita);
        $sql->execute();

        echo 'ok';
    }

    function editar(){
        $id_cita = $_REQUEST['id_cita'];
        $servicio = $_REQUEST['servicio'];
        $fecha = $_REQUEST['fecha'];
        $hora = $_REQUEST['hora'];

        require_once '../db/Conexion.php';
        $con = new Conexion();
        $conectar = $con->conectar();

        $sql = $conectar->prepare("UPDATE citas SET servicio=:servicio,fecha=:fecha,hora=:hora WHERE id_cita=:id_cita");
        $sql->bindParam(':id_cita', $id_cita);
        $sql->bindParam(':servicio', $servicio);
        $sql->bindParam(':fecha', $fecha);
        $sql->bindParam(':hora', $hora);
        $sql->execute();

        echo 'ok';
    }


?>