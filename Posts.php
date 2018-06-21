<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Posts extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
	//customer List
	public function post_list()
	{
		$this->db->select('*');
		$this->db->from('post');
		
		$this->db->order_by('id','desc');
		$this->db->limit('500');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}
	//Category Search Item
	public function post_search_item($id)
	{
		$this->db->select('*');
		$this->db->from('post');
		$this->db->where('id',$id);
		$this->db->limit('500');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}
	//Count customer
	public function post_entry($data)
	{
		
		
			$this->db->insert('post',$data);
		
	}
	//Retrieve customer Edit Data
	public function retrieve_post_editdata($id)
	{
		$this->db->select('*');
		$this->db->from('post');
		$this->db->where('id',$id);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}
	
	//Update Posts
	public function update_post($data,$id)
	{
		$this->db->where('id',$id);
		$this->db->update('post',$data);
		return true;
	}
	// Delete customer Item
	public function delete_post($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('post'); 	
		return true;
	}
	
}