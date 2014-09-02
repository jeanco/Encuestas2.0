<?php

session_start();
include('../includes/Auth.php');
$auth = new Auth();
$usuario = $_POST;

$login = array("nombre"=>$_POST['nombre'], "contra"=>$_POST['contra']);
$autentificacion = $auth->authenticate($login);

if( $autentificacion != null && isset($autentificacion['_id']) ){
	//echo "el usuario SI existe en la base de datos";
	/* autorización */
	$auth->authorizate($autentificacion);
	$level=$auth->getLevel();
	

	/* codificador */
	if( isset($_POST['encuestas'])){
		$encuesta = $_POST['encuestas'];
		
		switch ( $_POST['encuestas'] ) {
			case 'ods1':
				header("location:../../ods1/index.php?idEstacion=".$_POST['idEstacion']."&estacion=".$_POST['estacion']."&carretera=".$_POST['carretera']."&km=".$_POST['km']."&capturista=".$_POST['nombre']);
			    exit();	
				break;
			case 'pds1':
				header("location:../../pds1/index.php?idEstacion=".$_POST['idEstacion']."&estacion=".$_POST['estacion']."&carretera=".$_POST['carretera']."&km=".$_POST['km']."&capturista=".$_POST['nombre']);
			    exit();
				break;
			case 'admin':
				header("location:../../admin/index.php?capturista=".$_POST['nombre']);
			    exit();
				break;	
			default:
				# code...
				break;
		}

	}else{
		include('alerta.html');
		?>
		<script type="text/javascript">
		setTimeout(function(){
			window.history.go(-1);
		}, 3000);
		</script>
	<?php
	exit();	
	}

}

	include('alerta.html');
		?>
		<script type="text/javascript">
		setTimeout(function(){
			window.history.go(-1);
		}, 3000);
		</script>
	<?php
	exit();


?>