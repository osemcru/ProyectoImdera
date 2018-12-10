<?php

//Variables del sql
//Registrar: se debe llamra el case como la tabla de la base de datos
function variables($valor) {
    switch ($valor) {
        case "escenario":
            $array = array("nombre", "tipoEscenario", "claseEscenario", "comuna", "estado");
            return $array;
        case "mantenimiento":
            $array = array("Actividad", "fecha", "Escenario_idEscenario");
            return $array;
        case "eventosrecreando":
            $array = array("nombreOrganizacion", "sitio", "mes", "dia","comuna","ano","ceroACinco", "seisADoce", "treceADiecisiete", "dieciochoAVentiocho", "ventiochoMas", "tipoEvento");
            return $array;
        case "superateintercolegiados":
            $array = array("ceroACinco", "seisADoce", "treceADiecisiete", "Deporte_idDeportes");
            return $array;
        case "deporte":
            $array = array("nombre");
            return $array;
        case "escuelasdeportivas":
            $array = array("comuna", "nombreGrupo", "Deporte_idDeportes", "Escenario_idEscenario", "Usuario_cedulaUsuario", "estado");
            return $array;

            return $array;
        case 2:
            echo "i es igual a 2";
            break;
        default :
            echo '<script>alert("Error")</script>';
    }
}

//Listar sql
function retornarSql($tabla) {

    switch ($tabla) {
        case "escenario":
            $sql = "SELECT * FROM escenario";
            return$sql;
        case "mantenimiento":
            $sql = "SELECT m.idMantenimiento,m.Actividad,m.fecha,m.Escenario_idEscenario,e.nombre FROM mantenimiento as m INNER JOIN escenario as e ON m.Escenario_idEscenario=e.idEscenario";
            return$sql;
        case "visitasEscenarios":
            $sql = "SELECT `idEventosRecreando`, `nombreOrganizacion`, `sitio`, `mes`, `dia`, `comuna`, `ano`, `ceroACinco`, `seisADoce`, `treceADiecisiete`, `dieciochoAVentiocho`, `ventiochoMas` FROM `eventosrecreando` WHERE tipoEvento = 'visitaEscenarios'";
            return$sql;
        case "centrosPenitenciarios":
            $sql = "SELECT `idEventosRecreando`, `nombreOrganizacion`, `sitio`, `mes`, `dia`, `comuna`, `ano`, `ceroACinco`, `seisADoce`, `treceADiecisiete`, `dieciochoAVentiocho`, `ventiochoMas` FROM `eventosrecreando` WHERE tipoEvento = 'visitaCentrosPenitenciarios'";
            return$sql;
        case "mesNinez":
            $sql = "SELECT `idEventosRecreando`, `nombreOrganizacion`, `sitio`, `mes`, `dia`, `comuna`, `ano`, `ceroACinco`, `seisADoce`, `treceADiecisiete`, `dieciochoAVentiocho`, `ventiochoMas` FROM `eventosrecreando` WHERE tipoEvento = 'mesNinez'";
            return$sql;
        case "vacacionesRecreativas":
            $sql = "SELECT `idEventosRecreando`, `nombreOrganizacion`, `sitio`, `mes`, `dia`, `comuna`, `ano`, `ceroACinco`, `seisADoce`, `treceADiecisiete`, `dieciochoAVentiocho`, `ventiochoMas` FROM `eventosrecreando` WHERE tipoEvento = 'vacacionesRecreativas'";
            return$sql;
        case "eventosRecreativos":
            $sql = "SELECT `idEventosRecreando`, `nombreOrganizacion`, `sitio`, `mes`, `dia`, `comuna`, `ano`, `ceroACinco`, `seisADoce`, `treceADiecisiete`, `dieciochoAVentiocho`, `ventiochoMas` FROM `eventosrecreando` WHERE tipoEvento = 'eventosRecreativos'";
            return$sql;
        case "superateintercolegiados":
            $sql = "SELECT s.idsuperateIntercolegiados,s.ceroACinco,s.seisADoce,s.treceADiecisiete,s.Deporte_idDeportes,d.nombre from superateintercolegiados as s JOIN deporte as d on s.Deporte_idDeportes=d.idDeportes;";
            return$sql;
            case "deporte":
            $sql = "SELECT * FROM `deporte`";
            return$sql;
        case "escuelasDeportivas":
            $sql = "SELECT ED.idEscuelasDeportivas,ED.comuna,ED.nombreGrupo,ED.Deporte_idDeportes,d.nombre,ED.Escenario_idEscenario,e.nombre,ED.Usuario_cedulaUsuario,u.nombre,ED.estado FROM escuelasdeportivas as ED join deporte as d on ED.Deporte_idDeportes=D.idDeportes JOIN escenario AS e on ED.Escenario_idEscenario=E.idEscenario join usuario as u on ED.Usuario_cedulaUsuario=u.cedulaUsuario";
            return$sql;

        default:
            break;
    }
}

//Metodo para listar de manera generica
function listar($query) {
    $resultado = mysqli_query(conexion(), $query);

    if (!$resultado) {
        die('Error');
    } else {
        $array = [];
        $i = 0;
        while ($var = mysqli_fetch_array($resultado)) {
            $array[$i] = $var;
            $i++;
        }

        return $array;
    }
}

//Columnas de deseo mostrar
function Columnas($tabla) {

    switch ($tabla) {
        case "escenario":
            $array = array("<th>Id</th>", "<th>Nombre</th>", "<th>Tipo Escenario</th>", "<th>Comuna</th>", "<th>Clase Escenario</th>", "<th>Estado</th>");
            return $array;
        case "mantenimiento":
            $array = array("<th>Id</th>", "<th>Actividad</th>", "<th>Fecha</th>", "<th>Id Escenario</th>", "<th>Escenario</th>");
            return $array;
        case "visitasEscenarios":
            $array = array("<th>Id</th>", "<th>Nombre</th>", "<th>Escenario</th>", "<th>Mes</th>", "<th>Dia </th>", "<th>Comuna</th>", "<th>Año</th>","<th>0 a 5</th>", "<th>6 a 12</th>", "<th>13 a 17</th>","<th>18 a 28</th>","<th>28+</th>");
            return $array;
        case "centrosPenitenciarios":
            $array = array("<th>Id</th>", "<th>Nombre</th>", "<th>Actividad</th>", "<th>Mes</th>", "<th>Dia </th>", "<th>Comuna</th>", "<th>Año</th>","<th>0 a 5</th>", "<th>6 a 12</th>", "<th>13 a 17</th>","<th>18 a 28</th>","<th>28+</th>");
            return $array;
        case "mesNinez":
            $array = array("<th>Id</th>", "<th>Actividad</th>", "<th>Sitio</th>", "<th>Mes</th>", "<th>Dia </th>", "<th>Comuna</th>", "<th>Año</th>","<th>0 a 5</th>", "<th>6 a 12</th>", "<th>13 a 17</th>","<th>18 a 28</th>","<th>28+</th>");
            return $array;
        case "vacacionesRecreativas":
            $array = array("<th>Id</th>", "<th>Actividad</th>", "<th>Sitio</th>", "<th>Mes</th>", "<th>Dia </th>", "<th>Comuna</th>", "<th>Año</th>","<th>0 a 5</th>", "<th>6 a 12</th>", "<th>13 a 17</th>","<th>18 a 28</th>","<th>28+</th>");
            return $array;
        case "eventosRecreativos":
            $array = array("<th>Id</th>", "<th>Actividad</th>", "<th>Sitio</th>", "<th>Mes</th>", "<th>Dia </th>", "<th>Comuna</th>", "<th>Año</th>","<th>0 a 5</th>", "<th>6 a 12</th>", "<th>13 a 17</th>","<th>18 a 28</th>","<th>28+</th>");
            return $array;
        case "superateintercolegiados":
            $array = array("<th>Id</th>", "<th>0 a 5</th>", "<th>6 a 12</th>", "<th>13 a 17</th>", "<th>Id Deporte</th>","<th>Deporte</th>");
            return $array;
            case "deporte":
            $array = array("<th>Id Deporte</th>", "<th>Nombre</th>");
            return $array;
         case "escuelasDeportivas":
            $array = array("<th>Id</th>", "<th>Comuna</th>","<th>Nombre</th>","<th>Id Deporte</th>","<th>Deporte</th>","<th>Id Escenario</th>","<th>Escenario</th>","<th>Cedula</th>","<th>Promotor</th>","<th>Estado</th>");
            return $array;


        case "d":
            echo "i es igual a 2";
            break;
        default :
            echo '<script>Error</script>';
    }
}
