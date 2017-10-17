<?php
include("header.php");
include("modelo/conec.php");
 ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">REPORTE DE SISTEMA ELECTRICO</h4> </div>
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger"> INVERSOR </strong> </label></h3>
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
                                            electrico.inversor
                                            FROM
                                            electrico
                                            GROUP BY
                                            electrico.inversor
                                            ORDER BY
                                            electrico.inversor ASC";

                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['inversor'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_electrico.php?dato=<?php echo $querv['inversor'];?>&dato3=inversor"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                       
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
                                            <th>ESTADO</th>
                                            <th>CANTIDAD</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                   <?php
                              $query_val="  SELECT
                                            Count(*) AS cantidad,
                                            electrico.codigo_gamlp
                                            FROM
                                            electrico
                                            GROUP BY
                                            electrico.codigo_gamlp
                                            ORDER BY
                                            electrico.codigo_gamlp ASC";

                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['codigo_gamlp'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_electrico.php?dato=<?php echo $querv['codigo_gamlp'];?>&dato3=codigo_gamlp"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                       
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">TOMA ENERGIA DETRAS CONDUCTOR</strong> </label></h3>
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
                                            electrico.toma_energia_conductor
                                            FROM
                                            electrico
                                            GROUP BY
                                            electrico.toma_energia_conductor
                                            ORDER BY
                                            electrico.toma_energia_conductor ASC";

                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['toma_energia_conductor'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_electrico.php?dato=<?php echo $querv['toma_energia_conductor'];?>&dato3=toma_energia_conductor"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                      
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">CABLEADO DE ENERGIA</strong> </label></h3>
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
                                            electrico.cableado_energia
                                            FROM
                                            electrico
                                            GROUP BY
                                            electrico.cableado_energia
                                            ORDER BY
                                            electrico.cableado_energia ASC";
                                            
                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['cableado_energia'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_electrico.php?dato=<?php echo $querv['cableado_energia'];?>&dato3=cableado_energia"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                      
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
                            <h3 align="center"><label class="col-sm-12" ><strong class="text-danger">ESTADO DE CABLEADO DE ENERGIA</strong> </label></h3>
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
                                            electrico.estado_inversor
                                            FROM
                                            electrico
                                            GROUP BY
                                            electrico.estado_inversor
                                            ORDER BY
                                            electrico.estado_inversor ASC";

                              $query_va=mysql_query($query_val);                          
                              while($querv = mysql_fetch_assoc($query_va))
                              {
                            ?>        <tr>                                                                     
                                             <td class="txt-oflo"><?php echo $querv['estado_inversor'];?>   </td>
											 <td class="txt-oflo"><a href="reporte_electrico.php?dato=<?php echo $querv['estado_inversor'];?>&dato3=estado_inversor"><span><strong><?php echo $querv['cantidad'];?></strong></span></a></td>                     
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