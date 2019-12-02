<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_guru extends CI_Model {

	 public function getGuru()
    {
        return $this->db->join('level', 'level.id_level=user.id_level') 
       					 ->where('nama_level', 'guru')->get('user')->result();
    }	
}