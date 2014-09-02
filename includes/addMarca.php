<?php
include ('admin.php');
$cliente =  new Admin();
// recibir las variables del serialize
$value = $_GET['clavem'];
$label =  $_GET['nombrem'];
$consulta = array("value"=>$value, "label"=>$label);
echo json_encode($cliente->addMarca($consulta));
?>