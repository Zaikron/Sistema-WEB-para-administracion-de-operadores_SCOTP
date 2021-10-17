<?php


	$conexion=@mysqli_connect('localhost','Anthony','supersayan10000', 'scotp');//nom, pass


	$nombreOp=$_POST['nomREGOP'];
	$aPOp=$_POST['apPREGOP'];
	$aMOp=$_POST['apMREGOP'];
	$telOp=$_POST['ceREGOP'];
	$corrOp=$_POST['correoREGOP'];
	$passOp=$_POST['passREGOP'];
	$passOp2=$_POST['passREGOP2'];


	$sql="INSERT INTO operador (nomOp, apellidoPOp, apellidoMOp, telefonoOp, correoOp, passOp) VALUES('$nombreOp', '$aPOp', '$aMOp', '$telOp', '$corrOp', '$passOp')";

	

	//$compararCorreo="select * from operador where correoOp like '%$corrOp%'";
	/*Aqui comienza la comprobacion de coincidencia del correo electronico*/
	$compararCorreo="select * from operador where correoOp = '$corrOp'";//Se prepara la sentencia que busca coincidencias
	$resultado=mysqli_query($conexion, $compararCorreo) or die("errooor");//Se ejecuta la sentencia
	$datoDesicion=mysqli_fetch_array($resultado);//Creo un arreglo que obtiene los datos de la tabla en caso de coincidencia

	if ($datoDesicion[0]) {//Verifico si en el arreglo de esa posicion existe un id, si la hay entonces no entra por que significa que si encontro coincidencias

		echo "<script type='text/javascript'>alert('El correo ya existe');</script>";
		echo "<script type='text/javascript'>window.location.replace('../index.html');</script>";
	}else{//Si esta vacio el arreglo, significa que no se encontraron coincidencias en la base de datos
		//echo "Correo correcto";

		if ($passOp == $passOp2) {//Para evitar que el usuario se equivoque con su contraseña, la repetira y se comprobara
			$agregar=mysqli_query($conexion, $sql);//Aqui se insertarian los datos, despues de la comprobacion de disponibilidad

			if(!$agregar){
				echo "<script type='text/javascript'>alert('Error, No se han registrado los datos');</script>";
				echo "<script type='text/javascript'>window.location.replace('../index.html');</script>";
			}
			else{
				//echo"<p align=\"center\">Se han guardado los datos</p><br>";
				//header('Location: ../index.html');
				echo "<script type='text/javascript'>alert('Se han registrado los datos');</script>";
				echo "<script type='text/javascript'>window.location.replace('../index.html');</script>";
			}
		}else{	echo "<script type='text/javascript'>alert('Las contraseñas no coinciden');</script>";
				echo "<script type='text/javascript'>window.location.replace('../index.html');</script>";}
		
	}

/*
	while($resultados=mysql_fetch_array($resultado)){
		echo $resultados[0]."<br>";
		echo $resultados[1]."<br>";
		echo $resultados[2]."<br>";
	}
*/



?>