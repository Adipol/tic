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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">UBICACIÓN DE GPS</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>UBICACIÓN</th>
                                            <th>CANTIDAD</th>    
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php

                              $query_val="  SELECT
                                            Count(*) AS cantidad,
                                            geolocalizacion.ubicacion
                                            FROM
                                            geolocalizacion
                                            GROUP BY
                                            geolocalizacion.ubicacion";

                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['ubicacion'];?>   </td>
                                             <td class="txt-oflo"><a href="reporte_geo.php?dato=<?php echo $querv['ubicacion'];?>&dato3=ubicacion"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                      
									    </tr>  
                                             <?php }?>                      
                                    </tbody>
                                </table> 
                             </div>    
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">CODIGO GAMLP</strong> </label></h3>
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
                                        geolocalizacion.codigo_gamlp
                                        FROM
                                        geolocalizacion
                                        GROUP BY
                                        geolocalizacion.codigo_gamlp";

						  $query_va=mysql_query($query_val);                          
						  while($querv = mysql_fetch_assoc($query_va))
						  {
						?>        <tr>                                                                     
										 <td class="txt-oflo"><?php echo $querv['codigo_gamlp'];?></td>
										 <td class="txt-oflo"><a href="reporte_geo.php?dato=<?php echo $querv['codigo_gamlp'];?>&dato3=codigo_gamlp"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                        
									</tr>  
										 <?php }?>  
												   
								</tbody>
							</table> 
                                 </div>  
                        </div>
                    </div>

                      <div class="col-sm-3">
                        <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">SIM CARD</strong> </label></h3>
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
                                            geolocalizacion.sim_card
                                            FROM
                                            geolocalizacion
                                            GROUP BY
                                            geolocalizacion.sim_card";

                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['sim_card'];?>   </td>
                                              <td class="txt-oflo"><a href="reporte_geo.php?dato=<?php echo $querv['sim_card'];?>&dato3=sim_card"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                       
                                        </tr>  
                                             <?php }?>          
                                    </tbody>
                                </table> 
                            </div>
                        </div>
                    </div>
                        <div class="col-sm-3">
                        <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">GSM</strong> </label></h3>
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
                                            geolocalizacion.gsm
                                            FROM
                                            geolocalizacion
                                            GROUP BY
                                            geolocalizacion.gsm";

                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['gsm'];?>   </td>
                                             <td class="txt-oflo"><a href="reporte_geo.php?dato=<?php echo $querv['gsm'];?>&dato3=gsm"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                         
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">GPS</strong> </label></h3>
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
                                            geolocalizacion.gps
                                            FROM
                                            geolocalizacion
                                            GROUP BY
                                            geolocalizacion.gps";
                                            
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['gps'];?>   </td>
                                             <td class="txt-oflo"><a href="reporte_geo.php?dato=<?php echo $querv['gps'];?>&dato3=gps"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                         
                                        </tr>  
                                             <?php }?> 
                                    </tbody>
                                </table> 
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">HANDSET</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>HANDSET</th>
                                            <th>CANTIDAD</th>                                            
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="  SELECT
                                            Count(*) AS cantidad,
                                            geolocalizacion.handset
                                            FROM
                                            geolocalizacion
                                            GROUP BY
                                            geolocalizacion.handset";

                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['handset'];?>   </td>
                                             <td class="txt-oflo"><a href="reporte_geo.php?dato=<?php echo $querv['handset'];?>&dato3=handset"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                         
                                        </tr>  
                                             <?php }?>                 
                                    </tbody>
                                </table> 
                             </div>     
                        </div>
                    </div>            
                     <div class="col-sm-3">
                        <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">ESTADO DE HANDSET</strong> </label></h3>
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
                                            geolocalizacion.estado_handset
                                            FROM
                                            geolocalizacion
                                            GROUP BY
                                            geolocalizacion.estado_handset";

                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['estado_handset'];?>   </td>
                                             <td class="txt-oflo"><a href="reporte_geo.php?dato=<?php echo $querv['estado_handset'];?>&dato3=estado_handset"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                        
                                        </tr>  
                                             <?php }?>                
                                    </tbody>
                                </table> 
                            </div>                                 
                        </div>
                    </div>  
                    <div class="col-sm-3">
                        <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">CONECTOR GPS HANDSET</strong> </label></h3>
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
                                            geolocalizacion.conector_gps
                                            FROM
                                            geolocalizacion
                                            GROUP BY
                                            geolocalizacion.conector_gps";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['conector_gps'];?>   </td>
                                             <td class="txt-oflo"><a href="reporte_geo.php?dato=<?php echo $querv['conector_gps'];?>&dato3=conector_gps"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                         
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">DISPLAY HANDSET</strong> </label></h3>
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
                                            geolocalizacion.display_handset
                                            FROM
                                            geolocalizacion
                                            GROUP BY
                                            geolocalizacion.display_handset";

                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['display_handset'];?>   </td>
                                             <td class="txt-oflo"><a href="reporte_geo.php?dato=<?php echo $querv['ubicacion'];?>&dato3=display_handset"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                         
                                        </tr>  
                                             <?php }?>               
                                    </tbody>
                                </table> 
                            </div>                     
                        </div>
                    </div> 

                     <div class="col-sm-3">
                        <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">BOTONES DE HANDSET</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>BOTONES</th>
                                            <th>CANTIDAD</th>                               
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="  SELECT
                                            Count(*) AS cantidad,
                                            geolocalizacion.botones_handset
                                            FROM
                                            geolocalizacion
                                            GROUP BY
                                            geolocalizacion.botones_handset";

                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['botones_handset'];?>   </td>
                                             <td class="txt-oflo"><a href="reporte_geo.php?dato=<?php echo $querv['botones_handset'];?>&dato3=botones_handset"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                         
                                        </tr>  
                                             <?php }?>  
                                    </tbody>
                                </table> 
                            </div>     
                        </div>
                    </div> 

                      <div class="col-sm-3">
                        <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">CARCASA DE HANDSET</strong> </label></h3>
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
                                            geolocalizacion.carcasa_handset
                                            FROM
                                            geolocalizacion
                                            GROUP BY
                                            geolocalizacion.carcasa_handset";

                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['carcasa_handset'];?>   </td>
                                             <td class="txt-oflo"><a href="reporte_geo.php?dato=<?php echo $querv['carcasa_handset'];?>&dato3=carcasa_handset"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                        
                                        </tr>  
                                             <?php }?>  
                                                        
                                    </tbody>
                                </table> 
                            </div> 
                        </div>
                    </div> 

                    <div class="col-sm-3">
                        <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">PORTA HANDSET</strong> </label></h3>
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
                                            geolocalizacion.porta_handset
                                            FROM
                                            geolocalizacion
                                            GROUP BY
                                            geolocalizacion.porta_handset";

                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['porta_handset'];?>   </td>
                                             <td class="txt-oflo"><a href="reporte_geo.php?dato=<?php echo $querv['porta_handset'];?>&dato3=porta_handset"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                         
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">VISUALIZACIÓN SISTEMA GPS</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>VIZUALIZACIÓN</th>
                                            <th>CANTIDAD</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="  SELECT
                                            Count(*) AS cantidad,
                                            geolocalizacion.visualizacion_sistema_gps
                                            FROM
                                            geolocalizacion
                                            GROUP BY
                                            geolocalizacion.visualizacion_sistema_gps";

                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['visualizacion_sistema_gps'];?>   </td>
                                             <td class="txt-oflo"><a href="reporte_geo.php?dato=<?php echo $querv['visualizacion_sistema_gps'];?>&dato3=visualizacion_sistema_gps"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                         
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
            <!-- /.container-fluid -->
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