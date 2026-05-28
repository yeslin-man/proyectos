<?php 

    $operacion = $_REQUEST['operacion'];

    switch ($operacion) {
        case 'GuardarServicio':guardar();break;
        case 'EliminarServi':eliminar();break;
    }

    // funcion para insertar
    function guardar(){
        $servicio = $_REQUEST['servicio'];
        $descripcion = $_REQUEST['descripcion'];
        $precio = $_REQUEST['precio'];
        
        $destino = '../imagen/'. $_FILES['foto']['name'];
        $origen = $_FILES['foto']['tmp_name'];

        $idusuario = $_REQUEST['idusuario'];
        $sucursal = $_REQUEST['sucursal'];

        require_once '../db/Conexion.php';
        $con = new Conexion();
        $conectar = $con->conectar();

        $sql = $conectar->prepare("INSERT INTO servicio (servicio,descripcion,precio,foto,idusuario,sucursal) 
                                    VALUES (:servicio,:descripcion,:precio,:foto,:idusuario,:sucursal)");
        $sql->bindParam(':servicio', $servicio);
        $sql->bindParam(':descripcion', $descripcion);
        $sql->bindParam(':precio', $precio);
        $sql->bindParam(':foto', $destino);
        $sql->bindParam(':idusuario', $idusuario);
        $sql->bindParam(':sucursal', $sucursal);
        move_uploaded_file($origen, $destino);
        $sql->execute();

        echo 'ok';
    }

    function eliminar(){
        $id_servicio = $_REQUEST['id_servicio'];

        require_once '../db/Conexion.php';
        $con = new Conexion();
        $conectar = $con->conectar();

        $sql = $conectar->prepare("DELETE FROM servicio WHERE id_servicio = :id_servicio");
        $sql->bindParam(':id_servicio', $id_servicio);
        $sql->execute();

        echo 'ok';
    }

?>