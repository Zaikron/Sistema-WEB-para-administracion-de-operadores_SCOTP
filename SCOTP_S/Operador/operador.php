<?php
	//Se inicia la sesion para poder utilizar las variables definidas anteriormente cunado se inicio sesion
	session_start();
	//Parra quitar un error sin importancia
	error_reporting(0);
	$varnom = $_SESSION['nombrOp'];

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
	<meta charset="iso-8859">
	<meta charset="utf-8">
	<title></title>
	<script type="text/javascript" src="../Scripts/jquery-3.3.1.js"></script>
	<link rel="stylesheet" type="text/css" href="Estilos/operador.css">
	<link rel="stylesheet" type="text/css" href="../Estilos/mediaOp.css">
	<link rel="stylesheet" type="text/css" href="../Estilos/animaciones.css">
	<script type="text/javascript" src="Scripts/operador.js"></script>
</head>

<body id="pixeles" onload="pixelaje();" onresize="pixelaje();">

	<script type="text/javascript" src="Scripts/operador.js"></script>
	<script type="text/javascript" src="../Scripts/jquery-3.3.1.js"></script>

	<aside id="trans"></aside>

	<!--Formulario de recuperacion de contraseña del operador-->
	<section id="cambiarOp" class="bordesAn">

				<header id="cabeceraLOGOP">
					<section id="logoLOGOP">
						<img id="logoIm" src="../archivosInicio/bu.png" width="95%" height="100%">
					</section>

					<section id="nomLOGOP"><p id="parrafoLOGOP">Cambio de Contraseña</p></section>
					
					<section id="regresarCam" class="agrandar"><img src="../archivosInicio/cancel.png" width="100%" height="100%"></section>
				</header>

				<br>
				<form action="CambiarPass/cambiar.php" method="POST" id="formLOP">

					<br>
					<label for="correoLOGOP"><b>Contraseña Actual</b></label><br>
					<input id="con1" class="entradas" value="" type="password" name="vieja" autocomplete="off" required>
					<aside id="ojo1" class="ojos"><img src="../archivosInicio/ojo.png" width="10%" height="100%"></aside>
					<br><br><br><br>
					<label for="passLOGOP"><b>Contraseña Nueva</b></label><br>
					<input id="con2" class="entradas" value="" type="password" name="nueva" required>
					<aside id="ojo2" class="ojos"><img src="../archivosInicio/ojo.png" width="10%" height="100%"></aside>
					<br>

					<br>
					<button class="btnCam botonesAn" type="submit">Confirmar</button>
				</form>
	</section>

	<div id="todo">
		
		<header id="cabecera">
			<a href="../PHP/cerrarOp.php"><section id="salirLOGO" class="agrandar"><img src="archivosOperador/logout.png" width="100%" height="100%"></section></a>
			<section id="scotp">SCOTP</section>
			<section id="cambiarPass" class="agrandar"><img src="archivosOperador/Pass.png" width="100%" height="100%"></section>
		</header>

		<!--Se comienzan a utilizar las variables de sesion establecidas, el sesion_start ya se establecio-->
		<header id="cabIm">
			<header id="cabecera2">
				<section id="nombre"><p><?php echo $_SESSION['nombrOp']; ?></p></section>
				<section id="identificador"><p><?php echo 'ID: ' . $_SESSION['idOp']; ?></p></section>
				<section id="estado"><p><?php echo 'Estado Laboral: ' . $_SESSION['estadoOp']; ?></p></section>
			</header>
		</header>
		
		<header id="titDatos"><p id="dat">Datos del Trabajador</p></header>

		<article id="principal">
				
			<section class="sn1">
				<p class="titulos">Numero de Unidad</p>
				<section class="datosObt">
					<p><?php echo $_SESSION['numUn']; ?></p>
				</section>
			</section>

			<section class="sn2">
				<p class="titulos">Numero de Placas</p>
				<section class="datosObt">
					<p><?php echo $_SESSION['placas']; ?></p>
				</section>
			</section>

			<section class="sn1">
				<p class="titulos">Horario de Trabajo</p>
				<section class="datosObt">
					<p><?php echo $_SESSION['horario']; ?></p>
				</section>
			</section>

			<section class="sn2">
				<p class="titulos">Dias de Trabajo</p>
				<section class="datosObt">
					<p><?php echo $_SESSION['dias']; ?></p>
				</section>
			</section>

			<section class="sn1">
				<p class="titulos">Email Registrado</p>
				<section class="datosObt">
					<p><?php echo $_SESSION['mailOp']; ?></p>
				</section>
			</section>

			<section class="sn2">
				<p class="titulos">Telefono/Celular</p>
				<section class="datosObt">
					<p><?php echo $_SESSION['celOp']; ?></p>
				</section>
			</section>

			<section class="sn1">
				<p class="titulos">Inicio de Labores</p>
				<section class="datosObt">
					<p><?php echo $_SESSION['fIOp']; ?></p>
				</section>
			</section>

			<section class="sn2">
				<p class="titulos">Termino de Labores</p>
				<section class="datosObt">
					<p><?php echo $_SESSION['fFOp']; ?></p>
				</section>
			</section>

		</article>

	</div>


	<footer id="pieIm">
		<footer id="pie">
			<section id="textPie"><i>transporjal ruta 623-A S.A. De C.V.</i></section>
		</footer>
	</footer>

	<script type="text/javascript" src="Scripts/operador.js"></script>
	<script type="text/javascript" src="../Scripts/jquery-3.3.1.js"></script>

</body>

</html>