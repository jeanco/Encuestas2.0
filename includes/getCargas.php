<?php
require_once('ConexionMongodb.php');
/**
* Clase catalogo completo Cargas
*/
class Cargas extends ConexionMongodb
{
	function getCargas()
	{
		$cargas=$this->db->catalogoCargas->find();
		$all = array();
		foreach ($cargas as $key => $value) {	
			$array = array("id"=>$key,"value"=>$value['value'] ,"label"=>$value['label']  );			
			array_push( $all,$array );
		}
		return json_encode($all);
	} 

}

$carga = new Cargas();
$result = $carga->getCargas();
echo $result;