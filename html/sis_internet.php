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
                        <h4 class="page-title">Relevamiento - Sistema de Internet <?php echo $bu[1]; ?></h4> </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                  
                    <div class="col-sm-12">
                        <div class="white-box">
                            <form class="form-horizontal form-material" action="add_si_internet.php" method="post">
                             <input type="hidden"  value="<?php echo $bu[0];?>" name="bus_idbus" id="bus_idbus">
                             <div class="form-group">
                                    <label class="col-sm-12">PATIO</label>
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
                                        <select class="form-control form-control-line" name="estado" id="estado">
                                             <option>Funciona</option>
                                            <option>Intermitente</option>
                                            <option>No funciona</option>                                            
                                        </select>
                                        <p><strong>Estado del Internet</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">                                        
                                        <input id="rout_num_serie" name="rout_num_serie" type="text" class="form-control" placeholder="Llenar" >
                                        <p><strong>Numero de serie Router</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">                                      
                                         <input id="rout_num_imei" name="rout_num_imei" type="text" class="form-control" placeholder="Llenar" >
                                        <p><strong>Imei Router</strong>.</p>
                                    </div>
                                </div>
                                    <div class="form-group" >
                                    <label class="col-sm-12"></label>
                                    <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="rout_estado" id="rout_estado">
                                            <option>Funciona</option>
                                            <option>No funciona</option>                                            
                                        </select>
                                        <p><strong>Router Estado</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="rout_ubicacion" id="rout_ubicacion">
                                            <option>Baulera</option>
                                            <option>Detras del Conductor</option>                                         
                                        </select>
                                        <p><strong>Ubicacion Router</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="rout_cargador" id="rout_cargador">
                                            <option>Tiene</option>
                                            <option>No Tiene</option>                                            
                                        </select>
                                        <p><strong>Cargador Router</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="sim" id="sim">
                                           <option>Tiene</option>
                                            <option>No Tiene</option>                                           
                                        </select>
                                        <p><strong>Sim Card</strong>.</p>
                                    </div>
                                </div>
                                <div class="form-group" >
                                    <label class="col-sm-12"></label>
                                    <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="sim_ubicacion" id="sim_ubicacion">
                                            <option>Bus-Router</option>
                                            <option>Simon</option>
                                            <option>Legal</option>      
                                            <option>Comunicacion</option>
                                            <option>desarrollo</option>   
                                            <option>Oficina</option>  
                                            <option>Extraviado</option>  
                                            <option>N/A (no aplica)</option>                                       
                                        </select>
                                        <p><strong>Ubicacion del Sim Card</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">                                       
                                        <input id="sim_numero" name="sim_numero" type="text" class="form-control" placeholder="Llenar" >
                                        <p><strong>Numero del Sim</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
									 <input id="sim_serie" name="sim_serie" type="text" class="form-control" placeholder="Llenar" >
                                        
                                        <p><strong>Serie Sim</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="abrazaderas" id="abrazaderas">
                                             <option>2</option>
                                            <option>1</option>
                                            <option>No tiene</option>                                             
                                        </select>
                                        <p><strong>Abrazaderas</strong>.</p>
                                    </div>
                                </div>
                                <div class="form-group" >
                                    <label class="col-sm-12"></label>
                                    <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="cloud" id="cloud">
                                            <option>Tiene</option>
                                            <option>No tiene</option>                                        
                                        </select>
                                        <p><strong>Cloud</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="cloud_estado" id="cloud_estado">
                                            <option>Funciona</option>
                                            <option>Intermitente</option>
                                            <option>No funciona</option>                         
                                        </select>
                                        <p><strong>Estado Cloud</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">                                      
                                         <input id="cloud_numero" name="cloud_numero" type="text" class="form-control" placeholder="Llenar" >
                                        <p><strong>Numero de Cloud</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                          <input id="cloud_serie" name="cloud_serie" type="text" class="form-control" placeholder="Llenar" >
                                        <p><strong>Serie Cloud</strong>.</p>
                                    </div>
                                </div>
                                <div class="form-group" >
                                    <label class="col-sm-12"></label>
                                    <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="cloud_cargador" id="cloud_cargador">
                                            <option>Tiene</option>
                                            <option>No tiene</option>                                        
                                        </select>
                                        <p><strong>Cargador Cloud</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                       
                                    </div>
                                     <div class="col-sm-3">
                              
                                    </div>
                                     <div class="col-sm-3">
                                        
                                    </div>
                                </div>                              
                               
                               
                                <div class="form-group">
                                    <label class="col-md-12">OBSERVACIONES</label>
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