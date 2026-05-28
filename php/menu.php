<?php session_start();
  if (!isset($_SESSION['sucursal']) || 
    ($_SESSION['sucursal'] != 'apartado' && $_SESSION['sucursal'] != 'magangue' && $_SESSION['sucursal'] != 'sahagun')) {
    header("Location: login.php");
    exit();
}
?>

<script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.26.24/dist/sweetalert2.all.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.26.24/dist/sweetalert2.min.css
" rel="stylesheet">

<header class="header">
  <div class="">
    <img src="img/logoSpa.png" alt="" width="120" class="logo_princi">
  </div>

  <div class="user">
    <!-- <label class="text-center titulo"></label> -->

    <div class="dropdown">
      <a class="text-decoration-none titulo dropdown-toggle textoHeader" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
        <b><?php echo $_SESSION['nombre'].' '.$_SESSION['apellido'] ?></b>
      </a>

      <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <li><a class="dropdown-item titulo" href="controller/logout.php">Salir</a></li>
      </ul>
    </div>

        <p class="titulo nombre_sucur textoHeader"><?php echo $_SESSION['sucursal']; ?></p>
  </div>
</header>






<!-- <nav class="navbar navbar-expand-lg bg-body-tertiary p-2 shadow-lg bg-body-tertiary rounded header">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="img/logoSpa.png" alt="" width="120" class="logo_princi">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
      </ul>
      <span class="navbar-text">
        <label class="text-center titulo"><b><?php //echo $_SESSION['nombre'].' '.$_SESSION['apellido'] ?></b></label>
        <p class="titulo nombre_sucur"><?php //echo $_SESSION['sucursal']; ?></p>
      </span>
    </div>
  </div>
</nav> -->