<?php 

$operacion = $_REQUEST['operacion'];

    switch ($operacion) {
        case 'GuardarPublic':guardarP();break;
        case 'GuardarPublico':guardarPu();break;
    }

    // funcion para insertar
    function guardarP(){

        require_once '../db/Conexion.php';
            $con = new Conexion();
            $conectar = $con->conectar();

        $titulo = $_REQUEST['titulo'];
        $descripcion = $_REQUEST['descripcion'];
        $opcion = $_REQUEST['opcion'];
        
        if($opcion == 'testimonio'){
            $destino = $_REQUEST['foto'];
            $sql = $conectar->prepare("INSERT INTO publicaciones (id_publi,titulo,descripcion,foto,opcion) 
                                        VALUES (null,:titulo,:descripcion,:foto,:opcion)");
            $sql->bindParam(':titulo', $titulo);
            $sql->bindParam(':descripcion', $descripcion);
            $sql->bindParam(':foto', $destino);
            $sql->bindParam(':opcion', $opcion);
            // move_uploaded_file($origen, $destino);
            $sql->execute();

            echo 'ok';

        }else{
            $destino = '../imagen/'. $_FILES['foto']['name'];
            $origen = $_FILES['foto']['tmp_name'];

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
    }


    function guardarPu(){
        // print_r($_SERVER['REMOTE_ADDR']);
        require_once '../db/Conexion.php';
            $con = new Conexion();
            $conectar = $con->conectar();

        $titulo = $_REQUEST['titulo'];
        $descripcion = $_REQUEST['descripcion'];
        $destino = "null";
        // $destino = md5($_SERVER['REMOTE_ADDR']);
        $opcion = "testimonio";
        
            $sql = $conectar->prepare("INSERT INTO publicaciones (id_publi,titulo,descripcion,foto,opcion) 
                                        VALUES (null,:titulo,:descripcion,:foto,:opcion)");
            $sql->bindParam(':titulo', $titulo);
            $sql->bindParam(':descripcion', $descripcion);
            $sql->bindParam(':foto', $destino);
            $sql->bindParam(':opcion', $opcion);
            // move_uploaded_file($origen, $destino);
            $sql->execute();

            echo 'ok';

        
    }

?>