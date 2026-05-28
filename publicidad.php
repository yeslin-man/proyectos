<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="icon" href="img/logoSpa.png" sizes="32x32">
    <title>Karime Spa - Clientes</title>
</head>
<body>

    <?php 
        include 'php/menu.php'; 
    ?>

<!-- contenido -->
    <div class="d-flex">
        <div class="col-md-6">
        </div>
        <!-- <div class="col-md-6 text-end mover">
            <button type="button" data-bs-toggle="modal" data-bs-target="#spac" data-bs-whatever="@getbootstrap" class="botones mx-3 mt-3"><i class="fa-solid fa-plus"></i>Nuevo registro</button>
        </div> -->
    </div>

    
    <br>
    <div class="contenido Publivo">
    
        <!-- MENU -->
        <div class="sidebar">

        <div class="logo">
            <h3 class="titulos mx-4 mt-3"><a href="principal.php" class="text-decoration-none titulos"><i class="fa-solid fa-arrow-left"></i></a> Publicaciones</h3>

        </div>

            <ul class="menu">

                <li>
                    <a href="publicidad.php?operacion=evento">
                        <i class="fa-solid fa-house"></i>
                        <span>Evento</span>
                    </a>
                </li>

                <li>
                    <a href="publicidad.php?operacion=somos">
                        <i class="fa-solid fa-users"></i>
                        <span>¿Quiénes somos?</span>
                    </a>
                </li>

                <li>
                    <a href="publicidad.php?operacion=spa">
                        <i class="fa-solid fa-spa"></i>
                        <span>Karime Spa</span>
                    </a>
                </li>
                <li>
                    <a href="publicidad.php?operacion=testimonio">
                        <i class="fa-solid fa-bullhorn"></i>
                        <span>Testimonio</span>
                    </a>
                </li>

            </ul>

        </div>

        <!-- CONTENIDO -->
        <div class="contenidoPubli">
            <div class="d-flex justify-content-start ">
                <div class="col-md-8">
                    <!-- <div class="card"> -->
                        
                        <!-- <div class="card-body"> -->
                        <form class="contenedorX" id="frmAgendaC">
                            <?php if(!isset($_REQUEST['operacion'])){ ?>
                                <p class="text-center">
                                    ¡Bienvenido! <br><br>
                                    Comparte tus ideas, experiencias y momentos con el mundo.
                                    Crea publicaciones de forma rápida, sencilla y profesional.
                                </p>
                            <?php } else{?>

                            <h2 class="text-capitalize"><?php if(isset($_REQUEST['operacion'])){echo $_REQUEST['operacion'];} ?></h2>

                            <div class="grupo">
                                <input type="text" name="titulo" id="titulo" required>
                                <label>Titulo</label>
                            </div>

                            <div class="grupo">
                                <textarea name="descripcion" id="descripcion"></textarea>
                                <label>Descripcion</label>
                            </div>
                            <?php if(isset($_REQUEST['operacion']) && $_REQUEST['operacion'] == 'testimonio'){ }else{ ?>
                            <div class="grupo">
                                <input type="file" name="foto" id="foto">
                                <label>Seleciona Imagenes</label>
                            </div>
                            <?php } ?>
                            <button id="botonAg" class="btn text-white botonCita">Publicar</button>

                            <?php } ?>
                        </form>
                    <!-- </div> -->
                <!-- </div> -->
            </div>
        </div>

        </div>

    </div>


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/guardarC.js"></script>
    <script src="js/filtro.js"></script>
</body>
</html>