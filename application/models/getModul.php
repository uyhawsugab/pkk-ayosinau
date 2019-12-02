<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class getModul extends CI_Model {

	public function get()
	{
		$modul = $this->db
			->join('jenis_modul', 'jenis_modul.id_jenis_modul = modul.id_jenis_modul')
			->join('mapel', 'mapel.id_mapel = modul.id_mapel')
			->get('modul')->result();
		return $modul;
	}

	public function getGratis(){
		$modul = $this->db
			->join('jenis_modul', 'jenis_modul.id_jenis_modul = modul.id_jenis_modul')
			->join('mapel', 'mapel.id_mapel = modul.id_mapel')
			->where('jenis_modul', 'gratis')
			->get('modul')->result();

		return $modul;
	}
	
	public function getBayar()
	{
		$modul = $this->db
			->join('jenis_modul', 'jenis_modul.id_jenis_modul = modul.id_jenis_modul')
			->join('mapel', 'mapel.id_mapel = modul.id_mapel')
			->where('jenis_modul', 'berbayar')
			->get('modul')->result();

		return $modul;
	}

	public function getMapelPem()
	{
		$modul = $this->db
		->join('jenis_modul', 'jenis_modul.id_jenis_modul = modul.id_jenis_modul')
		->join('mapel', 'mapel.id_mapel = modul.id_mapel')
		->where('nama_mapel', 'Pemrograman')
		->get('modul')->result();

		return $modul;
	}

	public function getMapelBIG()
	{
		$modul = $this->db
			->join('jenis_modul', 'jenis_modul.id_jenis_modul = modul.id_jenis_modul')
			->join('mapel', 'mapel.id_mapel = modul.id_mapel')
			->where('nama_mapel', 'Bahasa Inggris')
			->get('modul')->result();

		return $modul;
	}

	public function getMapelBI()
	{
		$modul = $this->db
			->join('jenis_modul', 'jenis_modul.id_jenis_modul = modul.id_jenis_modul')
			->join('mapel', 'mapel.id_mapel = modul.id_mapel')
			->where('nama_mapel', 'Bahasa Indonesia')
			->get('modul')->result();

		return $modul;
	}

	public function getMapelMAT()
	{
		$modul = $this->db
			->join('jenis_modul', 'jenis_modul.id_jenis_modul = modul.id_jenis_modul')
			->join('mapel', 'mapel.id_mapel = modul.id_mapel')
			->where('nama_mapel', 'Matematika')
			->get('modul')->result();

		return $modul;
	}

	public function getMapelPAI()
	{
		$modul = $this->db
			->join('jenis_modul', 'jenis_modul.id_jenis_modul = modul.id_jenis_modul')
			->join('mapel', 'mapel.id_mapel = modul.id_mapel')
			->where('nama_mapel', 'PAI')
			->get('modul')->result();

		return $modul;
	}

	public function searchModul($namaModul)
	{
		$result = $this->db
		->like('nama_modul', $namaModul)
		->join('jenis_modul', 'jenis_modul.id_jenis_modul = modul.id_jenis_modul')
		->join('mapel', 'mapel.id_mapel = modul.id_mapel')
		->get('modul')->result();
		return $result;
	}

	public function getDetailData($id)
	{
		$result = $this->db
		->join('jenis_modul', 'jenis_modul.id_jenis_modul = modul.id_jenis_modul')
		->join('mapel', 'mapel.id_mapel = modul.id_mapel')
		->where('id_modul', $id)
		->get('modul')->row();

		return $result;
	}

	public function createNota()
	{
		$data = array(
			'id_user' => $this->session->userdata('id_user'),
			'tanggal' => date('Y-m-d')
		);

		return $this->db->insert('nota', $data);
	}

	public function getLastNota()
	{
		$dataNota = $this->db->where('id_user', $this->session->userdata('id_user'))
		->order_by('id_nota', 'desc')
		->limit('1')
		->get('nota')->row();


		return $dataNota;
	}

	public function updateBuktiTransfer()
	{
		$data = array(
			'metode' => $this->input->post('metode'),
			'bukti' => $this->upload->data('file_name')
		);

		return $this->db->where('id_nota', $this->input->post('id_nota'))->update('nota', $data);
	}

	public function updateTotalHarga($id)
	{
		$data = array(
			
			'grandtotal' => $this->cart->total()
		);

		return $this->db->where('id_nota', $id)->update('nota', $data);
	}

}

/* End of file getModul.php */
