<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Modul extends CI_Model {

	public function get()
	{
		$dataModul = $this->db
			->join('jenis_modul', 'jenis_modul.id_jenis_modul = modul.id_jenis_modul')
			->join('mapel', 'mapel.id_mapel = modul.id_mapel')
			->get('modul')->result();

		return $dataModul;
	}

	public function getBayar()
	{
		$data = $this->db
		->join('jenis_modul', 'jenis_modul.id_jenis_modul = modul.id_jenis_modul' )
		->join('mapel', 'mapel.id_mapel = modul.id_mapel')
		->where('jenis_modul', 'berbayar')
		->get('modul')->result();

		return $data;		
	}


	public function getGratis()
	{
		$data = $this->db
		->join('jenis_modul', 'jenis_modul.id_jenis_modul = modul.id_jenis_modul' )
		->join('mapel', 'mapel.id_mapel = modul.id_mapel')
		->where('jenis_modul', 'gratis')
		->get('modul')->result();

		return $data;
	}

	public function insert()
	{
		
		$config['upload_path'] = 'assets/uploads/modul';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']  = '10000000000000';
		$config['max_width']  = '1024000000000000';
		$config['max_height']  = '768000000000000000';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('gambar')){
			$this->session->set_flashdata('pesan' , $this->upload->display_errors());
			return false;
		}
		else{
			$data = array(
				'nama_modul' => $this->input->post('nama_modul'),
				'harga' => $this->input->post('harga'),
				'link_modul' => $this->input->post('link_modul'),
				'deskripsi' => $this->input->post('deskripsi'),
				'id_jenis_modul' => 1,
				'id_mapel' => $this->input->post('id_mapel'),
				'gambar' => $this->upload->data('file_name')
			);

			$insert = $this->db->insert('modul', $data);
			return $insert;
		}
		
	}

	public function show($id_modul)
	{
		return $this->db->where('id_modul', $id_modul)->get('modul')->row();
	}

	public function update()
	{
		$namaGambar = $_FILES['gambar']['name'];
		if ($namaGambar != "") {


			$config['upload_path'] = 'assets/uploads/modul';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']  = '10000000000000';
			$config['max_width']  = '1024000000000000';
			$config['max_height']  = '7680000000000000';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('gambar')){
				$this->session->set_flashdata('pesan', $this->upload->display_errors());
				return false;
			}
			else{
				$data = array(
					'nama_modul' => $this->input->post('nama_modul'),
					'harga' => $this->input->post('harga'),
					'link_modul' => $this->input->post('link_modul'),
					'deskripsi' => $this->input->post('deskripsi'),
					'id_mapel' => $this->input->post('id_mapel'),
					'gambar' => $this->upload->data('file_name')
				);
				$update = $this->db->where('id_modul', $this->input->post('id_modul'))->update('modul', $data);
				return $update;
			}
		}else {
			$data = array(
				'nama_modul' => $this->input->post('nama_modul'),
					'harga' => $this->input->post('harga'),
					'link_modul' => $this->input->post('link_modul'),
					'deskripsi' => $this->input->post('deskripsi'),
					'id_mapel' => $this->input->post('id_mapel')
			);
			$update = $this->db->where('id_modul', $this->input->post('id_modul'))->update('modul', $data);
			return $update;
		}
	}

	public function destroy($id)
	{
		$delete = $this->db->where('id_modul', $id)->delete('modul');
		return $delete;
	}

}

/* End of file Modul.php */
