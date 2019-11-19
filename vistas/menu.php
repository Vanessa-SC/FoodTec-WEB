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
                        
                    </li>
                </ol>
                 <div class="content">



            <table>
                <tr>
                    <td><button style="padding:20%;border: rgb(320,320,320) 20px solid; FONT-SIZE: 15pt" type="button" id="agregar_btn" class="btnAct" onclick=" location.href='agregar.php' ">Agregar producto</button></td>

                    <td><button  style="padding:20%;border: rgb(320,320,320) 20px solid; margin-top:30%; FONT-SIZE: 15pt" type="button" id="eliminar_btn" class="btnAct" onclick=" location.href='eliminar.php'  ">Eliminar producto</button></td>

                    <td><button style="padding:20%;border: rgb(320,320,320) 20px solid; FONT-SIZE: 15pt" type="button" id="modificar_btn" class="btnAct" onclick=" location.href='modificar.php' ">Modificar Producto</button></td>
                </tr>
            </table>
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