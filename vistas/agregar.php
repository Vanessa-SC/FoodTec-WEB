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
                        Agregar Producto
                    </li>
                </ol>

                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <table>
                            <tr>
                                <td> <label for="nombre">Nombre:</label>
                                </td>
                                <td> <input type="text" class="form-control" name="nombre" placeholder="Ingresa el nombre del producto">
                                </td>
                            </tr>


                            <tr>
                                <td> <label for="precio">Precio:</label>
                                </td>
                                <td> <input type="text" class="form-control" name="precio" placeholder="Ingresa el precio del producto">
                                </td>
                            </tr>
                            
                            <tr>
                                <td> <label for="descripcion">Descripción:</label>
                                </td>
                                <td> <input type="text" class="form-control" name="descripcion" placeholder="descripción del producto">
                                </td>
                            </tr>
                           
                            <tr>
                                <td> <label for="imagen">Imagen:</label></td> 
                                <td> <input type="file"></td>
                                 
                            </tr>
                        </table>
                        
                        <center>
                        <button >Registrar</button>
                        </center>
                        
                    </li>
                </ol>


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
