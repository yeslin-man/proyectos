<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estiloDos.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js"></script>
    <link rel="stylesheet" href="../css/all.min.css">
     <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.26.24/dist/sweetalert2.min.css" rel="stylesheet">
    <link rel="icon" href="../img/logoSpa.png" sizes="32x32">
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css"> -->
    <title>Karime Spa - Citas</title>
</head>
<body class="panelP">

    <?php include '../php/menuPrin.php'; 
        include '../model/mostarBuscar.php'
    ?>
    <!-- <div class="componente">
    </div> -->

<!-- contenido -->

    <div class="content">
        <div class="row p-2 mb-3">
            <h3 class="titulo mb-4 mt-2"><b>Busca tu Cita</b></h3>
            <div class="col-md-12">
                <div class="card shadow-lg p-1 mb-5 bg-body rounded">
                    <form action="" method="post" autocomplete="off">
                        <div class="d-flex">
                            <input type="text" name="cliente" id="cliente" class="form-control" placeholder="Busca tu cita con tu nombre" required>
                            <button class="btn btn-outline-success" name="buscar"><i class="fa-solid fa-search"></i> Buscar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <hr>

        <!-- contenido cuando busca -->
        
        <?php if(isset($_REQUEST['buscar'])){ ?>
        <div class="row">
            <div class="col-md-7">
                <div class="p-2 mb-5">
                    <!-- <table class="table table-bordered shadow-lg p-1 bg-body rounded"> -->
                    <table>
                        <thead>
                            <tr>
                                <th colspan="4" class="text-start">Mis Citas</th>
                            </tr>
                            <tr>
                                <th>Servicio</th>
                                <th>Fecha</th>
                                <th>Hora</th>
                                <th class="text-center">Operación</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                foreach($usuarios as $i){ 
                            ?>
                            <tr>
                                <td><?php echo $i['servicio'] ?></td>
                                <td><?php echo $i['fecha'] ?></td>
                                <td><?php echo $i['hora'] ?></td>
                                <td class="text-center">
                                    <a href="#" 
                                        class="operar"
                                        data-id="<?php echo $i['id_cita'] ?>"
                                        data-servicio="<?php echo $i['servicio'] ?>"
                                        data-fecha="<?php echo $i['fecha'] ?>"
                                        data-hora="<?php echo $i['hora'] ?>">
                                        Reagendar
                                    </a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <?php //if(isset($_REQUEST['operacion'])){ ?>
            
                <div class="col-md-5" id="formulario">
                    <div class="shadow-sm mb-5 bg-body rounded">
                        <div class="container p-3 formulario">
                            <h4 class="text-white">Actualizar Cita</h4>
                        </div>
                        <!-- <hr> -->
                        <div class="p-3">
                            <form id="formOperar">
                                <div class="form-group">
                                    <label for=""><b>Servicio</b></label>
                                    <input type="hidden" name="id_cita" id="id_cita" class="form-control" required>
                                    <input type="text" name="servicio" id="servicio" class="form-control" required>
                                </div><br>
                                <div class="form-group">
                                    <label for=""><b>Fecha</b></label>
                                    <input type="date" name="fecha" id="fecha" class="form-control" required>
                                </div><br>
                                <div class="form-group">
                                    <label for=""><b>Hora</b></label>
                                    <input type="time" name="hora" id="hora" class="form-control" required>
                                </div>
                                <br>
                                <div class="d-flex gap-2 col-6 mx-auto">
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                    <button name="operacion" value="Editar" class="btn btn-primary">Editar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php //} ?>
        </div>
        <?php } ?>

    </div>
    <footer>
        <?php include '../php/pie.php'; ?>
    </footer>
    




    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.26.24/dist/sweetalert2.all.min.js"></script>

    <script src="../js/all.min.js"></script>
    <script src="../js/operar.js"></script>
    <script src="../js/eliminarCita.js"></script>
    <script src="../js/editarCita.js"></script>
</body>
</html>