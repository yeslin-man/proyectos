<?php 

    $operacion = $_REQUEST['operacion'];

    switch ($operacion) {
        case 'GuardarAgenda':guardar();break;
        case 'EditarAgenda':editar();break;
    }

    // funcion para insertar
    function guardar(){
        $cliente = $_REQUEST['cliente'];
        $servicio = $_REQUEST['servicio'];
        $fecha = $_REQUEST['fecha'];
        $hora = $_REQUEST['hora'];
        $idusuario = $_REQUEST['idusuario'];
        $sucursal = $_REQUEST['sucursal'];
        $estado = 1;

        $colorFondo = '#008080';
        $colorTexto = '#ffff';

        require_once '../db/Conexion.php';
        $con = new Conexion();
        $conectar = $con->conectar();

        $sql = $conectar->prepare("INSERT INTO citas (cliente,servicio,fecha,hora,idusuario,sucursal,colorFondo,colorTexto,estado) 
                                    VALUES (:cliente,:servicio,:fecha,:hora,:idusuario,:sucursal,:colorFondo,:colorTexto,:estado)");
        $sql->bindParam(':cliente', $cliente);
        $sql->bindParam(':servicio', $servicio);
        $sql->bindParam(':fecha', $fecha);
        $sql->bindParam(':hora', $hora);
        $sql->bindParam(':idusuario', $idusuario);
        $sql->bindParam(':sucursal', $sucursal);
        $sql->bindParam(':colorFondo', $colorFondo);
        $sql->bindParam(':colorTexto', $colorTexto);
        $sql->bindParam(':estado', $estado);
        $sql->execute();

        echo 'ok';
    }

    function editar(){
        // print_r($_REQUEST);
        // $id_cita = $_REQUEST['id_uno'];
        date_default_timezone_set("America/Bogota");
        $fechaActual = date("Y/m/d");

        $cliente = $_REQUEST['cliente'];
        $servicio = $_REQUEST['servicio'];
        $fecha = $_REQUEST['fecha'];
        $hora = $_REQUEST['hora'];
        $idusuario = $_REQUEST['idusuario'];
        $sucursal = $_REQUEST['sucursal'];
        $estado = 1;

        $colorFondo = '#008080';
        $colorTexto = '#ffff';

        require_once '../db/Conexion.php';
        $con = new Conexion();
        $conectar = $con->conectar();

        $sql = $conectar->prepare("UPDATE citas SET servicio=:servicio,fecha=:fecha,hora=:hora,idusuario=:idusuario,sucursal=:sucursal,colorFondo=:colorFondo,colorTexto=:colorTexto,estado=:estado WHERE cliente=:cliente");
        $sql->bindParam(':cliente', $cliente);
        $sql->bindParam(':servicio', $servicio);
        $sql->bindParam(':fecha', $fecha);
        $sql->bindParam(':hora', $hora);
        $sql->bindParam(':idusuario', $idusuario);
        $sql->bindParam(':sucursal', $sucursal);
        $sql->bindParam(':colorFondo', $colorFondo);
        $sql->bindParam(':colorTexto', $colorTexto);
        $sql->bindParam(':estado', $estado);
        // $sql->bindParam(':id_cita', $id_cita);
        $sql->execute();

        echo 'ok';
    }

?>