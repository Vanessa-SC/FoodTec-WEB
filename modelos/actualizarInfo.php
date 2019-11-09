<?php
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	session_start();
	require_once 'conexionOO.php';
    $nombre = $_SESSION['nombre'];

		$direccion = $_POST["direccionMod"];
		$telefono = $_POST["telefonoMod"];

		$query = "update restaurante set telefono='$telefono',
			      direccion='$direccion' where nombre='$nombre'";

        $result = $conn->query($query) or die($conn->error.__LINE__);
        
        if($result){
            header('Location: ../vistas/perfil.php');
        } else {
            ?>
<script type="text/javascript">alert('No se pudo actualizar, intente m&aacute;s tarde.');</script>
<?php
        }
//		echo "Informacion actualizada correctamente";
?>
