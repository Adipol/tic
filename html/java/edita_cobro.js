// Adiciona Ticket
function addTicket() 
{     //alert("entro a la funcion");
// Devuelve Valores     
    var fechaIncidente = $("#fechaIncidente").val();
    var horaInicio = $("#horaInicio").val();
    var fechaIncidenteFin = $("#fechaIncidenteFin").val();
    var horaFin = $("#horaFin").val();
    var lugar_patio = $("#lugar_patio").val();
    var baAsignado = $("#baAsignado").val();
    var lugarIncidente = $("#lugarIncidente").val();
    var nomAnfitrion = $("#nomAnfitrion").val();
    var nomConductor = $("#nomConductor").val();
    var actores = $("#actores").val();
    var infraccion = $("#infraccion").val();
    var buscando = $("#buscando").val();
    var objetivo = $("#objetivo").val();
    var prioridad = $("#prioridad").val();
    // Adiciona Ticket
    $.post("../modelo/addTicket.php",
    {
        fechaIncidente: fechaIncidente,
        horaInicio: horaInicio,
        fechaIncidenteFin: fechaIncidenteFin,
        horaFin: horaFin,
        lugar_patio: lugar_patio,
        baAsignado: baAsignado,
        lugarIncidente: lugarIncidente,
        nomAnfitrion: nomAnfitrion,
        nomConductor: nomConductor,
        actores: actores,
        infraccion: infraccion,
        buscando: buscando,
        objetivo: objetivo,
        prioridad: prioridad
    }, 
    function (data, status) 
    { 
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();
        // clear fields from the popup
        $("#fechaIncidente").val("");
        $("#horaInicio").val("");
        $("#fechaIncidenteFin").val("");
        $("#horaFin").val("");
        $("#lugar_patio").val("");
        $("#baAsignado").val("");
        $("#lugarIncidente").val("");
        $("#nomAnfitrion").val("");
        $("#nomConductor").val("");
        $("#actores").val("");
        $("#infraccion").val("");
        $("#buscando").val("");
        $("#objetivo").val("");
        $("#prioridad").val("");
    });
}
function addTicketins() 
{     //alert("entro a la funcion");
// Devuelve Valores     
    var fechaIncidenteins = $("#fechaIncidenteins").val();
    var horaInicioins = $("#horaInicioins").val();
    var fechaIncidenteFinins = $("#fechaIncidenteFinins").val();
    var horaFinins = $("#horaFinins").val();
    var lugar_patioins = $("#lugar_patioins").val();
    var lugarIncidenteins = $("#lugarIncidenteins").val();
    var actoresins = $("#actoresins").val();
    var infraccionins = $("#infraccionins").val();
    var buscandoins = $("#buscandoins").val();
    var objetivoins = $("#objetivoins").val();
    var prioridadins = $("#prioridadins").val();
    // Adiciona Ticket
    $.post("../modelo/addTicketins.php",
    {
        fechaIncidenteins: fechaIncidenteins,
        horaInicioins: horaInicioins,
        fechaIncidenteFinins: fechaIncidenteFinins,
        horaFinins: horaFinins,
        lugar_patioins: lugar_patioins,
        lugarIncidenteins: lugarIncidenteins,
        actoresins: actoresins,
        infraccionins: infraccionins,
        buscandoins: buscandoins,
        objetivoins: objetivoins,
        prioridadins: prioridadins
    }, 
    function (data, status) 
    { 
        // close the popup
        $("#add_new_instalacion").modal("hide");

        // read records again
        readRecords();
        // clear fields from the popup
        $("#fechaIncidenteins").val("");
        $("#horaInicioins").val("");
        $("#fechaIncidenteFinins").val("");
        $("#horaFinins").val("");
        $("#lugar_patioins").val("");
        $("#lugarIncidenteins").val("");
        $("#actoresins").val("");
        $("#infraccionins").val("");
        $("#buscandoins").val("");
        $("#objetivoins").val("");
        $("#prioridadins").val("");
    });
}
// READ records
function readRecords(page) 
{
     var parametros = {"action":"ajax","page":page};
    $("#loader").fadeIn('slow');
    $.ajax({
        url:'../modelo/readRecords.php',
        data: parametros,
         beforeSend: function(objeto){
        $("#loader").html("<img src='../imagens/loader.gif'>");
        },
        success:function(data){
            $(".records_content").html(data).fadeIn('slow');
            $("#loader").html("");
        }
    })
   
}


function ticket_archivado(page)
{
    var parametros = {"action":"ajax","page":page};
    $("#loader").fadeIn('slow');
    $.ajax({
        url:'../modelo/ticket_arch_detalle.php',
        data: parametros,
         beforeSend: function(objeto){
        $("#loader").html("<img src='../imagens/loader.gif'>");
        },
        success:function(data){
            $(".records_ticket").html(data).fadeIn('slow');
            $("#loader").html("");
        }
    })
}

function DeleteTicket(id) {
    var conf = confirm("Esta serguro de Archivar  el Ticket numero "+id+"?");
    if (conf == true) 
    {
        $.post("../modelo/DeleteTicket.php", {id: id },
            function (data, status) 
            {
                // reload Users by using readRecords();
                readRecords();
            }
        );
    }
}

//function GetUserDetails(id) 
function GetdetalleTicket(id) 
{
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_id").val(id);    

    $.post("../modelo/detalleTicket.php", {
        id: id
         },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_id_instalacion").val(user.id_instalacion);
            $("#update_lugarIncidente").val(user.lugarIncidente);
            $("#update_bus").val(user.bus);
            $("#update_nomConductor").val(user.conductor);
            $("#update_nomAnfitrion").val(user.anfitrion);
            $("#update_actores").val(user.actores);
            $("#update_fechaIncidente").val(user.fechaIncidente);
            $("#update_horaInicio").val(user.horaInicio);
            $("#update_fechaIncidenteFin").val(user.fechaFin);
            $("#update_horaFin").val(user.horaFin);
            $("#update_infraccion").val(user.id_infraccion);
            $("#update_buscando").val(user.que_buscamos);
            $("#update_objetivo").val(user.objetivo);
            $("#update_prioridad").val(user.tipo_prioridad);
            //$("#update_first_name").val(user.first_name);
            //$("#update_last_name").val(user.last_name);
            //$("#update_email").val(user.email);
        }
    );

    // Open modal popup
    $("#update_user_modal").modal("show");
}

function Updateticket_detalle() {
    // get values
    var fechaIncidente = $("#update_fechaIncidente").val();
    var horaInicio = $("#update_horaInicio").val();
    var fechaIncidenteFin = $("#update_fechaIncidenteFin").val();
    var horaFin = $("#update_horaFin").val();
    var lugar_patio = $("#update_id_instalacion").val();
    var baAsignado = $("#update_bus").val();
    var lugarIncidente = $("#update_lugarIncidente").val();
    var nomAnfitrion = $("#update_nomAnfitrion").val();
    var nomConductor = $("#update_nomConductor").val();
    var actores = $("#update_actores").val();
    var infraccion = $("#update_infraccion").val();
    var buscando = $("#update_buscando").val();
    var objetivo = $("#update_objetivo").val();
    var prioridad = $("#update_prioridad").val();
    // get values
    // get hidden field value
    var id = $("#hidden_user_id").val();
    $.post("../modelo/updateticket_detalle.php", {
            id: id,
            fechaIncidente: fechaIncidente,
            horaInicio: horaInicio,
            fechaIncidenteFin: fechaIncidenteFin,
            horaFin: horaFin,
            lugar_patio: lugar_patio,
            baAsignado: baAsignado,
            lugarIncidente: lugarIncidente,
            nomAnfitrion: nomAnfitrion,
            nomConductor: nomConductor,
            actores: actores,
            infraccion: infraccion,
            buscando: buscando,
            objetivo: objetivo,
            prioridad: prioridad
            },
        function (data, status) 
        {
             $("#update_user_modal").modal("hide");

              readRecords();
        }
    );
}
function editar_cobro(id) 
{
    // Add User ID to the hidden field for furture usage
  //  $("#hidden_user_id").val(id);    
  alert("entro");

    $.post("../modelo/detalleTicket.php", {
        id: id
         },
        function (data, status) {
             var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_id_instalacionins").val(user.id_instalacion);
            $("#update_lugarIncidenteins").val(user.lugarIncidente);
            $("#update_busins").val(user.bus);
            $("#update_nomConductorins").val(user.conductor);
            $("#update_nomAnfitrionins").val(user.anfitrion);
            $("#update_actoresins").val(user.actores);
            $("#update_fechaIncidenteins").val(user.fechaIncidente);
            $("#update_horaInicioins").val(user.horaInicio);
            $("#update_fechaIncidenteFinins").val(user.fechaFin);
            $("#update_horaFinins").val(user.horaFin);
            $("#update_infraccionins").val(user.id_infraccion);
            $("#update_buscandoins").val(user.que_buscamos);
            $("#update_objetivoins").val(user.objetivo);
            $("#update_prioridadins").val(user.tipo_prioridad);
          
        }
    );

    // Open modal popup
    $("#update_ins_modal").modal("show");
}
function Updateticket_detalleins() {
    // get values
    var fechaIncidente = $("#update_fechaIncidenteins").val();
    var horaInicio = $("#update_horaInicioins").val();
    var fechaIncidenteFin = $("#update_fechaIncidenteFinins").val();
    var horaFin = $("#update_horaFinins").val();
    var lugar_patio = $("#update_id_instalacionins").val();
    var baAsignado = $("#update_busins").val();
    var lugarIncidente = $("#update_lugarIncidenteins").val();
    var nomAnfitrion = $("#update_nomAnfitrionins").val();
    var nomConductor = $("#update_nomConductorins").val();
    var actores = $("#update_actoresins").val();
    var infraccion = $("#update_infraccionins").val();
    var buscando = $("#update_buscandoins").val();
    var objetivo = $("#update_objetivoins").val();
    var prioridad = $("#update_prioridadins").val();
    // get values
    // get hidden field value
    var id = $("#hidden_user_id").val();
    $.post("../modelo/updateticket_detalle.php", {
            id: id,
            fechaIncidente: fechaIncidente,
            horaInicio: horaInicio,
            fechaIncidenteFin: fechaIncidenteFin,
            horaFin: horaFin,
            lugar_patio: lugar_patio,
            baAsignado: baAsignado,
            lugarIncidente: lugarIncidente,
            nomAnfitrion: nomAnfitrion,
            nomConductor: nomConductor,
            actores: actores,
            infraccion: infraccion,
            buscando: buscando,
            objetivo: objetivo,
            prioridad: prioridad
            },
        function (data, status) 
        {
             $("#update_ins_modal").modal("hide");

              readRecords();
        }
    );
}
    
$(document).ready(function () {
    // READ recods on page load
    readRecords(1); 
    ticket_archivado(1);
  // calling function
});