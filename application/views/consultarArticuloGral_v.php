<div  id="divQuitar" class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
	<div class="navbar">
		<a class="navbar-brand" >BIENVENIDO <?php echo $resultado[0]["nom_usuario"]; ?></a>
		<ul class="nav navbar-nav">
			<li>
				<a href="#">.</a>
			</li>
		</ul>
	</div>

	<!--Tabla Top-->
	<div aling="right">
		<table class="table table-bordered">
		    <thead title="Top 10">
		      <tr>
		        <th>Articulo</th>
		        <th>Tipo</th>
		        <th>Caracteristicas</th>
		        <th>Número de inventario</th>
		        <th>Estatus</th>
		        <th>Nombre del servidor público</th>
		        <th>Estatus</th>
		        <th>Número de empleado</th>
		      </tr>
		    </thead>
		    <tbody>
		    	<?php 
		    		//foreach ($listaUsuarios as $usuario) {
		    			//$usuarioJSON =	json_encode($usuario);
		    			//var_dump($usuarioJSON);
		    			//$datosEditarInfo = ".$usuario['id_usuario'].", ".$usuario['nombre']."
		    			echo "<tr>";
			    			echo "<td> 1. </td>";
							echo "<td> Osito dormilon </td>";
							echo "<td> <input type='radio' name='Play' id='Play' value='osito'></input></td>";
						echo "</tr>";
			    		
			    		echo "<tr>";
			    			echo "<td> 2. </td>";
							echo "<td> Que me vas a dar si vuelvo </td>";
							echo "<td> <input type='radio' name='Play' id='Play' value='siVuelvo'></input></td>";
						echo "</tr>";
			    		
		    		//}
		    	 ?>   
		    </tbody>
		  </table>
	</div>

	<!--Tabla Musica-->
	<div>
		<center>
		<table class="table table-bordered">
		    <thead>
		      <tr>
		        <th>Num. Canción</th>
		        <th>Nombre Canción</th>
		        <th>Play</th>
		      </tr>
		    </thead>
		    <tbody>
		    	<?php 
		    		//foreach ($listaUsuarios as $usuario) {
		    			//$usuarioJSON =	json_encode($usuario);
		    			//var_dump($usuarioJSON);
		    			//$datosEditarInfo = ".$usuario['id_usuario'].", ".$usuario['nombre']."
		    			echo "<tr>";
			    			echo "<td> 1. </td>";
							echo "<td> Osito dormilon </td>";
							echo "<td> <input type='radio' name='Play' id='Play' value='osito'></input></td>";
						echo "</tr>";
			    		
			    		echo "<tr>";
			    			echo "<td> 2. </td>";
							echo "<td> Que me vas a dar si vuelvo </td>";
							echo "<td> <input type='radio' name='Play' id='Play' value='siVuelvo'></input></td>";
						echo "</tr>";
			    		
		    		//}
		    	 ?>   
		    </tbody>
		  </table>
		  </center>
	</div>
</div><!--FinDivGeneral-->
