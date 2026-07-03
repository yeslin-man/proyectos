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

            $rutas = [];

            foreach ($_FILES['foto']['name'] as $i => $nombreImagen) {

                if ($_FILES['foto']['error'][$i] == 0) {

                    $destino = "../imagen/" . basename($nombreImagen);
                    $origen = $_FILES['foto']['tmp_name'][$i];

                    if (move_uploaded_file($origen, $destino)) {
                        $rutas[] = $destino;
                    }
                }
            }

            // Convertir el arreglo en una sola cadena
            $fotos = implode('|', $rutas);

            $sql = $conectar->prepare("INSERT INTO publicaciones
            (id_publi, titulo, descripcion, foto, opcion)
            VALUES (NULL, :titulo, :descripcion, :foto, :opcion)");

            $sql->bindParam(':titulo', $titulo);
            $sql->bindParam(':descripcion', $descripcion);
            $sql->bindParam(':foto', $fotos);
            $sql->bindParam(':opcion', $opcion);

            $sql->execute();

            echo "ok";




            // foreach ($_FILES['foto']['name'] as $i => $foto) {

            //     $destino = '../imagen/'. $_FILES['foto']['name'][$i];
            //     $origen = $_FILES['foto']['tmp_name'][$i];

            //     $sql = $conectar->prepare("INSERT INTO publicaciones (id_publi,titulo,descripcion,foto,opcion) 
            //                                 VALUES (null,:titulo,:descripcion,:foto,:opcion)");
            //     $sql->bindParam(':titulo', $titulo);
            //     $sql->bindParam(':descripcion', $descripcion);
            //     $sql->bindParam(':foto', $destino);
            //     $sql->bindParam(':opcion', $opcion);
            //     move_uploaded_file($origen, $destino);
            //     $sql->execute();
            // }

            // echo 'ok';
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