<?php

include '../Herramientas/Herramientas.php';
include '../Herramientas/Conexion.php';

/* @var $_POST type */

try {
    $data = json_decode($_POST['array']);
    $primaria =$_POST['key'];
    $arrayAsignacion = listaVerdadera($data);
    $clase = $data[(count($data) - 2)];
    $arrayValor = variables($clase);
    switch ($data[count($data) - 1]) {
        case "1":


            $sql = "insert into " . $clase . " (";

            for ($index = 0; $index < (count($arrayValor) - 1); $index++) {
                $sql .= $arrayValor[$index] . ",";
            }
            $sql .= $arrayValor[count($arrayValor) - 1] . ") values(";

            for ($index1 = 0; $index1 < (count($arrayAsignacion) - 1); $index1++) {
                $sql .= "'" . $arrayAsignacion[$index1] . "',";
            }
            $sql .= "'" . $arrayAsignacion[count($arrayAsignacion) - 1] . "');";

            echo $result = mysqli_query(conexion(), $sql);
            //echo $sql;
            break;
        case "2":

            $sql = "update " . $clase . " set ";
            for ($index2 = 1; $index2 < count($arrayValor); $index2++) {
                $sql .= $arrayValor[$index2-1] . " = '" . $arrayAsignacion[$index2]."', ";
            }
            $sql .= $arrayValor[count($arrayValor)-1] . " = '" . $arrayAsignacion[count($arrayAsignacion)-1]."' ";
            $sql.=" where ".$primaria." = '".$arrayAsignacion[0]."' ";
            echo $result = mysqli_query(conexion(), $sql);
            //echo $sql;
            break;
        case "3":
            $sql ="delete from ".$clase." where ".$primaria." = '".$arrayAsignacion[0]."'";
            echo $result = mysqli_query(conexion(), $sql);
            break;
    }
} catch (Exception $ex) {
    echo 'Error' . $ex;
}

function listaVerdadera($data) {
    $lista = [];
    for ($index = 0; $index < (count($data) - 2); $index++) {
        $lista[$index] = $data[$index];
    }
    return $lista;
}
