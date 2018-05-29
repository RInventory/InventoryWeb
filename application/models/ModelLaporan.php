<?php
	class ModelLaporan extends CI_Model{
		function list_masuk(){
			return $this->db->get('detail_masuk');
			
		}

		function list_keluar(){
			return $this->db->get('detail_keluar');
			
		}

		function list_retur(){
			return $this->db->get('detail_retur');
			
		}
	}

?>