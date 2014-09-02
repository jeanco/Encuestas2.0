<?php
require_once("encuestas.php");
$encuestas = new Encuestas();
$datos=$_GET;

$estacion=$datos['idEstacion'];
$capturista=$datos['capturista'];
$rubro=$datos['rubro'];


$consulta3=array('fechaCaptura'=>array('$gt'=>new MongoDate(strtotime( date("Y-m-d 00:00:00")))),'idEstacion'=>$estacion,'capturista'=>$capturista,'rubro'=>$rubro);

$arreglo=$encuestas->getEncuestasFecha2($consulta3);

$arre=iterator_to_array($arreglo);
//var_dump($arre);
echo json_encode($arre);

/*
foreach ($arre as $value) {
	echo "</br>fecha de captura:\n".date('d-M-Y H:i:s',$value['fechaCaptura']->sec);	
			echo "\n estacion:\n".$value['estacion'];
			echo "\n capturista:\n ".$value['capturista']."</br>";
}
*/






