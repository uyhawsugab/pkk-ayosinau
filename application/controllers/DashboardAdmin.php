<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardAdmin extends CI_Controller {

	public function index()
	{
		$data['konten'] = 'admin/homepage';
		$this->load->view('admin/template', $data);
		
	}

}

/* End of file DashboardAdmin.php */
