<?php 

    $operacion = $_REQUEST['operacion'];

    switch ($operacion) {
        case 'GuardarCliente':guardar();break;
    }

    // funcion para insertar
    function guardar(){
        $nombre = $_REQUEST['nombre'];
        $apellido = $_REQUEST['apellido'];
        $telefono = $_REQUEST['telefono'];
        $correo = $_REQUEST['correo'];
        $sucursal = $_REQUEST['sucursal'];

        require_once '../db/Conexion.php';
        $con = new Conexion();
        $conectar = $con->conectar();

        $sql = $conectar->prepare("INSERT INTO clientes (nombre,apellido,telefono,correo,sucursal) 
                                    VALUES (:nombre,:apellido,:telefono,:correo,:sucursal)");
        $sql->bindParam(':nombre', $nombre);
        $sql->bindParam(':apellido', $apellido);
        $sql->bindParam(':telefono', $telefono);
        $sql->bindParam(':correo', $correo);
        $sql->bindParam(':sucursal', $sucursal);
        $sql->execute();

        echo 'ok';
    }

?>