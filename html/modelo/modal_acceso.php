<div class="modal fade" id="update_acceso_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i>CAMBIAR DATOS - SISTEMA DE ACCESO</h4>
                </div>
                <div class="modal-body col-sm-12">
                     <input  type="hidden" readonly id="idacceso" name="idacceso">
                     <input  type="hidden" readonly id="acc_bus_idbus" name="acc_bus_idbus">
                    <div class="form-horizontal col-sm-6" role="form">
                      <div class="form-horizontal" role="form">
                         <input readonly id="acc_cod_user" name="acc_cod_user" type="text" class="form-control input-sm" placeholder="no tiene">
                      </div>       
                    </div>
                   <div class="form-horizontal col-sm-6" role="form">
                      <div class="form-horizontal" role="form">
                        <input readonly id="acc_nombre_bus" name="acc_nombre_bus" type="text" class="form-control input-sm" placeholder="no tiene">  
                      </div>  
                   </div>
                 <label class="col-sm-12"><strong class="text-danger">ACCESO - MOLINETE</strong></label>
                    <div class="col-sm-3">
                    <?php $instalacion="SELECT * 
                    FROM instalacion";
                    $inst = mysql_query($instalacion); ?>
                        <select class="form-control input-sm" name="acc_instalacion_idinstalacion" id="acc_instalacion_idinstalacion">
                           <?php while ($in=mysql_fetch_row($inst)) 
                             {?>
                             <option value='<?php echo $in[0];?>'> <?php echo $in[1]; ?> </option>
                             <?php } ?>
                        </select>
                        <p><strong>Patio</strong>.</p>
                    </div>
                     <div class="col-sm-3">
                        <select class="form-control input-sm" name="molinete" id="molinete">
                            <option>Tiene</option>
                            <option>No tiene</option>                                                                                     
                        </select>
                         <p><strong>Molinete</strong>.</p>
                    </div>
                     <div class="col-sm-3">
                        <select class="form-control input-sm" name="estado_molinete" id="estado_molinete">
                            <option>Funciona</option>
                            <option>No funciona</option>
                            <option>No Tiene</option>                                            
                        </select>
                        <p><strong>Estado Molinete</strong>.</p>
                    </div>
                     <div class="col-sm-3">
                        <select class="form-control input-sm" name="placa_molinete" id="placa_molinete">
                            <option>Funciona</option>
                            <option>No funciona</option>
                            <option>No tiene</option>                                       
                        </select>
                        <p><strong>Placa</strong>.</p>
                    </div>
                    <div class="col-sm-3">
                        <select class="form-control input-sm" name="sensor_agarre" id="sensor_agarre">
                            <option>Tiene</option>
                            <option>No tiene</option>                                        
                        </select>
                        <p><strong>Sensor de Agarre</strong>.</p>
                    </div>
                     <div class="col-sm-3">
                        <select class="form-control input-sm" name="ferritas" id="ferritas">
                             <option>Completo</option>
                            <option>Falta 1</option>
                            <option>Falta 2</option>
                            <option>Falta 3</option>
                            <option>Falta 4</option>
                            <option>mas de 4 </option>
                       
                        </select>
                        <p><strong>Ferritas</strong>.</p>
                    </div>
                     <div class="col-sm-3">
                        <select class="form-control input-sm" name="rueda_dentada" id="rueda_dentada">
                            <option>Completo</option>
                            <option>Falta 1</option>
                            <option>Falta 2</option>
                            <option>Falta 3</option>
                            <option>Falta 4</option>
                            <option>mas de 4 </option>                                            
                        </select>
                        <p><strong>Rueda Dentada</strong>.</p>
                    </div>
                     <div class="col-sm-3">
                        <select class="form-control input-sm" name="contador_molinete" id="contador_molinete">
                            <option>Funciona</option>
                            <option>No funciona</option>
                            <option>No tiene</option>                                           
                        </select>
                        <p><strong>Contador de molinete</strong>.</p>
                    </div>
                      <div class="col-sm-3">
                       <select class="form-control input-sm" name="bociona_activacion" id="bociona_activacion">
                            <option>Funciona</option>
                            <option>No funcion</option> 
                            <option>No tiene</option>                                        
                        </select>
                        <p><strong>Bocina de Activacion</strong>.</p>
                    </div>
                    <label class="col-sm-12"><strong class="text-danger">COMUNICACION CON VALIDADOR</strong></label>
                    <div class="col-sm-3">
                        <select class="form-control input-sm" name="val_conectordb9" id="val_conectordb9">
                            <option>Tiene</option>
                            <option>No tiene</option>                                            
                        </select>
                        <p><strong>Conector DB-9</strong>.</p>
                    </div>
                     <div class="col-sm-3">
                        <select class="form-control input-sm" name="val_estadodb9" id="val_estadodb9">
                            <option>Bien</option>
                            <option>Mal</option>   
                            <option>No tiene</option>                                         
                        </select>
                        <p><strong>Estado DB-9</strong>.</p>
                    </div>
                    <label class="col-sm-12"><strong class="text-danger">SOLENOIDES</strong></label>
                     <div class="col-sm-3">
                        <select class="form-control input-sm" name="sol_giro_ingreso" id="sol_giro_ingreso">
                            <option>Bien</option>
                            <option>Mal</option>
                            <option>No Tiene</option>                                            
                        </select>
                        <p><strong>Selenoide Giro Ingreso</strong>.</p>
                    </div>
                     <div class="col-sm-3">
                        <select class="form-control input-sm" name="sol_bastago_giro_ingreso" id="sol_bastago_giro_ingreso">
                            <option>Bien</option>
                            <option>Mal</option>
                            <option>No tiene</option>                                           
                        </select>
                        <p><strong>Selenoide Bastago Ingreso</strong>.</p>
                    </div>
                    <div class="col-sm-3">
                        <select class="form-control input-sm" name="sol_giro_inverso" id="sol_giro_inverso">
                            <option>Bien</option>
                            <option>Mal</option>
                            <option>No Tiene</option>                                            
                        </select>
                        <p><strong>Selenoide Giro Inverso</strong>.</p>
                    </div>
                     <div class="col-sm-3">
                        <select class="form-control input-sm" name="sol_bastago_giro_inverso" id="sol_bastago_giro_inverso">
                            <option>Bien</option>
                            <option>Mal</option>
                            <option>No tiene</option>                                           
                        </select>
                        <p><strong>Selenoide Bastago Inverso</strong>.</p>
                    </div>
                     <div class="col-sm-3">
                        <select class="form-control input-sm" name="sol_agarre_bastago" id="sol_agarre_bastago">
                            <option>Bien</option>
                            <option>Mal</option>
                            <option>No tiene</option>                                             
                        </select>
                        <p><strong>Solenoide de Agarre Bastago</strong>.</p>
                    </div>
                     <div class="col-sm-3">
                        <select class="form-control input-sm" name="sol_bastago_agarre" id="sol_bastago_agarre">
                             <option>Bien</option>
                            <option>Mal</option>
                            <option>No tiene</option>                                             
                        </select>
                        <p><strong>Bastago Solenoide de Agarre Bastago</strong>.</p>
                    </div>
                    <label class="col-sm-12"><strong class="text-danger">BRAZO 1 DE MOLINETE</strong></label>
                  
                     <div class="col-sm-3">
                        <select class="form-control input-sm" name="brz1_pasador" id="brz1_pasador">
                            <option>Tiene</option>
                            <option>Adaptado</option>
                            <option>No tiene</option>                                       
                        
                        </select>
                        <p><strong>Brazo 1 Pasador</strong>.</p>
                    </div>
                     <div class="col-sm-3">
                        <select class="form-control input-sm" name="brz1_tornillo_pasador" id="brz1_tornillo_pasador">
                            <option>Tiene</option>
                            <option>Adaptado</option>
                            <option>No tiene</option>                                          
                        </select>
                        <p><strong>Brazo 1 - Tornillo Pasador</strong>.</p>
                    </div>
                     <div class="col-sm-3">
                        <select class="form-control input-sm" name="brz1_brazo" id="brz1_brazo">
                            <option>Tiene</option>
                            <option>No tiene</option>                                           
                        </select>
                        <p><strong>Brazo 1 - Brazo</strong>.</p>
                    </div>
                      <div class="col-sm-3">
                        <select class="form-control input-sm" name="brz1_tornillo_alem_largo" id="brz1_tornillo_alem_largo">
                            <option>Tiene</option>
                            <option>No tiene</option>                                        
                        </select>
                        <p><strong>Brazo 1 - Tornillo (allen largo )Brazo</strong>.</p>
                    </div>
                    <label class="col-sm-12"><strong class="text-danger">BRAZO 2 DE MOLINETE</strong></label>
                  
                      <div class="col-sm-3">
                        <select class="form-control input-sm" name="brz2_pasador" id="brz2_pasador">
                            <option>Tiene</option>
                            <option>Adaptado</option>
                            <option>No tiene</option>                                       
                        
                        </select>
                        <p><strong>Brazo 2 Pasador</strong>.</p>
                    </div>
                     <div class="col-sm-3">
                        <select class="form-control input-sm" name="brz2_tornillo_pasador" id="brz2_tornillo_pasador">
                            <option>Tiene</option>
                            <option>Adaptado</option>
                            <option>No tiene</option>                                          
                        </select>
                        <p><strong>Brazo 2 - Tornillo Pasador</strong>.</p>
                    </div>
                     <div class="col-sm-3">
                        <select class="form-control input-sm" name="brz2_brazo" id="brz2_brazo">
                            <option>Tiene</option>
                            <option>No tiene</option>                                           
                        </select>
                        <p><strong>Brazo 2 - Brazo</strong>.</p>
                    </div>
                      <div class="col-sm-3">
                        <select class="form-control input-sm" name="brz2_tornillo_alem_largo" id="brz2_tornillo_alem_largo">
                            <option>Tiene</option>
                            <option>No tiene</option>                                        
                        </select>
                        <p><strong>Brazo 2 - Tornillo (allen largo )Brazo</strong>.</p>
                    </div>
                    <label class="col-sm-12"><strong class="text-danger">BRAZO 3 DE MOLINETE</strong></label>
                    
                     <div class="col-sm-3">
                        <select class="form-control input-sm" name="brz3_pasador" id="brz3_pasador">
                            <option>Tiene</option>
                            <option>Adaptado</option>
                            <option>No tiene</option>                                       
                        
                        </select>
                        <p><strong>Brazo 3 Pasador</strong>.</p>
                    </div>
                     <div class="col-sm-3">
                        <select class="form-control input-sm" name="brz3_tornillo_pasador" id="brz3_tornillo_pasador">
                            <option>Tiene</option>
                            <option>Adaptado</option>
                            <option>No tiene</option>                                          
                        </select>
                        <p><strong>Brazo 3 - Tornillo Pasador</strong>.</p>
                    </div>
                     <div class="col-sm-3">
                        <select class="form-control input-sm" name="brz3_brazo" id="brz3_brazo">
                            <option>Tiene</option>
                            <option>No tiene</option>                                           
                        </select>
                        <p><strong>Brazo 3 - Brazo</strong>.</p>
                    </div>
                    <div class="col-sm-3">
                         <select class="form-control input-sm" name="brz3_tornillo_alem_largo" id="brz3_tornillo_alem_largo">
                            <option>Tiene</option>
                            <option>No tiene</option>                                        
                        </select>
                        <p><strong>Brazo 3 - Tornillo (allen largo )Brazo</strong>.</p>
                    </div>
                    <label class="col-sm-12"><strong class="text-danger">ESTRUCTURA Y CHAPAS</strong></label>
                   
                     <div class="col-sm-3">
                        <select class="form-control input-sm" name="estructura_chasis" id="estructura_chasis">
                            <option>Bien</option>
                            <option>Reparado</option>
                            <option>No tiene</option>                                       
                        
                        </select>
                        <p><strong>Chasis</strong>.</p>
                    </div>
                     <div class="col-sm-3">
                        <select class="form-control input-sm" name="estructura_visagras" id="estructura_visagras">
                            <option>Bien</option>
                            <option>Reparado</option>
                            <option>No tiene</option>                                          
                        </select>
                        <p><strong>Visagras</strong>.</p>
                    </div>
                     <div class="col-sm-3">
                        <select class="form-control input-sm" name="chapas_central" id="chapas_central">
                            <option>Bien</option>
                            <option>Averiado</option>
                            <option>No tiene</option>                                           
                        </select>
                        <p><strong>Chapa Central</strong>.</p>
                    </div>
                     <div class="col-sm-3">
                       <select class="form-control input-sm" name="chapas_derecha" id="chapas_derecha">
                            <option>Bien</option>
                            <option>Averiado</option>
                            <option>No tiene</option>                                         
                        </select>
                        <p><strong>Chapa derecha</strong>.</p>
                    </div>
                    <label class="col-sm-12"></label>
                  
                     <div class="col-sm-3">
                        <select class="form-control input-sm" name="chapas_izquierda" id="chapas_izquierda">
                         <option>Bien</option>
                            <option>Averiado</option>
                            <option>No tiene</option>                                         
                        
                        </select>
                        <p><strong>Chapa izquiera</strong>.</p>
                    </div>
                    <div class="col-sm-12 form-group">
                          <label class="control-label">Ultima Observacion</label>
                           <div class="form-group">
                                <textarea readonly id="acc_observaciones" rows="3" name="acc_observaciones" type="text" class="form-control" placeholder="observaciones" onkeyup="validacion('objetivo');" ></textarea>
                                <span class="help-block"></span>
                          </div>
                   </div>
                    <div class="col-sm-12 form-group">
                          <label class="control-label"><strong class="text-danger">* </strong>Nueva Observacion<em> (mínimo de caracteres 30)</em></label>
                           <div class="form-group">
                                <textarea  id="new_observacion" rows="3" name="new_observacion" type="text" class="form-control" placeholder="Nueva observacion" onkeyup="validacion('objetivo');" ></textarea>
                                <span class="help-block"></span>
                          </div>
                   </div> 
               </div>
                <div class="modal-footer">
                  <div class="col-sm-12 form-group">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                      <button type="button" class="btn btn-primary" onclick="editar_acceso()"><span class="glyphicon glyphicon-lock"></span>Guardar</button>  
                      <input type="hidden" id="update_hidden_acceso_id"> 
                   </div>
                </div>     
              </div>
        </div>
  </div>