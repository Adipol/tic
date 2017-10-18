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



           
                    <div class="col-sm-12 form-group">
                          <label class="control-label">Ultima Observacion</label>
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