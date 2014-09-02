<?php
include('../includes/admin.php');

/**
* Clase de generacion de reportes
*/
class Reporte extends Admin
{

	function excelEstacion($consulta,$skip,$limit)
    {
    	return $this->db->encuesta->find($consulta)->skip($skip)->limit($limit);
    	
    }

    function excelUsuario($consulta,$skip,$limit)
    {
        return $this->db->encuesta->find($consulta)->skip($skip)->limit($limit);
        
    }


    function countEncuestas($estacion)
    {
    	return $this->db->encuesta->count($estacion);
    }
	
	
	/****** Paquetes *******
    function countPaquete()
    {
    	return $this->db->encuesta->
    }
*/
/*
	function excelPaquetes($paquete)
    {*/
   // 	return $this->db->encuesta->find($paquete)/*->skip(18000)->limit(9000)*/;
 /*   	
    }
*/

	/****** capturistas ********/

/*
	function ultCapturistas()
	{
		return $this->db->usuario->find()->sort(array("id_usuario"=>-1));
	}

	function excelCapturista($consulta)
	{
		return $this->db->ods2_mayo_14->find($consulta);
	}


*/
}

?>
