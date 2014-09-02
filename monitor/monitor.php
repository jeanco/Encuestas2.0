<?php
include("../includes/Monitor.php");

  $monitor = array();
  
  $client = new Monitor();

  //cantidad total de filas capturadas o encuestas ods2_mayo_14 mongodb
  $monitor['totalEncuestas'] = $client->totalEncuestas();
 
  // ultimos datos del log
  $monitor['log'] = $client->getLog();

  echo json_encode($monitor);  
exit();
?>
