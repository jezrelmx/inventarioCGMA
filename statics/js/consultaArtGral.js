function eliminarArticulo(id){
	var url=base+'consultarArticuloGral_c/eliminarArticulo';
	$.ajax({
			url: url,
			type: 'post',
			data: {id_articulo: id},
			success: function (data) {
				$("#bodyInterior").html(data);		
			},
			error: function (data) {
				//alert(JSON_resultado.message);
				alert(JSON_resultado.message);
			}

		});
	
}