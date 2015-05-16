<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
	
	  <h2>Usuarios registrados</h2>
	    <pre>
	    <?php 
	   //var_dump($resultado);
	   //echo "este es el id del primer usuario".$resultado[1]['id_usuario'];
	     ?>
	     </pre>      
	  <table border="1" class="table table-bordered">
	    <thead>
	      <tr>
	      <th>Eliminar</th>
	        <th>Nombre</th>
	        <th>Apellido Paterno</th>
	        <th>Apellido Materno</th>
	        <th># Empleado</th>
	        <th>D</th>
	        <th>Estado</th>
	        <th>Acción</th>

	      </tr>
	    </thead>
	    <tbody>
	    	<?php 
	    		/*foreach ($listaUsuarios as $usuario) {
	    			echo "<tr>";
		    			echo "<td>".$usuario['nom_usuario']."</td>";
		    			echo "<td>".$usuario['correo']."</td>";
		    			echo "<td>".$usuario['nombre']."</td>";
		    			echo "<td>".$usuario['estadoVista']."</td>";
		    			echo "<td><div class='dropdown'>
								  <button class='btn btn-default dropdown-toggle' type='button' id='dropdownMenu1' data-toggle='dropdown' aria-expanded='true'>
								    Dropdown
								    <span class='caret'></span>
								  </button>
								  <ul class='dropdown-menu' role='menu' aria-labelledby='dropdownMenu1'>
								    <li role='presentation'><a onClick= 'eliminarUsuario(".$usuario['id_usuario'].")' role='menuitem' tabindex='-1' href='#'>Eliminar</a></li>
								    <li role='presentation'><a onClick= 'cambiarEstadoUsuario(".$usuario['id_usuario'].", ".$usuario['id_estado_usuario'].")' role='menuitem' tabindex='-1' href='#'>Modificar estado</a></li>
								    <li role='presentation'><a role='menuitem' tabindex='-1' href='#'>Something else here</a></li>
								    <li role='presentation'><a role='menuitem' tabindex='-1' href='#'>Separated link</a></li>
								  </ul>
								</div>
		    				</td>";
		    			//echo "<td><button onClick= 'estadoUsuario(".$usuario['id_estado_usuario'].")' type='button' class='btn btn-default'>Modificar estado</button></td>";
					echo "</tr>";
		    		
	    		}*/
	    	 ?>   
	    </tbody>
	  </table>



</div>