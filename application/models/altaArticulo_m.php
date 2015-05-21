<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
class AltaArticulo_m extends CI_Model{
	function __construct(){
			parent::__construct();
			$this->load->database();//Aqui se endicq que base de datos se va a usar como parametro, si o hay parametro de va a la de default
		}

		public function traerTipos(){
			$datos=array();
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

		public function guardarArticulo($idTipoMueble, $progresivo, $caracteristicas, $idEstatus,$email){
			$resultado=FALSE;
			if(strcmp($email,'0')==0){
				$customQuery = "INSERT INTO articulos(id_tipo_mueble, progresivo, caracteristicas, id_estatus) VALUES (".$idTipoMueble.", ".$progresivo.",'".$caracteristicas."' , ".$idEstatus.");";
				$resultado = $this->db->query($customQuery);
			}else{		

				$selectUsr="SELECT id_usuario FROM usuarios where email='".$email."'";
				$usuario = $this->db->query($selectUsr);
				if($usuario){
					if ($usuario->num_rows()>0 ) {
						foreach ( $usuario->result() as $row){
							$id_usuario= $row->id_usuario;
						}

						$customQuery = "INSERT INTO articulos(id_tipo_mueble, progresivo, caracteristicas, id_estatus) VALUES (".$idTipoMueble.", ".$progresivo.",'".$caracteristicas."' , ".$idEstatus.");";
						$resultado = $this->db->query($customQuery);
						$id_articulo=$this->db->insert_id();

						$customQuery = "INSERT INTO usuario_has_articulo(id_usuario, id_articulo) VALUES (".$id_usuario.", ".$id_articulo.");";
						$resultado = $this->db->query($customQuery);
					}
				}

			}
	
			if ($resultado) {
				return true;
			} else {
				return false;
			}

		}//FinAltaArticulo
}?>