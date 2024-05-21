<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend_Controller extends CI_Controller {

	public function __construct()
	{
		parent :: __construct();
		$user_id = $this->session->userdata('id_users');
		if (is_null($user_id)) {
			redirect('Admin/Login');
		}elseif ($this->session->userdata('level') == "Anggota") {
			redirect('Beranda');
		}
		elseif ($this->session->userdata('status') == 0) {
			$this->session->sess_destroy();
			redirect('Admin/Login');
		}
	}




	public function header()
	{
		$header = $this->load->view('Backend/component/header');
		return $header;
	}

	public function kontent($name,$array=[])
	{
		$kontent = $this->load->view('Backend/'.$name, $array);
		return $kontent;
	}

	public function footer()
	{
		$footer = $this->load->view('Backend/component/footer');
		return $footer;
	}
	public function pesan($name , $class)
	{
		$pesan = $this->session->set_flashdata('pesan','<div class="alert alert-' .$class. ' bg-' .$class. ' fade show text-white">' .$name. '</div>');
		return $pesan;
	}



}

/* End of file Backend_Controller.php */
/* Location: ./application/core/Backend_Controller.php */