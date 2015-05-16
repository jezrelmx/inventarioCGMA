<!DOCTYPE html>
<html lang="">
	<head>
	<title>INICIAR SESSION</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href="<?php echo base_url();?>statics/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen"/>
	<link href="<?php echo base_url();?>statics/css/style.css" rel="stylesheet" type="text/css" media="screen">
	
		<script tipe="text/javascript" src="<?php echo base_url();?>statics/js/index_js.js" ></script>
</head>
<body id ="cuerpo" onload="admin()">
<?php echo base_url();?>Index_c/iniciar_sesion/iniciando_sesion
		<div class="container-fluid">
		  <div  class="row">
		  	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		  		<h1 class="text-center">INICIA SESION</h1>
		  		<center><legend>Inventario </legend></center>
		  	</div>
		  </div>
		  <div id="divContenido" class="row">
		  	<div  id="divQuitar" class="col-xs-6 col-sm-8 col-md-10 col-lg-12">
				
				<form name="inicia_sesion" id="inicia_sesion" method="post"
					action="<?php echo base_url();?>Index_c/inicia_sesion">
					
				
					<div class="form-group">
						<label for="">Correo</label>
						<input type="text" class="form-control" id="txtCorreo" name="txtCorreo" placeholder="Escriba su correo">
						
					</div>
					<div>
						<input  onclick="admin()" type="checkbox" id="soy_admin"> Soy Administrador 
					</div>
					<div id="div_contrasenia" class="form-group">
						<label for="">Contraseña</label>						
						<input type="password" class="form-control" id="txtContrasenia" name="txtContrasenia" placeholder="Escriba su contraseña">
					</div>
					<center><button type="submit" class="btn btn-primary">Entrar</button></center>
				</form>
		  	</div>
		  </div>
		</div>
		<!-- jQuery -->
		

	</body>
</html>