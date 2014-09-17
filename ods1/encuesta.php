<?php
include("../includes/encuestas.php");
$encuestas = new Encuestas();
$datos=$_POST;
$fecha=new MongoDate(time());

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

/*
if (array_key_exists('carril', $datos)) {
}
else{     
	$status=array("carril"=>0);
	echo json_encode($status);
	$insertar=0;}
*/
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

if (array_key_exists('motivo', $datos)) {
}
else{  
	$status=array("motivo"=>0);
	echo json_encode($status);
	$insertar=0;}


if (array_key_exists('capturista', $datos)) {
}
else{  
	$status=array("capturista"=>0);
	echo json_encode($status);
	$insertar=0;}

/*
//clave poblaciones inegi
if (array_key_exists('poblacionOrigenIdInegi', $datos)) {
}
else{    
	$status=array("poblacionOrigenIdInegi"=>0);
	echo json_encode($status);
	$insertar=0;}

//clave poblaciones inegi
if (array_key_exists('poblacionDestinoIdInegi', $datos)) {
}
else{    
	$status=array("poblacionDestinoIdInegi"=>0);
	echo json_encode($status);
	$insertar=0;}
*/

//INSERTAR PREFERENCIAS DECLARADAS
if ($insertar!=0)
{

$encuesta=array(
	'rubro'=>$datos['rubro'],
	'carretera'=>$datos['carretera'],
	
	'estacion'=>$datos['estacion'],

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
	'fechaCaptura'=>$fecha,

	'idEstacion' => $datos['idEstacion']
	);

}

//clave poblacion inegi
if(isset($datos['poblacionDestinoIdInegi'])){
	$encuesta['poblacionDestinoIdInegi'] = $datos['poblacionDestinoIdInegi'];	
}

//clave poblacion inegi
if(isset($datos['poblacionOrigenIdInegi'])){
	$encuesta['poblacionOrigenIdInegi'] = $datos['poblacionOrigenIdInegi'];	
}

//ficticio
/*
$encuesta=array(
	'rubro'=>'rubro',
	'carretera'=>'carretera',

	'estacion'=>'OD-01 Parres',
	'clvEstacion'=>"clvEstacion",

	'km'=>'66+223',
	'sentido'=>1,
	'clvSentido'=>(int)1,
//	'carril'=>(int)1,
	
	'anyo'=>2014,
	'clvAnyo'=>2,
	
	'mes'=>5,
	'clvMes'=>2,

	'dia'=>1,
	'clvDia'=>'clvDia',

	'hora'=>8,
	'clvHora'=>'clvHora',
	
	'tipoVehiculo'=>"A",
	'descVehiculo'=>'descVehiculo',
	
	'clvPoblacionOrigen'=>(int)1,
	'poblacionOrigen'=>'poblacionOrigen',
	'clvEstadoOrigen'=>(int)9,
	'estadoOrigen'=>'estadoOrigen',
	'coloniaOrigen'=>'coloniaOrigen',
	
	'clvPoblacionDestino'=>7,
	'poblacionDestino'=>'poblacionDestino',
	'clvEstadoDestino'=>17,
	'estadoDestino'=>'estadoDestino',
	'coloniaDestino'=>'coloniaDestino',
	
	'clvMarca'=>'clvMarca',
	'marca'=>'C105',

	'modelo'=>2002,
	'clvModelo'=>'clvModelo',

	'clvCombustible'=>'clvCombustible',
	'combustible'=>'combustible',

	'ocupantes'=>4,
	'clvOcupantes'=>'clvOcupantes',

	'clvMotivo'=>'clvmotivo',
	'motivo'=>'motivo',
	
	'clvFrecuencia'=>'clvFrecuencia',
	'frecuencia'=>'frecuencia',

	'ingreso'=>'ingreso',
	'clvIngreso'=>'clvingreso',
	
	'clvCarga'=>7279,
	'carga'=>'carga',
	'toneladas'=>60,
	'clvToneladas'=>60,

	'capturista'=>'alexa2',
	'fechaCaptura'=>$fecha
	);
*/
$consulta=$encuestas->setEncuesta($encuesta);

//$respuesta=json_encode($consulta);
//echo $respuesta;

$encuestaLog=$encuestas->setEncuestaLog($consulta);
//$respuestaLog=json_encode($encuestaLog);

$respuesta=array(
	"encuesta"=>$consulta,
	"log"=>$encuestaLog
	);

echo json_encode($respuesta);
//echo $respuestaLog;
?>