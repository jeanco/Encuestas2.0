<?php
class ConexionMongodb 
{			
		protected $conexion;
		const DB='encuestas';
		const SERVER='semicmex1.dyndns.org:27018';		
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