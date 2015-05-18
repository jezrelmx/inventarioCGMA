<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alta_tipo_m extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		
	}

}

/* End of file  */
/* Location: ./application/models/ */