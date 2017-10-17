<?php
include("header.php");
include("modelo/conec.php");
 ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">REPORTES INTERNET</h4> </div>
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">ESTADO OPERATIVO INTERNET</strong> </label></h3>
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
                              $query_val="select estado, count(*) as cantidad from INTERNET group by estado  
                              ORDER BY `cantidad` ASC";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['estado'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_internet.php?dato=<?php echo $querv['estado'];?>&dato3=estado"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                       
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">ESTADO DE RUTER</strong> </label></h3>
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
                              $query_val="select rout_estado, count(*) as cantidad from INTERNET group by rout_estado";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['rout_estado'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_internet.php?dato=<?php echo $querv['rout_estado'];?>&dato3=rout_estado"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                      
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">UBICACION ROUTER</strong> </label></h3>
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
                              $query_val="select rout_ubicacion, count(*) as cantidad from INTERNET group by rout_ubicacion";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['rout_ubicacion'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_internet.php?dato=<?php echo $querv['rout_ubicacion'];?>&dato3=rout_ubicacion"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                       
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">CARGADOR ROUTER</strong> </label></h3>
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
                              $query_val="select rout_cargador, count(*) as cantidad from INTERNET group by rout_cargador";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['rout_cargador'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_internet.php?dato=<?php echo $querv['rout_cargador'];?>&dato3=rout_cargador"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                       
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">SIM</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                              <form class="form-horizontal form-material" action="reporte.php" method="post">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>EXISTENCIA</th>
                                            <th>CANTIDAD</th>                                            
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="select sim, count(*) as cantidad from INTERNET group by sim";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['sim'];?>   </td>
                                             <td class="txt-oflo"><a href="reporte_internet.php?dato=<?php echo $querv['sim'];?>&dato3=sim"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                       
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">UBICACION SIM</strong> </label></h3>
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
                              $query_val="select sim_ubicacion, count(*) as cantidad from INTERNET group by sim_ubicacion";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['sim_ubicacion'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_internet.php?dato=<?php echo $querv['sim_ubicacion'];?>&dato3=sim_ubicacion"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                     
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger"> TOTAL ABRAZADERAS</strong> </label></h3>
                            <div class="table  table-striped table-responsive" >
                              <form class="form-horizontal form-material" action="reporte.php" method="post">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>EXISTENCIA</th>
                                            <th>CANTIDAD</th>                                            
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                              $query_val="select abrazaderas , count(*) as cantidad from INTERNET group by abrazaderas";
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['abrazaderas'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_internet.php?dato=<?php echo $querv['abrazaderas'];?>&dato3=abrazaderas"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                      
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