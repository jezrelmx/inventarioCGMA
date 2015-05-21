function cambiarEstatusTipoArticulo(idTipoArticulo){
				$.ajax({
						url: base+'consultarTipoArticulo_c/cambiarEstatusTipoArticulo',
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