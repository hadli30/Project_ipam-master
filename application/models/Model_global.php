<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_global extends CI_Model {

	function insertData($table,$data){
    	return $this->db->insert($table,$data);
    }
	
	public function get_data_table($table){
		 return $this->db->get($table);
	}	
	
	public function getAllData($table)
    {
        return $this->db->get($table)->result();
    }
	
    public function getSelectedwhere($table,$data)
    {
        return $this->db->get_where($table, $data);
    }
	
	function updateData($table,$data,$field_key)
    {
        return $this->db->update($table,$data,$field_key);		
    }
	
	function delete($table,$data)
    {
        $this->db->delete($table,$data);
    }
	
	function delete_global($table,$field,$kode){
		$this->db->where($field,$kode);
        return $this->db->delete($table);		
    }

}