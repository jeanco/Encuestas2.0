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
	
    function countEncUsuario($usuario)
    {
        return $this->db->encuesta->count($usuario);
    }

    function getEstacion($id)
    {   
        return $this->db->paquetes->findOne(array('_id' => new MongoId($id)), array('carretera','estacion'));
    }


    function getInicioDia($fecha)
    {        
       $date = str_replace('/', '-', $fecha);
       return  $fechaEspecifica = date('Y-m-d 00:00:00', strtotime($date));
    }

    function getFinDia($fecha)
    {        
       $date = str_replace('/', '-', $fecha);
       return  $fechaEspecifica = date('Y-m-d 23:00:00', strtotime($date));
    }

}

?>
