<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengembalian_buku extends Backend_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('Datatables');
	}

	public function index()
	{
		$this->header();
		$this->kontent('Pengembalian_Buku/Pengembalian_view');
		$this->footer();
		$this->kontent('Pengembalian_Buku/Js_view');
	}
	public function get_all_data_pengembalian()
	{
		header('Content-Type:application/json');
		echo $this->Pengembalian_buku_model->getAllData();
	}
	public function delete_data_pengembalian()
	{
		$id = $this->input->post("data_id");
		$datas = $this->Pengembalian_buku_model->deleteDataaa($id);
		if ($datas == TRUE) {
			$respons['success'] = '<div class="alert alert-success bg-success text-white pesan-pengembalian"> Berhasil Hapus Data Pengembalian</div>';
		}else{
			$respons['error'] = '<div class="alert alert-danger bg-danger text-white pesan-pengembalian"> Gagal Hapus Data Pengembalian</div>';
		}
		echo json_encode($respons);
	}

}

/* End of file Pengembalian_buku.php */
/* Location: ./application/controllers/Backend/Pengembalian_buku.php */