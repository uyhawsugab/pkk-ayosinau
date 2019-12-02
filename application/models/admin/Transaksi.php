<?php

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Model {

	public function get()
	{
		$data = $this->db->join('nota', 'nota.id_nota = transaksi.id_nota')
		->join('modul', 'modul.id_modul = transaksi.id_modul')
		->get('transaksi')->result();

		return $data;
	}

	



}

/* End of file Transaksi.php */
/* Location: ./application/models/admin/Transaksi.php */