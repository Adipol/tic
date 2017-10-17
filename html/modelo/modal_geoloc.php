<div class="modal fade" id="update_geoloc_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> EDITAR SISTEMA DE GEOLOCALIZACIO</h4>
                </div>
                <div class="modal-body col-sm-12">
                     <input  type="hidden" readonly id="geo_bus_idbus" name="geo_bus_idbus">
                    <div class="form-horizontal col-sm-6" role="form">
                      <div class="form-horizontal" role="form">
                         <input readonly id="geo_cod_user" name="geo_cod_user" type="text" class="form-control input-sm" placeholder="no tiene">
                      </div>       
                    </div>
                   <div class="form-horizontal col-sm-6" role="form">
                      <div class="form-horizontal" role="form">
                        <input readonly id="geo_nombre_bus" name="geo_nombre_bus" type="text" class="form-control input-sm" placeholder="no tiene">  
                      </div> 
                   </div>
                   <label class="col-sm-12 "><strong class="text-danger">GPS</strong></label>
                   <div class="col-sm-3">
                            <?php $instalacion="SELECT * 
                            FROM instalacion";
                            $inst = mysql_query($instalacion); ?>
                                <select class="form-control input-sm" name="geo_instalacion_idinstalacion" id="geo_elec_instalacion_idinstalacion">
                                   <?php while ($in=mysql_fetch_row($inst)) 
                                     {?>
                                     <option value='<?php echo $in[0];?>'> <?php echo $in[1]; ?> </option>
                                     <?php } ?>
                                </select>
                                <p><strong>Patio</strong>.</p>
                    </div>                   
                     <div class="col-sm-3 form-group">
                            <select class="form-control input-sm" name="estado_operativo_gps" id="estado_operativo_gps">
                                <option>Funciona</option>
                                <option>No Funciona</option>
                                <option>No Tiene</option>                                           
                            </select>
                            <p><strong>Est. Operativo </strong>.</p>
                        </div>
                         <div class="col-sm-3 form-group">
                             <select class="form-control input-sm" name="ubicacion" id="ubicacion">
                                <option>Conductor</option>
                                <option>Puerta</option>                                                                                       
                            </select>
                            <p><strong>Ubicacion</strong>.</p>
                        </div>
                         <div class="col-sm-3 form-group">
                             <input id="geo_imei" name="geo_imei" type="text" class="form-control input-sm" placeholder="IMEI" >
                             <p><strong>IMEI</strong>.</p>
                        </div>
                        <div class="col-sm-3 form-group">
                              <input id="geo_numero_serie" name="geo_numero_serie" type="text" class="form-control input-sm" placeholder="Serie" >
                            <p><strong>Num.de Serie</strong>.</p>
                        </div>
                         <div class="col-sm-3 form-group">
                             <select class="form-control input-sm" name="geo_codigo_gamlp" id="geo_codigo_gamlp">
                                <option>Ilegible</option>  
                                <option>No tiene</option> 
                                <option>Si Tiene Llena el Siguiente Cuadro</option>                                         
                            </select>
                            <p><strong>Codigo GAMLP</strong>.</p>
                        </div>
                         <div class="col-sm-3 form-group">
                            <input id="geo_cod_gamlp" name="geo_cod_gamlp" type="text" class="form-control input-sm" placeholder="no tiene" >
                            <p><strong>Llena el Codigo GAMLP</strong>.</p>
                        </div>   
                        <div class="col-sm-3 form-group">
                             <select class="form-control input-sm" name="visualizacion_sistema_gps" id="visualizacion_sistema_gps">
                              <option>Pulsos Constantes</option>
                              <option>Pulsos Intermitentes</option>
                              <option>Sin Pulsos</option>                                  
                            </select>
                            <p><strong>Visualizacion con Sistema GPS</strong>.</p>
                        </div> 
                        <label class="col-sm-12"><strong class="text-danger">SIM CARD</strong></label>
                         <div class="col-sm-3 form-group">
                            <select class="form-control input-sm" name="sim_card" id="sim_card">
                                <option>Tiene</option>  
                                <option>No tiene</option>                                         
                            </select>
                            <p><strong>SIM Card</strong>.</p>
                        </div>
                        <div class="col-sm-3 form-group">
                              <input id="numero_sim_card" name="numero_sim_card" type="text" class="form-control input-sm" placeholder="Numero" >
                        <p><strong>Numero de Telefono SIM Card</strong>.</p>
                        </div>
                        <div class="col-sm-3 form-group">
                              <input id="numero_serie_sim_card" name="numero_serie_sim_card" type="text" class="form-control input-sm" placeholder="Serie" >
                        <p><strong>Numero de Serie sim card</strong>.</p>
                        </div>
                        <label class="col-sm-12"><strong class="text-danger">ANTENAS</strong></label>
                         <div class="col-sm-3 form-group">
                            <select class="form-control input-sm" name="gps" id="gps">
                                <option>Funciona</option>  
                                <option>No Funciona</option> 
                                <option>No Tiene</option> 
                                <option>Reparado</option>                                        
                            </select>
                            <p><strong>GPS</strong>.</p>
                        </div>                                     
                         <div class="col-sm-3 form-group">
                            <select class="form-control input-sm" name="gsm" id="gsm">
                                <option>Funciona</option>  
                                <option>No Funciona</option> 
                                <option>No Tiene</option> 
                                <option>Reparado</option>                                          
                            </select>
                            <p><strong>GSM</strong>.</p>
                           
                        </div>
                        
                  
                        <label class="col-sm-12"><strong class="text-danger">HANDSET</strong></label>
                         <div class="col-sm-3 form-group">
                            <select class="form-control input-sm" name="handset" id="handset">
                                <option>Tiene</option>
                                <option>No Tiene</option>                                       
                            </select>
                            <p><strong>Handset</strong>.</p>
                        </div>
                       
                        <div class="col-sm-3 form-group">
                             <select class="form-control input-sm" name="estado_handset" id="estado_handset">
                                <option>Funciona</option>
                                <option>Intermitencia</option>
                                <option>No Funciona</option>  
                            </select>
                            <p><strong>Estado Handset</strong>.</p>
                        </div>
                       
                         <div class="col-sm-3 form-group">
                           <select class="form-control input-sm" name="conector_gps" id="conector_gps">
                                <option>Bien</option>
                                <option>Mal</option>
                                <option>Reparado</option>
                                <option>No Tiene</option>                                             
                            </select>
                            <p><strong>Conec. GPS Hand.</strong>.</p>
                        </div>
                         <div class="col-sm-3 form-group">
                            <select class="form-control input-sm" name="display_handset" id="display_handset">
                                <option>Bien</option>
                                <option>Mal</option>
                                <option>No Tiene</option>                                          
                            </select>
                            <p><strong>Display Handset</strong>.</p>
                            
                        </div>
                         <div class="col-sm-3 form-group">
                             <select class="form-control input-sm" name="botones_handset" id="botones_handset">
                                <option>Legibles</option>
                                <option>Ilegibles</option>
                                <option>No Tiene</option>                                        
                            </select>
                            <p><strong>Botones</strong>.</p>
                        </div>
                        <div class="col-sm-3 form-group">
                            <select class="form-control input-sm" name="carcasa_handset" id="carcasa_handset">
                                <option>Bien</option>
                                <option>Mal</option>
                           </select>
                            <p><strong>Carcasa</strong>.</p>
                        </div>
                         <div class="col-sm-3 form-group">
                             <select class="form-control input-sm" name="porta_handset" id="porta_handset">
                                <option>Tiene</option>
                                <option>Reparado</option>
                                <option>No Tiene</option>                                          
                            </select>
                            <p><strong>Porta Handset</strong>.</p>
                        </div>
                    <div class="col-sm-12 form-group">
                          <label class="control-label">Ultima Observacion</label>
                           <div class="form-group">
                                <textarea readonly id="geo_observaciones" rows="3" name="geo_observaciones" type="text" class="form-control" placeholder="observaciones" onkeyup="validacion('objetivo');" ></textarea>
                                <span class="help-block"></span>
                          </div>
                   </div>
                    <div class="col-sm-12 form-group">
                          <label class="control-label"><strong class="text-danger">* </strong>Nueva Observacion<em> (mínimo de caracteres 30)</em></label>
                           <div class="form-group">
                                <textarea  id="ge_observacion" rows="3" name="ge_observacion" type="text" class="form-control" placeholder="Nueva observacion" onkeyup="validacion('objetivo');" ></textarea>
                                <span class="help-block"></span>
                          </div>
                   </div> 
           </div>
                <div class="modal-footer">
                  <div class="col-sm-12 form-group">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                      <button type="button" class="btn btn-primary" onclick="editar_geoloc()"><span class="glyphicon glyphicon-lock"></span>Guardar</button>  
                      <input type="hidden" id="update_hidden_geoloc_id"> 
                   </div>
                </div>     
       </div>
    </div>
 </div>