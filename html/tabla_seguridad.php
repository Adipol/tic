<?php
include("header.php");
include("modelo/conec.php");

 ?>
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Sistema de Seguridad</h4> </div>
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
                                            <th>INSTALACIÓN</th>
                                            <th>USUARIO</th>
                                            <th>GABINETE DEL DVR</th>
                                            <th>EXISTENCIA DVR</th>
                                            <th>EXISTENCIA DE MODULOS DEL DVR</th>
                                            <th>FUNCION DE GRABACIÓN</th>
                                            <th>ALIMENTAMIENTO</th>
                                            <th>CAPACIDAD</th>
                                            <th>NÚMERO DE SERIE HDD</th>
                                            <th>NÚMERO DE TORNILLOS RACK HDD</th>
                                            <th>ADAPTADOR RCA</th>
                                            <th>λ 1</th>
                                            <th>λ 2</th>
                                            <th>λ 3</th>
                                            <th>λ 4</th>
                                            <th>OUT 1</th>
                                            <th>OUT 2</th>
                                            <th>OUT 3</th>
                                            <th>OUT 4</th>
                                            <th>MEZCLADOR DE VIDEO</th>
                                            <th>OUT 1 DEL KL</th>
                                            <th>OUT 2 DEL KL</th>
                                            <th>OUT 3 DEL KL</th>
                                            <th>OUT 4 DEL KL</th>
                                            <th>CAMARA FRONTAL</th>
                                            <th>CAMARA DEL CONDUCTOR</th>
                                            <th>CAMARA DEL VALIDADOR</th>
                                            <th>CAMARA DE LA PUERTA DE SALIDA</th>
                                            <th>CAMARA TRASERA</th>
                                            <th>OBSERVACIONES</th>
                                            <th>FECHA DE REVISIÓN</th>
                                        </tr>
                                    </thead>
                                    <tbody class="buscar">
                                    <?php 
                                    $seguridad="SELECT * FROM seguridad ORDER BY instalacion_idinstalacion ASC";
                                    $segu=mysql_query($seguridad);


                                    while($seg = mysql_fetch_assoc($segu))
                                    {?>
                                        <tr> <?php
                                                $idbus=$seg['bus_idbus'];
                                                $bus="SELECT nombre_bus FROM bus WHERE idbus=$idbus";
                                                $bu=mysql_query($bus);
                                                $b=mysql_fetch_assoc($bu);
                                                ?>                                                                      
                                             <td class="txt-oflo"> <?php echo $b['nombre_bus'];?> </td>
                                              <?php 
                                             $inst=$seg['instalacion_idinstalacion'];
                                             $ins="SELECT nombre_instalacion FROM instalacion where idinstalacion=$inst";
                                             $in=mysql_query($ins);
                                             $i=mysql_fetch_assoc($in); ?>
                                             <td class="txt-oflo"> <?php echo $i['nombre_instalacion'];?> </td>
                                             <?php 
                                             $user=$seg['usuario_idusuario'];
                                             $codigo="SELECT cod_user FROM usuario where idusuario=$user";
                                             $cod=mysql_query($codigo);
                                             $co=mysql_fetch_assoc($cod); ?>
                                             <td class="txt-oflo"> <?php echo $co['cod_user'];?> </td>
                                             <td class="txt-oflo"> <?php echo $seg['dvr_gabinete'];?> </td>
                                             <td class="txt-oflo"> <?php echo $seg['dvr'];?> </td>
                                             <td class="txt-oflo"> <?php echo $seg['dvr_existencia'];?> </td>
                                             <td class="txt-oflo"> <?php echo $seg['funcion_grabacion'];?> </td>
                                             <td class="txt-oflo"> <?php echo $seg['Almacenamiento'];?> </td>
                                             <td class="txt-oflo"> <?php echo $seg['Capacidad'];?> </td>
                                             <td class="txt-oflo"> <?php echo $seg['num_serie_hdd'];?> </td>
                                             <td class="txt-oflo"> <?php echo $seg['tornillos_rac_hdd'];?> </td>
                                             <td class="txt-oflo"> <?php echo $seg['adaptador_rca'];?> </td>
                                             <td class="txt-oflo"> <?php echo $seg['lambda1'];?> </td>
                                             <td class="txt-oflo"> <?php echo $seg['lambda2'];?> </td>
                                             <td class="txt-oflo"> <?php echo $seg['lambda3'];?> </td>
                                             <td class="txt-oflo"> <?php echo $seg['lambda4'];?> </td>
                                             <td class="txt-oflo"> <?php echo $seg['out1'];?> </td>
                                             <td class="txt-oflo"> <?php echo $seg['out2'];?> </td>
                                             <td class="txt-oflo"> <?php echo $seg['out3'];?> </td>
                                             <td class="txt-oflo"> <?php echo $seg['out4'];?> </td>
                                             <td class="txt-oflo"> <?php echo $seg['kl_mesclaor_video'];?> </td>
                                             <td class="txt-oflo"> <?php echo $seg['kl_out1'];?> </td>
                                             <td class="txt-oflo"> <?php echo $seg['kl_out2'];?> </td>
                                             <td class="txt-oflo"> <?php echo $seg['kl_out3'];?> </td>
                                             <td class="txt-oflo"> <?php echo $seg['kl_out4'];?> </td>
                                             <td class="txt-oflo"> <?php echo $seg['cam_com_front'];?> </td>
                                             <td class="txt-oflo"> <?php echo $seg['cam_com_cond'];?> </td>
                                             <td class="txt-oflo"> <?php echo $seg['cam_val'];?> </td>
                                             <td class="txt-oflo"> <?php echo $seg['cam_puerta_sal'];?> </td>
                                             <td class="txt-oflo"> <?php echo $seg['cam_retro'];?> </td>
                                             <td class="txt-oflo"> <?php echo $seg['obs'];?> </td>
                                             <td class="txt-oflo"> <?php echo $seg['fecha'];?> </td>
                                        </tr>  
                                        <?php   }   ?>                                      
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
<?php  include("foter.php"); ?>