<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alta_tipo_c extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
			$this->load->helper(array('url','html'));
			$this->load->library(array('user_agent'));
			$this->config->base_url();
			$this->load->model(array('alta_tipo_m'));
	}

	public function altaTipo()
	{
		$this->load->view('alta_tipo_v','');
	}

}

/* End of file  */
/* Location: ./application/controllers/ */