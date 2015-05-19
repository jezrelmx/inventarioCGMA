function cambiarEstatusTipoArticulo(idTipoArticulo){
				$.ajax({
						url: 'http://localhost/inventarioCGMA/consultarTipoArticulo_c/cambiarEstatusTipoArticulo',
						type: 'post',
						data: {idTipoArticulo: idTipoArticulo},
						success: function (data) {
							 	alert(data);

							 // $('#bodyInterior').html(data);
							//var JSON_resultado = JSON.parse(data);
							 //alert(JSON_resultado.message );
							 //if (JSON_resultado.code == 200) {
							 	//Actualizar tabla de usuarios
							 
							 //};	 					
						},
						error: function (data) {
							//alert('Datos no guardados');
						}

					});
			}