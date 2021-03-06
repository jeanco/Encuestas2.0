<?php
 include('reportes.php');
 $client = new Reporte();
 $usuario = $_GET;
 $count = $client->countEncUsuario($_GET);
// $count =8001;
 if ($count == 0 || $count == null) {
 ?>
		<p><span> <span class="glyphicon glyphicon-warning-sign" style="font-size:16px;"></span>   Aún no existen registros para generar descargar. </span></p>
<?php
 } else {
?>
<div class="col-lg-12">
	<p><span>A continuacion se previsualizan los reportes generados de la consulta. De clic en el icono <span class="glyphicon glyphicon-download" style="font-size:16px;"></span> para descargar. </span></p>
		<table class="table table-condensed table-striped" >
			<thead>
				<tr>
					<th>#</th>
					<th>Reporte</th>
					<th>Descarga</th>
				</tr>
			</thead>
			<tbody id="reportes"></tbody>
		</table>
</div>
<script>
	var totalRegistros = parseInt("<?php echo $count; ?>"); // convertir en int
	var capturista = "<?php echo $usuario['capturista']; ?>";
	var rubro = "<?php echo $usuario['rubro']; ?>";
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

		var table = $('#reportes');
		for (var i = 0; i<reportes.length; i++) {
			var tr = $('<tr><td>'+(i+1)+'</td><td>Reporte (parte-'+(i+1)+')</td></tr>');
			var td = $('<td></td>');
			var button = $('<button  data-capturista="'+capturista+'" data-rubro="'+rubro+'" data-skip="'+reportes[i].skip+'" data-limit="'+reportes[i].limit+'" class="btn btn-success">Descargar <span class="glyphicon glyphicon-download" ></span></button>');	
			$( button ).on( "click", function() {
				event.preventDefault();
			  //	alert( $( this ).data('idestacion') );
		        window.open("../excel/excelUsuario.php?capturista="+ $( this ).data('capturista') +"&rubro="+$( this ).data('rubro') +"&skip="+$( this ).data('skip') +"&limit="+$( this ).data('limit') , "_blank");          
			});
			tr.append(td);
			td.append(button);
			table.append(tr);
		};

	// console.log(reportes);

</script>
<?php
}
?>