<?php
//include('../seguridad/sesiones/segAdministrador.php');
include('../includes/admin.php');
//session_start();
$client = new Admin();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Opciones  Admin</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/jquery.dataTables.css">    
    <link rel="stylesheet" href="../css/style.css">        
    <script src="../js/jquery.min.js" type="text/javascript"></script>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../js/jquery.dataTables.js" type="text/javascript"></script>  
  </head>
<body>   
 <div class="container">
   <p><h1 class="center">Operaciones administrativas</h1></p>
    <div class="row col-md-12 col-lg-12" >
         <div class=" col-lg-2" style="float:right;">
           <a href="../seguridad/sesiones/cerrarSesion.php">Cerrar Sesión</a>
          </div>
         <div class=" col-lg-3" style="float:right;" >
            <span align="right">Monitoreo de capturas</span>
             <a id="monitor">
                <button  type="button" class="btn btn-success btn-md"> Mostrar  <span class="glyphicon glyphicon-time"></span> </button>
             </a> 
           </div>          
    </div>

    <div class="clearfix">&nbsp;</div>

    <div class="row">
         <div class="col-md-12 col-lg-12">
            <div class="tabbable tabs-left"><!-- tab content-->
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#a" data-toggle="tab">Reporte Excel Filtro por Capturista</a></li>
                  <li><a href="#b" data-toggle="tab">Reporte Excel Filtro por Estaciones</a></li>
                  <li><a href="#c" data-toggle="tab">Agregar Capturista</a></li>
                  <li><a href="#d" data-toggle="tab">Agregar Estaciones</a></li>
                  <li><a href="#e" data-toggle="tab">Agregar Ciudades</a></li>
                  <li><a href="#f" data-toggle="tab">Agregar Colonias</a></li>
                  <li><a href="#g" data-toggle="tab">Agregar Marcas</a></li>
                  <li ><a href="#h" data-toggle="tab">Agregar Tipo de carga</a></li>
                </ul>              
                <div class="tab-content"> 

                   <div class="tab-pane active" id="a"><!-- tab capturistas-->

                         <div id="selectCapturista" class="row col-lg-5 col-lg-offset-2 well">
                             <form id="usuarios" method="post">
                                <div class="form-group">
                                    <select class="form-control" id="capturista" required >
                                       <option selected value="">Selecciones Capturista</option>
                                        <?php echo $client->mapListaCapturistas(); ?>
                                   </select>              
                                 </div>
                                  <div class="form-group">
                                     <label class="control-label">Formatos de encuestas disponibles</label>
                                       <div class="controls">
                                        
                                          <label class="radio col-lg-offset-1"> 
                                             <p><input type="radio" name="encuestasCap" value="ods1" checked="" required>Origen y Destino </p>
                                          </label>
                                          <label class="radio col-lg-offset-1">
                                             <p> <input type="radio" name="encuestasCap" value="pds1"> Preferencias Declaradas</p>                                          
                                          </label>                                        
                                       <!--   <label class="radio col-lg-offset-1">
                                            <p> <input type="radio" name="encuestasCap" value="ods2" required > Origen y Destino 2 </p>
                                          </label> -->   
                                       </div>
                                   </div>
                                     <button id="btnUsuarios" class="btn btn-primary"> Crear Excel   <span class="glyphicon glyphicon-download"></span> </button>
                              </form>
                          </div>
                   </div><!-- fin tab capturistas-->

                   <div class="tab-pane " id="b"><!--  tab paquetes-->
                       <p>&nbsp;</p>
                       <div id="selectEstaciones" class="row col-lg-5 col-lg-offset-2 well">
                             <form id="formPaquetes" method="post">
                                  <div class="form-group">
                                       <select class="form-control" id="paquetes" required >
                                           <option selected value="">Selecciones Paquete</option>
                                             <?php  echo $client->mapListaPaquetes();  ?>
                                        </select>              
                                   </div>
                                  <div class="form-group">
                                       <label class="control-label">Formatos de encuestas disponibles</label>
                                         <div class="controls">
                                              
                                            <label class="radio col-lg-offset-1">
                                                <p><input type="radio" name="encuestasEst" value="ods1" checked="" required >Origen y Destino</p>                                            
                                            </label>
                                            <label class="radio col-lg-offset-1">
                                                <p><input type="radio" name="encuestasEst" value="pds1">  Preferencias Declaradas</p>                                            
                                             </label>
                                          <!--   <label class="radio col-lg-offset-1">
                                                <p><input type="radio" name="encuestasEst" value="ods2" required >Origen y Destino 2</p>
                                             </label>-->
                                          </div>
                                  </div>
                                   <button id="btnPaquetes" class="btn btn-primary"> Crear Excel   <span class="glyphicon glyphicon-download"></span> </button>
                              </form>
                       </div>
                   </div><!-- fin tab paquetes-->

                   <div class="tab-pane" id="c"><!--  tab agregar capturistas-->
                      <p>&nbsp;</p>
                       <div class="row col-md-4 col-lg-4 ">
                          <span>Proporcione los datos necesarios para agregar capturista:</span>
                           <p>&nbsp;</p>
                               <form id="agregarUsuario">
                                   <div id="msjMayus" ></div>                     
                                    <div class="form-group">
                                       <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                                    </div>
                                    <div class="form-group">
                                       <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="contrasenya" name="contrasenya" placeholder="Contraseña" onkeypress="capaoculta(event);" required>
                                     </div>
                                    <div class="form-group">
                                       <select class="form-control" name="tipo" required>
                                       <option selected>Selecciones Tipo usuario</option>
                                       <option>capturista</option>
                                       <option>administrador</option>
                                       </select><br>  
                                    </div>
                                     <button type="submit" id="btn_agregarUsuario" class="btn btn-primary">Crear Nuevo</button> 
                               </form>
                        </div>
                        <div class="row col-md-4 col-lg-4 col-lg-offset-1">  
                         <h2>Usuarios registrados: </h2>                              
                                <table class="table table-condensed table-striped">
                                    <tr>
                                      <th>Nombre</th>
                                      <th>Apellidos</th>
                                      <th>Tipo usuario</th>
                                      <th>-</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php echo $client->tablaCapturistas(); ?>
                                  </tbody>
                                </table>
                         </div>
                    </div><!-- fin tab agregar capturistas-->

                   <div class="tab-pane" id="d"><!--  tab agregar estaciones-->
                      <p>&nbsp;</p>
                         <div class="row col-md-6 col-lg-6 ">
                          <span>Proporcione los datos necesarios para agregar Estaciones:</span>
                           <p>&nbsp;</p>
                                <form id="agregarEstaciones">

                                    <div class="form-group">
                                        <input type="text" class="form-control" id="estacion" name="estacion" placeholder="Estacion" required> </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="carretera" name="carretera" placeholder="Carretera" required></div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="km" name="km" placeholder="Kilometro" required> </div>
                                    <button type="submit" id="btn_agregarEstaciones" class="btn btn-primary">Crear Nuevo</button>
                                 </form>
                          </div>            
                          <div class="row col-md-9 col-lg-9 col-lg-offset-0" id ="tablaEstaciones"> 
                          <h2>Estaciones disponibles: </h2>
                                <table class="table table-condensed table-striped">
                                    <tr>
                                      <th>ID</th>
                                      <th>Estacion</th>
                                      <th>Carretera</th>                                      
                                      <th>KM</th>
                                      <th>-</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php echo $client->tablaEstaciones(); ?>
                                  </tbody>
                                </table>
                           </div>
                   </div> <!-- fin tab agregar estaciones-->

                   <div class="tab-pane" id="e"><!--  tab agregar ciudades-->
                     <p>&nbsp;</p>
                     <div class="row col-md-6 col-lg-6 ">
                      <span>Proporcione los datos necesarios para agregar Ciudades:</span>
                       <p>&nbsp;</p>
                          <form id="agregarCiudad">
                            <div class="form-group">
                                <input type="text" class="form-control" id="clavec" name="clavec" placeholder="Clave ciudad" required>
                             </div>
                            <div class="form-group">
                              <input type="text" class="form-control" id="nombrec" name="nombrec" placeholder="Nombre ciudad" required>
                                   </div>
                            <div class="form-group ">
                              <input type="text" class="form-control" id="descEstado" name="descEstado" placeholder="Estado (abrev)" required>
                                   </div>
                            <div class="form-group">
                              <input type="text" class="form-control" id="idestado" name="idestado" placeholder="Id Estado" required>
                                   </div>
                            <div class="form-group">
                              <input type="text" class="form-control"  id="locacion" name="locacion" placeholder="Locacion" required>
                                   </div>
                            <button type="submit" id="btn_agregarCiudad" class="btn btn-primary">Crear Nuevo</button>
                           </form>
                      </div>  
                      <div class="row col-md-9 col-lg-9 col-lg-offset-3">
                      <h2>Ultimos 20 registros</h2>
                      <p align="right">Ver catalogo completo <a href="catalogoCiudades.html" target="_blank" title="Ir Catalogo ciudades" >aqui</a></p>                          
                          <table class="table table-condensed table-striped">
                              <tr>
                                <th>Clave</th>
                                <th>Nombre</th>
                                <th>Abrev. Edo.</th>
                                <th>ID Edo.</th>
                                <th>Locacion</th>
                                <th>-</th>
                              </tr>
                           </thead>
                            <tbody>
                              <?php  echo $client->tablaCiudades(); ?>
                            </tbody>
                          </table>            
                        </div>
                   </div><!-- fin tab agregar ciudades-->

                   <div class="tab-pane" id="f"><p>&nbsp;</p><!--  tab agregar colonia-->
                    
                     <div class="row col-md-4 col-lg-4 ">
                        <span>Proporcione los datos necesarios para agregar Colonia:</span>
                         <p>&nbsp;</p>
                        <form id="agregarColonia">
                              <div class="form-group">
                                  <input type="text" class="form-control" id="clavecol" name="clavecol" placeholder="Clave colonia" required>
                               </div>
                              <div class="form-group">
                                  <input type="text" class="form-control" id="nombrecol" name="nombrecol" placeholder="Nombre colonia" required>
                               </div>
                              <div class="form-group ">
                                  <input type="text" class="form-control" id="municipio" name="municipio" placeholder="Nombre municipio" required>
                               </div>
                              <div class="form-group">
                                  <input type="text" class="form-control" id="cp" name="cp" placeholder="CP" required>
                               </div>
                              <button type="submit" id="btn_agregarColonia" class="btn btn-primary">Crear Nuevo</button> 
                          </form>
                       </div>
                        <div class="row col-md-5 col-lg-5" id="colonias">
                           <h2>Ultimos 20 registros</h2>
                           <p align="right">Ver catalogo completo <a href="catalogoColonias.html" target="_blank" title="Ir Catalogo ciudades" >aqui</a></p>                            
                              <table class="table table-condensed table-striped">
                                  <th>Clave</th>
                                  <th>Nombre</th>
                                  <th>Municipio</th>
                                  <th>CP</th>
                                  <th>-</th>
                                <tbody>
                                  <?php echo $client->tablaColonias(); ?>
                                </tbody>
                             </table>  
                                             
                         </div>
                    </div> <!-- fin tab agregar colonia-->

                   <div class="tab-pane" id="g"><!--  tab agregar marca-->
                      
                          <div class="row col-md-4 col-lg-4 ">
                            <span>Proporcione los datos necesarios para agregar marcas de auto:</span>
                             <p>&nbsp;</p>
                                <form id="agregarMarcas">
                                    <div class="form-group">
                                      <input type="text" class="form-control" id="clavem" name="clavem" placeholder="Clave marca" required>
                                   </div>
                                    <div class="form-group">
                                       <input type="text" class="form-control" id="nombrem" name="nombrem" placeholder="Nombre marca" required>
                                   </div>
                                    <button type="submit" id="btn_agregarMarcas" class="btn btn-primary">Crear Nuevo</button> 
                                </form>
                            </div>
                            <div class="row col-md-4 col-lg-4 col-lg-offset-1">
                              <h2>Ultimos 20 registros</h2>
                              <p align="right">Ver catalogo completo <a href="catalogoMarcas.html" target="_blank" title="Ir Catalogo ciudades" >aqui</a></p>
                                 <br>
                                <table class="table table-condensed table-striped">
                                  <th>Clave</th>
                                  <th>Nombre</th>
                                  <th>-</th>
                                <tbody>
                                  <?php echo $client->tablaMarcas(); ?>
                                </tbody>
                              </table>
                            </div>
                    </div> <!-- fin tab agregar marca-->

                    <div class="tab-pane " id="h"><!--  tab agregar carga-->
                        <p>&nbsp;</p>
                            <div class="row col-md-4 col-lg-4 ">
                              <span>Proporcione los datos necesarios para agregar cargas de auto:</span>
                               <p>&nbsp;</p>
                                  <form id="agregarCarga">
                                      <div class="form-group">
                                        <input type="text" class="form-control" id="clavecarga" name="clavecarga"  placeholder="Clave Carga" required>
                                     </div>
                                      <div class="form-group">
                                         <input type="text" class="form-control" id="nombrecarga" name="nombrecarga"  placeholder="Nombre Carga" required>
                                     </div> 
                                       <button type="submit" id="btn_agregarCarga" class="btn btn-primary">Crear Nuevo</button
                                  </form>
                              </div>
                              <div class="row col-md-4 col-lg-4 col-lg-offset-1">
                                  <h2>Ultimos 20 registros</h2>
                                  <p align="right">Ver catalogo completo <a href="catalogoCargas.html" target="_blank" title="Ir Catalogo ciudades" >aqui</a></p>

                                  <table class="table table-condensed table-striped">
                                    <th>Clave</th>
                                    <th>Nombre</th>
                                    <th>-</th>
                                  <tbody>
                                    <?php echo $client->tablaCargas(); ?>
                                  </tbody>
                              </table>
                          </div>
                   </div> <!-- fin tab agregar carga-->

                </div>
             </div><!-- end tab content -->
         </div>
    </div><!-- /row -->
  </div>

  <div id="modalPaquetes" class="modal fade"><!-- /.modal reporte paquetes-->
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title">Reportes Resultantes</h4>
        </div>
        <div id="bodyPaquetes" class="modal-body">
          <p>Espere un momento...</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <div id="modalUsuarios" class="modal fade"><!-- /.modal reporte capturista-->
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title">Reportes Resultantes</h4>
        </div>
        <div id="bodyUsuarios" class="modal-body">
          <p>Espere un momento...</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

     <script type="text/javascript" src="../js/admin.js"> </script>
 </body>
</html>


