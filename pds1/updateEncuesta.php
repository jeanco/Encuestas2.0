<?php
include("../includes/encuestas.php");
$encuestas = new Encuestas();
$datos=$_POST;


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
	$status=array("idEstacion"=>0);
	echo json_encode($status);
	$insertar=0;}

if (array_key_exists('idEstacion', $datos)) {
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



if (array_key_exists('clvT1', $datos)) {
}
else{   
	$status=array("clvT1"=>0);
	echo json_encode($status);
	$insertar=0;}
if (array_key_exists('clvT2', $datos)) {
}
else{     
	$status=array("clvT2"=>0);
	echo json_encode($status);
	$insertar=0;}
if (array_key_exists('clvT3', $datos)) {
}
else{    
	$status=array("clvT3"=>0);
	echo json_encode($status);
	$insertar=0;}
if (array_key_exists('clvT4', $datos)) {
}
else{     
	$status=array("clvT4"=>0);
	echo json_encode($status);
	$insertar=0;}
if (array_key_exists('clvT5', $datos)) {
}
else{    
	$status=array("clvT5"=>0);
	echo json_encode($status);
	$insertar=0;}
if (array_key_exists('clvT6', $datos)) {
}
else{    
	$status=array("clvT6"=>0);
	echo json_encode($status);
	$insertar=0;}
if (array_key_exists('clvT7', $datos)) {
}
else{     
	$status=array("clvT7"=>0);
	echo json_encode($status);
	$insertar=0;}
if (array_key_exists('clvT8', $datos)) {
}
else{    
	$status=array("clvT8"=>0);
	echo json_encode($status);
	$insertar=0;}
if (array_key_exists('clvT9', $datos)) {
}
else{     
	$status=array("clvT9"=>0);
	echo json_encode($status);
	$insertar=0;}
if (array_key_exists('clvT10', $datos)) {
}
else{   
	$status=array("clvT10"=>0);
	echo json_encode($status);
	$insertar=0;}


if (array_key_exists('tarjetasPd', $datos)) {
}
else{  
	$status=array("tarjetasPd"=>0);
	echo json_encode($status);
	$insertar=0;}
if (array_key_exists('clvTarjetasPd', $datos)) {
}
else{    
	$status=array("clvTarjetasPd"=>0);
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


/*
if (array_key_exists('id', $datos)) {
}
else{  
	$status=array("id"=>0);
	echo json_encode($status);
	$insertar=0;}
*/
//INSERTAR PREFERENCIAS DECLARADAS
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

	'clvPoblacionOrigen'=>(int)$datos['clvPoblacionOrigen'],
	'poblacionOrigen'=>$datos['poblacionOrigen'],
	'clvEstadoOrigen'=>(int)$datos['clvEstadoOrigen'],
	'estadoOrigen'=>$datos['estadoOrigen'],
	'coloniaOrigen'=>$datos['coloniaOrigen'],
	'clvColoniaOrigen'=>$datos['clvColoniaOrigen'],//	

	'clvPoblacionDestino'=>(int)$datos['clvPoblacionDestino'],
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
	'clvToneladas'=>(int)$datos['clvToneladas'],

	
	't1'=>$datos['t1'],
	'clvT1'=>(int)$datos['clvT1'],

	't2'=>$datos['t2'],
	'clvT2'=>(int)$datos['clvT2'],
	
	't3'=>$datos['t3'],
	'clvT3'=>(int)$datos['clvT3'],
	
	't4'=>$datos['t4'],
	'clvT4'=>(int)$datos['clvT4'],
	
	't5'=>$datos['t5'],
	'clvT5'=>(int)$datos['clvT5'],
	
	't6'=>$datos['t6'],
	'clvT6'=>$datos['clvT6'],
	
	't7'=>$datos['t7'],
	'clvT7'=>(int)$datos['clvT7'],
	
	't8'=>$datos['t8'],
	'clvT8'=>(int)$datos['clvT8'],
	
	't9'=>$datos['t9'],
	'clvT9'=>(int)$datos['clvT9'],
	
	't10'=>$datos['t10'],
	'clvT10'=>(int)$datos['clvT10'],

	'tarjetasPd'=>$datos['tarjetasPd'],
	'clvTarjetasPd'=>(int)$datos['clvTarjetasPd'],

	'capturista'=>$datos['capturista'],
	'fechaCaptura'=> new mongoDate(((int)$datos['fechaCaptura']['sec']))
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
/*
//ficticio
$encuesta=array(
	"_id"=>new MongoId($id),
	'rubro'=>'modificandopds',
	'carretera'=>'carretera',

	'estacion'=>'OD-01 Parres',
	'idEstacion'=>"idEstacion",

	'km'=>'66+223',
	'sentido'=>1,
	'clvSentido'=>(int)1,
	'carril'=>(int)1,
	
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
	
	't1'=>'t1',
	'clvT1'=>'clvT1',

	't2'=>'t2',
	'clvT2'=>'clvT2',

	't3'=>'t3',
	'clvT3'=>'clvT3',

	't4'=>'t4',
	'clvT4'=>'clvT4',

	't5'=>'t5',
	'clvT5'=>'clvT5',

	't6'=>'t6',
	'clvT6'=>'clvT6',

	't7'=>'t7',
	'clvT7'=>'clvT7',

	't8'=>'t8',
	'clvT8'=>'clvT8',

	't9'=>'t9',
	'clvT9'=>'clvT9',

	't10'=>'t10',
	'clvT10'=>'clvT10',
	
	'tarjetasPD'=>'tarjetasPD',
	'capturista'=>'alexa4',
	'fechaCaptura'=>
	'fechaModificacion'=>$fecha
	);
*/
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