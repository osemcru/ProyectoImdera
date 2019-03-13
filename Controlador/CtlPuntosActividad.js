function agregardatosActividad(lista) {
    $.ajax({
        type: "POST",
        url: '../../DAO/DAOGenerico.php',
        data: {'array': JSON.stringify(lista), 'key': "idPuntosActividadFisica"},
        success: function (r) {
            $('#idNombre').val("");
            $('#idLugar').val("");
            $('#idDias').val("");
            $('#comuna').val("opcionComuna");
            $('#idMes').val("opcionMes");
            $('#idAno').val("");
            $('#id0a5').val("");
            $('#id0a12').val("");
            $('#id13a17').val("");
            $('#id18a28').val("");
            $('#idMayora28').val("");
            if (r == 1) {
                $('#puntosActividad').load('../Tablas/tablaEscenario.php', {tabla: 'puntosActividad', Eliminar: 'SI', Editar: 'SI'});
                alertify.success("Se ha completado la accion correctamentre");

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

    $('#idPuntosA').val(d[0]);
    $('#idNombreA').val(d[1]);
    $('#idLugarA').val(d[2]);
    $('#idDiaA').val(d[3]);
    $('#id0a5A').val(d[4]);
    $('#id6a12A').val(d[5]);
    $('#id13a17A').val(d[6]);
    $('#id18a28A').val(d[7]);
    $('#idMayora28A').val(d[8]);
    $('#comunaA').val(d[9]);
    $('#mesA').val(d[10]);
    $('#idAnoA').val(d[11]);

}

function eliminar(id) {
    console.log(id)
    dato = id.split('||');
    alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?',
            function () {
                lista = [dato[0], "puntosactividadfisica", "3"];
                agregardatosActividad
                (lista);
            }
    , function () {
        alertify.error('Se cancelo')
    });

}


