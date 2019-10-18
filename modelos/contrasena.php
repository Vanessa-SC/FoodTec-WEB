<?php

    require_once 'conexionOO.php';
    $user=$_POST["user"];
    $email = $_POST["email"];

    $sql = "select clave from usuarios where usuario = '$user' ";
    $result = $conn->query($sql) or die ($conn->error.__LINE__);

    $row_cnt = $result->num_rows;
    $reg = mysqli_fetch_assoc($result);
    
    while ($fila= $result->fetch_assoc()){
        $clave = $fila['clave'];
        if ( $row_cnt == 1 ) {
            if(mail($email,"Contraseña DevKit","Su contraseña es: "+$clave)) {
                echo 'Mensaje enviado';
            } else {
                echo "Error.";
            }
        } else {
            $respuesta = "";
        }
    echo $respuesta;
    }

?>
