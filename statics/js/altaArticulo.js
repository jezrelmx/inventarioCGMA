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
				$("#bodyInterior").html(data);
			
				 					
			},
			error: function (data) {
				alert("Ërror al guardar");
				
				
			}

		});
}