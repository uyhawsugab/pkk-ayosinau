<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class loginUser extends CI_Controller {

	
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('AuthLogin', 'auth');
		
	}
	
	
	public function index()
	{
		$this->load->view('auth/login');
		
	}

	public function loginProses()
	{	
		$login = $this->auth->checkDataUser();
		if ($login->num_rows()>0) {
			$dataUser = $login->row();
			$data = array(
				'id_user' => $dataUser->id_user,
				'username' => $dataUser->username,
				'email' => $dataUser->email,
				'alamat' => $dataUser->alamat,
				'password' => md5($dataUser->password),
				'notelp' => $dataUser->notelp,
				'id_level' => $dataUser->id_level,
				'login' => TRUE
			);

			$this->session->set_userdata($data);
			$data['status'] = 1;
			if ($this->session->userdata('id_level') == 1) {
				$data['id_level'] = 1;
			}elseif ($this->session->userdata('id_level') == 2) {
				$data['id_level'] = 2;
			}else {
				$data['id_level'] = 3;
			}
			echo json_encode($data);
		}else {
			$data['status'] = 0;
			echo json_encode($data);
		}
	}


	public function RegisterUser()
	{
		$register = $this->auth->registerUser();
		if ($register) {
			$data['status'] = 1;
			$data['keterangan'] = "Sukses menambah data";
			echo json_encode($data);
		}else {
			$data['status'] = 0;
			$data['keterangan'] = "Gagal menambah data";
			echo json_encode($data);
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('loginUser', 'refresh');
	}

}

/* End of file loginUser.php */
