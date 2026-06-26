<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estiloReserva.css">
    <link rel="stylesheet" href="../css/estiloDos.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js"></script>
    <link rel="icon" href="../img/logoSpa.png" sizes="32x32">
    <title>Reserva</title>
</head>
<body>
    <?php include '../php/menuPrin.php'; 
        include '../model/ServiciosDos.php';
        // include '../model/usuarioServi.php';
    ?>
    <div class="d-flex justify-content-center mt-3">
    <div class="col-md-11">
        <div class="row">
            <div class="col-md-8">
                <div class="card shadow-none p-3 mb-3 bg-light rounded ">
                    <div class="row">
                        <label class="accionUno">1. Selecciona un servicio</label>
                            <div class="col-md-2">
                                <div class="card shadow-lg p-3 mb-1 bg-body rounded text-center tarjeta" id="mostrarServicio">
                                    <div class="d-flex justify-content-end">
                                        <input type="checkbox" name="servicio" id="servicio">
                                    </div>
                                    <img src="../icon/facebook.png" alt="" class="imagenReserva d-block mx-auto">
                                    <h4 class="titulo">Masaje</h4>
                                    <p class="precioRe">$30.000</p>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="card shadow-none p-3 mb-3 bg-light rounded ">
                    <div class="row">
                        <label class="accionUno">2. Selecciona un empleado</label>
                            <div class="col-md-2">
                                <div class="card shadow-lg p-3 mb-1 bg-body rounded text-center tarjeta" id="mostrarEmpleado">
                                    <div class="d-flex justify-content-end">
                                        <input type="checkbox" name="empleado" id="empleado">
                                    </div>
                                    <img src="../icon/facebook.png" alt="" class="imagenReserva d-block mx-auto">
                                    <h4 class="titulo">Masaje</h4>
                                    <!-- <p class="precio">$30.000</p> -->
                                </div>
                            </div>
                    </div>
                </div>
                <div class="card shadow-none p-3 mb-3 bg-light rounded ">
                    <div class="row">
                        <div class="col-md-7">
                            <label class="accionUno">3. Selecciona un fecha</label>
                            <div class="col-md-2">
                                <div class="card shadow-lg p-3 mb-1 bg-body rounded text-center tarjeta" id="mostrarEmpleado">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="accionUno">4. Selecciona la hora</label>
                            <div class="row">
                                <?php 
                                    for($i=8; $i<=18; $i++){ 
                                    if($i > 12){ 
                                ?>
                                    <div class="col-md-3">
                                        <div class="card shadow-lg mb-1 bg-body rounded tarjeta">
                                            <p class="text-center mt-1 precioRe"><?php echo $hora = $i - 12; ?>:00 PM</p>
                                        </div>
                                    </div>
                                <?php }else{ ?>
                                    <div class="col-md-3">
                                        <div class="card shadow-lg mb-1 bg-body rounded tarjeta">
                                            <p class="text-center mt-1 precioRe"><?php echo $hora = $i; ?>:00 AM</p>
                                        </div>
                                    </div>
                                <?php } } ?>
                            </div>
                            <p class="precioRe mt-3">Horario de atención Lunes a Sabado 8:00 AM - 7:00 PM</p>
                        </div>
                    </div>
                </div>
                <div class="text-center d-grid gap-2 col-6 mx-auto mb-4">
                    <button class="btn btn-primary">Continuar y confirmar</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-none p-3 mb-3 bg-light rounded ">
                    <div class="card-header">
                        <label class="accionUno"><b>Resumen de tu cita</b></label>
                    </div>
                    <div class="card-body text-start">
                        <!-- <div class="d-flex justify-content-between"> -->
                            <p class="resumen mb-3">Servicio</p>
                            <p class="resumen mb-3">Empleado</p>
                            <p class="resumen mb-3">Fecha</p>
                            <p class="resumen mb-3">Hora</p>
                            <!-- <p class="resumen"></p> -->
                        <!-- </div> -->
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between">
                            <p>Total</p>
                            <h5>$30.000</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


<script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/all.min.js"></script>
    <script src="../js/filtroDos.js"></script>
    <script src="../js/filtroB.js"></script>
    <script src="../js/reserva.js"></script>
</body>
</html>