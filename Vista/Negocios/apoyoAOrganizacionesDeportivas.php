
<?php
$connect = mysqli_connect("localhost", "root", "", "testing");
$query = "SELECT gender, count(*) as number FROM tbl_employee GROUP BY gender";
$result = mysqli_query($connect, $query);
?>  

<?php
$connecta = mysqli_connect("localhost", "root", "", "testing");
$quera = "SELECT gender, count(*) as number FROM tbl_employee GROUP BY gender";
$resulta = mysqli_query($connecta, $quera);
?> 


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>IMDERA</title>
        <!-- Bootstrap core CSS-->
        <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Custom styles for this template-->
        <link href="../../css/sb-admin.css" rel="stylesheet">


    </head>

    <body class="fixed-nav sticky-footer " id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg  fixed-top  " id="mainNav">
            <a class="navbar-brand" href="../index.php"><img src="../iconos/Logo-Imdera.jpg" width="80" height="40"></a>
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
                            <span  class="nav-link-text">Programas</span>
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
                            <i class="fas fa-sign-out-alt"> <img src="../iconos/sign-out-alt.svg" width="20" height="20">  </i>Cerrar sesion</a>
                    </li>
                </ul>
            </div>
        </nav>
          <div class="container-fluid">
        <div class="content-wrapper">
          


                <h1>Apoyo a Organizaciones Deportivas - Consolidado del Programa</h1>
                <hr>
                <center>
                    <div class="row">
                        <div id="tipo1" class="col-md-4">  <a class="btn btn-primary" href="apoyoAOrganizacionesDeportivas.php" >Consolidado del programa</a>  </div>
                        <br>
                        <br>
                        <div id="tipo1"  class="col-md-4">  <a class="btn btn-primary" href="prestamoDeEscenarios.php" >Prestamo de escenarios</a>  </div>
                        <br>
                        <br>
                        <div id="tipo1"  class="col-md-4">  <a class="btn btn-primary" href="apoyoAOrganismosDeportivos.php" >Apoyo a organismos deportivos</a>  </div>
                        <br>
                        <br>
                        <div id="tipo1"  class="col-md-4">  <a class="btn btn-primary" href="eventosDeportivos.php" >Eventos deportivos</a>  </div>
                        <br>
                    </div>


                
                    <div    id="piechart"  style="width: 100%; height: 500px;"></div>




                    <div  id="columnchart_values"  style="width: 80%; height: 500px;"></div>
                </center>

                        <!-- Example DataTables Card-->
                        <div class="card mb-3">
                            <div class="card-header">
                                <i class="fa fa-table"></i> Tabla de Registros</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>$170,750</td>
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                            </tr>
                                            <tr>
                                                <td>Cedric Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                            </tr>
                                            <tr>
                                                <td>Donna Snider</td>
                                                <td>Customer Support</td>
                                                <td>New York</td>
                                                <td>27</td>
                                                <td>2011/01/25</td>
                                                <td>$112,000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
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
            <!-- Bootstrap core JavaScript-->
            <script src="../../vendor/jquery/jquery.min.js"></script>
            <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- Core plugin JavaScript-->
            <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>
            <!-- Custom scripts for all pages-->
            <script src="../../js/sb-admin.min.js"></script>
            <!-- Custom scripts for this page-->
            <!-- Toggle between fixed and static navbar-->



            <!-- Core plugin JavaScript-->

            <!-- Page level plugin JavaScript-->
            <script src="../../vendor/chart.js/Chart.min.js"></script>
            <script src="../../vendor/datatables/jquery.dataTables.js"></script>
            <script src="../../vendor/datatables/dataTables.bootstrap4.js"></script>
            <!-- Custom scripts for all pages-->
            <!-- Custom scripts for this page-->
            <script src="../../js/sb-admin-datatables.min.js"></script>
            <script src="../../js/sb-admin-charts.min.js"></script>
            <script src="../../js/main.js"></script>

            <script type="text/javascript" src="../../js/gstaticloader.js"></script>



            <script type="text/javascript">
                google.charts.load('current', {'packages': ['corechart']});
                google.charts.setOnLoadCallback(drawChat);
                function drawChat()
                {
                    var data = google.visualization.arrayToDataTable([
                        ['Gender', 'Number'],
<?php
while ($row = mysqli_fetch_array($result)) {
    echo "['" . $row["gender"] . "', " . $row["number"] . "],";
}
?>
                    ]);
                    var options = {
                        title: "Percentage of Male and Female Employee",

                        bar: {groupWidth: "95%"},
                        legend: {position: "none"},
                        //is3D:true,  
                        pieHole: 0.4

                    };
                    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                    chart.draw(data, options);

                }

                $(window).resize(function () {
                    drawChat();
                });

            </script> 


            <script type="text/javascript">

                google.charts.load("current", {packages: ['corechart']});
                google.charts.setOnLoadCallback(drawChart);
                function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                        ['Gender', 'Number'],
<?php
while ($rowa = mysqli_fetch_array($resulta)) {
    echo "['" . $rowa["gender"] . "', " . $rowa["number"] . "],";
}
?>
                    ]);

                    var options = {
                        title: "Grafica Reporte de Ingresos Anual",

                        bar: {groupWidth: "95%"},
                        legend: {position: "none"}
                    };
                    var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
                    chart.draw(data, options);



                }
                $(window).resize(function () {
                    drawChart();
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
        
  
</body>

</html>
