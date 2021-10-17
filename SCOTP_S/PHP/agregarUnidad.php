<?php

	$conexion=@mysqli_connect('localhost','Anthony','supersayan10000', 'scotp');

	$pla=$_POST['placas'];
	$nUni=$_POST['unidad'];

	$sql="INSERT INTO unidad (numUnidad, placas) VALUES('$nUni', '$pla')";

	$agregar=mysqli_query($conexion, $sql);

	if ($agregar) {
		header('Location:../Encargado/encargado.php');
	}else{

		echo "<script type='text/javascript'>alert('Ingresa los datos correctamente');</script>";
		echo "<script type='text/javascript'>window.location.replace('../Encargado/encargado.php');</script>";
	}



?>