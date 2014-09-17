<?php
require_once('ConexionMongodb.php');
/**
* Clase catalogo completo Ciudades
*/
class Ciudades extends ConexionMongodb
{
	function getCiudades()
	{
		$ciudades = $this->db->catalogoCiudades->find();
		$all = array();
		foreach ($ciudades as $key => $value) {	
			$array = array( "idInegi"=>$value['idInegi'] ,"id"=>$key,"value"=>$value['value'] ,"label"=>$value['label'], "desc_estado"=>$value['desc_estado'], "id_estado"=>$value['id_estado'],"locacion"=>$value['locacion']);			
			array_push( $all,$array );
		}
		return json_encode($all);
	} 

}

$ciudad = new Ciudades();
$result = $ciudad->getCiudades();
echo $result;