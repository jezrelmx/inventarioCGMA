<body>

<div class="container">
				<div class = "row">
					<div class = "form-group col-xs-12 col-md-3 col-sm-12 col-lg-3">
    							<br><center><legend>Menu Inventario</legend></center>
								  	<ul class="nav nav-pills nav-stacked">
								        <li class="active"><a href="#">Bienvenido</a></li>
								        <li class="dropdown">
								          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Usuarios <span class="caret"></span></a>
								          <ul class="dropdown-menu">
								            <li><a  href="#" onclick ="controlaMenu('altaUsuario_c/index')">Alta Usuario</a></li>
								            <li><a  href="#" onclick= "controlaMenu('consultar_usuario_c/index')"> Consulta Usuario</a></li>                      
								          </ul>
								        </li>
								      <li class="dropdown">  
								      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Articulos <span class="caret"></span></a>
								      <ul class="dropdown-menu">
								            <li><a href="#" onclick ="controlaMenu('alta_tipo_c/altaTipo')"  >Alta Tipo Articulo</a></li> 
								            <li><a href="#" onclick ="controlaMenu('menu_c/altaUsuario')" >   Alta Articulos</a></li>                      
								          </ul>
								       </li>
								       
								      <li class="dropdown">   
								      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Consulta <span class="caret"></span></a>
								      <ul class="dropdown-menu">
								            <li><a href="#"  onclick ="controlaMenu('menu_c/altaUsuario')" >Consulta Usuarios</a></li>
								            <li><a href="#"  onclick ="controlaMenu('menu_c/altaUsuario')" >Consulta Articulos</a></li>
                        
								          </ul>
								      </li>
								    </ul>

							<div>
								
							</div>

           			</div>
           			<div id="bodyInterior">
           				
           			</div>
				</div>
			</div>