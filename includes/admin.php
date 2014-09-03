<?php
require_once('ConexionMongodb.php');

class Admin extends ConexionMongodb
{
	/***************** tablas de opciones admin ****************/

	function getCapturistas()
	{
		return $this->db->usuario->find();
	}

	function listaCapturistas()
	{
		 $array = iterator_to_array($this->getCapturistas());
		 return $array;
	}

    function tablaCapturistas()
    {
      $tablaCapturistas = array_map(function($capturista){
      return "<tr><td>".$capturista['nombre']."</td>
			      <td>".$capturista['apellidos']."</td>
			      <td>".$capturista['tipo']."</td>
			      <td><a onclick=' return confirmarEliminacion();' href='../includes/eliminarUsuario.php?_id=".$capturista['_id']."' title='Eliminar usuario'><span class='glyphicon glyphicon-trash'></span></a></td>
    		  </tr>";
             }, $this->listaCapturistas());
      return implode($tablaCapturistas);
      
    }

	function getPaquetes()
	{	
		return $this->db->paquetes->find();
	}

	function listaPaquetes()
	{
		$array = iterator_to_array( $this->getPaquetes() );
		return $array;
	}


    function tablaEstaciones()
    {
      $tablaEstaciones = array_map(function($estacion){
      return "<tr><td>".$estacion['_id']."</td>
      			  <td>".$estacion['estacion']."</td>
      			  <td>".$estacion['carretera']."</td>
      			  <td>".$estacion['km']."</td>
      			  <td><a onclick=' return confirmarEliminacion();' href='../includes/eliminarEstacion.php?_id=".$estacion['_id']."' title='Eliminar estacion'><span class='glyphicon glyphicon-trash'></span></a></td></tr>";
             }, $this->listaPaquetes());
      return implode($tablaEstaciones);
      
    }


	function listaCiudades()
	{
		$array = $this->db->catalogoCiudades->find()
											->sort(array("_id"=>-1))
											->limit(20);
       return iterator_to_array($array);									
	}


    function tablaCiudades()
    {
      $tablaCiudades = array_map(function($ciudad){
      return  "<tr><td>".$ciudad['value']."</td>
      			   <td>".$ciudad['label']."</td>
      			   <td>".$ciudad['desc_estado']."</td>
      			   <td>".$ciudad['id_estado']."</td>
      			   <td>".$ciudad['locacion']."</td>
      			   <td><a onclick=' return confirmarEliminacion();' href='../includes/eliminarCiudad.php?_id=".$ciudad['_id']."&u=adm' title='Eliminar ciudad'><span class='glyphicon glyphicon-trash'></span></a></td></tr>";
             }, $this->listaCiudades());
      return implode($tablaCiudades);
      
    }

	
	function listaColonias()
	{
	   $array = $this->db->catalogoColonias->find()
											->sort(array("_id"=> -1))
											->limit(20);
       return iterator_to_array($array);									
	}

    function tablaColonias()
    {
      $tablaColonias = array_map(function($colonia){
      return  "<tr><td>".$colonia['value']."</td>
      			   <td>".$colonia['label']."</td>
      			   <td>".$colonia['municipio']."</td>
      			   <td>".$colonia['cp']."</td>
      			   <td><a onclick=' return confirmarEliminacion();' href='../includes/eliminarColonia.php?_id=".$colonia['_id']."&u=adm' title='Eliminar colonia'><span class='glyphicon glyphicon-trash'></span></a></td></tr>";
             }, $this->listaColonias());
      return implode($tablaColonias);
      
    }

	
	function listaMarcas()
	{
	   $array = $this->db->catalogoMarcas->find()
										 ->sort(array("_id"=> -1))
										 ->limit(20);
       return iterator_to_array($array);									

	}

    function tablaMarcas()
    {
      $tablaMarcas = array_map(function($marca){
      return  "<tr><td>".$marca['value']."</td>
      			   <td>".$marca['label']."</td>
      			   <td><a  onclick=' return confirmarEliminacion();' href='../includes/eliminarMarca.php?_id=".$marca['_id']."&u=adm' title='Eliminar marca'><span class='glyphicon glyphicon-trash'></span></a></td></tr>";
            }, $this->listaMarcas());
      return implode($tablaMarcas);
      
    }


	function listaCargas()
	{
	    $array =  $this->db->catalogoCargas->find()
											->sort(array("_id"=> -1))
											->limit(20);
		return iterator_to_array($array);
	}

    function tablaCargas()
    {
      $tablaCargas = array_map(function($carga){
      return  "<tr><td>".$carga['value']."</td>
      			   <td>".$carga['label']."</td>
      			   <td><a onclick=' return confirmarEliminacion();' href='../includes/eliminarCarga.php?_id=".$carga['_id']."&u=adm' title='Eliminar marca'><span class='glyphicon glyphicon-trash'></span></a></td></tr>";
            }, $this->listaCargas());
      return implode($tablaCargas);
      
    }


	/***************** agregado de elementos ****************/

	function addCarga($consulta)
	{
		$response = array();
		try 
		{
			$response = $this->db->catalogoCargas->save($consulta);
		} catch(Exception $e) {
		    $response["err"] = $e->getCode();
		}
		return $response;
	}

	function addMarca($consulta)
	{
		$response = array();
		try 
		{
			$response = $this->db->catalogoMarcas->save($consulta);
		} catch(Exception $e) {
		    $response["err"] = $e->getCode();
		}
		return $response;
	}

	function addCiudad($consulta)
	{
		$response = array();
		try 
		{
			$response = $this->db->catalogoCiudades->save($consulta);
		} catch(Exception $e) {
		    $response["err"] = $e->getCode();
		}
		return $response;
	}
 
	function addEstacion($consulta)
	{
		$response = array();
		try 
		{
			$response = $this->db->paquetes->save($consulta);
		} catch(Exception $e) {
		    $response["err"] = $e->getCode();
		}
		return $response;
	}


	function addColonia($consulta)
	{
		$response = array();
		try 
		{
			$response = $this->db->catalogoColonias->save($consulta);
		} catch(Exception $e) {
		    $response["err"] = $e->getCode();
		}
		return $response;
	}


	function addUsuario($consulta)
	{
		$response = array();
		try 
		{
			$response = $this->db->usuario->insert($consulta);
		} catch(Exception $e) {
		    $response["err"] = $e->getCode();
		}
		return $response;
	}

	/***************** eliminacion de elementos ****************/

	function deleteCapturista($capturista)
	{
			return $this->db->usuario->remove($capturista);
	}

	function deleteEstacion($estacion)
	{
			return $this->db->paquetes->remove($estacion);
	}


	function deleteCiudad($ciudad)
	{
			return $this->db->catalogoCiudades->remove($ciudad);
	}

	function deleteColonia($colonia)
	{
			return $this->db->catalogoColonias->remove($colonia);
	}
	function deleteMarca($marca)
	{
			return $this->db->catalogoMarcas->remove($marca);
	}
	function deleteCarga($marca)
	{
			return $this->db->catalogoCargas->remove($marca);
	}


	/*************** Reportes de ******************/

	/****** Paquetes ********/


	function mapListaPaquetes()
	{
		$opciones = array_map(function($paquete){			
         		      return "<option value='".$paquete['_id']."' >".$paquete['estacion']."</option>";   
            		}, 
            		$this->listaPaquetes());
		return implode($opciones);
	}

/*
	function mapListaPaquetesId()
	{
		$lista = array_map(function($paquete){			
         		      return "<tr> <td data-idPaquete ='".$paquete['_id']."'>".$paquete['estacion']." </td> </tr>";   
            		}, 
            		$this->listaPaquetes());
		return implode($lista);
	}

*/
	/****** capturistas ********/

	function mapListaCapturistas()
	{
		$opciones = array_map(function($capturista){
						return "<option value='".$capturista['nombre']."'>".$capturista['nombre']." ".$capturista['apellidos']."</option>";
				   },
				   $this->listaCapturistas());
		return implode($opciones);
	}


	/*********************/

	function close(){
		$this->conexion->close(); 
	}   

}