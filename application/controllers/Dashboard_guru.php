<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_guru extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('guru/M_Dashboard_guru','mdg');
		$this->load->model('admin/Mapel', 'map');
		
	}
	
	public function index()
	{
	
		if ($this->session->userdata('login')==true) 
		{
			$data['dataMapel'] = $this->map->get();
			$data['konten']="guru/homepage_guru";
			$this->load->view('guru/template', $data);
		} 
		else 
		{
			$this->session->set_flashdata('pesan', '<div class="alert alert-warning">Anda belum login</div>');
			redirect('loginUser/index','refresh');
			
		}
		
		
	}
	public function tambah_modul()
	{
		$config['upload_path'] = './assets/uploads/modul';
		$config['allowed_types'] = 'jpg|png|jpeg';
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
						'gambar' 	=> $this->upload->data('file_name'),
						'nama_modul' 	=> $this->input->post('nama_modul'),
						'harga' 		=> "gratis",
						'id_jenis_modul' => 2,
						'id_mapel' 		=> $this->input->post('id_mapel'),
						'link_modul'	=> $this->input->post('link_modul'),
						'deskripsi' => $this->input->post('deskripsi')
						);

			$this->db->insert('modul', $data);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Tambah Data Modul</div>');
			redirect('Dashboard_guru/index','refresh');
		}
	}
	public function get_modul()
	{
		$dt = $this->mdg->get_modul();
		echo json_encode($dt);
	}
	public function detail_modul($id)
	{
		$dt = $this->mdg->get_detailModul($id);
		echo json_encode($dt);
	}
	public function update_modul()
	{
		if ($_FILES['gambar']['name']!="") 
		{
			
			$config['upload_path'] = './assets/uploads/modul';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size']  = '10000000000000000';
			$config['max_width']  = '10240000000000000';
			$config['max_height']  = '768000000000000000000';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('gambar')){
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger">Gagal Update. Mungkin ada yang salah</div>');
				redirect('Dashboard_guru/index','refresh');
			}
			else{
				$data = array('gambar' 	=> $this->upload->data('gambar'),
							  'nama_modul' 	=> $this->input->post('nama_modul'),
							  'link_modul'	=> $this->input->post('link_modul'),
								'deskripsi' => $this->input->post('deskripsi')
							);
				
				$this->db->where('id_modul', $this->input->post('id_modul'))->update('modul',$data);
				$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Update</div>');
				//redirect('Dashboard_guru/index','refresh');
			}
			
		} 
		else 
		{
			$data = array('nama_modul' 	=> $this->input->post('nama_modul'),
							'link_modul'	=> $this->input->post('link_modul'),
							'deskripsi' => $this->input->post('deskripsi')
							);

			$this->db->where('id_modul', $this->input->post('id_modul'))->update('modul',$data);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Update</div>');
			//redirect('Dashboard_guru/index','refresh');
		}
		
	}
	public function hapus_modul($id)
	{
		$proses = $this->db->where('id_modul', $id)->delete('modul');
		if ($proses==true) 
		{
			$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Hapus</div>');
			redirect('Dashboard_guru/index','refresh');
		} 
		else 
		{
			$this->session->set_flashdata('pesan', '<div class="alert alert-success">Gagal Hapus<, mungkin ada yang salah/div>');
			redirect('Dashboard_guru/index','refresh');
		}
		
		
	}
}

/* End of file Dashboard_guru.php */
/* Location: ./application/controllers/Dashboard_guru.php */
