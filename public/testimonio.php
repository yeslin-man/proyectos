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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.26.25/dist/sweetalert2.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css"> -->
    <title>Karime Spa - Agenda</title>
</head>
<body class="panelP">

    <?php include '../php/menuPrin.php'; 
        include '../model/Publico.php';
    ?>

<!-- contenido -->

    <div class="content">
        <div class="row p-4 mt-4 mb-4 animar">
            <h3 class="titulo mb-4 mt-2"><b><i class="fa-solid fa-leaf"></i> Testiminios</b></h3>
        </div>
        
        <div class="row">
            <?php foreach($testimonios as $i){ 
                $usuario = explode("@", $i['titulo'])[0];
            ?>
            <div class="col-md-1">
                <h3 class="avatar"><i class="fa-solid fa-user"></i></h3>
            </div>
            <div class="col-md-11">
                <div class="borde">
                    <h3 class="titulo"><b><?php echo '@'.$usuario; ?></b></h3>
                    <p class="parrafo texto_encoger">
                        <?php echo $i['descripcion'] ?>
                    </p>
                </div>
            </div>
            <?php } ?>
        </div>

        <br><br><br>
        <form class="sticky-top mb-5" id="frmPublic">
            <div class="col-md-12">
            <div class="d-flex justify-content-center">
                <input type="hidden" name="titulo" id="titulo" value="<?php if(isset($_REQUEST['titulo'])){ echo $_REQUEST['titulo']; }else{} ?>">
                    <textarea name="descripcion" id="descripcion" class="form-control area" placeholder="mensaje..."></textarea>
                    <button id="botonP" class="btn text-white btn-success">Publicar</button>
                </div>
            </div>
        </form>

            <!-- <h3 class="titulo"><b><i class="fa-solid fa-leaf"></i> <?php //echo $agendasR['titulo'] ?></b></h3>
            <p class="parrafo"><?php //echo $agendasR['descripcion'] ?></p> -->
        
            <?php if(isset($_REQUEST['titulo'])){ }else{ ?>
            <!-- modal automatico -->
             <div class="modal fade" id="miModal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title">¿Desea dejar un testimonio de nuestros servicios ?</h5>
                        </div>

                        <form action="testimonio.php" method="post" >
                            <div class="modal-body">
                                <label for="titulo" class="mb-1">Ingresa un correo electronico</label>
                                <input type="text" name="titulo" id="titulo" class="form-control" autocomplete="off" placeholder="ejemplo@ejemplo.com" required>
                            </div>
                            <br>
                            <div class="modal-footer">
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-primary">Agregar</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <?php } ?>
        
    </div>
    <footer>
        <?php include '../php/pie.php'; ?>
    </footer>
    



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.26.24/dist/sweetalert2.all.min.js"></script>
    <script src="../js/all.min.js"></script>
    <script src="../js/guardarPublico.js"></script>

    <!-- cargar modal despues despues que cargue la pagina -->
    <script>
        window.addEventListener('load', function () {

            const modal = new bootstrap.Modal(document.getElementById('miModal'));

            modal.show();

        });
    </script>

</body>
</html>