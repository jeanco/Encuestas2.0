<?php
include('admin.php');

$idmongo = new MongoId( $_GET['_id'] );

$client = new admin();
$consulta =  array('_id'=>$idmongo );

$client->deleteEstacion($consulta);
$client->close();
header('location:../admin/index.php');
?>