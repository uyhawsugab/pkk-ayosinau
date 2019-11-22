<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_guru extends CI_Controller {

	public function index()
	{
		$this->load->view('v_login_guru');
	}
	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$cek = $this->db->get_where('guru', ['username' => $username])->row_array();
		if ($cek)
		{
			if ($password == $cek['password']) 
			{
				$data = [
					'username' => $cek['username'],
					'nama_guru' => $cek['nama_guru'],
					'id_level' => $cek['id_level'],
					'logged' => true
				];
				$this->session->set_userdata($data);
				$dt['status']=1;
				echo json_encode($dt);
			} 
			else 
			{
				$dt['status']=0;
				echo json_encode($dt);
			}
		} 
		else 
		{
			$dt['status']=0;
			echo json_encode($dt);
		}
		
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Login_guru','refresh');
	}

}

/* End of file Login_guru.php */
/* Location: ./application/controllers/Login_guru.php */