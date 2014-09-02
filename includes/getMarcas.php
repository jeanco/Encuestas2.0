<?php
require_once('ConexionMongodb.php');
/**
* Clase catalogo completo Marcas
*/
class Marcas extends ConexionMongodb
{
	function getMarcas()
	{
		$marcas=$this->db->catalogoMarcas->find();
		$all = array();
		foreach ($marcas as $key => $value) {	
			$array = array("id"=>$key,"value"=>$value['value'] ,"label"=>$value['label']  );
			array_push( $all,$array );
		}
		return json_encode($all);
	} 

}

$marca = new Marcas();
$result = $marca->getMarcas();
echo $result;