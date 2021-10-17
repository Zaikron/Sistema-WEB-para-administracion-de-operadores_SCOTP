<?php



function crearTabla()
{

					$conexion=@mysqli_connect('localhost','Anthony','supersayan10000', 'scotp');//nom, pass

	
					$mostrarTodo="select * from operador";
					$resultAll=mysqli_query($conexion, $mostrarTodo);

					echo "<style>
							table, tr, td, th{
								border-collapse: collapse;
								border: black 2px solid;
								color: #153740;
							}
							.sup{
								background-color: #167286;
								color: white;
							}
					</style>";


					echo "<table border=1>
							<th class='sup'>ID</th>
							<th class='sup'>Nombre</th>
							<th class='sup'>Paterno</th>
							<th class='sup'>Materno</th>
							<th class='sup'>EMAIL</th>
							<th class='sup'>Telefono</th>
							<th class='sup'>Estado</th>
							<th class='sup'>Dias de trabajo</th>
							<th class='sup'>Horario</th>
							<th class='sup'>Inicio</th>
							<th class='sup'>Fin</th>
							<th class='sup'>Unidad</th>
							<th class='sup'>Placas</th>";

					while ($todoTabla=mysqli_fetch_array($resultAll)) {
	
						echo "
						<tr align='center'>

							<td class='sup'>" . $todoTabla[0] . "</td>
							<td>" . $todoTabla[1] . "</td>
							<td>" . $todoTabla[2] . "</td>
							<td>" . $todoTabla[3] . "</td>
							<td>" . $todoTabla[4] . "</td>
							<td>" . $todoTabla[5] . "</td>
							<td>" . $todoTabla[6] . "</td>
							<td>" . $todoTabla[7] . "</td>
							<td>" . $todoTabla[8] . "</td>
							<td>" . $todoTabla[9] . "</td>
							<td>" . $todoTabla[10] . "</td>
							<td>" . $todoTabla[12] . "</td>";

						$mostrarUni="select * from unidad where numUnidad = '$todoTabla[12]'";
						$resultUni=mysqli_query($conexion, $mostrarUni);
						$todoUni=mysqli_fetch_array($resultUni);

					
						echo "<td>". $todoUni[1] ."</td>
						</tr>";

						

					}
					echo "</table>";
}


function mostrarUnidades()
{
	$conexion=@mysqli_connect('localhost','Anthony','supersayan10000', 'scotp');//nom, pass

	
	$mostrarUnidades="select * from unidad";
	$resultUnidades=mysqli_query($conexion, $mostrarUnidades);


	echo "<style>
			table, tr, td, th{
			border-collapse: collapse;
			border: black 2px solid;
			color: #153740;
		}
		table{
			margin: 0 auto;
		}
		.sup{
			background-color: #167286;
			color: white;
		}
		</style>";


					echo "<table border=1>
							<th class='sup'>Numero_Unidad</th>
							<th class='sup'>Placas</th>
							";
					while ($todoUnidades=mysqli_fetch_array($resultUnidades)) {
	
						echo "
						<tr align='center'>

							<td class='sup'>" . $todoUnidades[0] . "</td>
							<td>" . $todoUnidades[1] . "</td>";

					
						echo "</tr>";

						

					}
					echo "</table>";

}

?>