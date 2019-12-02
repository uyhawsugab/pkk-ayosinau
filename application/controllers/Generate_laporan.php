<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Generate_laporan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/m_siswa', 'sis');
		$data['datasiswa']=$this->sis->getsiswa();
		$this->load->model('admin/m_laporan', 'lap');
	}

	public function index()
	{
		$data['nota1']=$this->lap->getLaporan();
		$data['content']='admin/v_laporan';
		$this->load->view('admin/template', $data);
		
	}

}

