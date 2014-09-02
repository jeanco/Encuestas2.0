<!DOCTYPE html>
<?php 
    include("../seguridad/sesiones/segCapturista.php");
?>
<html>
<head>
	<title></title>
	 <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
     <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">      
     <style type="text/css">
     td{
     	font-size: 0.6em;
     }
     th{
     	font-size: 0.8em;
     }
     #editMonitorEncuesta{
        float: right;
        display: none;
     }
     </style>
</head>
<body>
<div class="jumbotron">	
		<h1>Monitor de Encuestas</h1>
		<p> Total de capturas: <span id="totales"></span></p>
</div>
<span> cada 10 segundos se veran reflejados los nuevos cambios en la base de datos</span>
<div class="container row">
	<div id="contenedor" class="col-md-8">
		<table class="table table-striped table-bordered table-responsive table-hover">
			<tbody id="tbody"></tbody>
		</table>
	</div>
    <button class="btn btn-default btn-sm" id="editMonitorEncuesta">Edit</button>
	<div class="col-md-4" id="showDetallesEncuesta">
		
	</div>
</div>

<script type="text/javascript">
var tiempoIntervalo = (20*1000);
// generar tabla de monitoreo
monitorear();

//generar de nuevo tabla de monitoreo cada cierto tiempo
setInterval(function(){
	monitorear();
	//monitorear2();
},tiempoIntervalo);


function monitorear(){
	$.ajax({
		url: 'monitor.php',
		type: 'GET',
	})
	.done(function(data) {
		var monitor,tabla,filas;
		monitor = jQuery.parseJSON(data);
        console.info(monitor);
        tabla = $('table');
   
        //imprimir lista	
        tabla.html(setCabecera());
        //generar lista con elementos de la consulta
        filas = $.map(monitor.log, setFilas);         
       
        tabla.append(filas);

        //imprimir total de capturas realizadas
        $("#totales").html(monitor.totalEncuestas);
       
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
	}
    
    //cabecera de tabla de contenidos
    var setCabecera = function(){
    	var cabecera, idEncuesta, hora, capturista, status, carretera, estacion, km;
//hora	usuario	carretera	estacion	km	sentido	id_paquete	marca	status    	
    	cabecera    = $('<tr>');
        idEncuesta  = $('<th>ID Encuesta</th>');
        hora        = $('<th>Fecha de Captura</th>');
        carretera	= $('<th>Carretera</th>');
        estacion	= $('<th>Estacion</th>');
        km			= $('<th>Km</th>');
        capturista  = $('<th>Capturista</th>');
        status      = $('<th>Status</th>');
        cabecera.append(idEncuesta)
        		.append(hora)
        		.append(carretera)
        		.append(estacion)
        		.append(km)
        		.append(capturista)
        		.append(status);
        return cabecera;		

    };
    var setFilas   = function(item, index) {
        
        	var fila, idEncuesta, hora, capturista, status, carretera, estacion, km;
        	fila       = $('<tr>');
        	idEncuesta = $('<td>'+index+'</td>');
        	idEncuesta.appendTo(fila);

             if(!item.status.err){
                var date = new Date(item.encuesta.fechaCaptura.sec*1000),          
                year = date.getFullYear(),            
                day = date.getDate(),            
                month = date.getMonth()+1,           
                hours = date.getHours(),
                minutes = date.getMinutes(),
                seconds = date.getSeconds(),

                d = day + '/' + month + '/' + year+' '+hours+':'+minutes+':'+seconds;


                hora       = $('<td>'+d+'</td>');
                hora.appendTo(fila);
                carretera  = $('<td>'+item.encuesta.carretera+'</td>')
                carretera.appendTo(fila);
                estacion   = $('<td>'+item.encuesta.estacion+'</td>')
                estacion.appendTo(fila);
                km         = $('<td>'+item.encuesta.km+'</td>')
                km.appendTo(fila);  

                capturista = $('<td>'+item.encuesta.capturista+'</td>');
                capturista.appendTo(fila);
                //status = $('<td>'+item.status.ok+'</td>');
                if(item.status.ok==1)
                {
                  //status = $('<td>'+item.status.ok+'</td>');  
                  status = $('<td>'+"insertado"+'</td>'); 
                }
                if(item.status.ok==2)
                {
                  //status = $('<td>'+item.status.ok+'</td>');  
                  status = $('<td>'+"actualizado"+'</td>'); 
                }

                status.appendTo(fila);
            }else{
                error =  $('<td colspan="6" style="text-align:center;"><strong>Error en la encuesta</strong></td>');
                error.appendTo(fila);
            }

            
        	setClickFila(fila, item);
        	return fila;
        }

        $('#editMonitorEncuesta').click(function(event) {            
             window.location.href = '../'+$(this).data('url');
        });

    var setClickFila = function(fila, datos){
    	var contenedor = $("#showDetallesEncuesta");
    	$(fila).on("click",function(event){           
    		//--mstrar valores de encuesta en una lista            
            //show edit view  
            var editBtn = $('#editMonitorEncuesta');

            if(datos.status.err){
                //console.log("datos",datos);
                contenedor.html(datos.errMsg);
                editBtn.hide();
                return;  
            }           
           
            var url = datos.encuesta.rubro+"/edit.php?id="+datos.encuesta._id.$id;
                editBtn.data('url', url);
                editBtn.show();
               
            

    		event.preventDefault();
    		var ol, elementos;
    		ol = $('<ol>');
    		
            $.each(datos.encuesta, function(index, val) {
               var li = $('<li>');
                li.text(index+" : "+val);
                //console.log(index);
                if(index=="fechaCaptura" )//|| index=="_id"
                {
                    $.each(val, function(index2, va) {
                       console.log(index2,va);
                        if(index2=='sec') //index2=='usec'
                        {
                        var date = new Date(va*1000),  
                        year = date.getFullYear(),            
                        day = date.getDate(),            
                        month = date.getMonth()+1, 
                        hours = date.getHours(),
                        minutes = date.getMinutes(),
                        seconds = date.getSeconds(),

                        d = day + '/' + month + '/' + year+' '+hours+':'+minutes+':'+seconds;

                        var li = $('<li>');                       
                        li.text(index+" : "+d);
                        li.appendTo(ol); 
                        }  
                     });
                }

                if(index=='_id')
                {
                 li.text('id : '+val.$id);   
                }
               li.appendTo(ol);  
            });
    		//ol.append(elementos);
    		contenedor.html(ol);
            console.log(datos.encuesta);
    	});
    };     
 
</script>	
</body>
</html>