function agregardatos(lista) {
    $.ajax({
        type: "POST",
        url: '../../DAO/DAOGenerico.php',
        data: {'array': JSON.stringify(lista), 'key': "idEventosRecreando"},
        success: function (r) {
            $('#nombre').val("");
            $('#lugar').val("");
            $('#mes').val("");
            $('#dia').val("");
            $('#comuna').val("opcionComuna");
            $('#ano').val("");
            $('#ceroCinco').val("");
            $('#seisDoce').val("");
            $('#treceDiecisiete').val("");
            $('#dieciochoVentiocho').val("");
            $('#ventiochoMas').val("");

            if (r == 1) {
                $('#tablaMesNinez').load('../Tablas/tablaEscenario.php', {tabla: 'mesNinez', Eliminar: 'SI', Editar: 'SI'});
                alertify.success("Se ha completado la accion correctamente");

            } else {
                alertify.error("ERROR DE CONEXION");
                console.log(r);
            }
        },
        error: function (jqXHR, exception) {
            var msg = '';
            if (jqXHR.status === 0) {
                console.log("Not connect.\n Verify Network.");
            } else if (jqXHR.status === 404) {
                console.log(jqXHR + exception + "Requested page not found. [404]");
            } else if (jqXHR.status === 500) {
                console.log("Internal Server Error [500].");
            } else if (exception === 'parsererror') {
                console.log("Requested JSON parse failed.");
            } else if (exception === 'timeout') {
                console.log("Time out error.");
            } else if (exception === 'abort') {
                console.log("Ajax request aborted.");
            } else {
                console.log('Uncaught Error.\n' + jqXHR.responseText);

            }
            $('#post').html(msg);
        }
    });
}



function SeleccionarDatos(jsono) {
    console.log(jsono);
    d = jsono.split('||');

    $('#idVisitaEscenarios').val(d[0]);
    $('#nombreA').val(d[1]);
    $('#lugarA').val(d[2]);
    $('#mesA').val(d[3]);
    $('#diaA').val(d[4]);
    $('#comunaA').val(d[5]);
    $('#anoA').val(d[6]);
    $('#ceroCincoA').val(d[7]);
    $('#seisDoceA').val(d[8]);
    $('#treceDiecisieteA').val(d[9]);
    $('#dieciochoVentiochoA').val(d[10]);
    $('#ventiochoMasA').val(d[11]);



}

function eliminar(id) {
    console.log(id)
    dato = id.split('||');
    alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?',
            function () {
                lista = [dato[0], "eventosrecreando", "3"];
                agregardatos(lista);
            }
    , function () {
        alertify.error('Se cancelo')
    });

}


