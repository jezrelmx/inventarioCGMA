	<!-- MODAL DE ALTA DE USUARIO -->
		<form action="" method="POST" role ="form">
				<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
					<div class="form-group"> 
					<br><strong><center><legend>Formulario Alta Articulo</legend></center></strong>
						<label> Tipo: </label>
							<select class = "form-control" id="id_tipo_mueble">
								<option value="0">Seleccionar tipo</option>
									<?php foreach ($cat_tipo as $key => $value) { ?>
									<option value="<?php echo $key;?>"><?php echo $value['descripcion'];?></option>
									<?php }?>
								<option onclick="divFormTipo()">Otro...</option>
							</select>
					</div>
					<br>
					
					<div class="form-group">
						<label> Progresivo: </label>
						<input type="text" class="form-control" name="txtProgresivo" id="txtProgresivo" placeholder="Ingrese progresivo">
					<br>
					</div>
				
					<div class="form-group">
						<label> Caracteristicas: </label>
						<input type="text" class="form-control" name="txtCaracterisicas" id="txtCaracterisicas" placeholder="Caracteristicas del articulo">
					<br>
					</div>
					
					<div class="form-group">
						<label> Estatus: </label>
					       	<select class = "form-control" id="id_estatus">
								<option value="0">Seleccionar estatus</option>
								<?php foreach ($cat_estatus as $key => $value) { ?>
								<option value="<?php echo $key;?>"><?php echo $value['descripcion'];?></option>
								<?php }?>
							</select>
					</div>
			</div>
				
				<div class="modal-footer">
					<button type="reset" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					<button type="button"  onClick="guardarArticulo()" class="btn btn-primary" >Guardar</button>
				</div>
				
				</div></form>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
