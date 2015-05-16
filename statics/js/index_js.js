
function admin() {
	//alert("soy js");
    var check = document.getElementById("soy_admin");
    if(check.checked == true){
    	
    	document.getElementById('div_contrasenia').style.display='block';
    }else{
    	document.getElementById('div_contrasenia').style.display='none';
    }


}
function iniciar_sesion(){
	var base_url = window.location.origin;
	var host = window.location.host;
	alert(host+"Index_c/iniciar_sesioniniciando sesion");
	var txtUsuario = document.getElementById('txtUsuario').value
	var txtContrasenia =document.getElementById('txtContrasenia').value;
	alert(txtUsuario+" "+txtContrasenia);

}