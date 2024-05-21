<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends Frontend_Controller {

	public function index()
	{
		$this->header();
		$this->kontent('Kontak/Kontak_view');
		$this->footer();
		$this->kontent('Kontak/Js_view');
	}
	public function insertKontak()
	{
		$data = array(
			'nama'  => $_POST['nama'],
			'email' => $_POST['email'],
			'no_hp' => $_POST['no_hp'],
			'pesan' => $_POST['pesan'],
		);
		$is = $this->db->insert('kontak', $data);
		if ($is == TRUE) {
			$isdata['success'] = '<div class="alert alert-success"> Data Berhasil Di Kirim</div>';
		}else{
			$isdata['error'] = '<div class="alert alert-danger"> Data Gagal Di Kirim</div>';
		}
		echo json_encode($isdata);
	}
	public function send_email()
	{
		// $config = [

		// 		'mailtype' => 'html',
		// 		'charset'  => 'utf-8',
		// 		'protocol' => 'smtp',
		// 		'smtp_host'=> 'armynooz@gmail.com',
		// 		'smtp_pass'=> 'arry020901',
		// 		'smtp_crypto' => 'ssl',
		// 		'smtp_port'=> 465,
		// 		'crlf' 	   => "\r\n",
		// 		'newline'  => "\r\n",


		// ];

		// $this->load->library('email');
		
		// $this->email->from('atore1458@email.com', 'SimiCod');
		// $this->email->to('atore1458@gmail.com.com');
		// // $this->email->cc('another@example.com');
		// // $this->email->bcc('and@another.com');
		
		// $this->email->subject('Kirim Coba - Coba');
		// $this->email->message('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  //       tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  //       quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  //       consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  //       cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  //       proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');
		
		// $this->email->send();
		
		// echo $this->email->print_debugger();
	}

}

/* End of file Kontak.php */
/* Location: ./application/controllers/Frontend/Kontak.php */