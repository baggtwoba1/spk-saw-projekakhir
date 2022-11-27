<?php 
 
class Model_kriteria extends CI_Model{
	
	public $tabel = "saw_criterias";	

	public function getAll(){
		$this->db->select('*');
		$this->db->from($this->tabel);
		return $this->db->get(); 		
	}

	public function delete_kriteria($id){
		$this->db->delete($this->tabel, array('id_criteria' => $id));
	}

	public function insert($data){
		$query = $this->db->insert($this->tabel, $data);
		return $query;
	}
	
}