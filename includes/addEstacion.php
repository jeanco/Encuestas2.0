<?php
include ('admin.php');
$cliente =  new Admin();

$estacion =  $_GET['estacion'];
$carretera = $_GET['carretera'];
$km =  $_GET['km'];

$consulta = array("estacion"=>$estacion,"carretera"=>$carretera,"km"=>$km);
echo json_encode($cliente->addEstacion($consulta));
?>