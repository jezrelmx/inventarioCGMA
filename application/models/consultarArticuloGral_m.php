<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class ConsultarArticuloGral_m extends CI_Model{
	function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function obtenerDatosArticulo(){

			$customQuery = "SELECT  art.id_articulo,catm.descripcion as tipo, catm.clave || '-' || art.progresivo as numInventario, art.caracteristicas, art.id_estatus, usr.nombre || ' ' || usr.ap_paterno as usuario, usr.num_empleado
				  FROM articulos art 
				  left join usuario_has_articulo usa on usa.id_articulo = art.id_articulo
				  left join usuarios usr on usr.id_usuario= usa.id_usuario
				  left join cat_tipo_mueble catm on catm.id_tipo_mueble= art.id_tipo_mueble order by tipo;";
		 	$resultado = $this->db->query($customQuery);

		if ($resultado->num_rows()>0 ) {
			return $resultado->result_array();
		} else {
			return FALSE;
		}
	}

	public function eliminarArticulo($id_articulo){
		$customQuery = "UPDATE articulos SET id_estatus=3 WHERE id_articulo=$id_articulo";
		$resultado = $this->db->query($customQuery);

		if ($resultado) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	
}
 ?>