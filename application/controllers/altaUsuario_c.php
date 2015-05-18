<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class AltaUsuario_c extends CI_Controller {

 function __construct(){

 parent::__construct();

 $this-> load ->helper(array('url', 'html'));
 $this-> load-> library('user_agent');
 $this-> config ->base_url();
 $this-> load ->model(array('altaUsuario_m'));
 }

 public function index(){
 	$datos['cat_tipo_usuario']=$this->altaUsuario_m->mostrarTipoUsuario();
 	$datos['cat_direccion_ejecutiva']=$this->altaUsuario_m->mostrarDireccionEjecutiva();
    $this->load->view('altaUsuario_v', $datos);
 }

public function catalogoUsuarios(){
	$datos['cat_tipo_usuario']=$this->altaUsuario_m->mostrarTipoUsuario();
 	$datos['cat_direccion_ejecutiva']=$this->altaUsuario_m->mostrarDireccionEjecutiva();

	 if($datos){

	 $respuesta_json= array(
	 'code' => 200,
	 'message' => 'Catalogo de usuarios correcto',
	 'data' => $datos
	 );
	 echo json_encode($respuesta_json);
	 }else{
	 $respuesta_json= array(
	 'code' => 600,
	 'message' => 'Catalogo de usuarios incorrecto',
	 'data' => 'Error' 
	 );
	 echo json_encode($respuesta_json);
	 }

}

public function guardarDatosUsuario(){
	//echo "estamos en el controlador";
	 	$nombre = $this->input->post('nombre');
	    $ap_paterno = $this->input->post('ap_paterno');
		$ap_materno = $this->input->post('ap_materno');
		$cargo = $this->input->post('cargo');
		$num_empleado = $this->input->post('num_empleado');
		$id_direccion_ejecutiva = $this->input->post('id_direccion_ejecutiva');
		$id_tipo_usuario = $this->input->post('id_tipo_usuario');
		$email = $this->input->post('email');
		$contrasenia = $this->input->post('contrasenia');
		$estatus = $this->input->post('estatus');
		echo $nombre.'-app'.$ap_paterno.'-apm'.$ap_materno.'-cargo'.$cargo.'-numem'.$num_empleado.'-
		'.'-ide'.$id_direccion_ejecutiva.'-dtu'.$id_tipo_usuario.'-email'.$email.'-pass'.$contrasenia.'-est'.$estatus;
		$resultado=$this->altaUsuario_m->guardarDatosUsuario($nombre, $ap_paterno, $ap_materno, $cargo, $num_empleado, $id_direccion_ejecutiva, $id_tipo_usuario, $email, $contrasenia, $estatus);
		 
		if($resultado){
		 	$respuesta_json= array(
		 		'code' => 200,
		 		'message' => 'Usuario registrado',
		 		'data' => 'No aplica' 
		 	 );
			echo json_encode($respuesta_json);
		 
		}else{
			$respuesta_json= array(
		 		'code' => 500,
		 		'message' => 'Usuario no registrado',
		 		'data' => 'No aplica' 
		 	 );
			echo json_encode($respuesta_json);
		}

}

public function mostrarTipoUsuario(){
	$tipoUsuario=$this->altaUsuario_m->mostrarTipoUsuario();
	if($tipoUsuario){

				$respuesta_json= array(
			 		'code' => 200,
			 		'message' => 'ok',
			 		'data' => json_encode($tipoUsuario)
			 	 );
				echo json_encode($respuesta_json);
			}else{
				$respuesta_json= array(
			 		'code' => 600,
			 		'message' => 'error',
			 		'data' => 'Error' 
			 	 );
				echo json_encode($respuesta_json);
			}
}

public function mostrarDireccionEjecutiva(){
	$direccion=$this->altaUsuario_m->mostrarDireccionEjecutiva();
	if($direccion){

				$respuesta_json= array(
			 		'code' => 200,
			 		'message' => 'ok',
			 		'data' => json_encode($direccion)
			 	 );
				echo json_encode($respuesta_json);
			}else{
				$respuesta_json= array(
			 		'code' => 600,
			 		'message' => 'error',
			 		'data' => 'Error' 
			 	 );
				echo json_encode($respuesta_json);
			}
}

}
?>