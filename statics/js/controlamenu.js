function controlaMenu(controlador,idbtn) {
	var liga = base + controlador;
	//var liga = 'http://localhost/inventarioCGMA/';

	$.ajax({
			url:  liga,
			type: 'post',
			data: '',
			success: function (data) {
					//alert(data);
				$('#bodyInterior').html(data);
				
				 $("#navbar li a").each(function (index) 
        		{ 
           			 $(this).removeClass('active');
						$("#"+idbtn).addClass('active');
				})
			},
			error: function () {
				alert('Te equivocaste mi buen');
			}
	});
}