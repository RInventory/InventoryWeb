<?php
	class ModelKategori extends CI_Model{
		function list_kategori(){
			return $this->db->get('kategori');
			
		}

		public function delete($id_kategori){
        $this->db->where('id_kategori',$id_kategori);
		$this->db->delete('kategori');
    	}

		function update($id_ktg){
        return $this->db->get_where('kategori', array('id_kategori'=>$id_ktg));
    	}
	}

?>