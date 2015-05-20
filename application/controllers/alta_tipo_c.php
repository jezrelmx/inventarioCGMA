<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alta_tipo_c extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
			$this->load->helper(array('url','html'));
			$this->load->library(array('user_agent'));
			$this->config->base_url();
			$this->load->model(array('alta_tipo_m'));
	}

	public function altaTipo()
	{
		$this->load->view('alta_tipo_v','');
	}
	public function guardarTipoArticulo()
	{
		$descripcion = $this->input->post('descripcion');
	    $clave = $this->input->post('clave');
		//echo "Estamos en el controlador guardarTipoArticulo";
		$resultado = $this->alta_tipo_m->guardarTipoArticulo($descripcion, $clave);
		if($this->agent->mobile()){
				if($resultado){
					$arregloJSON = array(
					"code" => 200,
					"message" => "Se agrego tipo articulo",
					"data" => 'No aplica',
				);
				}
				else{
					$arregloJSON = array(
				"code" => 600,
				"message" => "No hay usuarios",
				"data" => "no aplica" 
				);
				}
				echo json_encode($arregloJSON);
		}
		else {
			if($resultado){
				echo "Se dio de alta correctamente";
			}else{
				
				echo "Error en el alta tipo articulos";
				
			}
		}
	}
}

/* End of file  */
/* Location: ./application/controllers/ */