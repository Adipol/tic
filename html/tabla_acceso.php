<?php
include("header.php");
include("modelo/conec.php");

 ?>
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Sistema de Acceso</h4> </div>
                    
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
                                            <th>MOLINETE</th>
                                            <th>ESTADO MOLINETE</th>
                                            <th>PLACA MOLINETE</th>
                                            <th>VAL. CONECTOR DB9</th>
                                            <th>VAL. ESTADO B9</th>
                                            <th>SOLENOIDE GIRO INGRESO</th>
                                            <th>SOLENOIDE BASTAGO GIRO INGRESO </th>
                                            <th>SOLENOIDE GIRO INVERSO</th>
                                            <th>SOLENOIDE BASTAGO GIRO INVERSO</th>
                                            <th>SOLENOIDE  AGARRE BASTAGO</th>
                                            <th>SOLENOIDE  AGARRE BASTAGO - BASTAGO</th>
                                            <th>SENSOR DE AGARRE</th>
                                            <th>FERRITAS</th>
                                            <th>RUEDA DENTADA</th>
                                            <th>CONTADOR MOLINETE</th>
                                            <th>BOCINA DE ACTIVACION</th>
                                            <th>BRAZO 1 PASADOR </th>
                                            <th>BRAZO 1 TORNILLO PASADOR</th>
                                            <th>BRAZO 1 BRAZO</th>
                                            <th>BRAZO 1 TORNILLO ALEM LARGO</th>
                                            <th>BRAZO 2 PASADOR </th>
                                            <th>BRAZO 2 TORNILLO PASADOR</th>
                                            <th>BRAZO 2 BRAZO</th>
                                            <th>BRAZO 2 TORNILLO ALEM LARGO</th>
                                            <th>BRAZO 3 PASADOR </th>
                                            <th>BRAZO 3 TORNILLO PASADOR</th>
                                            <th>BRAZO 3 BRAZO</th>
                                            <th>BRAZO 3 TORNILLO ALEM LARGO</th>
                                            <th>ESTRUCTURA CHASSIS</th>
                                            <th>VISAGRAS</th>
                                            <th>CHAPA CENTRAL</th>
                                            <th>CHAPA DERECHA</th>
                                            <th>CHAPA IZQUIERA</th>
                                            <th>OBS.</th>
                                            <th>FECHA DE RELEVAMIENTO</th>
                                        </tr>
                                    </thead>
                                   <tbody class="buscar">
                                    <?php 
                                    $acceso="SELECT * FROM acceso ORDER BY instalacion_idinstalacion ASC";
                                    $acc=mysql_query($acceso);


                                    while($ac = mysql_fetch_assoc($acc))
                                    {?>
                                        <tr>  <?php
                                                $idbus=$ac['bus_idbus'];
                                                $bus="SELECT nombre_bus FROM bus WHERE idbus=$idbus";
                                                $bu=mysql_query($bus);
                                                $b=mysql_fetch_assoc($bu);
                                                ?>                                                                      
                                             <td class="txt-oflo"> <?php echo $b['nombre_bus'];?> </td>
                                              <?php 
                                             $inst=$ac['instalacion_idinstalacion'];
                                             $ins="SELECT nombre_instalacion FROM instalacion where idinstalacion=$inst";
                                             $in=mysql_query($ins);
                                             $i=mysql_fetch_assoc($in); ?>
                                             <td class="txt-oflo"> <?php echo $i['nombre_instalacion'];?> </td>
                                             <?php 
                                             $user=$ac['usuario_idusuario'];
                                             $codigo="SELECT cod_user FROM usuario where idusuario=$user";
                                             $cod=mysql_query($codigo);
                                             $co=mysql_fetch_assoc($cod); ?>
                                             <td class="txt-oflo"> <?php echo $co['cod_user'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ac['molinete'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ac['estado_molinete'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ac['placa_molinete'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ac['val_conectordb9'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ac['val_estadodb9'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ac['sol_giro_ingreso'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ac['sol_bastago_giro_ingreso'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ac['sol_giro_inverso'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ac['sol_bastago_giro_inverso'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ac['sol_agarre_bastago'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ac['sol_bastago_agarre'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ac['sensor_agarre'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ac['ferritas'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ac['rueda_dentada'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ac['contador_molinete'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ac['bociona_activacion'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ac['brz1_pasador'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ac['brz1_tornillo_pasador'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ac['brz1_brazo'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ac['brz1_tornillo_alem_largo'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ac['brz2_pasador'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ac['brz2_tornillo_pasador'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ac['brz2_brazo'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ac['brz2_tornillo_alem_largo'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ac['brz3_pasador'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ac['brz3_tornillo_pasador'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ac['brz3_brazo'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ac['brz3_tornillo_alem_largo'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ac['estructura_chasis'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ac['estructura_visagras'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ac['chapas_central'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ac['chapas_derecha'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ac['chapas_izquierda'];?> </td>  
                                             <td class="txt-oflo"> <?php echo $ac['observaciones'];?> </td>
                                             <td class="txt-oflo"> <?php echo $ac['fecha'];?> </td>      

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