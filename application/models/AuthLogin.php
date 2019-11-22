<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class AuthLogin extends CI_Model {

	public function checkDataUser()
	{
		$dataUser = $this->db->where('username', $this->input->post('username'))
							 ->where('password', md5($this->input->post('password')))
							 ->get('user');

		return $dataUser;
	}


	public function registerUser()
	{
		$data = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'notelp' => $this->input->post('notelp'),
			'id_level' => $this->input->post('id_level')
		);

		$insert = $this->db->insert('user', $data);

		return $insert;
	}

}

/* End of file AuthLogin.php */
