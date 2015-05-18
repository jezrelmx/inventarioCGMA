<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_c extends CI_Controller {

	function __construct(){
			parent::__construct();
			$this->load->helper(array('url','html'));
			$this->load->library(array('user_agent'));
			$this->config->base_url();
			$this->load->model(array('index_m'));
		}

	public function index()
	{
		$this->load->view('index_v','');
	}
	public function inicia_sesion(){
		
		$usuario=$this->input->post('txtCorreo');
		$contrasenia=$this->input->post('txtContrasenia');
		$resultado=$this->index_m->buscar_usuario($usuario, $contrasenia);
		$tipo_usuario;

		if($resultado){
			$tipo_usuario=$resultado[0]['id_direccion_ejecutiva'];
			
			if($this->agent->mobile()){
				$arregloJSON = array(

				"code" => 200,
				"message" => "Usuario encontrado",
				"data" => json_encode($resultado[0]),
				 );

				echo json_encode($arregloJSON);
			}else{

				if($tipo_usuario==1){					
					redirect(base_url()."menu_c");
				}else{
					redirect("http://google.com.mx");
				}
			}
		}else{
			if($this->agent->mobile()){
				$arregloJSON = array(
				"code" => 600,
				"message" => "Verifique usuario y contraseña",
				"data" => "no aplica" 
				);
				echo json_encode($arregloJSON);
			}else{
				
					echo "Error al loguearse";
				
			}
			
			
		}
			
		
	//echo "Bienvenido".$usuario."  ".$contrasenia;
	}
}
