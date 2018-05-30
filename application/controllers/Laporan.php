<?php
	class Laporan extends CI_Controller
	{
		public function __construct(){
			parent::__construct();
			$this->load->model('ModelLaporan');
		}

		public function list_laporan(){
		$data = array(
			'body'           => 'Laporan/List', 
			'daftarLaporan'   => $this->ModelLaporan->list_Laporan()->result()
            
		);

			$this->load->view('Index', $data);
		}

	}
?>