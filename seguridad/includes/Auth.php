<?php 
require_once("/../../includes/ConexionMongodb.php");
class Auth extends ConexionMongodb
{
	protected $colUsers;
	function __construct()
	{
		parent::__construct();
		$this->colUsers = $this->db->usuario;
	}

	function isLoggedIn(){
		return (isset( $_SESSION['_id']))? true : false; 	
	}

	function getLevel(){
		return $_SESSION['tipo'];
	}

	function authenticate($user)
	{
		$elements = array('contra'=>0);
		return $this->colUsers->findOne($user,$elements);
	}
	function authorizate($user){
		$_SESSION = $user;
		return $_SESSION;
	}

	function logOut(){
		session_start();
		session_unset();
		session_destroy();
		return session_destroy();

	}
}