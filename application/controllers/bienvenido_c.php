<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bienvenido_c extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','html'));
		$this->config->base_url();
	}

	public function index()
	{
	
		$this->load->view('bienvenido_v','');
	}

}

/* End of file  */
/* Location: ./application/controllers/ */