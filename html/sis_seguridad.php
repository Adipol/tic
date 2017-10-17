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
                        <h4 class="page-title">Sistema de Seguridad <?php echo $bu[1]; ?></h4> </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                  
                    <div class="col-sm-12">
                        <div class="white-box">
                            <form class="form-horizontal form-material" action="add_si_seg.php" method="post">
                             <input type="hidden"  value="<?php echo $bu[0];?>" name="bus_idbus" id="bus_idbus">
                             <div class="form-group">
                                    <label class="col-sm-12"><strong class="text-danger">DVR</strong></label>
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
                                        <select class="form-control form-control-line" name="dvr_gabinete" id="dvr_gabinete">
                                            <option>Buen Estado</option>
                                            <option>Mal Estao</option> 
                                            <option>No tiene</option>                                            
                                        </select>
                                        <p><strong>DVR Gabinete</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="dvr" id="dvr">
                                            <option>Tiene</option>
                                            <option>No tiene</option>                                                                                       
                                        </select>
                                        <p><strong>DVR</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="dvr_existencia" id="dvr_existencia">
                                            <option>Moulo de Grabacion</option>
                                            <option>Modulo de alimentacion</option>
                                            <option>Ambos moulos</option>   
                                            <option>No tiene</option>                                      
                                        </select>
                                        <p><strong>Existencia de Modulos</strong>.</p>
                                    </div>
                               
                                    <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="funcion_grabacion" id="funcion_grabacion">
                                            <option>Graba </option>
                                            <option>No graba</option>  
                                            <option>Bus sin energia</option>                                          
                                        </select>
                                        <p><strong>Funcion de Grabacion</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="Almacenamiento" id="Almacenamiento">
                                            <option>HDD</option>
                                            <option>SD</option>   
                                            <option>No tiene</option>                                         
                                        </select>
                                        <p><strong>Almacenamiento</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="Capacidad" id="Capacidad">
                                            <option>1 Tb</option>
                                            <option>64 Gb</option>
                                            <option>32 Gb</option> 
                                            <option>Otro</option>                                           
                                        </select>
                                        <p><strong>Capacidad</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <input id="num_serie_hdd" name="num_serie_hdd" type="text" class="form-control" placeholder="Numero de Serie" >
                                        <p><strong>numero de serie hdd</strong>.</p>
                                    </div>
                             
                                    <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="tornillos_rac_hdd" id="tornillos_rac_hdd">
                                            <option>Completo</option>
                                            <option>3</option>
                                            <option>2</option>
                                            <option>1</option>
                                            <option>No Tiene</option>                                            
                                        </select>
                                        <p><strong>N° Tornillos Rack HDD</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="adaptador_rca" id="adaptador_rca">
                                            <option>Funciona</option>
                                            <option>No funciona</option>
                                            <option>No tiene</option>                                           
                                        </select>
                                        <p><strong>Adaptador RCA</strong>.</p>
                                    </div>
                                    <div class="col-sm-3">
                                       
                                    </div>
                                     <div class="col-sm-3">
                                       
                                    </div>
                                   
                                   
                                </div>
                                <div class="form-group" >
                                    <label class="col-sm-12"><strong class="text-danger">CONEXIONES EN EL DVR</strong></label>
                                      <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="lambda1" id="lambda1">
                                            <option>Funciona</option>
                                            <option>Reparado</option>
                                            <option>No funciona</option>                                             
                                        </select>
                                        <p><strong>Lambda(λ)1</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="lambda2" id="lambda2">
                                             <option>Funciona</option>
                                             <option>Reparado</option>
                                             <option>No funciona</option>                                              
                                        </select>
                                        <p><strong>Lambda(λ)2</strong>.</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="lambda3" id="lambda3">
                                            <option>Funciona</option>
                                            <option>Reparado</option>
                                            <option>No funciona</option>                                       
                                        </select>
                                        <p><strong>Lambda(λ)3</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="lambda4" id="lambda4">
                                            <option>Funciona</option>
                                            <option>Reparado</option>
                                            <option>No funciona</option> 
                                       
                                        </select>
                                        <p><strong>Lambda(λ)4</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="out1" id="out1">
                                            <option>Funciona</option>
                                            <option>Reparado</option>
                                            <option>No funciona</option>                                             
                                        </select>
                                        <p><strong>conector out1</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="out2" id="out2">
                                            <option>Funciona</option>
                                            <option>Reparado</option>
                                            <option>No funciona</option>                                           
                                        </select>
                                        <p><strong>conector out2</strong>.</p>
                                    </div>
                          
                                    <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="out3" id="out3">
                                            <option>Funciona</option>
                                            <option>Reparado</option>
                                            <option>No funciona</option>                                        
                                        </select>
                                        <p><strong>conector out3</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="out4" id="out4">
                                            <option>Funciona</option>
                                            <option>Reparado</option>
                                            <option>No funciona</option>                                        
                                        
                                        </select>
                                        <p><strong>conector out4</strong>.</p>
                                    </div>
                                     </div>
                                <div class="form-group" >
                                    <label class="col-sm-12"><strong class="text-danger">CONEXIONES DENTRO LA BAULERA DE KL</strong></label>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="kl_mesclaor_video" id="kl_mesclaor_video">
                                            <option>Funciona</option>
                                            <option>Intermitente</option>
                                            <option>No funciona</option> 
                                            <option>No tiene</option>                                          
                                        </select>
                                        <p><strong>Mesclador de video</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="kl_out1" id="kl_out1">
                                            <option>Funciona</option>
                                            <option>Reparado</option>
                                            <option>No funciona</option>                                            
                                        </select>
                                        <p><strong>KL out1</strong>.</p>
                                    </div>
                               
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="kl_out2" id="kl_out2">
                                            <option>Funciona</option>
                                            <option>Reparado</option>
                                            <option>No funciona</option>                                            
                                        </select>
                                        <p><strong>KL out2</strong>.</p>
                                    </div>
                                      <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="kl_out3" id="kl_out3">
                                            <option>Funciona</option>
                                            <option>Reparado</option>
                                            <option>No funciona</option>                                            
                                        </select>
                                        <p><strong>KL out3</strong>.</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="kl_out4" id="kl_out5">
                                            <option>Funciona</option>
                                            <option>Reparado</option>
                                            <option>No funciona</option>                                            
                                        </select>
                                        <p><strong>KL out4</strong>.</p>
                                    </div>
                                    
                                </div>
                                <div class="form-group" >
                                    <label class="col-sm-12"><strong class="text-danger">ESTADO DE CAMARAS</strong></label>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="cam_com_front" id="cam_com_front">
                                            <option>Sana</option>
                                            <option>Rajado</option>  
                                            <option>Rota</option>
                                            <option>Sin Vidrio</option>  
                                            <option>No tiene</option>                                          
                                        </select>
                                        <p><strong>Camara frontal</strong>.</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="cam_com_cond" id="cam_com_cond">
                                            <option>Sana</option>
                                            <option>Rajado</option>  
                                            <option>Rota</option>
                                            <option>Sin Vidrio</option>  
                                            <option>No tiene</option>                                          
                                        </select>
                                        <p><strong>Camara conductor</strong>.</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="cam_val" id="cam_val">
                                            <option>Sana</option>
                                            <option>Rajado</option>  
                                            <option>Rota</option>
                                            <option>Sin Vidrio</option>  
                                            <option>No tiene</option>                                          
                                        </select>
                                        <p><strong>Camara Validador</strong>.</p>
                                    </div>
                                   <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="cam_puerta_sal" id="cam_puerta_sal">
                                            <option>Sana</option>
                                            <option>Rajado</option>  
                                            <option>Rota</option>
                                            <option>Sin Vidrio</option>  
                                            <option>No tiene</option>                                          
                                        </select>
                                        <p><strong>Camara Puerta de Salida</strong>.</p>
                                    </div>
                                 <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="cam_retro" id="cam_retro">
                                            <option>Sana</option>
                                            <option>Rajado</option>  
                                            <option>Rota</option>
                                            <option>Sin Vidrio</option>  
                                            <option>No tiene</option>                                          
                                        </select>
                                        <p><strong>Camara retro</strong>.</p>
                                    </div>
                                </div>
                                                          
                               
                               
                                <div class="form-group">
                                    <label class="col-md-12"><strong class="text-danger">OBSERVACIONES</strong></label>
                                    <div class="col-md-12">
                                        <textarea rows="5" class="form-control form-control-line" name="obs" id="obs"></textarea>
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