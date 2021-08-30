<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coming_soon extends CI_Controller {

	function __construct()
    {
        parent::__construct();
	}
	
	function render_view($data)
	{
		$this->template->load('template', $data); //Display Page
	}

	public function index()
	{
		$this->load->view('coming_soon.php');
	}

}
