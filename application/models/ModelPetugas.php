<?php
	class ModelPetugas extends CI_Model{
		function list_petugas(){
			return $this->db->get('login');
		}
	}
?>