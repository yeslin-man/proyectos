<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js"></script>
    <link rel="icon" href="img/logoSpa.png" sizes="32x32">
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css"> -->
    <title>Karime Spa - Agenda</title>
</head>
<body class="bodyPrin">

    <?php include 'php/menu.php'; 
        include 'model/Servicios.php';
    ?>

<!-- contenido -->
    <h3 class="titulos mx-4 mt-3"><a href="principal.php" class="text-decoration-none titulos"><i class="fa-solid fa-arrow-left"></i></a>Agenda de citas</h3>
    <br>
    <div class="contenido">
        <div class="shadow-lg rounded p-2 mb-3">
            <section class="agenda-container">
                <div id="calendario"></div>
            </section>
        </div>
    </div>

    <!-- modal -->

    <!-- <div class="col-md-8"> -->
        <!-- <button type="button" data-bs-toggle="modal" data-bs-target="#agenda" data-bs-whatever="@getbootstrap" class="btn btn-primary mx-1"><i class="fa-solid fa-plus"></i></button> -->
        <!-- modal para agregar -->
            <div class="modal fade" id="agenda" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 titulos" id="exampleModalLabel">Agendar Cita</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="frmAgendaC">
                    <div class="mb-3">
                        <label for="cliente" class="col-form-label titulo">Cliente:</label>
                        <!-- <input type="hidden" class="form-control campos" id="dia" name="dia" required> -->
                        <input type="text" class="form-control campos" id="cliente" name="cliente" required>
                    </div>
                    <div class="mb-3">
                        <label for="servicio" class="col-form-label titulo">Servicios:</label>
                        <select name="servicio" id="servicio" class="form-control campos text-capitalize">
                            <?php foreach($usuarios as $i){ ?>
                            <option value="<?php echo $i['id_servicio'] ?>"><?php echo $i['servicio'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="fecha" class="col-form-label titulo">Fecha</label>
                        <input type="date" class="form-control campos" id="fecha" name="fecha" required>
                    </div>
                    <div class="mb-3">
                        <label for="hora" class="col-form-label titulo">Hora</label>
                        <input type="time" class="form-control campos" id="hora" name="hora" required>
                    </div>
                    <div class="mb-3">
                        <?php include 'model/Usuarios.php';  ?>
                        <label for="usuario" class="col-form-label titulo">Empleado del spa:</label>
                        <select name="idusuario" id="idusuario" class="form-control campos text-capitalize">
                            <?php foreach($usuarios as $i){ ?>
                            <option value="<?php echo $i['nombre'].' '.$i['apellido'] ?>"><?php echo $i['nombre'].' '.$i['apellido'] ?></option>
                            <?php } ?>
                        </select>
                        <input type="hidden" class="form-control" id="sucursal" name="sucursal" value="<?php echo $_SESSION['sucursal'] ?>">
                    </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btnRP" data-bs-dismiss="modal"><i class="fa-solid fa-x"></i> Cancelar</button>
                        <button id="botonAg" class="botones"><i class="fa-solid fa-save"></i> Guardar Cita</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    <!-- </div> -->


    <!-- modal de evento -->
        <div class="modal fade" id="agendaEvento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 titulos" id="exampleModalLabel">Detalle de la cita</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="frmAgendaEditar">
                    <div class="mb-3">
                        <label for="cliente" class="col-form-label titulo">Cliente:</label>
                        <input type="hidden" class="form-control campos" id="id_uno" name="id_cita" required>
                        <input type="text" class="form-control campos" id="cliente_uno" name="cliente" required>
                    </div>
                    <div class="mb-3">
                        <label for="servicio" class="col-form-label titulo">Servicios:</label>
                        <select name="servicio" id="servicio_uno" class="form-control campos">
                            <option value="Masaje">Masaje</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="fecha" class="col-form-label titulo">Fecha</label>
                        <input type="date" class="form-control campos" id="fecha_uno" name="fecha" required>
                    </div>
                    <div class="mb-3">
                        <label for="hora" class="col-form-label titulo">Hora</label>
                        <input type="time" class="form-control campos" id="hora_uno" name="hora" required>
                    </div>
                    <div class="mb-3">
                        <label for="usuario" class="col-form-label titulo">Empleado del spa:</label>
                        <input type="text" class="form-control campos" id="idusuario_uno" name="idusuario" required>
                        <input type="hidden" class="form-control" id="sucursal_uno" name="sucursal" value="<?php echo $_SESSION['sucursal'] ?>">
                    </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btnRP" data-bs-dismiss="modal"><i class="fa-solid fa-x"></i> Cancelar</button>
                        <button id="botonAg" class="botones"><i class="fa-solid fa-pen"></i> Editar</button>
                    </div>
                </form>
                </div>
            </div>
        </div>




    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script> -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js"></script> -->

    <script src="js/all.min.js"></script>
    <!-- <script src="js/script.js"></script> -->
    <script src="js/dataTable.js"></script>
    <script src="js/guardarA.js"></script>
</body>
</html>