<?php
include("header.php");
include("modelo/conec.php");
 ?>
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Sistema de Geolocalizacion</h4> </div>
                    
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
                                            <th>INSTALACION</th>
                                            <th>USUARIO</th>
                                            <th>ESTADO OPERATIVO GPS</th>
                                            <th>UBICACION</th>
                                            <th>IMEI</th>
                                            <th>NUMERO DE SERIE</th>
                                            <th>CODIGO GAMLP</th>
                                            <th>COD GAMLP</th>
                                            <th>SIM CARD</th>
                                            <th>NUMERO SIM CARD</th>
                                            <th>NUMERO SERIE SIN CARD</th>
                                            <th>GPS</th>
                                            <th>GSM</th>
                                            <th>HANDSET</th>
                                            <th>ESTADO HANDSET</th>
                                            <th>CONECTOR GPS HANDSET</th>
                                            <th>DISPLAY HANDSET</th>
                                            <th>BOTONES</th>
                                            <th>CARCASA</th>
                                            <th>PORTA HANDSET</th>
                                            <th>VISUALIZACION SISTEMA GPS</th>
                                            <th>OBS.</th>
                                            <th>FECHA</th>
                                        </tr>
                                    </thead>
                                    <tbody class="buscar">
                                    <?php 
                                    $geoloc="SELECT * FROM geolocalizacion ORDER BY instalacion_idinstalacion ASC";
                                    $geo=mysql_query($geoloc);
                                    while($ge = mysql_fetch_assoc($geo))
                                    {?>
                                        <tr>  <?php
                                                $idbus=$ge['bus_idbus'];
                                                $bus="SELECT nombre_bus FROM bus WHERE idbus=$idbus";
                                                $bu=mysql_query($bus);
                                                $b=mysql_fetch_assoc($bu);
                                                ?>                                                                      
                                             <td class="txt-oflo"> <?php echo $b['nombre_bus'];?> </td>
                                              <?php 
                                             $inst=$ge['instalacion_idinstalacion'];
                                             $ins="SELECT nombre_instalacion FROM instalacion where idinstalacion=$inst";
                                             $in=mysql_query($ins);
                                             $i=mysql_fetch_assoc($in); ?>
                                             <td class="txt-oflo"> <?php echo $i['nombre_instalacion'];?> </td>
                                             <?php 
                                             $user=$ge['usuario_idusuario'];
                                             $codigo="SELECT cod_user FROM usuario where idusuario=$user";
                                             $cod=mysql_query($codigo);
                                             $co=mysql_fetch_assoc($cod); ?>
                                             <td class="txt-oflo"> <?php echo $co['cod_user'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ge['estado_operativo_gps'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ge['ubicacion'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ge['imei'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ge['numero_serie'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ge['codigo_gamlp'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ge['cod_gamlp'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ge['sim_card'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ge['numero_sim_card'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ge['numero_serie_sim_card'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ge['gps'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ge['gsm'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ge['handset'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ge['estado_handset'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ge['conector_gps'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ge['display_handset'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ge['botones_handset'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ge['carcasa_handset'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ge['porta_handset'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ge['visualizacion_sistema_gps'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ge['obs'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ge['fecha'];?> </td>
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