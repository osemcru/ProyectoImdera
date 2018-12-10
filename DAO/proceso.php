<?php

require('conexion.php');
sleep(2);

session_start();

$usu = filter_input(INPUT_POST, 'usuariolg');
$pass = filter_input(INPUT_POST, 'passlg');
$usuarios = $mysqli->query("Select *
                        From usuario Where emailUsuario='" . $usu . "'
                      AND ContrasenaUsuario='" . $pass . "'");



if (($usuarios->num_rows == 1)):
    $datos = $usuarios->fetch_assoc();
    echo json_encode(array('error' => false, 'tipo' => $datos['tipoUsuario']));

    $_SESSION['usuarios'] = $datos['tipoUsuario'];
    $_SESSION['name'] = $datos['nombre'];



    if ($_SESSION['usuarios'] == "Coordinador" || $_SESSION['usuarios'] == "coordinador"):
        $_SESSION['programa'] = strtolower($datos['programa']);
        $_SESSION['subprograma'] = strtolower($datos['subprograma']);

    elseif ($_SESSION['usuarios'] == "Promotor" || $_SESSION['usuarios'] == "promotor"):
        $_SESSION['cedula'] = $datos['cedulaUsuario'];
        $grupos = $mysqli->query("Select * From usuario u join gruposrecreando g on u.cedulaUsuario = g.Usuario_cedulaUsuario where u.cedulaUsuario = '" . $_SESSION['cedula'] . "';");

    endif;



else:
    echo json_encode(array('error' => true));
endif;
$mysqli->close();
?>


