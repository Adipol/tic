<?php
include("header.php");
include("modelo/conec.php");
 ?>
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Sistema de Electrico</h4> </div>
                    
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
                                            <th>INVERSOR</th>
                                            <th>SERIE INVERSOR</th>                                         
                                            <th>CODIGO GAMLP</th>
                                            <th>COD GAMLP</th>
                                            <th>TOMA ENERGIA DETRAS CONDUCTOR</th>
                                            <th>CABLEADO ENERGIA</th>
                                            <th>ESTADO</th>
                                            <th>OBS</th>
                                            <th>FECHA</th>
                                        </tr>
                                    </thead>
                                   <tbody class="buscar">
                                    <?php 
                                    $electrico="SELECT * FROM electrico ORDER BY instalacion_idinstalacion ASC";
                                    $elec=mysql_query($electrico);
                                    while($el = mysql_fetch_assoc($elec))
                                    {?>
                                        <tr>  <?php
                                                $idbus=$el['bus_idbus'];
                                                $bus="SELECT nombre_bus FROM bus WHERE idbus=$idbus";
                                                $bu=mysql_query($bus);
                                                $b=mysql_fetch_assoc($bu);
                                                ?>                                                                      
                                             <td class="txt-oflo"> <?php echo $b['nombre_bus'];?> </td>
                                              <?php 
                                             $inst=$el['instalacion_idinstalacion'];
                                             $ins="SELECT nombre_instalacion FROM instalacion where idinstalacion=$inst";
                                             $in=mysql_query($ins);
                                             $i=mysql_fetch_assoc($in); ?>
                                             <td class="txt-oflo"> <?php echo $i['nombre_instalacion'];?> </td>
                                             <?php 
                                             $user=$el['usuario_idusuario'];
                                             $codigo="SELECT cod_user FROM usuario where idusuario=$user";
                                             $cod=mysql_query($codigo);
                                             $co=mysql_fetch_assoc($cod); ?>
                                             <td class="txt-oflo"> <?php echo $co['cod_user'];?> </td>
                                             <td class="txt-oflo"> <?php echo $el['inversor'];?> </td>
                                             <td class="txt-oflo"> <?php echo $el['serie_inversor'];?> </td>

                                             <td class="txt-oflo"> <?php echo $el['codigo_gamlp'];?> </td>
                                             <td class="txt-oflo"> <?php echo $el['cod_gamlp'];?> </td>
                                             <td class="txt-oflo"> <?php echo $el['toma_energia_conductor'];?> </td>
                                             <td class="txt-oflo"> <?php echo $el['cableado_energia'];?> </td>
                                             <td class="txt-oflo"> <?php echo $el['estado_inversor'];?> </td>
                                             <td class="txt-oflo"> <?php echo $el['obs'];?> </td>
                                             <td class="txt-oflo"> <?php echo $el['fecha'];?> </td>
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