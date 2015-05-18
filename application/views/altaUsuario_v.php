	<!-- MODAL DE ALTA DE USUARIO -->
	<div class="modal fade" id="modal-id">
		<div class="modal-dialog">
		<form action="" method="POST" role ="form">
				<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
					<div class="form-group">
						<label for="">Nombre</label>
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
					<div>
					<label for="">Direccion ejecutiva</label>
					<select id="direccion">
						 <option value="0"></option>
						 <?php foreach ($cat_direccion_ejecutiva as $key => $value) { ?>
						 <option value="<?php echo $key;?>"><?php echo $value['nombre'];?></option>
						 <?php }?>
					</select>
					</div>
					<div>
					<label for="">Tipo usuario</label>
					<select id="tipoUsuario">
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
				<script>
 var base = "<?php echo base_url();?>";
 </script>
<script type="text/javascript" src="<?php echo base_url(); ?>statics/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>statics/js/altaUsr.js"></script>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
</div>