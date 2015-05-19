<div class="container">
	 <h2>	Tipo de Articulos  </h2>
	 	<table border="1" class="table table-bordered">
	    <thead>
	      <tr>
	        <th>Eliminar</th>
	        <th>Tipo de Articulo</th>
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

<script type="text/javascript" 	src = " <?php echo base_url(); ?>statics/js/jquery.js"></script>
<script type="text/javascript" 	src = " <?php echo base_url(); ?>statics/js/consultarTipoArticulo.js"></script>
