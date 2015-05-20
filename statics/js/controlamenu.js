function controlaMenu(controlador) {
	var liga = base + controlador;
	//var liga = 'http://localhost/inventarioCGMA/';

	$.ajax({
			url:  liga,
			type: 'post',
			data: '',
			success: function (data) {
					//alert(data);
				$('#bodyInterior').html(data);
				
			},
			error: function () {
				alert('Te equivocaste mi buen');
			}
	});
}