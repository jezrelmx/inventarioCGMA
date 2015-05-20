	<!-- MODAL DE ALTA DE USUARIO -->
		<form action="" method="POST" role ="form">
				<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
					<div class="form-group"> 
					<h2><center>Alta Usuario</h2></center>
						
					<label for="">Nombre</label>
					<input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder = "Nombre" >
					</div>
					<div class="form-group">
						<label for="">Apellido Paterno</label>						
						<input type="text" class="form-control" name="txtAp_paterno" id="txtAp_paterno" placeholder = "Apellido Paterno" >
					</div>
					<div class="form-group">
						<label for="">Apellido Materno</label>						
						<input type="text" class="form-control" name="txtAp_materno" id="txtAp_materno" placeholder = "Apellido Materno">
					</div>
					<div class="form-group">
						<label for="">Correo</label>						
						<input type="text" class="form-control" name = "txtCorreo" id="txtCorreo" placeholder = "Correo">
					</div>
						<div class="form-group">
						<label for="">Cargo</label>						
						<input type="text" class="form-control" name ="txtCargo" id="txtCargo" placeholder = "Cargo" >
					</div>
					<div class="form-group">
						<label for="">No. De Empleado</label>						
						<input type="text" class="form-control" name = "txtNempleado" id="txtNempleado" placeholder = "No. De Empleado">
					</div>
					<div class="form-group">
					<label for="">Dirección Ejecutiva</label>
					<br>
					<select class="form-control" id="direccion">
						 <option value="0"></option>
						 <?php foreach ($cat_direccion_ejecutiva as $key => $value) { ?>
						 <option value="<?php echo $key;?>"><?php echo $value['descripcion'];?></option>
						 <?php }?>
					</select>
					</div>
					<div class="form-group">
					<label for="">Tipo Usuario</label>
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
					<input type="text" class="form-control"  name "txtEstatus" id="txtEstatus" placeholder = "Estatus">
					</div>	 

					<div id="pass" class="form-group">
						<label for="">Contraseña</label>						
						<input type="Password" class="form-control"  name "txtContrasenia" id="txtContrasenia" placeholder = "Contraseña">
					</div>
				</div>
				
				<div class="modal-footer">
					<button type="button"  onclick ="guardarDatosUsuario()" class="btn btn-primary" >Guardar</button>
					<button type="reset" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				</div>
				
				</div></form>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->