<?php
include("header.php");
include("modelo/conec.php");
 ?>
<!-- Page Content -->
<div id="page-wrapper">
  <div class="container-fluid">
         <div class="row bg-title">
             <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                  <h4 class="page-title">Relevamiento Buses</h4>
             </div>
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
                                 <button onclick="detalle_cobro(<?php echo $row["idbus"]; ?>)" class="btn-mini btn-info">Cobro</button>
                                </td>
                                <td class="txt-oflo">
                                 <button onclick="detalle_acceso(<?php echo $row["idbus"]; ?>)" class="btn-mini btn-info">Acceso</button>
                                </td>
                                <td class="txt-oflo">
                                 <button onclick="detalle_geoloc(<?php echo $row["idbus"]; ?>)" class="btn-mini btn-info">Geoloc</button>
                                </td>
                                <td class="txt-oflo">
                                 <button onclick="detalle_seguridad(<?php echo $row["idbus"]; ?>)" class="btn-mini btn-info">Seguridad</button>
                                </td>
                                <td class="txt-oflo">
                                 <button onclick="detalle_audiovisual(<?php echo $row["idbus"]; ?>)" class="btn-mini btn-info">Audiovisual</button>
                                </td>                                                
                                <td class="txt-oflo">
                                 <button onclick="detalle_internet(<?php echo $row["idbus"]; ?>)" class="btn-mini btn-info">Internet</button>
                                </td>
                                <td class="txt-oflo">
                                 <button onclick="detalle_electrico(<?php echo $row["idbus"]; ?>)" class="btn-mini btn-info">Electrico</button>
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
    </div>
</div>
<
<?php
include("modelo/modal_acceso.php");
include("modelo/modal_cobro.php");
include("modelo/modal_geoloc.php");
include("modelo/modal_seguridad.php");
include("modelo/modal_audiovisual.php");
include("modelo/modal_internet.php");
include("modelo/modal_electrico.php");
?>

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
  <script src="js/sistema.js"></script>

<?php  
include("foter.php"); ?>