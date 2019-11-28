<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class getModul extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('getModul','mod');
		
	}
	
	public function index()
	{
		$dataMod = $this->mod->getModul();
		echo json_encode($dataMod);
	}

	public function search($namaModul = '')
	{
		$dataModul = $this->mod->searchModul($namaModul);
		echo json_encode($dataModul);
	}

	public function detail($id)
	{
		$data = $this->mod->getDetailData($id);
		echo json_encode($data);
	}

}

/* End of file getModul.php */
