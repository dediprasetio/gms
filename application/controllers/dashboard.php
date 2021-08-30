<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include APPPATH . 'controllers/Main_controller.php';

class Dashboard extends Main_controller {

	function __construct()
    {
        parent::__construct();
		$this->load->model('Main_model', 'mainmodel');
		$this->check_login();
	}
	
	function render_view($data)
	{
		$this->template->load('template', $data); //Display Page
	}

	public function index()
	{
			$data = array(
				'content' 		=> 'page/dashboard/dashboard_v',
				'breadcrumb' 	=> '<li class="font-weight-bold ml-2"><a class="black-text text-uppercase active-2" href="#"><span>DASHBOARD</span></a></li>',
				'javascript_file'=> '<script src="<?= base_url() ?>public/build/page/monitoring.js"></script>'
			);
			$this->render_view($data);
	}

}
