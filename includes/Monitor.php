<?php
require_once("ConexionMongodb.php");
/**
* clases para monitor.php
*/
class Monitor extends ConexionMongodb
{
	
	function totalEncuestas(){
		//consulta count sobre collection ods2_14
		return $this->db->encuesta->count();	
	}
	function getLog(){
		//Traer las ultimas capturas de la tabla log
		$limit = 50; 
		return iterator_to_array( $this->db->log->find()->limit($limit)->sort(array("logDate" => -1 )) );
	//db.log.find().limit(5).sort({"encuesta.fechaCaptura":-1}).pretty()
	}
	
}
