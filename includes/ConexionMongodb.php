<?php
class ConexionMongodb 
{			
		protected $conexion;

		/*Production*/
		const DB='encuestas';
		const SERVER='mongodb://encuestas:27017';

	   // const DB='devencuestas';
	   // const SERVER='semicmex1.dyndns.org:27018';		
	   // const SERVER='mongodb://JAYROSERVER-PC:27017';

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