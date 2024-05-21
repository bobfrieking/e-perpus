<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		if ($this->agent->is_browser()) {
			$data_peng = $this->agent->is_browser();
		}elseif ($this->agent->is_robot()) {
			$data_peng = $this->agent->is_robot();
		}elseif ($this->agent->is_mobile()) {
			$data_peng = $this->agent->is_mobile();
		};
		echo $this->session->flashdata('regwork');
		$this->load->view('Frontend/component/header');		
		$this->load->view('Frontend/Home/Home_view',[$data_peng , 'slider'=>$this->db->get('carousel/slider'),'buku'=> $this->Buku_model->getAllDataBuku(),'totalPinjam'=> $this->db->get_where('peminjaman', ['status'=>1])->num_rows(),'totalBuku'=>$this->db->get('buku')->num_rows(),'totalPengarang'=>$this->db->get('pengarang_buku')->num_rows(),'data_buku' =>$this->Buku_model->getByRating(),'testimn'=>$this->db->get('testimoni'),'txtbase'=>$this->db->get('textbase'),'blog'=>$this->db->get('blog')]);		
		$this->load->view('Frontend/component/footer');
		$obj = ['pengunjung' => $data_peng ,'tanggal' => date("y-m-d")];
		$this->db->insert('data_pengunjung', $obj);		
	}
	function prosesRegistrasiAnggota(){
		$config['upload_path'] = './upload/anggota';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['max_size']  = '35000';
		$config['max_width']  = '19024';
		$config['max_height']  = '19768';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('avatar-anggota')){
			echo $this->upload->display_errors();
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			echo "success";
		}
		$data = [
			'nama'     => $this->input->post('nama-new'),
			'username' => $this->input->post('user-new'),
			'password' => sha1($this->input->post('pass-new')),
			'email'    => $this->input->post('email-new'),
			'no_hp'    => $this->input->post('noHp-new'),
			'alamat'   => $this->input->post('alamat-new'),
			'foto' 	   => $this->upload->data('file_name'),
			'id_level' => 2,
			'status'   => 0,
		];
		$sndmsg = $this->Users_model->proses_daftr_anggota($data);
		if ($sndmsg == TRUE) {
			$regwork = $this->session->set_flashdata('regwork','<script>alert("Selamat Berhasil Registrasi !! Silahkan Untuk Login .. ")</script>');
		}
		redirect('Beranda',$regwork);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Frontend/Home.php */