<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
				
	}
	public function process_tmp()
	{
		$cek_anggt = [
			'username' => $this->input->post('username'),
			'password' => sha1($this->input->post('password')),
		];
		$process_agt = $this->Users_model->login_anggota('users',$cek_anggt);
		if ($process_agt->num_rows() > 0) {
			if ($process_agt == TRUE) {
				foreach ($process_agt->result() as $key) {
					$sess = array(

						'id_users' => $key->id_users,
						'email'    => $key->email,
						'nama'     => $key->nama,
						'foto'     => $key->foto,
						'username' => $key->username,
						'alamat'   => $key->alamat,
				// 		'no_hp'   => $key->no_hp,
						'id_level' => $key->id_level,
						'level'    => $key->level,
						'status'    => $key->status,
					);
				}
					$this->session->set_userdata( $sess );
			}
					$msg = $this->session->userdata('status');
				if ($msg == 0 ) {
					$this->session->sess_destroy();
					redirect('Beranda');
				}else if ($this->session->userdata('status') == 1 ){
					$level = $this->session->userdata('level');
					if ($level == "Anggota") {
						redirect('Beranda');
					}
				}
		}else{
			redirect('Beranda');
		}
	}
	public function CekUserss()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$getDb = $this->db->get_where('users', [
				'username' => $username,
				'password' => sha1($password),
				'id_level'=> 2])->result();

		if (empty($getDb)) {
			$msg['tidak_ada_msg'] = '<div class="alert alert-warning"><i class="fa fa-times"></i> Pastikan Username / Password Benar !!</div>';
			$msg['data'] = 0;
		}elseif ($this->db->get_where('users', [
					'username' => $username,
					'password' => sha1($password),
					'status'=> 0])->result()){
			$msg['data'] = 3;
			$msg['tidak_aktif_msg'] = '<div class="alert alert-warning"><i class="fa fa-times"></i> Akun Tersebut Tidak Aktif !!</div>';
		}else{
			$msg['data'] = 1;
			$msg['ada_msg'] = '<div class="alert alert-success ada-dataaaa"><i class="fa fa-check"></i> Congratulation!! Clik Ok ..</div>';
		}
		echo json_encode( $msg );

	}

	public function log_out()
	{
		$this->session->sess_destroy();
		redirect('Beranda');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Frontend/Login.php */