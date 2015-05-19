<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_m extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	public function buscar_usuario($usuario,$have_pass=0){
		if($have_pass==0){
			$customQuery="select id_usuario, nombre, ap_paterno, ap_materno, cargo, num_empleado, 
      		 id_direccion_ejecutiva, id_tipo_usuario, email, estatus, contrasenia from usuarios";
		}else{
			$customQuery="select id_usuario, nombre, ap_paterno, ap_materno, cargo, num_empleado, 
      		 id_direccion_ejecutiva, id_tipo_usuario, email, estatus from usuarios";	
		}

		if($usuario){
			$customQuery .=  " where email='".$usuario."' and estatus=1;";
		
		}else{
			$customQuery .=  " where estatus=1;";
			
		}

		$resultado = $this->db->query($customQuery);

		// $resultado = 1;
		if ($resultado->num_rows()>0 ) {
			return $resultado->result_array();
		} else {
			return false;
		}
	}
	
}

/* End of file usuario_m.php */
/* Location: ./application/models/usuario_m.php */