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
    <title>Karime Spa - Sucursales</title>
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
        <div class="col-md-12">
            <h3 class="text-uppercase"><b>Sede <?php echo $_REQUEST['accion']; ?></b></h3>
                <hr>
                <br>
                <div class="d-flex justify-content-center">
                    <img src="../img/logoSpa.png" alt="">
                </div>
        </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="../img/logoSpa.png" width="700" alt="">
                </div>
                <div class="col-md-6">
                    <img src="../img/logoSpa.png" width="700" alt="">
                </div>
            </div>
            <p class="parrafo">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis placeat doloribus eius adipisci sequi non! Vel illum, doloribus magni sequi quisquam labore tempore molestias mollitia. Sed recusandae iusto non facere!
                Assumenda quae error doloribus velit minus suscipit maiores deserunt corporis eum consequuntur! Pariatur, ex reiciendis qui deserunt eum nobis fugit recusandae velit aut. Totam enim quia fugit doloremque laborum atque!
                Voluptate rem distinctio ipsum mollitia velit deserunt dolorum laboriosam ipsam id. Omnis enim ipsam nemo maiores soluta quis, fugiat qui nostrum, eum totam obcaecati in ex vitae optio doloremque voluptatum!
            </p>

            <div class="card shadow p-3 mb-5 bg-body rounded">
                <?php if($_REQUEST['accion']=='Apartadó'){ ?>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d698.6424903849249!2d-76.63646774076122!3d7.8826435298808795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e500d7c9a97292f%3A0x234804e407e5e212!2sCl.%2097%20%23106-18%2C%20Apartad%C3%B3%2C%20Antioquia!5e0!3m2!1ses!2sco!4v1776308080303!5m2!1ses!2sco" width="100%" height="670" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="mostrarTres"></iframe>
                <?php }else if($_REQUEST['accion']=='Magangué'){ ?>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3938.0231665293395!2d-74.75386309999999!3d9.242225999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e5ec70072872b8f%3A0x6252dd3de6e6d26!2sKARIMESPA!5e0!3m2!1ses!2sco!4v1776288410678!5m2!1ses!2sco" width="100%" height="670" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="mostrarUno"></iframe>
                <?php }else if($_REQUEST['accion']=='Sahagún'){ ?>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3941.298949882173!2d-75.43543342420247!3d8.944575767417874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e59617f194443bd%3A0x3e888772c621a5d0!2zQ2FsbGUgMTUgQSwgU2FoYWfDum4sIEPDs3Jkb2Jh!5e0!3m2!1ses!2sco!4v1776306942658!5m2!1ses!2sco" width="100%" height="670" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="mostrarDos"></iframe>
                <?php } ?>
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
</body>
</html>