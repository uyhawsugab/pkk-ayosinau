<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/m_guru', 'gur');
	}

	public function index()
	{
		$data['dataGuru']=$this->gur->getGuru();
		$data['content']='admin/v_guru';
		$this->load->view('admin/template', $data);
		
	}

}

/* End of file guru.php */
/* Location: ./application/controllers/guru.php */