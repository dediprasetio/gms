<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monitoring extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->model('Main_model', 'mainmodel');
	}
	
	function render_view($data)
	{
		$this->template->load('template', $data); //Display Page
	}

	public function index()
	{
			$data = array(
				'content' 		=> 'page/monitoring/monitoring_v',
				'breadcrumb' 	=> '<li class="breadcrumb-item font-weight-bold "><a class="black-text text-uppercase " href="#"><span class="mr-md-3 mr-2">Dashboard</span></a><i class="fa fa-angle-double-right " aria-hidden="true"></i></li>
									<li class="font-weight-bold ml-2"><a class="black-text text-uppercase active-2" href="#"><span>Power Monitoring</span></a></li>',
				'javascript_file'=> '<script src="'.base_url().'public/build/page/monitoring.js"></script>'
			);
			$this->render_view($data);
	}

}
