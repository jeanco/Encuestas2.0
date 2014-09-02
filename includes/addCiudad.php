<?php
include ('admin.php');
$cliente =  new Admin();

$value = $_GET['clavec'];
$label =  $_GET['nombrec'];
$desc_estado = $_GET['descEstado'];
$id_estado =  $_GET['idestado'];
$locacion = $_GET['locacion'];

$consulta = array("value"=>$value,"label"=>$label,"desc_estado"=>$desc_estado,"id_estado"=>$id_estado,"locacion"=>$locacion);
echo json_encode($cliente->addCiudad($consulta));
?>