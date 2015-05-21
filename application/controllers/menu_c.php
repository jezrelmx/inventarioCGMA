<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu_c extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','html'));
		$this->config->base_url();
		//$this->load->model(array('menu_m'));
	}

	public function index()
	{
		$this->load->view('head_v','');	
		$this->load->view('footer_v','');	
		$this->load->view('body_menu_v','');
	}
	public function bienvenido()
	{
		$this->load->view('bienvenido_v','');
	}

}

/* End of file inventario_c.php */
/* Location: ./application/controllers/inventario_c.php */