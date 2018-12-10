function agregardatos(lista) {
    $.ajax({
        type: "POST",
        url: '../../DAO/DAOGenerico.php',
        data: {'array': JSON.stringify(lista), 'key': "idsuperateIntercolegiados"},
        success: function (r) {
            $('#idDeporte').val("opcionDeporte");
            $('#ceroAcinco').val("");
            $('#seisAdoce').val("");
            $('#treceAsiete').val("");
            if (r == 1) {
                $('#tablaSuperate').load('../Tablas/tablaEscenario.php', {tabla: 'superateintercolegiados', Eliminar: 'NO', Editar: 'SI'});
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

    $('#idSuperateA').val(d[0]);
    $('#ceroAcincoA').val(d[1]);
    $('#seisAdoceA').val(d[2]);
    $('#treceAsieteA').val(d[3]);
    $('#idDeporteA').val(d[4]);

}

function eliminar(id) {
    console.log(id)
    dato = id.split('||');
    alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?',
            function () {
                lista = [dato[0], "superateintercolegiados", "3"];
                agregardatos(lista);
            }
    , function () {
        alertify.error('Se cancelo')
    });

}