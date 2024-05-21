<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend_Controller extends CI_Controller {

	public function __construct()
	{
		parent ::__construct();
		// if ($this->session->userdata('status') == 0 ) {
		// 	$this->session->sess_destroy();
		// 	redirect('Beranda');
		// }
	}

	public function header()
	{
		$header = $this->load->view('Frontend/component/header');
		return $header;
	}	
	public function kontent($name , $array = [])
	{
		$kontent = $this->load->view('Frontend/'.$name , $array);
		return $kontent;
	}	
	public function footer()
	{
		$footer = $this->load->view('Frontend/component/footer');
		return $footer;
	}
	public function load_view($name , $array=[])
	{
		$load_view = $this->load->view($name , $array);
		return $load_view;
	}

}

/* End of file Frontend_Controller.php */
/* Location: ./application/core/Frontend_Controller.php */