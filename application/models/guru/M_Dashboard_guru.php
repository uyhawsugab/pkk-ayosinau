<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Dashboard_guru extends CI_Model {

	 public function get_modul()
    {
        return $this->db->where('id_mapel',$this->session->userdata('id_mapel'))->where('harga', 'gratis')->get('modul')->result();
    }	
    public function get_detailModul($id)
    {
        return $this->db->where('id_mapel',$this->session->userdata('id_mapel'))
                        ->where('id_modul',$id)
                        ->get('modul')->row();
	}
	
    //public function 

}

/* End of file M_Dashboard_guru.php */
/* Location: ./application/models/guru/M_Dashboard_guru.php */
