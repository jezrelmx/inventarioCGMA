<body>
<style type="text/css">
	@media (max-width: 768px) {
		#header{
			display: none
		}
	}
</style>
<header id="header" class="">
	<div class="container">
		<div class = "row">
			<div class = "form-group col-xs-12 col-md-12 col-sm-12 col-lg-12">
				<img src="<?php echo base_url();?>statics/img/ciudad-de-mexico-logo-gray.png" width="70" heigth="70"  style="float:left"/>
				<img src="<?php echo base_url();?>statics/img/om-gray.png" width="70" heigth="70"  style="float:left"/>
				<lable id = "fuente"  style="float:left">Sistema De Inventario CGMA</label>
			</div>
		</div>
	</div>
	<div style="clear:both"></div>
</header><!-- /header -->
<div class="container">
	<div class = "row">
		<div class = "form-group col-xs-12 col-md-2 col-sm-3 col-lg-2">
			<nav class="navbar navbar-default">
		        <div>
		          <div class="navbar-header">
		            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		              <span class="sr-only">Navegacion</span>
		              <span class="icon-bar"></span>
		              <span class="icon-bar"></span>
		              <span class="icon-bar"></span>
		            </button>
	             <a class="navbar-brand" href="#" >Inventario CGMA</a>
		          </div>
		          <div id="navbar" class="navbar-collapse collapse">
		            <ul class="nav navbar-nav">
		             	<ul class="nav nav-pills nav-stacked">
					        <br>
					        <li class="active" id="btn1"><a href="#" onclick ="controlaMenu('bienvenido_c','btn1')">Bienvenido</a></li>
					        <li class="dropdown" id="btn2">
					          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Usuarios <span class="caret"></span></a>
					          <ul class="dropdown-menu">
					            <li><a  href="#" onclick ="controlaMenu('altaUsuario_c/index','btn2')">Alta Usuario</a></li>
					            <li><a  href="#" onclick= "controlaMenu('consultar_usuario_c/index','btn2')"> Consulta Usuario</a></li>                      
					          </ul>
					        </li>
					      	<li class="dropdown" id="btn3">  
						      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Artículos <span class="caret"></span></a>
						      <ul class="dropdown-menu">
					            <li><a class ="color" href="#" onclick ="controlaMenu('altaArticulo_c/index','btn3')" >   Alta Artículos</a></li>                      
					            <li><a href="#" onclick ="controlaMenu('alta_tipo_c/altaTipo','btn3')"  >Alta Tipo Artículo</a></li> 
					          </ul>
					       	</li>
					       
					      <li class="dropdown" id="btn4">   
						      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Consulta <span class="caret"></span></a>
						      <ul class="dropdown-menu">
						            <li><a href="#"  onclick ="controlaMenu('resguardo_c/resguardo/','btn4')">Consulta Resguardo</a></li>
						            <li><a href="#"  onclick ="controlaMenu('consultarArticuloGral_c/index','btn4')" >Consulta Artículos</a></li>
						             <li><a href="#"  onclick ="controlaMenu('consultarTipoArticulo_c/consultarTipoArticulo','btn4')" >Consulta Tipo Artículos</a></li>
		    
					          </ul>
					      </li>

					       <br><br><div align="text-left">   
					      	
					           <button align = "left" type="button" class="btn btn-danger btn-sm" onclick = "cerrarSesion()" >Cerrar Sesión</button>
					       
					      </div>
					    </ul>
		            </ul>
		          </div><!--/.nav-collapse -->
		        </div><!--/.container-fluid -->
		      </nav>
		</div>
		<div class = "" id="bodyInterior"></div>
	</div>
</div>