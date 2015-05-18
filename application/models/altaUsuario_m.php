<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
class AltaUsuario_m extends CI_Model{
	function __construct(){
			parent::__construct();
			$this->load->database();//Aqui se endicq que base de datos se va a usar como parametro, si o hay parametro de va a la de default
		}

public function guardarDatosUsuario($nombre, $ap_paterno, $ap_materno, $cargo, $num_empleado, $id_direccion_ejecutiva, $id_tipo_usuario, $email, $contrasenia, $estatus){
       	$customQuery = "INSERT INTO usuarios(nombre, ap_paterno, ap_materno, cargo, num_empleado, id_direccion_ejecutiva, id_tipo_usuario, email, contrasenia, 
            estatus) VALUES ('".$nombre."', '".$ap_paterno."', '".$ap_materno."',  '".$cargo."',  ".$num_empleado.", "
            .$id_direccion_ejecutiva.",".$id_tipo_usuario.", '".$email."', '".$contrasenia."', '".$estatus."')";
		$resultado = $this->db->query($customQuery);
			if ($resultado) {
			return true;
		} else {
			return false;
		}

}

public function mostrarDireccionEjecutiva(){
	$customQuery= "SELECT * FROM cat_direccion_ejecutiva;";
	$resultado = $this->db->query($customQuery);
	foreach ($resultado->result() as $row) {
	$datos[$row->id_direccion_ejecutiva]['nombre'] = $row->nombre; 	
	}
			if($resultado)
				return $datos;
			else
				return false;

}

public function mostrarTipoUsuario(){
	$customQuery= "SELECT * FROM cat_tipo_usuario;";
	$resultado = $this->db->query($customQuery);
	foreach ($resultado->result() as $row) {
	$datos[$row->id_tipo_usuario]['descripcion'] = $row->descripcion;
}
			if($resultado)
				return $datos;
			else
				return FALSE;
}



}
 ?>