<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {


	function __construct() 
	{
		parent::__construct();


		if(!$this->session->userdata('logged_in'))
		{
			redirect(	base_url() , 'refresh');
		}

		  # Load Model
		$this->load->model('Employee_Model');
	}


	

	public function index()
	{
		$this->load->view('Employee');
	}

	public function Employee_Add()
	{
		$data = array(
			"fname"=>$this->input->post("fname"),
			"lname"=>$this->input->post("lname"),
			"dob"=>$this->input->post("dob"),
			"gender"=>$this->input->post("gender"),
			"address"=>$this->input->post("address"),
			"email"=>$this->input->post("email"),
			"mobile"=>$this->input->post("mobile"),
			"designation"=>$this->input->post("designation"),
			"salary"=>$this->input->post("salary"),
			"username"=>$this->input->post("username"),
			//"password"=>$this->input->post("password"),
			'password' => md5($this->input->post('password')),
			"Date_OF_Join"=>date("Y/m/d"),
			"status"=>"1"
			);
			# print_r($data);
		
	
			$data = $this->Employee_Model->Employee_Add($data);


			redirect( base_url('Employee') ,  'refresh' ); 

			/*

			echo $data;
			return $data;
			*/
		}


		public function Employee_Update()
		{
		$data = array(
			"fname"=>$this->input->post("fname"),
			"lname"=>$this->input->post("lname"),
			"dob"=>$this->input->post("dob"),
			"gender"=>$this->input->post("gender"),
			"address"=>$this->input->post("address"),
			"email"=>$this->input->post("email"),
			"mobile"=>$this->input->post("mobile"),
			"designation"=>$this->input->post("designation"),
			"salary"=>$this->input->post("salary"),
			"username"=>$this->input->post("username"),
			// "password"=>$this->input->post("password"),
			"Date_OF_Join"=>date("Y/m/d"),
			"status"=>$this->input->post("status")
			);
			# print_r($data);
		
	
			echo $id = $this->input->post('id');

			$data = $this->Employee_Model->Employee_Update($data , $id );


			redirect( base_url('Emp_Records') ,  'refresh' ); 

			/*

			echo $data;
			return $data;
			*/
		}





	




}
