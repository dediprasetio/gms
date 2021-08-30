<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cost extends CI_Controller {

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
				'content' 		=> 'page/cost/cost_daily_v',
				'breadcrumb' 	=> '<li class="breadcrumb-item font-weight-bold "><a class="black-text text-uppercase " href="#"><span class="mr-md-3 mr-2">Dashboard</span></a><i class="fa fa-angle-double-right " aria-hidden="true"></i>
                                    </li><li class="breadcrumb-item font-weight-bold "><a class="black-text text-uppercase " href="#"><span class="mr-md-3 mr-2">Cost</span></a><i class="fa fa-angle-double-right " aria-hidden="true"></i></li>
									<li class="font-weight-bold ml-2"><a class="black-text text-uppercase active-2" href="#"><span>Daily</span></a></li>',
				'javascript_file'=> '<script src="'.base_url().'public/build/page/cost_daily.js"></script>'
			);
			$this->render_view($data);
	}

	public function weekly()
	{
			$data = array(
				'content' 		=> 'page/cost/cost_weekly_v',
				'breadcrumb' 	=> '<li class="breadcrumb-item font-weight-bold "><a class="black-text text-uppercase " href="#"><span class="mr-md-3 mr-2">Dashboard</span></a><i class="fa fa-angle-double-right " aria-hidden="true"></i>
                                    </li><li class="breadcrumb-item font-weight-bold "><a class="black-text text-uppercase " href="#"><span class="mr-md-3 mr-2">Cost</span></a><i class="fa fa-angle-double-right " aria-hidden="true"></i></li>
									<li class="font-weight-bold ml-2"><a class="black-text text-uppercase active-2" href="#"><span>Weekly</span></a></li>',
				'javascript_file'=> '<script src="'.base_url().'public/build/page/cost_weekly.js"></script>'
			);
			$this->render_view($data);
	}

	public function monthly()
	{
			$data = array(
				'content' 		=> 'page/cost/cost_monthly_v',
				'breadcrumb' 	=> '<li class="breadcrumb-item font-weight-bold "><a class="black-text text-uppercase " href="#"><span class="mr-md-3 mr-2">Dashboard</span></a><i class="fa fa-angle-double-right " aria-hidden="true"></i>
                                    </li><li class="breadcrumb-item font-weight-bold "><a class="black-text text-uppercase " href="#"><span class="mr-md-3 mr-2">Cost</span></a><i class="fa fa-angle-double-right " aria-hidden="true"></i></li>
									<li class="font-weight-bold ml-2"><a class="black-text text-uppercase active-2" href="#"><span>Monthly</span></a></li>',
				'javascript_file'=> '<script src="'.base_url().'public/build/page/cost_monthly.js"></script>'
			);
			$this->render_view($data);
	}

}
