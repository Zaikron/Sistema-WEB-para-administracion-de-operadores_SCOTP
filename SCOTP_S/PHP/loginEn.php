<?php

	$conexion=@mysqli_connect('localhost','Anthony','supersayan10000', 'scotp');//nom, pass


	


	$corLOGEN=$_POST['correoLOGEN'];
	$passLOGEN=$_POST['passLOGEN'];


	$buscarCorreo="select * from encargado where correoEn = '$corLOGEN'";
	$resultado=mysqli_query($conexion, $buscarCorreo) or die("errooor");
	$datosTabla=mysqli_fetch_array($resultado);

	if ($datosTabla[0]) {
		
		if ($datosTabla[7] == $passLOGEN) {
			session_start();

			$_SESSION['nombrEn'] = $datosTabla[1] . ' ' . $datosTabla[2] . ' ' . $datosTabla[3];
			$_SESSION['area'] = $datosTabla[6];
			$_SESSION['idEn'] = $datosTabla[0];
			$_SESSION['mailEn'] = $datosTabla[4];
			
			header('Location:../Encargado/encargado.php');
		}else{
			echo "<script type='text/javascript'>alert('Contraseña Incorrecta');</script>";
			echo "<script type='text/javascript'>window.location.replace('../index.html');</script>";
		}

	}else{
		echo "<script type='text/javascript'>alert('El correo y la contraseña no coincide');</script>";
		echo "<script type='text/javascript'>window.location.replace('../index.html');</script>";
	}






?>