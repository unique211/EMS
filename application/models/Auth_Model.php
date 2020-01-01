<?php 

class Auth_Model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function Login_Chk($email , $password)
	{
		$this->db->select('*');
		$this->db->from('emp');
		
		$this->db->where('email',$email); 
		$this->db->where('password',$password); 
		
		$query = $this->db->get();
		
		 if($query->num_rows() == 1) {
			 # echo "TRUE";
			 $result = $query->row_array();
			  return $result;	
			 # return true;	
			 #  echo $result['a_id'];
		}
		 else{
			 #  echo "false";
			  return false;	
		 }
		     # print_r($this->db->last_query()); 
	}

	
	
	
}