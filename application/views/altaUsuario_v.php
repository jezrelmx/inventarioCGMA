	<!-- MODAL DE ALTA DE USUARIO -->
		<form action="" method="POST" role ="form">
				<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
					<div class="form-group"> 
					<strong><center><legend>Formulario Alta Usuario</legend></center><strong>
						<br><label for="">Nombre</label>
						<input type="text" class="form-control" name="txtNombre" id="txtNombre" >
					</div>
					<div class="form-group">
						<label for="">Apellido paterno</label>						
						<input type="text" class="form-control" name="txtAp_paterno" id="txtAp_paterno" >
					</div>
					<div class="form-group">
						<label for="">Apellido materno</label>						
						<input type="text" class="form-control" name="txtAp_materno" id="txtAp_materno">
					</div>
					<div class="form-group">
						<label for="">Correo</label>						
						<input type="text" class="form-control" name = "txtCorreo" id="txtCorreo">
					</div>
						<div class="form-group">
						<label for="">Cargo</label>						
						<input type="text" class="form-control" name ="txtCargo" id="txtCargo" >
					</div>
					<div class="form-group">
						<label for="">No. de empleado</label>						
						<input type="text" class="form-control" name = "txtNempleado" id="txtNempleado">
					</div>
					<div class="form-group">
					<label for="">Direccion ejecutiva</label>
					<br>
					<select class="form-control" id="direccion">
						 <option value="0"></option>
						 <?php foreach ($cat_direccion_ejecutiva as $key => $value) { ?>
						 <option value="<?php echo $key;?>"><?php echo $value['nombre'];?></option>
						 <?php }?>
					</select>
					</div>
					<div class="form-group">
					<label for="">Tipo usuario</label>
					<br>
					<select  class="form-control" id="tipoUsuario">
						 <option value="0"></option>
						 <?php foreach ($cat_tipo_usuario as $key => $value) { ?>
						 	<option value="<?php echo $key;?>"><?php echo $value['descripcion'];?></option>
						 <?php }?>
				    </select>
					</div>
					<div  class="form-group">
					<label for="">Estatus</label>						
					<input type="text" class="form-control"  name "txtEstatus" id="txtEstatus" >
					</div>	 

					<div id="pass" class="form-group">
						<label for="">Contraseña</label>						
						<input type="Password" class="form-control"  name "txtContrasenia" id="txtContrasenia">
					</div>
				</div>
				<div class="modal-footer">
					<button type="reset" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					<button type="button"  onclick ="guardarDatosUsuario()" class="btn btn-primary" >Guardar</button>
				</div>
				</div></form>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->