<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultar_usuario_m extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	public function obtener_usuario($id=0){
		if($id==0){
			$customQuery="select u.*, c_t_d.nombre as nom_direccion from usuarios u 
					inner join cat_direccion_ejecutiva c_t_d on(c_t_d.id_direccion_ejecutiva=u.id_direccion_ejecutiva) 
					where estatus=1 order by id_usuario ";
			
		}else{
			$customQuery="select u.*, c_t_d.nombre as nom_direccion from usuarios u 
					inner join cat_direccion_ejecutiva c_t_d on(c_t_d.id_direccion_ejecutiva=u.id_direccion_ejecutiva) 
					where id_usuario=".$id." and estatus=1 order by id_usuario;";
		}
		
		$resultado = $this->db->query($customQuery);	
		// $resultado = 1;
		if ($resultado->num_rows()>0 ) {
			return $resultado->result_array();
		} else {
			return false;
		}

	}
	public function eliminarUsuario($idUsuario){
		$customQuery="UPDATE usuarios SET estatus=0 WHERE id_usuario=".$idUsuario.";";

		
		$resultado = $this->db->query($customQuery);
		if($resultado){
			return true;
		}else{
			return false;
		}

	}
	public function eliminarUsuarioEmail($email){
		$customQuery="UPDATE usuarios SET estatus=0 WHERE email='".$email."';";

		
		$resultado = $this->db->query($customQuery);
		if($resultado){
			return true;
		}else{
			return false;
		}

	}
}

/* End of file usuario_m.php */
/* Location: ./application/models/usuario_m.php */