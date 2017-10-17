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
                  
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
 
                <div class="row">
                    <div class="col-sm-4">
                        <div class="white-box">                         
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">SISTEMA DE COBRO</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >

                              <form class="form-horizontal form-material" action="reporte_cobro_detalles.php" method="post">

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ESTADO DEL VALIDADORES</th>
                                            <th>CANTIDAD</th>
                                            
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
				                              $query_val="SELECT estado_operativo, count(*) as cantidad 
                                                  FROM cobro 
                                                  WHERE fecha IN (SELECT MAX(fecha) 
                                                  FROM cobro 
                                                  GROUP BY bus_idbus) 
                                                  GROUP BY estado_operativo";
				                              $query_va=mysql_query($query_val);                          
				                              while($querv = mysql_fetch_assoc($query_va))
				                              {
				                                ?>      
				                              <tr>  
				                                                                                                 
                                             <td class="txt-oflo"><?php echo $querv['estado_operativo'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_cobro.php?dato=<?php echo $querv['estado_operativo'];?>&dato3=estado_operativo"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                       
                                        	</tr>

                                             <?php }?>  
                                        <tr>                                                                     
                                             <td class="txt-oflo"> </td>
                                             <td class="txt-oflo"> <button>Mas Detalles</button> </td>                       
                                        </tr>                   
                                    </tbody>
                                </table>
                                </form>
                                </div>
                        </div>
                    </div>
                      <div class="col-sm-4">
                        <div class="white-box">                         
                        <h3 align="center"><label class= "col-sm-12" ><strong class="text-danger">SISTEMA DE ACCESO</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
							<form class="form-horizontal form-material" action="reporte_acceso_detalles.php" method="post">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ESTADO DE TORNIQUETE</th>
                                            <th>CANTIDAD</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_elec="select acceso.estado_molinete, count(*) as cantidad from acceso group by acceso.estado_molinete";
                              $query_ele=mysql_query($query_elec);                          
                              while($quer = mysql_fetch_assoc($query_ele))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $quer['estado_molinete'];?>   </td>      
											 <td class="txt-oflo"><a href="reporte_acceso.php?dato=<?php echo $quer['estado_molinete'];?>&dato3=estado_molinete"><span><strong><?php echo $quer['cantidad'];?></strong></span></a></td>                          
 
                                        </tr>  
                                             <?php }?>  
										<tr>                                                                     
                                             <td class="txt-oflo"> </td>
                                             <td class="txt-oflo"> <button>Mas Detalles</button> </td>                       
                                        </tr>                           
                                    </tbody>
                                </table>
                                </form> 
                            </div>     
                        </div>
                    </div>
                      <div class="col-sm-4">
                        <div class="white-box">                         
                        <h3 align="center"><label class= "col-sm-12" ><strong class="text-danger">SISTEMA DE GEOLOCALIZACIÒN</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
							<form class="form-horizontal form-material" action="reporte_geo_detalles.php" method="post">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ESTADO DE GPS</th>
                                            <th>CANTIDAD</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_elec="select geolocalizacion.estado_operativo_gps, count(*) as cantidad from geolocalizacion group by geolocalizacion.estado_operativo_gps";
                              $query_ele=mysql_query($query_elec);        
                                                   
                              while($quer = mysql_fetch_assoc($query_ele))
                              {
                             ?>        <tr>                                                                     
                                             <td class="txt-oflo"> <?php echo $quer['estado_operativo_gps'];?></td>
											 <td class="txt-oflo"><a href="reporte_geo.php?dato=<?php echo $quer['estado_operativo_gps'];?>&dato3=estado_operativo_gps"><span><strong><?php echo $quer['cantidad'];?></strong></span></a></td>                          
                                        </tr>  
                                             <?php }?>
										<tr>                                                                     
                                             <td class="txt-oflo"> </td>
                                             <td class="txt-oflo"> <button>Mas Detalles</button> </td>                       
                                        </tr> 
									                            
                                    </tbody>
                                </table> 
								</form>
                            </div>        
                        </div>
                    </div>  
                </div>
                 <div class="row">
                    <div class="col-sm-4">
                        <div class="white-box">                         
                          <h3 align="center"><label class= "col-sm-12" ><strong class="text-danger">SISTEMA DE SEGURIDAD</strong> </label></h3>                        
                            <div class="table  table-striped table-responsive" >
							<form class="form-horizontal form-material" action="reporte_seguridad_detalles.php" method="post">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>FUNCIÒN DE GRABACIÒN</th>
                                            <th>CANTIDAD</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="select seguridad.funcion_grabacion, count(*) as cantidad from seguridad group by seguridad.funcion_grabacion";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['funcion_grabacion'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_seguridad.php?dato=<?php echo $querv['funcion_grabacion'];?>&dato3=funcion_grabacion"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                          
                       
                                        </tr>  
                                             <?php }?>
									    <tr>                                                                     
                                             <td class="txt-oflo"> </td>
                                             <td class="txt-oflo"> <button>Mas Detalles</button> </td>                       
                                        </tr>                             
                                    </tbody>
                                </table>
								</form> 
                            </div>     
                        </div>
                    </div>
                      <div class="col-sm-4">
                        <div class="white-box">                         
                          <h3 align="center"><label class= "col-sm-12" ><strong class="text-danger">SISTEMA AUDIOVISUAL</strong> </label></h3>                        
                            <div class="table  table-striped table-responsive" >
							<form class="form-horizontal form-material" action="reporte_audiovisual_detalles.php" method="post">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ESTADO DE KL</th>
                                            <th>CANTIDAD</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_elec="select audiovisual.estado_kl, count(*) as cantidad from audiovisual group by audiovisual.estado_kl";
                              $query_ele=mysql_query($query_elec);                          
                              while($quer = mysql_fetch_assoc($query_ele))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $quer['estado_kl'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_audiovisual.php?dato=<?php echo $quer['estado_kl'];?>&dato3=estado_kl"><span><strong><?php echo $quer['cantidad'];?></strong></span></a></td>                          
             
                                        </tr>  
                                             <?php }?>
										<tr>                                                                     
                                             <td class="txt-oflo"> </td>
                                             <td class="txt-oflo"> <button>Mas Detalles</button> </td>                       
                                        </tr>                             
                                    </tbody>
                                </table> 
								</form>
                            </div>
                        </div>
                    </div>
                      <div class="col-sm-4">
                        <div class="white-box">                         
                        <h3 align="center"><label class= "col-sm-12" ><strong class="text-danger">SISTEMA DE INTERNET</strong> </label></h3>            
                            <div class="table  table-striped table-responsive" >
							<form class="form-horizontal form-material" action="reporte_internet_detalles.php" method="post">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ESTADO OPERATIVO INTERNET</th>
                                            <th>CANTIDAD</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                <?php
                              $query_elec="select internet.estado, count(*) as cantidad from internet group by internet.estado";
                              $query_ele=mysql_query($query_elec);                          
                              while($quer = mysql_fetch_assoc($query_ele))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $quer['estado'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_internet.php?dato=<?php echo $quer['estado'];?>&dato3=estado"><span><strong><?php echo $quer['cantidad'];?></strong></span></a></td>                           
                                        </tr>  
                                             <?php }?>
										<tr>                                                                     
                                             <td class="txt-oflo"> </td>
                                             <td class="txt-oflo"> <button>Mas Detalles</button> </td>                       
                                        </tr>                             
                                    </tbody>
                                </table>
								</form> 
                             </div>
                        </div>
                    </div>                  

              <div class="col-sm-4">
                        <div class="white-box">                         
                        <h3 align="center"><label class= "col-sm-12" ><strong class="text-danger">SISTEMA DE ELECTRICO</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
							<form class="form-horizontal form-material" action="reporte_electrico_detalles.php" method="post">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ESTADO DE INVERSOR</th>
                                            <th>CANTIDAD</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                <?php
                              $query_elec="select electrico.estado_inversor, count(*) as cantidad from electrico group by electrico.estado_inversor";
                              $query_ele=mysql_query($query_elec);                          
                              while($quer = mysql_fetch_assoc($query_ele))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $quer['estado_inversor'];?></td>
											 <td class="txt-oflo"><a href="reporte_electrico.php?dato=<?php echo $quer['estado_inversor'];?>&dato3=estado_inversor"><span><strong><?php echo $quer['cantidad'];?></strong></span></a></td>                          
                                        </tr>  
                                             <?php }?>
										<tr>                                                                     
                                             <td class="txt-oflo"> </td>
                                             <td class="txt-oflo"> <button>Mas Detalles</button> </td>                       
                                        </tr>                             
                                    </tbody>
                                </table>
								</form> 
                             </div>
                        </div>
                    </div>    

                </div>
             
            </div>
            <!-- /.container-fluid -->
<?php  
include("foter.php"); ?>