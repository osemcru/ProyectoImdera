<?php
include '../../Herramientas/Herramientas.php';
include '../../Herramientas/Conexion.php';
$nep = $_REQUEST['tabla'];
$eli = $_REQUEST['Eliminar'];
$edi = $_REQUEST['Editar'];
?>
<script src="../../vendor/jquery/jquery.min.js"></script>
<script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="../../vendor/datatables/jquery.dataTables.js"></script>
<script src="../../vendor/datatables/dataTables.bootstrap4.js"></script>
<script src="../../js/sb-admin.min.js"></script>
<script src="../../js/sb-admin-datatables.min.js"></script>


<div class="card mb-3" >
    <div class="card-header">
        <i class="fa fa-table"></i> Tabla de Registros</div>
    <div class="card-body">
        <div class="table-responsive" >
            <table class="table table-bordered" id="dataTable" width="100%"   cellspacing="0">
                <thead>
                    <tr>
                        <?php
                        $arrayColumnaH = Columnas($nep);
                        for ($index = 0; $index < count($arrayColumnaH); $index++) {
                            echo $arrayColumnaH[$index];
                        }
                        ?>
                        <?php
                        if ($edi == "SI") {
                            ?>
                            <th>Editar</th>    
                            <?php
                        }
                        ?>
                        <?php
                        if ($eli == "SI") {
                            ?>
                            <th>Eliminar</th>
                            <?php
                        }
                        ?>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <?php
                        $arrayColumnaF = Columnas($nep);
                        for ($index = 0; $index < count($arrayColumnaF); $index++) {
                            echo $arrayColumnaF[$index];
                        }
                        ?>
                        <?php
                        if ($edi == "SI") {
                            ?>
                            <th>Editar</th>    
                            <?php
                        }
                        ?>
                        <?php
                        if ($eli == "SI") {
                            ?>
                            <th>Eliminar</th>
                            <?php
                        }
                        ?>

                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    $array = listar(retornarSql($nep));
                    $datos = [];
                    $i = 0;
                    for ($index = 0; $index < count($array); $index++) {
                        ?>
                        <tr>
                            <?php
                            $datos[$i] = "";
                            for ($index1 = 0; $index1 < count($arrayColumnaH); $index1++) {
                                echo "<td>" . $array[$index][$index1] . "</td>";
                                $datos[$i] .= $array[$index][$index1] . "||";
                            }

                            $i++;
                            ?>

                            <?php
                            if ($edi == "SI") {
                                ?>
                                <td>
                                    <button  class="btn btn-warning " data-toggle="modal" data-target="#modalEdicion" onclick="SeleccionarDatos('<?php echo $datos[$index] ?>')">  <img src="../iconos/edit.svg" width="20" height="20"></button>
                                </td>
                                <?php
                            }
                            if ($eli == "SI") {
                                ?>
                                <td>
                                    <button class="btn btn-danger"  onclick="eliminar('<?php echo $datos[$index] ?>')">  <img src="../iconos/trash-alt.svg" width="20" height="20">  </button>
                                </td>

                                <?php
                            }
                            ?>
                        </tr>

                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
