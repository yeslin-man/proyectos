<?php 

session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Establecer zona horaria de Colombia
        // date_default_timezone_set("America/Bogota");
        $correo = $_REQUEST["correo"];
        $clave = $_REQUEST["clave"];
        // $clave = md5($_POST["clave"]);

        require_once '../db/Conexion.php';
        $con = new Conexion();
        $conectar = $con->conectar();

        $sql = $conectar->prepare("SELECT * FROM usuarios WHERE correo = :correo AND clave = :clave");
        $sql->bindParam(':correo', $correo);
        $sql->bindParam(':clave', $clave);
        $sql->execute();
        $usuario = $sql->fetch(PDO::FETCH_ASSOC);

        if ($usuario) { // ✅ corregido
            $_SESSION["id_usuario"] = $usuario["id_usuario"];
            $_SESSION["nombre"] = $usuario["nombre"];
            $_SESSION["apellido"] = $usuario["apellido"];
            $_SESSION["telefono"] = $usuario["telefono"];
            $_SESSION["correo"] = $usuario["correo"];
            $_SESSION["sucursal"] = $usuario["sucursal"];
            $_SESSION["estado"] = $usuario["estado"];

            // $hoy = date('Y-m-d');

            if($_SESSION['sucursal']=='apartado' || $_SESSION['sucursal']=='magangue' || $_SESSION['sucursal']=='sahagun'){
                // Primero cerrar todos
                // $sql = "UPDATE usuarios SET estado = 0";
                // $conectar->exec($sql);

                // Luego abrir solo el que inició sesión
                $sql = "UPDATE usuarios SET estado = 1 WHERE id_usuario = ?";
                $stmt = $conectar->prepare($sql);
                $stmt->execute([$_SESSION['id_usuario']]);

                header("location: ../principal.php");
                exit();
            }else if($_SESSION['sucursal']=='admin'){
                header("location: ../principal.php");
            }else{
                header("location: ../login.php");
                exit();
            }

        }else{
            echo '<script>alert("Usuario o contraseña incorrectos.");
                    window.location = "../login.php";
            </script>';
        }
    }

// print_r($_REQUEST);


?>