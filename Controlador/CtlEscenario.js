function agregardatos(lista) {
    $.ajax({
        type: "POST",
        url: '../../DAO/DAOGenerico.php',
        data: {'array': JSON.stringify(lista), 'key': "idEscenario"},
        success: function (r) {
            $('#nombreEscenario').val("");
            $('#tipo').val("opcionTipo");
            $('#comuna').val("opcionComuna");
            $('#clase').val("opcionClase");
            $('#funcion').val("opcionFuncionA");
            if (r == 1) {
                $('#tablaEscenario').load('../Tablas/tablaEscenario.php', {tabla: 'escenario', Eliminar: 'NO', Editar: 'SI'});
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

    $('#idEscenarioA').val(d[0]);
    $('#nombreEscenarioA').val(d[1]);
    $('#tipoA').val(d[2]);
    $('#comunaA').val(d[3]);
    $('#claseA').val(d[4]);
    $('#funcionA').val(d[5]);

}

function eliminar(id) {
    console.log(id)
    dato = id.split('||');
    alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?',
            function () {
                lista = [dato[0], "escenario", "3"];
                agregardatos(lista);
            }
    , function () {
        alertify.error('Se cancelo')
    });

}



