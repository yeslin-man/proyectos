<?php 
// header('Content-Type: aplication/json');

include '../db/Conexion.php';
$con = new Conexion();
$conectar = $con->conectar();

$evento = "SELECT * FROM publicaciones WHERE opcion = 'evento' ORDER BY id_publi DESC LIMIT 1 ";
$eventoR = $conectar->prepare($evento);
$eventoR->execute();
$agendasR = $eventoR->fetch(PDO::FETCH_ASSOC);


$spa = "SELECT * FROM publicaciones WHERE opcion = 'spa' ORDER BY id_publi DESC LIMIT 1";
$spaR = $conectar->prepare($spa);
$spaR->execute();
$spaK = $spaR->fetch(PDO::FETCH_ASSOC);

$testa = "SELECT * FROM publicaciones WHERE opcion = 'testimonio' LIMIT 8";
$testam = $conectar->prepare($testa);
$testam->execute();
$testamento = $testam->fetchAll(PDO::FETCH_ASSOC);

$testimo = "SELECT * FROM publicaciones WHERE opcion = 'testimonio'";
$testimonio = $conectar->prepare($testimo);
$testimonio->execute();
$testimonios = $testimonio->fetchAll(PDO::FETCH_ASSOC);
//  echo json_encode($usuarios);

?>