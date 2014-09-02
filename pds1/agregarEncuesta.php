<?php
//echo " <form id='agregarEncuesta'> <button id='btn_agregarEncuesta' class='btn btn-primary'>Crear Nuevo</button></form>";
?>
<!DOCTYPE html>
<html>
<head>

  <title></title>

</head>
<body>
 <form id='agregarEncuesta'> 
 <button id='btn_agregarEncuesta'>Crear Nuevo</button>
 </form>
</body>
</html>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

  <script type="text/javascript" >
  $('#btn_agregarEncuesta').click(function (event) {
              event.preventDefault();
              alert("encuesta");
              event.stopPropagation();
               var str = $("#agregarEncuesta").serialize();
               console.log('agregar' + str);
               $.ajax({
                   url: "encuesta.php",
                   data: str,
                   success: function (response) {
                   alert(response);
                     var obj = JSON.parse(response);
                       if(obj.err === null)
                       {
                          alert('La Encuesta se agregó satisfactoriamente');
                          setTimeout(function(){ location.reload()},600); 

                       }else{
                          alert('la Encuesta ya existe, verifique porfavor!');
                       }
                   
                   }
               });
             
           })
</script>
