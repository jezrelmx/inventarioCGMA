<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
	  	<script tipe="text/javascript" src="<?php echo base_url();?>statics/js/consultar_usuario_js.js" ></script>
	  <h2>Resguardo</h2>
	    <?php $bandera=0;?>     

	<?php 
	    foreach ($usuario as $key =>$val) {
	    	$sin_resguardo=1;
	    	?>
	    	<br> <div>
	    	<?php echo "
		    
		      	<label>Nombre: ".$val['nombre']." ".$val['ap_paterno']." ".$val['ap_materno']."</label>
		      	<br>
		        <label>Número de empleado: ".$val['num_empleado']."</label>
		        <br>
		        <label>Direccion ejecutiva: ".$val['nom_direccion']."</label>
		        <br>
		        <label>Cargo: ".$val['cargo']."</label>
			    ";
			    
				foreach ($resguardo as $key1 =>$val1){   			

		    			if($val['id_usuario']==$val1['id_usuario']){
		    				$num_inventario=$val1['clave']."-".$val1['progresivo'];
		    				if($bandera==0){
				    			echo "<br><table border='1' class='table table-bordered'>
							    <thead>
							      <tr>
							      	<th>Número de Inventario</th>
							        <th>Articulo</th>
							        <th>Descripcción</th>
							        <th>Estatus</th>
							      </tr>
							    </thead>
							    <tbody>";
							    $bandera=1;
							}else{
			    			echo "<tr>
								<td>".$num_inventario."</td>
				    			<td>".$val1['tipo']."</td>
				    			<td>".$val1['caracteristicas']."</td>
				    			<td>".$val1['descripcion']."</td>
				    			";
								echo "</tr>";
							}
						}else{
							if($bandera==1){
								echo "
								</tbody>
								</table>
								";
								$bandera=0;
							}else{
								$sin_resguardo=0;
							}
						}
			    		
		    		}

		    	if ($sin_resguardo==0) {
		    		 echo "<br>El usuario no tiene resguardo<br>";

		    	}
				 
			echo "</div><!--Fin usuario-->";	
		}
	 ?>
	  

</div>