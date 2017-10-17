<?php
include("header.php");
include("modelo/conec.php");

 ?>
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Sistema de Cobro</h4> </div>
                    
                    <!-- /.col-lg-12 -->
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">                          
						   <div class="input-group"> <span class="input-group-addon">Buscar</span>
                            <input id="filtrar" type="text" class="form-control" placeholder="Ingresa texto que deseas Buscar...">
                              </div>
                                  <div class="input-group">
                                    <br>
                                  </div>
                            <div class="table  table-striped table-responsive" id="dvData">
                                <table class="table">
                                    <thead>
                                        <tr>                                       
                                            <th>BUS</th>
                                            <th>INSTALACIÓN</th>
                                            <th>OBSERVACIONES</th>   
                                            <th>USUARIO</th>                                        
                                        </tr>
                                    </thead>
                                    <tbody class="buscar">
									<?php 
										$dato=$_GET['dato'];
										$dato3=$_GET['dato3'];
										
                                        $dat="  SELECT
												bus.nombre_bus,
												instalacion.nombre_instalacion,
												cobro.observaciones,
												usuario.cod_user
												FROM
												cobro
												INNER JOIN bus ON cobro.bus_idbus = bus.idbus
												INNER JOIN instalacion ON cobro.instalacion_idinstalacion = instalacion.idinstalacion
												INNER JOIN usuario ON cobro.usuario_idusuario = usuario.idusuario
												WHERE $dato3='$dato'
												ORDER BY
												bus.idbus ASC";

                                        $da=mysql_query($dat);
                                        while($c = mysql_fetch_assoc($da))
                                        {
                                        ?>
                                        <tr>  
                                       
                                             <td class="txt-oflo"> <?php echo $c['nombre_bus'];?> </td>
											 <td class="txt-oflo"> <?php echo $c['nombre_instalacion'];?> </td>
                                             <td class="txt-oflo"> <?php echo $c['observaciones'];?> </td>
											 <td class="txt-oflo"> <?php echo $c['cod_user'];?> </td>
                                        
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