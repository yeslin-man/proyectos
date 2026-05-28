<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="css/all.min.css"> -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
     <link rel="icon" href="img/logoSpa.png" sizes="32x32">
    <title>Karime Spa</title>
</head>
<!-- <body class="bodyIndex"> -->
<body class="bodyPrin">

    <?php 
      include 'php/menu.php'; 
      include 'model/Agendas.php';
      include 'model/Usuarios.php';
    ?>

        <div class="contener">
            <div class="contenedor p-3 shadow-lg rounded">
                <div class="propaganda">
                  <div class="col-md-6">
                    <h1 class="tituloPro">Organiza tu día</h1><br>
                    <p class="titulo">
                      pequeños pasos <br>
                      te llevan a grandes <br>
                      logros <br><br>
                    </p>
                    <button class="botones">Ver mas tareas</button>
                  </div>
                  <div class="col-md-6 imagenPro">
                    <img src="img/logoSpa.png" alt="" class="imgPro">
                  </div>
                </div>
            </div>
            <div class="contenedorDos">
              <h1 class="titulo">Proximos eventos</h1>
              <hr>
              <br>
              <?php 
                foreach($agendas as $i){ 
              ?>
              <div class="tarea">
                <div class="iconoTarea">
                  <h4>✔️</h4>
                </div>
                <div class="tareaUno">
                  <label> <?php echo $i['servicio'] ?> / <span class="datosExtra"><?php echo $i['fecha'] ?> / <?php echo $i['hora'] ?></span></label>
                </div>
              </div>
              
              <?php } ?>
            </div>
        </div>


    <section class="banner"></section>

  <br><br>

  <div class="submenu">
    <?php 
      $estados = [
        'apartado' => 0,
        'magangue' => 0,
        'sahagun' => 0
      ];

      foreach($usuarios as $i){
          $sucursal = strtolower(trim($i['sucursal']));

          if($i['estado'] == 1 && isset($estados[$sucursal])){
              $estados[$sucursal] = 1;
          }
      }
    ?>
    <div class="ovalo">
      <h1 class="titulos">Sucursal Apartadó</h1>
      <p>
        <?php echo $estados['apartado'] ? 'Abierto' : 'Cerrado' ?>
      </p>
    </div>
    <div class="ovalo">
      <h1 class="titulos">Sucursal Magangué</h1>
        <p>
          <?php echo $estados['magangue'] ? 'Abierto' : 'Cerrado' ?>
        </p>
    </div>
    <div class="ovalo">
      <h1 class="titulos">Sucursal Sahagún</h1>
        <p>
          <?php echo $estados['sahagun'] ? 'Abierto' : 'Cerrado' ?>
        </p>
    </div>
    <?php //} ?>
  </div>

<!-- contenido -->
<section class="cards">

  <div class="card" id="botonUno">
    <i class="fas fa-list"></i>
    <span>Agenda de citas</span>
  </div>

  <div class="card" id="botonDos">
    <i class="fas fa-concierge-bell"></i>
    <span>Servicios</span>
  </div>

  <div class="card" id="botonTres">
    <i class="fas fa-chart-line"></i>
    <span>Ventas</span>
  </div>

  <div class="card" id="botonCuatro">
    <i class="fas fa-user"></i>
    <span>Personal del spa</span>
  </div>

  <div class="card" id="botonCinco">
    <i class="fas fa-users"></i>
    <span>Clientes</span>
  </div>

  <div class="card" id="botonSeis">
    <i class="fas fa-bullhorn"></i>
    <span>Publicidades</span>
  </div>

</section>



    <!-- <script src="js/bootstrap.bundle.min.js"></script> -->
    <!-- <script src="js/all.min.js"></script> -->
    <script src="js/script.js"></script>
</body>
</html>




<!-- Cuando el usuario inicia sesión
session_start();

$_SESSION['id'] = $usuario['id'];

$sql = "UPDATE usuarios SET estado = 'online' WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$_SESSION['id']]);
3. Cuando cierra sesión
session_start();

$sql = "UPDATE usuarios SET estado = 'offline' WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$_SESSION['id']]);

session_destroy();
4. Ver qué usuarios están conectados
$sql = "SELECT * FROM usuarios WHERE estado = 'online'";
$stmt = $pdo->query($sql);
$usuarios = $stmt->fetchAll(); -->