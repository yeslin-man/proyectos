<?php 

$operacion = $_REQUEST['operacion'];

    switch ($operacion) {
        case 'GuardarPublic':guardarP();break;
    }

    // funcion para insertar
    function guardarP(){
        $titulo = $_REQUEST['titulo'];
        $descripcion = $_REQUEST['descripcion'];
        
        $destino = '../imagen/'. $_FILES['foto']['name'];
        $origen = $_FILES['foto']['tmp_name'];

        $opcion = $_REQUEST['opcion'];

        require_once '../db/Conexion.php';
        $con = new Conexion();
        $conectar = $con->conectar();

        $sql = $conectar->prepare("INSERT INTO publicaciones (id_publi,titulo,descripcion,foto,opcion) 
                                    VALUES (null,:titulo,:descripcion,:foto,:opcion)");
        $sql->bindParam(':titulo', $titulo);
        $sql->bindParam(':descripcion', $descripcion);
        $sql->bindParam(':foto', $destino);
        $sql->bindParam(':opcion', $opcion);
        move_uploaded_file($origen, $destino);
        $sql->execute();

        echo 'ok';
    }

?>