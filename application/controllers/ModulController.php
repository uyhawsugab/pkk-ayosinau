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
		$data['dataModul'] = $this->mod->get();
		$data['content'] = 'admin/modul-home';
		$this->load->view('admin/template', $data);
		
	}

	public function insert()
	{
		$this->form_validation->set_rules('nama_modul', 'fieldlabel', 'trim|required');
		$this->form_validation->set_rules('harga', 'fieldlabel', 'trim|required');
		$this->form_validation->set_rules('stok', 'fieldlabel', 'trim|required');
		$this->form_validation->set_rules('id_jenis_modul', 'fieldlabel', 'trim|required');
		$this->form_validation->set_rules('id_mapel', 'fieldlabel', 'trim|required');

		
		if ($this->form_validation->run() == TRUE) {
			
			$insert = $this->mod->insert();
			if ($insert) {
				$this->session->set_flashdata('pesan', 'Berhasil Tambah Data');
			}else {
				$this->session->set_flashdata('pesan', 'Gagal Tambah Data');
			}redirect(base_url('ModulController'), 'refresh');
		} else {
			$this->session->set_flashdata('pesan', validation_errors());
		}redirect(base_url('ModulController'), 'refresh');
		
		
	}

	public function show($id)
	{
		$data = $this->mod->show($id);
		echo json_encode($data);
	}

	public function update()
	{
		$this->form_validation->set_rules('nama_modul', 'fieldlabel', 'trim|required');
		$this->form_validation->set_rules('harga', 'fieldlabel', 'trim|required');
		$this->form_validation->set_rules('status', 'fieldlabel', 'trim|required');
		$this->form_validation->set_rules('stok', 'fieldlabel', 'trim|required');
		$this->form_validation->set_rules('id_jenis_modul', 'fieldlabel', 'trim|required');
		$this->form_validation->set_rules('id_mapel', 'fieldlabel', 'trim|required');
		array('required' => 'Harus Diisi');


		if ($this->form_validation->run() == TRUE) {
			$update = $this->mod->update();
			if ($update) {
				$this->session->set_flashdata('pesan', 'Berhasil Update');
				
			}else {
				$this->session->set_flashdata('pesan', 'Gagal Update');
				
			}redirect(base_url('ModulController'), 'refresh');
		} else {
			$this->session->set_flashdata('pesan', validation_errors());
		}
		redirect(base_url('ModulController'), 'refresh');
		
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
