<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="icon" href="img/logoSpa.png" sizes="32x32">
    <title>Karime Spa - Servicios</title>
</head>
<body>

    <?php 
        include 'php/menu.php'; 
        include 'model/Servicios.php';
        include 'model/usuarioServi.php';
    ?>

<!-- contenido -->
 <div class="d-flex">
    <div class="col-md-6">
        <h3 class="titulos mx-4 mt-3"><a href="principal.php" class="text-decoration-none titulos"><i class="fa-solid fa-arrow-left"></i></a> Servicios</h3>
    </div>
    <div class="col-md-6 text-end mover">
        <button type="button" data-bs-toggle="modal" data-bs-target="#servicio" data-bs-whatever="@getbootstrap" class="botones mx-3 mt-3"><i class="fa-solid fa-plus"></i>Nuevo registro</button>
    </div>
 </div>
    <br>
    <div class="contenido">
        <div class=" p-2 shadow-lg rounded">
            <div class="card-header">
                <div class="d-flex">
                    <div class="col-md-8">
                        
                        <!-- modal para agregar -->

                        <div class="modal fade" id="servicio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 titulo" id="exampleModalLabel">Servicios para citas</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="frmServicio" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="servicio" class="col-form-label titulo">Servicio:</label>
                                        <input type="text" class="form-control" id="servicio" name="servicio" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="descripcion" class="col-form-label titulo">Descripción:</label>
                                        <textarea name="descripcion" id="descripcion" class="form-control" required></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="precio" class="col-form-label titulo">Precio</label>
                                        <input type="number" class="form-control" id="precio" name="precio" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="foto" class="col-form-label titulo">foto</label>
                                        <input type="file" class="form-control" id="foto" name="foto" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="usuario" class="col-form-label titulo">Empleado del spac</label>
                                        <select name="idusuario" id="idusuario" class="form-control">
                                            <option>Seleccione un empleado</option>
                                            <?php foreach($usuariosB as $s){ ?>
                                            <option value="<?php echo $s['id_usuario'] ?>"><?php echo $s['nombre'].' '.$s['apellido'] ?></option>
                                            <?php } ?>
                                        </select> 
                                        <input type="hidden" class="form-control" id="sucursal" name="sucursal" value="<?php echo $_SESSION['sucursal'] ?>">
                                    </div>
                                    

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btnRP" data-bs-dismiss="modal"><i class="fa-solid fa-x"></i> Cancelar</button>
                                        <button type="button" id="botonS" class="botones"><i class="fa-solid fa-save"></i> Guardar</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>

                        <!-- modal para agregar -->
                         
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
                    <h4 id="mensaje" style="display:none; color:red;">
                        No se encontraron resultados
                    </h4> 
                    <table class="tabla-spa" id="tabla">
                        <thead>
                        <tr>
                            <th>Servicio</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Usuario</th>
                            <th>Opción</th>
                        </tr>
                        </thead>

                        <tbody id="listaArticulos">
                        <?php foreach($usuarios as $i){ ?>
                            <tr class="articulo">
                               <td class="text-capitalize"><?php echo $i['servicio'] ?></td> 
                               <td class="text-capitalize"><?php echo $i['descripcion'] ?></td> 
                               <td class="text-capitalize"><?php echo '$'. number_format($i['precio']) ?></td> 
                               <td><b class="text-capitalize"><?php echo $i['nombre'].' '.$i['apellido'] ?></b></td>
                               <td>
                                <button type="button" onclick="eliminarSer('<?php echo $i['id_servicio'] ?>');" class="btn btn-danger">Eliminar</button>
                               </td>
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
    <script src="js/guardarS.js"></script>
    <script src="js/filtro.js"></script>
    <script src="js/eliminar.js"></script>
    <!-- <script src="js/script.js"></script> -->
</body>
</html>