<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultar_usuario_c extends CI_Controller {

	function __construct(){
			parent::__construct();
			$this->load->helper(array('url','html'));
			$this->load->library(array('user_agent'));
			$this->config->base_url();
			$this->load->model(array('consultar_usuario_m'));
	}

	public function index(){
		$resultado=$this->consultar_usuario_m->obtener_usuario(0);
		if ($resultado) {
			$datos['resultado']=$resultado;
			if($this->agent->mobile() && !$this->agent->is_browser()){
				$arregloJSON = array(

				"code" => 200,
				"message" => "Lista de usuarios",
				"data" => $resultado
				 );

				echo json_encode($arregloJSON);
			}else{
				$this->load->view('consultar_usuario_v',$datos);	
			}

				
		}else {
			if($this->agent->mobile() && !$this->agent->is_browser()){
				$arregloJSON = array(
				"code" => 600,
				"message" => "No hay usuarios",
				"data" => "no aplica" 
				);
				echo json_encode($arregloJSON);
			}else{
				
					echo "No hay usuarios";
				
			}
		}
		
	}
	public function eliminarUsuario(){
		
		$id_usuario=$this->input->post('idUsuario');
		$resultado=$this->consultar_usuario_m->eliminarUsuario($id_usuario);
		if ($resultado) {
			//$datos['resultado']=$resultado;
			if($this->agent->mobile() && !$this->agent->is_browser()){
				$arregloJSON = array(

				"code" => 200,
				"message" => "Usuario Eliminado",
				"data" => 'no aplica'//json_encode($datos),
				 );

				echo json_encode($arregloJSON);
			}else{
				$this->index();	
			}

				
		}else {
			if($this->agent->mobile() && !$this->agent->is_browser()){
				$arregloJSON = array(
				"code" => 600,
				"message" => "El usuario no se pudo eliminar",
				"data" => "no aplica" 
				);
				echo json_encode($arregloJSON);
			}else{
				
					echo "El usuario no se pudo eliminar";
				
			}
		}
	}
	
}
