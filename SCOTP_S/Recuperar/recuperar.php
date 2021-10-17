<?php


	$conexion=@mysqli_connect('localhost','Anthony','supersayan10000', 'scotp');//nom, pass


	$correo = $_POST['correoRec'];
	$idForm = $_POST['idRec'];

	$buscarCorreo="select * from operador where correoOp = '$correo'";
	$resultado=mysqli_query($conexion, $buscarCorreo);
	$datosTabla=mysqli_fetch_assoc($resultado);

	if ($datosTabla['idOp']) {

		if ($datosTabla['idOp'] == $idForm) {
			echo "<script type='text/javascript'>alert('Tu contraseña es: ".$datosTabla['passOp']."');</script>";
			echo "<script type='text/javascript'>window.location.replace('../index.html');</script>";	
		}else{
			echo "<script type='text/javascript'>alert('El ID no coincide con el correo');</script>";
			echo "<script type='text/javascript'>window.location.replace('../index.html');</script>";
		}

	}else{
		echo "<script type='text/javascript'>alert('Ese correo no existe');</script>";
		echo "<script type='text/javascript'>window.location.replace('../index.html');</script>";
	}


?>