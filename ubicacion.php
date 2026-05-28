<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="icon" href="img/logoSpa.png" sizes="32x32">
    <title>Karime Spa - Ubicación</title>
</head>
<body>
    <div class="row">
        <div class="col-md-12">
            <div class="mapa">
                <div class="acceso_mapa">
                    <div class="card shadow-lg bg-body rounded">
                        <div class="card-header"><h5 class="titulo">Filtrar Mapa</h5></div>
                        <div class="card-body p-2">
                            <div class="card p-2 mb-2" id="mapaTres"><a type="button" class="text-decoration-none titulo">Sucursal Aparadó</a></div>
                            <div class="card p-2 mb-2" id="mapaUno"><a type="button" class="text-decoration-none titulo">Sucursal Magangué</a></div>
                            <div class="card p-2 mb-2" id="mapaDos"><a type="button" class="text-decoration-none titulo">Sucursal Sahagún</a></div>
                        </div>
                    </div>
                </div>
                <!-- mostrar mapas -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d698.6424903849249!2d-76.63646774076122!3d7.8826435298808795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e500d7c9a97292f%3A0x234804e407e5e212!2sCl.%2097%20%23106-18%2C%20Apartad%C3%B3%2C%20Antioquia!5e0!3m2!1ses!2sco!4v1776308080303!5m2!1ses!2sco" width="100%" height="670" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="mostrarTres"></iframe>

                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3938.0231665293395!2d-74.75386309999999!3d9.242225999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e5ec70072872b8f%3A0x6252dd3de6e6d26!2sKARIMESPA!5e0!3m2!1ses!2sco!4v1776288410678!5m2!1ses!2sco" width="100%" height="670" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="mostrarUno"></iframe>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3941.298949882173!2d-75.43543342420247!3d8.944575767417874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e59617f194443bd%3A0x3e888772c621a5d0!2zQ2FsbGUgMTUgQSwgU2FoYWfDum4sIEPDs3Jkb2Jh!5e0!3m2!1ses!2sco!4v1776306942658!5m2!1ses!2sco" width="100%" height="670" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="mostrarDos"></iframe>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/mapa.js"></script>
</body>
</html>