<?php
include('admin.php');

$idmongo = new MongoId( $_GET['_id'] );

$client = new admin();
$consulta =  array('_id'=>$idmongo );

$client->deleteCiudad($consulta);
$client->close();

if ($_GET['u'] == 'adm') {
	# code...
	header('location:../admin/index.php');
}else{
	header('location:../admin/catalogoCiudades.html');
}


?>