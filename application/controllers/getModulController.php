<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class getModulController extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('getModul','mod');
		
	}
	
	public function index()
	{
		$dataMod = $this->mod->get();
		echo json_encode($dataMod);
	}

	public function search($namaModul)
	{
		$dataModul = $this->mod->searchModul($namaModul);
		echo json_encode($dataModul);
	}

	public function gratis()
	{
		$data = $this->mod->getGratis();
		echo json_encode($data);
	}

	public function bayar()
	{
		$data = $this->mod->getBayar();
		echo json_encode($data);
	}

	public function lain()
	{
		$data = $this->mod->getMapelPem();
		echo json_encode($data);
	}

	public function big()
	{
		$data = $this->mod->getMapelBIG();
		echo json_encode($data);
	}

	public function bin()
	{
		$data = $this->mod->getMapelBI();
		echo json_encode($data);
	}

	public function mat()
	{
		$data = $this->mod->getMapelMAT();
		echo json_encode($data);
	}

	public function pai()
	{
		$data = $this->mod->getMapelPAI();
		echo json_encode($data);
	}

	public function detail($id)
	{
		$data = $this->mod->getDetailData($id);
		echo json_encode($data);
	}

}

/* End of file getModulController.php */
