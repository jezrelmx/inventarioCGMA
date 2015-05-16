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
		$resultado=$this->consultar_usuario_m->obtener_usuario();
		if ($resultado) {
			$datos['resultado']=$resultado;
			if($this->agent->mobile()){
				$arregloJSON = array(

				"code" => 200,
				"message" => "Lista de usuarios",
				"data" => json_encode($datos),
				 );

				echo json_encode($arregloJSON);
			}else{
				$this->load->view('Consultar_usuario_v',$datos);	
			}

				
		}else {
			if($this->agent->mobile()){
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
	
}
