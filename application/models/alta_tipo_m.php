<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alta_tipo_m extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		
	}
public function guardarTipoArticulo($descripcion, $clave){
    $customQuery = "INSERT INTO cat_tipo_mueble(descripcion,estatus,clave) VALUES ('".$descripcion."', 1 , '".$clave."')";
		$resultado = $this->db->query($customQuery);
			if ($resultado) {
			return true;
		} else {
			return false;
		}

	}
}


/* End of file  */
/* Location: ./application/models/ */