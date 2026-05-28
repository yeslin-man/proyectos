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

    <div class="componente">
        
    <?php include '../php/menuPrin.php'; ?>

    <h4 class="mensaje">
        Karime Spa <br>
        Un espacio creado para renovar tu cuerpo, relajar tu mente y <br> consentir tu bienestar.
    </h4>
    </div>

<!-- contenido -->

    <div class="content">
        <div class="row p-4 mt-4 mb-4">
            <div class="col-md-4">
                <div class="parrafo_ini">
                    <h3 class="titulo"><b><i class="fa-solid fa-leaf"></i> Nombre Evento</b></h3>
                    <p class="parrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur sequi accusamus iure eum delectus amet molestiae commodi facere explicabo alias? Excepturi, expedita repudiandae a quis odio suscipit recusandae ut natus!</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-6">
                        <img src="../img/logoSpa.png" class="PrimeraImg" alt="">
                    </div>
                    <div class="col-md-6">
                        <img src="../img/logoSpa.png" class="PrimeraImg imagen_uno" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-5 d-flex justify-content-center">
                <div class="card shadow-lg p-3 mb-5 bg-body rounded">
                    <img src="../img/logoSpa.png" class="PrimeraImg" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="">
                    <h3 class="titulo mb-2"><i class="fa-solid fa-leaf"></i> <b>Karime Spa</b></h3>
                    <p class="parrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur sequi accusamus iure eum delectus amet molestiae commodi facere explicabo alias? Excepturi, expedita repudiandae a quis odio suscipit recusandae ut natus!</p>
                    <p class="parrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur sequi accusamus iure eum delectus amet molestiae commodi facere explicabo alias? Excepturi, expedita repudiandae a quis odio suscipit recusandae ut natus!</p>
                    <p class="parrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur sequi accusamus iure eum delectus amet molestiae commodi facere explicabo alias? Excepturi, expedita repudiandae a quis odio suscipit recusandae ut natus!</p>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <h3 class="titulo mb-4 mt-2"><i class="fa-solid fa-leaf"></i> <b>Servivios</b></h3>
            <?php 
                include '../model/ServiciosTres.php';
                foreach($usuarios as $i){ 
            ?>
            <div class="col-12 col-md-4 col-lg-3">
                <div class="mb-3">
                    <!-- <div class="card-header">
                        </div> -->
                    <div class="contenedor" type="button" data-bs-toggle="modal" data-bs-target="#ver<?php echo $i['id_servicio'] ?>" data-bs-whatever="@getbootstrap">
                        
                        <img src="../img/<?php echo $i['foto'] ?>" class="marte" alt="">

                        <div class="capa"></div>

                        <div class="montar">
                            <h3 class="titulo"><?php echo $i['servicio'] ?></h3>
                            <!-- <h4  class=" text-center precio"><b><?php //echo '$ '. number_format($i['precio']) ?></b></h4> -->
                        </div>
                    </div>
                </div>
            </div>

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
        <div class="testimonio mb-5 p-2">
            <h3 class="titulo text-center "><i class="fa-solid fa-leaf"></i> <b>Testimonio</b></h3>
            <p class="text-center">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus labore adipisci obcaecati alias minus vitae delectus sed praesentium perspiciatis, molestiae temporibus assumenda numquam id dolorem dicta quasi blanditiis laboriosam illo.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus labore adipisci obcaecati alias minus vitae delectus sed praesentium perspiciatis, molestiae temporibus assumenda numquam id dolorem dicta quasi blanditiis laboriosam illo.
            </p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="../img/logoSpa.png" class="PrimeraImg" alt="">
            </div>
            <div class="col-md-6">
                <div class="card shadow-lg p-1 mb-5 bg-body rounded">
                    <div class="card-header text-center"><h3 class="titulo">Deja tu mensaje</h3></div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group mb-3">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="correo">Correo electronico</label>
                                <input type="Email" name="correo" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="telefono">Telefono</label>
                                <input type="number" name="telefono" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="mensaje">Mensaje</label>
                                <textarea name="mensaje" id="" class="form-control"></textarea>
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-primary">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
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