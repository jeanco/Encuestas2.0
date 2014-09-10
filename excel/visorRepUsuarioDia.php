<?php
 include('reportes.php');
 $client = new Reporte();
 //var_dump($_GET);

 $usuario = $_GET;

 $fechaEspecificai = $client->getInicioDia($usuario['fechaEspecifica']);
 $fechaEspecificaf = $client->getFinDia($usuario['fechaEspecifica']);

 $consulta = array('fechaCaptura'=>array('$gt'=>new MongoDate(strtotime($fechaEspecificai)), '$lte'=>new MongoDate(strtotime($fechaEspecificaf) )), 'capturista'=>$usuario['capturista'],'rubro'=>$usuario['rubro']);
 $count = $client->countEncUsuario($consulta);
//var_dump($count);

 if ($count == 0 || $count == null) {
 ?>
	<p><span> <span class="glyphicon glyphicon-warning-sign" style="font-size:16px;"></span>   No existen registros para generar descarga. </span></p>
<?php
 } else {
?>
  <p><span>A continuacion se previsualizan el(los) reporte(s) generado(s) de la consulta. De clic en el boton <span class="glyphicon glyphicon-download" style="font-size:16px;"></span> para descargar. </span></p>
  <p><span style="float: right;"><b>Total de encuestas realizadas: </b>&nbsp;&nbsp;<span  class="badge"><?php echo $count; ?></span></span></p>
  <p>&nbsp;</p>
  <table class="table table-condensed table-striped" >
		<thead>
			<tr>
				<th>#</th>
				<th>Documento</th>
				<th width="30%">Descarga</th>
			</tr>
		</thead>
		<tbody id="reportesUsuario"></tbody>
  </table>
<script type="text/javascript">
	var totalRegistros = parseInt("<?php echo $count; ?>"); 
	var capturista = "<?php echo $usuario['capturista']; ?>";
	var rubro = "<?php echo $usuario['rubro']; ?>";
	var ini = "<?php echo $fechaEspecificai; ?>"; 
    var fin = "<?php echo $fechaEspecificaf; ?>";
	var reportes=[];
	var vuelta = 0;

	while(totalRegistros > 0){
	if (totalRegistros > 8000) {
		reportes.push({skip:(vuelta*8000),limit:8000-1});
		totalRegistros -= 8000;
	} else if (totalRegistros <= 8000) {
		reportes.push({skip:(vuelta*8000),limit:totalRegistros});
		totalRegistros -= totalRegistros;
	}
	vuelta++;
	}

	var table = $('#reportesUsuario');
	for (var i = 0; i<reportes.length; i++) {
		var tr = $('<tr><td>'+(i+1)+'</td><td>Reporte</td></tr>');
		var td = $('<td></td>');
		var button = $('<button data-skip="'+reportes[i].skip+'" data-limit="'+reportes[i].limit+'" class="btn btn-success">Descargar <span class="glyphicon glyphicon-download" ></span></button>');	
		$( button ).on( "click", function() {
			event.preventDefault();
	        window.open("../excel/excelUsuario.php?capturista="+capturista+"&rubro="+rubro+"&skip="+$( this ).data('skip') +"&limit="+$( this ).data('limit')+"&ini="+ini+"&fin="+fin , "_blank");          
		});
		tr.append(td);
		td.append(button);
		table.append(tr);
	};	
</script>
<?php
}
?>