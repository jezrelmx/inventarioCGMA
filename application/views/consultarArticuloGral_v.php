<div  id="divQuitar" class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
			<center><h2>Artículos Registrados</h2></center>
			<table class="table table-bordered" class="table table-striped">
		    <thead title="">
		      <tr>
		      	<th>Acciones</th>
		        <th>Tipo</th>
		        <th>Características</th>
		        <th>Número De Inventario</th>
		        <th>Estatus</th>
		        <th>Nombre Del Servidor Público</th>
		        <th>Número de Empleado</th>
		      </tr>
		    </thead>
		     <tbody>
	    	<?php 
	    		foreach ($listaArticulos as $articulo) {
	    			echo "<tr>";
	    				echo '<td><a href="#" onclick="eliminarArticulo('.$articulo['id_articulo'].')">Eliminar Artículo</a></td>';
		    			echo "<td>".$articulo['tipo']."</td>";		    			
		    			echo "<td>".$articulo['numinventario']."</td>";
		    			echo "<td>".$articulo['caracteristicas']."</td>";
		    		
		    			echo "<td>".$cat_estatus[$articulo['id_estatus']]['descripcion']."</td>";
		    			if(strcmp($articulo['usuario'],'')==0){
		    				echo "<td>Sin servidor asignado</td>";
		    			}else{
		    				echo "<td>".$articulo['usuario']."</td>";
		    			}		    			
		    			echo "<td>".$articulo['num_empleado']."</td>";
		    			
					echo "</tr>";
	    		}
	    	 ?>   
	    </tbody>

		  </table>
			</center>
		
				</div>
</div><!--FinDivGeneral-->



