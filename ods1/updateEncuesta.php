<?php
include("../includes/encuestas.php");
$encuestas = new Encuestas();
$datos=$_POST;
$fecha=new MongoDate(time());

$id=$datos['id'];//53fe5b2c52c673040c000031


//$datos=$_GET;
$insertar=1;
if (array_key_exists('rubro', $datos)) {

}
else{ 
	$status=array("rubro"=>0);
	echo json_encode($status); 
	 $insertar=0;}


if (array_key_exists('carretera', $datos)) {
}
else{
  	$status=array("carretera"=>0);
	echo json_encode($status);
	$insertar=0;}

if (array_key_exists('estacion', $datos)) {
}
else{     
	$status=array("estacion"=>0);
	echo json_encode($status);
	$insertar=0;}

if (array_key_exists('idEstacion', $datos)) {
}
else{     
	$status=array("idEstacion"=>0);
	echo json_encode($status);
	$insertar=0;}


if (array_key_exists('km', $datos)) {
}
else{    
	$status=array("km"=>0);
	echo json_encode($status);
	$insertar=0;}

if (array_key_exists('sentido', $datos)) {
}
else{     
	$status=array("sentido"=>0);
	echo json_encode($status);
	$insertar=0;}

if (array_key_exists('clvSentido', $datos)) {
}
else{    
	$status=array("clvSentido"=>0);
	echo json_encode($status);
	$insertar=0;}



if (array_key_exists('anyo', $datos)) {
}
else{     
	$status=array("anyo"=>0);
	echo json_encode($status);
	$insertar=0;}

if (array_key_exists('mes', $datos)) {	
}
else{     
	$status=array("mes"=>0);
	echo json_encode($status);
	$insertar=0;}

if (array_key_exists('clvMes', $datos)) {
}
else{    
	$status=array("clvMes"=>0);
	echo json_encode($status);
	$insertar=0;}

if (array_key_exists('dia', $datos)) {
}
else{    
	$status=array("dia"=>0);
	echo json_encode($status);
	$insertar=0;}

if (array_key_exists('clvDia', $datos)) {
}
else{    
	$status=array("clvDia"=>0);
	echo json_encode($status);
	$insertar=0;}

if (array_key_exists('hora', $datos)) {
}
else{    
	$status=array("Hora"=>0);
	echo json_encode($status);$insertar=0;}

if (array_key_exists('clvHora', $datos)) {}
else{   
	$status=array("clvHora"=>0);
	echo json_encode($status);
	$insertar=0;}

if (array_key_exists('tipoVehiculo', $datos)) {
}
else{    
	$status=array("tipoVehiculo"=>0);
	echo json_encode($status);
	$insertar=0;}

if (array_key_exists('descVehiculo', $datos)) {
}
else{  
	$status=array("descVehiculo"=>0);
	echo json_encode($status);
	$insertar=0;}

if (array_key_exists('clvPoblacionOrigen', $datos)) {
}
else{    
	$status=array("clvPoblacionOrigen"=>0);
	echo json_encode($status);
	$insertar=0;}

if (array_key_exists('poblacionOrigen', $datos)) {
}
else{     
	$status=array("poblacionOrigen"=>0);
	echo json_encode($status);
	$insertar=0;}

if (array_key_exists('clvEstadoOrigen', $datos)) {
}
else{     
	$status=array("clvEstadoOrigen"=>0);
	echo json_encode($status);
	$insertar=0;}

if (array_key_exists('estadoOrigen', $datos)) {
}
else{    
	$status=array("estadoOrigen"=>0);
	echo json_encode($status);
	$insertar=0;}

if (array_key_exists('coloniaOrigen', $datos)) {
}
else{    
	$status=array("coloniaOrigen"=>0);
	echo json_encode($status);
	$insertar=0;}

if (array_key_exists('clvColoniaOrigen', $datos)) {
}
else{     
	$status=array("clvColoniaOrigen"=>0);
	echo json_encode($status);
	$insertar=0;}

if (array_key_exists('clvPoblacionDestino', $datos)) {
}
else{    
	$status=array("clvPoblacionDestino"=>0);
	echo json_encode($status);
	$insertar=0;}

if (array_key_exists('poblacionDestino', $datos)) {
}
else{    
	$status=array("poblacionDestino"=>0);
	echo json_encode($status);
	$insertar=0;}
if (array_key_exists('clvEstadoDestino', $datos)) {
}
else{   
	$status=array("clvEstadoDestino"=>0);
	echo json_encode($status);
	$insertar=0;}
if (array_key_exists('estadoDestino', $datos)) {
}
else{     
	$status=array("estadoDestino"=>0);
	echo json_encode($status);
	$insertar=0;}
if (array_key_exists('coloniaDestino', $datos)) {
}
else{  
	$status=array("coloniaDestino"=>0);
	echo json_encode($status);
	$insertar=0;}

if (array_key_exists('clvColoniaDestino', $datos)) {
}
else{   
	$status=array("clvColoniaDestino"=>0);
	echo json_encode($status);
	$insertar=0;}
if (array_key_exists('clvMarca', $datos)) {
}
else{     
	$status=array("clvMarca"=>0);
	echo json_encode($status);
	$insertar=0;}
if (array_key_exists('marca', $datos)) {
}
else{    
	$status=array("marca"=>0);
	echo json_encode($status);
	$insertar=0;}
if (array_key_exists('modelo', $datos)) {
}
else{     
	$status=array("modelo"=>0);
	echo json_encode($status);
	$insertar=0;}
if (array_key_exists('clvModelo', $datos)) {
}
else{   
	$status=array("clvModelo"=>0);
	echo json_encode($status);
	$insertar=0;}
if (array_key_exists('clvCombustible', $datos)) {
}
else{    
	$status=array("clvCombustible"=>0);
	echo json_encode($status);
	$insertar=0;}
if (array_key_exists('combustible', $datos)) {
}
else{    
	$status=array("combustible"=>0);
	echo json_encode($status);
	$insertar=0;}
if (array_key_exists('ocupantes', $datos)) {
}
else{     
	$status=array("ocupantes"=>0);
	echo json_encode($status);
	$insertar=0;}
if (array_key_exists('clvOcupantes', $datos)) {
}
else{    
	$status=array("clvOcupantes"=>0);
	echo json_encode($status);
	$insertar=0;}
if (array_key_exists('clvMotivo', $datos)) {
}
else{    
	$status=array("clvMotivo"=>0);
	echo json_encode($status);
	$insertar=0;}
if (array_key_exists('motivo', $datos)) {
}
else{
	$status=array("motivo"=>0);
	echo json_encode($status);
	$insertar=0;}
if (array_key_exists('clvFrecuencia', $datos)) {
}
else{    
	$status=array("clvFrecuencia"=>0);
	echo json_encode($status);
	$insertar=0;}
if (array_key_exists('frecuencia', $datos)) {
}
else{   
	$status=array("frecuencia"=>0);
	echo json_encode($status);
	$insertar=0;}
if (array_key_exists('ingreso', $datos)) {
}
else{     
	$status=array("ingreso"=>0);
	echo json_encode($status);
	$insertar=0;}
if (array_key_exists('clvIngreso', $datos)) {
}
else{    
	$status=array("clvIngreso"=>0);
	echo json_encode($status);
	$insertar=0;}
if (array_key_exists('clvCarga', $datos)) {
}
else{   
	$status=array("clvCarga"=>0);
	echo json_encode($status);
	$insertar=0;}
if (array_key_exists('carga', $datos)) {
}
else{   
	$status=array("carga"=>0);
	echo json_encode($status);
	$insertar=0;}
if (array_key_exists('toneladas', $datos)) {
}
else{    
	$status=array("toneladas"=>0);
	echo json_encode($status);
	$insertar=0;}
if (array_key_exists('clvToneladas', $datos)) {
}
else{    
	$status=array("clvToneladas"=>0);
	echo json_encode($status);
	$insertar=0;}






/*else{  
	$status=array("capturista"=>0);
	echo json_encode($status);
	$insertar=0;}*/


if ($insertar!=0)
{

$encuesta=array(
	"_id"=>new MongoId($id),
	'rubro'=>$datos['rubro'],
	'carretera'=>$datos['carretera'],
	
	'estacion'=>$datos['estacion'],
	'idEstacion'=>$datos['idEstacion'],

	'km'=>$datos['km'],
	'sentido'=>$datos['sentido'],
	'clvSentido'=>(int)$datos['sentido'],

	//'carril'=>(int)$datos['carril'],
	
	'anyo'=>$datos['anyo'],
	'clvAnyo'=>(int)$datos['clvAnyo'],

	'mes'=>$datos['mes'],
	'clvMes'=>(int)$datos['clvMes'],

	'dia'=>$datos['dia'],
	'clvDia'=>(int)$datos['clvDia'],

	'hora'=>(int)$datos['hora'],
	'clvHora'=>(int)$datos['clvHora'],
	
	'tipoVehiculo'=>$datos['tipoVehiculo'],
	'descVehiculo'=>$datos['descVehiculo'],
	
	'clvPoblacionOrigen'=>$datos['clvPoblacionOrigen'],
	'poblacionOrigen'=>$datos['poblacionOrigen'],
	'clvEstadoOrigen'=>$datos['clvEstadoOrigen'],
	'estadoOrigen'=>$datos['estadoOrigen'],
	'coloniaOrigen'=>$datos['coloniaOrigen'],
	'clvColoniaOrigen'=>$datos['clvColoniaOrigen'],//
	
	'clvPoblacionDestino'=>$datos['clvPoblacionDestino'],
	'poblacionDestino'=>$datos['poblacionDestino'],
	'clvEstadoDestino'=>$datos['clvEstadoDestino'],
	'estadoDestino'=>$datos['estadoDestino'],
	'coloniaDestino'=>$datos['coloniaDestino'],
	'clvColoniaDestino'=>$datos['clvColoniaDestino'],
	
	'clvMarca'=>$datos['clvMarca'],
	'marca'=>$datos['marca'],

	'modelo'=>$datos['modelo'],
	'clvModelo'=>$datos['clvModelo'],

	'clvCombustible'=>$datos['clvCombustible'],
	'combustible'=>$datos['combustible'],

	'ocupantes'=>$datos['ocupantes'],
	'clvOcupantes'=>(int)$datos['clvOcupantes'],

	'clvMotivo'=>$datos['clvMotivo'],
	'motivo'=>$datos['motivo'],
	
	'clvFrecuencia'=>$datos['clvFrecuencia'],
	'frecuencia'=>$datos['frecuencia'],

	'ingreso'=>$datos['ingreso'],
	'clvIngreso'=>$datos['clvIngreso'],

	'clvCarga'=>$datos['clvCarga'],   ///////////  ?
	'carga'=>$datos['carga'],

	'toneladas'=>$datos['toneladas'],
	'clvToneladas'=>$datos['clvToneladas'],

	'capturista'=>$datos['capturista'],
	'fechaCaptura'=>new mongoDate(((int)$datos['fechaCaptura']['sec']))
	);

}
$consulta=$encuestas->updateEncuesta($encuesta);

//$respuesta=json_encode($consulta);
//echo $respuesta;

$encuestaLog=$encuestas->updateEncuestaLog($consulta);
//$respuestaLog=json_encode($encuestaLog);

$respuesta=array(
	"encuesta"=>$consulta,
	"log"=>$encuestaLog
	);

echo json_encode($respuesta);
//echo $respuestaLog;
?>