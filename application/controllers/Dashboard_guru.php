<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_guru extends CI_Controller {

	public function index()
	{
		$data['konten']="v_dashboard_guru";
		$this->load->view('Template_guru', $data);
	}
	public function tambah_modul()
	{
		$config['upload_path'] = './assets/gambar_modul';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']  = '100000000000000';
		$config['max_width']  = '102400000000000';
		$config['max_height']  = '76800000000000000';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('gambar'))
		{
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger">Gagal Tambah. Mungkin ada yang salah</div>');
			redirect('Dashboard_guru/index','refresh');
		}
		else
		{
			$data = array(
						'gambar' => $this->upload->data('file_name'),
						'nama_modul' => $this->input->post('nama_modul'),
						'id_jenis_modul' => 2,
						'id_mapel' => $this->session->userdata('id_mapel')
						);

			$this->db->insert('modul', $data);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Tambah Data Modul</div>');
			redirect('Dashboard_guru/index','refresh');
		}
	}
}

/* End of file Dashboard_guru.php */
/* Location: ./application/controllers/Dashboard_guru.php */