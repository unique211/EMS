<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report_Model extends CI_Model {


	# Select
	public function Select_Employee()
	{
		// $this->db->order_by('id', 'DESC');
		$query =  $this->db->get("emp");
		return $query->result_array();
	}
	

	public function Select_Employee_entry()
	{

	//	SELECT DISTINCT date FROM entry;


//	$query = $this->db->group_by('entry.entry,business_profile_details.Business_Id'); // ,
	/*

$this->db->distinct();

$this->db->select('date');

// $this->db->where('record', $record); 

$query = $this->db->get('entry');

*/


/*
$this->db->distinct();

$this->db->select('date');

// $this->db->where('record', $record); 


$this->db->from('entry');
// $query = $this->db->get('entry');


$this->db->join('emp', 'emp.id = entry.e_id');


$query = $this->db->get();
*/

			
	



		/*
		$query =  $this->db->get("entry");
		return $query->result_array();
	
		$query =  $this->db->get("emp");
		return $query->result_array();
		*/



/*
		$this->db->select('DISTINCT(Category)');
$query = $this->db->get('Books');
*/


	//	$this->db->select('DISTINCT(date)');
	/*
		$this->db->select('DISTINCT(e_id)');

		 $this->db->select('*');
		$this->db->from('entry');

		$this->db->join('emp', 'emp.id = entry.e_id');
		$query = $this->db->get();
		*/


		//$this->db->select('DISTINCT(date)');

		/*
		$this->db->select('DISTINCT(e_id),(date)');
		$this->db->from('entry');

		$this->db->join('emp', 'emp.id = entry.e_id');

		*/
				//$this->db->select('emp.id,entry.e_id');
				

	//	
	//

	
	//	$this->db->select('*');
	//	$this->db->from('emp');


		// $this->db->join('emp', 'emp.id = entry.e_id');

	//	$this->db->from('entry');

		//$query ="select distinct e_id, date from entry inner join emp on entry.e_id = emp.id";


		//$this->db->select('*');

		/*
		$this->db->select('DISTINCT(e_id),(date)');
		$this->db->from('entry');
	$this->db->join('emp', 'emp.id = entry.e_id');
	$query =	$this->db->get();
	*/

	// $this->db->select('DISTINCT(e_id), id');
// $this->db->group_by('e_id'); 
// $query = $this->db->get('entry');
	
		// return $query->result_array();

	//	$query ="SELECT DISTINCT(e_id),(date) `id`,`e_id` , `date` FROM `entry` GROUP BY `id`";

//	$this->db->select('*'); `id`,`e_id` , `date`
	//$query = $this->db->



	/*	
	in_time out_time
	$this->db->group_by('id'); 
	$this->db->select('DISTINCT(e_id),(date) , id , e_id');
	$this->db->from('entry');
	$query =  $this->db->get(`entry` );
	*/

	// SELECT DISTINCT(e_id), (date), `e_id`, `date`, `fname` FROM `entry`, `emp` WHERE `entry`.`e_id` = `emp`.`id`
	// $query ="SELECT DISTINCT (e_id),(date) ,`e_id` , `date` , `fname` FROM `entry` , `emp` WHERE entry.e_id= emp.id";

	// $this->db->group_by('id'); 


	// SELECT entry.e_id,emp.id FROM entry,emp WHERE entry.e_id=emp.id GROUP BY entry.date,entry.e_id


	$query ="SELECT entry.e_id ,emp.id,fname,lname,in_time,out_time,date FROM entry,emp WHERE entry.e_id=emp.id GROUP BY entry.date,entry.e_id ";

	$query = $this->db->query($query);

	// $result = $query->result_array();



	/*

	 	$this->db->where('entry.e_id =emp.id ' );

	// $this->db->join();
	$this->db->select('DISTINCT(e_id),(date) , e_id ,date ,in_time  , fname, lname   ');
	

	$this->db->from('entry');
	$query =  $this->db->get( 'emp'   );

	*/









	


		print_r($this->db->last_query());  
 	// die();
		return $query->result_array();


		/*

$this->db->join('table2', 'table1.col1 = table2.col1');
$this->db->where('table1.col1', 2);
		*/

	// SELECT DISTINCT (e_id),(date) ,`e_id` , `date` , `fname` FROM `entry` , `emp` WHERE entry.e_id= emp.id
	// SELECT DISTINCT (e_id),(date) ,`e_id` , `date` , `fname` FROM `entry` , `emp` WHERE entry.e_id= emp.id
	

	//	ok qry SELECT DISTINCT(e_id),(date) `id`,`e_id` , `date` FROM `entry` GROUP BY `id`
	// SELECT DISTINCT(e_id),(date) `id`,`e_id` , `date` FROM `entry` JOIN emp ON emp.id = entry.e_id
	// new qry
	// SELECT DISTINCT (e_id),(date) ,`e_id` , `date` , `fname` FROM `entry` , `emp` WHERE entry.e_id= emp.id

	//	die();
	//	$this->db->distinct('entry.e_id');
	//	$this->db->distinct('entry.date');
		
	//	 $query =  $this->db->get(" entry inner join emp on entry.e_id = emp.id");
	//	 return $query;
		//$

	//	$query = $this->db->get();
		
		//return $query->result_array();












	}

	

	

	




	
	




	
			


	
}



