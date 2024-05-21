<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends Frontend_Controller {

	public function index()
	{
		echo $this->session->flashdata('pesanPeminjaman');
		$Obj['rat4'] = $this->Buku_model->rat4limit4();
		$Obj['rat5'] = $this->Buku_model->rat5limit4();
		$this->header();
		$this->kontent('Buku/Buku_view',$Obj);
		$this->kontent('Buku/Modal_view');
		$this->footer();
		$this->kontent('Buku/Js_view');
	}
	public function gettampilData()
	{
		$data = $this->Buku_model->getAllDataBukuu();
		$buku = $this->load->view('Frontend/Buku/Data_buku_view', ['buku' => $data], TRUE);
		$Send = ['buku'=>$buku,'totals' => $data->num_rows()];
		echo json_encode($Send);
	}
	public function detail_buku($data_id = NULL)
	{
		$ci = get_instance();
		$this->header();
		$this->kontent('Buku/Detail_buku_view',['detail'=>$ci->Buku_model->buku_detail($data_id)->row_array(),'books'=> $ci->Buku_model->bukuTerbaru3()]);
		$this->kontent('Buku/Modal_view');
		$this->footer();
		$this->kontent('Buku/Js_view');
	}
	public function pencarian()
	{
		$keyword = $this->input->post('keyword');
		$buku = $this->Buku_model->getByKeyword($keyword);
		$Send = $this->load->view('Frontend/Buku/Data_buku_view', ['buku' => $buku], TRUE);
		$data['keyword'] = $Send;
		$data['total_data_buku_pencarian'] = $buku->num_rows();
		echo json_encode($data);
	}
	public function getById()
	{
		$id = $_POST['id'];
		$Send = $this->Buku_model->getDataByIdBuku($id);
		echo json_encode($Send);
	}
	public function filterDataKategoriBySelect()
	{
		$filter = $this->input->post('filter_buku');
		$Send_Json = $this->Buku_model->getByFilterKategoriBuku($filter);
		$EcSend = $this->load->view('Frontend/Buku/Data_buku_view', ['buku' => $Send_Json], TRUE);
		$SendObjToJson = ['filter' => $EcSend,'total_data_filter_buku' => $Send_Json->num_rows()];
		echo json_encode($SendObjToJson);
	}
	public function proses_pinjam_buku()
	{
		$id_buku = $this->input->post('id-buku-pinjam');
		$jml_pinjamBuku = $this->input->post('jumlah-pinjam-buku');
		$data = [
			'id_users'    => $this->session->userdata('id_users'),
			'id_buku'     => $id_buku,
			'tgl_pinjam'  => $this->input->post('tp'),
			'batas_pinjam'=> $this->input->post('bp'),
			'jml_pinjam'  => $jml_pinjamBuku,
			'status' 	  => 0,
		];
		$getStokMin = $this->db->get_where('buku', ['id_buku' => $id_buku])->row_array();
		$Send = $this->Buku_model->insertPinjamBuku($data ,$id_buku ,$getStokMin ,$jml_pinjamBuku);
		// if ($getStokMin['stok'] == 0) {
		// 	unlink('../upload/buku/'.$getStokMin['gambar']);
		// 	$this->db->where('id_buku', $id_buku);
		// 	$this->db->delete('buku');
		// }
		if ($Send == TRUE) {
			$msg['pesanPeminjaman'] = '<script>alert("Selamat !! Peminjaman Berhasil Harap Tunggu Proses Lebih Lanjut ..")</script>';
		}else{
			$msg['pesanPeminjaman'] = '<script>alert("Maaf Peminjaman Gagal Harap Tunggu Proses Lebih Lanjut ..")</script>';
		}
		$pinjamBuku = $this->session->set_flashdata( $msg );
		redirect('Front/Buku',$pinjamBuku);
	}
	// public function get_autocomplete()
	// {
	// 	$isdata = $this->Buku_model->autocompleteee();

	// 	$buku = array();
	// 	foreach ($isdata as $srow) {
	// 		$data = $srow->judul_buku;
	// 		array_push($buku, $data);
	// 	}
	// 	echo json_encode($buku);

	// }
	// public function Valid_Ajax_buku()
	// {
	// 	$jmlPinjamBuku = $this->input->post('jmlPinjamBuku');
	// 	$stok = $this->input->post('stok');

	// 		if ($jmlPinjamBuku == "") {
	// 				$arguments['css'] = "1px solid #ff2727";
	// 				$arguments['pesan'] = '<small style="color:#ff2727" id="isipesanrequire-msg">Harap Isikan Jumlah Pinjam !!</b></small>';
	// 			}else if ($jmlPinjamBuku > $stok) {
	// 				$arguments['css'] = "1px solid #ff2727";
	// 				$arguments['pesan'] = '<small style="color:#ff2727" id="isipesanstok-buku">Maaf Stok Buku Tersedia Sampai <b>'.$stok.'</b> !! </small>';
	// 			}else if ($jmlPinjamBuku < 1) {
	// 				$arguments['css'] = "1px solid #ff2727";
	// 				$arguments['pesan'] = '<small style="color:#ff2727" id="isipesanrequired-buku">Maaf Harap Isikan Jumlah Pinjam Yang Benar !!!</b></small>';
	// 			}else{
	// 				$arguments['css'] = "1px solid #bcbcbc";
	// 			}
	// 			echo json_encode($arguments);
	// }

}

/* End of file Buku.php */
/* Location: ./application/controllers/Frontend/Buku.php */