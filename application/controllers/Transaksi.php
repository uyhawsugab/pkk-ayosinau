<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('getModul','modul');
		
	}
	


	public function index()
	{
		$data['konten'] = 'user/user-transaction';
		$this->load->view('user/modul-page', $data);
	}

	
	public function tambahCart($id, $jumlah)
	{
		$dataModul = $this->modul->getDetailData($id);
		$data = array(
			'id' => $dataModul->id_modul,
			'qty' => $jumlah,
			'price' => $dataModul->harga,
			'name' => $dataModul->nama_modul,
			'options' => array('jenis_modul' => $dataModul->jenis_modul, 'mapel' => $dataModul->nama_mapel) 
		);

		$tambahCart = $this->cart->insert($data);
		if ($tambahCart) {
			$data['total_cart'] = $this->cart->total_items();
			$data['status'] = 1;
			echo json_encode($data);
		}else {
			$data['total_cart'] = $this->cart->total_items();
			$data['status'] = 0;
			echo json_encode($data);
		}
	}

	public function viewAllPesanan()
	{
		$data['total_seluruh'] = $this->cart->total();
		$data['data_cart'] = $this->cart->contents();
		echo json_encode($data);
	}

	public function showCartItems()
	{
		$data['total_cart'] = $this->cart->total_items();
		echo json_encode($data);
	}

	public function createPembayaran()
	{
		$createNota = $this->modul->createNota();
		if ($createNota) {
			
			$totalHarga = $this->cart->total();
			$items = $this->cart->contents();
			$dataNota = $this->modul->getLastNota();
			foreach ($items as $item) {
				$object[] = array(
					'id_nota' => $dataNota->id_nota,
					'id_modul' => $item['id'],
					'qty' => $item['qty']
				);
			}
			$insertData = $this->db->insert_batch('transaksi', $object);
			if ($insertData) {
				$this->modul->updateTotalHarga($dataNota->id_nota);

				$data['status'] = 1;
				$data['id_nota'] = $dataNota->id_nota;
				$data['total'] = $totalHarga;
				$data['contents'] = $items;
				$this->cart->destroy();
				echo json_encode($data);
			}else {
				$data['status'] = 0;
				echo json_encode($data);
			}
		}
	}

	public function uploadBuktiTransfer()
	{
		
		$config['upload_path'] = './assets/uploads/buktiTransfer';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '100000000000000';
		$config['max_width']  = '1024000000000';
		$config['max_height']  = '76800000000';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('bukti')){
			$error = array('status' => 0 , 'error' => $this->upload->display_errors());
			echo json_encode($error);
		}
		else{
			$getAllNota = $this->modul->updateBuktiTransfer();
			$data = array('status' => 1 , 'upload_data' => $this->upload->data('nota', $getAllNota));
			echo json_encode($data);
		}
		
	}



}

/* End of file Transaksi.php */
