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

	public function altaArticulo()
	{
	//echo "estamos en alta articulo";
	$this->load->view('alta','');	
	}
	public function altaUsuario()
	{
	//echo "estamos en alta articulo";
	$this->load->view('articulo','');	
	}
	public function altaTipo()
	{
	//echo "estamos en alta articulo";
	$this->load->view('alta_tipo_v','');	
	}

}

/* End of file inventario_c.php */
/* Location: ./application/controllers/inventario_c.php */