<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Peminjaman_buku extends Backend_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('Datatables');
	}
	public function index()
	{
		$this->header();
		$this->kontent('Peminjaman_Buku/Peminjaman_view');
		$this->kontent('Peminjaman_Buku/Modal_view');
		$this->footer();
		$this->kontent('Peminjaman_Buku/Js_view');
	}
	public function getalldata()
	{
		header('Content-Type: application/json');
		echo $this->Peminjaman_buku_model->getAllDataPeminjaman(); 
	}
	public function Aksibtnpeminjaman()
	{
		$idP  	   = $this->input->post("id-btn-aksi-peminjaman");
		$btnproses = $this->input->post("btnprocesspeminjaman");

		$this->db->where('id_peminjaman', $idP);
		$Sendmsg = $this->db->update('peminjaman', ['status' => $btnproses]);
		if ($Sendmsg == TRUE) {
			$pesan['success'] = '<div class="alert alert-success bg-success text-white"> Berhasil Ganti Aksi !! </div>';
		}else{
			$pesan['error'] = '<div class="alert alert-danger bg-danger text-white"> Gagal Ganti Aksi !!';
		}
		echo json_encode( $pesan );
	}
	public function HapusDataPeminjaman()
	{
		$dataId = $this->input->post('dataByidPeminjaman');
		$this->Peminjaman_buku_model->delete_data_peminjaman($dataId);
	}
}
/* End of file Peminjaman_buku.php */
/* Location: ./application/controllers/Backend/Peminjaman_buku.php */