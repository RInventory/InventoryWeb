<?php

class user extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}

	// public function index(){
	// 	$data = array('body' => 'media.php');
	// 	$this->load->view('index', $data);
	// }

	public function tampil_list(){
		$data = array('body' => 'petugas/list');
		$this->load->view('index', $data);
	}
}
?>