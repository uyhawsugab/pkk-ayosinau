<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_siswa extends CI_Model {

	 public function getsiswa()
    {
        return $this->db->join('level', 'level.id_level=user.id_level')
       					 ->where('nama_level', 'user')->get('user')->result();
    }	
}