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
		$resultado=$this->index_m->buscar_usuario($usuario);
		$tipo_usuario;
		
		if($resultado){
			if($resultado[0]['id_tipo_usuario']==1 && strcmp($contrasenia, '')>0 && strcmp($contrasenia,$resultado[0]['contrasenia'])==0){
				$tipo_usuario=$resultado[0]['id_direccion_ejecutiva'];
	
				if($this->agent->mobile() && !$this->agent->is_browser()){
					unset($resultado[0]['contrasenia']);

					$arregloJSON = array(

					"code" => 200,
					"message" => "Usuario encontrado",
					"data" => json_encode($resultado[0]),
					 );

					echo json_encode($arregloJSON);
				}else{

					if($tipo_usuario==1){		

						redirect(base_url()."menu_c");
					}
				}
			}else if($resultado[0]['id_tipo_usuario']==2){
				//usuario servidor público
				//$id_usuario=$resultado[0]['id_usuario'];
				redirect(base_url()."resguardo_c/resguardo/".$usuario.'/'.$resultado[0]['id_tipo_usuario']);				
			}else{
				echo "El tipo de usuario no existe";
			}
			
		}else{
			if($this->agent->mobile() && !$this->agent->is_browser()){
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
