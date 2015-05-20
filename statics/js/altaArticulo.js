function guardarArticulo(){

	var txtProgresivo = $('#txtProgresivo').val();
	var txtCaracterisicas = $('#txtCaracterisicas').val();
	var id_tipo_mueble= $('#id_tipo_mueble option:selected').val();
	var id_estatus= $('#id_estatus option:selected').val(); //<!--Si le quitaramos el option:selected mandaria a todas las opciones-->
			

	var liga = base + 'altaArticulo_c/altaArticulo';
	$.ajax({
			url: liga,
			type: 'post',
			data: {id_tipo_mueble: id_tipo_mueble, progresivo: txtProgresivo, caracteristicas: txtCaracterisicas, id_estatus: id_estatus},
			success: function (data) {

				//var JSON_resultado = JSON.parse(data);
				//alert(data);
				window.location = base + 'menu_c';
				//redirect(base_url()."menu_c");
				/*if (JSON_resultado.code == 200) {
				 	//Actualizar tabla de usuarios

				 	alert(JSON_resultado.message);
				 	redirect(base_url()."menu_c");
				
				 
				};
				*/
				 					
			},
			error: function (data) {
				//alert(JSON_resultado.message);
				alert("Ërror al guardar");
				
				
			}

		});
}