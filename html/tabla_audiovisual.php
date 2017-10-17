<?php
include("header.php");
include("modelo/conec.php");

 ?>
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Sistema de Audiovisual</h4> </div>
                    
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
                                            <th>VISUALIZACION KL</th>
                                            <th>TIPO ALMACENAMIENTO</th>
                                            <th>CAPACIDAD ALMACENAMIENTO</th>
                                            <th>SERIE HDD</th>
                                            <th>ESTADO KL</th>
                                            <th>ESTADO DISPLAY</th>
                                            <th>TOUCH</th>
                                            <th>BOTON 1</th>
                                            <th>BOTON 2</th>
                                            <th>BOTON 3</th>
                                            <th>BOTON 4</th>
                                            <th>ESTADO TV1</th>
                                            <th>CODIGO GAMLP</th>
                                            <th>COD GAMLP</th>
                                            <th>NUMERO DE SERIE</th>
                                            <th>TIPO CONECTOR VIDEO</th>
                                            <th>ESTADO CONECTOR VIDEO</th>
                                            <th>CONECTOR RCA</th>
                                            <th>ESTADO TV2</th>
                                            <th>CODIGO GAMLP</th>
                                            <th>COD GAMLP</th>
                                            <th>NUMERO DE SERIE</th>
                                            <th>TIPO CONECTOR VIDEO</th>
                                            <th>ESTADO CONECTOR VIDEO</th>
                                            <th>CONECTOR RCA</th>
                                            <th>MIC CONDUCTOR</th>
                                            <th>BRAZO MIC</th>
                                            <th>MIC ANFITRION</th>
                                            <th>CABLE USB</th>
                                            <th>ESTADO</th>
                                            <th>OBS.</th>
                                            <th>FECHA</th>
                                        </tr>
                                    </thead>
                                    <tbody class="buscar">
                                    <?php 
                                    $audiovisual="SELECT * FROM audiovisual ORDER BY instalacion_idinstalacion ASC";
                                    $adi=mysql_query($audiovisual);


                                    while($aud = mysql_fetch_assoc($adi))
                                    {?>
                                        <tr>  <?php
                                                $idbus=$aud['bus_idbus'];
                                                $bus="SELECT nombre_bus FROM bus WHERE idbus=$idbus";
                                                $bu=mysql_query($bus);
                                                $b=mysql_fetch_assoc($bu);
                                                ?>                                                                      
                                             <td class="txt-oflo"> <?php echo $b['nombre_bus'];?> </td>
                                              <?php 
                                             $inst=$aud['instalacion_idinstalacion'];
                                             $ins="SELECT nombre_instalacion FROM instalacion where idinstalacion=$inst";
                                             $in=mysql_query($ins);
                                             $i=mysql_fetch_assoc($in); ?>
                                             <td class="txt-oflo"> <?php echo $i['nombre_instalacion'];?> </td>
                                             <?php 
                                             $user=$aud['usuario_idusuario'];
                                             $codigo="SELECT cod_user FROM usuario where idusuario=$user";
                                             $cod=mysql_query($codigo);
                                             $co=mysql_fetch_assoc($cod); ?>
                                             <td class="txt-oflo"> <?php echo $co['cod_user'];?> </td>
                                             <td class="txt-oflo"> <?php echo $aud['visualizacion_grabacionkl'];?> </td>
                                             <td class="txt-oflo"> <?php echo $aud['tipo_almacenamientokl'];?> </td>
                                             <td class="txt-oflo"> <?php echo $aud['capacidad_almacenamientokl'];?> </td>
                                             <td class="txt-oflo"> <?php echo $aud['numero_serieHdd'];?> </td>
                                             <td class="txt-oflo"> <?php echo $aud['estado_kl'];?> </td>
                                             <td class="txt-oflo"> <?php echo $aud['estado_display'];?> </td>
                                             <td class="txt-oflo"> <?php echo $aud['touch_display'];?> </td>
                                             <td class="txt-oflo"> <?php echo $aud['boton_display1'];?> </td>
                                             <td class="txt-oflo"> <?php echo $aud['boton_display_2'];?> </td>
                                             <td class="txt-oflo"> <?php echo $aud['boton_display_3'];?> </td>
                                             <td class="txt-oflo"> <?php echo $aud['boton_display_4'];?> </td>
                                             <td class="txt-oflo"> <?php echo $aud['estado_tv1'];?> </td>
                                             <td class="txt-oflo"> <?php echo $aud['cod_gamlptv1'];?> </td>
                                             <td class="txt-oflo"> <?php echo $aud['cod_gamlp1'];?> </td>
                                             <td class="txt-oflo"> <?php echo $aud['numero_serietv1'];?> </td>
                                             <td class="txt-oflo"> <?php echo $aud['tipo_conectortv1'];?> </td>
                                             <td class="txt-oflo"> <?php echo $aud['estado_conectortv1'];?> </td>
                                             <td class="txt-oflo"> <?php echo $aud['conector_rcatv1'];?> </td>
                                             <td class="txt-oflo"> <?php echo $aud['estado_tv2'];?> </td>
                                             <td class="txt-oflo"> <?php echo $aud['cod_gamlptv2'];?> </td>
                                             <td class="txt-oflo"> <?php echo $aud['cod_gamlp2'];?> </td>
                                             <td class="txt-oflo"> <?php echo $aud['numero_serietv2'];?> </td>
                                             <td class="txt-oflo"> <?php echo $aud['tipo_conectortv2'];?> </td>
                                             <td class="txt-oflo"> <?php echo $aud['estado_conectortv2'];?> </td>
                                             <td class="txt-oflo"> <?php echo $aud['conector_rcatv2'];?> </td>
                                             <td class="txt-oflo"> <?php echo $aud['mic_conductor'];?> </td>
                                             <td class="txt-oflo"> <?php echo $aud['brazo_mic'];?> </td>
                                             <td class="txt-oflo"> <?php echo $aud['mic_anfitrion'];?> </td>
                                             <td class="txt-oflo"> <?php echo $aud['cable_usb'];?> </td>
                                             <td class="txt-oflo"> <?php echo $aud['estado_usb'];?> </td>
                                             <td class="txt-oflo"> <?php echo $aud['obs'];?> </td>
                                             <td class="txt-oflo"> <?php echo $aud['fecha'];?> </td>
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