function agregardatosEscuelaDeportiva(lista) {
    $.ajax({
        type: "POST",
        url: '../../DAO/DAOGenerico.php',
        data: {'array': JSON.stringify(lista), 'key': "idEscuelasDeportivas"},
        success: function (r) {
            $('#comunaEscuelaDeporte').val("opcionComuna");
            $('#nombreEscuelaDeporte').val("");
            $('#idDeporte').val("opcionDeporte");
            $('#idEscenario').val("opcionEscenario");
            $('#idPromotor').val("opcionPromotor");
            if (r == 1) {
                $('#tablaEscuelasDeportivas').load('../Tablas/tablaEscenario.php', {tabla: 'escuelasDeportivas', Eliminar: 'NO', Editar: 'SI'});
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
    
     $('#idDeporteEscolarA').val(d[0]);
    $('#comunaEscuelaDeporteA').val(d[1]);
    $('#nombreEscuelaDeporteA').val(d[2]);
    $('#idDeporteA').val(d[3]);
    $('#idEscenarioA').val(d[5]);
    $('#idPromotorA').val(d[7]);
    $('#DeportefuncionA').val(d[9]);
    

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



