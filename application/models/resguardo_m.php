<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resguardo_m extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function obtener_resguardo($usuario){
		
		$sql_query="select usr.id_usuario, usr.nombre || ' ' || usr.ap_paterno as nombre, usr.num_empleado, art.progresivo, art.caracteristicas,c_t_m.descripcion as tipo, 
				c_t_m.clave, c_e.descripcion as estatus, cdir.nombre as direccion,usr.cargo 
				from usuario_has_articulo uha 
				left join usuarios usr on usr.id_usuario=uha.id_usuario 
				inner join cat_direccion_ejecutiva cdir on (cdir.id_direccion_ejecutiva=usr.id_direccion_ejecutiva) 
				inner join articulos art on(art.id_articulo=uha.id_articulo) 
				left join cat_tipo_mueble c_t_m on c_t_m.id_tipo_mueble=art.id_tipo_mueble 
				inner join cat_estatus c_e on(c_e.id_estatus=art.id_estatus) ";
		if(strcmp($usuario,'')>0){			
			$sql_query.=" where usr.email='".$usuario."' ";
		}
		$sql_query.=" order by usr.id_usuario;";

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