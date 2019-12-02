<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AdminTransaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/Transaksi', 'trans');
	}


	public function index()
	{
		$data['dataTransaksi'] = $this->trans->get();
		$data['content'] = 'admin/v_transaksi';
		$this->load->view('admin/template', $data);
	}

	public function hapus_trans($id_transaski)
	{
		
	}

}

/* End of file adminTransaksi.php */
/* Location: ./application/controllers/adminTransaksi.php */