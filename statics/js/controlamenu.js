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
				
				$("#navbar li").each(function (index) 
        		{ 
           		 	 $(this).removeClass('active');					
				});
				$("#"+idbtn).addClass('active');
				/*$(function() {
    			 var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
     				$("#nav ul li a").each(function(){
          
          			if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
          				$(this).addClass("active");
     				})
				});**/
			
			},
			error: function () {
				alert('Te equivocaste mi buen');
			}
	});
}