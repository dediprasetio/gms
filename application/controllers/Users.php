<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include APPPATH . 'controllers/Main_controller.php';

class Users extends Main_controller {

	function __construct()
    {
        parent::__construct();
		$this->load->library('authentication');
		// $this->check_login();
		$this->main_variable();
	}

	public function index()
	{
			$this->load->view('login');
	}

	public function login()
	{
			$this->load->view('login');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('../users/login');
	}

}
