<?php

	$conexion=@mysqli_connect('localhost','Anthony','supersayan10000', 'scotp');//nom, pass


	$nombreEn=$_POST['nomREGEN'];
	$aPEn=$_POST['apPREGEN'];
	$aMEn=$_POST['apMREGEN'];
	$areaEn=$_POST['areaREGEN'];
	$telEn=$_POST['telREGEN'];
	$corrEn=$_POST['correoREGEN'];
	$passEn=$_POST['passREGEN'];
	$passEn2=$_POST['passREGEN2'];
	$clave=$_POST['claveREGEN'];


	$sql="INSERT INTO encargado (nomEn, apellidoPEn, apellidoMEn, correoEn, telefonoEn, area, passEn) VALUES('$nombreEn', '$aPEn', '$aMEn', '$corrEn', '$telEn', '$areaEn', '$passEn')";


	$compararCorreo="select * from encargado where correoEn = '$corrEn'";//Se prepara la sentencia que busca coincidencias
	$resultado=mysqli_query($conexion, $compararCorreo) or die("errooor");//Se ejecuta la sentencia
	$datoDesicion=mysqli_fetch_array($resultado);//Creo un arreglo que obtiene los datos de la tabla en caso de coincidencia

	if ($datoDesicion[0]) {//Verifico si en el arreglo de esa posicion existe un id, si la hay entonces no entra por que significa que si encontro coincidencias
		
		echo "<script type='text/javascript'>alert('El correo ya existe');</script>";
		echo "<script type='text/javascript'>window.location.replace('../index.html');</script>";
	}else{//Si esta vacio el arreglo, significa que no se encontraron coincidencias en la base de datos
		//echo "Correo correcto";

		if ($passEn == $passEn2) {//Para evitar que el usuario se equivoque con su contraseña, la repetira y se comprobara

			if ($clave == 12345) {
				$agregar=mysqli_query($conexion, $sql);//Aqui se insertarian los datos, despues de la comprobacion de disponibilidad

				if(!$agregar){
					//echo "nose guardaron";
					echo "<script type='text/javascript'>alert('Error, No se han registrado los datos');</script>";
					echo "<script type='text/javascript'>window.location.replace('../index.html');</script>";
				}
				else{
					//echo"<p align=\"center\">Se han guardado los datos</p><br>";
					//header('Location: ../index.html');
					echo "<script type='text/javascript'>alert('Se han registrado los datos');</script>";
					echo "<script type='text/javascript'>window.location.replace('../index.html');</script>";
				}
			}else{
				echo "<script type='text/javascript'>alert('La clave de acceso no es correcta');</script>";
				echo "<script type='text/javascript'>window.location.replace('../index.html');</script>";
				//echo "clave erronea";
			}
			
		}else{	echo "<script type='text/javascript'>alert('Las contraseñas no coinciden');</script>";
				echo "<script type='text/javascript'>window.location.replace('../index.html');</script>";}
		
	}



?>