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
                        <h4 class="page-title">Sistema de Audiovisual <?php echo $bu[1]; ?></h4> </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                  
                    <div class="col-sm-12">
                        <div class="white-box">
                            <form class="form-horizontal form-material" action="add_si_audiovisual.php" method="post">
                             <input type="hidden"  value="<?php echo $bu[0];?>" name="bus_idbus" id="bus_idbus">
                             <div class="form-group">
                                    <label class="col-sm-12">PATIO</label>
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
                                         <select class="form-control form-control-line" name="visualizacion_grabacionkl" id="visualizacion_grabacionkl">
                                       		<option>Video Input1</option>
                                            <option>Video Input2</option>
                                            <option>No se visualiza</option> 
                                            <option>Bus sin energia</option>                                          
                                        </select>
                                        <p><strong>visualizacion KL</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="tipo_almacenamientokl" id="tipo_almacenamientokl">
                                            <option>Disco Duro</option>
                                            <option>USB Ext</option>                                                                                       
                                        </select>
                                        <p><strong>Tipo Almacenamiento</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                      <select class="form-control form-control-line" name="capacidad_almacenamientokl" id="capacidad_almacenamientokl">
                                            <option>320 G</option>
                                            <option>No Tiene</option>                                                                                       
                                        </select>
                                        <p><strong>Capacidad de Almacenamiento</strong>.</p>
                                    </div>
                                </div>
                                    <div class="form-group" >
                                    <label class="col-sm-12"></label>
                                    <div class="col-sm-3">
                                         <input id="numero_serieHdd" name="numero_serieHdd" type="text" class="form-control" placeholder="Serie" >
                          			<p><strong>Serie HDD</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                         <select class="form-control form-control-line" name="estado_kl" id="estado_kl">
                                            <option>Bien</option>  
                                            <option>Mal</option>  
                                            <option>Bus sin energia</option>                                       
                                        </select>
                                        <p><strong>Estado KL</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="estado_display" id="estado_display">
                                            <option>Funciona</option>  
                                            <option>No Funciona</option> 
                                            <option>No Tiene</option>
                                            <option>Bus sin energia</option>                                        
                                        </select>
                                        <p><strong>Estado Display</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="touch_display" id="touch_display">
                                            <option>Funciona</option>  
                                            <option>Descalibrado</option> 
                                             <option>No Funciona</option>
                                             <option>Bus sin energia</option>                                     
                                        </select>
                                        <p><strong>Touch</strong>.</p>
                                    </div>
                                </div>
                                <div class="form-group" >
                                    <label class="col-sm-12"></label>
                                    <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="boton_display1" id="boton_display1">
                                            <option>Bien</option>  
                                            <option>Roto</option> 
                                            <option>No Tiene</option>                                     
                                        </select>
                          			<p><strong>Boton 1</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="boton_display_2" id="boton_display_2">
                                            <option>Bien</option>  
                                            <option>Roto</option> 
                                            <option>No Tiene</option>                                     
                                        </select>
                          			<p><strong>Boton 2</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="boton_display_3" id="boton_display_3">
                                            <option>Bien</option>  
                                            <option>Roto</option> 
                                            <option>No Tiene</option>                                     
                                        </select>
                          			<p><strong>Boton 3</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="boton_display_4" id="boton_display_4">
                                            <option>Bien</option>  
                                            <option>Roto</option> 
                                            <option>No Tiene</option>                                     
                                        </select>
                          			<p><strong>Boton 4</strong>.</p>
                                    </div>
                                </div>
                                <div class="form-group" >
                                    <label class="col-sm-12"></label>
                                    <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="estado_tv1" id="estado_tv1">
                                            <option>Funciona</option>
                                            <option>No Funciona</option>
                                            <option>No Tiene</option> 
                                            <option>Bus sin energia</option>                                        
                                        </select>
                                        <p><strong>Estado TV1</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                         <select class="form-control form-control-line" name="cod_gamlptv1" id="cod_gamlptv1">
                                            <option>Ilegible</option>  
                                            <option>No tiene</option> 
                                            <option>Si Tiene Llena el Siguiente Cuadro</option>                                         
                                        </select>
                                        <p><strong>Codigo GAMLP</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                       <input id="cod_gamlp1" name="cod_gamlp1" type="text" class="form-control" placeholder="Coloca el Codigo si Tiene" >
                          			<p><strong>Llena el Codigo GAMLP</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                       <input id="numero_serietv1" name="numero_serietv1" type="text" class="form-control" placeholder="SeSrie" >
                                        <p><strong>Numero de Serie</strong>.</p>
                                    </div>
                                </div>
                                <div class="form-group" >
                                    <label class="col-sm-12"></label>
                                    <div class="col-sm-3">
                                       <select class="form-control form-control-line" name="tipo_conectortv1" id="tipo_conectortv1">
                                           <option>RCA</option>
                                            <option>MINI DIN(BUSES NUEVOS)</option>
                                            <option>No Tiene</option>                                            
                                        </select>
                                        <p><strong>Tipo de Conector de Video</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                       <select class="form-control form-control-line" name="estado_conectortv1" id="estado_conectortv1">
                                            <option>Bien</option>
                                            <option>Mal</option>
                                            <option>No Tiene</option>                                          
                                        </select>
                                        <p><strong>Estado de Conector de Video</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="conector_rcatv1" id="conector_rcatv1">
                                            <option>Bien</option>
                                            <option>Mal</option>
                                            <option>No Tiene</option>                                          
                                        </select>
                                        <p><strong>Conector RCA</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                       <select class="form-control form-control-line" name="estado_tv2" id="estado_tv2">
                                            <option>Funciona</option>
                                            <option>No Funciona</option>
                                            <option>No Tiene</option>  
                                            <option>Bus sin energia</option>                                     
                                        </select>
                                        <p><strong>Estado TV2</strong>.</p>
                                    </div>
                                </div>
                                <div class="form-group" >
                                    <label class="col-sm-12"></label>
                                    <div class="col-sm-3">
                                       <select class="form-control form-control-line" name="cod_gamlptv2" id="cod_gamlptv2">
                                            <option>Ilegible</option>  
                                            <option>No tiene</option> 
                                            <option>Si Tiene Llena el Siguiente Cuadro</option>                                         
                                        </select>
                                        <p><strong>Codigo GAMLP</strong>.</p>
                                    </div>
                                      <div class="col-sm-3">
                                         <input id="cod_gamlp2" name="cod_gamlp2" type="text" class="form-control" placeholder="Coloca el Codigo si Tiene" >
                          			<p><strong>Llena el Codigo GAMLP</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                         <input id="numero_serietv2" name="numero_serietv2" type="text" class="form-control" placeholder="SeSrie" >
                                        <p><strong>Numero de Serie</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                         <select class="form-control form-control-line" name="tipo_conectortv2" id="tipo_conectortv2">
                                            <option>RCA</option>
                                            <option>MINI DIN(BUSES NUEVOS)</option>
                                            <option>No Tiene</option>                                            
                                        </select>
                                        <p><strong>Tipo de Conector de Video</strong>.</p>
                                    </div>
                                </div>
                                <div class="form-group" >
                                    <label class="col-sm-12"></label>
                                    <div class="col-sm-3">
                                         <select class="form-control form-control-line" name="estado_conectortv2" id="estado_conectortv2">
                                            <option>Bien</option>
                                            <option>Mal</option>
                                            <option>No Tiene</option>                                          
                                        </select>
                                        <p><strong>Estado de Conector de Video</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="conector_rcatv2" id="conector_rcatv2">
                                            <option>Bien</option>
                                            <option>Mal</option>
                                            <option>No Tiene</option>                                          
                                        </select>
                                        <p><strong>Conector RCA</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                       <select class="form-control form-control-line" name="mic_conductor" id="mic_conductor">
                                            <option>Funciona</option>
                                            <option>No Funciona</option>
                                            <option>No Tiene</option>
                                            <option>Bus sin energia</option>
                                       </select>
                                        <p><strong>MIC Conductor</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="brazo_mic" id="brazo_mic">
                                            <option>Bien</option>
                                            <option>Reparado</option>
                                            <option>Roto</option>
                                            <option>No Tiene</option>
                                       </select>
                                        <p><strong>Brazo MIC</strong>.</p>
                                    </div>
                                </div>
                                 <div class="form-group" >
                                    <label class="col-sm-12"></label>
                                    <div class="col-sm-3">
                                          <select class="form-control form-control-line" name="mic_anfitrion" id="mic_anfitrion">
                                            <option>Funciona</option>
                                            <option>No Funciona</option>
                                            <option>No Tiene</option>  
                                            <option>Bus sin energia</option>                                        
                                        </select>
                                        <p><strong>MIC Anfitrion</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                         <select class="form-control form-control-line" name="cable_usb" id="cable_usb">
                                          <option>Tiene</option>
                                          <option>No Tiene</option>                                  
                                        </select>
                                        <p><strong>Cable USB</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                         <select class="form-control form-control-line" name="estado_usb" id="estado_usb">
                                          <option>Bien</option>
                                          <option>Mal</option>
										   <option>No Tiene</option>  										  
                                        </select>
                                        <p><strong>Estado</strong>.</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">OBSERVACIONES</label>
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