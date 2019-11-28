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

	public function insert()
	{
		
		$config['upload_path'] = 'assets/uploads/modul';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '1000000';
		$config['max_width']  = '1024000';
		$config['max_height']  = '7680000';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('gambar')){
			$this->session->set_flashdata('pesan' , $this->upload->display_errors());
			return false;
		}
		else{
			$data = array(
				'nama_modul' => $this->input->post('nama_modul'),
				'harga' => $this->input->post('harga'),
				'status' => $this->input->post('status'),
				'stok' => $this->input->post('stok'),
				'id_jenis_modul' => $this->input->post('id_jenis_modul'),
				'id_mapel' => $this->input->post('id_mapel'),
				'gambar' => $this->upload->data('file_name')
			);

			$insert = $this->db->insert('modul', $data);
			return $insert;
		}
		
	}

	public function show($id)
	{
		return $this->db->where('id_modul', $id)->get('modul')->row();
	}

	public function update()
	{
		$namaGambar = ['gambar']['name'];
		if ($namaGambar != "") {


			$config['upload_path'] = 'assets/uploads/modul';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = '1000000';
			$config['max_width']  = '1024000';
			$config['max_height']  = '7680000';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('gambar')){
				$this->session->set_flashdata('pesan', $this->upload->display_errors());
				return false;
			}
			else{
				$data = array(
					'nama_modul' => $this->input->post('nama_modul'),
					'harga' => $this->input->post('harga'),
					'status' => $this->input->post('status'),
					'stok' => $this->input->post('stok'),
					'id_jenis_modul' => $this->input->post('id_jenis_modul'),
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
				'status' => $this->input->post('status'),
				'stok' => $this->input->post('stok'),
				'id_jenis_modul' => $this->input->post('id_jenis_modul'),
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
