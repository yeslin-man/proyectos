<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estiloIndex.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="icon" href="img/logoSpa.png" sizes="32x32">
    <title>Karime Spa - Inicio de sesión</title>
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
                        <h5 class="titulo"><span class="ladoUno">Iniciar Sesión</span> <!--span class="ladoDos"></span--></h5>
                    </div>
                    <div class="card-body p-3">
                        <div class="mt-3">
                            <form action="controller/Login.php" method="POST">
                                <div class="form-group mb-3">
                                    <div class="col-md-12">
                                        <label for="usuario" class="titulo opcion">Email</label>
                                        <!-- <input type="email" name="correo" id="correo" class="form-control campo" required> -->
                                         <div class="input-group mb-3 campos">
                                            <span class="input-group-text campo_icono" id="basic-addon1"><i class="fa-solid fa-at text-secondary"></i></span>
                                            <input type="email" class="form-control" name="correo" id="correo" placeholder="Email" aria-label="correo" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-5">
                                    <div class="col-md-12">
                                        <label for="clave" class="titulo opcion">Contraseña</label>
                                        <!-- <input type="password" name="clave" id="clave" class="form-control campo" required> -->
                                         <div class="input-group mb-3 campos">
                                            <span class="input-group-text campo_icono" id="basic-addon1"><i class="fa-solid fa-lock text-warning"></i></span>
                                            <input type="password" name="clave" id="clave" class="form-control" placeholder="contraseña" aria-label="clave" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <a href="" class="text-dark text-decoration-none">¿Olvidaste tu contraseña?</a>
                                    </div>
                                </div>
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btnR">Ingresar</button>
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
</body>
</html>