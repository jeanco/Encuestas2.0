<?php
include('ConexionMongodb.php');

/* obtiene la lista de paquetes disponibles
*/
class Paquetes extends ConexionMongodb {
  function mapPaquetes()
  	{	
  		$resultado = $this->db->paquetes->find();
  		$array = iterator_to_array( $resultado );
  		$lista = array_map(function($paquete){
			$id_json=$paquete['_id'];
			$id_json=(explode('$id', $id_json));
			$json = array('idEstacion'=>$id_json[0],'estacion'=>$paquete['estacion'], 'carretera'=>$paquete['carretera'], 'km'=>$paquete['km'] );
			$json = json_encode($json);
			return "<tr data-datosestacion='".$json."'><td>".$paquete['carretera']."</td><td >".$paquete['estacion']."</td><td>".$paquete['km']."</td></tr>";
         },$array); 
  		return implode($lista);
  	}	
}