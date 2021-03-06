<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class AltaArticulo_c extends CI_Controller {

		function __construct(){

				parent::__construct();

				$this-> load ->helper(array('url', 'html'));//puedo enlistar la lista de controladores que vaya a necesitar mediate comas
				$this-> config ->base_url();
				$this->load->library(array('user_agent'));
				$this-> load ->model(array('altaArticulo_m'));//puedo enlistar la lista de modelos que vaya a necesitar mediate comas
			}

		public function index(){

			$datos['cat_tipo']=$this->altaArticulo_m->traerTipos();
			$datos['cat_estatus']=$this->altaArticulo_m->traerEstatus();

			$this->load->view('altaArticulo_v',$datos);
		}//FinIdex

		public function traerCatalogos(){
			$datos['cat_tipo']=$this->altaArticulo_m->traerTipos();
			$datos['cat_estatus']=$this->altaArticulo_m->traerEstatus();

			if($datos){

				$respuesta_json= array(
			 		'code' => 200,
			 		'message' => 'Catalogo correcto',
			 		'data' => $datos
			 	 );
				echo json_encode($respuesta_json);
			}else{
				$respuesta_json= array(
			 		'code' => 600,
			 		'message' => 'Catalogo incorrecto',
			 		'data' => 'Error' 
			 	 );
				echo json_encode($respuesta_json);
			}
		}

		public function traerTipos(){
			$tipos=$this->altaArticulo_m->traerTipos();

			if($tipos){

				$respuesta_json= array(
			 		'code' => 200,
			 		'message' => 'Tipo correcto',
			 		'data' => json_encode($tipos)
			 	 );
				echo json_encode($respuesta_json);
			}else{
				$respuesta_json= array(
			 		'code' => 600,
			 		'message' => 'Tipo incorrecto',
			 		'data' => 'Error' 
			 	 );
				echo json_encode($respuesta_json);
			}
		}//FinTraerTipos


		public function traerEstatus(){
			$tipos=$this->altaArticulo_m->traerEstatus();

			if($tipos){

				$respuesta_json= array(
			 		'code' => 200,
			 		'message' => 'Estatus correcto',
			 		'data' => json_encode($tipos)
			 	 );
				echo json_encode($respuesta_json);
			}else{
				$respuesta_json= array(
			 		'code' => 600,
			 		'message' => 'Estatus incorrecto',
			 		'data' => 'Error' 
			 	 );
				echo json_encode($respuesta_json);
			}
		}//FinTraerTipos



		public function altaArticulo(){
			
			$idTipoMueble = $this->input->post('id_tipo_mueble');
			$progresivo = $this->input->post('progresivo');
			$caracteristicas = $this->input->post('caracteristicas');
			$idEstatus = $this->input->post('id_estatus');
			$email = $this->input->post('email');

			$resultado = $this->altaArticulo_m->guardarArticulo($idTipoMueble, $progresivo, $caracteristicas, $idEstatus,$email);
			
			if($resultado){
				if($this->agent->mobile() && !$this->agent->is_browser()){
					$respuesta_json= array(
				 		'code' => 200,
				 		'message' => 'Alta de articulo exitosa',
				 		'data' => 'No aplica' 
				 	 );
					echo json_encode($respuesta_json);
				}else{
					redirect(base_url().'consultarArticuloGral_c');
				}	 	
			 
			}else{
				if($this->agent->mobile() && !$this->agent->is_browser()){
					$respuesta_json= array(
				 		'code' => 600,
				 		'message' => 'Fallo al dar de alta',
				 		'data' => 'No aplica' 
				 	 );
					echo json_encode($respuesta_json);
				}else{
					echo "No se realizo la inserción del artículo verifique los datos y si el email existe";
				}
			}
		}//FinAltaArticulo
	}//FinController
?>