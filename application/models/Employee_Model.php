<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_Model extends CI_Model {


	# Select
	public function Select_Employee()
	{
		// $this->db->order_by('id', 'DESC');
		$query =  $this->db->get("emp");
		return $query->result_array();
	}
	

	

	# Add
	public function Employee_Add($data)
	{
		$result = $this->db->insert('emp', $data);
		//$MsgS = "Product Successfully Added";
		//$this->session->set_flashdata('MsgS',$MsgS);
		// echo json_encode($data);
		return $result;
	}	

	# Delete
	public function Delete_Employee($id)
	{
		$this->db->where('id', $id);
		$result = $this->db->delete('emp');
		$MsgS = "Employee Successfully Delete";
		$this->session->set_flashdata('MsgS',$MsgS);
		return $result;
	}

	public function Edit_Employee($id)
	{
		if($id) {
			$this->db->where('id', $id);
			$query =  $this->db->get("emp");
			return $query->row_array();
		// 	print_r($this->db->last_query()); 
		}

	}
	public function Employee_Update($data , $id)
	{
		$this->db->where('id', $id);
		$result = $this->db->update('emp', $data);
		// print_r($this->db->last_query()); 
		# return ($update == true) ? true : false;
	}	

	
	




	
			


	
}



