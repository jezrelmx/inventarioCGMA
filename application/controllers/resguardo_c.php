<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resguardo_c extends CI_Controller {

	function __construct(){
			parent::__construct();
			$this->load->helper(array('url','html'));
			$this->load->library(array('user_agent'));
			$this->config->base_url();
			$this->load->model(array('resguardo_m','index_m'));
		}

	public function index(){
		
		//$this->load->view('index_v','');
	}
	public function resguardo($usuario=''){

		//echo "Estoy en resguardo_c y el id es: ".$id_usuario;$
		if (strcmp($usuario, '')==0) {
			$datos['usuario']=$this->index_m->buscar_usuario(FALSE,1);
			$datos['resguardo']=$this->resguardo_m->obtener_resguardo(FALSE,1);
		}else{
			$datos['usuario']=$this->index_m->buscar_usuario($usuario);
			$datos['resguardo']=$this->resguardo_m->obtener_resguardo($usuario);
		}
		if ($datos['usuario'] && ($datos['resguardo'] && !empty($datos['resguardo']))) {
			if($this->agent->mobile() && !$this->agent->is_browser()){

				$arregloJSON = array(
					"code" => 200,
					"message" => "resguardo por usuario",
					"data" => json_encode($datos),
				 );

				echo json_encode($arregloJSON);
			}else{
				$this->load->view('resguardo_v',$datos);
			}
		}else{
			if($this->agent->mobile() && !$this->agent->is_browser()){

				$arregloJSON = array(
					"code" => 600,
					"message" => "Fallo la consulta de resguardo",
					"data" => 'No aplica'
				 );

				echo json_encode($arregloJSON);
			}else{
				if (empty($datos['resguardo'])) {
					echo "Usuario sin resguardo asignado";
				}else{
					echo "Fallo la consulta de resguardo";	
				}
				
			}
		}
		

		
		
		
	}

}
