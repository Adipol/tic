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