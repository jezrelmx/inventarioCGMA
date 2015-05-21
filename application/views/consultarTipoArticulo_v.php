<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
	<center><h2>Tipo de Artículos </h2></center>
	 	<table border="1" class="table table-bordered">
	    
	    <thead>
	      <tr>
	        <th>Acciones</th>
	        <th>Tipo de artículo</th>
	        <th>Clave</th>
	        <th>Estatus</th>
	      </tr>
	    </thead>
	    <tbody>
	    	<?php 
	    		foreach ($listaArticulos as $key=>$articulos) {
	    			echo "<tr>";
		    			echo "<td><a onclick= 'cambiarEstatusTipoArticulo(".$key.")' href='#'>Eliminar</a> </td>";
		    			echo "<td>".$articulos['descripcion']."</td>";
		    			echo "<td>".$articulos['clave']."</td>";
		    			echo "<td>".$articulos['estatus']."</td>";
		    		echo "</tr>";		    		
	    		}
	    	 ?>   
	    </tbody>
	  </table>
</div><!--FinDivPrincipal-->
