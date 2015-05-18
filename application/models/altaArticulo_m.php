<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
class AltaArticulo_m extends CI_Model{
	function __construct(){
			parent::__construct();
			$this->load->database();//Aqui se endicq que base de datos se va a usar como parametro, si o hay parametro de va a la de default
		}

		public function traerTipos(){
			$customQuery =  $this->db->query("SELECT * FROM cat_tipo_mueble WHERE estatus='1'");

			foreach ($customQuery->result() as $row) {
				$datos[$row->id_tipo_mueble]['descripcion'] = $row->descripcion;
				$datos[$row->id_tipo_mueble]['clave'] = $row->clave;
			}

			if($customQuery)
				return $datos;
			else
				return FALSE;
		
		}//FinTraerTipos




		public function traerEstatus(){
			$customQuery =  $this->db->query("SELECT * FROM cat_estatus");

			foreach ($customQuery->result() as $row) {
				$datos[$row->id_estatus]['descripcion'] = $row->descripcion;
			}

			if($customQuery)
				return $datos;
			else
				return FALSE;
		
		}//FinTraerTipos

		public function guardarArticulo($idTipoMueble, $progresivo, $caracteristicas, $idEstatus){

			$customQuery = "INSERT INTO articulos(id_tipo_mueble, progresivo, caracteristicas, id_estatus) VALUES (".$idTipoMueble.", ".$progresivo.",'".$caracteristicas."' , ".$idEstatus.");";
			//echo $customQuery;
			$resultado = $this->db->query($customQuery);
			
	
			if ($resultado) {
				return true;
			} else {
				return false;
			}

		}//FinAltaArticulo
}
 ?>

