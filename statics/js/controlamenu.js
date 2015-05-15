<script>
			function controlaMenu() {
				//var url = base + 
				$.ajax({
						url: 'http://localhost/',
						type: 'post',
						data: {usuario: txtUsuario, contrasenia: txtContrasenia},
						success: function (data) {
							alert(data);
							// var JSON_resultado = JSON.parse(data);
							// if (JSON_resultado.code == 200) {
							// 	alert('Hoy si duermo');	
							// } else {
							// 	alert('Te veo borroso');	
							// };
						},
						error: function (data) {
							alert('Te equivocaste mi buen');
						}
					});
			}
		</script>