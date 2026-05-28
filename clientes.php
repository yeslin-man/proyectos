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
        include 'model/Clientes.php'; 
    ?>

<!-- contenido -->
    <div class="d-flex">
        <div class="col-md-6">
            <h3 class="titulos mx-4 mt-3"><a href="principal.php" class="text-decoration-none titulos"><i class="fa-solid fa-arrow-left"></i></a> Mis Clientes</h3>
        </div>
        <div class="col-md-6 text-end mover">
            <button type="button" data-bs-toggle="modal" data-bs-target="#spac" data-bs-whatever="@getbootstrap" class="botones mx-3 mt-3"><i class="fa-solid fa-plus"></i>Nuevo registro</button>
        </div>
    </div>

    
    <br>
    <div class="contenido">
        <div class="targeta shadow-lg rounded">
            <div class="card-header">
                <div class="d-flex">
                    <div class="col-md-8">
                        
                        <!-- modal para agregar -->

                        <div class="modal fade" id="spac" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 titulo" id="exampleModalLabel">Personal del spa</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="frmClientes">
                                    <div class="mb-3">
                                        <label for="nombre" class="col-form-label titulo">Nombre:</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="apellido" class="col-form-label titulo">Apellido:</label>
                                        <input type="text" class="form-control" id="apellido" name="apellido" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="telefono" class="col-form-label titulo">Telefono</label>
                                        <input type="number" class="form-control" id="telefono" name="telefono" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="correo" class="col-form-label titulo">Correo Electonico</label>
                                        <input type="email" class="form-control" id="correo" name="correo" required> 
                                    </div>
                                    <div class="mb-3">
                                        <input type="hidden" class="form-control" id="sucursal" name="sucursal" value="<?php echo $_SESSION['sucursal'] ?>">
                                    </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btnRP" data-bs-dismiss="modal"><i class="fa-solid fa-x"></i> Cancelar</button>
                                        <button type="button" id="botonC" class="botones"><i class="fa-solid fa-save"></i> Guardar</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <form action="#" method="post" class="mover mt-3 mx-5">
                            <div class="d-flex">
                                <input type="text" name="buscar" id="buscar" class="form-control" placeholder="Buscar..." required>
                                <!-- <button class="botones"><span>Buscar</span></button> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <section class="tabla-container table table-responsive">

                    <table class="tabla-spa" id="tabla">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Telefono</th>
                            <th>Email</th>
                            <th>Sucursal</th>
                        </tr>
                        </thead>

                        <tbody id="listaArticulos">
                        <?php foreach($usuarios as $i){ ?>
                            <tr class="articulo">
                               <td><?php echo $i['nombre'] ?></td> 
                               <td><?php echo $i['apellido'] ?></td> 
                               <td><?php echo $i['telefono'] ?></td> 
                               <td><?php echo $i['correo'] ?></td> 
                               <td><label class="rounded-pill <?php if($i['sucursal']=='apartado'){echo 'bg-warning';}else if($i['sucursal']=='sahagun'){echo 'bg-primary';}else{echo 'bg-danger';} ?> p-1 text-white"><?php echo $i['sucursal'] ?></label></td>
                               <h5 id="mensaje" style="display:none; color:red;">
                                    No se encontraron resultados
                                </h5> 
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>

                    <!-- paginador -->
                     <div class="paginador">
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

                    </section>
            </div>
        </div>
    </div>


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/guardarC.js"></script>
    <script src="js/filtro.js"></script>
</body>
</html>