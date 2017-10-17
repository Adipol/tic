<?php
include("header.php");
include("modelo/conec.php");
 ?>
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Relevamiento Buses</h4> </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                       <div class="white-box">
                            <div class="table-responsive" id="dvData">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th>ITEM</th>
                                            <th>BUS</th>
                                            <th>SIST. COBRO</th>
                                            <th>SIST. ACCESO</th>
                                            <th>SIST. GEOLOC.</th>
                                            <th>SIST. SEGURIAD</th>
                                            <th>SIST. AUDIOVISUAL</th>
                                            <th>SIST. INTERNET</th>
                                            <th>SIST. ELECTRICO</th>
                                        </tr>
                                    </thead>
                                    <tbody class="buscar">
                                    <?php 
                                    $buses="SELECT * FROM bus";
                                    $bus=mysql_query($buses);
                                    while($row = mysql_fetch_assoc($bus))
                                    {
                                        ?>
                                        <tr>
                                            <td class="txt-oflo"><?php echo $row['idbus'];?></td>
                                            <td><?php echo $row['nombre_bus'];?></td>
                                             <td class="txt-oflo">
                                             <?php if($row['si_cobro']==0)
                                                     {
                                                       ?>
                                                       <a href="sis_cobro.php?id=<?php echo $row['idbus'];?>"><span  class="glyphicon glyphicon-remove"><strong> Sis. Cobro</strong></span></a>
                                                       <?php
                                                     }
                                                      else
                                                     {
                                                       ?>
                                                       <span  class="glyphicon glyphicon-ok"><strong> Completado</strong></span>
                                                       <?php
                                                     }?>                                             
                                            </td>
                                                
                                             <td class="txt-oflo">
                                             <?php if($row['si_acceso']==0)
                                                     {
                                                       ?>
                                                       <a href="sis_acceso.php?id=<?php echo $row['idbus'];?>"><span  class="glyphicon glyphicon-remove"><strong> Sis. Acceso</strong></span></a>
                                                       <?php
                                                     }
                                                      else
                                                     {
                                                       ?>
                                                       <span  class="glyphicon glyphicon-ok"><strong> Completado</strong></span>
                                                       <?php
                                                     }?>                                             
                                            </td>
                                               
                                                <td class="txt-oflo">
                                             <?php if($row['si_geoloc']==0)
                                                     {
                                                       ?>
                                                       <a href="sis_geolocalizacion.php?id=<?php echo $row['idbus'];?>"><span  class="glyphicon glyphicon-remove"><strong> Sis. Geoloc.</strong></span></a>
                                                       <?php
                                                     }
                                                      else
                                                     {
                                                       ?>
                                                       <span  class="glyphicon glyphicon-ok"><strong> Completado</strong></span>
                                                       <?php
                                                     }?>                                             
                                            </td>
                                                
                                             <td class="txt-oflo">
                                             <?php if($row['si_segurida']==0)
                                                     {
                                                       ?>
                                                       <a href="sis_seguridad.php?id=<?php echo $row['idbus'];?>"><span  class="glyphicon glyphicon-remove"><strong> Sis. Seguridad</strong></span></a>
                                                       <?php
                                                     }
                                                      else
                                                     {
                                                       ?>
                                                       <span  class="glyphicon glyphicon-ok"><strong> Completado</strong></span>
                                                       <?php
                                                     }?>                                             
                                            </td>
                                                
                                          <td class="txt-oflo">
                                             <?php if($row['si_audiovicual']==0)
                                                     {
                                                       ?>
                                                       <a href="sis_audiovisual.php?id=<?php echo $row['idbus'];?>"><span  class="glyphicon glyphicon-remove"><strong> Sis. Audiovisual</strong></span></a>
                                                       <?php
                                                     }
                                                      else
                                                     {
                                                       ?>
                                                       <span  class="glyphicon glyphicon-ok"><strong> Completado</strong></span>
                                                       <?php
                                                     }?>                                             
                                            </td>
                                                
                                              <td class="txt-oflo">
                                             <?php if($row['si_internet']==0)
                                                     {
                                                       ?>
                                                       <a href="sis_internet.php?id=<?php echo $row['idbus'];?>"><span  class="glyphicon glyphicon-remove"><strong> Sis. Internet</strong></span></a>
                                                       <?php
                                                     }
                                                      else
                                                     {
                                                       ?>
                                                       <span  class="glyphicon glyphicon-ok"><strong> Completado</strong></span>
                                                       <?php
                                                     }?>                                             
                                            </td>
                                           
                                                <td class="txt-oflo">
                                             <?php if($row['si_electrico']==0)
                                                     {
                                                       ?>
                                                       <a href="sis_electrico.php?id=<?php echo $row['idbus'];?>"><span  class="glyphicon glyphicon-remove"><strong> Sis. Electrico</strong></span></a>
                                                       <?php
                                                     }
                                                      else
                                                     {
                                                       ?>
                                                       <span  class="glyphicon glyphicon-ok"><strong> Completado</strong></span>
                                                       <?php
                                                     }?>                                             
                                            </td>
                                          
                                        </tr>  
                                        <?php }?>                                      
                                    </tbody>
                                </table> 
                                 </div>
                                  <button  class="btn btn-success" id="btnExport" ><i class="glyphicon glyphicon-floppy-disk"></i> EXCEL</button>
                                   <script>
                                    $("#btnExport").click(function(e) {
                                        window.open('data:application/vnd.ms-excel,' + encodeURIComponent($('#dvData').html()));
                                        e.preventDefault();
                                    });
                                  </script>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- row -->
                
                <!-- /.row -->
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