<?php
include("header.php");
include("modelo/conec.php");
 ?>
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
							  group by instalacion_idinstalacion
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">VISUALIZACION GRABACION KL</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                              <form class="form-horizontal form-material" action="reporte.php" method="post">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>VISUALIZACION</th>
                                            <th>CANTIDAD</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="select visualizacion_grabacionkl, count(*) as cantidad from audiovisual group by visualizacion_grabacionkl  
                              ORDER BY `cantidad` ASC";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['visualizacion_grabacionkl'];?>   </td>
                                             <td class="txt-oflo"><a href="reporte_audiovisual.php?dato=<?php echo $querv['visualizacion_grabacionkl'];?>&dato3=visualizacion_grabacionkl"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                       
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">TIPO DE ALMACENAMIENTO</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                              <form class="form-horizontal form-material" action="reporte.php" method="post">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ALMACENAMIENTO</th>
                                            <th>CANTIDAD</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="select tipo_almacenamientokl, count(*) as cantidad from audiovisual group by tipo_almacenamientokl";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['tipo_almacenamientokl'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_audiovisual.php?dato=<?php echo $querv['tipo_almacenamientokl'];?>&dato3=tipo_almacenamientokl"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                     
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">ESTADO KL</strong> </label></h3>
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
                              $query_val="select estado_kl, count(*) as cantidad from audiovisual group by estado_kl";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['estado_kl'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_audiovisual.php?dato=<?php echo $querv['estado_kl'];?>&dato3=estado_kl"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                      
                                        </tr>  
                                             <?php }?>  
                                    </tbody>
                                </table> 
                                </form>
                                 </div>
                        </div>
                </div>
              </div>
                 <div class="col-sm-3">
                        <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">ESTADO DISPLAY</strong> </label></h3>
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
                              $query_val="select estado_display, count(*) as cantidad from audiovisual group by estado_display";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['estado_display'];?>   </td>
                                             <td class="txt-oflo"><a href="reporte_audiovisual.php?dato=<?php echo $querv['estado_display'];?>&dato3=estado_display"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                      
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">TOUCH</strong> </label></h3>
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
                              $query_val="select touch_display, count(*) as cantidad from audiovisual group by touch_display";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['touch_display'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_audiovisual.php?dato=<?php echo $querv['touch_display'];?>&dato3=touch_display"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                      
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">BOTON 1</strong> </label></h3>
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
                              $query_val="select boton_display1, count(*) as cantidad from audiovisual group by boton_display1";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['boton_display1'];?>   </td>
                                             <td class="txt-oflo"><a href="reporte_audiovisual.php?dato=<?php echo $querv['boton_display1'];?>&dato3=boton_display1"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                      
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">BOTON 2</strong> </label></h3>
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
                              $query_val="select boton_display_2, count(*) as cantidad from audiovisual group by boton_display_2";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['boton_display_2'];?>   </td>
                                             <td class="txt-oflo"><a href="reporte_audiovisual.php?dato=<?php echo $querv['boton_display_2'];?>&dato3=boton_display_2"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                      
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">BOTON 3</strong> </label></h3>
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
                              $query_val="select boton_display_3, count(*) as cantidad from audiovisual group by boton_display_3";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['boton_display_3'];?>   </td>
                                             <td class="txt-oflo"><a href="reporte_audiovisual.php?dato=<?php echo $querv['boton_display_3'];?>&dato3=boton_display_3"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                      
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">BOTON 4</strong> </label></h3>
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
                              $query_val="select boton_display_4, count(*) as cantidad from audiovisual group by boton_display_4";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['boton_display_4'];?>   </td>
                                             <td class="txt-oflo"><a href="reporte_audiovisual.php?dato=<?php echo $querv['boton_display_4'];?>&dato3=boton_display_4"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                      
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">TV 1</strong> </label></h3>
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
                              $query_val="select estado_tv1, count(*) as cantidad from audiovisual group by estado_tv1";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['estado_tv1'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_audiovisual.php?dato=<?php echo $querv['estado_tv1'];?>&dato3=estado_tv1"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                       
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">CODIGO GAMLP</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                              <form class="form-horizontal form-material" action="reporte.php" method="post">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>CODIGO GAMLP</th>
                                            <th>CANTIDAD</th>                                            
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="select cod_gamlptv1, count(*) as cantidad from audiovisual group by cod_gamlptv1";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['cod_gamlptv1'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_audiovisual.php?dato=<?php echo $querv['cod_gamlptv1'];?>&dato3=cod_gamlptv1"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                      
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">TIPO CONECTOR VIDEO TV1</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                              <form class="form-horizontal form-material" action="reporte.php" method="post">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>CONECTOR</th>
                                            <th>CANTIDAD</th>                                            
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="select tipo_conectortv1, count(*) as cantidad from audiovisual group by tipo_conectortv1";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['tipo_conectortv1'];?>   </td>
                                             <td class="txt-oflo"><a href="reporte_audiovisual.php?dato=<?php echo $querv['tipo_conectortv1'];?>&dato3=tipo_conectortv1"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                      
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">ESTADO CONECTOR TV1</strong> </label></h3>
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
                              $query_val="select estado_conectortv1, count(*) as cantidad from audiovisual group by estado_conectortv1";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['estado_conectortv1'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_audiovisual.php?dato=<?php echo $querv['estado_conectortv1'];?>&dato3=estado_conectortv1"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                      
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">CONECTOR RCA TV1</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                              <form class="form-horizontal form-material" action="reporte.php" method="post">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>CONECTOR</th>
                                            <th>CANTIDAD</th>                                            
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="select conector_rcatv1, count(*) as cantidad from audiovisual group by conector_rcatv1";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['conector_rcatv1'];?>   </td>
                                             <td class="txt-oflo"><a href="reporte_audiovisual.php?dato=<?php echo $querv['conector_rcatv1'];?>&dato3=conector_rcatv1"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                      
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">TV 2</strong> </label></h3>
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
                              $query_val="select estado_tv2, count(*) as cantidad from audiovisual group by estado_tv2";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['estado_tv2'];?>   </td>
                                             <td class="txt-oflo"><a href="reporte_audiovisual.php?dato=<?php echo $querv['estado_tv2'];?>&dato3=estado_tv2"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                       
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">CODIGO GAMLP</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                              <form class="form-horizontal form-material" action="reporte.php" method="post">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>CODIGO GAMLP</th>
                                            <th>CANTIDAD</th>                                            
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="select cod_gamlptv2, count(*) as cantidad from audiovisual group by cod_gamlptv2";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['cod_gamlptv2'];?>   </td>
                                             <td class="txt-oflo"><a href="reporte_audiovisual.php?dato=<?php echo $querv['cod_gamlptv2'];?>&dato3=cod_gamlptv2"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                      
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">TIPO CONECTOR VIDEO TV2</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                              <form class="form-horizontal form-material" action="reporte.php" method="post">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>CONECTOR</th>
                                            <th>CANTIDAD</th>                                            
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="select tipo_conectortv2, count(*) as cantidad from audiovisual group by tipo_conectortv2";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['tipo_conectortv2'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_audiovisual.php?dato=<?php echo $querv['tipo_conectortv2'];?>&dato3=tipo_conectortv2"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                      
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">ESTADO CONECTOR TV2</strong> </label></h3>
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
                              $query_val="select estado_conectortv2, count(*) as cantidad from audiovisual group by estado_conectortv2";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['estado_conectortv2'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_audiovisual.php?dato=<?php echo $querv['estado_conectortv2'];?>&dato3=estado_conectortv2"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                      
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">CONECTOR RCA TV2</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                              <form class="form-horizontal form-material" action="reporte.php" method="post">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>CONECTOR</th>
                                            <th>CANTIDAD</th>                                            
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="select conector_rcatv2, count(*) as cantidad from audiovisual group by conector_rcatv2";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['conector_rcatv2'];?>   </td>
                                             <td class="txt-oflo"><a href="reporte_audiovisual.php?dato=<?php echo $querv['conector_rcatv2'];?>&dato3=conector_rcatv2"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                       
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">MIC CONDUCTOR</strong> </label></h3>
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
                              $query_val="select mic_conductor, count(*) as cantidad from audiovisual group by mic_conductor";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['mic_conductor'];?>   </td>
                                             <td class="txt-oflo"><a href="reporte_audiovisual.php?dato=<?php echo $querv['mic_conductor'];?>&dato3=mic_conductor"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                      
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger"> BRAZO MIC. CONDUCTOR</strong> </label></h3>
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
                              $query_val="select brazo_mic, count(*) as cantidad from audiovisual group by brazo_mic";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['brazo_mic'];?>   </td>
                                             <td class="txt-oflo"><a href="reporte_audiovisual.php?dato=<?php echo $querv['brazo_mic'];?>&dato3=brazo_mic"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                     
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">MIC. ANFITRION</strong> </label></h3>
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
                              $query_val="select mic_anfitrion, count(*) as cantidad from audiovisual group by mic_anfitrion";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['mic_anfitrion'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_audiovisual.php?dato=<?php echo $querv['mic_anfitrion'];?>&dato3=mic_anfitrion"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                       
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">CABLE USB</strong> </label></h3>
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
                              $query_val="select cable_usb, count(*) as cantidad from audiovisual group by cable_usb";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['cable_usb'];?>   </td>
                                             <td class="txt-oflo"><a href="reporte_audiovisual.php?dato=<?php echo $querv['cable_usb'];?>&dato3=cable_usb"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                      
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