<?php
	class ModelPetugas extends CI_Model{

		function list_petugas(){
			return $this->db->get('login');
		}

		public function delete($username){
        $this->db->where('username',$username);
		$this->db->delete('login');
    	}
	}
?>