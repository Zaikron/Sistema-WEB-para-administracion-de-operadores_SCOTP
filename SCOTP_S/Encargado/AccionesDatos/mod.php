<?php


		$con = mysqli_connect('localhost','Anthony', 'supersayan10000', 'scotp');


		if (isset($_POST['id_op'])) {

			$id_ope = $_POST['id_op'];
			
			$obtener = "SELECT * FROM operador WHERE idOp = $id_ope";

			$consulta=mysqli_query($con, $obtener);
			$operador=mysqli_fetch_assoc($consulta);

			$idOpe = $operador['idOp'];
			$nm = $operador['nomOp'];
			$apP = $operador['apellidoPOp'];
			$apM = $operador['apellidoMOp'];
			$cr = $operador['correoOp'];
			$tl = $operador['telefonoOp'];
			$est = $operador['estado'];
			$ds = $operador['dias'];
			$hr = $operador['horario'];
			$fI = $operador['fechaIni'];
			$fF = $operador['fechaFin'];
			$nU = $operador['numUnidad_FK'];

		}

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="mod.css">
	<title></title>
</head>
<body>

<form action="consulaMod.php" method="POST">
	<input type="hidden" name="idOpe" value="<?php echo $idOpe; ?>">
	<label for="nom">Nombre: </label>
	<input type="text" name="nom" value="<?php echo $nm; ?>">
	<br><br>
	<label for="nom">Apellido Paterno: </label>
	<input type="text" name="apP" value="<?php echo $apP; ?>">
	<br><br>
	<label for="nom">Apellido Materno: </label>
	<input type="text" name="apM" value="<?php echo $apM; ?>">
	<br><br>
	<label for="nom">E-Mail: </label>
	<input type="text" name="cr" value="<?php echo $cr; ?>">
	<br><br>
	<label for="nom">Telefono: </label>
	<input type="text" name="tl" value="<?php echo $tl; ?>">
	<br><br>
	<label for="nom">Estado Laboral: </label>
	<input type="text" name="est" value="<?php echo $est; ?>">
	<br><br>
	<label for="nom">Dias de trabajo: </label>
	<input type="text" name="ds" value="<?php echo $ds; ?>">
	<br><br>
	<label for="nom">Horario: </label>
	<input type="text" name="hr" value="<?php echo $hr; ?>">
	<br><br>
	<label for="nom">Fecha Inicio: </label>
	<input type="date" name="fI" value="<?php echo $fI; ?>">
	<br><br>
	<label for="nom">Feha Fin: </label>
	<input type="date" name="fF" value="<?php echo $fF; ?>">
	<br><br>
	<label for="nom">Numero de Unidad: </label>
	<input type="text" name="nU" value="<?php echo $nU; ?>">
	<br><br>
	<button type="submit">Guardar</button>
</form>

</body>
</html>