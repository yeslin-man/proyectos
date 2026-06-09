<?php 

    $operacion = $_REQUEST['operacion'];

    switch ($operacion) {
        case 'GuardarUsuario':guardar();break;
        case 'Eliminar':eliminar();break;
        case 'GuardarUsuarioDos':guardarDos();break;
    }

    // funcion para insertar
    function guardar(){
        $nombre = $_REQUEST['nombre'];
        $apellido = $_REQUEST['apellido'];
        $telefono = $_REQUEST['telefono'];
        $correo = $_REQUEST['correo'];
        $clave = "no Aplica";
        $sucursal = $_REQUEST['sucursal'];
        $estado = 0;

        require_once '../db/Conexion.php';
        $con = new Conexion();
        $conectar = $con->conectar();

        $sql = $conectar->prepare("INSERT INTO usuarios (nombre,apellido,telefono,correo,clave,sucursal,estado) 
                                    VALUES (:nombre,:apellido,:telefono,:correo,:clave,:sucursal,:estado)");
        $sql->bindParam(':nombre', $nombre);
        $sql->bindParam(':apellido', $apellido);
        $sql->bindParam(':telefono', $telefono);
        $sql->bindParam(':correo', $correo);
        $sql->bindParam(':clave', $clave);
        $sql->bindParam(':sucursal', $sucursal);
        $sql->bindParam(':estado', $estado);
        $sql->execute();

        echo 'ok';
    }

    // funcion para eliminar
    function eliminar(){
        $id_usuario = $_REQUEST['id_usuario'];

        require_once '../db/Conexion.php';
        $con = new Conexion();
        $conectar = $con->conectar();

        $sql = $conectar->prepare("DELETE FROM usuarios WHERE id_usuario = :id_usuario");
        $sql->bindParam(':id_usuario', $id_usuario);
        $sql->execute();

        echo 'ok';
    }

    function guardarDos(){
        $nombre = $_REQUEST['nombre'];
        $apellido = $_REQUEST['apellido'];
        $telefono = $_REQUEST['telefono'];
        $correo = $_REQUEST['correo'];
        $clave = $_REQUEST['clave'];
        $sucursal = $_REQUEST['sucursal'];
        $estado = 0;

        require_once '../db/Conexion.php';
        $con = new Conexion();
        $conectar = $con->conectar();

        $sql = $conectar->prepare("INSERT INTO usuarios (nombre,apellido,telefono,correo,clave,sucursal,estado) 
                                    VALUES (:nombre,:apellido,:telefono,:correo,:clave,:sucursal,:estado)");
        $sql->bindParam(':nombre', $nombre);
        $sql->bindParam(':apellido', $apellido);
        $sql->bindParam(':telefono', $telefono);
        $sql->bindParam(':correo', $correo);
        $sql->bindParam(':clave', $clave);
        $sql->bindParam(':sucursal', $sucursal);
        $sql->bindParam(':estado', $estado);
        $sql->execute();

        echo 'ok';
    }

?>