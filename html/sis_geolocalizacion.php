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
                        <h4 class="page-title">Sistema de Geolocalizacion <?php echo $bu[1]; ?></h4> </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <form class="form-horizontal form-material" action="add_si_geolocalizacion.php" method="post">
                             <input type="hidden"  value="<?php echo $bu[0];?>" name="bus_idbus" id="bus_idbus">
                             <div class="form-group">
                                    <label class="col-sm-12"><strong class="text-danger">GPS</strong></label>
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
                                        <select class="form-control form-control-line" name="estado_operativo_gps" id="estado_operativo_gps">
                                            <option>Funciona</option>
                                            <option>No Funciona</option>
                                            <option>No Tiene</option>                                           
                                        </select>
                                        <p><strong>Estado Operativo GPS</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                         <select class="form-control form-control-line" name="ubicacion" id="ubicacion">
                                            <option>Conductor</option>
                                            <option>Puerta</option>                                                                                       
                                        </select>
                                        <p><strong>Ubicacion</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                         <input id="imei" name="imei" type="text" class="form-control" placeholder="IMEI" >
                                    <p><strong>IMEI</strong>.</p>
                                    </div>
                              
                                    <div class="col-sm-3">
                                          <input id="numero_serie" name="numero_serie" type="text" class="form-control" placeholder="Serie" >
                                    <p><strong>Numero de Serie</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                         <select class="form-control form-control-line" name="codigo_gamlp" id="codigo_gamlp">
                                            <option>Ilegible</option>  
                                            <option>No tiene</option> 
                                            <option>Si Tiene Llena el Siguiente Cuadro</option>                                         
                                        </select>
                                        <p><strong>Codigo GAMLP</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <input id="cod_gamlp" name="cod_gamlp" type="text" class="form-control" placeholder="Coloca el Codigo si Tiene" >
                                    <p><strong>Llena el Codigo GAMLP</strong>.</p>
                                    </div>   
                                         <div class="col-sm-3">
                                         <select class="form-control form-control-line" name="visualizacion_sistema_gps" id="visualizacion_sistema_gps">
                                          <option>Pulsos Constantes</option>
                                          <option>Pulsos Intermitentes</option>
                                          <option>Sin Pulsos</option>                                  
                                        </select>
                                        <p><strong>Visualizacion con Sistema GPS</strong>.</p>
                                    </div>                                
                                </div>
                                <div class="form-group" >
                                    <label class="col-sm-12"><strong class="text-danger">SIM CARD</strong></label>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="sim_card" id="sim_card">
                                            <option>Tiene</option>  
                                            <option>No tiene</option>                                         
                                        </select>
                                        <p><strong>SIM Card</strong>.</p>
                                    </div>
                                    <div class="col-sm-3">
                                          <input id="numero_sim_card" name="numero_sim_card" type="text" class="form-control" placeholder="Numero" >
                                    <p><strong>Numero de Telefono SIM Card</strong>.</p>
                                    </div>
                                    <div class="col-sm-3">
                                          <input id="numero_serie_sim_card" name="numero_serie_sim_card" type="text" class="form-control" placeholder="Serie" >
                                    <p><strong>Numero de Serie sim card</strong>.</p>
                                    </div>
                                       <div class="col-sm-3">
                                         
                                    </div>
                                </div>
                                <div class="form-group" >
                                    <label class="col-sm-12"><strong class="text-danger">ANTENAS</strong></label>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="gps" id="gps">
                                            <option>Funciona</option>  
                                            <option>No Funciona</option> 
                                            <option>No Tiene</option> 
                                            <option>Reparado</option>                                        
                                        </select>
                                        <p><strong>GPS</strong>.</p>
                                    </div>                                     
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="gsm" id="gsm">
                                            <option>Funciona</option>  
                                            <option>No Funciona</option> 
                                            <option>No Tiene</option> 
                                            <option>Reparado</option>                                          
                                        </select>
                                        <p><strong>GSM</strong>.</p>
                                       
                                    </div>
                                     <div class="col-sm-3">
                                       
                                    </div>
                                      <div class="col-sm-3">
                                       
                                    </div>
                                </div>
                                 <div class="form-group" >
                                    <label class="col-sm-12"><strong class="text-danger">HANDSET</strong></label>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="handset" id="handset">
                                            <option>Tiene</option>
                                            <option>No Tiene</option>                                       
                                        </select>
                                        <p><strong>Handset</strong>.</p>
                                    </div>
                                    <br>
                                    <div class="col-sm-3">
                                         <select class="form-control form-control-line" name="estado_handset" id="estado_handset">
                                            <option>Funciona</option>
                                            <option>Intermitencia</option>
                                            <option>No Funciona</option>  
                                        </select>
                                        <p><strong>Estado Handset</strong>.</p>
                                    </div>
                                   
                                     <div class="col-sm-3">
                                       <select class="form-control form-control-line" name="conector_gps" id="conector_gps">
                                            <option>Bien</option>
                                            <option>Mal</option>
                                            <option>Reparado</option>
                                            <option>No Tiene</option>                                             
                                        </select>
                                        <p><strong>Conector de GPS Handset</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="display_handset" id="display_handset">
                                            <option>Bien</option>
                                            <option>Mal</option>
                                            <option>No Tiene</option>                                          
                                        </select>
                                        <p><strong>Display Handset</strong>.</p>
                                        
                                    </div>
                                     <div class="col-sm-3">
                                         <select class="form-control form-control-line" name="botones_handset" id="botones_handset">
                                            <option>Legibles</option>
                                            <option>Ilegibles</option>
                                            <option>No Tiene</option>                                        
                                        </select>
                                        <p><strong>Botones</strong>.</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="carcasa_handset" id="carcasa_handset">
                                            <option>Bien</option>
                                            <option>Mal</option>
                                       </select>
                                        <p><strong>Carcasa</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                         <select class="form-control form-control-line" name="porta_handset" id="porta_handset">
                                            <option>Tiene</option>
                                            <option>Reparado</option>
                                            <option>No Tiene</option>                                          
                                        </select>
                                        <p><strong>Porta Handset</strong>.</p>
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