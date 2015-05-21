<form method="POST" role ="form">
	<div class="col-xs-12 col-sm-9 col-md-10 col-lg-10">
		<div class="form-group"> 
			<center><h2>Alta Tipo Artículo</h2></center>
				<br><label for="">Descripción</label>
					<input type="text" class="form-control" name="txtDescripcion" id="txtDescripcion" placeholder = "Descripción" >
		</div>
				<div class="form-group">
					<label for="">Clave</label>						
					<input type="text" class="form-control" name="txtClave" id="txtClave" placeholder = "Clave">
				</div>
		<div class="modal-footer">
					<button type="button" type = "submit" onclick="guardarTipoArticulo()" class="btn btn-primary" >Guardar</button>
					<button type="reset" class="btn btn-default" data-dismiss="modal">Cancelar</button>
		</div> 
    </div>
</form>