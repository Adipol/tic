<?php
include("header.php");
include("modelo/conec.php");

 ?>
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Sistema de cobro</h4> </div>
                    
                    <!-- /.col-lg-12 -->
                </div>
                <!-- row -->
                
                <!-- /.row -->
                <!--row -->
                
                <!--row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">                          

                            <div class="table  table-striped table-responsive" id="dvData">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>BUS</th>
                                            <th>TABLET</th>
                                            <th>OPERATIVILIDA</th>
                                            <th>FALLO 1</th>
                                            <th>FALLO 2</th>
                                            <th>OBSERVACIONES</th>
                                            
                                        </tr>

                                    </thead>

                                    <tbody>
                                       <?php 
                                        $dato=$_GET['dato'];
                                        $dat="SELECT bus_idbus, modelo_tablet, estado_operativo,descripcion_fallo_1, descripcion_fallo_2, observaciones  FROM cobro WHERE estado_operativo='$dato' ORDER BY bus_idbus ASC";
                                        $da=mysql_query($dat);
                                        while($c = mysql_fetch_assoc($da))
                                        {
                                        ?>
                                        <tr>  
                                       
                                             <td class="txt-oflo"> <?php echo $c['bus_idbus'];?> </td>
                                             <td class="txt-oflo"> <?php echo $c['modelo_tablet'];?> </td>
                                               <td class="txt-oflo"> <?php echo $c['estado_operativo'];?> </td>
                                             <td class="txt-oflo"> <?php echo $c['descripcion_fallo_1'];?> </td>
                                             <td class="txt-oflo"> <?php echo $c['descripcion_fallo_2'];?> </td>
                                             <td class="txt-oflo"> <?php echo $c['observaciones'];?> </td>
                                        
                                        </tr>  
                                             <?php }?>                              
                                    </tbody>
                                </table> 
                                 </div>
                                   
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- row -->
                
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
<?php  include("foter.php"); ?>