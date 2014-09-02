<?php 
require_once("../includes/Auth.php");
$auth = new Auth();
$auth->logOut();
//var_dump($auth->logOut());
//header('Location:index2.php');
return header('Location:../../index.php');
             
?>
