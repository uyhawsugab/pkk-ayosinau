<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel extends CI_Model {

	public function get()
	{
		$data = $this->db->get('mapel')->result();
		return $data;
	}

	public function insert()
	{
		$data = array(
			'nama_mapel' => $this->input->post('nama_mapel')
		);

		$insert = $this->db->insert('mapel', $data);
		return $insert;
	}

	public function show($id)
	{
		$detail = $this->db->where('id_mapel', $id)->get('mapel')->row();
		return $detail;
	}

	public function update()
	{
		$data = array(
			'nama_mapel' => $this->input->post('nama_mapel')
		);

		$update = $this->db->where('id_mapel', $this->input->post('id_mapel'))->update('mapel', $data);
		return $update;
	}

	public function delete($id)
	{
		$delete = $this->db->where('id_mapel', $id)->delete('mapel');
		return $delete;
	}

}

/* End of file Mapel.php */
