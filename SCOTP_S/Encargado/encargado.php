<?php
	//Se incluye el archivo conectar.php para el uso de sus funciones
	require('AccionesDatos/conectar.php');
	//Se inicia la sesion para poder utilizar las variables definidas anteriormente cunado se inicio sesion
	session_start();
	//Parra quitar un error sin importancia
	error_reporting(0);
	$varnom = $_SESSION['nombrEn'];

	//Es una forma de comprobar si la sesion ya fue destruida
	if ($varnom == null || $varnom == '') {
		echo "<h1 align=center>Esta sesion ya esta cerrada</h1>";
		echo "<h3 align=center><a href='../index.html'>Volver al inicio</a></h3>";
		die();
	}
?>

<!DOCTYPE html>

<html>

<head>
	<title></title>
	<meta charset="iso-8859">
	<meta charset="utf-8">
	
	<link rel="stylesheet" type="text/css" href="Estilos/encargado.css">
	<link rel="stylesheet" type="text/css" href="../Estilos/mediaEn.css">
	<link rel="stylesheet" type="text/css" href="../Estilos/animaciones.css">
	<script type="text/javascript" src="Scripts/encargado.js"></script>
	<script type="text/javascript" src="AccionesDatos/search.js"></script>
	<script type="text/javascript" src="AccionesDatos/searchMod.js"></script>

</head>

<body id="pixeles" onload="pixelaje();" onresize="pixelaje();">

	<script type="text/javascript" src="../Scripts/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="Scripts/encargado.js"></script>
	<script type="text/javascript" src="AccionesDatos/search.js"></script>
	<script type="text/javascript" src="AccionesDatos/searchMod.js"></script>
	
		<!--Formulario de cambio de contraseña del encargado-->
		<section id="cambiarEn" class="bordesAn">

				<header id="cabeceraLOGOP">
					<section id="logoLOGOP">
						<img id="logoIm" src="../archivosInicio/bu.png" width="95%" height="100%">
					</section>

					<section id="nomLOGOP"><p id="parrafoLOGOP">Cambio de Contraseña</p></section>
					
					<section id="regresarCam"  class="agrandar"><img src="../archivosInicio/cancel.png" width="100%" height="100%"></section>
				</header>

				<br>
				<form action="CambiarPass/cambiar.php" method="POST" id="formLOP">

					<br>
					<label for="correoLOGOP" class="soloCam"><b>Contraseña Actual</b></label><br>
					<input id="con1" class="entradas" value="" type="password" name="vieja" autocomplete="off" required>
					<aside id="ojo1" class="ojos"><img src="../archivosInicio/ojo.png" width="10%" height="100%"></aside>
					<br><br><br><br>
					<label for="passLOGOP" class="soloCam"><b>Contraseña Nueva</b></label><br>
					<input id="con2" class="entradas" value="" type="password" name="nueva" required>
					<aside id="ojo2" class="ojos"><img src="../archivosInicio/ojo.png" width="10%" height="100%"></aside>
					<br>

					<br>
					<button class="btnCam botonesAn" type="submit">Confirmar</button>
				</form>
		</section>

		<!--Ventana para ver registros-->
		<article id="verReg">
			<section id="cabVer">
				<section id="imBus"><img src="archivosEncargado/buscar.png" width="100%" height="100%"></section>
				<input type="search" name="busVer" id="entradaBus">
				<section id="imBack" class="agrandar"><img src="archivosEncargado/equis.png" width="100%" height="100%"></section>
			</section>
			<section id="tablaVer">
				<p id="ress"></p><br><!--Es usado por ajax para mostrar en una tabla los resultados de la busqueda-->
				<?php
					crearTabla();
				?><br><br><br><!--Se mada a llamar una funcion de conectar.php que muestra todos los registros
								en la base de datos en una tabla-->
			</section>
		</article>

		<!--Ventana para ver, modificar y eliminar registros-->
		<article id="modReg">
			<section id="cabMod">
				<section id="imBusMod"><img src="archivosEncargado/buscar.png" width="100%" height="100%"></section>
				<input type="search" name="busMod" id="entradaBusMod">
				<section id="imBackMod" class="agrandar"><img src="archivosEncargado/equis.png" width="100%" height="100%"></section>
			</section>
			<section id="tablaMod">

				<p id="resMod" align="center">Introduce el nombre o apellido del operador para buscar.</p>
			</section><br><br><!--Es usado por ajax para mostrar en una tabla los resultados de la busqueda-->
		</article>

		<!--Ventana para añadir una unidad de transporte-->
		<article id="addReg">
			<form action="../PHP/agregarUnidad.php" method="post">
			<section id="cabAdd">
				<button id="botonAdd" class="botonesAn" type="submit">Agregar Registro</button>
				<section id="imBackAdd" class="agrandar"><img src="archivosEncargado/equis.png" width="100%" height="100%"></section>
			</section>
			<section id="tablaAdd">
				
					<label class="unis" for="placas">Numero de Placas</label><br>
					<input type="text" name="placas" id="entradaPlacas">
					<br><br><label class="unis" for="unidad">Numero de Unidad</label><br>
					<input type="number" name="unidad" id="entradaUnidad">
				
			</section>
			<section id="unidades"><p align="center">
				<?php
					mostrarUnidades();
				?>	<!--Se muestran todas las unidades de transporte en la base de datos-->
			</p></section>
			</form>
		</article>

		<!--Contenido de la pagina-->
		<section id="prueba"></section>
		<section id="prueba2"></section>

		<header id="cabecera">
			<a href="../PHP/cerrarEn.php"><section id="salirLOGO" class="agrandar"><img src="archivosEncargado/logout.png" width="100%" height="100%"></section></a>
			<section id="scotp">SCOTP</section>
			<section id="cambiarPass" class="agrandar"><img src="archivosEncargado/Pass.png" width="100%" height="100%"></section>
		</header>
		<header id="cabInfo">
			<!--Se comienzan a utilizar las variables de sesion establecidas, el sesion_start ya se establecio-->
			<section id="nom"><p><?php echo $_SESSION['nombrEn']; ?></p></section>
			<section id="area"><p><?php echo 'Area: '.$_SESSION['area']; ?></p></section>
			<section id="id"><?php echo 'ID: '.$_SESSION['idEn']; ?></section>
			<section id="codigo">Clave de Acceso: 12345</section>

		</header>

		<article id="funcionalidades">
			
			<section id="visualizar"><p class="textsFu">Ver Registros</p></section>
			<section id="modificar"><p class="textsFu">Modificar Registros</p></section>
			<section id="agregar"><p class="textsFu">Agregar Unidad</p></section>

		</article>

		
		<div id="sombra"></div>
	
	<script type="text/javascript" src="../Scripts/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="Scripts/encargado.js"></script>

</body>

</html>