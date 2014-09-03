<?php
	include('includes/paquetes.php'); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Encuestas 2.0</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="http://protodesarrollos.com/tools/img/semic_ico.ico" rel="icon" type="image/x-icon" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.vertical-tabs.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<h1 class="title text-center">Encuestas 2.0</h1>

			<div id="tabOpciones" class="col-xs-3">
			    <!-- Nav tabs -->
			    <ul class="nav nav-tabs tabs-left">
			      <li class="active"><a href="#capturista" data-toggle="tab">Capturista</a></li>
			      <li ><a href="#administrador" data-toggle="tab">Administrador</a></li>
			     
			    </ul>
			</div>

			<div id="tabContenido" class="col-xs-9">
			
			<!-- Tab administrador -->
			    <div class="tab-content">


			<!-- Tab capturista -->
			      <div class="tab-pane active" id="capturista">
			      	
					<!---inicio sesion-->
					<div class="col-lg-4 well">
					  	<form id="divFrmSesion" class="form-horizontal" method="post" action="seguridad/sesiones/autentificador.php" accept-charset="utf-8">
							<div class="col-lg-12">
								<div class="form-group">
								    <h3>Paquete</h3>
								    <div class="input-group">
								    	<div class="input-group-addon"><i class="glyphicon glyphicon-road"></i></div>
								    	<input id="estacion" class="form-control" type="text" name="estacion" onfocus="this.blur()" required>
								    </div>
								</div>
								<div class="form-group">
									<h3>Formatos</h3>
									<div class="radio">
									    <label>
									      <input type="radio" name="encuestas" id="optionsRadios2" value="ods1">
									      Origen y Destino : F1
									    </label>
								  	</div>
								  <!-- Formato 1 Preferencias Declaradas -->
								  	<div class="radio">
								  <label>
								    <input type="radio" name="encuestas" id="optionsRadios4" value="pds1" required>
								     Preferencias Declaradas : F1
								  </label>
								  </div>
								</div>	
								<div class="form-group">
								    <div class="input-group">
								      	<div class="input-group-addon"><i class="glyphicon glyphicon-user"></i></div>
								      	<input class="form-control" type="text" name="nombre" placeholder="Escribe tu nombre de usuario" required>
								    </div>
								</div>
								<div class="form-group">
								    <div class="input-group">
								      	<div class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></div>
								      	<input class="form-control" type="password" placeholder="Escribe tu password" id="contra" name="contra" required>
								    </div>
								</div>
							</div>
							<input type="hidden" name="idEstacion" id="idEstacion">
							<input type="hidden" name="carretera" id="carretera">
							<input type="hidden" name="km" id="km">
							<button class="btn btn-default btn-block" type="submit">iniciar sesion</button>
						</form>
					</div>

					<!---paquetes-->
					<div id="divPaquetes" class="col-lg-7 well">
						<p>Para seleccionar una estacion clic sobre ella&nbsp;<i class="glyphicon glyphicon-hand-down"></i></p>
						<div id="paquetesLista" class="col-lg-12">
							<table class="table table-condensed table-hover" id="mapPaquetes">
								<tr> <th>Carretera</th> <th>Estacion</th> <th>KM</th> </tr>
								<tbody>
									<?php 
										$client = new Paquetes();
										echo $client->mapPaquetes(); 
									?>
								</tbody>
							</table>
						</div>
					</div>

				  </div>

				  	<div class="tab-pane" id="administrador">
				  	<div class="col-lg-6 col-lg-offset-3 well">
					  	<form id="divFrmSesion" class="form-horizontal" method="post" action="seguridad/sesiones/autentificador.php" accept-charset="utf-8">
							<div class="col-lg-12">
								<div class="form-group">
								    <div class="input-group">
								      	<div class="input-group-addon"><i class="glyphicon glyphicon-user"></i></div>
								      	<input class="form-control" type="text" name="nombre" placeholder="Escribe tu nombre de usuario" required>
								    </div>
								</div>
								<div class="form-group">
								    <div class="input-group">
								      	<div class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></div>
								      	<input class="form-control" type="password" id="contra" name="contra" placeholder="Escribe tu password" required>
								    	<input type="hidden" name="encuestas" value="admin">
								    </div>
								</div>
							</div>
							<button class="btn btn-default btn-block" type="submit">iniciar sesion</button>
							
						</form>
					</div>
				  </div>
				</div>
			</div>  



		</div>
	</div>

	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script>
		$('tr').click(function(event) {
			var paquete = $(this).data("datosestacion");
			$('#idEstacion').val(paquete.idEstacion);			
			$('#estacion').val(paquete.estacion);
			$('#carretera').val(paquete.carretera);			
			$('#km').val(paquete.km);
		});

         $('input').on('input', function(evt) { // script para que todos los input text sean mayus
               $(this).not('#contra').val(function (_, val) {
                 return val.toUpperCase();
               });
             });


	</script>
</body>
</html>