<?php
    
    require_once 'conexionOO.php';
    $user=$_POST["username"];
    $pass = $_POST["contrasena"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellidos"];
    $tipoU = $_POST["tipoUser"];

    
    $sql = "INSERT INTO usuarios(nombre,apellido,usuario,tipoUsuario,clave) values('$nombre','$apellido','$user','$tipoU',MD5('$pass')) ";

    if(mysqli_query($conn,$sql)) {
        $respuesta = "si";
        header('Location: ../views/login.php');
    } else {
        $respuesta = "Error: " .$sql."<br>".mysqli_error($conn);
    }

    mysqli_close($conn);

?>
