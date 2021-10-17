<?php

	$conexion=@mysqli_connect('localhost','Anthony','supersayan10000', 'scotp');//nom, pass


	$corLOGOP=$_POST['correoLOGOP'];
	$passLOGOP=$_POST['passLOGOP'];


	$buscarCorreo="select * from operador where correoOp = '$corLOGOP'";
	$resultado=mysqli_query($conexion, $buscarCorreo);
	$datosTabla=mysqli_fetch_array($resultado);



	if ($datosTabla[0]) {
		
		if ($datosTabla[11] == $passLOGOP) {

			echo "<script type='text/javascript'>alert('Bienvenido');</script>";
			//echo "<script type='text/javascript'>window.location.replace('../Operador/operador.html');</script>";
			session_start();

			$_SESSION['nombrOp'] = $datosTabla[1] . ' ' . $datosTabla[2] . ' ' . $datosTabla[3];
			$_SESSION['idOp'] = $datosTabla[0];
			$_SESSION['estadoOp'] = $datosTabla[6];
			$_SESSION['numUn'] = $datosTabla[12];
			$_SESSION['horario'] = $datosTabla[8];
			$_SESSION['dias'] = $datosTabla[7];
			$_SESSION['mailOp'] = $datosTabla[4];
			$_SESSION['celOp'] = $datosTabla[5];
			$_SESSION['fIOp'] = $datosTabla[9];
			$_SESSION['fFOp'] = $datosTabla[10];


			$buscarUnidad="select * from unidad where numUnidad = '$datosTabla[12]'";
			$resultadoUn=mysqli_query($conexion, $buscarUnidad);
			$datosTablaUn=mysqli_fetch_array($resultadoUn);

			$_SESSION['placas'] = $datosTablaUn[1];


			header('Location:../Operador/operador.php');

/*
			$fh = fopen("miarchivo.txt", "w"); 
    		fwrite($fh, $datosTabla[0]);
    		fclose($fh);
    		*/
		}else{
			echo "<script type='text/javascript'>alert('Contraseña Incorrecta');</script>";
			echo "<script type='text/javascript'>window.location.replace('../index.html');</script>";
		}

	}else{
		echo "<script type='text/javascript'>alert('El correo y la contraseña no coincide');</script>";
		echo "<script type='text/javascript'>window.location.replace('../index.html');</script>";
	}

?>