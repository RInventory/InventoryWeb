<?php
	class Laporan extends CI_Controller
	{
		public function __construct(){
			parent::__construct();
			$this->load->model('ModelLaporan');
		}

		public function list_masuk(){
		$data = array(
			'body'           => 'Laporan/Masuk', 
			'daftarmasuk'   => $this->ModelLaporan->list_masuk()->result()
            
		);

			$this->load->view('Index', $data);
		}

		public function list_keluar(){
		$data = array(
			'body'           => 'Laporan/Keluar', 
			'daftarkeluar'   => $this->ModelLaporan->list_keluar()->result()
            
		);

			$this->load->view('Index', $data);
		}

		public function list_retur(){
		$data = array(
			'body'           => 'Laporan/Retur', 
			'daftarretur'   => $this->ModelLaporan->list_retur()->result()
            
		);

			$this->load->view('Index', $data);
		}



	}
?>