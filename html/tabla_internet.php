<?php
include("header.php");
include("modelo/conec.php");

 ?>
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Sistema de Internet</h4> </div>
                
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
                                            <th>ESTADO OPERATIVO INTERNET</th>  
                                             <th>ROUTER WIFI</th>                                           
                                            <th>SERIE ROUTER</th>
                                            <th>IMEI ROUTER</th>
                                            <th>ESTADO ROUTER</th>
                                            <th>UBICACION ROUTER</th>
                                            <th>CARGADOR ROUTER</th>
                                            <th>SIM</th>
                                            <th>UBICACIÓN SIM</th>
                                            <th>NÚMERO DE TELEFONO</th>
                                            <th>NÚMERO DE SERIE SIM</th>
                                            <th>ABRAZADERAS</th>
                                            <th>CLOUD</th>
                                            <th>ESTADO CLOUD</th>
                                            <th>NÚMERO DE CLOUD</th>
                                            <th>NÚMERO DE SERIE CLOUD</th>
                                            <th>CARGADOR CLOUD</th>
                                            <th>OBSERVACIONES</th>
                                            <th>FECHA</th>
                                        </tr>
                                    </thead>
                                 <tbody class="buscar">
                                    <?php 
                                    $internet="SELECT * FROM internet ORDER BY instalacion_idinstalacion ASC";
                                    $inter=mysql_query($internet);
                                    while($int = mysql_fetch_assoc($inter))
                                    {?>
                                        <tr>  <?php
                                                $idbus=$int['bus_idbus'];
                                                $bus="SELECT nombre_bus FROM bus WHERE idbus=$idbus";
                                                $bu=mysql_query($bus);
                                                $b=mysql_fetch_assoc($bu);
                                                ?>                                                                      
                                             <td class="txt-oflo"> <?php echo $b['nombre_bus'];?> </td>
                                              <?php 
                                             $inst=$int['instalacion_idinstalacion'];
                                             $ins="SELECT nombre_instalacion FROM instalacion where idinstalacion=$inst";
                                             $in=mysql_query($ins);
                                             $i=mysql_fetch_assoc($in); ?>
                                             <td class="txt-oflo"> <?php echo $i['nombre_instalacion'];?> </td>
                                             <?php 
                                             $user=$int['usuario_idusuario'];
                                             $codigo="SELECT cod_user FROM usuario where idusuario=$user";
                                             $cod=mysql_query($codigo);
                                             $co=mysql_fetch_assoc($cod); ?>
                                             <td class="txt-oflo"> <?php echo $co['cod_user'];?> </td>
                                             <td class="txt-oflo"> <?php echo $int['estado'];?> </td>
                                             <td class="txt-oflo"> <?php echo $int['router_existencia'];?> </td>
                                             <td class="txt-oflo"> <?php echo $int['rout_num_serie'];?> </td>
                                             <td class="txt-oflo"> <?php echo $int['rout_num_imei'];?> </td>
                                             <td class="txt-oflo"> <?php echo $int['rout_estado'];?> </td>
                                             <td class="txt-oflo"> <?php echo $int['rout_ubicacion'];?> </td>
                                             <td class="txt-oflo"> <?php echo $int['rout_cargador'];?> </td>
                                             <td class="txt-oflo"> <?php echo $int['sim'];?> </td>
                                             <td class="txt-oflo"> <?php echo $int['sim_ubicacion'];?> </td>
                                             <td class="txt-oflo"> <?php echo $int['sim_numero'];?> </td>
                                             <td class="txt-oflo"> <?php echo $int['sim_serie'];?> </td>
                                             <td class="txt-oflo"> <?php echo $int['abrazaderas'];?> </td>
                                             <td class="txt-oflo"> <?php echo $int['cloud'];?> </td>
                                             <td class="txt-oflo"> <?php echo $int['cloud_estado'];?> </td>
                                             <td class="txt-oflo"> <?php echo $int['cloud_numero'];?> </td>
                                             <td class="txt-oflo"> <?php echo $int['cloud_serie'];?> </td>
                                             <td class="txt-oflo"> <?php echo $int['cloud_cargador'];?> </td>
                                             <td class="txt-oflo"> <?php echo $int['obs'];?> </td>

                                             <td class="txt-oflo"> <?php echo $int['fecha'];?> </td>
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