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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">GABINETE DEL DVR</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>GABINETE</th>
                                            <th>CANTIDAD</th>    
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="  SELECT
                                            Count(*) AS cantidad,
                                            seguridad.dvr_gabinete
                                            FROM
                                            seguridad
                                            GROUP BY
                                            seguridad.dvr_gabinete";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['dvr_gabinete'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_seguridad.php?dato=<?php echo $querv['dvr_gabinete'];?>&dato3=dvr_gabinete"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                    
                                        </tr>  
                                             <?php }?>                      
                                    </tbody>
                                </table> 
                             </div>    
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">DVR</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
							<table class="table">
								<thead>
									<tr>
										<th>EXISTENCIA</th>
										<th>CANTIDAD</th>
									</tr>
								</thead>
								<tbody>
							   <?php
						  $query_val="  SELECT
                                        Count(*) AS cantidad,
                                        seguridad.dvr
                                        FROM
                                        seguridad
                                        GROUP BY
                                        seguridad.dvr"; 

						  $query_va=mysql_query($query_val);                          
						  while($querv = mysql_fetch_assoc($query_va))
						  {
						?>        <tr>                                                                     
										 <td class="txt-oflo"><?php echo $querv['dvr'];?>   </td>
										 <td class="txt-oflo"><a href="reporte_seguridad.php?dato=<?php echo $querv['dvr'];?>&dato3=dvr"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                      
									</tr>  
										 <?php }?>  	   
								</tbody>
							</table> 
                                 </div>  
                        </div>
                    </div>

                      <div class="col-sm-3">
                        <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">EXISTENCIA DE MODULOS DEL DVR</strong> </label></h3>
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
                                            seguridad.dvr_existencia
                                            FROM
                                            seguridad
                                            GROUP BY
                                            seguridad.dvr_existencia";

                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['dvr_existencia'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_seguridad.php?dato=<?php echo $querv['dvr_existencia'];?>&dato3=dvr_existencia"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                      
                                        </tr>  
                                             <?php }?>          
                                    </tbody>
                                </table> 
                            </div>
                        </div>
                    </div>
                        <div class="col-sm-3">
                        <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">FUNCIÓN DE GRABACIÓN</strong> </label></h3>
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
                                            seguridad.funcion_grabacion
                                            FROM
                                            seguridad
                                            GROUP BY
                                            seguridad.funcion_grabacion";

                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>          <tr>                                            
                                             <td class="txt-oflo"><?php echo $querv['funcion_grabacion'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_seguridad.php?dato=<?php echo $querv['funcion_grabacion'];?>&dato3=funcion_grabacion"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                       
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">ALMACENAMIENTO</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ALMACENAMIENTO</th>
                                            <th>CANTIDAD</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="  SELECT
                                            Count(*) AS cantidad,
                                            seguridad.Almacenamiento
                                            FROM
                                            seguridad
                                            GROUP BY
                                            seguridad.Almacenamiento";
                                            
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['Almacenamiento'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_seguridad.php?dato=<?php echo $querv['Almacenamiento'];?>&dato3=Almacenamiento"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                     
                                        </tr>  
                                             <?php }?>  
                                                        
                                    </tbody>
                                </table> 
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">CAPACIDAD</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>CAPACIDAD</th>
                                            <th>CANTIDAD</th>                                               
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="  SELECT
											Count(*) AS cantidad,
											seguridad.Capacidad
											FROM
											seguridad
											GROUP BY
											seguridad.Capacidad";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['Capacidad'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_seguridad.php?dato=<?php echo $querv['Capacidad'];?>&dato3=Capacidad"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                       
                                        </tr>  
                                             <?php }?>                 
                                    </tbody>
                                </table> 
                             </div>     
                        </div>
                    </div>            
                     <div class="col-sm-3">
                        <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">NÚMERO DE TORNILLOS RACK HDD</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>TORNILLOS</th>
                                            <th>CANTIDAD</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="  SELECT
											Count(*) AS cantidad,
											seguridad.tornillos_rac_hdd
											FROM
											seguridad
											GROUP BY
											seguridad.tornillos_rac_hdd";

                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['tornillos_rac_hdd'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_seguridad.php?dato=<?php echo $querv['tornillos_rac_hdd'];?>&dato3=tornillos_rac_hdd"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                     
                                        </tr>  
                                             <?php }?>                
                                    </tbody>
                                </table> 
                            </div>                                 
                        </div>
                    </div>  
                    <div class="col-sm-3">
                        <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">ADAPTADOR RCA</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ADAPTADOR</th>
                                            <th>CANTIDAD</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="  SELECT
											Count(*) AS cantidad,
											seguridad.adaptador_rca
											FROM
											seguridad
											GROUP BY
											seguridad.adaptador_rca";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['adaptador_rca'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_seguridad.php?dato=<?php echo $querv['adaptador_rca'];?>&dato3=adaptador_rca"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                     
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">λ 1</strong> </label></h3>
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
											seguridad.lambda1
											FROM
											seguridad
											GROUP BY
											seguridad.lambda1";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['lambda1'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_seguridad.php?dato=<?php echo $querv['lambda1'];?>&dato3=lambda1"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                     
                                        </tr>  
                                             <?php }?>               
                                    </tbody>
                                </table> 
                            </div>                     
                        </div>
                    </div> 
                     <div class="col-sm-3">
                        <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">λ 2</strong> </label></h3>
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
											seguridad.lambda2
											FROM
											seguridad
											GROUP BY
											seguridad.lambda2";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['lambda2'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_seguridad.php?dato=<?php echo $querv['lambda2'];?>&dato3=lambda2"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                     
                                        </tr>  
                                             <?php }?>  
                                    </tbody>
                                </table> 
                            </div>     
                        </div>
                    </div> 

                      <div class="col-sm-3">
                        <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">λ 3</strong> </label></h3>
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
											seguridad.lambda3
											FROM
											seguridad
											GROUP BY
											seguridad.lambda3";

                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['lambda3'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_seguridad.php?dato=<?php echo $querv['lambda3'];?>&dato3=lambda3"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                     
                                        </tr>  
                                             <?php }?>  
                                                        
                                    </tbody>
                                </table> 
                            </div> 
                        </div>
                    </div> 

                    <div class="col-sm-3">
                        <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">λ 4</strong> </label></h3>
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
											seguridad.lambda4
											FROM
											seguridad
											GROUP BY
											seguridad.lambda4";

                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['lambda4'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_seguridad.php?dato=<?php echo $querv['lambda4'];?>&dato3=lambda4"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                    
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">OUT 1</strong> </label></h3>
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
											seguridad.out1
											FROM
											seguridad
											GROUP BY
											seguridad.out1";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['out1'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_seguridad.php?dato=<?php echo $querv['out1'];?>&dato3=out1"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                   
                                        </tr>  
                                             <?php }?>  
                                                        
                                    </tbody>
                                </table> 
                             </div>
                           </div>
                        </div>

                        <div class="col-sm-3">
                          <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">OUT 2</strong> </label></h3>
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
											seguridad.out2
											FROM
											seguridad
											GROUP BY
											seguridad.out2";

                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['out2'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_seguridad.php?dato=<?php echo $querv['out2'];?>&dato3=out2"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                      
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">OUT 3</strong> </label></h3>
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
											seguridad.out3
											FROM
											seguridad
											GROUP BY
											seguridad.out3";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['out3'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_seguridad.php?dato=<?php echo $querv['out3'];?>&dato3=out3"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                    
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">OUT 4</strong> </label></h3>
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
											seguridad.out4
											FROM
											seguridad
											GROUP BY
											seguridad.out4";

                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['out4'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_seguridad.php?dato=<?php echo $querv['out4'];?>&dato3=out4"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                       
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">MEZCLADOR DE VIDEO</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                              <form class="form-horizontal form-material" action="reporte.php" method="post">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>MEZCLADOR</th>
                                            <th>CANTIDAD</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="  SELECT
                                            Count(*) AS cantidad,
                                            seguridad.kl_mesclaor_video
                                            FROM
                                            seguridad
                                            GROUP BY
                                            seguridad.kl_mesclaor_video";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['kl_mesclaor_video'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_seguridad.php?dato=<?php echo $querv['kl_mesclaor_video'];?>&dato3=kl_mesclaor_video"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                     
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">OUT 1 DEL KL</strong> </label></h3>
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
                                            seguridad.kl_out1
                                            FROM
                                            seguridad
                                            GROUP BY
                                            seguridad.kl_out1";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['kl_out1'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_seguridad.php?dato=<?php echo $querv['kl_out1'];?>&dato3=kl_out1"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                     
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">OUT 2 DEL KL</strong> </label></h3>
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
                                            seguridad.kl_out2
                                            FROM
                                            seguridad
                                            GROUP BY
                                            seguridad.kl_out2";

                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['kl_out2'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_seguridad.php?dato=<?php echo $querv['kl_out2'];?>&dato3=kl_out2"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                     
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">OUT 3 DEL KL</strong> </label></h3>
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
                                            seguridad.kl_out3
                                            FROM
                                            seguridad
                                            GROUP BY
                                            seguridad.kl_out3";

                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['kl_out3'];?></td>
											 <td class="txt-oflo"><a href="reporte_seguridad.php?dato=<?php echo $querv['kl_out3'];?>&dato3=kl_out3"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                      
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">OUT 4 DEL KL</strong> </label></h3>
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
                                            seguridad.kl_out4
                                            FROM
                                            seguridad
                                            GROUP BY
                                            seguridad.kl_out4";

                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['kl_out4'];?></td>
											 <td class="txt-oflo"><a href="reporte_seguridad.php?dato=<?php echo $querv['kl_out4'];?>&dato3=kl_out4"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                     
                                      </tr>  
                                             <?php }?>  
                                    </tbody>
                                   </table> 
                                 </div>
                             </div>
                         </div>

                        <div class="col-sm-3">
                          <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">CAMARA FRONTAL</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th> CAMARA FRONTAL </th>
                                            <th> CANTIDAD </th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="  SELECT
                                            Count(*) AS cantidad,
                                            seguridad.cam_com_front
                                            FROM
                                            seguridad
                                            GROUP BY
                                            seguridad.cam_com_front";

                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['cam_com_front'];?></td>
											 <td class="txt-oflo"><a href="reporte_seguridad.php?dato=<?php echo $querv['cam_com_front'];?>&dato3=cam_com_front"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                      
                                      </tr>  
                                             <?php }?>  
                                    </tbody>
                                </table> 
                                 </div>
                             </div>
                         </div>

                        <div class="col-sm-3">
                          <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">CAMARA DE CONDUCTOR</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th> CAMARA DE CONDUCTOR </th>
                                            <th> CANTIDAD </th>    

                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="  SELECT
                                            Count(*) AS cantidad,
                                            seguridad.cam_com_cond
                                            FROM
                                            seguridad
                                            GROUP BY
                                            seguridad.cam_com_cond";

                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['cam_com_cond'];?></td>
											 <td class="txt-oflo"><a href="reporte_seguridad.php?dato=<?php echo $querv['cam_com_cond'];?>&dato3=cam_com_cond"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                      
                                      </tr>  
                                             <?php }?>
                                    </tbody>
                                </table> 
                                 </div>
                             </div>
                         </div>

                       <div class="col-sm-3">
                          <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">CAMARA DEL VALIDADOR</strong> </label></h3>
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
                                            seguridad.cam_val
                                            FROM
                                            seguridad
                                            GROUP BY
                                            seguridad.cam_val";

                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['cam_val'];?></td>
											 <td class="txt-oflo"><a href="reporte_seguridad.php?dato=<?php echo $querv['cam_val'];?>&dato3=cam_val"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                   
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">CAMARA DE LA PUERTA DE SALIDA</strong> </label></h3>
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
                                            seguridad.cam_puerta_sal
                                            FROM
                                            seguridad
                                            GROUP BY
                                            seguridad.cam_puerta_sal";

                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['cam_puerta_sal'];?></td>
											 <td class="txt-oflo"><a href="reporte_seguridad.php?dato=<?php echo $querv['cam_puerta_sal'];?>&dato3=cam_puerta_sal"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                     
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">CAMARA TRASERA</strong> </label></h3>
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
                                            seguridad.cam_retro
                                            FROM
                                            seguridad
                                            GROUP BY
                                            seguridad.cam_retro";

                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['cam_retro'];?></td>
											 <td class="txt-oflo"><a href="reporte_seguridad.php?dato=<?php echo $querv['cam_retro'];?>&dato3=cam_retro"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                     
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