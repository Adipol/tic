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
                </div>
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
                                            <th>MODELO TABLET</th>
                                            <th>ESTADO OPERATIVO</th>
                                            <th>DESCRIPCION FALLO 1</th>
                                            <th>DESCRIPCION FALLO 2</th>
                                            <th>ID VALIDADOR</th>
                                            <th>CODIGO GAMLP</th>
                                            <th>COD GAMLP</th>
                                            <th>CODIGO MFS</th>
                                            <th>COD MFS</th>
                                            <th>INTERFAZ</th>
                                            <th>ESTADO INTERFAZ</th>
                                            <th>CONECTOR DB9</th>
                                            <th>ESTADO DB9</th>
                                            <th>UBICACION DEL CABLE DE COMUNICACION</th>
                                            <th>ESTADO DEL CABLE DE COMUNICACION</th>
                                            <th>TIPO CABLE</th>
                                            <th>TIPO HUB</th>
                                            <th>CONDICION HUB</th>
                                            <th>TIPO CONEXION HUB</th>
                                            <th>ESTADO CONEXION HUB </th>
                                            <th>PUERTO EXTERNO USB</th>
                                            <th>ESTADO PUERTO EXTERNO</th>
                                            <th>UBICACION CARGADOR DE ENERGIA</th>
                                            <th>ESTADO CARGADOR DE ENERGIA </th>
                                            <th>TIPO DE CONECTOR DE TI</th>
                                            <th>ESTADO TI</th>
											<th>SERIE LECTOR DE TARJETA</th>
                                            <th>NUMERO SERIE VSAM</th>                                            
                                            <th>VSAM </th>
                                            <th>ESTADO VSAM</th>
                                            <th>TORNILLO VALIDADOR</th>
                                            <th>OBS</th>
                                            <th>FECHA</th>
                                        </tr>
                                    </thead>
                                   <tbody class="buscar">
                                    <?php 
                                        $cobro="SELECT * FROM cobro WHERE fecha IN (SELECT MAX(fecha) 
                                                                                    FROM cobro 
                                                                                    GROUP BY bus_idbus) 
                                                ORDER BY instalacion_idinstalacion ASC";
                                        $cob=mysql_query($cobro);
                                        while($c = mysql_fetch_assoc($cob))
                                        {
                                        ?>
                                        <tr>  
                                        <?php
                                                $idbus=$c['bus_idbus'];
                                                $bus="SELECT nombre_bus FROM bus WHERE idbus=$idbus";
                                                $bu=mysql_query($bus);
                                                $b=mysql_fetch_assoc($bu);
                                                ?>                                                                      
                                             <td class="txt-oflo"> <?php echo $b['nombre_bus'];?> </td>
                                              <?php 
                                             $inst=$c['instalacion_idinstalacion'];
                                             $ins="SELECT nombre_instalacion FROM instalacion where idinstalacion=$inst";
                                             $in=mysql_query($ins);
                                             $i=mysql_fetch_assoc($in); ?>
                                             <td class="txt-oflo"> <?php echo $i['nombre_instalacion'];?> </td>
                                             <?php 
                                             $user=$c['usuario_idusuario'];
                                             $codigo="SELECT cod_user FROM usuario where idusuario=$user";
                                             $cod=mysql_query($codigo);
                                             $co=mysql_fetch_assoc($cod); ?>
                                             <td class="txt-oflo"> <?php echo $co['cod_user'];?> </td>
                                             <td class="txt-oflo"> <?php echo $c['modelo_tablet'];?> </td>
                                             <td class="txt-oflo"> <?php echo $c['estado_operativo'];?> </td>
                                             <td class="txt-oflo"> <?php echo $c['descripcion_fallo_1'];?> </td>
                                             <td class="txt-oflo"> <?php echo $c['descripcion_fallo_2'];?> </td>
                                             <td class="txt-oflo"> <?php echo $c['id_validador'];?> </td>
                                             <td class="txt-oflo"> <?php echo $c['codigo_gamlp'];?> </td>
                                             <td class="txt-oflo"> <?php echo $c['cod_gamlp'];?> </td>
                                             <td class="txt-oflo"> <?php echo $c['codigo_mfs'];?> </td>
                                             <td class="txt-oflo"> <?php echo $c['cod_mfs'];?> </td>
                                             <td class="txt-oflo"> <?php echo $c['interfaz'];?> </td>
                                             <td class="txt-oflo"> <?php echo $c['estado_interfaz'];?> </td>
                                             <td class="txt-oflo"> <?php echo $c['conector_db9'];?> </td>
                                             <td class="txt-oflo"> <?php echo $c['estado_conector'];?> </td>
                                             <td class="txt-oflo"> <?php echo $c['ubicacion_cable_comunicacion'];?> </td>
                                             <td class="txt-oflo"> <?php echo $c['estado_cable_comunicacion'];?> </td>
                                             <td class="txt-oflo"> <?php echo $c['tipo_cable'];?> </td>
                                             <td class="txt-oflo"> <?php echo $c['tipo_hub'];?> </td>
                                             <td class="txt-oflo"> <?php echo $c['condicion_hub'];?> </td>
                                             <td class="txt-oflo"> <?php echo $c['tipo_conexion_hub'];?> </td>
                                             <td class="txt-oflo"> <?php echo $c['estado_conexion_hub'];?> </td>
                                             <td class="txt-oflo"> <?php echo $c['ext_usb'];?> </td>
                                             <td class="txt-oflo"> <?php echo $c['estado_usb'];?> </td>
                                             <td class="txt-oflo"> <?php echo $c['ubicacion_cargador'];?> </td>
                                             <td class="txt-oflo"> <?php echo $c['estado_cargador'];?> </td>
                                             <td class="txt-oflo"> <?php echo $c['tipo_tarjeta_inteligente'];?> </td>
                                             <td class="txt-oflo"> <?php echo $c['estado_tarjeta_inteligente'];?> </td>
											 <td class="txt-oflo"> <?php echo $c['id_vsam'];?> </td>
                                             <td class="txt-oflo"> <?php echo $c['numero_serie'];?> </td>
                                             <td class="txt-oflo"> <?php echo $c['existencia_vsam'];?> </td>
                                             <td class="txt-oflo"> <?php echo $c['estado_vsam'];?> </td>
                                             <td class="txt-oflo"> <?php echo $c['tornillos_tapa_validador'];?> </td>
                                             <td class="txt-oflo"> <?php echo $c['observaciones'];?> </td>
                                             <td class="txt-oflo"> <?php echo $c['fecha'];?> </td>  
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