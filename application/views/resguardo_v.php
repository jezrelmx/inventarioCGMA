<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
	  	<script tipe="text/javascript" src="<?php echo base_url();?>statics/js/consultar_usuario_js.js" ></script>
	  <h2>Resguardo</h2>
	    <pre>
	    <?php 
	  // var_dump($resguardo);
	   //echo "<br>";
	   //var_dump($usuario);
	   //echo "este es el id del primer usuario".$resultado[1]['id_usuario'];
	     ?>
	     </pre>      

	<?php 
	    foreach ($usuario as $key =>$val) {
	    	echo "<div>";
	?>
		    	<table border="1" class="table table-bordered">
			    <thead>
			      <tr>
			      	<th>Nombre</th>
			        <th>Apellido Paterno</th>
			        <th>Apellido Materno</th>
			        <th># Empleado</th>
			        <th>Direccion ejecutiva</th>
			        <th>Cargo</th>
			      </tr>
			    </thead>
			    <tbody>
			    <?php 
			    	echo "
			    	<tr>
				    	<td>".$val['nombre']."</td>
				    	<td>".$val['ap_paterno']."</td>
				    	<td>".$val['ap_materno']."</td>
				    	<td>".$val['num_empleado']."</td>
				    	<td>".$val['nom_direccion']."</td>
				    	<td>".$val['cargo']."</td>
			    	</tr>
			    </tbody>
				</table>";
				?>
				<br>	
				<table border="1" class="table table-bordered">
			    <thead>
			      <tr>
			      	<th>Número de Inventario</th>
			        <th>Articulo</th>
			        <th>Descripcción</th>
			        <th>Estatus</th>
			      </tr>
			    </thead>
			    <tbody>
			    	<?php foreach ($resguardo as $key1 =>$val1){
		    			
		    			if($val['id_usuario']==$val1['id_usuario']){
		    				$num_inventario=$val1['clave']."-".$val1['progresivo'];
			    			echo "<tr>

			    				
				    			<td>".$num_inventario."</td>
				    			<td>".$val1['tipo']."</td>
				    			<td>".$val1['caracteristicas']."</td>
				    			<td>".$val1['descripcion']."</td>
				    			";
				    			
				    			
							echo "</tr>";
						}
			    		
		    		}
				   	 ?>   
			    </tbody>
				</table>

	<?php
			echo "</div>";
		}
	 ?>
	  

</div>