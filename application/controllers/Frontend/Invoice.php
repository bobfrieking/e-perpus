<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends Frontend_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('Datatables');
	}

	public function index()
	{
		$this->header();
		$this->kontent('Invoice/Invoice_view');
		$this->kontent('Invoice/Modal_view');
		$this->footer();
		$this->kontent('Invoice/Js_view');
	}
	public function getalldata()
	{
		echo $this->Peminjaman_buku_model->getAllDataPeminjamanByUserId();
	}
	public function Hitung_denda()
	{
		date_default_timezone_set('Asia/sulawesi utara');
		$id_peminjaman = $this->input->post('id');
		$status = $this->input->post("status");
		$getData = $this->Peminjaman_buku_model->getById($id_peminjaman)->row_array();
		if ($getData['status']==0) {
			$msg['success'] = '<div class="alert alert-danger pesan-alert-pengembalian"> Maaf Buku Tersebut Sedang Di Proses !! Harap Tunggu Konfirmasi Dari Petugas..</div>';
		}else{
			$data = [
			'id_peminjaman' => $id_peminjaman,
			'tanggal'       => date("y-m-d H:i:s"),
			'keterangan'    => "Dikembalikan Selesai ..",
			];
			$Send = $this->db->insert('pengembalian', $data);
			// Hitung Denda
			$date_creat = date("y-m-d");
			$kembali = strtotime($date_creat);
			$batas_kembali = strtotime($getData['batas_pinjam']);
			$tanggal_pinjam = strtotime($getData['tgl_pinjam']);
	      	$selisih = abs($kembali-$batas_kembali);
	        $hitung = floor($selisih/(60*60*24));


	        	if ($kembali > $batas_kembali) {
	                	$denda = ($hitung-0)*500;
	                	$data_denda = $denda;
	          		}
	         	elseif ($kembali <= $batas_kembali AND $kembali >= $tanggal_pinjam  ) {
	         		$data_denda = 1;
	         	}
	         	// Telat 1 Hari Denda 500 Perak
	          	else{
	                	$data_denda = 1;
	            	}
	            $data2 = ['status' => 2,
	        			  'denda' => $data_denda];
			$this->db->where('id_peminjaman', $id_peminjaman);
			$this->db->update('peminjaman', $data2);


			$this->db->where('id_buku', $getData['id_buku']);
			$this->db->update('buku', array('stok'=> $getData['stok'] + $getData['jml_pinjam']) );

		}


		if ($Send > 0) {
			if ($kembali > $batas_kembali) {
				$msg['success'] = '<div class="alert alert-warning pesan-alert-pengembalian"> Berhasil Kembalikan Buku !! Tetapi Anda Telat '.$hitung.' Hari. Denda Rp.'.number_format($denda).'</div>';
			}elseif($kembali <= $batas_kembali AND $kembali >= $tanggal_pinjam ){
				$msg['success'] = '<div class="alert alert-success pesan-alert-pengembalian"> Berhasil Kembalikan Buku Tepat Waktu ..</div>';
			}else{
				$msg['success'] = '<div class="alert alert-success pesan-alert-pengembalian"> Berhasil Kembalikan Buku Tepat Waktu ..</div>';
			}
		}else{
			$msg['error'] = '<div class="alert alert-danger pesan-alert-pengembalian"> Data Gagal Di Kembalikan !!</div>';
		}
		echo json_encode($msg);
		 $tglPinjam = $getData['tgl_pinjam'];
		 $batasPinjam = $getData['batas_pinjam'];

		 $pecah1 = explode("-", $tglPinjam);
		 $hari = $pecah1[0];
		 $bulan = $pecah1[1];
		 $tahun = $pecah1[2];

		 $pecah2 = explode("-", $batasPinjam);
		 $hari2 = $pecah2[0];
		 $bulan2 = $pecah2[1];
		 $tahun2 = $pecah2[2];

		 $jd1 = GregorianToJD($bulan, $hari, $tahun);
		 $jd2 = GregorianToJD($bulan2, $hari2, $tahun2);

		 $denda = $jd2-$jd1;

		 if (($denda-3) <= 0) {
		 	$msg['pesan'] = '<span>Anda Mengembalikan Buku Tepat Waktu</span>';
		 }else{
		 	$telat = ($denda-3)*500;
		 	$msg['pesan'] = '<span>Pengembalian Anda Telat ' .($denda-3). ' ! Denda ' .$telat. '</span>';
		 }
	}

}

/* End of file Invoice.php */
/* Location: ./application/controllers/Frontend/Invoice.php */