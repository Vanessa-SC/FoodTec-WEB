<html lang="en">
<?php session_start();?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Perfil</title>
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="../css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/icono.min.css">
    <link rel="stylesheet" href="../css/ESTILOS.CSS">
</head>

<body id="page-top">
    <?php include_once 'layouts/navbar.php'; ?>
    <div id="wrapper">
        <?php include_once 'layouts/sidebar.php'; ?>
        <div id="content-wrapper" style="margin:10px;">
            <div class="container-fluid">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th class="encabezado" scope="col">Info.</th>
                            <th class="bg-secondary text-light" scope="col" colspan="2">Direccion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th rowspan="4" scope="row" class="bg-light"><img src="../img/user.png" style="width:200px;"></th>
                            <!--      <th> <?php echo 'nombre'; ?></th>-->
                            <td>Colonia:</td>
                            <td colspan="2">Colonia desconocida</td>
                        </tr>
                        <tr>
                            <td>Calle:</td>
                            <td colspan="2">Unknown</td>
                        </tr>
                        <tr>
                            <td class="no-borde"></td>
                            <td class="no-borde"></td>
                        </tr>
                        <tr>
                            <td class="no-borde"></td>
                            <td class="no-borde"></td>
                        </tr>
                        <tr class="thead-light" style="text-align:center;">
                            <th> <?php echo $_SESSION['nombre']; ?></th>
                        <th class="bg-white" colspan="2">
                            </th>
                        </tr>

                    </tbody>
                </table>


            </div>
            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">¿Cerrar sesi&oacute;n?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">¿Est&aacute; seguro de cerrar sesi&oacute;n?</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                            <a class="btn btn-primary" href="../modelos/logout.php">Aceptar</a>
                        </div>
                    </div>
                </div>
            </div>

            <script src="../vendor/jquery/jquery.min.js"></script>
            <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
            <script src="../vendor/chart.js/Chart.min.js"></script>
            <script src="../vendor/datatables/jquery.dataTables.js"></script>
            <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>
            <script src="../js/sb-admin.min.js"></script>
            <script src="../js/demo/datatables-demo.js"></script>
            <script src="../js/demo/chart-area-demo.js"></script>
</body>

</html>
