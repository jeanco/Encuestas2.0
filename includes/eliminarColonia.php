<?php
include('admin.php');

$idmongo = new MongoId( $_GET['_id'] );

$client = new admin();
$consulta =  array('_id'=>$idmongo );

$client->deleteColonia($consulta);
$client->close();

if ($_GET['u'] == 'adm') {
	# code...
	header('location:../admin/index.php');
}else{
	header('location:../admin/catalogoColonias.html');
}

?>