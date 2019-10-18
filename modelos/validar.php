<?php
require_once 'conexionOO.php';

$usuario = $_POST['usuario'];
$contra  = $_POST['contra'];

    $buscarUsuario = "select estatus from usuario where email = '$usuario' and password = '$contra' ";
    $result = $conn->query($buscarUsuario) or die ($conn->error.__LINE__);

    $row_cnt = $result->num_rows;
    $reg = mysqli_fetch_assoc($result);

        if ( $row_cnt == 1 ) {
            session_start();
            $_SESSION["usuario"] = $usuario;
            echo $usuario;
            header('Location: ../vistas/home.php');
        } else {
            echo '<script>alert("Usuario y/o Contraseña Incorrectas"); </script>';
            header('Location: ../index.php');
        }
?>