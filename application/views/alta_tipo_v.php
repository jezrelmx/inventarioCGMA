<form method="POST" role ="form">
	<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
		<div class="form-group"> 
			<BR><strong><center><legend>Alta Tipo Articulo</legend></center><strong>
				<br><label for="">Descripcion</label>
					<input type="text" class="form-control" name="txtDescripcion" id="txtDescripcion" >
		</div>
				<div class="form-group">
					<label for="">Clave</label>						
					<input type="text" class="form-control" name="txtClave" id="txtClave" >
				</div>
		<div class="modal-footer">
					<button type="reset" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					<button type="button" type = "submit" onclick="guardarTipoArticulo()" class="btn btn-primary" >Guardar</button>
				</div>
</form>