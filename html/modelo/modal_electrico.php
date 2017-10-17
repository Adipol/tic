<div class="modal fade" id="update_electrico_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> EDITAR SISTEMA ELECTRICO</h4>
                </div>
                <div class="modal-body col-sm-12">
                     <input  type="hidden" readonly id="elec_bus_idbus" name="elec_bus_idbus">
                    <div class="form-horizontal col-sm-6" role="form">
                      <div class="form-horizontal" role="form">
                         <input readonly id="elec_cod_user" name="elec_cod_user" type="text" class="form-control input-sm" placeholder="no tiene">
                      </div>       
                    </div>
                   <div class="form-horizontal col-sm-6" role="form">
                      <div class="form-horizontal" role="form">
                        <input readonly id="elec_nombre_bus" name="elec_nombre_bus" type="text" class="form-control input-sm" placeholder="no tiene">  
                      </div>  
                   </div>
                   <label class="col-sm-12 "><strong class="text-danger">INVERSOR</strong></label>
                   <div class="col-sm-3">
                    <?php $instalacion="SELECT * 
                    FROM instalacion";
                    $inst = mysql_query($instalacion); ?>
                        <select class="form-control input-sm" name="elec_instalacion_idinstalacion" id="elec_instalacion_idinstalacion">
                           <?php while ($in=mysql_fetch_row($inst)) 
                             {?>
                             <option value='<?php echo $in[0];?>'> <?php echo $in[1]; ?> </option>
                             <?php } ?>
                        </select>
                        <p><strong>Patio</strong>.</p>
                    </div>
                    <div class="col-sm-3">
                        <select class="form-control input-sm" name="inversor" id="inversor">
                          <option>Funciona</option>
                            <option>No Funciona</option>
                            <option>No Tiene</option>
                            <option>Sin Probar (Sin Bateria)</option>                                             
                        </select>
                        <p><strong>Inversor</strong>.</p>
                    </div>
                     <div class="col-sm-3">
                       <input id="serie_inversor" name="serie_inversor" type="text" class="form-control input-sm" placeholder="Serie" >
                       <p><strong>Serie Inversor</strong>.</p>
                    </div>
                     <div class="col-sm-3">
                       <select class="form-control input-sm" name="elec_codigo_gamlp" id="elec_codigo_gamlp">
                            <option>Ilegible</option>  
                            <option>No tiene</option> 
                            <option>Si Tiene Llena el Siguiente Cuadro</option>                                         
                        </select>
                        <p><strong>Codigo GAMLP</strong>.</p>
                    </div>
                    <div class="col-sm-3">
                     <input id="elec_cod_gamlp" name="elec_cod_gamlp" type="text" class="form-control input-sm" placeholder="Coloca el Codigo si Tiene" >
                    <p><strong>Llena el Codigo GAMLP</strong>.</p>
                    </div>
                    <label class="col-sm-12 "><strong class="text-danger">TOMA DE ENERGIA</strong></label>
                     <div class="col-sm-3">
                        <select class="form-control input-sm" name="toma_energia_conductor" id="toma_energia_conductor">
                            <option>Bien</option>  
                            <option>Detereorado</option> 
                            <option>Mal</option>                                         
                        </select>
                        <p><strong>Detras conductor</strong>.</p>
                    </div>
                    
                   <div class="col-sm-3">
                        <select class="form-control input-sm" name="cableado_energia" id="cableado_energia">
                            <option>Bien</option>  
                            <option>Detereorando</option>  
                            <option>Mal</option>                                        
                        </select>
                        <p><strong>Cableado Energi.</strong>.</p>
                    </div>
                     <div class="col-sm-3">
                       <select class="form-control input-sm" name="estado_inversor" id="estado_inversor">
                            <option>Funciona</option>  
                            <option>No Funciona</option>                                        
                        </select>
                        <p><strong>Estado</strong>.</p>
                    </div>
                    <div class="col-sm-12 form-group">
                          <label class="control-label">Ultima Observacion</label>
                           <div class="form-group">
                                <textarea readonly id="elec_observaciones" rows="3" name="elec_observaciones" type="text" class="form-control" placeholder="S/O" onkeyup="validacion('objetivo');" ></textarea>
                                <span class="help-block"></span>
                          </div>
                   </div>
                    <div class="col-sm-12 form-group">
                          <label class="control-label"><strong class="text-danger">* </strong>Nueva Observacion<em> (mínimo de caracteres 30)</em></label>
                           <div class="form-group">
                                <textarea  id="e_observacion" rows="3" name="e_observacion" type="text" class="form-control" placeholder="Nueva observacion" onkeyup="validacion('objetivo');" ></textarea>
                                <span class="help-block"></span>
                          </div>
                   </div> 
               </div>
                <div class="modal-footer">
                  <div class="col-sm-12 form-group">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                      <button type="button" class="btn btn-primary" onclick="editar_electrico()"><span class="glyphicon glyphicon-lock"></span>Guardar</button>  
                      <input type="hidden" id="update_hidden_electrico_id"> 
                   </div>
                </div>     
              </div>
        </div>
  </div>