<?php
 
      $buscar = $_POST['busMod'];
       
      if(!empty($buscar)) {
            buscarF($buscar);
      }
       
      function buscarF($busModvar) {
            $con = mysqli_connect('localhost','Anthony', 'supersayan10000', 'scotp');
       
            $sql = mysqli_query($con, "SELECT * FROM operador WHERE nomOp LIKE '%$busModvar%' OR apellidoPOp LIKE '%$busModvar%' OR apellidoMOp LIKE '%$busModvar%'");
             
            $contar = mysqli_num_rows($sql);
             
            if($contar == 0){
                  echo "No se han encontrado resultados para '<b>".$busModvar."</b>'.";
            }else{

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
							button{
								color: #0b3338;
								border: solid 2px #126672;
								background-color: #147481;
								
								font-weight: bold;
								font-size: 20px;
								
								width: 100px;
								height: 42px;
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
							<th class='sup'>Placas</th>
							<th class='sup'>Accion</th>
							";



                  while($todoTabla=mysqli_fetch_array($sql)){
                  		
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
						$resultUni=mysqli_query($con, $mostrarUni);
						$todoUni=mysqli_fetch_array($resultUni);
					
						echo "<td>".$todoUni[1]."</td>
							
							<td>
								<form action='AccionesDatos/delete.php' method='post'>
									<input type='hidden' name='id_op' value='".$todoTabla[0]."'>
									<button type='submit'>Eliminar</button>
								</form>
							
								<form action='AccionesDatos/mod.php' method='post'>
									<input type='hidden' name='id_op' value='".$todoTabla[0]."'>
									<button type='submit'>Actualizar</button>
								</form>
							</td>
						</tr>"; 
                  		
                  }echo "</table>";



            }
      }
       
?>



