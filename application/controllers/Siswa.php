<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/m_siswa', 'siswa');
	}

	public function index()
	{
		$data['dataSiswa'] = $this->siswa->getsiswa();
		$data['content'] = 'admin/v_siswa';
		$this->load->view('admin/template', $data);
		
	}

}

/* End of file Siswa.php */
/* Location: ./application/controllers/Siswa.php */