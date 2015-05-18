function guardarArticulo(){

	var txtProgresivo = $('#txtProgresivo').val();
	var txtCaracterisicas = $('#txtCaracterisicas').val();
	var id_tipo_mueble= $('#id_tipo_mueble option:selected').val();
	var id_estatus= $('#id_estatus option:selected').val(); //<!--Si le quitaramos el option:selected mandaria a todas las opciones-->
			
	$.ajax({
			url: 'http://localhost/inventarioCGMA/altaArticulo_c/altaArticulo',
			type: 'post',
			data: {id_tipo_mueble: id_tipo_mueble, progresivo: txtProgresivo, caracteristicas: txtCaracterisicas, id_estatus: id_estatus},
			success: function (data) {

				var JSON_resultado = JSON.parse(data);
				//alert(JSON_resultado.message);
				if (JSON_resultado.code == 200) {
				 	//Actualizar tabla de usuarios

				 	alert(JSON_resultado.message);
				
				 
				};
				 					
			},
			error: function (data) {
				//alert(JSON_resultado.message);
				alert(JSON_resultado.message);
				
				
			}

		});
}