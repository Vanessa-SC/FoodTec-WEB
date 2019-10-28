<?php
require_once 'conexionOO.php';

$usuario = $_POST['usuario'];
$contra  = $_POST['contra'];

    $buscarUsuario = "select * from usuario where email = '$usuario' and password = '$contra' ";
    $result = $conn->query($buscarUsuario) or die ($conn->error.__LINE__);

    $row_cnt = $result->num_rows;
    $reg = mysqli_fetch_assoc($result);

        if ( $row_cnt == 1 ) {
            session_start();
            $respuesta = "si";
            $_SESSION["email"] = $usuario;
            $_SESSION["nombre"] = $reg["nombre"];
        } else {
            $respuesta = "Usuario y/o contraseña inconrrectos";
        }

    echo $respuesta;
?>