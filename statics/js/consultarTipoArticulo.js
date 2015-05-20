function cambiarEstatusTipoArticulo(idTipoArticulo){
				$.ajax({
						url: 'http://localhost/inventarioCGMA/consultarTipoArticulo_c/cambiarEstatusTipoArticulo',
						type: 'post',
						data: {idTipoArticulo: idTipoArticulo},
						success: function (data) {
							 	
							 $('#bodyInterior').html(data);
								 					
						},
						error: function (data) {
							//alert('Datos no guardados');
						}

					});
			}