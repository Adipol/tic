<?php
include("header.php");
include("modelo/conec.php");

 ?>
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Sistema Audiovisual</h4> </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box"> 
                            <div class="table  table-striped table-responsive" id="dvData">
                                <table class="table table-striped  table-condensed text-center"  >
                                    <thead>
                                        <tr>                                       
                                            <th WIDTH="10%" class="text-center"><strong>BUS</strong></th>
                                            <th WIDTH="15%" class="text-center"><strong>INSTALACIÓN</strong> </th>
                                            <th WIDTH="65%" class="text-center"><strong>OBSERVACIONES</strong></th> 
                                            <th WIDTH="10%" class="text-center"><strong>USUARIO</strong></th>                                        
                                        </tr>
                                    </thead>
                                    <tbody class="buscar">
                                       <?php 
										$dato=$_GET['dato'];
										$dato3=$_GET['dato3'];

                                        $dat="  SELECT
												bus.nombre_bus,
												instalacion.nombre_instalacion,
												usuario.cod_user,
												audiovisual.obs
												FROM
												audiovisual
												INNER JOIN bus ON audiovisual.bus_idbus = bus.idbus
												INNER JOIN instalacion ON audiovisual.instalacion_idinstalacion = instalacion.idinstalacion
												INNER JOIN usuario ON audiovisual.usuario_idusuario = usuario.idusuario
												WHERE $dato3='$dato'
												ORDER BY
												bus.idbus ASC";

										$da=mysql_query($dat);
                                        while($c = mysql_fetch_assoc($da))
                                        {
                                        ?>
                                        <tr>  
											<td class="text-center"> <?php echo $c['nombre_bus'];?> </td>
											<td class="text-left"> <?php echo $c['nombre_instalacion'];?> </td>
											<td class="text-left"> <?php echo $c['obs'];?> </td> 
											<td class="text-left"> <?php echo $c['cod_user'];?> </td> 
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