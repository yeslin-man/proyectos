<!-- validar cuamdo exista un registro deacuerdo ala sucursal me redireccione a el login  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estiloIndex.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <!-- swalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.26.25/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.26.25/dist/sweetalert2.min.css" rel="stylesheet">


    <link rel="icon" href="img/logoSpa.png" sizes="32x32">
    <title>Karime Spa - Registro</title>
</head>
<body class="bodyIndex">

    <div class="container">
        <div class="d-flex justify-content-center">
            <!-- <div class="col-6 col-md-5"> -->
            <div class="col-12 col-md-6 col-lg-5">
                <div class="card mt-3 mb-3 shadow-lg bg-body-tertiary rounded">
                    <div class="card-header logo">
                        <div class="avatar shadow-lg bg-body-tertiary">
                            <img src="img/logoSpa.png" alt="" class="imagen_logo">
                        </div>
                    </div>
                    <br>
                        <h3><a href="index.php" class="text-decoration-none mx-3" title="volver a inicio"><i class="fa-solid fa-arrow-left"></i></a></h3>
                    <div class="text-center mt-5">
                        <h5 class="titulo">Realice su registro en la sucursal de <b><?php echo $_REQUEST['valor'] ?></b></h5>
                    </div>
                    <div class="card-body p-3">
                        <div class="mt-3">
                            <!-- <form action="controller/Usuario.php" method="POST"> -->
                            <form id="frmSpa">
                                <div class="form-group mb-3">
                                    <div class="col-md-12">
                                        <label for="nombre" class="titulo">Nombre <span class="text-danger">*</span></label>
                                        <input type="hidden" name="sucursal" id="sucursal" class="form-control campo" value="<?php echo $_REQUEST['valor'] ?>">
                                        <div class="input-group campos">
                                            <input type="text" name="nombre" id="nombre" class="form-control campos" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="col-md-12">
                                        <label for="apellido" class="titulo">Apellido <span class="text-danger">*</span></label>
                                        <div class="input-group campos">
                                            <input type="text" name="apellido" id="apellido" class="form-control campos" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="col-md-12">
                                        <label for="telefono" class="titulo">Telefon <span class="text-danger">*</span></label>
                                        <div class="input-group campos">
                                            <input type="number" name="telefono" id="telefono" class="form-control campos" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="col-md-12">
                                        <label for="correo" class="titulo">E-mail <span class="text-danger">*</span></label>
                                        <div class="input-group campos">
                                            <input type="email" name="correo" id="correo" class="form-control campos" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-5">
                                    <div class="col-md-12">
                                        <label for="clave" class="titulo">Contraseña <span class="text-danger">*</span></label>
                                        <div class="input-group campos">
                                            <input type="password" name="clave" id="clave" class="form-control campos" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button type="submit" class="btnR" id="botonD">Registrar</button>
                                    <!-- <button type="submit" class="btnR" id="botonD" name="operacion" value="GuardarUsuarioDos">Registrar</button> -->
                                    <!-- <button type="submit" class="btn btn-outline-warning">Registrar</button> -->
                                </div>
                            </form>
                        </div>
                    </div>
                    <br>
                    <div class="text-center">
                        <p>hecho con <span class="shadow-lg bg-body-tertiary">❤️</span> desde <b>Colombia</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/guardarD.js"></script>
</body>
</html>
