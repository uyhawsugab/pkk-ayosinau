<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class JenisModul extends CI_Model {

	public function get()
	{
		$data = $this->db->get('jenis_modul')->result();
		return $data;
	}




	public function insert()
	{
		$data = array(
			'jenis_modul' => $this->input->post('jenis_modul')
		);

		$insert = $this->db->insert('jenis_modul', $data);
		return $insert;
	}

	public function show($id)
	{
		$detail = $this->db->where('id_jenis_modul', $id)->get('jenis_modul')->row();
		return $detail;
	}

	public function update()
	{
		$data = array(
			'jenis_modul' => $this->input->post('jenis_modul')
		);

		$update = $this->db->where('id_jenis_modul', $this->input->post('id_jenis_modul'))->update('jenis_modul', $data);
		return $update;
	}

	public function delete($id)
	{
		$delete = $this->db->where('id_jenis_modul', $id)->delete('jenis_modul');
		return $delete;
	}

}

/* End of file JenisModul.php */
