<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	public function index()
	{
		$db['app'] = $this->db->get_where('app', ['id_app'=>1])->row_array();
		$db['bg'] = $this->db->get_where('bg_login', ['id'=>1])->row_array();
		$this->load->view('Backend/User/Login_view',$db);
		$this->load->view('Backend/User/Js_view');
	}
	public function admin_login()
	{
		$cek = array(
			'email'       => $this->input->post('email'),
			'password'    => sha1($this->input->post('password')),
		);
		$process = $this->Users_model->login_admin('users',$cek);
		if ($process->num_rows() > 0) {
			if ($process == TRUE) {
				foreach ($process->result() as $key) {
					$sess = array(
						'id_users' => $key->id_users,
						'email'    => $key->email,
						'nama'     => $key->nama,
						'password' => $key->password,
						'foto'     => $key->foto,
						'alamat'   => $key->alamat,
				// 		'no_hp'    => $key->no_hp,
						'id_level' => $key->id_level,
						'level'    => $key->level,
						'status'   => $key->status,
 					);
				}
					$this->session->set_userdata( $sess );
			}
				$status = $this->session->userdata('status');
				if ( $status == 0 ) {
					if ($status > 0) {
						$msg['pesan'] = '<div class="alert alert-warning">Maaf Akun Tidak Aktif !!</div>';
					}
					$msg = $this->session->set_flashdata( $msg );
					redirect('Admin/Login',$msg);
				}else{
					$level = $this->session->userdata('level');
				if ($level == "Admin") {
					$msg = $this->session->set_flashdata('msg','<div class="alert alert-success bg-success text-white psnwelcome"> Selamat Datang Di Halaman Admin <b>'.$this->session->userdata('nama').'</b> ..</div>');
					redirect('Admin/Dashboard',$msg);
				}elseif ($level == "Anggota") {
					redirect('Beranda');
				}
			}
		}else{
			redirect('Admin/Login');
		}
	}
	public function user_log_out()
	{
		$this->session->sess_destroy();
		redirect('Beranda');
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Backend/Login.php */