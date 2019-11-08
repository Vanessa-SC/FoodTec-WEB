<link href="../css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery/jquery-3.4.1.js"></script>

<head>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    <link rel="stylesgeet" href="https://rawgit.com/creativetimofficial/material-kit/master/assets/css/material-kit.css">
</head>
<?php include_once 'layouts/header.php'; ?>

<body class="profile-page" onload="ocultar()">
    <nav class="navbar navbar-expand navbar-dark bg-orange static-top">
        <a class="navbar-brand mr-1" href="/../Foodtec-WEB/vistas/home.php">FoodTec!</a>

        <!-- Navbar -->
        <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle float-right" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas large fa-user-circle fa-fw" style="color:#FFFFFF; font-size: 30px;"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Cerrar sesi&oacute;n</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="wrapper">
        <?php include_once 'layouts/sidebar.php'; ?>
        <div id="contenido" style="margin:10px;">
            <div class="page-header header-filter" data-parallax="true" style="background-image:url('../img/Banner.jpg');"></div>
            <div class="main main-raised">
                <!--               <input type="submit" class="botonimagen rounded-circle  " value="">-->

                <div class="profile-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 ml-auto mr-auto">
                                <div class="profile">
                                    <div class="avatar">
                                        <img src="../img/user.png" alt="Circle Image" class="img-raised rounded-circle img-fluid">
                                    </div>
                                    <div class="name">
                                        <h3 class="title"><?php echo $_SESSION['nombre']; ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form id="formulario_mod" method="post" action="modelos/actualizarInfo.php">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="telefonoMod">Telefono</label>
                                    <input type="text" class="form-control" id="telefonoMod" placeholder="Telefono">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="direccionMod">Direccion</label>
                                    <input type="text" class="form-control" id="direccionMod" placeholder="Colonia.. calle.. numero..">
                                </div>
                            </div>
                        </form>
                        <button type="button" class="btnAct">Actualizar info.</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<style>
    .btnAct {
        position: relative;
        margin: 0 auto;
        border-radius: 20px !important;
        text-decoration: none;
        padding: 4px 10px;
        padding: 5px 1.5em;
        border: 0;
        text-transform: capitalize;
        background: #ff5b00;
        color: #fff;
        transition: box-shadow .2s cubic-bezier(.4, 0, 1, 1), background-color .2s cubic-bezier(.4, 0, .2, 1);
        will-change: box-shadow, transform;
    }

    .btnAct:hover {
        position: relative;
        margin: 0 auto;
        border-radius: 20px !important;
        text-decoration: none;
        padding: 4px 10px;
        padding: 5px 1.5em;
        text-transform: capitalize;
        background: #eee;
        color: #ff5b00;
        transition: box-shadow .2s cubic-bezier(.4, 0, 1, 1), background-color .2s cubic-bezier(.4, 0, .2, 1);
        will-change: box-shadow, transform;
    }

</style>
