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
		if ($this->session->userdata('login')==false) 
		{
			$login = $this->auth->checkDataUser();
			if ($login) {
				$dataUser = $login->row();
				$array = array(
					'id_user' 	=> $dataUser->id_user,
					'nama' 		=> $dataUser->nama,
					'username'  => $dataUser->username,
					'email' 	=> $dataUser->email,
					'alamat' 	=> $dataUser->alamat,
					'notelp' 	=> $dataUser->notelp,
					'id_level' 	=> $dataUser->id_level,
					'id_mapel'	=> $dataUser->id_mapel,
					'login' 	=> TRUE
				);

				$this->session->set_userdata($array);
				$data['status'] = 1;
				if ($this->session->userdata('id_level') == 1) 
				{
					
					$data['id_level'] = 1;
					
				}
				elseif ($this->session->userdata('id_level') == 2) 
				{
					
					$data['id_level'] = 2;
					
				}
				else 
				{
					
					$data['id_level'] = 3;
					
				}
				echo json_encode($data);

			}
			else 
			{
				$data['status'] = 0;
				echo json_encode($data);
			}
		} 
		else
		{
			$data['status'] = 2;
			echo json_encode($data);
		}
		
	}

	public function view_reg()
	{
		$this->load->view('auth/v_register');
	}

	public function view_reg_guru()
	{
		$this->load->view('auth/v_register_guru');
	}

	public function get_mapel()
	{
		$this->load->model('admin/Mapel','mp');
		$dt = $this->mp->get();
		echo json_encode($dt);
	}
	public function RegisterUser()
	{
		$register = $this->auth->registerUser();
		if ($register) 
		{
			$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Daftar</div>');
			redirect('loginUser/view_reg','refresh');
		}
		else 
		{
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger">Gagal Daftar</div>');
			redirect('loginUser/view_reg','refresh');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('loginUser', 'refresh');
	}

}

/* End of file loginUser.php */
