<?php 

class Dashboard_Model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function Count_Employee()
	{
	// 	$this->db->select('COUNT(*) as count_rows')->from('product')->where('is_active', '1'); 
		$this->db->select('COUNT(*) as count_rows')->from('emp'); 
		$query = $this->db->get(); 
		return  $query->row_array(); 
	}

	


	
	
	
}