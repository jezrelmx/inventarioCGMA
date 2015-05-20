<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
	  <script tipe="text/javascript" src="<?php echo base_url();?>statics/js/consultar_usuario_js.js" ></script>
	  
	  <center><h2>Usuarios Registrados</h2></center>
	    <!--<pre>
	    <?php 
	   //var_dump($resultado);
	   //echo "este es el id del primer usuario".$resultado[1]['id_usuario'];
	     ?>
	     </pre><!-->
	      
	  <table border="1" class="table table-bordered">
	    <thead>
	      <tr>
	      <th>Acciones</th>
	        <th>Nombre</th>
	        <th>Apellido paterno</th>
	        <th>Apellido materno</th>
	        <th># Empleado</th>
	        <th>Dirección ejecutiva</th>
	        <th>Correo</th>
	        

	      </tr>
	    </thead>
	    <tbody>
	    	<?php 
	    		foreach ($resultado as $key =>$val) {
	    			//echo base_url()."consultar_usuario_c/eliminarUsuario(".$val['id_usuario'].")";
	    			echo "<tr>";

	    				echo "<td><a onClick='eliminarUsuario(".$val['id_usuario'].")' href='#'>Eliminar usuario</a></td>";
		    			echo "<td>".$val['nombre']."</td>";
		    			echo "<td>".$val['ap_paterno']."</td>";
		    			echo "<td>".$val['ap_materno']."</td>";
		    			echo "<td>".$val['num_empleado']."</td>";
		    			echo "<td>".$val['nom_direccion']."</td>";
		    			echo "<td>".$val['email']."</td>";
		    			
		    			
					echo "</tr>";
		    		
	    		}
	    	 ?>   
	    </tbody>
	  </table>
	  

</div>