<?php
	class ModelBarang extends CI_Model{
		function list_barang(){
			return $this->db->get('barang');
			
		}
	}
?>