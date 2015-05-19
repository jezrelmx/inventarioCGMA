<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resguardo_m extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function obtener_resguardo($usuario){
		
		$sql_query="select u.id_usuario,c_t_m.descripcion as tipo, c_t_m.estatus, c_t_m.clave, art.progresivo, art.caracteristicas, c_e.descripcion 
					from cat_tipo_mueble c_t_m
					inner join articulos art on(art.id_tipo_mueble=c_t_m.id_tipo_mueble)
					inner join cat_estatus c_e on(c_e.id_estatus=art.id_estatus)
					inner join usuario_has_articulo u_h_a on(u_h_a.id_articulo=art.id_articulo)
					inner join usuarios u on(u.id_usuario=u_h_a.id_usuario)";
		if($usuario){			
			$sql_query.="where u.email='".$usuario."'";
		}else{
			$sql_query.="where c_t_m.estatus=1 ;";

		}
		$resultado = $this->db->query($sql_query);
		if ($resultado) {
			if ($resultado->num_rows()>0 ) {
				return $resultado->result_array();
			} else {
				return array();
			}
		}else{
			return FALSE;
		}
		
	}
	
	
	
}

/* End of file usuario_m.php */
/* Location: ./application/models/usuario_m.php */