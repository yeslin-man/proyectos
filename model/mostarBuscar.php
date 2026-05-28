<?php 

include '../db/Conexion.php';
$con = new Conexion();
$conectar = $con->conectar();

$sql = "SELECT * FROM citas";
if(isset($_REQUEST['buscar'])){
    $cliente = $_REQUEST['cliente'];
    $sql = "SELECT * FROM citas WHERE cliente LIKE '%$cliente%'";
}
$pri = $conectar->query($sql);
$usuarios = $pri->fetchAll(PDO::FETCH_ASSOC);

?>