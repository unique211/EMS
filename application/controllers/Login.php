<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// require APPPATH . 'libraries/REST_Controller.php';

class Login extends CI_Controller //CI_Controller 
{

	public function index()
	{
		$data['title']="login";


		$this->load->view('Login',$data);
	}
}



