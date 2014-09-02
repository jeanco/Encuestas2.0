<?php
require_once('ConexionMongodb.php');
/**
* Clase catalogo completo Colonias
*/
class Colonias extends ConexionMongodb
{
	function getColonias()
	{
		$colonias=$this->db->catalogoColonias->find();
		$all = array();
		foreach ($colonias as $key => $value) {	
			$array = array("id"=>$key,"value"=>$value['value'] ,"label"=>$value['label'],"municipio"=>$value['municipio'] ,"cp"=>$value['cp']  );
			array_push( $all,$array );
		}
		return json_encode($all);
	} 

}

$colonia = new Colonias();
$result = $colonia->getColonias();
echo $result;