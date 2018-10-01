$(function() {
    obj_buscador = new buscador();
    obj_buscador.llamarApiDenueBus();
});

$("#cve_ent").change(function() {
  // alert($("#cve_ent").val());
  var id_ent = $("#cve_ent").val();

  $.ajax({
  url: "http://geoweb2.inegi.org.mx/wscatgeo/mgem/"+id_ent,
  type: 'GET',
  cache: false,
  async: false,
  dataType: "json",
  beforeSend: function(xhr) {
    },
  })
  .done(function(data) {
    $("#cve_mun").empty();
    $("#cve_mun").append("<option>Seleccione un municipio</option>");
      for (var i = 0; i < data.datos.length; i++) {
          $("#cve_mun").append("<option value='" + data.datos[i].cve_agem + "'>" + data.datos[i].nom_agem + "</option>");
      }
  })
  .fail(function(objeto, tipo, causa) {
    if (objeto.status == "404" || objeto.status == "200") {
        var func = function () {
            window.location.href = "inicioweb.jsp";
        };

        $.avisoMsg("La sesión ha caducado", func);
    } else {
        alert(tipo + "  " + causa + "\nStatusfw:" + objeto.status);
    }
  })
  .always(function() {
      // $('#spinner').hide();
  })

});

function buscador(){
  _this_buscador = this;
}

buscador.prototype.llamarApiDenueBus = function(){
  $.ajax({
  url: "http://geoweb2.inegi.org.mx/wscatgeo/mgee/",
  type: 'GET',
  cache: false,
  async: false,
  dataType: "json",
  beforeSend: function(xhr) {
    },
  })
  .done(function(data) {
    for (var i = 0; i < data.datos.length; i++) {
        $("#cve_ent").append("<option value='" + data.datos[i].cve_agee + "'>" + data.datos[i].nom_agee + "</option>");
        $("#cve_ent1").append("<option value='" + data.datos[i].cve_agee + "'>" + data.datos[i].nom_agee + "</option>");
    }
  })
  .fail(function(objeto, tipo, causa) {
    if (objeto.status == "404" || objeto.status == "200") {
        var func = function () {
            window.location.href = "inicioweb.jsp";
        };

        $.avisoMsg("La sesión ha caducado", func);
    } else {
        alert(tipo + "  " + causa + "\nStatusfw:" + objeto.status);
    }
  })
  .always(function() {
      // $('#spinner').hide();
  })

 }
