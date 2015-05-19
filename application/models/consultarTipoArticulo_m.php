<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ConsultarTipoArticulo_m extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	


	public function obtenerArticulos(){

		$customQuery = "SELECT  id_tipo_mueble,descripcion, clave, estatus FROM cat_tipo_mueble  order by descripcion;";
		$resultado = $this->db->query($customQuery);
	
		if($resultado){
			if ($resultado->num_rows()>0 ) {
				foreach ( $resultado->result() as $row){
					$datos[$row->id_tipo_mueble]['descripcion']= $row->descripcion;
					$datos[$row->id_tipo_mueble]['estatus']= $row->estatus;
					$datos[$row->id_tipo_mueble]['clave']= $row->clave;
			    }

			    return $datos;
			} else {
				return array();
			}
		}else{
			return FALSE;
		}
		


	}//FinObtenerArticulos

	public function cambiarEstatusTipoArticulo($idTipoMueble){

		$customQuery= "UPDATE cat_tipo_mueble SET estatus=0 WHERE id_tipo_mueble= ".$idTipoMueble.";";
		$resultado = $this->db->query($customQuery);
		if ($resultado) {
			return true;
		} else {
			return false;
		}
	}//FinCambiarETA		
}
/* End of file usuario_m.php */
/* Location: ./application/models/usuario_m.php */
