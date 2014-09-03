
              $('input').on('input', function(evt) { 
                    $(this).not('#contrasenya').val(function (_, val) {
                      return val.toUpperCase();
                    });
                  });

               $('#usuarios').on( "submit", function() {
                  event.preventDefault();
                  var encuesta, capturista;
                  encuesta = $( "input:radio[name=encuestasCap]:checked" ).val();
                  capturista = $( "#capturista option:selected" ).val();
                  $('#modalUsuarios').modal("toggle");
                  $.get('../excel/visorRepUsuario.php?capturista='+capturista+'&rubro='+encuesta, function(data) {
                    $('#bodyUsuarios').html(data);
                  });
               })


               $('#formPaquetes').on( "submit", function() {
                  event.preventDefault();
                  var encuesta, paquetes;
                  encuesta  = $( "input:radio[name=encuestasEst]:checked" ).val();
                  idEstacion = $( "#paquetes option:selected" ).val();
                  $('#modalPaquetes').modal("toggle");
                  $.get('../excel/visorRepPaquetes.php?idEstacion='+idEstacion+'&rubro='+encuesta, function(data) {
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




