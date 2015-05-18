
/*function eliminarUsuario(idUsuario) {

	var base = "<?php echo base_url();?>";
	//var resultado=

}*/
function eliminarUsuario(idUsuario){
	//alert();
	alert("soy el id del usuario a borrar: "+idUsuario);
	$.ajax({
		url: 'http://localhost/inventarioCGMA/consultar_usuario_c/eliminarUsuario',
		type: 'post',
		data: {idUsuario: idUsuario},
		success: function (data){
			 	 $("#bodyInterior").html(data);			
		},
		error: function (data) {
			//alert('Datos no guardados');
		}

	});
}