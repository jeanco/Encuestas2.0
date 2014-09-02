<?php
include('admin.php');
$idmongo = new MongoId( $_GET['_id'] );
$client = new admin();
$consulta =  array('_id'=>$idmongo );
$client->deleteCapturista($consulta);
$client->close();
header('location:../admin/index.php');
?>