<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	function __construct() 
	{
		parent::__construct();

		if(!$this->session->userdata('logged_in'))
		{
			redirect(	base_url() , 'refresh');
		}

		$this->load->model("Dashboard_Model");





        
        # Load Model
		// $this->load->model('Employee_Model');
	}



	public function index()
	{
		$data["Count_Employee"] = $this->Dashboard_Model->Count_Employee();  
		$this->load->view('Dashboard', 	$data);
	}
}

