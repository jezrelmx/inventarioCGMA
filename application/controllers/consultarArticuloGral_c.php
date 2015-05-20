<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ConsultarArticuloGral_c extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','html'));
		$this->load->library(array('user_agent'));
		$this->config->base_url();
		$this->load->model(array('consultarArticuloGral_m','altaArticulo_m'));
	}

	public function index()
	{
		$datos['cat_estatus']=$this->altaArticulo_m->traerEstatus();
		$datos['listaArticulos']=$this->consultarArticuloGral_m->obtenerDatosArticulo();
		$this->load->view('ConsultarArticuloGral_v',$datos);
	}

	public function eliminarArticulo(){
		$id_articulo=$this->input->post('id_articulo');
		$resultado=$this->consultarArticuloGral_m->eliminarArticulo($id_articulo);

		if ($resultado) {
			if($this->agent->mobile() && !$this->agent->is_browser()){
				$arregloJSON = array(
					"code" => 200,
					"message" => "Se elimino correctamente",
					"data" => 'No aplica'
				 );

				echo json_encode($arregloJSON);
			}else{
				$this->index();	
			}
			
		}else{
			if($this->agent->mobile() && !$this->agent->is_browser()){
				$arregloJSON = array(
					"code" => 600,
					"message" => "No se elimino correctamente",
					"data" => 'No aplica'
				 );

				echo json_encode($arregloJSON);
			}else{
				echo "No se elimino correctamente";
			}
			
		}
	}
}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */