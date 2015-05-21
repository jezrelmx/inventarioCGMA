function guardarTipoArticulo(){
				//alert('Se guardaran datos');
				var txtDescripcion = $('#txtDescripcion').val();
				var txtClave = $('#txtClave').val();
				var datosJSON={ descripcion: txtDescripcion, clave:txtClave}   
        		var liga = base + 'alta_tipo_c/guardarTipoArticulo';
       			// alert(liga);

        		$.ajax({
						url: liga,
						type: 'post',
						data: datosJSON,
						success: function (data) {
							 	//alert(data);	
							 	$("#bodyInterior").html(data);
													 					
						},
						error: function (data) {
							alert('Datos no guardados');
						}

					});

			}
