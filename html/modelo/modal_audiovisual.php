<div class="modal fade" id="update_audio_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> EDITAR SISTEMA DE COBRO</h4>
                </div>
                <div class="modal-body col-sm-12">
                     <input  type="hidden" readonly id="idcobro" name="idcobro">
                     <input  type="hidden" readonly id="bus_idbus" name="bus_idbus">
                    <div class="form-horizontal col-sm-6" role="form">
                      <div class="form-horizontal" role="form">
                         <input readonly id="cod_user" name="cod_user" type="text" class="form-control input-sm" placeholder="no tiene">
                      </div>       
                    </div>
                   <div class="form-horizontal col-sm-6" role="form">
                      <div class="form-horizontal" role="form">
                        <input readonly id="nombre_bus" name="nombre_bus" type="text" class="form-control input-sm" placeholder="no tiene">  
                      </div>  

                   </div>

                   <label class="col-sm-12 "><strong class="text-danger">TABLETA</strong></label>
                   <div class="col-sm-3 form-group">
                       <label for="update_first_name">Instalacion</label>
                           <div class="form-group">
                             <select class="form-control input-sm" name="instalacion_idinstalacion" id="instalacion_idinstalacion" class="form-control">
                               <?php while ($in=mysql_fetch_row($inst)) 
                                 {?>
                                 <option value='<?php echo $in[0];?>'> <?php echo $in[1]; ?></option>
                                 <?php } ?>
                            </select> 
                        </div>                                    
                   </div>
                    <div  class="col-sm-3 form-group">
                        <label for="update_first_name">Modelo Tablet</label>
                        <div class="form-group">
                            <select class="form-control input-sm" name="modelo_tablet" id="modelo_tablet" class="form-control">
                              <option value="Acer Antiguo">Acer Antiguo</option>
                              <option value="Acer Nueva">Acer Nueva</option>
                              <option value="Quipus">Quipus</option>
                              <option value="Armada">Armada</option>
                              <option value="No Tiene">No Tiene</option>                                           
                            </select>
                        </div>
                    </div>
                    <div  class="col-sm-3 form-group">
                        <label for="update_last_name">ID Validador</label>
                        <div class="form-group">
                                <input  id="id_validador" name="id_validador" type="text" class="form-control input-sm" placeholder="no tiene" onkeyup="validacion('apellidos');">
                                <span class="help-block"></span>
                        </div>
                    </div>

                    <div  class="col-sm-3 form-group">
                        <label for="update_email">Codigo GAMLP</label>
                        <div class="form-group">
                              <select class="form-control input-sm" name="codigo_gamlp" id="codigo_gamlp" >
                                <option value="Ilegible">Ilegible</option>  
                                <option value="No tiene">No tiene</option> 
                                <option value="Tiene">Tiene</option>                                         
                             </select>
                        </div>
                    </div>

                    <div  class="col-sm-3 form-group">
                         <label for="update_last_name">GAMLP</label>
                        <div class="form-group">
                                <input id="cod_gamlp" name="cod_gamlp" type="text" class="form-control input-sm" placeholder="no tiene" onkeyup="validacion('apellidos');">
                                <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="col-sm-3 form-group">
                        <label for="update_last_name">Codigo MFS</label>
                        <div class="form-group">
                                <select class="form-control input-sm" name="codigo_mfs" id="codigo_mfs">
                                      <option value="Ilegible">Ilegible</option>  
                                      <option value="No tiene">No tiene</option> 
                                      <option value="Tiene">Tiene</option>                                         
                               </select>
                         </div>
                    </div>
                      <div  class="col-sm-3 form-group">
                         <label for="update_last_name">Cod. MFS</label>
                        <div class="form-group">
                                <input id="cod_mfs" name="cod_mfs" type="text" class="form-control input-sm" placeholder="no tiene" onkeyup="validacion('apellidos');">
                                <span class="help-block"></span>
                        </div>
                    </div>
                   <div class="col-sm-3 form-group">
                        <label for="first_name">Torn.-Tapa-Val.</label>
                         <div class="form-group">
                           <select class="form-control input-sm" name="tornillos_tapa_validador" id="tornillos_tapa_validador">
                                    <option>1</option>
                                    <option>2</option> 
                                    <option>No Tiene</option>                                           
                           </select>
                           </div>
                    </div>
                    <label class="col-sm-12"><strong class="text-danger">ESTADO OPERATIVO - VALIDADOR</strong></label>
                       <div class="col-sm-3 form-group">
                          <label for="first_name">Est. Operativo</label>
                           <div class="form-group">
                             <select class="form-control input-sm" name="estado_operativo" id="estado_operativo">
                                    <option>Funciona</option>
                                    <option>No Funciona</option>
                                    <option>Intermitente</option>
                                    <option>No Tiene</option>                                         
                             </select>
                             </div>
                      </div>
                     <div class="col-sm-3 form-group">
                        <label for="first_name">Fallo 1</label>
                         <div class="form-group">
                           <select class="form-control input-sm" name="descripcion_fallo_1" id="descripcion_fallo_1">
                                <option>Sin Fallo</option>
                                <option>Reinicios</option>
                                <option>Calentamiento</option>
                                <option>Bateria no Carga</option>
                                <option>Display no Conoce Pulsaciones</option>                                                  
                           </select>
                           </div>
                    </div>
                     <div class="col-sm-3 form-group">
                        <label for="first_name">Fallo 2</label>
                         <div class="form-group">
                           <select class="form-control input-sm" name="descripcion_fallo_2" id="descripcion_fallo_2">
                              <option>Sin Fallo</option>
                              <option>Reinicios</option>
                              <option>Calentamiento</option>
                              <option>Bateria no Carga</option>
                              <option>Display no Conoce Pulsaciones</option>                                           
                           </select>
                           </div>
                    </div>
                    <label class="col-sm-12"><strong class="text-danger">COMUNICACION CON MOLINETE</strong></label>
                     <div class="col-sm-3 form-group">
                      <label for="first_name">Interfaz</label>
                         <div class="form-group">
                          <select class="form-control input-sm" name="interfaz" id="interfaz">
                            <option>Placa</option>  
                            <option>RS-232 Generico</option> 
                            <option>RS-232 Trend Net</option> 
                            <option>No-Tiene</option>                                        
                        </select>
                      </div>
                    </div>
                     
                     <div class="col-sm-3 form-group">
                      <label for="first_name">Estado Interfaz</label>
                         <div class="form-group">
                       <select class="form-control input-sm" name="estado_interfaz" id="estado_interfaz">
                            <option>Funciona</option>
                            <option>No funciona</option>
                            <option>No tiene</option>                                           
                        </select>
                       </div>
                    </div>
                     <div class="col-sm-3 form-group">
                      <label for="first_name">Conector DB9</label>
                         <div class="form-group">
                        <select class="form-control input-sm" name="conector_db9" id="conector_db9">
                            <option>Tiene</option>
                            <option>No Tiene</option>                                       
                        </select>
                        </div>
                    </div>
                    <div class="col-sm-3 form-group">
                     <label for="first_name">Estado del DB9</label>
                         <div class="form-group">
                      <select class="form-control input-sm" name="estado_conector" id="estado_conector">
                            <option>Bien</option>
                            <option>Roto</option>
                            <option>No Tiene</option>  
                        </select>
                        </div>
                    </div>
                  <div class="col-sm-3 form-group">
                   <label for="first_name">Cable de Comun.</label>
                         <div class="form-group">
                      <select class="form-control input-sm" name="ubicacion_cable_comunicacion" id="ubicacion_cable_comunicacion">
                          <option>Dentro de Conducto Asidero</option>
                          <option>Fuera del Conducto Asidero</option>
                          <option>No Tiene</option>                                             
                      </select>
                      </div>
                  </div>
                   <div class="col-sm-3 form-group">
                    <label for="first_name">Est. Cable</label>
                     <div class="form-group">
                      <select class="form-control input-sm" name="estado_cable_comunicacion" id="estado_cable_comunicacion">
                          <option>Independiente</option>
                          <option>Compartio con Energia</option>
                          <option>No Tiene</option>                                           
                      </select>
                    </div>
                  </div>
                   <div class="col-sm-3 form-group">
                    <label for="first_name">Tipo de Cable</label>
                         <div class="form-group">
                       <select class="form-control input-sm" name="tipo_cable" id="tipo_cable">
                          <option>UTP</option>
                          <option>STP</option>
                          <option>FTP</option>  
                          <option>Extensor USB</option>                                       
                      </select>
                      </div>
                    </div>
                  <label class="col-sm-12"><strong class="text-danger">CONEXION HUB CON TABLET</strong></label>
                  <div class="col-sm-3 form-group">
                   <label for="first_name">Tipo de HUB</label>
                         <div class="form-group">
                      <select class="form-control input-sm" name="tipo_hub" id="tipo_hub">
                          <option>Omega Normal</option>
                          <option>Omega Modificado</option>
                          <option>Klip</option>                                        
                          <option>Micro USB Hub(pulpo)</option>
                          <option>No Tiene</option>
                     </select>
                      </div>
                  </div>
             
                   <div class="col-sm-3 form-group">
                    <label for="first_name">ESTADO HUB</label>
                         <div class="form-group">
                      <select class="form-control input-sm" name="condicion_hub" id="condicion_hub">
                          <option>Funciona</option>
                          <option>No funciona</option>
                          <option>No Tiene</option>                     
                      </select>
                      </div>
                  </div>
                   <div class="col-sm-3 form-group">
                    <label for="first_name">Tipo Con. HUB</label>
                         <div class="form-group">
                      <select class="form-control input-sm" name="tipo_conexion_hub" id="tipo_conexion_hub">
                        <option>Cable OTG</option>
                        <option>Extra USB</option>
                        <option>Bus de Datos</option>  
                        <option>Conexion Directa a Tablet</option>  
                        <option>No Tiene</option>                                  
                      </select>
                      </div>
                  </div>
                   <div class="col-sm-3 form-group">
                    <label for="first_name">Estado Con HUB</label>
                         <div class="form-group">
                      <select class="form-control input-sm" name="estado_conexion_hub" id="estado_conexion_hub">
                          <option>Funciona</option>
                          <option>No funciona</option>
                          <option>No Tiene</option>                                         
                      </select>
                      </div>
                  </div>       
                    <div class="col-sm-3 form-group">
                     <label for="first_name">Acceso Ext. USB</label>
                         <div class="form-group">
                      <select class="form-control input-sm" name="ext_usb" id="ext_usb">
                          <option>Tiene</option>
                          <option>No Tiene</option>                                            
                      </select>
                      </div>
                  </div>
                   <div class="col-sm-3 form-group">
                    <label for="first_name">Est. Puerto USB</label>
                         <div class="form-group">
                      <select class="form-control input-sm" name="estado_usb" id="estado_usb">
                          <option>Funciona</option>
                          <option>No funciona</option> 
                          <option>No Tiene</option>                                           
                      </select>
                      </div>
                  </div>    
            <label class="col-sm-12"><strong class="text-danger">FUENTE DE ENERGIA</strong></label>

                  <div class="col-sm-3 form-group">
                   <label for="first_name">Ubic. Carg.-Energ.</label>
                         <div class="form-group">
                      <select class="form-control input-sm" name="ubicacion_cargador" id="ubicacion_cargador">
                          <option>Dentro de Validador</option>
                          <option>Fuera de Validador</option> 
                          <option>No tiene</option>                                          
                      </select>
                      </div>
                  </div>
                  <div class="col-sm-3 form-group">
                   <label for="first_name">Est. Carg. Energ.</label>
                         <div class="form-group">
                       <select class="form-control input-sm" name="estado_cargador" id="estado_cargador">
                          <option>Funciona</option>  
                          <option>No Tiene</option>                                          
                      </select>
                      </div>
                  </div>
              <label class="col-sm-12"><strong class="text-danger">LECTOR DE TARJETAS INTELIGENTES</strong></label>
                 <div class="col-sm-3 form-group">
                  <label for="first_name">SERIE LECT.TARJ.</label>
                         <div class="form-group">
                       <input id="id_vsam" name="id_vsam" type="text" class="form-control input-sm" placeholder="ID" >
                       
                    </div>
                  </div>
                  <div class="col-sm-3 form-group">
                   <label for="first_name">Lec.TI al HUB</label>
                         <div class="form-group">
                      <select class="form-control input-sm" name="tipo_tarjeta_inteligente" id="tipo_tarjeta_inteligente">
                          <option>Normal</option>
                          <option>Modificado</option> 
                          <option>No Tiene</option>                                          
                      </select>
                      </div>
                  </div>
                   <div class="col-sm-3 form-group">
                    <label for="first_name">Est. de Lector</label>
                         <div class="form-group">
                      <select class="form-control input-sm" name="estado_tarjeta_inteligente" id="estado_tarjeta_inteligente">
                          <option>Funciona</option>
                          <option>No Funciona</option>  
                          <option>No tiene</option>                                          
                      </select>
                      </div>
                  </div>
                   <div class="col-sm-3 form-group">
                    <label for="first_name">VSAM</label>
                       <div class="form-group">
                       <select class="form-control input-sm" name="existencia_vsam" id="existencia_vsam">
                          <option>Tiene</option>  
                          <option>No Tiene</option>                                          
                      </select>
                      </div>
                  </div>
                   <div class="col-sm-3 form-group">
                      <label for="update_last_name">Num. Serie Vsam</label>
                        <div class="form-group">
                         <input id="numero_serie" name="numero_serie" type="text" class="form-control input-sm" placeholder="Serie" >
                        </div>
                   </div>
                   <div class="col-sm-3 form-group">
                    <label for="first_name">Estado VSAM</label>
                         <div class="form-group">
                      <select class="form-control input-sm" name="estado_vsam" id="estado_vsam">
                          <option>Funciona</option>  
                          <option>No Funciona</option> 
                           <option>No tiene</option>                       
                      </select>
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
                      <input type="hidden" id="update_hidden_cobro_id"> 
                   </div>
                </div>     
              </div>
        </div>
  </div>