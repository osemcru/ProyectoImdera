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
        <script src="../../Controlador/CtlVacacionesRecreativas.js"></script>
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
                                <a id='z' href="mantenimiento.php">  <i class="icono izquierda"> <img src="../iconos/wrench.svg" width="20" height="20">  </i>Mantenimiento</a>
                            </li>
                            <li>
                                <a id='z' href="deporteEscolar.php"><i class="icono izquierda "> <img src="../iconos/volleyball-ball.svg" width="20" height="20"> </i>Deporte Escolar</a>
                            </li>
                            <li>
                                <a id='z' href="recreandoComunidad.php"><i class="icono izquierda"> <img src="../iconos/users.svg" width="20" height="20">  </i>Recreando Comunidad</a>
                            </li>
                            <li>
                                <a id='z' href="actividadFisicaYHabitos.php"><i class="icono izquierda">  <img src="../iconos/heartbeat.svg " width="20" height="20">   </i>Actividad Fis y Habitos</a>
                            </li>
                            <li>
                                <a id='z' href="deporteSocialComunitario.php"><i class="icono izquierda"> <img src="../iconos/people-carry.svg" width="20" height="20">  </i>Dep Soc Comunitario</a>
                            </li>
                            <li>
                                <a id='z' href="apoyoAOrganizacionesDeportivas.php"><i class="icono izquierda"> <img src="../iconos/handshake.svg " width="20" height="20"> </i>Apoyo a Org</a>
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

                <h1>Recreando Comunidad - Vacaciones Recreativas</h1>
                <hr>
                <center>
                    <div class="row">
                        <div id="tipo1" class="col-md-4" >  <a class="btn btn-primary" href="recreandoComunidad.php" >&nbsp;&nbsp;&nbsp;&nbsp;Consolidado del programa&nbsp;&nbsp;&nbsp;</a>  </div>
                        <br>
                        <br>
                        <div id="tipo1"  class="col-md-4">  <a class="btn btn-primary" href="programaAdultoMayor.php" >&nbsp;&nbsp;&nbsp;Programa del adulto mayor&nbsp;&nbsp;&nbsp;</a>  </div>
                        <br>
                        <br>
                        <div id="tipo1"  class="col-md-4">  <a class="btn btn-primary" href="recreacionEnComunas.php" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Recreación en comunas&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>  </div>
                        <br>
                        <br>
                        <div id="tipo1"  class="col-md-4">  <a class="btn btn-primary" href="visitasAEscenarios.php" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Visitas a escenarios&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>  </div>
                        <br>
                        <br>
                        <div id="tipo1"  class="col-md-4">  <a class="btn btn-primary" href="apoyoCentrosPenitenciarios.php" >Apoyo a centros penitenciarios</a>  </div>
                        <br>
                        <br>
                        <div id="tipo1"  class="col-md-4">  <a class="btn btn-primary" href="mesDeLaNinez.php" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mes de la niñez&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>  </div>
                        <br>
                        <br>
                        <div id="tipo1"  class="col-md-4">  <a class="btn btn-primary" href="vacacionesRecreativas.php" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vacaciones recreativas&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>  </div>
                        <br>
                        <br>
                        <div id="tipo1"  class="col-md-4">  <a class="btn btn-primary" href="eventosRecreativos.php" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Eventos recreativos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>  </div>
                        <br>
                        <br>
                        <div id="tipo1"  class="col-md-4">  <a class="btn btn-primary" href="moviteca.php" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Moviteca&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>  </div>
                        <br>
                        <br>
                        <div id="tipo1" class="col-md-4">  <a data-toggle="modal" class="btn btn-outline-success"   data-target="#modalRegistro" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Registrar Nuevo&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>  </div>
                    </div>


                </center>

                <br>
                <br>






                <div id="tablaVacacionesRecreativas" >
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





    <div class="modal fade" id="modalEliminacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ¿Esta seguro de que desea eliminar este registro?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Continuar</button>
                </div>
            </div>
        </div>
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
                        <input type="text" name="" id="idVisitaEscenarios" class="form-control input-sm" disabled="disable">
                        <label>Nombre de la organizacion</label>
                        <input type="text" name="" id="nombreA" class="form-control input-sm">
                        <label>Nombre del escenario</label>
                        <input type="text" name="" id="lugarA" class="form-control input-sm">
                        <label>Mes</label>
                        <input type="number" name="" id="mesA" class="form-control input-sm">
                        <label>Dia</label>
                        <input type="number" name="" id="diaA" class="form-control input-sm">
                        <label>Año</label>
                        <input type="number" name="" id="anoA" class="form-control input-sm">
                        <label>Cero a Cinco</label>
                        <input type="number" name="" id="ceroCincoA" class="form-control input-sm">
                        <label>Seis a Doce</label>
                        <input type="number" name="" id="seisDoceA" class="form-control input-sm">
                        <label>Trece a Diecisiete</label>
                        <input type="number" name="" id="treceDiecisieteA" class="form-control input-sm">
                        <label>Dieciocho a Ventiocho</label>
                        <input type="number" name="" id="dieciochoVentiochoA" class="form-control input-sm">
                        <label>Ventiocho +</label>
                        <input type="number" name="" id="ventiochoMasA" class="form-control input-sm">
                        <label>comuna</label>
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
                        <label>Nombre de la actividad</label>
                        <input type="text" name="" id="nombre" class="form-control input-sm">
                        <label>Sitio</label>
                        <input type="text" name="" id="lugar" class="form-control input-sm">
                        <label>Mes</label>
                        <input type="number" name="" id="mes" class="form-control input-sm">
                        <label>Dia</label>
                        <input type="number" name="" id="dia" class="form-control input-sm">
                        <label>Año</label>
                        <input type="number" name="" id="ano" class="form-control input-sm">
                        <label>Cero a Cinco</label>
                        <input type="number" name="" id="ceroCinco" class="form-control input-sm">
                        <label>Seis a Doce</label>
                        <input type="number" name="" id="seisDoce" class="form-control input-sm">
                        <label>Trece a Diecisiete</label>
                        <input type="number" name="" id="treceDiecisiete" class="form-control input-sm">
                        <label>Dieciocho a Ventiocho</label>
                        <input type="number" name="" id="dieciochoVentiocho" class="form-control input-sm">
                        <label>Ventiocho +</label>
                        <input type="number" name="" id="ventiochoMas" class="form-control input-sm">
                        <label>comuna</label>
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
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="cancelar" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-warning"  id="registradatos" data-dismiss="modal">Registrar</button>

                </div>
            </div>
        </div>
    </div>




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
            $('#tablaVacacionesRecreativas').load('../Tablas/tablaEscenario.php', {tabla: 'vacacionesRecreativas', Eliminar: 'SI', Editar: 'SI'});
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#registradatos').click(function () {
                nombre = $('#nombre').val();
                lugar = $('#lugar').val();
                mes = $('#mes').val();
                dia = $('#dia').val();
                ano = $('#ano').val();
                cerocinco = $('#ceroCinco').val();
                seisdoce = $('#seisDoce').val();
                trecediecisiete = $('#treceDiecisiete').val();
                dieciochoventiocho = $('#dieciochoVentiocho').val();
                ventiochomas = $('#ventiochoMas').val();
                comuna = $('#comuna').val();
                tipoevento = 'vacacionesRecreativas';
                if (nombre === "" || lugar === "" || dia === "" || mes === "" || ano === "" || cerocinco === "" || seisdoce === "" || trecediecisiete === "" || dieciochoventiocho === "" ||
                        ventiochomas === "" || comuna === "opcionComuna") {
                    alertify.error("Por favor llene todos los campos");
                } else {
                    lista = [nombre, lugar, mes, dia, comuna, ano, cerocinco, seisdoce, trecediecisiete, dieciochoventiocho, ventiochomas, tipoevento, "eventosrecreando", "1"];
                    agregardatos(lista);
                }
            });

        });
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#actualizadatos').click(function () {
                id =  $('#idVisitaEscenarios').val();
                nombre = $('#nombreA').val();
                lugar = $('#lugarA').val();
                mes = $('#mesA').val();
                dia = $('#diaA').val();
                ano = $('#anoA').val();
                cerocinco = $('#ceroCincoA').val();
                seisdoce = $('#seisDoceA').val();
                trecediecisiete = $('#treceDiecisieteA').val();
                dieciochoventiocho = $('#dieciochoVentiochoA').val();
                ventiochomas = $('#ventiochoMasA').val();
                comuna = $('#comunaA').val();
                tipoevento = 'vacacionesRecreativas';
                if (nombre === "" || lugar === "" || dia === "" || mes === "" || ano === "" || cerocinco === "" || seisdoce === "" || trecediecisiete === "" || dieciochoventiocho === "" ||
                        ventiochomas === "" || comuna === "opcionComuna") {
                    alertify.error("Por favor llene todos los campos");
                } else {
                    lista = [id,nombre, lugar, mes, dia, comuna, ano, cerocinco, seisdoce, trecediecisiete, dieciochoventiocho, ventiochomas, tipoevento, "eventosrecreando", "2"];
                    agregardatos(lista);
                }
            });

        });
    </script>

</body>

</html>





