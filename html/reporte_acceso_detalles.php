<?php
include("header.php");
include("modelo/conec.php");
 ?>
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Reportes</h4> </div>
                </div>

                <div class="row">
                    <div class="col-sm-3">
                        <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">DISPOSICION DE BUSES</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                                <table class="table">
                                    <thead>

                                        <tr>
                                            <th>INSTALACIÓN</th>
                                            <th>CANTIDAD</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="SELECT
                          							  Count(*) AS cantidad,
                          							  instalacion.nombre_instalacion
                          							  FROM
                          							  cobro
                          							  INNER JOIN instalacion ON cobro.instalacion_idinstalacion = instalacion.idinstalacion
                          							  group by instalacion_idinstalacion
                          							  ORDER BY `cantidad` ASC";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>          <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['nombre_instalacion'];?>   </td>
                                             <td class="txt-oflo"><span><strong><?php echo $querv['cantidad'];?></strong></span></td>                       
                                        </tr> 
                                             <?php }?>                      
                                    </tbody>
                                </table> 
                             </div>    
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">PLACA DE MOLINETE</strong> </label></h3>
                              <div class="table  table-striped table-responsive" >
                              <form>
          							<table class="table">
          								<thead>
          									<tr>
          										<th>PLACA DE MOLINETE</th>
          										<th>CANTIDAD</th>
          									</tr>
          								</thead>
          								<tbody>
          							   <?php
          						  $query_val="  SELECT
                                                  Count(*) AS cantidad,
                                                  acceso.placa_molinete
                                                  FROM
                                                  acceso
                                                  GROUP BY
                                                  acceso.placa_molinete";

          						  $query_va=mysql_query($query_val);                          
          						  while($querv = mysql_fetch_assoc($query_va))
          						  {
          						?>  
                         <tr> 
          								 <td class="txt-oflo"><?php echo $querv['placa_molinete'];?></td>
          						  			 <td class="txt-oflo"><a href="reporte_acceso_detalle.php?dato=<?php echo $querv['placa_molinete'];?>&dato3=placa_molinete" data-target="#mostrarmodal" data-toggle="modal"><span><strong><?php echo $querv['cantidad'];?></strong></span></a>
                              
                             </td> 
          							</tr>
          										 <?php }?>  	   
                  				</tbody>
        							</table>
                       </form>
                     </div>  
                  </div>
                 </div>


              <div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                         <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h3>REPORTE</h3>
                       </div>
                        <div class="modal-body">
                            <table class="table">
                                    <thead>
                                        <tr>                                       
                                            <th>BUS</th>
                                            <th>INSTALACIÓN</th>
                                            <th>OBSERVACIONES</th>   
                                            <th>USUARIO</th>                                        
                                        </tr>
                                    </thead>
                                    <tbody>

                                       <?php 
                                        $dato=$_GET['dato'];
                                        $dato3=$_GET['dato3'];
                                        $dat="  SELECT
                                                acceso.bus_idbus,
                                                acceso.instalacion_idinstalacion,
                                                acceso.estado_molinete,
                                                acceso.observaciones,
                                                bus.nombre_bus,
                                                instalacion.nombre_instalacion,
                                                usuario.cod_user
                                                FROM
                                                acceso
                                                INNER JOIN bus ON acceso.bus_idbus = bus.idbus
                                                INNER JOIN instalacion ON acceso.instalacion_idinstalacion = instalacion.idinstalacion
                                                INNER JOIN usuario ON acceso.usuario_idusuario = usuario.idusuario
                                                WHERE $dato3='$dato'
                                                ORDER BY bus_idbus ASC";

                                        $da=mysql_query($dat);
                                        while($c = mysql_fetch_assoc($da))
                                        {
                                        ?>
                                        <tr>  
                                             <td class="txt-oflo"> <?php echo $c['nombre_bus'];?> </td>
                                             <td class="txt-oflo"> <?php echo $c['nombre_instalacion'];?> </td>                                             
                                             <td class="txt-oflo"> <?php echo $c['observaciones'];?> </td> 
                                             <td class="txt-oflo"> <?php echo $c['cod_user'];?> </td>                                
                                        </tr>  
                                             <?php }?>                              
                                    </tbody>
                                </table>    
                       </div>
                           <div class="modal-footer">
                          <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
                       </div>
                        </div>
                     </div>
              </div>
                      <div class="col-sm-3">
                        <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">ESTADO OPERATIVO DB9</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                                <table class="table">
                                    <thead>
                                        <tr>
                                             <th>ESTADO</th>
                                             <th>CANTIDAD</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php

                              $query_val="  SELECT
                                            acceso.val_estadodb9,
                                            Count(*) AS cantidad
                                            FROM
                                            acceso
                                            GROUP BY
                                            acceso.val_estadodb9";

                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                            <td class="txt-oflo"><?php echo $querv['val_estadodb9'];?>   </td>
                                            <td class="txt-oflo"><a href="reporte_acceso.php?dato=<?php echo $querv['val_estadodb9'];?>&dato3=val_estadodb9"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                       
                                        </tr>  
                                             <?php }?>          
                                    </tbody>
                                </table> 
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">SOLENOIDE GIRO INGRESO</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ESTADO</th>
                                            <th>CANTIDAD</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="  SELECT
                                            acceso.sol_giro_ingreso,
                                            Count(*) AS cantidad
                                            FROM
                                            acceso
                                            GROUP BY
                                            acceso.sol_giro_ingreso";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['sol_giro_ingreso'];?>   </td>
                                             <td class="txt-oflo"><a href="reporte_acceso.php?dato=<?php echo $querv['sol_giro_ingreso'];?>&dato3=sol_giro_ingreso"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                    
                                        </tr>  
                                             <?php }?>  
                                                        
                                    </tbody>
                                </table> 
                            </div>     
                        </div>
                    </div>
    
                </div>
                 <div class="row">
                     <div class="col-sm-3">
                        <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">SOLENOIDE GIRO INVERSO</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ESTADO</th>
                                            <th>CANTIDAD</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="  SELECT
                                            Count(*) AS cantidad,
                                            acceso.sol_giro_inverso
                                            FROM
                                            acceso
                                            GROUP BY
                                            acceso.sol_giro_inverso";
                                            
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['sol_giro_inverso'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_acceso.php?dato=<?php echo $querv['sol_giro_inverso'];?>&dato3=sol_giro_inverso"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                    
                                        </tr>  
                                             <?php }?>  
                                                        
                                    </tbody>
                                </table> 
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">SENSOR DE AGARRE</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>SENSOR</th>
                                            <th>CANTIDAD</th>                                            
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="  SELECT
                                            Count(*) AS cantidad,
                                            acceso.sensor_agarre
                                            FROM
                                            acceso
                                            GROUP BY
                                            acceso.sensor_agarre";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['sensor_agarre'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_acceso.php?dato=<?php echo $querv['sensor_agarre'];?>&dato3=sensor_agarre"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                    
                                        </tr>  
                                             <?php }?>                 
                                    </tbody>
                                </table> 
                             </div>     
                        </div>
                    </div>            
                     <div class="col-sm-3">
                        <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">FERRITAS</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>FERRITAS</th>
                                            <th>CANTIDAD</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="  SELECT
                                            Count(*) AS cantidad,
                                            acceso.ferritas
                                            FROM
                                            acceso
                                            GROUP BY
                                            acceso.ferritas";

                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['ferritas'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_acceso.php?dato=<?php echo $querv['ferritas'];?>&dato3=ferritas"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                     
                                        </tr>  
                                             <?php }?>                
                                    </tbody>
                                </table> 
                            </div>                                 
                        </div>
                    </div>  
                    <div class="col-sm-3">
                        <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">RUEDA DENTADA</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>RUEDDA DENTADA</th>
                                            <th>CANTIDAD</th>                                            
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="  SELECT
                                            Count(*) AS cantidad,
                                            acceso.rueda_dentada
                                            FROM
                                            acceso
                                            GROUP BY
                                            acceso.rueda_dentada";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['rueda_dentada'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_acceso.php?dato=<?php echo $querv['rueda_dentada'];?>&dato3=rueda_dentada"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                        
                                        </tr>  
                                             <?php }?>  
                                                        
                                    </tbody>
                                </table> 
                            </div> 
                        </div>
                    </div> 

                </div>

                <div class="row">
                 <div class="col-sm-3">
                        <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">CONTADOR MOLINETE</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>CONTADOR</th>
                                            <th>CANTIDAD</th>                                            
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="  SELECT
                                            Count(*) AS cantidad,
                                            acceso.contador_molinete
                                            FROM
                                            acceso
                                            GROUP BY
                                            acceso.contador_molinete";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['contador_molinete'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_acceso.php?dato=<?php echo $querv['contador_molinete'];?>&dato3=contador_molinete"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                      
                                        </tr>  
                                             <?php }?>               
                                    </tbody>
                                </table> 
                            </div>                     
                        </div>
                    </div> 
                     <div class="col-sm-3">
                        <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">BOCINA DE ACTIVACIÓN</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>BOCINA</th>
                                            <th>CANTIDAD</th>                               
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php

                              $query_val="  SELECT
                                            Count(*) AS cantidad,
                                            acceso.bociona_activacion
                                            FROM
                                            acceso
                                            GROUP BY
                                            acceso.bociona_activacion";

                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                            <td class="txt-oflo"><?php echo $querv['bociona_activacion'];?>   </td>
											<td class="txt-oflo"><a href="reporte_acceso.php?dato=<?php echo $querv['bociona_activacion'];?>&dato3=bociona_activacion"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                    
                                        </tr>  
                                             <?php }?>  
                                    </tbody>
                                </table> 
                            </div>     
                        </div>
                    </div> 

                      <div class="col-sm-3">
                        <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">BRAZO 1 PASADOR</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>PASADOR</th>
                                            <th>CANTIDAD</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="  SELECT
                                            Count(*) AS cantidad,
                                            acceso.brz1_pasador
                                            FROM
                                            acceso
                                            GROUP BY
                                            acceso.brz1_pasador";

                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['brz1_pasador'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_acceso.php?dato=<?php echo $querv['brz1_pasador'];?>&dato3=brz1_pasador"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                       
                                        </tr>  
                                             <?php }?>  
                                                        
                                    </tbody>
                                </table> 
                            </div> 
                        </div>
                    </div> 

                    <div class="col-sm-3">
                        <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">BRAZO 1</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>BRAZO</th>
                                            <th>CANTIDAD</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="  SELECT
                                            Count(*) AS cantidad,
                                            acceso.brz1_brazo
                                            FROM
                                            acceso
                                            GROUP BY
                                            acceso.brz1_brazo";

                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['brz1_brazo'];?>   </td>
											<td class="txt-oflo"><a href="reporte_acceso.php?dato=<?php echo $querv['brz1_brazo'];?>&dato3=brz1_brazo"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                       
                                        </tr>  
                                             <?php }?>  
                                                        
                                    </tbody>
                                </table> 
                             </div> 
                        </div>
                    </div> 
                </div>

            <div class="row">
                  <div class="col-sm-3">
                        <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">BRAZO 1 TORNILLO PASADOR</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>TORNILLO PASADOR</th>
                                            <th>CANTIDAD</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="  SELECT
                                            Count(*) AS cantidad,
                                            acceso.brz1_tornillo_pasador
                                            FROM
                                            acceso
                                            GROUP BY
                                            acceso.brz1_tornillo_pasador";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['brz1_tornillo_pasador'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_acceso.php?dato=<?php echo $querv['brz1_tornillo_pasador'];?>&dato3=brz1_tornillo_pasador"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                      
                                        </tr>  
                                             <?php }?>  
                                                        
                                    </tbody>
                                </table> 
                             </div>
                           </div>
                        </div>

                        <div class="col-sm-3">
                          <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">BRAZO 1 TORNILLO ALEM LARGO</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                              <form class="form-horizontal form-material" action="reporte.php" method="post">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ALEM LARGO</th>
                                            <th>CANTIDAD</th>                                            
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="  SELECT
                                            Count(*) AS cantidad,
                                            acceso.brz1_tornillo_alem_largo
                                            FROM
                                            acceso
                                            GROUP BY
                                            acceso.brz1_tornillo_alem_largo";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['brz1_tornillo_alem_largo'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_acceso.php?dato=<?php echo $querv['brz1_tornillo_alem_largo'];?>&dato3=brz1_tornillo_alem_largo"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                       
                                        </tr>  
                                             <?php }?>                   
                                    </tbody>
                                </table> 
                                </form>
                                 </div>
                                 
                             </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">BRAZO 2 PASADOR</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>PASADOR</th>
                                            <th>CANTIDAD</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="  SELECT
                                            Count(*) AS cantidad,
                                            acceso.brz2_pasador
                                            FROM
                                            acceso
                                            GROUP BY
                                            acceso.brz2_pasador";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['brz2_pasador'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_acceso.php?dato=<?php echo $querv['brz2_pasador'];?>&dato3=brz2_pasador"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                      
                                        </tr>  
                                             <?php }?>  
                                                        
                                    </tbody>
                                </table> 
                                </form>
                                 </div>
                                 
                             </div>
                        </div>

                        <div class="col-sm-3">
                          <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">BRAZO 2 TORNILLO PASADOR</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                              <form class="form-horizontal form-material" action="reporte.php" method="post">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ESTADO</th>
                                            <th>CANTIDAD</th>                                            
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="  SELECT
                                            Count(*) AS cantidad,
                                            acceso.brz2_tornillo_pasador
                                            FROM
                                            acceso
                                            GROUP BY
                                            acceso.brz2_tornillo_pasador";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['brz2_tornillo_pasador'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_acceso.php?dato=<?php echo $querv['brz2_tornillo_pasador'];?>&dato3=brz2_tornillo_pasador"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                      
                                      </tr>  
                                             <?php }?>  
                                                        
                                    </tbody>
                                </table> 
                                 </div>
                             </div>
                           </div>
                        </div>



                    <div class="row"> 
                        <div class="col-sm-3">
                          <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">BRAZO 2</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                              <form class="form-horizontal form-material" action="reporte.php" method="post">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>BRAZO</th>
                                            <th>CANTIDAD</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="  SELECT
                                            Count(*) AS cantidad,
                                            acceso.brz2_brazo
                                            FROM
                                            acceso
                                            GROUP BY
                                            acceso.brz2_brazo";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['brz2_brazo'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_acceso.php?dato=<?php echo $querv['brz2_brazo'];?>&dato3=brz2_brazo"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                       
                                      </tr>  
                                             <?php }?>  
                                                        
                                    </tbody>
                                </table> 
                                </form>
                                 </div>
                                 
                             </div>
                         </div>

                       <div class="col-sm-3">
                          <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">BRAZO 2 TORNILLO ALEM LARGO</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                              <form class="form-horizontal form-material" action="reporte.php" method="post">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>TORNILLO ALEM LARGO</th>
                                            <th>CANTIDAD</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php

                              $query_val="  SELECT
                                            Count(*) AS cantidad,
                                            acceso.brz2_tornillo_alem_largo
                                            FROM
                                            acceso
                                            GROUP BY
											acceso.brz2_tornillo_alem_largo";
											
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['brz2_tornillo_alem_largo'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_acceso.php?dato=<?php echo $querv['brz2_tornillo_alem_largo'];?>&dato3=brz2_tornillo_alem_largo"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                       
                                      </tr>  
                                             <?php }?>  
                                                        
                                    </tbody>
                                </table> 
                                </form>
                                 </div>
                                 
                             </div>
                         </div>


                       <div class="col-sm-3">
                          <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">BRAZO 3 PASADOR</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                              <form class="form-horizontal form-material" action="reporte.php" method="post">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>PASADOR</th>
                                            <th>CANTIDAD</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="  SELECT
                                            Count(*) AS cantidad,
                                            acceso.brz3_pasador
                                            FROM
                                            acceso
                                            GROUP BY
                                            acceso.brz3_pasador";

                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['brz3_pasador'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_acceso.php?dato=<?php echo $querv['brz3_pasador'];?>&dato3=brz3_pasador"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                       
                                      </tr>  
                                             <?php }?>  
                                                        
                                    </tbody>
                                </table> 
                                </form>
                                 </div>
                             </div>
                         </div>

                       <div class="col-sm-3">
                          <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">BRAZO 3</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>BRAZO</th>
                                            <th>CANTIDAD</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="  SELECT
                                            Count(*) AS cantidad,
                                            acceso.brz3_brazo
                                            FROM
                                            acceso
                                            GROUP BY
                                            acceso.brz3_brazo";

                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['brz3_brazo'];?></td>
											<td class="txt-oflo"><a href="reporte_acceso.php?dato=<?php echo $querv['brz3_brazo'];?>&dato3=brz3_brazo"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                      
                                      </tr>  
                                             <?php }?>  
                                    </tbody>
                                  </table>
                                 </div>
                             </div>
                         </div>

                    </div>
                
                <div class="row">
				<div class="col-sm-3">
                           <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">BRAZO 3 TORNILLO PASADOR</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>TORNILLO PASADOR</th>
                                            <th>CANTIDAD</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="  SELECT
                                            Count(*) AS cantidad,
                                            acceso.brz3_tornillo_pasador
                                            FROM
                                            acceso
                                            GROUP BY
                                            acceso.brz3_tornillo_pasador";

                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['brz3_tornillo_pasador'];?></td>
											 <td class="txt-oflo"><a href="reporte_acceso.php?dato=<?php echo $querv['brz3_tornillo_pasador'];?>&dato3=brz3_tornillo_pasador"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                       
                                      </tr>  
                                             <?php }?>  
                                    </tbody>
                                  </table>
                                 </div>
                             </div>
                         </div>

                        <div class="col-sm-3">
                          <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">BRAZO 3 TORNILLO ALEM LARGO </strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th> TORNILLO ALEM LARGO </th>
                                            <th> CANTIDAD </th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="  SELECT
                                            Count(*) AS cantidad,
                                            acceso.brz3_tornillo_alem_largo
                                            FROM
                                            acceso
                                            GROUP BY
                                            acceso.brz3_tornillo_alem_largo";

                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['brz3_tornillo_alem_largo'];?></td>
											 <td class="txt-oflo"><a href="reporte_acceso.php?dato=<?php echo $querv['brz3_tornillo_alem_largo'];?>&dato3=brz3_tornillo_alem_largo"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                      
                                      </tr>  
                                             <?php }?>  
                                    </tbody>
                                </table> 
                                 </div>
                             </div>
                         </div>

                        <div class="col-sm-3">
                          <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">ESTRUCTURA DE CHASIS</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th> TORNILLO ALEM LARGO </th>
                                            <th> CANTIDAD </th>    

                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="  SELECT
                                            Count(*) AS cantidad,
                                            acceso.estructura_chasis
                                            FROM
                                            acceso
                                            GROUP BY
                                            acceso.estructura_chasis";

                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['estructura_chasis'];?></td>
											 <td class="txt-oflo"><a href="reporte_acceso.php?dato=<?php echo $querv['estructura_chasis'];?>&dato3=estructura_chasis"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                      
                                      </tr>  
                                             <?php }?>
                                    </tbody>
                                </table> 
                                 </div>
                             </div>
                         </div>

                       <div class="col-sm-3">
                          <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">VISAGRAS</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th> ESTADO</th>
                                            <th> CANTIDAD </th>   
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="  SELECT
                                            Count(*) AS cantidad,
                                            acceso.estructura_visagras
                                            FROM
                                            acceso
                                            GROUP BY
                                            acceso.estructura_visagras";

                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['estructura_visagras'];?></td>
											 <td class="txt-oflo"><a href="reporte_acceso.php?dato=<?php echo $querv['estructura_visagras'];?>&dato3=estructura_visagras"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                       
                                      </tr> 
                                             <?php }?>
                                    </tbody>
                                </table> 
                                 </div>
                             </div>
                          </div>
                        </div>

                        <div class="row">
                         <div class="col-sm-3">
                          <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">CHAPA CENTRAL</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th> ESTADO</th>
                                            <th> CANTIDAD </th>   
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="  SELECT
                                            Count(*) AS cantidad,
                                            acceso.chapas_central
                                            FROM
                                            acceso
                                            GROUP BY
                                            acceso.chapas_central";

                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['chapas_central'];?></td>
											 <td class="txt-oflo"><a href="reporte_acceso.php?dato=<?php echo $querv['chapas_central'];?>&dato3=chapas_central"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                      
                                      </tr> 
                                             <?php }?>
                                    </tbody>
                                </table> 
                                 </div>
                             </div>
                          </div>

                        <div class="row">
                         <div class="col-sm-3">
                          <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">CHAPA DERECHA</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th> ESTADO</th>
                                            <th> CANTIDAD </th>   
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="  SELECT
                                            Count(*) AS cantidad,
                                            acceso.chapas_derecha
                                            FROM
                                            acceso
                                            GROUP BY
                                            acceso.chapas_derecha";

                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['chapas_derecha'];?></td>
											<td class="txt-oflo"><a href="reporte_acceso.php?dato=<?php echo $querv['chapas_derecha'];?>&dato3=chapas_derecha"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                       
                                      </tr> 
                                             <?php }?>
                                    </tbody>
                                </table> 
                                 </div>
                             </div>
                          </div>

                         <div class="col-sm-3">
                          <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">CHAPA IZQUIERDA</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th> ESTADO</th>
                                            <th> CANTIDAD </th>   
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="  SELECT
                                            Count(*) AS cantidad,
                                            acceso.chapas_izquierda
                                            FROM
                                            acceso
                                            GROUP BY
                                            acceso.chapas_izquierda";

                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                                 <td class="txt-oflo"><?php echo $querv['chapas_izquierda'];?></td>
											     <td class="txt-oflo"><a href="reporte_acceso.php?dato=<?php echo $querv['chapas_izquierda'];?>&dato3=chapas_izquierda"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                      
                                      </tr> 
                                             <?php }?>
                                    </tbody>
                                </table> 
                                 </div>
                             </div>
                          </div>
                         </div>
                        </div>
                    </div> 
                 </div>
             
            </div>
               <!-- /.modal-->
 
                <!-- fin modal -->
<script type="text/javascript">
        $(document).ready(function () {

            (function ($) {

                $('#filtrar').keyup(function () {

                    var rex = new RegExp($(this).val(), 'i');
                    $('.buscar tr').hide();
                    $('.buscar tr').filter(function () {
                        return rex.test($(this).text());
                    }).show();

                })

            }(jQuery));

        });
      </script>


<?php  

include("foter.php"); ?>