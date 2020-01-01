<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller   // Admin_Controller
{
	function __construct() 
	{
		parent::__construct();
        
        # Load Auth_Model
        $this->load->model('Auth_Model');
		
		
		
	}

	public function LoginChk()
	{
		
			//	$this->input->post('password')
			$login =  $this->Auth_Model->Login_Chk($this->input->post('email'), md5($this->input->post('password')));
			if($login)
			{
				# print_r($login);
				# echo "login";
				# echo $login['a_id'];
				# echo $login['uroll_id'];
				# echo $login['name'];
				# echo $login['email'];
				# echo $login['password'];
				# echo $login['image'];
				# echo $login['is_active'];
				
				$Login_Sess_Array = array(
				
				"id"=>$login['id'],
				"fname"=>$login['fname'],
				"email"=>$login['email'],
				
				'logged_in' => TRUE
				);
				
				# print_r($Login_Sess_Array);
				
				$this->session->set_userdata($Login_Sess_Array);
           		redirect('Dashboard', 'refresh');
				
			}
			else
			{

		 $this->session->set_flashdata('error_msg', 'Wrong Email Or Password, Please Try Again');	
		 $this->load->view('Login' );
		// 	$data['error_msg'] = 'Wrong Email Or Password, Please Try Again.';
			
		//	$this->load->view('Login' , $data);   # Login.php  View Page 

		// 	$this->load->view('login_view' , $data);   # Login_View.php   
			// 	echo "die";
			//	 die();
				# echo "not";
			// 	redirect('admin', 'refresh');
		// 	redirect( base_url() , 'refresh');
			}		
			
			
		
		
		//$this->load->view('admin/AdminUser_List' );
	}
	
	
	public function Logout()
	{
		$this->session->sess_destroy();
		// redirect('admin', 'refresh');
		redirect( base_url() , 'refresh');
		
	}
	
				
}