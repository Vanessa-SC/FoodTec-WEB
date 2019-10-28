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
        <link rel="stylesheet" href="/../Foodtec-WEB/css/ESTILOS.CSS">
    </head>

    <body id="page-top">
        <?php include_once 'layouts/navbar.php'; ?>
            <div id="wrapper">
                <?php include_once 'layouts/sidebar.php'; ?>
                    <div id="content-wrapper">
                        <div class="container-fluid">

                            <div class="card breadcrumb" style="width:400px">
                                <img class="card-img-top" src="../img/user.png" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title"> <center><span> <?php echo $_SESSION["nombre"]; ?></span></center></h4>
                                </div>
                            </div>
                        </div>
                        <table class="table">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col" colspan="2">Dirección</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Colonia: </td>
                              <td>Calle: </td>
                            </tr>
                    </div>
            </div>
            <?php include_once 'layouts/footer.php'; ?>
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