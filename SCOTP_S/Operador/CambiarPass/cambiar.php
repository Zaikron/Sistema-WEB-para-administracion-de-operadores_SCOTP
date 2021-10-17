<?php


	$conexion=@mysqli_connect('localhost','Anthony','supersayan10000', 'scotp');

	session_start();

	$old = $_POST['vieja'];
	$new = $_POST['nueva'];
	$correo = $_SESSION['mailOp'];

	
	$getCorreo = "SELECT * FROM operador WHERE correoOp = '$correo'";


	$consulta=mysqli_query($conexion, $getCorreo);
	$correoObtenido=mysqli_fetch_assoc($consulta);


	if($correoObtenido['passOp'] == $old){
		
		$idPrincipal = $correoObtenido['idOp'];
		$cambio = "UPDATE operador SET passOp = '$new' WHERE idOp = $idPrincipal";

		$consultaCambio=mysqli_query($conexion, $cambio);

		if ($consultaCambio) {
			
			echo "<script type='text/javascript'>alert('Se han guardado los cambios');</script>";
			echo "<script type='text/javascript'>window.location.replace('../operador.php');</script>";
		}else{
			echo "<script type='text/javascript'>alert('No se ha podido modificar');</script>";
			echo "<script type='text/javascript'>window.location.replace('../operador.php');</script>";
		}

	}else{
		echo "<script type='text/javascript'>alert('La contraseña no coincide');</script>";
		echo "<script type='text/javascript'>window.location.replace('../operador.php');</script>";
	}

?>