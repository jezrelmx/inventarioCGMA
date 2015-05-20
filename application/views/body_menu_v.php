<body>
<div class="container">
	<div class = "row">
		<div class = "form-group col-xs-12 col-md-3 col-sm-12 col-lg-3">
			<nav class="navbar navbar-default">
		        <div class="container-fluid">
		          <div class="navbar-header">
		            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		              <span class="sr-only">Navegacion</span>
		              <span class="icon-bar"></span>
		              <span class="icon-bar"></span>
		              <span class="icon-bar"></span>
		            </button>
		             <a class="navbar-brand" href="#">Inventario CGMA</a>
		          </div>
		          <div id="navbar" class="navbar-collapse collapse">
		            <ul class="nav navbar-nav">
		             	<ul class="nav nav-pills nav-stacked">
					        <li class="active"><a href="#" onclick = "menu_c/index">Bienvenido</a></li>
					        <li class="dropdown">
					          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Usuarios <span class="caret"></span></a>
					          <ul class="dropdown-menu">
					            <li><a  href="#" onclick ="controlaMenu('altaUsuario_c/index')">Alta Usuario</a></li>
					            <li><a  href="#" onclick= "controlaMenu('consultar_usuario_c/index')"> Consulta Usuario</a></li>                      
					          </ul>
					        </li>
					      <li class="dropdown">  
					      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Artículos <span class="caret"></span></a>
					      <ul class="dropdown-menu">
					            <li><a href="#" onclick ="controlaMenu('altaArticulo_c/index')" >   Alta Artículos</a></li>                      
					            <li><a href="#" onclick ="controlaMenu('alta_tipo_c/altaTipo')"  >Alta Tipo Artículo</a></li> 
					          </ul>
					       </li>
					       
					      <li class="dropdown">   
					      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Consulta <span class="caret"></span></a>
					      <ul class="dropdown-menu">
					            <li><a href="#"  onclick ="controlaMenu('resguardo_c/resguardo')" >Consulta Resguardo</a></li>
					            <li><a href="#"  onclick ="controlaMenu('consultarArticuloGral_c/index')" >Consulta Artículos</a></li>
		    
					          </ul>
					      </li>

					       <br><br><div align="text-left">   
					      	
					           <button align = "left" type="button" class="btn btn-danger btn-sm" onclick = "cerrarSesion()" >Cerrar Sesion</button>
					       
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