<?php 
session_start();
include('/../includes/Auth.php');
$auth = new Auth();

if( !$auth->isLoggedIn() ){
	//echo "no logueado<br>redireccion a inicio sesion";
	header("Location:../index.php");
	exit();
}
	/* Nivel de usuario */
	if( $_SESSION['tipo'] != "administrador"){
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

?>