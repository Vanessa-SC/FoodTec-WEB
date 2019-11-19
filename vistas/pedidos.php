<html lang="en">
<?php include_once 'layouts/header.php';?>

<body id="page-top">
    <?php include_once 'layouts/navbar.php'; ?>
    <div id="wrapper">
        <?php include_once 'layouts/sidebar.php'; ?>
        <div id="content-wrapper">
            <div class="container-fluid">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <span>PEDIDOS</span> <!-- Bienvenido/a, <?php echo $_SESSION["nombre"]; ?>-->
                    </li>
                </ol>
                <?php include_once 'layouts/tablaPedidos.php'; ?>
                <?php include_once 'layouts/historialPedidos.php'; ?>
                <!--        <?php include_once 'layouts/footer.php'; ?>-->
            </div>
        </div>

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
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
        <!-- Bootstrap core JavaScript-->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
        <!-- Page level plugin JavaScript-->
        <script src="../vendor/chart.js/Chart.min.js"></script>
        <script src="../vendor/datatables/jquery.dataTables.js"></script>
        <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>
        <!-- Custom scripts for all pages-->
        <script src="../js/sb-admin.min.js"></script>
        <!-- Demo scripts for this page-->
        <script src="../js/demo/datatables-demo.js"></script>
        <script src="../js/demo/chart-area-demo.js"></script>
</body>

</html>
