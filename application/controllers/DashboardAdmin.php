<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardAdmin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/Modul', 'mod');
		$this->load->model('admin/JenisModul', 'jmod');
		$this->load->model('admin/Mapel', 'map');
		
		
	}

	public function index()
	{
		$data['content'] = 'admin/homepage';
		$this->load->view('admin/template', $data);
		
	}
	
	public function modul_berbayar()
	{
		//$data['dataJenis'] = $this->jmod->get();
		$data['dataMapel'] = $this->map->get();
		$data['dataModul'] = $this->mod->getBayar();
		$data['content'] = 'admin/Modul_berbayar';
		$this->load->view('admin/template', $data);
		
	}

}

/* End of file DashboardAdmin.php */
