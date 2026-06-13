<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estiloDos.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.26.24/dist/sweetalert2.min.css" rel="stylesheet">
    <link rel="icon" href="../img/logoSpa.png" sizes="32x32">
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css"> -->
    <title>Karime Spa - Servicio</title>
</head>
<body class="panelP">

    <?php include '../php/menuPrin.php'; 
        include '../model/ServiciosDos.php';
        // include '../model/usuarioServi.php';
    ?>
    <!-- <div class="componente">
    </div> -->

<!-- contenido -->
<br>
    <div class="content">
        <div class="d-flex justify-content-center">
            <div class="col-md-8">
                <!-- <div class="card"> -->
                
                    <!-- <div class="card-body"> -->
                        <form class="contenedorX" id="frmAgendaC">

                            <h2><a href="servicios.php?accion=Servicios" class="text-decoration-none" title="Ir a servicios">⬅</a> Formulario de citas</h2>

                            <div class="grupo">
                                <input type="text" name="cliente" id="cliente" required>
                                <label>Nombre Completo</label>
                            </div>

                            <div class="grupo">
                                <input type="text" name="servicio" id="servicio" value="<?php echo $_REQUEST['servicio'] ?>" readonly>
                                <label>Servicio</label>
                            </div>

                            <div class="grupo">
                                <input type="date" name="fecha" id="fecha" required>
                                <label>Fecha</label>
                            </div>
                            <div class="grupo">
                                <?php
                                    $inicio = strtotime("7:00 AM");
                                    $fin = strtotime("8:00 PM"); 
                                ?>
                                <select name="hora" id="hora">
                                    <option>Seleccione la hora</option>
                                    <?php while($inicio <= $fin){ ?>
                                        <option value="<?php echo date("h:i A", $inicio)."<br>" ?>"><?php echo date("h:i A", $inicio)."<br>" ?></option>
                                    <?php $inicio = strtotime("+1 hour", $inicio);  } ?>
                                </select>
                                <div id="resultado"></div>
                                <!-- <input type="hora" name="hora" id="hora" required>
                                <label>Hora</label> -->
                            </div>
                            <div class="grupo">
                                <input type="text" name="idusuario" id="idusuario" value="<?php echo $_REQUEST['idusuario'] ?>" readonly>
                                <label>Profecional</label>
                            </div>
                            <div class="grupo">
                                <input type="texto" name="sucursal" id="sucursal" value="<?php echo $_REQUEST['sucursal'] ?>" readonly>
                                <label>Sucursal</label>
                            </div>

                            <button id="botonAg" class="btn text-white botonCita">Separa Cita</button>

                        </form>
                        <br><br>
                    <!-- </div> -->
                <!-- </div> -->
            </div>
        </div>
        
    </div>
    <footer>
        <?php include '../php/pie.php'; ?>
    </footer>
    




    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.26.24/dist/sweetalert2.all.min.js"></script>
    
    <script src="../js/all.min.js"></script>
    <script src="../js/filtroDos.js"></script>
    <script src="../js/filtroB.js"></script>
    <script src="../js/guardarB.js"></script>
    <script src="../js/change.js"></script>
</body>
</html>