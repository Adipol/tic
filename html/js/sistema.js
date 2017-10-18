//sistema de cobro
function detalle_cobro(id)
 { 
    // Add User ID to the hidden field for furture usage
    $("#update_hidden_cobro_id").val(id);
    $.post("modelo/detalle_cobro.php", 
        {
            id: id
        },
        function (data, status) 
        {
            // PARSE json data
            var cobro = JSON.parse(data);
            // Assing existing valhe modal popup fields  Textos completos
            $("#idcobro").val(cobro.idcobro); 
            $("#bus_idbus").val(cobro.bus_idbus);            
            $("#instalacion_idinstalacion").val(cobro.instalacion_idinstalacion);
            $("#modelo_tablet").val(cobro.modelo_tablet);
            $("#id_validador").val(cobro.id_validador);
            $("#observaciones").val(cobro.observaciones);
            $("#codigo_gamlp").val(cobro.codigo_gamlp);
            $("#cod_gamlp").val(cobro.cod_gamlp);
            $("#codigo_mfs").val(cobro.codigo_mfs);
            $("#cod_mfs").val(cobro.cod_mfs);
            $("#tornillos_tapa_validador").val(cobro.tornillos_tapa_validador);
            $("#estado_operativo").val(cobro.estado_operativo);
            $("#descripcion_fallo_1").val(cobro.descripcion_fallo_1);
            $("#descripcion_fallo_2").val(cobro.descripcion_fallo_2);
            $("#interfaz").val(cobro.interfaz);
            $("#estado_interfaz").val(cobro.estado_interfaz);
            $("#conector_db9").val(cobro.conector_db9);
            $("#estado_conector").val(cobro.estado_conector);
            $("#ubicacion_cable_comunicacion").val(cobro.ubicacion_cable_comunicacion);
            $("#estado_cable_comunicacion").val(cobro.estado_cable_comunicacion);
            $("#tipo_cable").val(cobro.tipo_cable);
            $("#tipo_hub").val(cobro.tipo_hub);
            $("#tipo_conexion_hub").val(cobro.tipo_conexion_hub);
            $("#estado_conexion_hub").val(cobro.estado_conexion_hub);
            $("#ext_usb").val(cobro.ext_usb);
            $("#estado_usb").val(cobro.estado_usb);
            $("#ubicacion_cargador").val(cobro.ubicacion_cargador);
            $("#tipo_tarjeta_inteligente").val(cobro.tipo_tarjeta_inteligente);
            $("#estado_tarjeta_inteligente").val(cobro.estado_tarjeta_inteligente);
            $("#numero_serie").val(cobro.numero_serie);
            $("#id_vsam").val(cobro.id_vsam);
            $("#existencia_vsam").val(cobro.existencia_vsam);
            $("#estado_vsam").val(cobro.estado_vsam);
            $("#cod_user").val(cobro.cod_user);
            $("#nombre_bus").val(cobro.nombre_bus);
            $("#estado_cargador").val(cobro.estado_cargador);
            $("#condicion_hub").val(cobro.condicion_hub);
        }
    );
    // Open modal popup
    $("#update_cobro_modal").modal("show");
}
function editar_cobro() 
{     //alert("entro a la funcion");
// Devuelve Valores     
    var bus_idbus = $("#bus_idbus").val();
    var idcobro = $("#idcobro").val();
    var instalacion_idinstalacion = $("#instalacion_idinstalacion").val();
    var modelo_tablet = $("#modelo_tablet").val();
    var id_validador = $("#id_validador").val();        
    var codigo_gamlp = $("#codigo_gamlp").val();
    var cod_gamlp = $("#cod_gamlp").val();
    var codigo_mfs = $("#codigo_mfs").val();
    var cod_mfs = $("#cod_mfs").val();
    var tornillos_tapa_validador = $("#tornillos_tapa_validador").val();
    var estado_operativo = $("#estado_operativo").val();
    var descripcion_fallo_1 = $("#descripcion_fallo_1").val();
    var descripcion_fallo_2 = $("#descripcion_fallo_2").val();
    var interfaz = $("#interfaz").val();
    var estado_interfaz = $("#estado_interfaz").val();
    var conector_db9 = $("#conector_db9").val();
    var estado_conector = $("#estado_conector").val();
    var ubicacion_cable_comunicacion = $("#ubicacion_cable_comunicacion").val();
    var estado_cable_comunicacion = $("#estado_cable_comunicacion").val();
    var tipo_cable = $("#tipo_cable").val();
    var tipo_hub = $("#tipo_hub").val();
    var tipo_conexion_hub = $("#tipo_conexion_hub").val();
    var estado_conexion_hub = $("#estado_conexion_hub").val();
    var ext_usb = $("#ext_usb").val();
    var estado_usb = $("#estado_usb").val();
    var ubicacion_cargador = $("#ubicacion_cargador").val();
    var tipo_tarjeta_inteligente = $("#tipo_tarjeta_inteligente").val();
    var estado_tarjeta_inteligente = $("#estado_tarjeta_inteligente").val();
    var numero_serie = $("#numero_serie").val();
    var id_vsam = $("#id_vsam").val();
    var existencia_vsam = $("#existencia_vsam").val();
    var estado_vsam = $("#estado_vsam").val();
    var observaciones = $("#nueva_observacion").val();
    var cod_user = $("#cod_user").val();
    var nombre_bus = $("#nombre_bus").val();
    var estado_cargador = $("#estado_cargador").val();
    var condicion_hub = $("#condicion_hub").val();
    // Adiciona Ticket
    $.post("modelo/adiciona_cobro.php", 
    {
        bus_idbus:bus_idbus,
        idcobro:idcobro,
        instalacion_idinstalacion:instalacion_idinstalacion,
        modelo_tablet:modelo_tablet,
        id_validador:id_validador,
        observaciones:observaciones,
        codigo_gamlp:codigo_gamlp,
        cod_gamlp:cod_gamlp,
        codigo_mfs:codigo_mfs,
        cod_mfs:cod_mfs,
        tornillos_tapa_validador:tornillos_tapa_validador,
        estado_operativo:estado_operativo,
        descripcion_fallo_1:descripcion_fallo_1,
        descripcion_fallo_2:descripcion_fallo_2,
        interfaz:interfaz,
        estado_interfaz:estado_interfaz,
        conector_db9:conector_db9,
        estado_conector:estado_conector,
        ubicacion_cable_comunicacion:ubicacion_cable_comunicacion,
        estado_cable_comunicacion:estado_cable_comunicacion,
        tipo_cable:tipo_cable,
        tipo_hub:tipo_hub,
        tipo_conexion_hub:tipo_conexion_hub,
        estado_conexion_hub:estado_conexion_hub,
        ext_usb:ext_usb,
        estado_usb:estado_usb,
        ubicacion_cargador:ubicacion_cargador,
        tipo_tarjeta_inteligente:tipo_tarjeta_inteligente,
        estado_tarjeta_inteligente:estado_tarjeta_inteligente,
        numero_serie:numero_serie,
        id_vsam:id_vsam,
        existencia_vsam:existencia_vsam,
        estado_vsam:estado_vsam,
        cod_user:cod_user,
        nombre_bus:nombre_bus,
        estado_cargador:estado_cargador,
        condicion_hub:condicion_hub
      },

    function (data, status) 
    { 
        // close the popup
        $("#update_cobro_modal").modal("hide");
        refresh();

    });
}
//sistema de acceso
function detalle_acceso(id)
 { 
    // Add User ID to the hidden field for furture usage
    $("#update_hidden_acceso_id").val(id);
    $.post("modelo/detalle_acceso.php", 
        {
            id: id
        },
        function (data, status) 
        {
            // PARSE json data
            var ac = JSON.parse(data);
            // Assing existing valhe modal popup fields  Textos completos
            $("#acc_cod_user").val(ac.cod_user); 
            $("#acc_nombre_bus").val(ac.nombre_bus); 
            $("#idacceso").val(ac.idacceso); 
            $("#acc_bus_idbus").val(ac.bus_idbus); 
            $("#acc_instalacion_idinstalacion").val(ac.instalacion_idinstalacion); 
            $("#molinete").val(ac.molinete);
            $("#estado_molinete").val(ac.estado_molinete);  
            $("#placa_molinete").val(ac.placa_molinete); 
            $("#val_conectordb9").val(ac.val_conectordb9); 
            $("#val_estadodb9").val(ac.val_estadodb9); 
            $("#sol_giro_ingreso").val(ac.sol_giro_ingreso); 
            $("#sol_bastago_giro_ingreso").val(ac.sol_bastago_giro_ingreso); 
            $("#sol_giro_inverso").val(ac.sol_giro_inverso); 
            $("#sol_bastago_giro_inverso").val(ac.sol_bastago_giro_inverso); 
            $("#sol_agarre_bastago").val(ac.sol_agarre_bastago); 
            $("#sol_bastago_agarre").val(ac.sol_bastago_agarre);
            $("#sensor_agarre").val(ac.sensor_agarre); 
            $("#ferritas").val(ac.ferritas); 
            $("#rueda_dentada").val(ac.rueda_dentada); 
            $("#contador_molinete").val(ac.contador_molinete); 
            $("#bociona_activacion").val(ac.bociona_activacion); 
            $("#brz1_pasador").val(ac.brz1_pasador); 
            $("#brz1_tornillo_pasador").val(ac.brz1_tornillo_pasador); 
            $("#brz1_brazo").val(ac.brz1_brazo); 
            $("#brz1_tornillo_alem_largo").val(ac.brz1_tornillo_alem_largo); 
            $("#brz2_pasador").val(ac.brz2_pasador); 
            $("#brz2_tornillo_pasador").val(ac.brz2_tornillo_pasador); 
            $("#brz2_brazo").val(ac.brz2_brazo); 
            $("#brz2_tornillo_alem_largo").val(ac.brz2_tornillo_alem_largo); 
            $("#brz3_pasador").val(ac.brz3_pasador);
            $("#brz3_tornillo_pasador").val(ac.brz3_tornillo_pasador); 
            $("#brz3_brazo").val(ac.brz3_brazo); 
            $("#brz3_tornillo_alem_largo").val(ac.brz3_tornillo_alem_largo); 
            $("#estructura_chasis").val(ac.estructura_chasis); 
            $("#estructura_visagras").val(ac.estructura_visagras); 
            $("#chapas_central").val(ac.chapas_central); 
            $("#chapas_derecha").val(ac.chapas_derecha); 
            $("#chapas_izquierda").val(ac.chapas_izquierda); 
            $("#acc_observaciones").val(ac.observaciones);            
        }
    );
    // Open modal popup
    $("#update_acceso_modal").modal("show");
}
function editar_acceso() 
{     //alert("entro a la funcion");
// Devuelve Valores   
           var acc_bus_idbus = $("#acc_bus_idbus").val(); 
           var acc_instalacion_idinstalacion = $("#acc_instalacion_idinstalacion").val(); 
           var molinete = $("#molinete").val();
           var estado_molinete = $("#estado_molinete").val();  
           var placa_molinete = $("#placa_molinete").val(); 
           var val_conectordb9 = $("#val_conectordb9").val(); 
           var val_estadodb9 = $("#val_estadodb9").val(); 
           var sol_giro_ingreso = $("#sol_giro_ingreso").val(); 
           var sol_bastago_giro_ingreso = $("#sol_bastago_giro_ingreso").val(); 
           var sol_giro_inverso = $("#sol_giro_inverso").val(); 
           var sol_bastago_giro_inverso = $("#sol_bastago_giro_inverso").val(); 
           var sol_agarre_bastago = $("#sol_agarre_bastago").val(); 
           var sol_bastago_agarre = $("#sol_bastago_agarre").val();
           var sensor_agarre = $("#sensor_agarre").val();
           var ferritas = $("#ferritas").val();             
           var rueda_dentada = $("#rueda_dentada").val(); 
           var contador_molinete = $("#contador_molinete").val(); 
           var bociona_activacion = $("#bociona_activacion").val(); 
           var brz1_pasador = $("#brz1_pasador").val(); 
           var brz1_tornillo_pasador = $("#brz1_tornillo_pasador").val(); 
           var brz1_brazo = $("#brz1_brazo").val(); 
           var brz1_tornillo_alem_largo = $("#brz1_tornillo_alem_largo").val(); 
           var brz2_pasador = $("#brz2_pasador").val(); 
           var brz2_tornillo_pasador = $("#brz2_tornillo_pasador").val(); 
           var brz2_brazo = $("#brz2_brazo").val(); 
           var brz2_tornillo_alem_largo = $("#brz2_tornillo_alem_largo").val(); 
           var brz3_pasador = $("#brz3_pasador").val();
           var brz3_tornillo_pasador = $("#brz3_tornillo_pasador").val(); 
           var brz3_brazo = $("#brz3_brazo").val(); 
           var brz3_tornillo_alem_largo = $("#brz3_tornillo_alem_largo").val(); 
           var estructura_chasis = $("#estructura_chasis").val(); 
           var estructura_visagras = $("#estructura_visagras").val(); 
           var chapas_central = $("#chapas_central").val(); 
           var chapas_derecha = $("#chapas_derecha").val(); 
           var chapas_izquierda = $("#chapas_izquierda").val(); 
           var new_observacion = $("#new_observacion").val(); 
    // Adiciona Ticket
    $.post("modelo/adiciona_acceso.php", 
    {
           acc_bus_idbus:acc_bus_idbus,
           acc_instalacion_idinstalacion:acc_instalacion_idinstalacion,
           molinete:molinete,
           estado_molinete: estado_molinete,
           placa_molinete:placa_molinete,
           val_conectordb9:val_conectordb9,
           val_estadodb9:val_estadodb9,
           sol_giro_ingreso:sol_giro_ingreso,
           sol_bastago_giro_ingreso:sol_bastago_giro_ingreso,
           sol_giro_inverso:sol_giro_inverso,
           sol_bastago_giro_inverso: sol_bastago_giro_inverso,
           sol_agarre_bastago:sol_agarre_bastago,
           sol_bastago_agarre:sol_bastago_agarre,
           sensor_agarre:sensor_agarre,
           ferritas:ferritas,
           rueda_dentada:rueda_dentada,
           contador_molinete:contador_molinete,
           bociona_activacion:bociona_activacion,
           brz1_pasador:brz1_pasador,
           brz1_tornillo_pasador:brz1_tornillo_pasador,
           brz1_brazo:brz1_brazo,
           brz1_tornillo_alem_largo:brz1_tornillo_alem_largo,
           brz2_pasador:brz2_pasador,
           brz2_tornillo_pasador:brz2_tornillo_pasador,
           brz2_brazo:brz2_brazo,
           brz2_tornillo_alem_largo:brz2_tornillo_alem_largo,
           brz3_pasador:brz3_pasador,
           brz3_tornillo_pasador:brz3_tornillo_pasador,
           brz3_brazo:brz3_brazo,
           brz3_tornillo_alem_largo:brz3_tornillo_alem_largo,
           estructura_chasis:estructura_chasis,
           estructura_visagras:estructura_visagras,
           chapas_central:chapas_central,
           chapas_derecha:chapas_derecha,
           chapas_izquierda:chapas_izquierda,
           new_observacion:new_observacion
      },

   function (data, status) 
    { 
        // close the popup
        $("#update_acceso_modal").modal("hide");
        refresh();

    });
}

// electrico
function detalle_electrico(id)
 { 
    // Add User ID to the hidden field for furture usage
    $("#update_hidden_electrico_id").val(id);
    $.post("modelo/detalle_electrico.php", 
        {
            id: id
        },
        function (data, status) 
        {
            // PARSE json data
            var el = JSON.parse(data);
            // Assing existing valhe modal popup fields  Textos completos
            $("#elec_nombre_bus").val(el.nombre_bus); 
            $("#elec_bus_idbus").val(el.bus_idbus); 
            $("#elec_instalacion_idinstalacion").val(el.instalacion_idinstalacion);
            $("#elec_cod_user").val(el.cod_user); 
            $("#inversor").val(el.inversor); 
            $("#serie_inversor").val(el.serie_inversor); 
            $("#elec_codigo_gamlp").val(el.codigo_gamlp); 
            $("#elec_cod_gamlp").val(el.cod_gamlp); 
            $("#toma_energia_conductor").val(el.toma_energia_conductor); 
            $("#cableado_energia").val(el.cableado_energia); 
            $("#estado_inversor").val(el.estado_inversor); 
            $("#elec_observaciones").val(el.obs); 

           
        }
    );
    // Open modal popup
    $("#update_electrico_modal").modal("show");
}
function editar_electrico() 
{     //alert("entro a la funcion");
// Devuelve Valores   
           var elec_bus_idbus = $("#elec_bus_idbus").val(); 
           var elec_instalacion_idinstalacion = $("#elec_instalacion_idinstalacion").val();
           var elec_cod_user = $("#elec_cod_user").val(); 
           var inversor = $("#inversor").val(); 
           var serie_inversor = $("#serie_inversor").val(); 
           var elec_codigo_gamlp = $("#elec_codigo_gamlp").val(); 
           var elec_cod_gamlp = $("#elec_cod_gamlp").val(); 
           var toma_energia_conductor = $("#toma_energia_conductor").val(); 
           var cableado_energia = $("#cableado_energia").val(); 
           var estado_inversor = $("#estado_inversor").val(); 
           var e_observacion = $("#e_observacion").val(); 
          
    // Adiciona Ticket
    $.post("modelo/adiciona_electrico.php", 
    {
           elec_bus_idbus:elec_bus_idbus,
           elec_instalacion_idinstalacion:elec_instalacion_idinstalacion,
           inversor:inversor,
           serie_inversor:serie_inversor,
           elec_codigo_gamlp:elec_codigo_gamlp,
           elec_cod_gamlp:elec_cod_gamlp,
           toma_energia_conductor:toma_energia_conductor,
           cableado_energia:cableado_energia,
           estado_inversor: estado_inversor,
           e_observacion:e_observacion          
      },

   function (data, status) 
    { 
        // close the popup
        $("#update_electrico_modal").modal("hide");
        refresh();

    });
}


//geolocalizacion

function detalle_geoloc(id)
 { 
    // Add User ID to the hidden field for furture usage
    $("#update_hidden_geoloc_id").val(id);
    $.post("modelo/detalle_geoloc.php", 
        {
            id: id
        },
        function (data, status) 
        {
            // PARSE json data
            var ge = JSON.parse(data);
            // Assing existing valhe modal popup fields  Textos completos
            $("#geo_nombre_bus").val(ge.nombre_bus); 
            $("#geo_bus_idbus").val(ge.bus_idbus); 
            $("#geo_instalacion_idinstalacion").val(ge.instalacion_idinstalacion);
            $("#geo_cod_user").val(ge.cod_user); 
            $("#estado_operativo_gps").val(ge.estado_operativo_gps); 
            $("#ubicacion").val(ge.ubicacion); 
            $("#geo_imei").val(ge.imei); 
            $("#geo_numero_serie").val(ge.numero_serie); 
            $("#geo_codigo_gamlp").val(ge.codigo_gamlp); 
            $("#geo_cod_gamlp").val(ge.cod_gamlp); 
            $("#sim_card").val(ge.sim_card); 
            $("#numero_sim_card").val(ge.numero_sim_card); 
            $("#numero_serie_sim_card").val(ge.numero_serie_sim_card); 
            $("#gps").val(ge.gps); 
            $("#gsm").val(ge.gsm); 
            $("#handset").val(ge.handset); 
            $("#estado_handset").val(ge.estado_handset); 
            $("#conector_gps").val(ge.conector_gps); 
            $("#display_handset").val(ge.display_handset); 
            $("#botones_handset").val(ge.botones_handset); 
            $("#carcasa_handset").val(ge.carcasa_handset); 
            $("#porta_handset").val(ge.porta_handset); 
            $("#visualizacion_sistema_gps").val(ge.visualizacion_sistema_gps);            
            $("#geo_observaciones").val(ge.obs);     
           
        }
    );
    // Open modal popup
    $("#update_geoloc_modal").modal("show");
}
function editar_geoloc() 
{     //alert("entro a la funcion");
// Devuelve Valores   

           var geo_bus_idbus = $("#geo_bus_idbus").val(); 
           var geo_instalacion_idinstalacion = $("#geo_instalacion_idinstalacion").val();
           var estado_operativo_gps = $("#estado_operativo_gps").val(); 
           var ubicacion = $("#ubicacion").val(); 
           var geo_imei = $("#geo_imei").val(); 
           var geo_numero_serie = $("#geo_numero_serie").val(); 
           var geo_codigo_gamlp = $("#geo_codigo_gamlp").val(); 
           var geo_cod_gamlp = $("#geo_cod_gamlp").val(); 
           var sim_card = $("#sim_card").val(); 
           var numero_sim_card = $("#numero_sim_card").val(); 
           var numero_serie_sim_card = $("#numero_serie_sim_card").val(); 
           var gps = $("#gps").val(); 
           var gsm = $("#gsm").val(); 
           var handset = $("#handset").val(); 
           var estado_handset = $("#estado_handset").val(); 
           var conector_gps = $("#conector_gps").val(); 
           var display_handset = $("#display_handset").val(); 
           var botones_handset = $("#botones_handset").val(); 
           var carcasa_handset = $("#carcasa_handset").val(); 
           var porta_handset = $("#porta_handset").val(); 
           var visualizacion_sistema_gps = $("#visualizacion_sistema_gps").val();            
           var ge_observacion = $("#ge_observacion").val(); 
           
          
    // Adiciona Ticket
    $.post("modelo/adiciona_geoloc.php", 
    {
           geo_bus_idbus:geo_bus_idbus,
           geo_instalacion_idinstalacion:geo_instalacion_idinstalacion,
           estado_operativo_gps:estado_operativo_gps,
           ubicacion:ubicacion,
           geo_imei:geo_imei,
           geo_numero_serie:geo_numero_serie,
           geo_codigo_gamlp:geo_codigo_gamlp,
           geo_cod_gamlp:geo_cod_gamlp,
           sim_card:sim_card,
           numero_sim_card:numero_sim_card,
           numero_serie_sim_card:numero_serie_sim_card,
           gps:gps,
           gsm:gsm,
           handset:handset,
           estado_handset:estado_handset,
           conector_gps:conector_gps,
           display_handset:display_handset,
           botones_handset:botones_handset,
           carcasa_handset:carcasa_handset,
           porta_handset:porta_handset,
           visualizacion_sistema_gps:visualizacion_sistema_gps,
           ge_observacion:ge_observacion
                 
      },

   function (data, status) 
    { 
        // close the popup
        $("#update_geoloc_modal").modal("hide");
        refresh();

    });
}

//SEGURIDAD
//Internet

function detalle_seguridad(id)
{ 
   // Add User ID to the hidden field for furture usage
   $("#update_hidden_seguridad_id").val(id);
   $.post("modelo/detalle_seguridad.php", 
	   {
		   id: id
	   },
	   function (data, status) 
	   {
		   // PARSE json data
		   var seg = JSON.parse(data);
		   // Assing existing valhe modal popup fields  Textos completos
		   $("#int_cod_user").val(seg.cod_user); 
		   $("#int_nombre_bus").val(seg.nombre_bus); 
		   $("#int_bus_idbus").val(seg.bus_idbus); 
		   $("#int_instalacion_idinstalacion").val(seg.instalacion_idinstalacion);
		  /* $("#router_existencia").val(inter.router_existencia);
		   $("#estado").val(inter.estado); 
		   $("#rout_num_serie").val(inter.rout_num_serie); 
		   $("#rout_num_imei").val(inter.rout_num_imei); 
		   $("#rout_estado").val(inter.rout_estado); 
		   $("#rout_ubicacion").val(inter.rout_ubicacion); 
		   $("#rout_cargador").val(inter.rout_cargador); 
		   $("#int_sim").val(inter.sim); 
		   $("#sim_ubicacion").val(inter.sim_ubicacion); 
		   $("#sim_numero").val(inter.sim_numero); 
		   $("#sim_serie").val(inter.sim_serie);
		   $("#abrazaderas").val(inter.abrazaderas); 
		   $("#cloud").val(inter.cloud); 
		   $("#cloud_estado").val(inter.cloud_estado); 
		   $("#cloud_numero").val(inter.cloud_numero); 
		   $("#cloud_serie").val(inter.cloud_serie); 
		   $("#cloud_cargador").val(inter.cloud_cargador); */
		   $("#obs").val(seg.obs);    
	   }
   );
   // Open modal popup
   $("#update_seguridad_modal").modal("show");
}


//Internet

function detalle_internet(id)
 { 
    // Add User ID to the hidden field for furture usage
    $("#update_hidden_internet_id").val(id);
    $.post("modelo/detalle_internet.php", 
        {
            id: id
        },
        function (data, status) 
        {
            // PARSE json data
            var inter = JSON.parse(data);
            // Assing existing valhe modal popup fields  Textos completos
            $("#int_cod_user").val(inter.cod_user); 
            $("#int_nombre_bus").val(inter.nombre_bus); 
            $("#int_bus_idbus").val(inter.bus_idbus); 
            $("#int_instalacion_idinstalacion").val(inter.instalacion_idinstalacion);
            $("#router_existencia").val(inter.router_existencia);
            $("#estado").val(inter.estado); 
            $("#rout_num_serie").val(inter.rout_num_serie); 
            $("#rout_num_imei").val(inter.rout_num_imei); 
            $("#rout_estado").val(inter.rout_estado); 
            $("#rout_ubicacion").val(inter.rout_ubicacion); 
            $("#rout_cargador").val(inter.rout_cargador); 
            $("#int_sim").val(inter.sim); 
            $("#sim_ubicacion").val(inter.sim_ubicacion); 
            $("#sim_numero").val(inter.sim_numero); 
            $("#sim_serie").val(inter.sim_serie);
            $("#abrazaderas").val(inter.abrazaderas); 
            $("#cloud").val(inter.cloud); 
            $("#cloud_estado").val(inter.cloud_estado); 
            $("#cloud_numero").val(inter.cloud_numero); 
            $("#cloud_serie").val(inter.cloud_serie); 
            $("#cloud_cargador").val(inter.cloud_cargador); 
            $("#obs").val(inter.obs);    
        }
    );
    // Open modal popup
    $("#update_internet_modal").modal("show");
}
function editar_internet() 
{     
if(confirm("Realmente desea cambiar los datos?"))
    {
        var int_bus_idbus = $("#int_bus_idbus").val(); 
           var int_instalacion_idinstalacion = $("#int_instalacion_idinstalacion").val();
           var estado = $("#estado").val(); 
           var router_existencia = $("#router_existencia").val(); 
           var rout_num_serie = $("#rout_num_serie").val(); 
           var rout_num_imei = $("#rout_num_imei").val(); 
           var rout_estado = $("#rout_estado").val(); 
           var rout_ubicacion = $("#rout_ubicacion").val(); 
           var rout_cargador = $("#rout_cargador").val(); 
           var int_sim = $("#int_sim").val(); 
           var sim_ubicacion = $("#sim_ubicacion").val(); 
           var sim_numero = $("#sim_numero").val(); 
           var sim_serie = $("#sim_serie").val();
           var abrazaderas = $("#abrazaderas").val(); 
           var cloud = $("#cloud").val(); 
           var cloud_estado = $("#cloud_estado").val(); 
           var cloud_numero = $("#cloud_numero").val(); 
           var cloud_serie = $("#cloud_serie").val(); 
           var cloud_cargador = $("#cloud_cargador").val(); 
           var int_observacion = $("#int_observacion").val();  
    // Adiciona Ticket
    $.post("modelo/adiciona_internet.php", 
    {
           int_bus_idbus:int_bus_idbus,
           int_instalacion_idinstalacion:int_instalacion_idinstalacion,
           estado:estado,
           router_existencia:router_existencia,
           rout_num_serie:rout_num_serie,
           rout_num_imei:rout_num_imei,
           rout_estado:rout_estado,
           rout_ubicacion:rout_ubicacion,
           rout_cargador:rout_cargador,
           int_sim:int_sim,
           sim_ubicacion:sim_ubicacion,
           sim_numero:sim_numero,
           sim_serie:sim_serie,
           abrazaderas:abrazaderas,
           cloud:cloud,
           cloud_estado:cloud_estado,
           cloud_numero:cloud_numero,
           cloud_serie:cloud_serie,
           cloud_cargador:cloud_cargador,
           int_observacion:int_observacion
	  },
	  

   function (data, status) 
    { 
        // close the popup
        $("#update_internet_modal").modal("hide");
        refresh();

	});
	
    }
    return false;

}

 function refresh(){
        location.reload(true);
}

<!--

function confirmation() {
    if(confirm("Realmente desea cambiar los datos?"))
    {
        return true;
    }
    return false;
}
//-->
