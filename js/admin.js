
              $('input').on('input', function(evt) { 
                    $(this).not('#contrasenya').val(function (_, val) {
                      return val.toUpperCase();
                    });
                  });

                /*****************************/

               $('#usuariosDia').on( "submit", function() {
                  event.preventDefault();
                  var rubro, capturista, fechaEspecifica;
                  rubro = $( "input:radio[name=rubroDia]:checked" ).val();
                  capturista = $( "#capturistaPorDia option:selected" ).val();
                  fechaEspecifica = $( "#fechaEspecifica" ).val();                  
                  $('#modalUsuarios').modal("toggle");
                  $.get('../excel/visorRepUsuarioDia.php?capturista='+capturista+'&rubro='+rubro+'&fechaEspecifica='+fechaEspecifica, function(data) {
                    $('#bodyUsuarios').html(data);
                  });
               })

               $('#usuariosRango').on( "submit", function() {
                  event.preventDefault();
                  var rubro, capturista;
                  rubro = $( "input:radio[name=rubroRango]:checked" ).val();
                  capturista = $( "#capturistaPorRango option:selected" ).val();
                  var ini =  $('#fechaInicial').val();
                  var fin =  $('#fechaFinal').val();                  
                  $('#modalUsuarios').modal("toggle");
                  $.get('../excel/visorRepUsuarioRango.php?capturista='+capturista+'&rubro='+rubro+'&ini='+ini+'&fin='+fin, function(data) {
                    $('#bodyUsuarios').html(data);
                  });
               })

               $('#usuarios').on( "submit", function() {
                  event.preventDefault();
                  var rubro, capturista;
                  rubro = $( "input:radio[name=rubroNombre]:checked" ).val();
                  capturista = $( "#capturista option:selected" ).val();
                  $('#modalUsuarios').modal("toggle");
                  $.get('../excel/visorRepUsuario.php?capturista='+capturista+'&rubro='+rubro, function(data) {
                    $('#bodyUsuarios').html(data);
                  });
               })

                /*****************************/

               $('#formPaquetesDia').on( "submit", function() {
                  event.preventDefault();
                  var rubro, paquetes, fechaEspecifica;
                  rubro  = $( "input:radio[name=rubroPaqDia]:checked" ).val();
                  idEstacion = $( "#paqueteDia option:selected" ).val();
                  fechaEspecifica = $( "#fechaEspecificaPaq" ).val();                  
                  $('#modalPaquetes').modal("toggle");
                  $.get('../excel/visorRepPaquetesDia.php?idEstacion='+idEstacion+'&rubro='+rubro+'&fechaEspecifica='+fechaEspecifica, function(data) {
                     $('#bodyPaquetes').html(data);              
                  });
               })

               $('#formPaquetesRango').on( "submit", function() {
                  event.preventDefault();
                  var rubro, paquetes;
                  rubro  = $( "input:radio[name=rubroPaqRango]:checked" ).val();
                  idEstacion = $( "#paqueteRango option:selected" ).val();
                  var ini =  $('#fechaInicialPaq').val();
                  var fin =  $('#fechaFinalPaq').val();                         
                  $('#modalPaquetes').modal("toggle");
                  $.get('../excel/visorRepPaquetesRango.php?idEstacion='+idEstacion+'&rubro='+rubro+'&ini='+ini+'&fin='+fin, function(data) {
                     $('#bodyPaquetes').html(data);              
                  });
               })

               $('#formPaquetes').on( "submit", function() {
                  event.preventDefault();
                  var rubro, paquetes;
                  rubro  = $( "input:radio[name=rubroPaq]:checked" ).val();
                  idEstacion = $( "#paquetes option:selected" ).val();
                  $('#modalPaquetes').modal("toggle");
                  $.get('../excel/visorRepPaquetes.php?idEstacion='+idEstacion+'&rubro='+rubro, function(data) {
                     $('#bodyPaquetes').html(data);              
                  });
               })


                 $('#agregarUsuario').submit(function (event) {
                  event.preventDefault();
                  event.stopPropagation();
                   var str = $("#agregarUsuario").serialize();
                 //  console.log('Desde agregar Usuario' + str);
                   $.ajax({
                       url: "../includes/addUsuario.php",
                       data: str,
                       success: function (response) {
                      // //alert(response);
                         var obj = JSON.parse(response);
                           if(obj.err === null)
                           {
                              alert('El usuario se agregó satisfactoriamente');
                              setTimeout(function(){ location.reload()},600); 
                           }else{
                              alert('El usuario ya existe, verifique porfavor!');
                           }
                       
                       }
                   });
               })

                ////// boton parar agregar estaciones
                 $('#agregarEstaciones').submit(function (event) {
                  event.preventDefault();
                  event.stopPropagation();
                   var str = $("#agregarEstaciones").serialize();
                  // console.log('Desde agregarEstaciones' + str);
                   $.ajax({
                       url: "../includes/addEstacion.php",
                       data: str,
                       success: function (response) {
                       //alert(response);
                         var obj = JSON.parse(response);
                           if(obj.err === null)
                           {
                              alert('La estacion se agregó satisfactoriamente');
                              setTimeout(function(){ location.reload()},600); 

                           }else{
                              alert('la estacion ya existe, verifique porfavor!');
                           }
                       
                       }
                   });
               })

                ////// boton parar agregar cargas
                 $('#agregarCarga').submit(function (event) {
                  event.preventDefault();
                  event.stopPropagation();
                   var str = $("#agregarCarga").serialize();
                  // console.log('Desde agregarCarga' + str);
                   $.ajax({
                       url: "../includes/addCarga.php",
                       data: str,
                       success: function (response) {
                       //alert(response);
                         var obj = JSON.parse(response);
                           if(obj.err === null)
                           {
                              alert('La carga se agregó satisfactoriamente');
                              setTimeout(function(){ location.reload()},600); 

                           }else{
                              alert('la carga ya existe, verifique porfavor!');
                           }
                       
                       }
                   });
                 
                 
               })

                ////// boton parar agregar marcas
                 $('#agregarMarcas').submit(function (event) {
                  event.preventDefault();
                  event.stopPropagation();
                   var str = $("#agregarMarcas").serialize();
                 //  console.log('Desde agregarMarcas' + str);
                   $.ajax({
                       url: "../includes/addMarca.php",                    
                       data: str,
                       success: function (response) {
                        //alert(response);
                         var obj = JSON.parse(response);
                           if(obj.err === null)
                           {
                              alert('La marca se agregó satisfactoriamente');
                              setTimeout(function(){ location.reload()},600); 
                           }else{
                              alert('la marca ya existe, verifique porfavor!');
                           }
                       
                       }
                   });
                 
               })

                ////// boton parar agregar ciudades
                 $('#agregarCiudad').submit(function (event) {
                  event.preventDefault();
                  event.stopPropagation();
                   var str = $("#agregarCiudad").serialize();
                //   console.log('Desde agregarCiudad' + str);
                   $.ajax({
                       url: "../includes/addCiudad.php",                    
                       data: str,
                       success: function (response) {
                       //alert(response);
                         var obj = JSON.parse(response);
                           if(obj.err === null)
                           {
                              alert('La ciudad se agregó satisfactoriamente');
                              setTimeout(function(){ location.reload()},600); 
                           }else{
                              alert('la ciudad ya existe, verifique porfavor!');
                           }
                       
                       }
                   });

               })

                ////// boton parar agregar colonia
                 $('#agregarColonia').submit(function (event) {
                  event.preventDefault();
                  event.stopPropagation();
                   var str = $("#agregarColonia").serialize();
                  // console.log('Desde agregarColonia' + str);
                   $.ajax({
                       url: "../includes/addColonia.php",
                       data: str,
                       success: function (response) {
                       //alert(response);
                         var obj = JSON.parse(response);
                           if(obj.err === null)
                           {
                              alert('La colonia se agregó satisfactoriamente');
                              setTimeout(function(){ location.reload()},600); 
                           }else{
                              alert('la colonia ya existe, verifique porfavor!');
                           }
                       
                       }
                   });

               })


 function confirmarEliminacion() {
   var x;
   var r=confirm("¿Estas seguro de eliminar el registro? ");
   return (r);
 }


 $("#monitor").click(function(){
    window.open("../monitor/", "_blank");
 });


  <!---->            
 function capaoculta(e){
      kc=e.keyCode?e.keyCode:e.which;
      sk=e.shiftKey?e.shiftKey:((kc==16)?true:false);
          if(((kc>=65&&kc<=90)&&!sk)||((kc>=97&&kc<=122)&&sk)){
            $('#msjMayus').html("<div class='alert alert-warning'><strong> <span class='glyphicon glyphicon-warning-sign'></span> Bloq Mayús! </strong> está activado. </div>");
            $('#msjMayus').show(); 
         }else{
            $('#msjMayus').hide();
          } 
 }


  var today = new Date();
  var dd = today.getDate();
  var mm = today.getMonth()+1; //January is 0!
  var yyyy = today.getFullYear();
  if(dd<10){dd='0'+dd} if(mm<10){mm='0'+mm} var today = dd+'/'+mm+'/'+yyyy;

  $('#fechaEspecifica').val(today);
  $('#fechaInicial').val(today);
  $('#fechaFinal').val(today);

  $('#fechaEspecifica').datepicker({
      isRTL: false,
      format: 'dd/mm/yyyy',
      weekStart: '0',
      autoclose:true
  });

  $('#fechaInicial').datepicker({
      isRTL: false,
      format: 'dd/mm/yyyy',
      weekStart: '0',
      autoclose:true
  });

  $('#fechaFinal').datepicker({
      isRTL: false,
      format: 'dd/mm/yyyy',
      weekStart: '0',
      autoclose:true
  });

/****************************************/

  $('#fechaEspecificaPaq').val(today);
  $('#fechaInicialPaq').val(today);
  $('#fechaFinalPaq').val(today);

  $('#fechaEspecificaPaq').datepicker({
      isRTL: false,
      format: 'dd/mm/yyyy',
      weekStart: '0',
      autoclose:true
  });

  $('#fechaInicialPaq').datepicker({
      isRTL: false,
      format: 'dd/mm/yyyy',
      weekStart: '0',
      autoclose:true
  });

  $('#fechaFinalPaq').datepicker({
      isRTL: false,
      format: 'dd/mm/yyyy',
      weekStart: '0',
      autoclose:true
  });




function getDataTime(time){
    var numbers = time.match(/\d+/g); 
    var date = new Date(numbers[2], numbers[0]-1, numbers[1]);
    var n = date.toISOString();
    return n;
}

