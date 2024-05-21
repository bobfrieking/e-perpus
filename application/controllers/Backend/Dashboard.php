<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends Backend_Controller {
	public function index()
	{
		// $tanggal = date("Y-m-d", strtotime("-7 months", strtotime(date("Y-m-d"))));
		$jml['chart'] = $this->pengunjung_model->Chart();
		$jml['chart2'] = $this->Pengembalian_buku_model->Chart2();
		$this->header();
		$this->kontent('Dashboard/Dashboard_view', $jml);
		$this->footer();
		$this->kontent('Dashboard/Js_view');
	}
	public function toSendData()
	{
		$NotifanggotaBaru= $this->db->get_where('users', ['id_level'=>2,'status'=>0])->num_rows();
		$jumlhBuku       = $this->db->get('buku')->num_rows();
		$jumlhpngrngBuku = $this->db->get('pengarang_buku')->num_rows();
		$jumlhpnrbitBuku = $this->db->get('penerbit_buku')->num_rows();
		$jumlhktgoriBuku = $this->db->get('kategori_buku')->num_rows();
		$jumDataPetugas  = $this->db->get_where('users', ['id_level' => 1])->num_rows();
		$jumDataAnggota  = $this->db->get_where('users', ['id_level' => 2])->num_rows();
		$jmlDatapeminjmn = $this->db->get_where('peminjaman',['status' => 0])->num_rows();
		if ($jmlDatapeminjmn != 0) {
			$jmldtpmnjmn = '<span title="Request Data DiProses !!" class="badge badge-warning text-white float-right">' .$jmlDatapeminjmn. '</span>';
		}else{
			$jmldtpmnjmn = '';
		}
		if (!empty($NotifanggotaBaru)) {
			$NotifanggotaBaru1 = '<span class="noti-icon-badge"></span>';
			$NotifanggotaBaru2 = $NotifanggotaBaru;
		}else{
			$NotifanggotaBaru1 = '';
			$NotifanggotaBaru2 = '';
		}
		$SendObj = [
				'data_buku' 		  => $jumlhBuku,
				'data_pengarang_buku' => $jumlhpngrngBuku,
				'data_penerbit_buku'  => $jumlhpnrbitBuku,
				'data_kategori_buku'  => $jumlhktgoriBuku,
				'data_total_petugas'  => $jumDataPetugas,
				'data_total_anggota'  => $jumDataAnggota,
				'dt_totalrequestpmnjm'=> $jmldtpmnjmn,
				'data_notanggota_baru1'=> $NotifanggotaBaru1,
				'data_notanggota_baru2'=> $NotifanggotaBaru2,
			];
		echo json_encode($SendObj);
	}
	public function newData_Anggota()
	{
		$respons = $this->Users_model->getnewAnggota()->result();
		echo json_encode($respons);
	}
	public function active_users()
	{
		$data_id = $this->input->post("data_id");
		$this->db->where('id_users', $data_id);
		$succss = $this->db->update('users', ['status'=>1]);
		if ($succss == TRUE) {
			$respons['success'] = 'Berhasil Meng- Aktifkan Akun ...';
		}else{
			$respons['error'] = 'Gagal Meng- Aktifkan Akun !!!';
		}
		echo json_encode($respons);
	}
}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Backend/Dashboard.php */