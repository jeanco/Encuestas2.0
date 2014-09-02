<?php 
require_once("ConexionMongodb.php");
/**
* Operaciones de entrada ys alida de archivos en  mongodb
*/
class Encuestas extends ConexionMongodb
{
	function setEncuesta($encuesta)
	{
		//var_dump($encuesta);
		//enviar errores al frontend
		$response = array();
		$response['status']=$this->db->encuesta->insert($encuesta);
		
		if(isset($encuesta['_id'])){
		    $response["encuesta"] = $encuesta;
		    $response['status']['ok']=1;
		    $response['status']["err"] = null;
		}else{
			$response['status']["err"] = true;
			$response["errMsg"] = "hubo un error";
		}
		return $response;
	}

	function setEncuestaLog($encuesta)
	{
		//enviar errores al frontend
		$responseLog = array();
		$encuesta['logDate'] = new MongoDate(time());
		$this->db->log->insert($encuesta);
		
		if(isset($encuesta['_id'])){
			$response["encuesta"] = $encuesta;
		    $responseLog["log"] = $encuesta;
		    $responseLog["err"] = null;
		}else{
			$responseLog["err"] = true;
			$responseLog["errMsg"] = "hubo un error";
		}
		return $responseLog;
	}


	//Lista todas la encuestas
	function getEncuesta()
	{
		return iterator_to_array($this->db->encuesta->find());
	}
	//listar las encuestas registradas por fecha solicitada
	function getEncuestasFecha()//$fecha
	{
		//var_dump($fecha);
		return $this->db->encuesta->find();
	}
	
	function getEncuestasFecha2($encuesta)//$fecha
	{
	return $this->db->encuesta->find($encuesta)->sort(array('fechaCaptura'=>-1));

	}


	//buscar la encuesta por id
	function getEncuestaId($id)
	{
		//var_dump($id);
		//$_id=new MongoId($id);
		return $this->db->encuesta->findOne($id);
	}

/*actualizar datos de la encuesta*/
	function updateEncuesta($encuesta)
	{
		//enviar errores al frontend
		$response = array();
		$response['status']=$this->db->encuesta->save($encuesta);
		
		if(isset($encuesta['_id'])){
		    $response["encuesta"] = $encuesta;
		    $response['status']['ok']=2;
		    $response['status']["err"] = null;
		}else{
			$response['status']["err"] = true;
			$response["errMsg"] = "hubo un error";
		}
		return $response;
	}

	function updateEncuestaLog($encuesta)
	{
		//enviar errores al frontend
		$responseLog = array();
		$encuesta['logDate'] = new MongoDate(time());
		$this->db->log->insert($encuesta);
		
		if(isset($encuesta['_id'])){
		    $responseLog["log"] = $encuesta;
		    $responseLog["err"] = null;
		}else{
			$responseLog["err"] = true;

			$responseLog["errMsg"] = "hubo un error";
		}
		return $responseLog;
	}

	





}
