<?php

function comboListar($tabla) {
    switch ($tabla) {
        case "escenario":

            $sql = "select idEscenario,nombre from escenario";

            return listar($sql);

        case "deporte":

            $sql = "SELECT idDeportes,nombre from deporte";

            return listar($sql);

            case "promotorEscuela":

            $sql = "SELECT `cedulaUsuario`,`nombre` FROM `usuario` WHERE subprograma='Escuelas Deportivas'";

            return listar($sql);
        default:
            break;
    }
}
