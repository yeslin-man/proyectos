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
        <div class="row p-1 mb-5">
            <h3 class="titulo mb-4 mt-2"><i class="fa-solid fa-leaf"></i> <b>Servivios</b></h3>
            <div class="col-md-3 mb-3">
                <div class="mt-3 sticky-top shadow-lg p-3 mb-5 rounded tarjetaBu">
                    <div class="text-center ">
                        <input type="text" name="buscar" id="buscar" class="form-control buscar_s" placeholder="Buscar..." required>
                    </div>
                    <br>
                    <div class="text-start">
                        <details>
                            <summary>  
                                Sucursales  
                            </summary>
                            <?php 
                                $sucursalesMostradas = [];
                                foreach($usuarios as $i){ 
                                if(!in_array($i['sucursal'], $sucursalesMostradas)){
                            ?>
                                <a href="" data-id="<?php echo $i['id_servicio'] ?>" data-sucursal="<?php echo $i['sucursal'] ?>" class="mb-3 mt-3 sucursal text-decoration-none filtroSucursal"><?php echo $i['sucursal'] ?></a><br>
                            <?php 
                                    $sucursalesMostradas[] = $i['sucursal'];
                                    }
                                }  
                            ?>
                        </details>
                        <br>
                        <details>
                            <summary>  
                                Tipos de Servicios  
                            </summary>
                            <?php foreach($usuarios as $i){ ?>
                                <a href="" data-id="<?php echo $i['id_servicio'] ?>" data-sucursal="<?php echo $i['sucursal'] ?>" data-servicio="<?php echo $i['servicio'] ?>" class="mt-3 sucursal text-decoration-none filtroServicio"><?php echo $i['servicio'] ?></a><br>
                            <?php } ?>
                        </details>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row" id="listaArticulos">
                    
                        <h5 id="mensaje" style="display:none; color:red;" class="mt-5 text-center">
                            No se encontraron resultados
                        </h5>
                    <?php 
                        
                        foreach($usuarios as $i){ 
                    ?>
                    <div class="col-12 col-md-4 col-lg-4 articulo cardServicio" data-sucursal="<?php echo strtolower($i['sucursal']) ?>" data-servicio="<?php echo strtolower($i['servicio']) ?>">
                        <div class="mb-3">
                            <div class="contenedor" type="button" data-bs-toggle="modal" data-bs-target="#ver<?php echo $i['id_servicio'] ?>" data-bs-whatever="@getbootstrap">
                                
                                <img src="../img/<?php echo $i['foto'] ?>" class="marte" alt="">
        
                                <div class="capa"></div>
        
                                <div class="montar">
                                    <h3 class="titulo"><?php echo $i['servicio'] ?></h3>
                                    <h4  class=" text-center precio"><b><?php echo '$ '. number_format($i['precio']) ?></b></h4>
                                </div>
                                <!-- <p class="text-secondary texto">
                                    <?php //echo $i['descripcion'] ?>
                                </p> -->
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
                                            <div class="mt-3 mb-2">
                                                <label><b>Descripción</b>:</label><br>
                                                <p><?php echo $i['descripcion'] ?></p>
                                            </div>
                                            <div class="text-start">
                                                <h3 class="titulo p-2"><mark class="rounded-pill"><?php echo '$ '. number_format($i['precio']) ?></mark></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button> -->
                                    <a href="agendarCita.php?servicio=<?php echo $i['servicio'] ?>&idusuario=<?php echo $i['nombre'].' '.$i['apellido'] ?>&sucursal=<?php echo $i['sucursal'] ?>" class="btn btn-primary">Agendar Cita</a>
                                </div>
                                </div>
                            </div>
                        </div>

                        <!-- fin modal -->

                    <?php } ?>
                    <!-- paginador -->
                    <div class="paginador" id="tabla">
                        <?php if ($pagina > 1): ?>
                            <a href="?pagina=<?= $pagina - 1 ?>">Anterior</a>
                        <?php endif; ?>
        
                        <?php for ($i = 1; $i <= $total_paginas; $i++): ?>
                            <a href="?pagina=<?= $i ?>" class="<?= ($i == $pagina) ? 'activo' : '' ?>">
                                <?= $i ?>
                            </a>
                        <?php endfor; ?>
        
                        <?php if ($pagina < $total_paginas): ?>
                            <a href="?pagina=<?= $pagina + 1 ?>">Siguiente</a>
                        <?php endif; ?>
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
    <script src="../js/filtroDos.js"></script>
    <script src="../js/filtroB.js"></script>
    <!-- <script src="js/script.js"></script> -->
    <!-- <script src="js/dataTable.js"></script>
    <script src="js/guardarA.js"></script> -->
</body>
</html>