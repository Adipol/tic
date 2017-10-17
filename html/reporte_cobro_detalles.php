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
                              <form class="form-horizontal form-material" action="reporte.php" method="post">
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
                                        WHERE fecha IN (SELECT MAX(c.fecha) 
                                                        FROM cobro c
                                                        GROUP BY c.bus_idbus)
                        							  GROUP BY instalacion_idinstalacion
                        							  ORDER BY `cantidad` ASC";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['nombre_instalacion'];?>   </td>
                                             <td class="txt-oflo"><span  ><strong><?php echo $querv['cantidad'];?></strong></span></td>                       
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">VALIDADORES</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                              <form class="form-horizontal form-material" action="reporte.php" method="post">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>TABLET</th>
                                            <th>CANTIDAD</th>
                                            
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="SELECT modelo_tablet, count(*) as cantidad 
                                          FROM cobro 
                                          WHERE fecha IN (SELECT MAX(c.fecha) 
                                                          FROM cobro c
                                                          GROUP BY c.bus_idbus)
                                          GROUP BY modelo_tablet  
                                          ORDER BY `cantidad` ASC";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['modelo_tablet'];?>   </td>
                                             <td class="txt-oflo"><a href="reporte_cobro.php?dato=<?php echo $querv['modelo_tablet'];?>&dato3=modelo_tablet"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                       
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">ESTADO OPERATIVO DE VALIDADOR</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                              <form class="form-horizontal form-material" action="reporte.php" method="post">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>VALIDADOR</th>
                                            <th>CANTIDAD</th>
                                            
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="SELECT estado_operativo, count(*) as cantidad 
                                          FROM cobro 
                                          WHERE fecha IN (SELECT MAX(c.fecha) 
                                                          FROM cobro c
                                                          GROUP BY c.bus_idbus)
                                          group by estado_operativo";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['estado_operativo'];?>   </td>
                                             <td class="txt-oflo"><a href="reporte_cobro.php?dato=<?php echo $querv['estado_operativo'];?>&dato3=estado_operativo"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                       
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">DESCRIPCION DE FALLO PENDIENTE</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                              <form class="form-horizontal form-material" action="reporte.php" method="post">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>FALLA 1</th>
                                            <th>CANTIDAD</th>
                                            
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="SELECT descripcion_fallo_1, count(*) as cantidad 
                                          FROM cobro 
                                          WHERE fecha IN (SELECT MAX(c.fecha) 
                                                          FROM cobro c
                                                          GROUP BY c.bus_idbus)
                                          group by descripcion_fallo_1 ";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['descripcion_fallo_1'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_cobro.php?dato=<?php echo $querv['descripcion_fallo_1'];?>&dato3=descripcion_fallo_1"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                       
                                        </tr>  
                                             <?php }?>  
                                                        
                                    </tbody>
                                </table> 
                                </form>
                                 </div>
                                 
                        </div>
                    </div>

                      
                       
                </div>
                 <div class="row">
                     <div class="col-sm-3">
                        <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">GAMLP</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                              <form class="form-horizontal form-material" action="reporte.php" method="post">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>GODIGO GAMLP</th>
                                            <th>CANTIDAD</th>                                            
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="SELECT codigo_gamlp, count(*) as cantidad 
                                          FROM cobro 
                                          WHERE fecha IN (SELECT MAX(c.fecha) 
                                                          FROM cobro c
                                                          GROUP BY c.bus_idbus)
                                          group by codigo_gamlp";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['codigo_gamlp'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_cobro.php?dato=<?php echo $querv['codigo_gamlp'];?>&dato3=codigo_gamlp"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                       
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">CODIGO MFS</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                              <form class="form-horizontal form-material" action="reporte.php" method="post">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>GODIGO MFS</th>
                                            <th>CANTIDAD</th>                                            
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="SELECT codigo_mfs, count(*) as cantidad 
                                          FROM cobro 
                                          WHERE fecha IN (SELECT MAX(c.fecha) 
                                                          FROM cobro c
                                                          GROUP BY c.bus_idbus)
                                          group by codigo_mfs";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['codigo_mfs'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_cobro.php?dato=<?php echo $querv['codigo_mfs'];?>&dato3=codigo_mfs"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                       
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">INTERFAZ</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                              <form class="form-horizontal form-material" action="reporte.php" method="post">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>INTERFAZ</th>
                                            <th>CANTIDAD</th>                                            
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="SELECT interfaz, count(*) as cantidad 
                                          FROM cobro 
                                          WHERE fecha IN (SELECT MAX(c.fecha) 
                                                          FROM cobro c
                                                          GROUP BY c.bus_idbus)
                                          group by interfaz";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['interfaz'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_cobro.php?dato=<?php echo $querv['interfaz'];?>&dato3=interfaz"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                       
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">CONECTORES DB9</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                              <form class="form-horizontal form-material" action="reporte.php" method="post">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ESTADO DB9</th>
                                            <th>CANTIDAD</th>                                            
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="SELECT conector_db9, count(*) as cantidad 
                                          FROM cobro 
                                          WHERE fecha IN (SELECT MAX(c.fecha) 
                                                          FROM cobro c
                                                          GROUP BY c.bus_idbus)
                                          group by conector_db9";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['conector_db9'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_cobro.php?dato=<?php echo $querv['conector_db9'];?>&dato3=conector_db9"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                       
                                        </tr>  
                                             <?php }?>  
                                                        
                                    </tbody>
                                </table> 
                                </form>
                                 </div>
                                 
                        </div>
                    </div> 

                </div>
                <div class="row">
                 <div class="col-sm-3">
                        <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">UBICACION DEL CABLE DE COMUNICACION</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                              <form class="form-horizontal form-material" action="reporte.php" method="post">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>UBICACION</th>
                                            <th>CANTIDAD</th>                                            
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="SELECT ubicacion_cable_comunicacion, count(*) as cantidad 
                                          FROM cobro 
                                          WHERE fecha IN (SELECT MAX(c.fecha) 
                                                          FROM cobro c
                                                          GROUP BY c.bus_idbus)
                                          group by ubicacion_cable_comunicacion";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['ubicacion_cable_comunicacion'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_cobro.php?dato=<?php echo $querv['ubicacion_cable_comunicacion'];?>&dato3=ubicacion_cable_comunicacion"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                       
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">HUB</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                              <form class="form-horizontal form-material" action="reporte.php" method="post">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>UBICACION</th>
                                            <th>CANTIDAD</th>                                            
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="SELECT tipo_hub, count(*) as cantidad 
                                          FROM cobro 
                                          WHERE fecha IN (SELECT MAX(c.fecha) 
                                                          FROM cobro c
                                                          GROUP BY c.bus_idbus)
                                          group by tipo_hub";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['tipo_hub'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_acceso.php?dato=<?php echo $querv['tipo_hub'];?>&dato3=tipo_hub"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                       
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">ESTADO DE HUB</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                              <form class="form-horizontal form-material" action="reporte.php" method="post">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>HUB</th>
                                            <th>CANTIDAD</th>                                            
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="SELECT condicion_hub, count(*) as cantidad 
                                          FROM cobro 
                                          WHERE fecha IN (SELECT MAX(c.fecha) 
                                                          FROM cobro c
                                                          GROUP BY c.bus_idbus)
                                          group by condicion_hub";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['condicion_hub'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_cobro.php?dato=<?php echo $querv['condicion_hub'];?>&dato3=condicion_hub"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                       
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">TRANSMICION HUB - TABLET</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                              <form class="form-horizontal form-material" action="reporte.php" method="post">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>TRANSMICION</th>
                                            <th>CANTIDAD</th>                                            
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="SELECT tipo_conexion_hub, count(*) as cantidad 
                                          FROM cobro 
                                          WHERE fecha IN (SELECT MAX(c.fecha) 
                                                          FROM cobro c
                                                          GROUP BY c.bus_idbus)
                                          group by tipo_conexion_hub";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['tipo_conexion_hub'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_cobro.php?dato=<?php echo $querv['tipo_conexion_hub'];?>&dato3=tipo_conexion_hub"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                       
                                        </tr>  
                                             <?php }?>  
                                                        
                                    </tbody>
                                </table> 
                                </form>
                                 </div>
                                 
                        </div>
                    </div> 
                </div>
                 <div class="row">
                  <div class="col-sm-3">
                        <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">ESTADO DE CONEXION HUB - TABLET</strong> </label></h3>
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
                              $query_val="SELECT estado_conexion_hub, count(*) as cantidad 
                                          FROM cobro 
                                          WHERE fecha IN (SELECT MAX(c.fecha) 
                                                          FROM cobro c
                                                          GROUP BY c.bus_idbus)
                                          group by estado_conexion_hub";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['estado_conexion_hub'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_cobro.php?dato=<?php echo $querv['estado_conexion_hub'];?>&dato3=estado_conexion_hub"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                       
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">CARGADOR DE ENERGIA VALIDADOR</strong> </label></h3>
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
                              $query_val="SELECT estado_cargador, count(*) as cantidad 
                                          FROM cobro 
                                          WHERE fecha IN (SELECT MAX(c.fecha) 
                                                          FROM cobro c
                                                          GROUP BY c.bus_idbus)
                                          group by estado_cargador";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['estado_cargador'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_cobro.php?dato=<?php echo $querv['estado_cargador'];?>&dato3=estado_cargador"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                       
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">VSAM</strong> </label></h3>
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
                              $query_val="SELECT estado_tarjeta_inteligente, count(*) as cantidad 
                                          FROM cobro 
                                          WHERE fecha IN (SELECT MAX(c.fecha) 
                                                          FROM cobro c
                                                          GROUP BY c.bus_idbus)
                                          group by estado_tarjeta_inteligente";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['estado_tarjeta_inteligente'];?>   </td>
                                             <td class="txt-oflo"><a href="reporte_cobro.php?dato=<?php echo $querv['estado_tarjeta_inteligente'];?>&dato3=estado_tarjeta_inteligente"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                       
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">ESTADO VSAM</strong> </label></h3>
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
                              $query_val="SELECT estado_vsam, count(*) as cantidad 
                                          FROM cobro 
                                          WHERE fecha IN (SELECT MAX(c.fecha) 
                                                          FROM cobro c
                                                          GROUP BY c.bus_idbus)
                                          group by estado_vsam";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['estado_vsam'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_cobro.php?dato=<?php echo $querv['estado_vsam'];?>&dato3=estado_vsam"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                       
                                      </tr>  
                                             <?php }?>  
                                                        
                                    </tbody>
                                </table> 
                                </form>
                                 </div>
                                 
                             </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-sm-3">
                          <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">TORNILLOS ALEM VALIDADOR</strong> </label></h3>
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
                              $query_val="SELECT tornillos_tapa_validador, count(*) as cantidad 
                                          FROM cobro
                                          WHERE fecha IN (SELECT MAX(c.fecha) 
                                                          FROM cobro c
                                                          GROUP BY c.bus_idbus) 
                                          group by tornillos_tapa_validador";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['tornillos_tapa_validador'];?>   </td>
                                             <td class="txt-oflo"><a href="reporte_cobro.php?dato=<?php echo $querv['tornillos_tapa_validador'];?>&dato3=tornillos_tapa_validador"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                       
                                      </tr>  
                                             <?php }?>  
                                                        
                                    </tbody>
                                </table> 
                                </form>
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