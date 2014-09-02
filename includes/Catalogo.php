<?php

require_once("ConexionMongodb.php");
/**
* get 
*/
class Catalogo extends ConexionMongodb
{
	function getMarcas(){
		$array = iterator_to_array( $this->db->catalogoMarcas->find(array(),array('_id'=> false )));
		return json_encode($array);
	}
	function getCiudades(){
		$array = iterator_to_array( $this->db->catalogoCiudades->find(array(),array('_id'=> false )));
		return json_encode($array);
	}
	function getCargas(){
		$array = iterator_to_array( $this->db->catalogoCargas->find(array(),array('_id'=> false )));
		return json_encode($array);
	}
	function getColonias(){
		$array = iterator_to_array( $this->db->catalogoColonias->find(array(),array('_id'=> false )));
		return json_encode($array);
	}
}