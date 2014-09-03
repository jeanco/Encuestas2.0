<?php
class ConexionMongodb 
{			
		protected $conexion;
		const DB='devencuestas';
		const SERVER='mongodb://JAYROSERVER-PC:27017';
	//	const DB='encuestas';
	//	const SERVER='mongodb://ENCUESTAS:27017';		
		protected $db;

		function __construct() 
		{
			$this->conexion  = new MongoClient(self::SERVER);
			$this->db = $this->conexion->selectDB(self::DB);
		}

		function close(){
			return $this->db->close();	
		}
}