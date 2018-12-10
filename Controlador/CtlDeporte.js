function agregardatosDeporte(lista) {
    $.ajax({
        type: "POST",
        url: '../../DAO/DAOGenerico.php',
        data: {'array': JSON.stringify(lista), 'key': "idDeportes"},
        success: function (r) {
            $('#nombreDeporte').val("");
            if (r == 1) {
                $('#tablaDeporte').load('../Tablas/tablaEscenario.php', {tabla: 'deporte', Eliminar: 'NO', Editar: 'SI'});
                alertify.success("Se ha completado la accion correctamente");

            } else {
                alertify.error("ERROR DE CONEXION");
                console.log(r);
                console.log('aduiauidfbasio');

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

    $('#idDeporteA').val(d[0]);
    $('#nombreDeporteA').val(d[1]);

}

function eliminar(id) {
    console.log(id)
    dato = id.split('||');
    alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?',
            function () {
                lista = [dato[0], "deporte", "3"];
                agregardatosDeporte(lista);
            }
    , function () {
        alertify.error('Se cancelo')
    });

}

