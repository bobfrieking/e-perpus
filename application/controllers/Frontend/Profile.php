<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends Frontend_Controller {

	public function index()
	{
		$data['users'] = $this->Users_model->editProfile_anggota()->row_array();
		$this->header();
		$this->kontent('Profile/Profile_view',$data);
		$this->kontent('Profile/Modal_view');
		$this->footer();
		$this->kontent('Profile/Js_view');
	}
	public function cekGantiPass()
	{
		$password = sha1($this->input->get('pass'));
		$data = $this->db->get_where('users', ['password' => $password,'id_users'=> $this->session->userdata('id_users')])->result();
		if (empty($data)) {
			echo 0;
		}else{
			echo 1;
		}
	}
	public function proses_edit_profile()
	{
		$config['upload_path'] = './upload/anggota/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['max_size']  = '19500';
		$foto_lama = $this->input->post('foto_lama');
		$thiS = $this->input;

		$this->load->library('upload', $config);
		
		if (!$this->upload->do_upload('foto_edit-profil')) {
			$foto = $foto_lama;
			$gtdb = $this->db->get_where('users', array('id_users'=>$this->session->userdata('id_users')))->row_array();
			$passNew = $gtdb['password'];
		}else{
			unlink('./upload/anggota/'.$foto_lama);
			$foto = $this->upload->data('file_name');
			$passNew = $thiS->post('password-update');
		}

		$nama  		= $thiS->post('nama-update');
		$username   = $thiS->post('username-update');
		$email 	 	= $thiS->post('email-update');
		$alamatt 	= $thiS->post('alamat-update');
		$no_hp 		= $thiS->post('no_hp-update');
		$Obj_update = [
			'foto' 			=> $foto,
			'nama'  		=> $nama,
			'username'  	=> $username,
			'email' 		=> $email,
			'no_hp' 		=> $no_hp,
			'password' 		=> sha1($passNew),
			'alamat' 		=> $alamatt,
		];
		$Send = $this->Users_model->Proses_update_profile_anggota($Obj_update);
		if ($Send == TRUE) {
			$msg['msg_update'] = '<script>alert("Ubah Profile Berhasil ..")</script>';
			$array = array(
				'foto' => $foto,
				'nama' => $nama,
				'email' => $email,
				'alamat' => $alamatt,
				'no_hp' => $no_hp,	
			);
			
			$this->session->set_userdata( $array );
		}else{
			$msg['msg_update'] = '<script>alert("Ubah Profile Gagal !!!")</script>';
		}
		$this->session->set_flashdata($msg);
		redirect('User_Profile');
	}
	public function gantiPasswordAnggota()
	{
		$passwrd = $_POST['pass'];

		$this->db->where('id_users', $this->session->userdata('id_users'));
		$iss = $this->db->update('users', ['password'=>sha1($passwrd)]);
		echo json_encode($iss);
	}

}

/* End of file Profile.php */
/* Location: ./application/controllers/Frontend/Profile.php */