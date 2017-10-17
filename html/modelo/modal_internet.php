<div class="modal fade" id="update_internet_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> EDITAR SISTEMA DE COBRO</h4>
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
                     <label class="col-sm-12 "><strong class="text-danger">MODEM ROUTER</strong></label>
                    <div class="col-sm-3">
                     <?php $instalacion="SELECT * 
                        FROM instalacion";
                        $inst = mysql_query($instalacion); ?>
                        <select class="form-control input-sm" name="int_instalacion_idinstalacion" id="int_instalacion_idinstalacion">
                           <?php while ($in=mysql_fetch_row($inst)) 
                             {?>
                             <option value='<?php echo $in[0];?>'> <?php echo $in[1]; ?> </option>
                             <?php } ?>
                        </select>
                        <p><strong>Patio</strong>.</p>
                    </div>
                     <div class="col-sm-3">
                        <select class="form-control input-sm" name="router_existencia" id="router_existencia">
                             <option>Tiene</option>
                            <option>No tiene</option>                                           
                        </select>
                        <p><strong>Router Wifi</strong>.</p>
                    </div>
                     <div class="col-sm-3">
                        <select class="form-control input-sm" name="estado" id="estado">
                             <option>Funciona</option>
                            <option>Intermitente</option>
                            <option>No funciona</option>                                            
                        </select>
                        <p><strong>Est Internet</strong>.</p>
                    </div>
                     <div class="col-sm-3">                                        
                        <input id="rout_num_serie" name="rout_num_serie" type="text" class="form-control input-sm" placeholder="Llenar" >
                        <p><strong>Num.serie Router</strong>.</p>
                    </div>
                     <div class="col-sm-3">                                      
                         <input id="rout_num_imei" name="rout_num_imei" type="text" class="form-control input-sm" placeholder="Llenar" >
                        <p><strong>Imei Router</strong>.</p>
                    </div>
                    <div class="col-sm-3">
                        <select class="form-control input-sm" name="rout_estado" id="rout_estado">
                            <option>Funciona</option>
                            <option>No funciona</option>                                            
                        </select>
                        <p><strong>Router Estado</strong>.</p>
                    </div>
                     <div class="col-sm-3">
                        <select class="form-control input-sm" name="rout_ubicacion" id="rout_ubicacion">
                            <option>Baulera</option>
                            <option>Detras del Conductor</option>                                         
                        </select>
                        <p><strong>Ubic. Router</strong>.</p>
                    </div>
                     <div class="col-sm-3">
                        <select class="form-control input-sm" name="rout_cargador" id="rout_cargador">
                            <option>Tiene</option>
                            <option>No Tiene</option>                                            
                        </select>
                        <p><strong>Cargador Router</strong>.</p>
                    </div>
                    <label class="col-sm-12 "><strong class="text-danger">SIM</strong></label>
                     <div class="col-sm-3">
                        <select class="form-control input-sm" name="int_sim" id="int_sim">
                           <option>Tiene</option>
                            <option>No Tiene</option>                                           
                        </select>
                        <p><strong>Sim Card</strong>.</p>
                    </div>
                    <div class="col-sm-3">
                        <select class="form-control input-sm" name="sim_ubicacion" id="sim_ubicacion">
                            <option>Bus-Router</option>
                            <option>Simon</option>
                            <option>Legal</option>      
                            <option>Comunicacion</option>
                            <option>desarrollo</option>   
                            <option>Oficina</option>  
                            <option>Extraviado</option>  
                            <option>N/A (no aplica)</option>                                       
                        </select>
                        <p><strong>Ubic. Sim Card</strong>.</p>
                    </div>
                     <div class="col-sm-3">                                       
                        <input id="sim_numero" name="sim_numero" type="text" class="form-control input-sm" placeholder="Llenar" >
                        <p><strong>Numero del Sim</strong>.</p>
                    </div>
                     <div class="col-sm-3">
                        <input id="sim_serie" name="sim_serie" type="text" class="form-control input-sm" placeholder="Llenar" >
                        <p><strong>Serie Sim</strong>.</p>
                    </div>
                    <label class="col-sm-12 "><strong class="text-danger">ABRAZADERA</strong></label>
                     <div class="col-sm-3">
                        <select class="form-control input-sm" name="abrazaderas" id="abrazaderas">
                             <option>2</option>
                            <option>1</option>
                            <option>No tiene</option>                                             
                        </select>
                        <p><strong>Abrazaderas</strong>.</p>
                    </div>
                    <label class="col-sm-12 "><strong class="text-danger">CLOUD</strong></label>
                    <div class="col-sm-3">
                        <select class="form-control input-sm" name="cloud" id="cloud">
                            <option>Tiene</option>
                            <option>No tiene</option>                                        
                        </select>
                        <p><strong>Cloud</strong>.</p>
                    </div>
                     <div class="col-sm-3">
                        <select class="form-control input-sm" name="cloud_estado" id="cloud_estado">
                            <option>Funciona</option>
                            <option>Intermitente</option>
                            <option>No funciona</option>                         
                        </select>
                        <p><strong>Estado Cloud</strong>.</p>
                    </div>
                     <div class="col-sm-3">                                      
                         <input id="cloud_numero" name="cloud_numero" type="text" class="form-control input-sm" placeholder="Llenar" >
                        <p><strong>Numero de Cloud</strong>.</p>
                    </div>
                     <div class="col-sm-3">
                          <input id="cloud_serie" name="cloud_serie" type="text" class="form-control input-sm" placeholder="Llenar" >
                        <p><strong>Serie Cloud</strong>.</p>
                    </div>
                    <div class="col-sm-3">
                        <select class="form-control input-sm" name="cloud_cargador" id="cloud_cargador">
                            <option>Tiene</option>
                            <option>No tiene</option>                                        
                        </select>
                        <p><strong>Cargador Cloud</strong>.</p>
                    </div>    
                    <div class="col-sm-12 form-group">
                          <label class="control-label">Ultima Observacion</label>
                           <div class="form-group">
                                <textarea readonly id="obs" rows="3" name="obs" type="text" class="form-control" placeholder="observaciones" onkeyup="validacion('objetivo');" ></textarea>
                                <span class="help-block"></span>
                          </div>
                   </div>
                    <div class="col-sm-12 form-group">
                          <label class="control-label"><strong class="text-danger">* </strong>Nueva Observacion<em> (mínimo de caracteres 30)</em></label>
                           <div class="form-group">
                                <textarea  id="int_observacion" rows="3" name="int_nueva_observacion" type="text" class="form-control" placeholder="Nueva observacion" onkeyup="validacion('objetivo');" ></textarea>
                                <span class="help-block"></span>
                          </div>
                   </div> 
            </div>
                <div class="modal-footer">
                  <div class="col-sm-12 form-group">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                      <button type="button" class="btn btn-primary" onclick="editar_internet()"><span class="glyphicon glyphicon-lock"></span>Guardar</button>  
                      <input type="hidden" id="update_hidden_internet_id"> 
                   </div>
                </div>     
              </div>
        </div>
  </div>