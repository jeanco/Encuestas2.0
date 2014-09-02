<?php
include ('admin.php');
$cliente =  new Admin();

$nombre = $_GET['nombre'];
$apellidos =  $_GET['apellidos'];
$contrasenya = $_GET['contrasenya'];
$tipo =  $_GET['tipo'];

$consulta = array("nombre"=>$nombre,"apellidos"=>$apellidos,"contra"=>$contrasenya,"tipo"=>$tipo);
echo json_encode($cliente->addUsuario($consulta));

?>


