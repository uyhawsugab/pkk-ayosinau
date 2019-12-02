<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class ModulController extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/Modul', 'mod');
		$this->load->model('admin/JenisModul', 'jmod');
		$this->load->model('admin/Mapel', 'map');
		
		
	}
	
	
	public function index()
	{
		$data['dataJenis'] = $this->jmod->get();
		$data['dataMapel'] = $this->map->get();
		$data['dataModul'] = $this->mod->getGratis();
		$data['content'] = 'admin/modul-home';
		$this->load->view('admin/template', $data);
		
	}

	public function insert()
	{
			$insert = $this->mod->insert();
			if ($insert) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Tambah Data</div>');
			}
			else 
			{
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger">Gagal Tambah Data</div>');
			}
			redirect(base_url('DashboardAdmin/modul_berbayar'), 'refresh');
	}

	public function show($id_modul)
	{
		$data = $this->mod->show($id_modul);
		echo json_encode($data);
	}

	public function update()
	{
		$update = $this->mod->update();
			if ($update) 
			{
				$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil ubah Data</div>');
				
			}
			else 
			{
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger">Gagal Ubah Data</div>');
				
			}
			redirect(base_url('DashboardAdmin/modul_berbayar'), 'refresh');
		
	}

	public function delete($id)
	{
		$delete = $this->mod->destroy($id);
		if ($delete) {
			$this->session->set_flashdata('pesan', 'Berhasil Delete');
			
		}else {
			$this->session->set_flashdata('pesan', 'Gagal Delete');
			
		}redirect(base_url('ModulController'), 'refresh');
	}

}

/* End of file ModulController.php */
