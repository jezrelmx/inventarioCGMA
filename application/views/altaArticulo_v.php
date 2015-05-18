<div class="container col-xs-12 col-sm-12 col-md-9 col-lg-9">
	<center>
		<form class="center" action="" method="POST">
			<h2>Alta Articulo.</h2>

			<label> Tipo: </label>
			<select id="id_tipo_mueble">
				<option value="0">Seleccionar tipo</option>
				<?php foreach ($cat_tipo as $key => $value) { ?>
					<option value="<?php echo $key;?>"><?php echo $value['descripcion'];?></option>
				<?php }?>
				<option onclick="divFormTipo()">Otro...</option>
			</select>
			<br><br>
			<label> Progresivo: </label>
			<input type="text" class="form-control" name="txtProgresivo" id="txtProgresivo" placeholder="Ingrese progresivo">
			<br><br>
			<label> Caracteristicas: </label>
			<input type="text" class="form-control" name="txtCaracterisicas" id="txtCaracterisicas" placeholder="Caracteristicas del articulo">
			<br><br>
			<label> Estatus: </label>
			<select id="id_estatus">
				<option value="0">Seleccionar estatus</option>
				<?php foreach ($cat_estatus as $key => $value) { ?>
					<option value="<?php echo $key;?>"><?php echo $value['descripcion'];?></option>
				<?php }?>
			</select>
			<br><br>
			<button type="submit" class="btn btn-default">Cancelar</button>
			<button id="btnGuardar" onClick="guardarArticulo()" class="btn btn-default">Guardar</button>

		</form><!--FinFormAltaArt-->
	</center>
</div><!--FinDivAltaArt-->

<!--Scripts-->
<script type="text/javascript" 	src = " <?php echo base_url(); ?>statics/js/jquery.js"></script>
<script type="text/javascript" 	src = " <?php echo base_url(); ?>statics/js/altaArticulo.js"></script>

