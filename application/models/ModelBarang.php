<?php
	class ModelBarang extends CI_Model{
		function list_barang(){
			return $this->db->get('barang');
			
		}

		function update($id){
        return $this->db->get_where('barang', array('id_barang'=>$id));
    	}
	}
?>