 <?php
include("header.php");
include("modelo/conec.php");
$id = $_GET['id'];

$bus= "SELECT * FROM bus WHERE idbus = '$id'";
$buses= mysql_query($bus);
$bu=mysql_fetch_row($buses);

$instalacion="SELECT * FROM instalacion";
$inst= mysql_query($instalacion);
 ?>
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Sistema de Cobro <?php echo $bu[1]; ?></h4> </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                  
                    <div class="col-sm-12">
                        <div class="white-box">
                            <form class="form-horizontal form-material" action="add_si_cobro.php" method="post">
                             <input type="hidden"  value="<?php echo $bu[0];?>" name="bus_idbus" id="bus_idbus">
                             <div class="form-group">
                              <label class="col-sm-12" ><strong class="text-danger">VALIDADOR</strong> </label>
                                    <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="instalacion_idinstalacion" id="instalacion_idinstalacion">
                                           <?php while ($in=mysql_fetch_row($inst)) 
                                             {?>
                                             <option value='<?php echo $in[0];?>'> <?php echo $in[1]; ?> </option>
                                             <?php } ?>
                                        </select>
                                        <p><strong>Patio</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                         <select class="form-control form-control-line" name="modelo_tablet" id="modelo_tablet">
                                            <option>Acer Antiguo</option>
                                            <option>Acer Nueva</option>
                                            <option>Quipus</option>
                                            <option>Armada</option>
                                            <option>No Tiene</option>                                           
                                        </select>
                                        <p><strong>Modelo Tablet</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                       <input id="id_validador" name="id_validador" type="text" class="form-control" placeholder="Id Validador" >
                                    <p><strong>Id Validador</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="codigo_gamlp" id="codigo_gamlp">
                                            <option>Ilegible</option>  
                                            <option>No tiene</option> 
                                            <option>Tiene</option>                                         
                                        </select>
                                        <p><strong>Codigo GAMLP</strong>.</p>
                                    </div>
                             </div>
                              <div class="form-group">
                                      <div class="col-sm-3">
                                        <input id="cod_gamlp" name="cod_gamlp" type="text" class="form-control" placeholder="Coloca el Codigo si Tiene" >
                                    <p><strong>Llena el Codigo GAMLP</strong>.</p>
                                    </div>
                                    
                                    <div class="col-sm-3">
                                            <select class="form-control form-control-line" name="codigo_mfs" id="codigo_mfs">
                                            <option>Ilegible</option>  
                                            <option>No tiene</option> 
                                            <option>Si Tiene Llena el Siguiente Cuadro</option>                                         
                                        </select>
                                        <strong>Codigo MFS</strong>
                                    </div>
                                     <div class="col-sm-3">
                                       <input id="cod_mfs" name="cod_mfs" type="text" class="form-control" placeholder="Coloca el Codigo si Tiene" >
                                    <p><strong>Llena el Codigo MFS</strong>.</p>
                                    </div>
                                  
                                     
                                     <div class="col-sm-3">
                                       <select class="form-control form-control-line" name="tornillos_tapa_validador" id="tornillos_tapa_validador">
                                            <option>1</option>
                                            <option>2</option> 
                                            <option>No Tiene</option>                                          
                                        </select>
                                        <p><strong>Tornillos de Tapa de Validador</strong>.</p>
                                    </div>
                                </div>
<br>
                             <div class="form-group">
                                    <label class="col-sm-12"><strong class="text-danger">ESTADO OPERATIVO - VALIDADOR</strong></label>
                                    <div class="col-sm-3">
                                         <select class="form-control form-control-line" name="estado_operativo" id="estado_operativo">
                                            <option>Funciona</option>
                                            <option>No Funciona</option>
                                            <option>Intermitente</option>
                                            <option>No Tiene</option>                                                                                       
                                        </select>
                                        <p><strong>Estado Operativo</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                          <select class="form-control form-control-line" name="descripcion_fallo_1" id="descripcion_fallo_1">
                                            <option>Sin Fallo</option>
                                            <option>Reinicios</option>
                                            <option>Calentamiento</option>
                                            <option>Bateria no Carga</option>
                                            <option>Display no Conoce Pulsaciones</option>                                            
                                        </select>
                                        <p><strong>Descripcion Fallo 1</strong>.</p>
                                    </div>
                                  
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="descripcion_fallo_2" id="descripcion_fallo_2">
                                            <option>Sin Fallo</option>
                                            <option>Reinicios</option>
                                            <option>Calentamiento</option>
                                            <option>Bateria no Carga</option>
                                            <option>Display no Conoce Pulsaciones</option>                                            
                                        </select>
                                        <p><strong>Descripcion Fallo 2</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                     
                                    </div>
                                </div>
                          <br>
                                <div class="form-group" >
                                    <label class="col-sm-12"><strong class="text-danger">COMUNICACION CON MOLINETE</strong></label>
                                    <div class="col-sm-3">
                                          <select class="form-control form-control-line" name="interfaz" id="interfaz">
                                            <option>Placa</option>  
                                            <option>RS-232 Generico</option> 
                                            <option>RS-232 Trend Net</option> 
                                            <option>No-Tiene</option>                                        
                                        </select>
                                        <p><strong>Interfaz</strong>.</p>
                                    </div>
                                     
                                     <div class="col-sm-3">
                                       <select class="form-control form-control-line" name="estado_interfaz" id="estado_interfaz">
                                            <option>Funciona</option>
                                            <option>No funciona</option>
                                            <option>No tiene</option>                                           
                                        </select>
                                        <p><strong>Estado Interfaz</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="conector_db9" id="conector_db9">
                                            <option>Tiene</option>
                                            <option>No Tiene</option>                                       
                                        </select>
                                        <p><strong>Conector DB9</strong>.</p>
                                    </div>
                                    <div class="col-sm-3">
                                       <select class="form-control form-control-line" name="estado_conector" id="estado_conector">
                                            <option>Bien</option>
                                            <option>Roto</option>
                                            <option>No Tiene</option>  
                                        </select>
                                        <p><strong>Estado del DB9</strong>.</p>
                                    </div>
                                </div>
                                <div class="form-group" >
                                    <label class="col-sm-12"></label>
                                    
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="ubicacion_cable_comunicacion" id="ubicacion_cable_comunicacion">
                                            <option>Dentro de Conducto Asidero</option>
                                            <option>Fuera del Conducto Asidero</option>
                                            <option>No Tiene</option>                                             
                                        </select>
                                        <p><strong>Ubicacion del Cable de Comunicacion</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="estado_cable_comunicacion" id="estado_cable_comunicacion">
                                            <option>Independiente</option>
                                            <option>Compartio con Energia</option>
                                            <option>No Tiene</option>                                           
                                        </select>
                                        <p><strong>Estado de Cable de Comunicacion</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                         <select class="form-control form-control-line" name="tipo_cable" id="tipo_cable">
                                            <option>UTP</option>
                                            <option>STP</option>
                                            <option>FTP</option>  
                                            <option>Extensor USB</option>                                       
                                        </select>
                                        <p><strong>Tipo de Cable</strong>.</p>
                                    </div>
                                    <div class="col-sm-3">
                                       
                                    </div>
                                </div>
                                <BR>
                                <div class="form-group" >
                                    <label class="col-sm-12"><strong class="text-danger">CONEXION HUB CON TABLET</strong></label>
                                    <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="tipo_hub" id="tipo_hub">
                                            <option>Omega Normal</option>
                                            <option>Omega Modificado</option>
                                            <option>Klip</option>                                        
                                            <option>Micro USB Hub(pulpo)</option>
                                            <option>No Tiene</option>
                                       </select>
                                        <p><strong>Tipo de HUB</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="condicion_hub" id="condicion_hub">
                                            <option>Funciona</option>
                                            <option>No funciona</option>
<option>No Tiene</option>											
                                        </select>
                                        <p><strong>ESTADO HUB</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="tipo_conexion_hub" id="tipo_conexion_hubkl_out1">
                                          <option>Cable OTG</option>
                                          <option>Extra USB</option>
                                          <option>Bus de Datos</option>  
                                          <option>Conexion Directa a Tablet</option>  
                                          <option>No Tiene</option>                                  
                                        </select>
                                        <p><strong>Tipo de Conexion HUB</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="estado_conexion_hub" id="estado_conexion_hub">
                                            <option>Funciona</option>
                                            <option>No funciona</option>
                                            <option>No Tiene</option>                                         
                                        </select>
                                        <p><strong>Estado de Conexion HUB</strong>.</p>
                                    </div>
                                </div>
                                <div class="form-group" >
                                    <label class="col-sm-12"></label>
                                   
                                      <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="ext_usb" id="ext_usb">
                                            <option>Tiene</option>
                                            <option>No Tiene</option>                                            
                                        </select>
                                        <p><strong>Puerto de Acceso Externo USB</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="estado_usb" id="estado_usb">
                                            <option>Funciona</option>
                                            <option>No funciona</option> 
                                            <option>No Tiene</option>                                           
                                        </select>
                                        <p><strong>Estado de Puerto de Acceso Externo</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        
                                    </div>
                                     <div class="col-sm-3">
                                        
                                    </div>
                                </div>
                                <BR>
                                <div class="form-group" >
                                    <label class="col-sm-12"><strong class="text-danger">FUENTE DE ENERGIA</strong></label>
                                    <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="ubicacion_cargador" id="ubicacion_cargador">
                                            <option>Dentro de Validador</option>
                                            <option>Fuera de Validador</option> 
                                            <option>No tiene</option>                                          
                                        </select>
                                        <p><strong>Ubicacion de Cargador-Energia</strong>.</p>
                                    </div>
                                    <div class="col-sm-3">
                                         <select class="form-control form-control-line" name="estado_cargador" id="estado_cargador">
                                            <option>Funciona</option>  
                                            <option>No Tiene</option>                                          
                                        </select>
                                        <p><strong>Estado de Cargador de Energia</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                   
                                    </div>
                                     <div class="col-sm-3">
                                    
                                    </div>
                                    
                                </div>
                                <BR>
                                 <div class="form-group" >
                                    <label class="col-sm-12"><strong class="text-danger">LECTOR DE TARJETAS INTELIGENTES</strong></label>
                                    <div class="col-sm-3">
                                        <input id="id_vsam" name="id_vsam" type="text" class="form-control" placeholder="ID" >
                          			<p><strong>SERIE LECTOR DE TARJETA</strong>.</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="tipo_tarjeta_inteligente" id="tipo_tarjeta_inteligente">
                                            <option>Normal</option>
                                            <option>Modificado</option> 
                                            <option>No Tiene</option>                                          
                                        </select>
                                        <p><strong>Lector de TI al HUB</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="estado_tarjeta_inteligente" id="estado_tarjeta_inteligente">
                                            <option>Funciona</option>
                                            <option>No Funciona</option>  
                                            <option>No tiene</option>                                          
                                        </select>
                                        <p><strong>Estado de Lector </strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
									  <select class="form-control form-control-line" name="existencia_vsam" id="existencia_vsam">
                                            <option>Tiene</option>  
                                            <option>No Tiene</option>                                          
                                        </select>
                                        <p><strong>VSAM</strong>.</p>
                                        
                                    </div>
                                     <div class="col-sm-3">
                                           <input id="numero_serie" name="numero_serie" type="text" class="form-control" placeholder="Serie" >
                                    <p><strong>Numero de Serie Vsam</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="estado_vsam" id="estado_vsam">
                                            <option>Funciona</option>  
                                            <option>No Funciona</option> 
											<option>No tiene</option> 											
                                        </select>
                                        <p><strong>Estado VSAM</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                         
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12"><strong class="text-danger">OBSERVACIONES</strong></label>
                                    <div class="col-md-12">
                                        <textarea rows="5" class="form-control form-control-line" name="observaciones" id="observaciones"></textarea>
                                    </div>
                                </div>
                                
                               
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success">Adicionar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <?php  include("foter.php"); ?>