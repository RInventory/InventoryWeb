<?php
	class ModelPetugas extends CI_Model{

		public function list_petugas(){
			return $this->db->get('login');
		}

		public function delete($username){
	        $this->db->where('username',$username);
			$this->db->delete('login');
    	}

    	public function edit_petugas($username){
    		$this->db->where('username',$username);
	 		$query = $this->db->get('login');
			 	if($query->num_rows() > 0)
			 	{
			 		$data = $query->row();
					$query->free_result(); 
			 	} else{
			 		$data = NULL;
			 	}
			 	return $data;
    	}

    	public function update($username,$data){
    		$this->db->where('username',$username);
			$this->db->update('login',$data);
    	}
	}
?>