<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends Backend_Controller {

	public function index()
	{
		$this->header();
		$this->kontent('User/Profile_view');
		$this->footer();
		$this->kontent('User/Js_view');
	}
	public function profile_ubah_data()
	{
		$thiS = $this->input;
		$nama = $thiS->get('nama');
		$email = $thiS->get('email');
		$alamat = $thiS->get('alamat');

			$data = [
				'nama' => $nama,
				'email' => $email,
				'alamat' => $alamat,
			];
			$this->db->where('id_users', $this->session->userdata('id_users'));
		$Send = $this->db->update('users', $data);
		if ($Send == TRUE) {
			// Masukan Ke Session Terbaru
			$array = array(
				'nama' => $nama,
				'email' => $email,
				'alamat' => $alamat,
			);
			$this->session->set_userdata( $array );
			// ------------------>>>>>>>>

			$msg['berhasil'] = 'Data Berhasil Di Ubah ..';
		}else{
			$msg['Gagal'] = 'Data Gagal Di Ubah !!';
		}
		echo json_encode($msg);
	}
	public function cekPassLama()
	{
		$passwordLama = sha1($_GET['passCurrent']);
		$Send = $this->db->get_where('users', ['password'=>$passwordLama,'id_users'=>$this->session->userdata('id_users')])->result();
		if (empty($Send)) {
			$is_data['data'] = 0;
			$is_data['tidak_ada'] = '<small class="text-warning"><i>Password Tidak Ditemukan !!!</i></small>';
		}else{
			$is_data['data'] = 1;
			$is_data['ada'] = '<small class="text-success"><i>Password Benar ..</i></small>';
		}if ($Send > 0) {}else{
			$is_data['error'] = 'Gagal Kirim Data , Ada Kesalahan !!';
		}
		echo json_encode($is_data);
	}
	public function ubah_profile_pass()
	{
		$PassNew = $_POST['passwordBaru'];

		$this->db->where('id_users', $this->session->userdata('id_users'));
		$iff = $this->db->update('users', ['password' => sha1($PassNew)]);
		if ($iff == TRUE) {
			$is_data['success'] = 'Ganti Password Berhasil ..';
		}else{
			$is_data['error'] = 'Ganti Password Gagal !!';
		}
		echo json_encode($is_data);
	}
	public function ubah_profile_avatar()
	{
		$config['upload_path'] = './upload/petugas/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|';
		$config['max_size']  = '35000';
		
		$this->load->library('upload', $config);
		
		if ($this->upload->do_upload('profile')) {
			$foto = $this->upload->data('file_name');
			unlink('./upload/petugas/'.$this->session->userdata('foto'));
		}else{
			$data['error'] = "Error Upload Gambar";
		}
		$data = ['foto' => $foto];

		$this->db->where('id_users', $this->session->userdata('id_users'));
		$iff = $this->db->update('users', $data);
		if ($iff == TRUE) {
			$this->session->set_userdata('foto',$foto);
			$data['success'] = 'Ganti Avatar Berhasil';
		}else{
			$data['error'] = 'Ganti Avatar Gagal';
		}
		echo json_encode($data);
	}

}

/* End of file Profile.php */
/* Location: ./application/controllers/Backend/Profile.php */