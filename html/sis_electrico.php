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
                        <h4 class="page-title">Sistema de Electrico <?php echo $bu[1]; ?></h4> </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                  
                    <div class="col-sm-12">
                        <div class="white-box">
                            <form class="form-horizontal form-material" action="add_si_electrico.php" method="post">
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
                                        <select class="form-control form-control-line" name="inversor" id="inversor">
                                       		<option>Funciona</option>
                                            <option>No Funciona</option>
                                            <option>No Tiene</option>
                                            <option>Sin Probar (Sin Bateria)</option>                                             
                                        </select>
                                        <p><strong>Inversor</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                       <input id="serie_inversor" name="serie_inversor" type="text" class="form-control" placeholder="Serie" >
                                       <p><strong>Serie Inversor</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                       <select class="form-control form-control-line" name="codigo_gamlp" id="codigo_gamlp">
                                            <option>Ilegible</option>  
                                            <option>No tiene</option> 
                                            <option>Si Tiene Llena el Siguiente Cuadro</option>                                         
                                        </select>
                                        <p><strong>Codigo GAMLP</strong>.</p>
                                    </div>
                                </div>
                                    <div class="form-group" >
                                    <label class="col-sm-12"></label>
                                    <div class="col-sm-3">
                                     <input id="cod_gamlp" name="cod_gamlp" type="text" class="form-control" placeholder="Coloca el Codigo si Tiene" >
                                    <p><strong>Llena el Codigo GAMLP</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="toma_energia_conductor" id="toma_energia_conductor">
                                            <option>Bien</option>  
                                            <option>Detereorado</option> 
                                            <option>Mal</option>                                         
                                        </select>
                                        <p><strong>Toma de Energia detras conductor</strong>.</p>
                                    </div>
                                     <div class="col-sm-3">
											 <div class="col-sm-3">
                                        <select class="form-control form-control-line" name="cableado_energia" id="cableado_energia">
                                            <option>Bien</option>  
                                            <option>Detereorando</option>  
                                            <option>Mal</option>                                        
                                        </select>
                                        <p><strong>Cableado de Energia</strong>.</p>
                                    </div>
                                    </div>
                                     <div class="col-sm-3">
                                       <select class="form-control form-control-line" name="estado_inversor" id="estado_inversor">
                                            <option>Funciona</option>  
                                            <option>No Funciona</option>                                        
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