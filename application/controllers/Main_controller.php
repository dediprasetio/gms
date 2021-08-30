<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main_controller extends CI_Controller
{

	public function check_login()
	{
        if(empty($this->session->userdata('authorized'))){
            redirect(base_url().'users/login');
        }
    }

    public function main_variable(){
		return 
            '<script>
                var base_url = "'.base_url().'";
                console.log(base_url);
            </script>';
    }
}