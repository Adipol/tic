<?php
include("header.php");
include("modelo/conec.php");
 ?>
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Estadisticas</h4> </div>
                  
                    <!-- /.col-lg-12 -->
                </div>
                <!-- row -->
                <div class="row">
                    <!--col -->
                  <?php 
                        $porcentaje_cob = "SELECT si_cobro, COUNT( idbus ) AS sx, ( SELECT COUNT(si_cobro ) *100 DIV 141) AS porcentaje
                                        FROM bus
                                        WHERE si_cobro=1
                                        GROUP BY si_cobro";
                                     $cob = mysql_query($porcentaje_cob);
                                     $co=mysql_fetch_row($cob);
                    ?>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6"> <i data-icon="E" class="linea-icon linea-basic"></i>
                                    <h5 class="text-muted vb">SISTEMA DE COBRO</h5> </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15 text-danger"><?php echo $co[2].' %';?></h3> </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $co[2].'%';?>"> <span class="sr-only">40% Complete (success)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <!--col -->
                    <?php 
                        $porcentaje_acc = "SELECT si_acceso, COUNT( idbus ) AS sx, ( SELECT COUNT(si_acceso ) *100 DIV 141) AS porcentaje
                                        FROM bus
                                        WHERE si_acceso=1
                                        GROUP BY si_acceso";
                                     $acc = mysql_query($porcentaje_acc);
                                     $ac=mysql_fetch_row($acc);
                    ?>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6"> <i data-icon="E" class="linea-icon linea-basic"></i>
                                    <h5 class="text-muted vb">SISTEMA DE ACCESO</h5> </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15 text-danger"><?php echo $ac[2].' %';?></h3> </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $ac[2].'%';?>"> <span class="sr-only">40% Complete (success)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                        $porcentaje_geo = "SELECT si_geoloc, COUNT( idbus ) AS sx, ( SELECT COUNT(si_geoloc ) *100 DIV 141) AS porcentaje
                                        FROM bus
                                        WHERE si_geoloc=1
                                        GROUP BY si_geoloc";
                                     $geo = mysql_query($porcentaje_geo);
                                     $ge=mysql_fetch_row($geo);
                    ?>
    
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe01b;"></i>
                                    <h5 class="text-muted vb">SISTEMA DE GEOLOCALIZACION</h5> </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15 text-megna"><?php echo $ge[2].' %';?></h3> </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-megna" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $ge[2].'%';?>"> <span class="sr-only">40% Complete (success)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <!--col -->
                    <?php 
                        $porcentaje_seg = "SELECT si_segurida, COUNT( idbus ) AS sx, ( SELECT COUNT(si_segurida ) *100 DIV 141) AS porcentaje
                                        FROM bus
                                        WHERE si_segurida=1
                                        GROUP BY si_segurida";
                                     $seg = mysql_query($porcentaje_seg);
                                     $sg=mysql_fetch_row($seg);
                    ?>
    
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe01b;"></i>
                                    <h5 class="text-muted vb">SISTEMA DE SEGURIDAD</h5> </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15 text-megna"><?php echo $sg[2].' %';?></h3> </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-megna" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $sg[2].'%';?>"> <span class="sr-only">40% Complete (success)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                      <?php 
                        $porcentaje_audio = "SELECT si_audiovicual, COUNT( idbus ) AS sx, ( SELECT COUNT(si_audiovicual ) *100 DIV 141) AS porcentaje
                                        FROM bus
                                        WHERE si_audiovicual=1
                                        GROUP BY si_audiovicual";
                                     $audi = mysql_query($porcentaje_audio);
                                     $au=mysql_fetch_row($audi);
                    ?>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe00b;"></i>
                                    <h5 class="text-muted vb">SISTEMA  AUDIOVISUAL</h5> </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15 text-primary"><?php echo $au[2].' %';?></h3> </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $au[2].'%';?>""> <span class="sr-only">40% Complete (success)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     
                    <!-- /.col -->
                    <!--col -->
                    
                    <!-- /.col -->
                    <!--col -->
                      <?php 
                        $porcentaje_int = "SELECT si_internet, COUNT( idbus ) AS sx, ( SELECT COUNT(si_internet ) *100 DIV 141) AS porcentaje
                                        FROM bus
                                        WHERE si_internet=1
                                        GROUP BY si_internet";
                                     $int = mysql_query($porcentaje_int);
                                     $in=mysql_fetch_row($int);
                    ?>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe00b;"></i>
                                    <h5 class="text-muted vb">SISTEMA DE INTERNET</h5> </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15 text-primary"><?php echo $in[2].' %';?></h3> </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $in[2].'%';?>""> <span class="sr-only">40% Complete (success)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                        $porcentaje_elec = "SELECT si_electrico, COUNT( idbus ) AS sx, ( SELECT COUNT(si_electrico ) *100 DIV 141) AS porcentaje
                                        FROM bus
                                        WHERE si_electrico=1
                                        GROUP BY si_electrico";
                                     $electrico = mysql_query($porcentaje_elec);
                                     $el=mysql_fetch_row($electrico);
                    ?>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe00b;"></i>
                                    <h5 class="text-muted vb">SISTEMA DE ELECTRICO</h5> </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15 text-primary"><?php echo $el[2].' %';?></h3> </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $el[2].'%';?>""> <span class="sr-only">40% Complete (success)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
               
                
                
             
            </div>
            <!-- /.container-fluid -->
<?php  
include("foter.php"); ?>