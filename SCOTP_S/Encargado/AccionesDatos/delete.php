<?php

	$con = mysqli_connect('localhost','Anthony', 'supersayan10000', 'scotp');
	
            if (isset($_POST['id_op'])){
            	
            	$id_opera = $_POST['id_op'];


            	$del = "DELETE from operador where idOp = $id_opera";

            	$borrado = mysqli_query($con, $del);

            }

            echo "<script type='text/javascript'>alert('Registro eliminado');</script>";
            echo "<script type='text/javascript'>window.location.replace('../encargado.php');</script>";
    //header('Location:../encargado.php');

?>