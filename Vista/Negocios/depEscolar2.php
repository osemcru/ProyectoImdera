<?php
include '../../Herramientas/Herramientas.php';
include '../../Herramientas/Conexion.php';
include '../../Herramientas/Combo.php';
?>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>IMDERA</title>
        <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template-->     
        <link href="../../css/sb-admin.css" rel="stylesheet">
        <link href="../../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">


        <!--Funcionalidad-->
        <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../../Recursos/librerias/alertifyjs/css/alertify.css">
        <link rel="stylesheet" type="text/css" href="../../Recursos/librerias/alertifyjs/css/themes/default.css">

        <script src="../../Recursos/librerias/jquery-3.2.1.min.js"></script>
        <script src="../../Controlador/CtlEscuelaDeportiva.js"></script>
        <script src="../../Recursos/librerias/bootstrap/js/bootstrap.js"></script>
        <script src="../../Recursos/librerias/alertifyjs/alertify.js"></script>

        <script src="../../vendor/jquery/jquery.min.js"></script>
        <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>
        <!-- Custom scripts for all pages-->
        <script src="../../vendor/datatables/jquery.dataTables.js"></script>
        <script src="../../vendor/datatables/dataTables.bootstrap4.js"></script>
        <script src="../../js/sb-admin.min.js"></script>
        <script src="../../js/sb-admin-datatables.min.js"></script>


    </head>

    <body class="fixed-nav sticky-footer " id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg  fixed-top  " id="mainNav">
            <a class="navbar-brand" href="../index.php"> <img src="../iconos/Logo-Imdera.jpg" width="80" height="40px"> </a>
            <button id="lala" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"> <img src="../iconos/chevron-down.svg" width="20" height="20"> </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" >
                        <a id='a' class="nav-link" href="../index.php">
                            <i class="icono izquierda">  <img src="../iconos/chart-bar.svg" width="20" height="20">  </i>
                            <span class="nav-link-text">Consolidado General</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" >
                        <a id='a' class="nav-link" data-toggle="collapse"  href="#collapseComponents" data-parent="#exampleAccordion">
                            <i class="icono izquierda "> <img src="../iconos/cubes.svg" width="20" height="20"> </i>
                            <span class="nav-link-text">Programas </span>
                            <i class="icono derecha "> <img src="../iconos/chevron-down.svg" width="10" height="10"> </i>
                        </a>
                        <ul class="sidenav-second-level collapse" id="collapseComponents">
                            <li>
                                <a id='z' href="mantenimiento1.php">  <i class="icono izquierda"> <img src="../iconos/wrench.svg" width="20" height="20">  </i>Mantenimiento</a>
                            </li>
                            <li>
                                <a id='z' href="depEscolar1.php"><i class="icono izquierda "> <img src="../iconos/volleyball-ball.svg" width="20" height="20"> </i>Deporte Escolar</a>
                            </li>
                            <li>
                                <a id='z' href="recreandoComunidad1.php"><i class="icono izquierda"> <img src="../iconos/users.svg" width="20" height="20">  </i>Recreando Comunidad</a>
                            </li>
                            <li>
                                <a id='z' href="actividadF1.php"><i class="icono izquierda">  <img src="../iconos/heartbeat.svg " width="20" height="20">   </i>Actividad Fis y Habitos</a>
                            </li>
                            <li>
                                <a id='z' href="deporteSocialC1.php"><i class="icono izquierda"> <img src="../iconos/people-carry.svg" width="20" height="20">  </i>Dep Soc Comunitario</a>
                            </li>
                            <li>
                                <a id='z' href="apoyoAOrg1.php"><i class="icono izquierda"> <img src="../iconos/handshake.svg " width="20" height="20"> </i>Apoyo a Org</a>
                            </li>
                        </ul>

                    </li>

                    <li class="nav-item" data-toggle="tooltip" data-placement="right" >
                        <a id='a' class="nav-link " href="apoyosEconomicos.php" >
                            <i class="icono izquierda ">  <img src="../iconos/donate.svg" width="20" height="20">  </i>
                            <span class="nav-link-text">Apoyos Economicos</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right">
                        <a id='a' class="nav-link "  href="discapacidad.php">
                            <i class="icono izquierda"><img src="../iconos/accessible-icon.svg" width="20" height="20"> </i>
                            <span class="nav-link-text">Discapacidad</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" >
                        <a id='a' class="nav-link " href="becados.php">
                            <i class="icono izquierda "> <img src="../iconos/diagnoses.svg" width="20" height="20"> </i>
                            <span class="nav-link-text">Becados</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" >
                        <a id='a' class="nav-link" href="reportes.php">
                            <i class="icono izquierda ">  <img src="../iconos/chart-pie.svg" width="20" height="20">  </i>
                            <span class="nav-link-text">Reportes</span>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav sidenav-toggler">
                    <li id='z' class="nav-item">
                        <a class="nav-link text-center" id="sidenavToggler">
                            <i class="fa fa-fw fa-angle-left"></i>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">


                    <li class="nav-item">
                        <a id="lala" class="nav-link" data-toggle="modal" data-target="#exampleModal">
                            <i class="fas fa-sign-out-alt">  <img src="../iconos/sign-out-alt.svg" width="20" height="20">   </i>Cerrar sesion</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="content-wrapper">
            <div class="container-fluid">

                <h1>Deporte Escolar - Escuelas Deportivas</h1>
                <hr>
                <center>
                    <div class="row">
                        <div id="tipo1" class="col-md-4">  <a class="btn btn-primary" href="depEscolar1.php" >Consolidado del programa</a>  </div>
                        <br>
                        <br>
                        <div id="tipo1"  class="col-md-4">  <a class="btn btn-primary" href="depEscolar2.php" >Escuelas deportivas</a>  </div>
                        <br>
                        <br>
                        <div id="tipo1"  class="col-md-4">  <a class="btn btn-primary" href="depEscolar3.php" >Superate intercolegiados</a>  </div>
                        <br>
                        <br>
                        <div id="tipo1" class="col-md-4">  <a data-toggle="modal" class="btn btn-outline-success"   data-target="#modalRegistro" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Registrar Nuevo&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>  </div>
                        <br>
                    </div>


                </center>

                <br>
                <br>
                <div id="tablaEscuelasDeportivas">

                </div>
            </div>
            <!-- /.container-fluid-->
            <!-- /.content-wrapper-->
            <footer class="sticky-footer">
                <div class="container">
                    <div class="text-center">
                        <small> Copyright © Todos los derechos reservados </small>
                    </div>
                </div>
            </footer>
            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fa fa-angle-up"></i>
            </a>
            <!-- Logout Modal-->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">¿Esta seguro de que desea cerrar sesion?</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                            <a class="btn btn-primary" href="../iniciarSesion.php">Cerrar Sesion</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

    </div>
    <!-- Modal para edicion de datos -->
    <div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
                    <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <label>ID</label>
                        <input type="text" name="" id="idDeporteEscolarA" class="form-control input-sm" disabled="true">
                        <label>Comuna</label>
                        <select class="form-control input-sm"  id="comunaEscuelaDeporteA">
                            <option value="opcionComuna">Seleccione una comuna</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="Vereda">Vereda</option>
                        </select>
                        <label>Nombre del grupo</label>
                        <input type="text" name="" id="nombreEscuelaDeporteA" class="form-control input-sm" required="true">
                        <label>Deporte</label>
                        <select  id="idDeporteA" class="form-control input-sm">
                            <option value="opcionDeporte">Seleccione un deporte</option>
                            <?php
                            $datos = comboListar("deporte");
                            for ($index = 0; $index < count($datos); $index++) {
                                for ($index1 = 0; $index1 < 1; $index1++) {
                                    ?>
                                    <option value="<?php echo $datos[$index][$index1] ?>">
                                        <?php echo $datos[$index][$index1 + 1] ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                        <label>Escenario</label>
                        <select  id="idEscenarioA" class="form-control input-sm">
                            <option value="opcionEscenario">Seleccione un escenario</option>
                            <?php
                            $datos = comboListar("escenario");
                            for ($index = 0; $index < count($datos); $index++) {
                                for ($index1 = 0; $index1 < 1; $index1++) {
                                    ?>
                                    <option value="<?php echo $datos[$index][$index1] ?>">
                                        <?php echo $datos[$index][$index1 + 1] ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                        <label>Promotor</label>
                        <select  id="idPromotorA" class="form-control input-sm">
                            <option value="opcionPromotor">Seleccione un promotor</option>
                            <?php
                            $datos = comboListar("promotorEscuela");
                            for ($index = 0; $index < count($datos); $index++) {
                                for ($index1 = 0; $index1 < 1; $index1++) {
                                    ?>
                                    <option value="<?php echo $datos[$index][$index1] ?>">
                                        <?php echo $datos[$index][$index1] . " - " . $datos[$index][$index1 + 1] ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                        <label>Funcionalidad</label>
                        <select class="form-control input-sm"  id="DeportefuncionA">
                            <option value="opcionFuncion">Seleccione la funcionalidad</option>
                            <option value="Habilitado">Habilitado</option>
                            <option value="Deshabilitado">Deshabilitado</option>
                        </select>
                    </form>     
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="cancelar" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">Actualizar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalRegistro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
                    <h4 class="modal-title" id="myModalLabel">Registrar Datos</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <label>Comuna</label>
                        <select class="form-control input-sm"  id="comunaEscuelaDeporte">
                            <option value="opcionComuna">Seleccione una comuna</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="Vereda">Vereda</option>
                        </select>
                        <label>Nombre del grupo</label>
                        <input type="text" name="" id="nombreEscuelaDeporte" class="form-control input-sm" required="true">
                        <label>Deporte</label>
                        <select  id="idDeporte" class="form-control input-sm">
                            <option value="opcionDeporte">Seleccione un deporte</option>
                            <?php
                            $datos = comboListar("deporte");
                            for ($index = 0; $index < count($datos); $index++) {
                                for ($index1 = 0; $index1 < 1; $index1++) {
                                    ?>
                                    <option value="<?php echo $datos[$index][$index1] ?>">
                                        <?php echo $datos[$index][$index1 + 1] ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                        <label>Escenario</label>
                        <select  id="idEscenario" class="form-control input-sm">
                            <option value="opcionEscenario">Seleccione un escenario</option>
                            <?php
                            $datos = comboListar("escenario");
                            for ($index = 0; $index < count($datos); $index++) {
                                for ($index1 = 0; $index1 < 1; $index1++) {
                                    ?>
                                    <option value="<?php echo $datos[$index][$index1] ?>">
                                        <?php echo $datos[$index][$index1 + 1] ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                        <label>Promotor</label>
                        <select  id="idPromotor" class="form-control input-sm">
                            <option value="opcionPromotor">Seleccione un promotor</option>
                            <?php
                            $datos = comboListar("promotorEscuela");
                            for ($index = 0; $index < count($datos); $index++) {
                                for ($index1 = 0; $index1 < 1; $index1++) {
                                    ?>
                                    <option value="<?php echo $datos[$index][$index1] ?>">
                                        <?php echo $datos[$index][$index1] . " - " . $datos[$index][$index1 + 1] ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="cancelar" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-warning"  id="registradatos" data-dismiss="modal">Registrar</button>

                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#tablaEscuelasDeportivas').load('../Tablas/tablaEscenario.php', {tabla: 'escuelasDeportivas', Eliminar: 'NO', Editar: 'SI'});
        });
    </script>
    <script>
        $('#toggleNavPosition').click(function () {
            $('body').toggleClass('fixed-nav');
            $('nav').toggleClass('fixed-top static-top');
        });

    </script>
    <!-- Toggle between dark and light navbar-->
    <script>
        $('#toggleNavColor').click(function () {
            $('nav').toggleClass('navbar-dark navbar-light');
            $('nav').toggleClass('bg-dark bg-light');
            $('body').toggleClass('bg-dark bg-light');
        });

    </script>

    <script type="text/javascript">registradatos
        $(document).ready(function () {
            $('#registradatos').click(function () {
                comuna = $('#comunaEscuelaDeporte').val();
                nombre = $('#nombreEscuelaDeporte').val();
                deporte = $('#idDeporte').val();
                escenario = $('#idEscenario').val();
                promotor = $('#idPromotor').val();
                if (comuna === "opcionComuna" || nombre === "" || deporte === "opcionDeporte"
                        || escenario === "opcionEscenario" || promotor === "opcionPromotor") {
                    alertify.error("Por favor llene todos los campos");
                } else {
                    lista = [comuna, nombre, deporte, escenario, promotor, "Habilitado", "escuelasdeportivas", "1"];
                    agregardatosEscuelaDeportiva(lista);
                }
            });

        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#actualizadatos').click(function () {
                id = $('#idDeporteEscolarA').val();
                comuna = $('#comunaEscuelaDeporteA').val();
                nombre = $('#nombreEscuelaDeporteA').val();
                deporte = $('#idDeporteA').val();
                escenario = $('#idEscenarioA').val();
                promotor = $('#idPromotorA').val();
                funcion = $('#DeportefuncionA').val();
                if (comuna === "opcionComuna" || nombre === "" || deporte === "opcionDeporte"
                        || escenario === "opcionEscenario" || promotor === "opcionPromotor"
                        || funcion === "opcionFuncion") {
                    alertify.error("Por favor llene todos los campos");
                } else {
                    lista = [id,comuna, nombre, deporte, escenario, promotor, funcion, "escuelasdeportivas", "2"];
                    agregardatosEscuelaDeportiva(lista);
                }
            });

        });
    </script>



</body>

</html>





