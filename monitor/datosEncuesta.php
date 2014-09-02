<?php
include("../includes/encuestas.php");
$encuestas = new Encuestas();


$datos=$_GET;

/*
$encuesta=array(
	'_id'=>new MongoId($datos[$id]) //53fe3e1052c673bc0b00002c
	);
*/
//ficticio
$id=$datos['id'];
$encuesta=array(
	'_id'=>new MongoId($id) //53fe3e1052c673bc0b00002c
	);

$consulta=$encuestas->getEncuestaId($encuesta);
//var_dump($consulta);
echo json_encode($consulta);

?>