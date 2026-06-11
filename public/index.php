<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estiloDos.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js"></script>
    <link rel="icon" href="../img/logoSpa.png" sizes="32x32">
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css"> -->
    <title>Karime Spa - Agenda</title>
</head>
<body class="panelP">

    <?php include '../php/menuPrin.php'; 
        include '../model/Publico.php';
    ?>
    <div class="componente">
        
        <div class="overlay"></div>

        <h4 class="mensaje">
            <span class="mensajes">Karime Spa</span> <br>
            <p class="alargar">Un espacio creado para renovar tu cuerpo, relajar tu mente y
            consentir tu bienestar.</p>
        </h4>

    </div>

<!-- contenido -->

    <div class="content">
        <div class="row p-4 mt-4 mb-4 animar">
            <div class="col-md-4">
                <div class="parrafo_ini">
                    <h3 class="titulo"><b><i class="fa-solid fa-leaf"></i> <?php echo $agendasR['titulo'] ?></b></h3>
                    <p class="parrafo"><?php echo $agendasR['descripcion'] ?></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?php echo $agendasR['foto'] ?>" class="PrimeraImg" alt="">
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo $agendasR['foto'] ?>" class="PrimeraImg imagen_uno" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row animar">
            <div class="col-md-6 mb-5 d-flex justify-content-center">
                <div class="">
                    <img src="<?php echo $spaK['foto'] ?>" class="PrimeraImgR circular shadow-lg bg-body" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="">
                    <h3 class="titulo mb-2"><i class="fa-solid fa-leaf"></i> <b><?php echo $spaK['titulo'] ?></b></h3>
                    <p class="parrafo"><?php echo $spaK['descripcion'] ?></p>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <h3 class="titulo mb-4 mt-2"><i class="fa-solid fa-leaf"></i> <b>Nuestros Servivios</b></h3>
            <?php 
                include '../model/ServiciosTres.php';
                foreach($usuarios as $i){ 
            ?>
                <div class="col-6 col-md-4 col-lg-3 animar">
                    <div class="mb-4">

                        <div class="contenedor servicio-card"
                            data-bs-toggle="modal"
                            data-bs-target="#ver<?php echo $i['id_servicio'] ?>"
                            data-bs-whatever="@getbootstrap">

                            <div class="imagen-servicio">
                                <img src="../img/<?php echo $i['foto'] ?>" class="marte" alt="">
                            </div>

                            <div class="card-body">
                                <h3 class="titulo_servicio mt-3">
                                    <?php echo $i['servicio'] ?>
                                </h3>

                                <p class="parrafoC">
                                    <?php echo $i['descripcion'] ?>
                                </p>

                                <span class="btn-servicio">
                                    Ver Más →
                                </span>
                            </div>

                        </div>

                    </div>
                </div>



            <!-- <div class="col-6 col-md-4 col-lg-3">
                <div class="mb-3">

                    <div class="contenedor shadow-lg rounded" data-bs-toggle="modal" data-bs-target="#ver<?php //echo $i['id_servicio'] ?>" data-bs-whatever="@getbootstrap">
                        
                        <img src="../img/<?php //echo $i['foto'] ?>" class="marte" alt="">

                        <div class="card-body p-2">
                            <h3 class="titulo text-center titulo_servicio"><?php //echo $i['servicio'] ?></h3>
                            <hr>
                            <p class="parrafoC"><?php //echo $i['descripcion'] ?></p>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- modal -->

            <div class="modal fade" id="ver<?php echo $i['id_servicio'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-capitalize" id="exampleModalLabel"><?php echo $i['servicio'] ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="../img/<?php echo $i['foto'] ?>" class="marte" alt="">
                            </div>
                            <div class="col-md-8">
                                <div class="mt-3">
                                    <label><b>Descripción</b>:</label><br>
                                    <p><?php echo $i['descripcion'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <a href="servicios.php" class="btn btn-primary">Más Servicios</a>
                    </div>
                    </div>
                </div>
            </div>

            <!-- fin modal -->


            <?php } ?>
        </div>
        <div class="testimonio mb-5 p-2 animar">
            <h3 class="titulo text-center"><i class="fa-solid fa-leaf"></i> <b>Testimonio</b></h3>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <?php foreach($testamento as $i){ ?>
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <p class="text-center">
                                    <?php echo $i['descripcion'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <!-- <div class="col-md-6">
                    <p class="text-center">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus labore adipisci obcaecati alias minus vitae delectus sed praesentium perspiciatis, molestiae temporibus assumenda numquam id dolorem dicta quasi blanditiis laboriosam illo.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus labore adipisci obcaecati alias minus vitae delectus sed praesentium perspiciatis, molestiae temporibus assumenda numquam id dolorem dicta quasi blanditiis laboriosam illo.
                    </p>
                </div> -->
            </div>
        </div>
        <div class="row animar">
            <div class="col-md-6">
                <br><br><br>
                <img src="../img/logoSpa.png" class="PrimeraImgRe" alt="">
            </div>
            <div class="col-md-6">
                
                <form action="" method="post" class="form-contacto">
                    <h3 class="titulo-formulario">Contáctanos</h3>

                    <div class="form-group mb-3">
                        <label>Nombre</label>
                        <input type="text" name="nombre" class="form-control campo" placeholder="Ingrese su nombre" required>
                    </div>

                    <div class="form-group mb-3">
                        <label>Correo electrónico</label>
                        <input type="email" name="correo" class="form-control campo" placeholder="correo@ejemplo.com" required>
                    </div>

                    <div class="form-group mb-3">
                        <label>Teléfono</label>
                        <input type="tel" name="telefono" class="form-control campo" placeholder="3001234567" required>
                    </div>

                    <div class="form-group mb-4">
                        <label>Mensaje</label>
                        <textarea name="mensaje" rows="5" class="form-control campo" placeholder="Escriba su mensaje"></textarea>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn-enviar">
                            <i class="fas fa-paper-plane"></i> Enviar Mensaje
                        </button>
                    </div>
                </form>
                    
            </div>
        </div>
    </div>
    <footer>
        <?php include '../php/pie.php'; ?>
    </footer>
    




    <script src="../js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script> -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js"></script> -->

    <script src="../js/all.min.js"></script>
    <!-- <script src="js/script.js"></script> -->
    <!-- <script src="js/dataTable.js"></script>
    <script src="js/guardarA.js"></script> -->
</body>
</html>