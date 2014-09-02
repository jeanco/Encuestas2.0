<?php
include ('admin.php');
$cliente =  new Admin();
// recibir las variables del serialize
$value = $_GET['clavecarga'];
$label =  $_GET['nombrecarga'];
$consulta = array("value"=>$value, "label"=>$label);
echo json_encode($cliente->addCarga($consulta));
?>