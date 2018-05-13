<?php
	class ModelBarang extends CI_Model{
		function list_barang(){
			return $this->db->get('barang');
			
		}

		public function delete($id_barang){
        $this->db->where('id_barang',$id_barang);
		$this->db->delete('barang');
    	}

		function update($id){
        return $this->db->get_where('barang', array('id_barang'=>$id));
    	}
	}
?>