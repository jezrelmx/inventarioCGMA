<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class ConsultarTipoArticulo_c extends CI_Controller {

		function __construct(){

				parent::__construct();

				$this-> load ->helper(array('url', 'html'));//puedo enlistar la lista de controladores que vaya a necesitar mediate comas
				$this-> config ->base_url();
				$this->load->library(array('user_agent'));
				$this-> load ->model(array('consultarTipoArticulo_m'));//puedo enlistar la lista de modelos que vaya a necesitar mediate comas
			}

		public function consultarTipoArticulo(){
			$datos['listaArticulos']=$this->consultarTipoArticulo_m->obtenerArticulos();

			

			if($this->agent->mobile() && !$this->agent->is_browser()){
				if (!empty($datos['listaArticulos']) && $datos['listaArticulos']) {
					$arregloJSON = array(
						"code" => 200,
						"message" => "Lista de articulos",
						"data" => json_encode($datos['listaArticulos'])

					 );					
				}else if (empty($datos['listaArticulos'])) {
					$arregloJSON = array(
						"code" => 200,
						"message" => "Lista de articulos vacía",
						"data" => json_encode($datos['listaArticulos'])
					 );					
				}else{
					$arregloJSON = array(
						"code" => 600,
						"message" => "Falla al ejecutar query",
						"data" => "No aplica"
					 );					
				}
				echo json_encode($arregloJSON);
			}else{
				if (empty($datos['listaArticulos'])) {
					echo "Lista de artículos vacía";				
				}else{

					foreach ($datos['listaArticulos'] as $key=>$articulos) {
						if($articulos['estatus']==1){
							$datos['listaArticulos'][$key]['estatus']="Activo";
						}else{
							$datos['listaArticulos'][$key]['estatus']="Inactivo";

						}
					}
					
					$this->load->view('consultarTipoArticulo_v',$datos);
					
				}
				
			}
		}//FinConsultarTipoArticulo


		public function cambiarEstatusTipoArticulo(){
			$idTipoArticulo = $this->input->post('idTipoArticulo');

			$resultado = $this->consultarTipoArticulo_m->cambiarEstatusTipoArticulo($idTipoArticulo);

			if ($resultado) {

				echo $this->consultarTipoArticulo();
			}else{
				echo "Error al cambiar estatus";
			}

		}//FinEliminarTipoArticulo

	}//FinController
?>
