<!DOCTYPE html>
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
        <script src="../../Controlador/CtlEscenario.js"></script>
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

                <h1>Gestion Escenarios</h1>
                <hr>
                <center>
                    <div class="row">

                        <div id="tipo1" class="col-md-4">  <a data-toggle="modal" class="btn btn-outline-success"   data-target="#modalRegistro" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Registrar Nuevo&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>  </div>
                        <br>
                        <br>
                        <div id="tipo1" class="col-md-4">  <a class="btn btn-primary" href="mantenimiento1.php" >Gestion de mantenimiento</a>  </div>
                        <br>

                    </div>
                </center>

                <br>
                <br>
                <!-- Example DataTables Card-->
                <div id="tablaEscenario">
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
                        <input type="text" name="" id="idEscenarioA" class="form-control input-sm" disabled="true">
                        <label>Nombre</label>
                        <input type="text" name="" id="nombreEscenarioA" class="form-control input-sm">
                        <label>tipo</label>
                        <select class="form-control input-sm" id="tipoA" >
                            <option value="opcionTipo">Seleccione una tipo</option>
                            <option value="Estadio">Estadio</option>
                            <option value="Cancha">Cancha</option>
                            <option value="Polideportivo">Polideportivo</option>
                            <option value="Coliseo">Coliseo</option>
                        </select>
                        <label>Comuna</label>
                        <select class="form-control input-sm"  id="comunaA">
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
                        <label>Clase</label>
                        <select class="form-control input-sm"  id="claseA">
                            <option value="opcionClase">Seleccione una clase</option>
                            <option value="Menor">Menor</option>
                            <option value="Mayor">Mayor</option>
                        </select>
                        <label>Funcion</label>
                        <select class="form-control input-sm"  id="funcionA">
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
                        <label>Nombre</label>
                        <input type="text" name="" id="nombreEscenario" class="form-control input-sm" required="true">
                        <label>tipo</label>
                        <select class="form-control input-sm" id="tipo" required="true" >
                            <option value="opcionTipo">Seleccione una tipo</option>
                            <option value="Estadio">Estadio</option>
                            <option value="Cancha">Cancha</option>
                            <option value="Polideportivo">Polideportivo</option>
                            <option value="Coliseo">Coliseo</option>
                        </select>
                        <label>Comuna</label>
                        <select class="form-control input-sm"  id="comuna">
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
                        <label>Clase</label>
                        <select class="form-control input-sm"  id="clase">
                            <option value="opcionClase">Seleccione una clase</option>
                            <option value="Menor">Menor</option>
                            <option value="Mayor">Mayor</option>
                        </select>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="cancelar" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-warning"  id="registradatos" data-dismiss="modal">Registrar</button>

                    </div>
                </div>
            </div>
        </div>



        <!-- Bootstrap core JavaScript-->
        <!-- Custom scripts for this page-->
        <!-- Toggle between fixed and static navbar-->
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

        <script type="text/javascript">
            $(document).ready(function () {
                $('#tablaEscenario').load('../Tablas/tablaEscenario.php', {tabla: 'escenario', Eliminar: 'NO', Editar: 'SI'});
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#registradatos').click(function () {
                    nombre = $('#nombreEscenario').val();
                    tipo = $('#tipo').val();
                    comuna = $('#comuna').val();
                    clase = $('#clase').val();
                    if (nombre === "" || tipo === "opcionTipo" || comuna === "opcionComuna"
                            || clase === "opcionClase") {
                        alertify.error("Por favor llene todos los campos");
                    } else {
                        lista = [nombre, tipo, clase, comuna, "Habilitado", "escenario", "1"];
                        agregardatos(lista);
                    }
                });

            });
        </script>

        <script type="text/javascript">
            $(document).ready(function () {
                $('#actualizadatos').click(function () {
                    id = $('#idEscenarioA').val();
                    nombre = $('#nombreEscenarioA').val();
                    tipo = $('#tipoA').val();
                    comuna = $('#comunaA').val();
                    clase = $('#claseA').val();
                    habilitado = $('#funcionA').val();
                    if (nombre==="" || tipo === "opcionTipo" || comuna === "opcionComuna"
                            || clase === "opcionClase" || habilitado==="opcionFuncion") {
                        alertify.error("Por favor llene todos los campos");
                    } else {
                        lista = [id, nombre, tipo, clase, comuna, habilitado, "escenario", "2"];
                        agregardatos(lista);
                    }
                });

            });
        </script>



</body>

</html>





