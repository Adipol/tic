<div class="modal fade" id="update_seguridad_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> EDITAR SISTEMA DE SEGURIDAD</h4>
                </div>
                <div class="modal-body col-sm-12">
			    	<input  type="hidden" readonly id="int_bus_idbus" name="int_bus_idbus">
                    <div class="form-horizontal col-sm-6" role="form">
                      <div class="form-horizontal" role="form">
                         <input readonly id="int_cod_user" name="int_cod_user" type="text" class="form-control input-sm" placeholder="no tiene">
                      </div>       
                    </div>
                   <div class="form-horizontal col-sm-6" role="form">
                      <div class="form-horizontal" role="form">
                        <input readonly id="int_nombre_bus" name="int_nombre_bus" type="text" class="form-control input-sm" placeholder="no tiene">  
                      </div>  
                   </div>

				<label class="col-sm-12 "><strong class="text-danger">DVR</strong></label>
                    <div class="col-sm-3">
                     <?php $instalacion="SELECT * 
                        FROM instalacion";
                        $inst = mysql_query($instalacion); ?>
                        <select class="form-control input-sm" name="int_instalacion_idinstalacion" id="int_instalacion_idinstalacion">
                           <?php while ($in=mysql_fetch_row($inst))
                           {?>
                             <option value='<?php echo $in[0];?>'> <?php echo $in[1]; ?> </option>
                             <?php }?>
                        </select>
                        <p><strong>Patio</strong>.</p>
                </div>

					<div class="col-sm-3">
                        <select class="form-control input-sm" name="dvr_gabinete" id="dvr_gabinete">
                             <option>Buen Estado</option>
                             <option>Mal Estao</option> 
                             <option>No tiene</option> 
                                                                      
                        </select>
                        <p><strong>Gabinete dvr</strong>.</p>
                    </div>
                    
					<div class="col-sm-3">
                        <select class="form-control input-sm" name="int_dvr" id="int_dvr">
                            <option>Tiene</option>
                            <option>No tiene</option>                                           
                        </select>
                        <p><strong>Existencia de DVR</strong>.</p>
                    </div>
                    
                    <div class="col-sm-3">
                        <select class="form-control input-sm" name="int_dvr_existencia" id="int_dvr_existencia">
                            <option>Moulo de Grabacion</option>
                            <option>Modulo de alimentacion</option> 
                            <option>Ambos moulos</option> 
                            <option>No tiene</option> 
                                              
                        </select>
                        <p><strong>Existencia de Modulos del DVR</strong>.</p>
                    </div>

                    <div class="col-sm-3">
                        <select class="form-control input-sm" name="int_funcion_grabacion" id="int_funcion_grabacion">
                            <option>Graba</option>
                            <option>No Graba</option>
                            <option>Bus sin energia</option>                                            
                        </select>
                        <p><strong>Funciòn de Grabaciòn</strong>.</p>
                    </div>

                    <div class="col-sm-3">
                        <select class="form-control input-sm" name="int_Almacenamiento" id="int_Almacenamiento">
                            <option>HDD</option>
                            <option>SDD</option>
                            <option>No tiene</option>                                             
                        </select>
                        <p><strong>Alimentamiento</strong>.</p>
                    </div>
                    
                    <div class="col-sm-3">
                        <select class="form-control input-sm" name="int_Capacidad" id="int_Capacidad">
                            <option>1 Tb</option>
                            <option>32 Gb</option>
                            <option>64 Gb</option>
                            <option>Otro</option>                                       
                        </select>
                        <p><strong>Capacidad</strong>.</p>
                    </div>

                    <div class="col-sm-3">                                      
                        <input id="int_num_serie_hdd" name="int_num_serie_hdd" type="text" class="form-control input-sm" placeholder="Llenar" >
                        <p><strong>Numero de serie HDD</strong>.</p>
                    </div>

                    <div class="col-sm-3">
                        <select class="form-control input-sm" name="int_tornillos_rac_hdd" id="int_tornillos_rac_hdd">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>Completo</option>
                            <option>No Tiene</option>                                    
                        </select>
                        <p><strong>Tornillos Rack HDD</strong>.</p>
                    </div>

                    <div class="col-sm-3">
                        <select class="form-control input-sm" name="int_adaptador_rca" id="int_adaptador_rca">
                            <option>Funciona</option>
                            <option>No funciona</option>
                            <option>No tiene</option>                                  
                        </select>
                        <p><strong>Adaptador RCA</strong>.</p>
                    </div>

                    <div class="col-sm-3">
                        <select class="form-control input-sm" name="int_lambda1" id="int_lambda1">
                            <option>Funciona</option>
                            <option>No funciona</option>
                            <option>Reparado</option>                                  
                        </select>
                        <p><strong>Landa 1</strong>.</p>
                    </div>

                    <div class="col-sm-3">
                        <select class="form-control input-sm" name="int_lambda2" id="int_lambda2">
                            <option>Funciona</option>
                            <option>No funciona</option>
                            <option>Reparado</option>                                  
                        </select>
                        <p><strong>Landa 2</strong>.</p>
                    </div>

                    <div class="col-sm-3">
                        <select class="form-control input-sm" name="int_lambda3" id="int_lambda3">
                            <option>Funciona</option>
                            <option>No funciona</option>
                            <option>Reparado</option>                                  
                        </select>
                        <p><strong>Landa 3</strong>.</p>
                    </div>

                    <div class="col-sm-3">
                        <select class="form-control input-sm" name="int_lambda4" id="int_out1">
                            <option>Funciona</option>
                            <option>No funciona</option>
                            <option>Reparado</option>                                  
                        </select>
                        <p><strong>Landa 4</strong>.</p>
                    </div>

                    <div class="col-sm-3">
                        <select class="form-control input-sm" name="int_out1" id="int_out1">
                            <option>Funciona</option>
                            <option>No funciona</option>
                            <option>Reparado</option>                                  
                        </select>
                        <p><strong>Out 1</strong>.</p>
                    </div>

                    <div class="col-sm-3">
                        <select class="form-control input-sm" name="int_out2" id="int_out2">
                            <option>Funciona</option>
                            <option>No funciona</option>
                            <option>Reparado</option>                                  
                        </select>
                        <p><strong>Out 2</strong>.</p>
                    </div>

                    <div class="col-sm-3">
                        <select class="form-control input-sm" name="int_out3" id="int_out3">
                            <option>Funciona</option>
                            <option>No funciona</option>
                            <option>Reparado</option>                                  
                        </select>
                        <p><strong>Out 3</strong>.</p>
                    </div>

                    <div class="col-sm-3">
                        <select class="form-control input-sm" name="int_out4" id="int_out4">
                            <option>Funciona</option>
                            <option>No funciona</option>
                            <option>Reparado</option>                                  
                        </select>
                        <p><strong>Out 4</strong>.</p>
                    </div>

                    <div class="col-sm-3">
                        <select class="form-control input-sm" name="int_out4" id="int_out4">
                            <option>Funciona</option>
                            <option>No funciona</option>
                            <option>No tiene</option>                                  
                        </select>
                        <p><strong>Mezaclador de Video</strong>.</p>
                    </div>

                    <div class="col-sm-3">
                        <select class="form-control input-sm" name="int_out4" id="int_out4">
                            <option>Funciona</option>
                            <option>No funciona</option>
                            <option>No tiene</option>                                  
                        </select>
                        <p><strong>Out 1 del kl</strong>.</p>
                    </div>

                    <div class="col-sm-3">
                        <select class="form-control input-sm" name="int_out4" id="int_out4">
                            <option>Funciona</option>
                            <option>No funciona</option>
                            <option>No tiene</option>                                  
                        </select>
                        <p><strong>Out 2 del kl</strong>.</p>
                    </div>

                    <div class="col-sm-3">
                        <select class="form-control input-sm" name="int_out4" id="int_out4">
                            <option>Funciona</option>
                            <option>No funciona</option>
                            <option>No tiene</option>                                  
                        </select>
                        <p><strong>Out 3 del kl</strong>.</p>
                    </div>

                    <div class="col-sm-3">
                        <select class="form-control input-sm" name="int_out4" id="int_out4">
                            <option>Funciona</option>
                            <option>No funciona</option>
                            <option>No tiene</option>                                  
                        </select>
                        <p><strong>Out 4 del kl</strong>.</p>
                    </div>

                    <div class="col-sm-3">
                        <select class="form-control input-sm" name="int_cam_com_front" id="int_cam_com_front">
                            <option>Sana</option>
                            <option>No tiene</option>                                
                        </select>
                        <p><strong>Camara frontal</strong>.</p>
                    </div>
                    
                    <div class="col-sm-3">
                        <select class="form-control input-sm" name="int_cam_com_cond" id="int_cam_com_cond">
                            <option>Sana</option>
                            <option>No tiene</option>                                
                        </select>
                        <p><strong>Camara del Conductor</strong>.</p>
                    </div>

                    <div class="col-sm-12 form-group">
                          <label class="control-label"> Ultima Observacion</label>
                           <div class="form-group">
                                <textarea readonly id="observaciones" rows="3" name="observaciones" type="text" class="form-control" placeholder="observaciones" onkeyup="validacion('objetivo');" ></textarea>
                                <span class="help-block"></span>
                          </div>
                   </div>

                    <div class="col-sm-12 form-group">
                          <label class="control-label"><strong class="text-danger">* </strong>Nueva Observacion<em> (mínimo de caracteres 30)</em></label>
                           <div class="form-group">
                                <textarea  id="nueva_observacion" rows="3" name="nueva_observacion" type="text" class="form-control" placeholder="Nueva observacion" onkeyup="validacion('objetivo');" ></textarea>
                                <span class="help-block"></span>
                          </div>
                    </div> 

                    </div>
                <div class="modal-footer">
                  <div class="col-sm-12 form-group">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                      <button type="button" class="btn btn-primary" onclick="editar_cobro()"><span class="glyphicon glyphicon-lock"></span>Guardar</button>  
                      <input type="hidden" id="update_hidden_seguridad_id"> 
                   </div>
                </div>     
              </div>
        </div>
  </div>