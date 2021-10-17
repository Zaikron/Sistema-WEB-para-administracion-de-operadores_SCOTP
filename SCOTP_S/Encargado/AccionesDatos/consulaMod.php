<?php  

	$con = mysqli_connect('localhost','Anthony', 'supersayan10000', 'scotp');
	
            if (isset($_POST['idOpe'])){
            	
            	$id_ope = $_POST['idOpe'];
            	$nOp = $_POST['nom'];
            	$apP = $_POST['apP'];
            	$apM = $_POST['apM'];
            	$cr = $_POST['cr'];
            	$tl = $_POST['tl'];
            	$est = $_POST['est'];
            	$ds = $_POST['ds'];
            	$hr = $_POST['hr'];
            	$fI = $_POST['fI'];
            	$fF = $_POST['fF'];
            	$nU = $_POST['nU'];


            	//$del = "DELETE from operador where idOp = $id_opera";
            	$actualizar = "UPDATE operador SET nomOp = '$nOp', apellidoPOp = '$apP', apellidoMOp = '$apM', correoOp = '$cr', telefonoOp = $tl, estado = '$est', dias = '$ds', horario = '$hr', fechaIni = '$fI', fechaFin = '$fF', numUnidad_FK = $nU WHERE idOp = $id_ope";

            	$actualizado = mysqli_query($con, $actualizar);

            }

            echo "<script type='text/javascript'>alert('Se han guardado los datos');</script>";
            echo "<script type='text/javascript'>window.location.replace('../encargado.php');</script>";

    //header('Location:../encargado.php');

?>