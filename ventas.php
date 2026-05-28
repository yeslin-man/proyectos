<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="icon" href="img/logoSpa.png" sizes="32x32">
    <title>Karime Spa - Ventas</title>
</head>
<body class="bodyPrin">

    <?php 
        include 'php/menu.php'; 
        include 'model/Ventas.php'; 
    ?>

<!-- contenido -->
    
    <div class="contenido">
        <div class="targeta shadow-none rounded">
            <div class="card-header">
                <div class="d-flex">
                    <div class="col-md-8">
                        <h3 class="titulos mx-4 mt-3"><a href="principal.php" class="text-decoration-none titulos"><i class="fa-solid fa-arrow-left"></i></a> Ventas</h3>
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
        </div>
        <!-- contenido -->
        <br>
         <div class="container">
         <div class="row" id="listaArticulos">
            <?php foreach($usuarios as $i){
                setlocale(LC_TIME, 'es_ES.UTF-8', 'spanish');

                $fecha = $i['fecha'];
                $date = new DateTime($fecha);

                $nombreMes = strftime('%B', $date->getTimestamp()); // abril    
            ?>
            <div class="col-md-4 mb-4 articulo">
                <div class="container p-3 shadow-lg rounded">
                    <div class="card-header cabe">
                        <h5 class="titulos titulosVen"><?php echo $i['nombre'].' '.$i['apellido'] ?></h5>
                    </div>
                    <hr>
                    <div class="card-body p-2">
                        <p>Sucursal: <span class="titulos titulosVen"><?php echo $i['sucursal'] ?></span></p>
                        <p class="text-dark titulo titulosVen">Mes: <span class="total titulos"><?php echo $nombreMes ?></span></p>
                        <p class="text-dark titulo titulosVen">Citas: <span class="total titulos"><?php echo $i['total'] ?></span></p>
                        <input type="hidden" id="cantidad" value="<?php echo $i['total'] ?>">
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center tamaño">
                            <!-- <canvas id="miGrafico"></canvas> -->
                            <!-- <div id="contenedorGraficas"></div> -->
                             <div class="grafica" data-total="<?php echo $i['total'] ?>"></div>
                        </div>
                    </div>
                </div>
            </div>
            <h5 id="mensaje" style="display:none; color:red; text-align:center; margin-top: 100px;">
                No se encontraron resultados
            </h5> 
            <?php } ?>
            
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
               
            </div>
            <br><br>

         </div>

    </div>


</body>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="js/all.min.js"></script>
<!-- <script src="js/script.js"></script> -->
<script src="js/grafico.js"></script>
<script src="js/filtro.js"></script>
</html>