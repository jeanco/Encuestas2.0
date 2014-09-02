<?php
include ('admin.php');
$cliente =  new Admin();
// recibir las variables del serialize
$value = $_GET['clavecol'];
$label =  $_GET['nombrecol'];
$municipio= $_GET['municipio'];
$cp= $_GET['cp'];
$consulta = array("value"=>$value,"label"=>$label,"municipio"=>$municipio, "cp"=>$cp);
echo json_encode($cliente->addColonia($consulta));
?>