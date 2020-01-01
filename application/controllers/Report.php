<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {


	function __construct() 
	{
		parent::__construct();


		if(!$this->session->userdata('logged_in'))
		{
			redirect(	base_url() , 'refresh');
		}


		  # Load Model
		 $this->load->model('Report_Model');
	}


	

	public function index()
	{
		
	
		$data["Select_Employee"] = $this->Report_Model->Select_Employee();  
		$data["Select_Employee_entry"] = $this->Report_Model->Select_Employee_entry();  

		
		$this->load->view('Report' , $data);
	}






	




}
