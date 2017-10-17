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
                        <h4 class="page-title">Sistema de Acceso <?php echo $bu[1]; ?></h4> </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                  
                    <div class="col-sm-12">
                        <div class="white-box">
                            <form class="form-horizontal form-material" action="add_si_acc.php" method="post">
                             <input type="hidden"  value="<?php echo $bu[0];?>" name="bus_idbus" id="bus_idbus">
                             <div class="form-group">
                                    <label class="col-sm-12"><strong class="text-danger">ACCESO - MOLINETE</strong></label>
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
                                        <select class="form-control form-control-line" name="molinete" id="molinete">
                                            <option>Tiene</option>
                                            <option>No tiene</option>                                                                                     
                                        </select>
                                         <p><strong>Molinete</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="estado_molinete" id="estado_molinete">
                                            <option>Funciona</option>
                                            <option>No funciona</option>
                                            <option>No Tiene</option>                                            
                                        </select>
                                        <p><strong>Estado Molinete</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="placa_molinete" id="placa_molinete">
                                            <option>Funciona</option>
                                            <option>No funciona</option>
                                            <option>No tiene</option>                                       
                                        </select>
                                        <p><strong>Placa</strong>.</p>
                                    </div>
                                </div>
                                 <div class="form-group" >
                                    <label class="col-sm-12"></label>
                                    <div class="col-sm-2">
                                        <select class="form-control form-control-line" name="sensor_agarre" id="sensor_agarre">
                                            <option>Tiene</option>
                                            <option>No tiene</option>                                        
                                        </select>
                                        <p><strong>Sensor de Agarre</strong>.</p>
                                    </div>
                                     <div class="col-sm-2">
                                        <select class="form-control form-control-line" name="ferritas" id="ferritas">
                                             <option>Completo</option>
                                            <option>Falta 1</option>
                                            <option>Falta 2</option>
                                            <option>Falta 3</option>
                                            <option>Falta 4</option>
                                            <option>mas de 4 </option>
                                       
                                        </select>
                                        <p><strong>Ferritas</strong>.</p>
                                    </div>
                                     <div class="col-sm-2">
                                        <select class="form-control form-control-line" name="rueda_dentada" id="rueda_dentada">
                                            <option>Completo</option>
                                            <option>Falta 1</option>
                                            <option>Falta 2</option>
                                            <option>Falta 3</option>
                                            <option>Falta 4</option>
                                            <option>mas de 4 </option>                                            
                                        </select>
                                        <p><strong>Rueda Dentada</strong>.</p>
                                    </div>
                                     <div class="col-sm-2">
                                        <select class="form-control form-control-line" name="contador_molinete" id="contador_molinete">
                                            <option>Funciona</option>
                                            <option>No funciona</option>
                                            <option>No tiene</option>                                           
                                        </select>
                                        <p><strong>Contador de molinete</strong>.</p>
                                    </div>
                                      <div class="col-sm-2">
                                       <select class="form-control form-control-line" name="bociona_activacion" id="bociona_activacion">
                                            <option>Funciona</option>
                                            <option>No funcion</option> 
                                            <option>No tiene</option>                                        
                                        </select>
                                        <p><strong>Bocina de Activacion</strong>.</p>
                                    </div>
                                     <div class="col-sm-2">
                                       
                                    </div>
                                </div>
                                 <div class="form-group" >
                                    <label class="col-sm-12"><strong class="text-danger">COMUNICACION CON VALIDADOR</strong></label>
                                    <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="val_conectordb9" id="val_conectordb9">
                                            <option>Tiene</option>
                                            <option>No tiene</option>                                            
                                        </select>
                                        <p><strong>Conector DB-9</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="val_estadodb9" id="val_estadodb9">
                                            <option>Bien</option>
                                            <option>Mal</option>   
                                            <option>No tiene</option>                                         
                                        </select>
                                        <p><strong>Estado DB-9</strong>.</p>
                                    </div>
                                    <div class="col-sm-3">
                                    </div>
                                    <div class="col-sm-3">                                        
                                    </div>                                    
                                </div>
                                <div class="form-group" >
                                    <label class="col-sm-12"><strong class="text-danger">SOLENOIDES</strong></label>
                                     <div class="col-sm-2">
                                        <select class="form-control form-control-line" name="sol_giro_ingreso" id="sol_giro_ingreso">
                                            <option>Bien</option>
                                            <option>Mal</option>
                                            <option>No Tiene</option>                                            
                                        </select>
                                        <p><strong>Selenoide Giro Ingreso</strong>.</p>
                                    </div>
                                     <div class="col-sm-2">
                                        <select class="form-control form-control-line" name="sol_bastago_giro_ingreso" id="sol_bastago_giro_ingreso">
                                            <option>Bien</option>
                                            <option>Mal</option>
                                            <option>No tiene</option>                                           
                                        </select>
                                        <p><strong>Selenoide Bastago Ingreso</strong>.</p>
                                    </div>
                                    <div class="col-sm-2">
                                        <select class="form-control form-control-line" name="sol_giro_inverso" id="sol_giro_inverso">
                                            <option>Bien</option>
                                            <option>Mal</option>
                                            <option>No Tiene</option>                                            
                                        </select>
                                        <p><strong>Selenoide Giro Inverso</strong>.</p>
                                    </div>
                                     <div class="col-sm-2">
                                        <select class="form-control form-control-line" name="sol_bastago_giro_inverso" id="sol_bastago_giro_inverso">
                                            <option>Bien</option>
                                            <option>Mal</option>
                                            <option>No tiene</option>                                           
                                        </select>
                                        <p><strong>Selenoide Bastago Inverso</strong>.</p>
                                    </div>
                                     <div class="col-sm-2">
                                        <select class="form-control form-control-line" name="sol_agarre_bastago" id="sol_agarre_bastago">
                                            <option>Bien</option>
                                            <option>Mal</option>
                                            <option>No tiene</option>                                             
                                        </select>
                                        <p><strong>Solenoide de Agarre Bastago</strong>.</p>
                                    </div>
                                     <div class="col-sm-2">
                                        <select class="form-control form-control-line" name="sol_bastago_agarre" id="sol_bastago_agarre">
                                             <option>Bien</option>
                                            <option>Mal</option>
                                            <option>No tiene</option>                                             
                                        </select>
                                        <p><strong>Bastago Solenoide de Agarre Bastago</strong>.</p>
                                    </div>
                                     
                                </div>
                               
                                <div class="form-group" >
                                    <label class="col-sm-12"><strong class="text-danger">BRAZO 1 DE MOLINETE</strong></label>
                                  
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="brz1_pasador" id="brz1_pasador">
                                            <option>Tiene</option>
                                            <option>Adaptado</option>
                                            <option>No tiene</option>                                       
                                        
                                        </select>
                                        <p><strong>Brazo 1 Pasador</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="brz1_tornillo_pasador" id="brz1_tornillo_pasador">
                                            <option>Tiene</option>
                                            <option>Adaptado</option>
                                            <option>No tiene</option>                                          
                                        </select>
                                        <p><strong>Brazo 1 - Tornillo Pasador</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="brz1_brazo" id="brz1_brazo">
                                            <option>Tiene</option>
                                            <option>No tiene</option>                                           
                                        </select>
                                        <p><strong>Brazo 1 - Brazo</strong>.</p>
                                    </div>
                                      <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="brz1_tornillo_alem_largo" id="brz1_tornillo_alem_largo">
                                            <option>Tiene</option>
                                            <option>No tiene</option>                                        
                                        </select>
                                        <p><strong>Brazo 1 - Tornillo (allen largo )Brazo</strong>.</p>
                                    </div>
                                </div>
                                <div class="form-group" >
                                    <label class="col-sm-12"><strong class="text-danger">BRAZO 2 DE MOLINETE</strong></label>
                                  
                                      <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="brz2_pasador" id="brz2_pasador">
                                            <option>Tiene</option>
                                            <option>Adaptado</option>
                                            <option>No tiene</option>                                       
                                        
                                        </select>
                                        <p><strong>Brazo 2 Pasador</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="brz2_tornillo_pasador" id="brz2_tornillo_pasador">
                                            <option>Tiene</option>
                                            <option>Adaptado</option>
                                            <option>No tiene</option>                                          
                                        </select>
                                        <p><strong>Brazo 2 - Tornillo Pasador</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="brz2_brazo" id="brz2_brazo">
                                            <option>Tiene</option>
                                            <option>No tiene</option>                                           
                                        </select>
                                        <p><strong>Brazo 2 - Brazo</strong>.</p>
                                    </div>
                                      <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="brz2_tornillo_alem_largo" id="brz2_tornillo_alem_largo">
                                            <option>Tiene</option>
                                            <option>No tiene</option>                                        
                                        </select>
                                        <p><strong>Brazo 2 - Tornillo (allen largo )Brazo</strong>.</p>
                                    </div>
                                </div>
                                <div class="form-group" >
                                    <label class="col-sm-12"><strong class="text-danger">BRAZO 3 DE MOLINETE</strong></label>
                                    
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="brz3_pasador" id="brz3_pasador">
                                            <option>Tiene</option>
                                            <option>Adaptado</option>
                                            <option>No tiene</option>                                       
                                        
                                        </select>
                                        <p><strong>Brazo 3 Pasador</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="brz3_tornillo_pasador" id="brz3_tornillo_pasador">
                                            <option>Tiene</option>
                                            <option>Adaptado</option>
                                            <option>No tiene</option>                                          
                                        </select>
                                        <p><strong>Brazo 3 - Tornillo Pasador</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="brz3_brazo" id="brz3_brazo">
                                            <option>Tiene</option>
                                            <option>No tiene</option>                                           
                                        </select>
                                        <p><strong>Brazo 3 - Brazo</strong>.</p>
                                    </div>
                                    <div class="col-sm-3">
                                         <select class="form-control form-control-line" name="brz3_tornillo_alem_largo" id="brz3_tornillo_alem_largo">
                                            <option>Tiene</option>
                                            <option>No tiene</option>                                        
                                        </select>
                                        <p><strong>Brazo 3 - Tornillo (allen largo )Brazo</strong>.</p>
                                    </div>
                                </div>
                                 <div class="form-group" >
                                    <label class="col-sm-12"><strong class="text-danger">ESTRUCTURA Y CHAPAS</strong></label>
                                   
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="estructura_chasis" id="estructura_chasis">
                                            <option>Bien</option>
                                            <option>Reparado</option>
                                            <option>No tiene</option>                                       
                                        
                                        </select>
                                        <p><strong>Chasis</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="estructura_visagras" id="estructura_visagras">
                                            <option>Bien</option>
                                            <option>Reparado</option>
                                            <option>No tiene</option>                                          
                                        </select>
                                        <p><strong>Visagras</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="chapas_central" id="chapas_central">
                                            <option>Bien</option>
                                            <option>Averiado</option>
                                            <option>No tiene</option>                                           
                                        </select>
                                        <p><strong>Chapa Central</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                       <select class="form-control form-control-line" name="chapas_derecha" id="chapas_derecha">
                                            <option>Bien</option>
                                            <option>Averiado</option>
                                            <option>No tiene</option>                                         
                                        </select>
                                        <p><strong>Chapa derecha</strong>.</p>
                                    </div>
                                </div>
                                <div class="form-group" >
                                    <label class="col-sm-12"></label>
                                  
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="chapas_izquierda" id="chapas_izquierda">
                                         <option>Bien</option>
                                            <option>Averiado</option>
                                            <option>No tiene</option>                                         
                                        
                                        </select>
                                        <p><strong>Chapa izquiera</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        
                                    </div>
                                     <div class="col-sm-3">
                                        
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