<?php


	$conexion=@mysqli_connect('localhost','Anthony','supersayan10000', 'scotp');//nom, pass


	$correoEn = $_POST['correoRecEn'];
	$idForm = $_POST['idRecEn'];

	$buscarCorreoEn="select * from encargado where correoEn = '$correoEn'";
	$resultadoEn=mysqli_query($conexion, $buscarCorreoEn);
	$datosTablaEn=mysqli_fetch_assoc($resultadoEn);

	if ($datosTablaEn['idEn']) {

		if ($datosTablaEn['idEn'] == $idForm) {
			echo "<script type='text/javascript'>alert('Tu contraseña es: ".$datosTablaEn['passEn']."');</script>";
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