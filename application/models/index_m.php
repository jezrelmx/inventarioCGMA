<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_m extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	public function buscar_usuario($usuario,$have_pass=0){
		if($have_pass==0){
			$customQuery="select u.id_usuario, u.nombre, u.ap_paterno, u.ap_materno, u.cargo, u.num_empleado, 
      		 c_d_t.nombre as nom_direccion,u.id_direccion_ejecutiva, u.id_tipo_usuario, u.contrasenia,
      		 u.email, u.estatus from usuarios u
      		 inner join cat_direccion_ejecutiva c_d_t on(u.id_direccion_ejecutiva=c_d_t.id_direccion_ejecutiva)";
		}else{
			$customQuery="select u.id_usuario, u.nombre, u.ap_paterno, u.ap_materno, u.cargo, u.num_empleado, 
      		 c_d_t.nombre as nom_direccion,u.id_direccion_ejecutiva, u.id_tipo_usuario, 
      		 u.email, u.estatus from usuarios u
      		 inner join cat_direccion_ejecutiva c_d_t on(u.id_direccion_ejecutiva=c_d_t.id_direccion_ejecutiva)";	
		}

		if($usuario){
			$customQuery .=  " where u.email='".$usuario."' and u.estatus=1;";
		
		}else{
			$customQuery .=  " where u.estatus=1;";
			
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