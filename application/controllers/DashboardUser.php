<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardUser extends CI_Controller {

	public function index()
	{
		$data['content'] = 'user/homepage';
		$this->load->view('user/template', $data);
		
	}

	public function modulPage()
	{
		$data['konten'] = 'user/buy-modul';
		$this->load->view('user/modul-page', $data);
		
	}

}

/* End of file DashboardUser.php */
