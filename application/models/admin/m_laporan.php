<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_laporan extends CI_Model {

	 public function getLaporan()
    {
        return $this->db->join('user', 'user.id_user=nota.id_user') 
       					 ->where('id_nota')->get('nota')->result();
    }	
}