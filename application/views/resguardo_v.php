<?php if($usr_sesion==2){?>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<header id="header" class="">
			<div>
				<img src="<?php echo base_url();?>statics/img/ciudad-de-mexico-logo-gray.png" width="70" heigth="70"  style="float:left"/>
				<img src="<?php echo base_url();?>statics/img/om-gray.png" width="70" heigth="70"  style="float:left"/>
				<lable id = "fuente"  style="float:left">Sistema De Inventario CGMA</label>
			</div>
			<div style="clear:both"></div>
		</header><!-- /header -->
<?php }else{ ?>
	<div class="col-xs-12 col-sm-9 col-md-10 col-lg-10">
<?php }?>
	  	<script tipe="text/javascript" src="<?php echo base_url();?>statics/js/consultar_usuario_js.js" ></script>

	 <p align="right">
	  <?php if($usr_sesion==2){

	  	?>
	  	<script>
			var base = "<?php echo base_url();?>";
		</script>
	  	<script tipe="text/javascript" src="<?php echo base_url();?>statics/js/cerrar_sesion.js" ></script>
	  	<br>
		<button align = "left" type="button" class="btn btn-danger btn-sm" onclick = "cerrarSesion()" >Cerrar Sesion</button>
		<?php }
		?>
		
	  		<center><h2>Resguardo</h2></center>
	  </p>
	    <?php $bandera=0;     
			$id_usuario=0;
		?>
	<?php foreach ($resguardo as $key => $val) {
	    	$sin_resguardo=1;
	    	if($id_usuario!=$val['id_usuario']){ 
	    		$id_usuario=$val['id_usuario']; ?>
	    		<div class="boxResguardo">
    				<label>Nombre: <?php echo $val['nombre']; ?> </label>
			      	<br>
			        <label>Número de empleado: <?php echo $val['num_empleado']; ?></label>
			        <br>
			        <label>Direccion ejecutiva: <?php echo $val['direccion']; ?></label>
			        <br>
			        <label>Cargo: <?php echo $val['cargo']; ?></label>	
	    	<?php }
	    		$num_inventario=$val['clave']."-".$val['progresivo'];
	    		if($bandera==0){ ?>
				    			<br>
				    			<table border='1' class='table table-bordered'>
							    <thead>
							      <tr>
							      	<th>Número de Inventario</th>
							        <th>Articulo</th>
							        <th>Descripcción</th>
							        <th>Estatus</th>
							      </tr>
							    </thead>
							    <tbody>
							    <tr>
									<td><?php echo $num_inventario; ?></td>
					    			<td><?php echo $val['tipo']; ?></td>
					    			<td><?php echo $val['caracteristicas']; ?></td>
					    			<td><?php echo $val['estatus']; ?></td>
					    		</tr>
					<?php $bandera=1;
							}else{ ?>
			    			<tr>
								<td><?php echo $num_inventario; ?></td>
				    			<td><?php echo $val['tipo']; ?></td>
				    			<td><?php echo $val['caracteristicas']; ?></td>
				    			<td><?php echo $val['estatus']; ?></td>
				    		</tr>
						<?php } ?>
			<?php if(isset($resguardo[$key+1]['id_usuario']) && $id_usuario!=$resguardo[$key+1]['id_usuario']){ 
					$bandera=0;
				?>
				   		</tbody>
						</table>
				    </div> 
			<?php } ?>
		<?php } ?>
</div><!--Fin wrapper-->

