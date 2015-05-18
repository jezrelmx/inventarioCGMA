function guardarDatosUsuario(){
				//alert('Se guardaran datos');
				var txtNombreUsuario = $('#txtNombre').val();
				var txtContrasenia = $('#txtContrasenia').val();
				var txtCorreo = $('#txtCorreo').val();
				var txtAp_paterno = $('#txtAp_paterno').val();
				var txtAp_materno = $('#txtAp_materno').val();
				var txtCargo = $('#txtCargo').val();
				var txtNempleado = $('#txtNempleado').val();
				var direccionE = $('#direccion option:selected').val();
				var tipo = $('#tipoUsuario option:selected').val();
				var txtEstatus = $('#txtEstatus').val();

				var datosJSON={ nombre: txtNombreUsuario, contrasenia:txtContrasenia, id_direccion_ejecutiva:direccionE,id_tipo_usuario:tipo, email:txtCorreo, num_empleado:txtNempleado, cargo:txtCargo,ap_paterno:txtAp_paterno,ap_materno:txtAp_materno, estatus:txtEstatus};
				

				/*if (guardarUsuario==1) {
					var urlControlador = 'http://localhost/inventarioCGMA/index.php/altaUsuario_c/guardarDatosUsuario';

				}else{
					var urlControlador = 'http://localhost/cgma_musica/index.php/Welcome/editarDatosUsuario';

				};*/   
        var liga = base + 'altaUsuario_c/guardarDatosUsuario';
       // alert(liga);

        	$.ajax({
						url: liga,
						type: 'post',
						data: datosJSON,
						success: function (data) {
							 	alert(data);							 					
						},
						error: function (data) {
							//alert('Datos no guardados');
						}

					});

			}
