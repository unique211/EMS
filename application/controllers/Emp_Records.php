<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emp_Records extends CI_Controller {


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

		
		$data['Emp_Records'] = $this->Employee_Model->Select_Employee();
		$this->load->view('Emp_Records' , 	$data);
	}

	public function Delete_Employee($id)
	{

		echo $id = $this->input->post("id");
		
		$data = $this->Employee_Model->Delete_Employee($id);
		return  "1";
	}

	public function Edit_Employee($id)
	{
		// echo "a";

	// 	echo $id;
		
		$data['Edit_Emp'] = $this->Employee_Model->Edit_Employee($id);
		$this->load->view('Emp_Records_Edit' , 	$data);

		
	}


	



}
